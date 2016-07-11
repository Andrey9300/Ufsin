<?php

/* :main:index.html.twig */
class __TwigTemplate_68bcbc2e0323ff733f1e104b8e87ec94d61574eb4217aac0416ad501e76b9d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":main:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_101cbcd5969d1799676cbe1cf6945fcb7b8f23bae439a4d65022d14456ac884d = $this->env->getExtension("native_profiler");
        $__internal_101cbcd5969d1799676cbe1cf6945fcb7b8f23bae439a4d65022d14456ac884d->enter($__internal_101cbcd5969d1799676cbe1cf6945fcb7b8f23bae439a4d65022d14456ac884d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_101cbcd5969d1799676cbe1cf6945fcb7b8f23bae439a4d65022d14456ac884d->leave($__internal_101cbcd5969d1799676cbe1cf6945fcb7b8f23bae439a4d65022d14456ac884d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a5cc957700d9b310ec04bd2620a2d3f2fb408ac4b406c935fde3cdb306b48991 = $this->env->getExtension("native_profiler");
        $__internal_a5cc957700d9b310ec04bd2620a2d3f2fb408ac4b406c935fde3cdb306b48991->enter($__internal_a5cc957700d9b310ec04bd2620a2d3f2fb408ac4b406c935fde3cdb306b48991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Главная</h1>
</div>

";
        
        $__internal_a5cc957700d9b310ec04bd2620a2d3f2fb408ac4b406c935fde3cdb306b48991->leave($__internal_a5cc957700d9b310ec04bd2620a2d3f2fb408ac4b406c935fde3cdb306b48991_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_274104ee2f2bc577f87dab74fe1ab829c8a12ef8ebf707dcf8b78079a2e21cdb = $this->env->getExtension("native_profiler");
        $__internal_274104ee2f2bc577f87dab74fe1ab829c8a12ef8ebf707dcf8b78079a2e21cdb->enter($__internal_274104ee2f2bc577f87dab74fe1ab829c8a12ef8ebf707dcf8b78079a2e21cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "
";
        
        $__internal_274104ee2f2bc577f87dab74fe1ab829c8a12ef8ebf707dcf8b78079a2e21cdb->leave($__internal_274104ee2f2bc577f87dab74fe1ab829c8a12ef8ebf707dcf8b78079a2e21cdb_prof);

    }

    public function getTemplateName()
    {
        return ":main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Главная</h1>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
