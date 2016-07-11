<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_dcc63ac5c8833d52a4956ee2a3d988259e0f7d2e8a5df225e747b360c0ecb6ac extends Twig_Template
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
        $__internal_69f33e69876f4a0023072db6275a1aacc81c4800105e319cef1bb6f65ec8a93a = $this->env->getExtension("native_profiler");
        $__internal_69f33e69876f4a0023072db6275a1aacc81c4800105e319cef1bb6f65ec8a93a->enter($__internal_69f33e69876f4a0023072db6275a1aacc81c4800105e319cef1bb6f65ec8a93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_69f33e69876f4a0023072db6275a1aacc81c4800105e319cef1bb6f65ec8a93a->leave($__internal_69f33e69876f4a0023072db6275a1aacc81c4800105e319cef1bb6f65ec8a93a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
