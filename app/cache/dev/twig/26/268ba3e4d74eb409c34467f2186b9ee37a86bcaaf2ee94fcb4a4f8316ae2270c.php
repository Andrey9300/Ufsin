<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_30cefef813fedd0200b939154b382acba6803f030c8c70be29a9c5c881080fee extends Twig_Template
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
        $__internal_add4c517405ee4911473e6927a13d0d25e4de5e5a9b59595006168567b173cb9 = $this->env->getExtension("native_profiler");
        $__internal_add4c517405ee4911473e6927a13d0d25e4de5e5a9b59595006168567b173cb9->enter($__internal_add4c517405ee4911473e6927a13d0d25e4de5e5a9b59595006168567b173cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_add4c517405ee4911473e6927a13d0d25e4de5e5a9b59595006168567b173cb9->leave($__internal_add4c517405ee4911473e6927a13d0d25e4de5e5a9b59595006168567b173cb9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
