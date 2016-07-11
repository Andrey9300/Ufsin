<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_93daa69d8794ef9096332f065091127192fc27901d8f57d1cfc3ba797943ad22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8769a582bca7b772a0eca5702c48c330736d9eb9a15e094bf24e7007093c90c6 = $this->env->getExtension("native_profiler");
        $__internal_8769a582bca7b772a0eca5702c48c330736d9eb9a15e094bf24e7007093c90c6->enter($__internal_8769a582bca7b772a0eca5702c48c330736d9eb9a15e094bf24e7007093c90c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8769a582bca7b772a0eca5702c48c330736d9eb9a15e094bf24e7007093c90c6->leave($__internal_8769a582bca7b772a0eca5702c48c330736d9eb9a15e094bf24e7007093c90c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e82abec774dfdc6bb1bb3dae1719fe6c03ae3a7c48b444323121be0d7e29d8c = $this->env->getExtension("native_profiler");
        $__internal_3e82abec774dfdc6bb1bb3dae1719fe6c03ae3a7c48b444323121be0d7e29d8c->enter($__internal_3e82abec774dfdc6bb1bb3dae1719fe6c03ae3a7c48b444323121be0d7e29d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3e82abec774dfdc6bb1bb3dae1719fe6c03ae3a7c48b444323121be0d7e29d8c->leave($__internal_3e82abec774dfdc6bb1bb3dae1719fe6c03ae3a7c48b444323121be0d7e29d8c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57b32e1102d4c9fe51601b63fc3f4e2e1412fc32d1bf1b5a0f671b416f8b27d6 = $this->env->getExtension("native_profiler");
        $__internal_57b32e1102d4c9fe51601b63fc3f4e2e1412fc32d1bf1b5a0f671b416f8b27d6->enter($__internal_57b32e1102d4c9fe51601b63fc3f4e2e1412fc32d1bf1b5a0f671b416f8b27d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_57b32e1102d4c9fe51601b63fc3f4e2e1412fc32d1bf1b5a0f671b416f8b27d6->leave($__internal_57b32e1102d4c9fe51601b63fc3f4e2e1412fc32d1bf1b5a0f671b416f8b27d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a12678849348501f1f8e7383cf78aaf4997aaff893dfd15f1a1b768a7e6d737 = $this->env->getExtension("native_profiler");
        $__internal_9a12678849348501f1f8e7383cf78aaf4997aaff893dfd15f1a1b768a7e6d737->enter($__internal_9a12678849348501f1f8e7383cf78aaf4997aaff893dfd15f1a1b768a7e6d737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a12678849348501f1f8e7383cf78aaf4997aaff893dfd15f1a1b768a7e6d737->leave($__internal_9a12678849348501f1f8e7383cf78aaf4997aaff893dfd15f1a1b768a7e6d737_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
