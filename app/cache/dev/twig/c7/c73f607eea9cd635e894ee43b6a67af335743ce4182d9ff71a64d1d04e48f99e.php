<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0ffdf0bb18edfe307d5452034d947bcc1226b3be599744b401eed59c706c37b7 extends Twig_Template
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
        $__internal_4da099da3407fe5f27b31d6c1743ccde40baf7d139f2aa4e8630fb9cf038da59 = $this->env->getExtension("native_profiler");
        $__internal_4da099da3407fe5f27b31d6c1743ccde40baf7d139f2aa4e8630fb9cf038da59->enter($__internal_4da099da3407fe5f27b31d6c1743ccde40baf7d139f2aa4e8630fb9cf038da59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4da099da3407fe5f27b31d6c1743ccde40baf7d139f2aa4e8630fb9cf038da59->leave($__internal_4da099da3407fe5f27b31d6c1743ccde40baf7d139f2aa4e8630fb9cf038da59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
