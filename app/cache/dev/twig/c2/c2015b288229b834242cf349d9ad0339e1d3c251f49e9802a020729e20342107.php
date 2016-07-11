<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8ac9fb4b1f9c6282d48fe8fb015ac15c4f2188b0d3451f0ded6884afea7f863c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11f96bf059ea3098cd0a344c137b9e2c47ff7e6da96f6d0de9a8429551eedd3a = $this->env->getExtension("native_profiler");
        $__internal_11f96bf059ea3098cd0a344c137b9e2c47ff7e6da96f6d0de9a8429551eedd3a->enter($__internal_11f96bf059ea3098cd0a344c137b9e2c47ff7e6da96f6d0de9a8429551eedd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f96bf059ea3098cd0a344c137b9e2c47ff7e6da96f6d0de9a8429551eedd3a->leave($__internal_11f96bf059ea3098cd0a344c137b9e2c47ff7e6da96f6d0de9a8429551eedd3a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5cf2837e7a9f97f43c5d28885712fd52e79da13b37ec6e8417ef467268acc9a4 = $this->env->getExtension("native_profiler");
        $__internal_5cf2837e7a9f97f43c5d28885712fd52e79da13b37ec6e8417ef467268acc9a4->enter($__internal_5cf2837e7a9f97f43c5d28885712fd52e79da13b37ec6e8417ef467268acc9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5cf2837e7a9f97f43c5d28885712fd52e79da13b37ec6e8417ef467268acc9a4->leave($__internal_5cf2837e7a9f97f43c5d28885712fd52e79da13b37ec6e8417ef467268acc9a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2e1c1090dbc9d8d2c5e0f0a259a75ecc1cf87425cae1450afc02e508bceadfc = $this->env->getExtension("native_profiler");
        $__internal_e2e1c1090dbc9d8d2c5e0f0a259a75ecc1cf87425cae1450afc02e508bceadfc->enter($__internal_e2e1c1090dbc9d8d2c5e0f0a259a75ecc1cf87425cae1450afc02e508bceadfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2e1c1090dbc9d8d2c5e0f0a259a75ecc1cf87425cae1450afc02e508bceadfc->leave($__internal_e2e1c1090dbc9d8d2c5e0f0a259a75ecc1cf87425cae1450afc02e508bceadfc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c6076eb065822acb4df6cfd4a4f3a74b0201a5efcc75937f08559d0184f9188 = $this->env->getExtension("native_profiler");
        $__internal_4c6076eb065822acb4df6cfd4a4f3a74b0201a5efcc75937f08559d0184f9188->enter($__internal_4c6076eb065822acb4df6cfd4a4f3a74b0201a5efcc75937f08559d0184f9188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c6076eb065822acb4df6cfd4a4f3a74b0201a5efcc75937f08559d0184f9188->leave($__internal_4c6076eb065822acb4df6cfd4a4f3a74b0201a5efcc75937f08559d0184f9188_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
