<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e7d470ece4629ecb9908ecfa0f939d093c0625c1a86458ddd677071edb5d51d1 extends Twig_Template
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
        $__internal_38499285181ed14564430e7147dbe3fe7df79c5e69f6569724ff5babf560efdc = $this->env->getExtension("native_profiler");
        $__internal_38499285181ed14564430e7147dbe3fe7df79c5e69f6569724ff5babf560efdc->enter($__internal_38499285181ed14564430e7147dbe3fe7df79c5e69f6569724ff5babf560efdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_38499285181ed14564430e7147dbe3fe7df79c5e69f6569724ff5babf560efdc->leave($__internal_38499285181ed14564430e7147dbe3fe7df79c5e69f6569724ff5babf560efdc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
