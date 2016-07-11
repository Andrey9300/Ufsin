<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e38205574b21f09c759b98d7b9e336bc219cd92a770ba6039ad68f7674ed2f1f extends Twig_Template
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
        $__internal_8777e804d202f1bae7ee9edd7f5f764d2c21493d91ad3660edaa8db37f296b22 = $this->env->getExtension("native_profiler");
        $__internal_8777e804d202f1bae7ee9edd7f5f764d2c21493d91ad3660edaa8db37f296b22->enter($__internal_8777e804d202f1bae7ee9edd7f5f764d2c21493d91ad3660edaa8db37f296b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8777e804d202f1bae7ee9edd7f5f764d2c21493d91ad3660edaa8db37f296b22->leave($__internal_8777e804d202f1bae7ee9edd7f5f764d2c21493d91ad3660edaa8db37f296b22_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
