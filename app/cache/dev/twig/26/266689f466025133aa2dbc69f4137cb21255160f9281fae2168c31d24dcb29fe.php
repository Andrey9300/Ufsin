<?php

/* :otchet:issledovanie.html.twig */
class __TwigTemplate_5ff8714ac9fe6ed2be69875c4c2d68b530ef24674aedf70b960efbebd8ef5515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet:issledovanie.html.twig", 1);
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
        $__internal_0be635ea16625351e21eaffc5822fb8e9080f23ef18b1df6854584623acfee70 = $this->env->getExtension("native_profiler");
        $__internal_0be635ea16625351e21eaffc5822fb8e9080f23ef18b1df6854584623acfee70->enter($__internal_0be635ea16625351e21eaffc5822fb8e9080f23ef18b1df6854584623acfee70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet:issledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be635ea16625351e21eaffc5822fb8e9080f23ef18b1df6854584623acfee70->leave($__internal_0be635ea16625351e21eaffc5822fb8e9080f23ef18b1df6854584623acfee70_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c1753dfcd11bf96d730a57007be75727a9640fe65fa967f9ff6b164c9b2a9f21 = $this->env->getExtension("native_profiler");
        $__internal_c1753dfcd11bf96d730a57007be75727a9640fe65fa967f9ff6b164c9b2a9f21->enter($__internal_c1753dfcd11bf96d730a57007be75727a9640fe65fa967f9ff6b164c9b2a9f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/issledovanie_menu.html", ":otchet:issledovanie.html.twig", 5)->display($context);
        // line 6
        echo "
";
        
        $__internal_c1753dfcd11bf96d730a57007be75727a9640fe65fa967f9ff6b164c9b2a9f21->leave($__internal_c1753dfcd11bf96d730a57007be75727a9640fe65fa967f9ff6b164c9b2a9f21_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_aad6b37697132a4509480725a9f7d538faad077e684b4f91abccaba26230324a = $this->env->getExtension("native_profiler");
        $__internal_aad6b37697132a4509480725a9f7d538faad077e684b4f91abccaba26230324a->enter($__internal_aad6b37697132a4509480725a9f7d538faad077e684b4f91abccaba26230324a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "
";
        
        $__internal_aad6b37697132a4509480725a9f7d538faad077e684b4f91abccaba26230324a->leave($__internal_aad6b37697132a4509480725a9f7d538faad077e684b4f91abccaba26230324a_prof);

    }

    public function getTemplateName()
    {
        return ":otchet:issledovanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 9,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/issledovanie_menu.html' %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
