<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sites/default/themes/vmarc/templates/page.html.twig */
class __TwigTemplate_af2e5f7e2d5b85146704ef856b7a58e7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "﻿";
        // line 53
        echo "<div class=\"container-main\">
    <header class=\"main\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"flex-container\">
                    ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_links", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"header-main\">
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"/\">
                        <span class=\"logo-wrapper\">
                            <span class=\"logo\">
                                <img src=\"/sites/default/files/vmarc-logo-vertical.png?v3\" alt=\"V-Marc\">
                            </span>
                        </span>
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                        ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo " 
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class=\"main\">
        <section class=\"page-face\">
            ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_face", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
        </section>
        <section class=\"content-default\">
            <div class=\"container\">
                ";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "
            </div>
        </section>
    </main>
    <footer class='main'>
        <div class=\"footer-navbar\">
            <div class=\"container\">
                <div class=\"d-flex\">
                    <div class=\"footer-logo-container\">
                        <div class=\"logo\">
                            <img src=\"";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 99, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 99, $this->source)), "html", null, true);
        echo "/images/v-marc_logo.png?v1\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"footer-nav\">
                        ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-details\">
            <div class=\"container\">
                <div class=\"footer-cols\">
                    <div class=\"col-main\">
                        ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_links", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
                    </div>
                    
                    <div class=\"col-sub\">
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t<div class=\"title\">Registered Office</div>
\t\t\t\t\t\t\tPlot No. 3, 4, 18 &amp; 20 A,<br />
\t\t\t\t\t\t\tSector – IIDC, SIDCUL,<br />
\t\t\t\t\t\t\tHaridwar, Uttarakhand – 249403<br/><br/>
\t\t\t\t\t\t\t<strong>Phone</strong>: 01334-239638<br/>
\t\t\t\t\t\t\t<strong>Customer Support</strong>: 70555 21808<br/>
\t\t\t\t\t\t\t<strong>Email</strong>: info@v-marc.in
\t\t\t\t\t\t</address>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sub\">
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t<div class=\"title\">Sales Office</div>
\t\t\t\t\t\t\t203, Aditya Complex,<br />
\t\t\t\t\t\t\tLocal Shopping Centre,<br />
\t\t\t\t\t\t\tSavita Vihar, Delhi – 110092.<br/><br />
\t\t\t\t\t\t\t<strong>Phone</strong>: 011-43025843<br/>
\t\t\t\t\t\t\t<strong>Email</strong>: sales@v-marc.in
\t\t\t\t\t\t</address>
\t\t\t\t\t</div>
                </div>
                <div class=\"policy\">©V-MARC India Limited. All Rights Reserved.</div>
            </div>
        </div>
    </footer>
\t<a href=\"#top\" class=\"scrollTop\"><i class=\"fa-solid fa-arrow-up\"></i></a>
</div>

<script type=\"text/javascript\">
//jQuery(document).ready(function(){
\tjQuery(window).scroll(function () {
        /*
\t\tif(jQuery(this).scrollTop() >= 40){
\t\t\tjQuery('.header-top').addClass('hide');
\t\t}else{
\t\t\tjQuery('.header-top').removeClass('hide');
\t\t}
        */
\t\tif(jQuery(this).scrollTop() > 200){
\t\t\tjQuery('.scrollTop').addClass('show');
\t\t}else{
\t\t\tjQuery('.scrollTop').removeClass('show');
\t\t}
\t});
\tjQuery(\"a[href='#top']\").click(function() {
  \t\tjQuery(\"html, body\").animate({ scrollTop: 0 }, \"slow\");
  \t\treturn false;
\t});
//})
</script>";
    }

    public function getTemplateName()
    {
        return "sites/default/themes/vmarc/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 112,  108 => 103,  101 => 99,  88 => 89,  81 => 85,  70 => 77,  48 => 58,  41 => 53,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/themes/vmarc/templates/page.html.twig", "/home1/vmarcindia/public_html/sites/default/themes/vmarc/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
