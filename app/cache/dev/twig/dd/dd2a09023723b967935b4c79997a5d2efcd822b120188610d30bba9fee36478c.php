<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_651bfd4cd6091ae2657b0cb55351c1d2ebe3e7189178b7184073ff3e63c56e81 extends Twig_Template
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
        $__internal_50039293d033d14ebeb12472870078077dc405df71523920a6bf453ec3ee9e3b = $this->env->getExtension("native_profiler");
        $__internal_50039293d033d14ebeb12472870078077dc405df71523920a6bf453ec3ee9e3b->enter($__internal_50039293d033d14ebeb12472870078077dc405df71523920a6bf453ec3ee9e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_50039293d033d14ebeb12472870078077dc405df71523920a6bf453ec3ee9e3b->leave($__internal_50039293d033d14ebeb12472870078077dc405df71523920a6bf453ec3ee9e3b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
