<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_860c9b9a749723515e5dbe76aa83a27827ae43d76e8d6ef2549e1b9e26b10b1b extends Twig_Template
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
        $__internal_e63ddb478fa480100b2247b7cfa52b7b7090faf846fdd86be44dc679a38342c3 = $this->env->getExtension("native_profiler");
        $__internal_e63ddb478fa480100b2247b7cfa52b7b7090faf846fdd86be44dc679a38342c3->enter($__internal_e63ddb478fa480100b2247b7cfa52b7b7090faf846fdd86be44dc679a38342c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e63ddb478fa480100b2247b7cfa52b7b7090faf846fdd86be44dc679a38342c3->leave($__internal_e63ddb478fa480100b2247b7cfa52b7b7090faf846fdd86be44dc679a38342c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
