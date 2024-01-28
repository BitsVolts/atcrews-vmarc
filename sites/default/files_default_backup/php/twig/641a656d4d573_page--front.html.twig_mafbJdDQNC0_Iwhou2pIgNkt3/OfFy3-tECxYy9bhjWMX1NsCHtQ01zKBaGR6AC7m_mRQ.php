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

/* sites/default/themes/vmarc/templates/page--front.html.twig */
class __TwigTemplate_a668c5657e071c7f6624837d3a25c792 extends \Twig\Template
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
        echo "﻿<div class=\"container-main front-page\">
\t<header class=\"main\">
\t\t<div class=\"header-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"flex-container\">
\t\t\t\t\t";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_links", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-main\">
\t\t\t<nav class=\"navbar static navbar-expand-lg navbar-light bg-light\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t\t\t\t<span class=\"logo-wrapper\">
\t\t\t\t\t\t\t<span class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"/sites/default/files/vmarc-logo-vertical.png?v3\" alt=\"V-Marc\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t<main class=\"main\">
\t\t<section class=\"face-slider\">
\t\t\t";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_slider", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
\t\t</section>
\t\t<section class=\"vmarc-info\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<div class=\"col-image\">
\t\t\t\t\t\t<div class=\"image-container\">
\t\t\t\t\t\t\t<img src=\"/sites/default/files/images/hand_shake.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h2 class=\"title\">About<br/>V-Marc</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-text\">
\t\t\t\t\t\t<div class=\"col-header\">
\t\t\t\t\t\t\t<div class=\"title-sub\">The Global Leader in Wires &amp; Cables</div>
\t\t\t\t\t\t\t<h1 class=\"title\">
\t\t\t\t\t\t\t\tConnect With Trust, V-Marc Reliable and Consistent Industrial Quality Wires &amp; Cables
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-body\">
\t\t\t\t\t\t\t<p>V-Marc is one of the global leader in providing reliable and consistent quality of products, we enable our clients to achieve more and outperform their competitors and stay ahead of the innovation curve. The growth of the latter is the first stepping stone towards the growth of the company and hence customer’s satisfaction is its prime objective.</p>

\t\t\t\t\t\t\t<p>V-Marc has earned the trust and reputation in India by winning the customer’s confidence.</p>
\t\t\t\t\t\t\t<a href=\"/about/company\" class=\"btn btn-lg btn-outline-danger\">More About Us
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"product-info\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<div class=\"col-text\">
\t\t\t\t\t\t<div class=\"col-header\">
\t\t\t\t\t\t\t<div class=\"title-sub\">Our Featured Products</div>
\t\t\t\t\t\t\t<h2 class=\"col-title\">Check out the best quality cables and wires in India</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-body\">
\t\t\t\t\t\t\t<p>V-Marc Manufacturing Unit is well equiped with modern plant and machinery and have complete testing equiptment backed up with well qualified and trained personnel.</p>
\t\t\t\t\t\t\t<p>V-Marc 3 Core Flat Cables are used by quality conscious electrical contractors and recommended by leading consultants, Builders for projects, domestic, industrial & agricultural use.</p>
\t\t\t\t\t\t\t<a href=\"/products\" class=\"btn btn-lg btn-outline-danger\">Our Products
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-image\">
\t\t\t\t\t\t";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "category_list", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<section class=\"product-slider\">
\t\t\t<div class=\"bg\"><img src=\"/sites/default/files/bg-lights.jpg\" alt=\"\"/></div>
\t\t\t<div class=\"section-title\">
\t\t\t\t<h2 class=\"title\">Our Upcoming Products</h2>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"upcoming-product-slider\">
\t\t\t\t\t<div class=\"slide-item\">
\t\t\t\t\t\t<div class=\"image\"><img src=\"/sites/default/files/up-01.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"caption\">Switches</div>
\t\t\t\t\t\t<p class=\"description\">A switch <strong>responds to an external force to mechanically change an
electric signal.</strong> Switches are used to turn electric circuits ON and OFF and to switch
electric circuits.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slide-item\">
\t\t\t\t\t\t<div class=\"image\"><img src=\"/sites/default/files/up-02.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"caption\">Distribution Board</div>
\t\t\t\t\t\t<p class=\"description\">A distribution board is a component of an electricity supply system
that <strong>divides an electrical power feed into subsidiary circuits while providing a
protective fuse or circuit breaker for each circuit in a common enclosure.</strong> </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slide-item\">
\t\t\t\t\t\t<div class=\"image\"><img src=\"/sites/default/files/up-03.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"caption\">RCCB</div>
\t\t\t\t\t\t<p class=\"description\">A Residual Current Circuit Breaker is a current sensing device, which can
automatically measure and disconnect the circuit whenever a fault occurs in the
connected circuit or the current exceeds the rated sensitivity.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slide-item\">
\t\t\t\t\t\t<div class=\"image\"><img src=\"/sites/default/files/up-04.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"caption\">MCB</div>
\t\t\t\t\t\t<p class=\"description\">MCB stands for Miniature Circuit Breaker. It automatically switches OFF electrical
circuit during any abnormal condition in the electrical network such as overload &amp; short
circuit conditions.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"home-dealers\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<div class=\"col-content\">
\t\t\t\t\t\t<div class=\"col-header\">
\t\t\t\t\t\t\t<div class=\"title-sub\">Locate Us</div>
\t\t\t\t\t\t\t<h2 class=\"title\">Find the closest V-Marc Cable and Wires Branch Office and Contact Information</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-body\">
\t\t\t\t\t\t\t<p>V-Marc Manufacturing Unit is well equipped with modern plant machinery and have complete testing equipment backed up with well qualified and trained personnel.</p>

\t\t\t\t\t\t\t<a href=\"/contact\" class=\"btn btn-lg\">Contact Us</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-image\">
\t\t\t\t\t\t<div class=\"dealer-map\">
\t\t\t\t\t\t\t<img src=\"";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 143, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 143, $this->source)), "html", null, true);
        echo "/images/dealer-map.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "block_bottom", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo "
\t</main>
\t<footer class='main'>
\t\t<div class=\"footer-navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<div class=\"footer-logo-container\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<img src=\"";
        // line 159
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 159, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 159, $this->source)), "html", null, true);
        echo "/images/v-marc_logo.png?v1\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer-nav\">
\t\t\t\t\t\t";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-details\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer-cols\">
\t\t\t\t\t<div class=\"col-main\">
\t\t\t\t\t\t";
        // line 172
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_links", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sub\">
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
\t\t\t\t</div>
\t\t\t\t<div class=\"policy\">©V-MARC India Limited. All Rights Reserved.</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<a href=\"#top\" class=\"scrollTop\">
\t\t<i class=\"fa-solid fa-arrow-up\"></i>
\t</a>
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
\tjQuery(document).ready(function () {
\t\tjQuery('.upcoming-product-slider').slick({
\t\t\tautoplay: true,
\t\t\tautoplaySpeed: 1000, 
\t\t\tcenterMode: true, 
\t\t\tcenterPadding: '0px', 
\t\t\tslidesToShow: 3
\t\t});
\t});
//})
</script>
";
    }

    public function getTemplateName()
    {
        return "sites/default/themes/vmarc/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 172,  224 => 163,  217 => 159,  206 => 151,  195 => 143,  130 => 81,  78 => 32,  67 => 24,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/themes/vmarc/templates/page--front.html.twig", "/home1/vmarcindia/public_html/sites/default/themes/vmarc/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
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
