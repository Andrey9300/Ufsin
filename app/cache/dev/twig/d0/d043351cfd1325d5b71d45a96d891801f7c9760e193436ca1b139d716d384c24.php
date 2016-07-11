<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d782314549524f26975c6e3b28508098db77f951653f3eaad7801413f88986df extends Twig_Template
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
        $__internal_6cd0d3d40ea2500af3c88c01ca846e3732bf73c9863344f04f91216b7943ed51 = $this->env->getExtension("native_profiler");
        $__internal_6cd0d3d40ea2500af3c88c01ca846e3732bf73c9863344f04f91216b7943ed51->enter($__internal_6cd0d3d40ea2500af3c88c01ca846e3732bf73c9863344f04f91216b7943ed51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_6cd0d3d40ea2500af3c88c01ca846e3732bf73c9863344f04f91216b7943ed51->leave($__internal_6cd0d3d40ea2500af3c88c01ca846e3732bf73c9863344f04f91216b7943ed51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
