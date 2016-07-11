<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_1f1b33de931a599830d62a24d8228c8d0d4dd9966a102cc9279e76fa57c16194 extends Twig_Template
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
        $__internal_c5566031430865a434107a8cc5c597f9f3c39ded0a9d15ed78ef8c65490ee711 = $this->env->getExtension("native_profiler");
        $__internal_c5566031430865a434107a8cc5c597f9f3c39ded0a9d15ed78ef8c65490ee711->enter($__internal_c5566031430865a434107a8cc5c597f9f3c39ded0a9d15ed78ef8c65490ee711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c5566031430865a434107a8cc5c597f9f3c39ded0a9d15ed78ef8c65490ee711->leave($__internal_c5566031430865a434107a8cc5c597f9f3c39ded0a9d15ed78ef8c65490ee711_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
