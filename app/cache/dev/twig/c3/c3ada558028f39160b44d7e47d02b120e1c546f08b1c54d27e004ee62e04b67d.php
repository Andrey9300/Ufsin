<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_cf0aeed6b9b12b00df779e4d7f7dee9f89d85980b419fb5fd6ff987ab2a22e4a extends Twig_Template
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
        $__internal_5b1425d84c2eef84dd9fa4f9b58f1f62883dda4e48e2e1a872350f5b8d6619f1 = $this->env->getExtension("native_profiler");
        $__internal_5b1425d84c2eef84dd9fa4f9b58f1f62883dda4e48e2e1a872350f5b8d6619f1->enter($__internal_5b1425d84c2eef84dd9fa4f9b58f1f62883dda4e48e2e1a872350f5b8d6619f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5b1425d84c2eef84dd9fa4f9b58f1f62883dda4e48e2e1a872350f5b8d6619f1->leave($__internal_5b1425d84c2eef84dd9fa4f9b58f1f62883dda4e48e2e1a872350f5b8d6619f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
