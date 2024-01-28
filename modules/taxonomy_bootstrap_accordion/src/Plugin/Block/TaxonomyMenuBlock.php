<?php

namespace Drupal\taxonomy_bootstrap_accordion\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Path\CurrentPathStack;
use Drupal\path_alias\AliasManagerInterface;

/**
 * Provides a 'TaxonomyMenuBlock' block.
 *
 * @Block(
 *  id = "taxonomy_menu_block",
 *  admin_label = @Translation("Taxonomy Bootstrap Accordion"),
 *  category = @Translation("Menus")
 * )
 */
class TaxonomyMenuBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The plugin_id.
   *
   * @var pluginId
   */
  protected $pluginId;

  /**
   * The plugin implementation definition.
   *
   * @var pluginDefinition
   */
  protected $pluginDefinition;

  /**
   * Configuration information passed into the plugin.
   *
   * When using an interface like
   * \Drupal\Component\Plugin\ConfigurablePluginInterface, this is where the
   * configuration should be stored.
   *
   * Plugin configuration is optional, so plugin implementations must provide
   * their own setters and getters.
   *
   * @var configuration
   */
  protected $configuration;

  /**
   * The entity type manager interface.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The current path stack.
   *
   * @var \Drupal\Core\Path\CurrentPathStack
   */
  private $currentPathStack;

  /**
   * The alias manager interface.
   *
   * @var \Drupal\path_alias\AliasManagerInterface
   */
  private $aliasManager;

  /**
   * Constructs a TaxonomyMenuBlock object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity type manager interface.
   * @param \Drupal\Core\Path\CurrentPathStack $currentPathStack
   *   The current path stack.
   * @param \Drupal\path_alias\AliasManagerInterface $aliasManager
   *   The alias manager interface.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, EntityTypeManagerInterface $entityTypeManager, CurrentPathStack $currentPathStack, AliasManagerInterface $aliasManager) {
    $this->configuration = $configuration;
    $this->pluginId = $plugin_id;
    $this->pluginDefinition = $plugin_definition;
    $this->entityTypeManager = $entityTypeManager;
    $this->currentPathStack = $currentPathStack;
    $this->aliasManager = $aliasManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static($configuration, $plugin_id, $plugin_definition,
      $container->get('entity_type.manager'),
      $container->get('path.current'),
      $container->get('path_alias.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'vocabs' => [],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['vocabs'] = $form_state->getValue('vocabs');
  }

  /**
   * Implements blockForm().
   */
  public function blockForm($form, FormStateInterface $formState) {
    $vocabs = Vocabulary::loadMultiple();
    $weighted = [];

    foreach ($vocabs as $machine => $vocab) {
      // Place them in an array, in case of a weight collision.
      $weight = $vocab->get('weight');
      $weighted[$weight][] = $vocab->get('vid');
    }

    ksort($weighted, SORT_NUMERIC);

    // Flatten the weighted arrays.
    $flattened = [];
    foreach ($weighted as $weight => $items) {
      foreach ($items as $vid) {
        $flattened[] = $vid;
      }
    }

    $weighted = $flattened;
    $options = [];

    foreach ($weighted as $vid) {
      $vocab = Vocabulary::load($vid);
      $options[$vid] = $vocab->get('name');
    }
    $form['vocabs'] = [
      "#type" => "checkboxes",
      "#default_value" => $this->configuration['vocabs'],
      "#options" => $options,
      "#title" => $this->t("Vocabularies to Include"),
    ];
    return $form;
  }

  /**
   * Expects the machine name of the vocabulary item.
   */
  public function groupVocab($vocabulary) {
    // These 2 vars have nothing to do with config.
    $vocabs = $this->entityTypeManager->getStorage('taxonomy_vocabulary')->loadMultiple();
    $vocab = $vocabs[$vocabulary];

    // Begin new.
    $terms = $this->entityTypeManager->getStorage('taxonomy_term')->loadTree($vocabulary);

    $term_links = [];

    $current_path = $this->currentPathStack->getPath();
    $alias_path = $this->aliasManager->getAliasByPath($current_path);
    $open = '';
    $active = '';
    $expanded = 'false';
    foreach ($terms as $term) {
      $apply_active = FALSE;
      $tid = $term->tid;
      $name = $term->name;
      $url = Url::fromRoute('entity.taxonomy_term.canonical', ['taxonomy_term' => $tid], ['absolute' => FALSE]);
      $path = $url->toString();
      if ($path == $alias_path) {
        $apply_active = TRUE;
        $open = 'in';
        $expanded = 'true';
        $active = 'active-trail active';
      }
      $classes = $apply_active ? [$active] : [];
      $class = implode(" ", $classes);
      $term_links[$tid] = [
        'css' => $class,
        'tid' => $tid,
        'text' => $name,
      ];
    }

    $group = [
      'heading' => $active,
      'abutton' => [
        'css' => $active,
        'expanded' => $expanded,
        'href' => $vocabulary,
        'text' => $vocab,
      ],
      'bodyclass' => $open,
      'links' => $term_links,
    ];
    return $group;
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $vocabs = $this->configuration['vocabs'];
    $vocabslist = Vocabulary::loadMultiple();
    $build = [];
    if ($vocabs) {
      $groups = [];
      foreach ($vocabs as $vid => $value) {
        $vocabname = $vocabslist[$vid]->get('name');
        if ($value) {
          $groups["$vocabname"] = $this->groupVocab($vid);
        }
      }
    }
    else {
      $groups = [];
    }
    $build['#theme'] = 'accordion-group';
    $build['#taxonomy'] = $groups;
    $build['#cache']['contexts'] = [
      'url',
    ];

    return $build;
  }

}
