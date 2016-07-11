<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f684ea56c43f5f1fd5efa7a46358b71b42c8b5c0cc3f62e4539c8f7ce0adbbe8 extends Twig_Template
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
        $__internal_0d061e7ebfd278063b8f920c8e37bda53a17d409d3816b342118362d49bb1e17 = $this->env->getExtension("native_profiler");
        $__internal_0d061e7ebfd278063b8f920c8e37bda53a17d409d3816b342118362d49bb1e17->enter($__internal_0d061e7ebfd278063b8f920c8e37bda53a17d409d3816b342118362d49bb1e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0d061e7ebfd278063b8f920c8e37bda53a17d409d3816b342118362d49bb1e17->leave($__internal_0d061e7ebfd278063b8f920c8e37bda53a17d409d3816b342118362d49bb1e17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
