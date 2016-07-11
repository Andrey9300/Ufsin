<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_cb3d6a2791381f5f5c2235e00985be0b529318cfa76c84bb5bcfa729b2fb57f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c65cbff8def6ab401423632d1dfc7393b5cd9aa29f1ab5861e8f176c220e1bf4 = $this->env->getExtension("native_profiler");
        $__internal_c65cbff8def6ab401423632d1dfc7393b5cd9aa29f1ab5861e8f176c220e1bf4->enter($__internal_c65cbff8def6ab401423632d1dfc7393b5cd9aa29f1ab5861e8f176c220e1bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c65cbff8def6ab401423632d1dfc7393b5cd9aa29f1ab5861e8f176c220e1bf4->leave($__internal_c65cbff8def6ab401423632d1dfc7393b5cd9aa29f1ab5861e8f176c220e1bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
