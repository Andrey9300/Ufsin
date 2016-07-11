<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ad2b5007b038e1851b821aaca1aee5b698c4a4162723f06f6449d15409498473 extends Twig_Template
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
        $__internal_0e1f9e987cf7ca9d9774863644b6c9f59f93ecbe7db5f28bd3cd54819dca62db = $this->env->getExtension("native_profiler");
        $__internal_0e1f9e987cf7ca9d9774863644b6c9f59f93ecbe7db5f28bd3cd54819dca62db->enter($__internal_0e1f9e987cf7ca9d9774863644b6c9f59f93ecbe7db5f28bd3cd54819dca62db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0e1f9e987cf7ca9d9774863644b6c9f59f93ecbe7db5f28bd3cd54819dca62db->leave($__internal_0e1f9e987cf7ca9d9774863644b6c9f59f93ecbe7db5f28bd3cd54819dca62db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
