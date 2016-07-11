<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_4fc2e9a325ff0184fc058a1a1f810f8308b58c0351af430f1777683c82349b8c extends Twig_Template
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
        $__internal_e98d58636379e72e2789750a22e87777ebcc0a0f430b67be55d53cebc07198ae = $this->env->getExtension("native_profiler");
        $__internal_e98d58636379e72e2789750a22e87777ebcc0a0f430b67be55d53cebc07198ae->enter($__internal_e98d58636379e72e2789750a22e87777ebcc0a0f430b67be55d53cebc07198ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e98d58636379e72e2789750a22e87777ebcc0a0f430b67be55d53cebc07198ae->leave($__internal_e98d58636379e72e2789750a22e87777ebcc0a0f430b67be55d53cebc07198ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
