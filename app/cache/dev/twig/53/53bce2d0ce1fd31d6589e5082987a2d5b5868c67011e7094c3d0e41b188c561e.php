<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f350e32a1aa4bb697918cac9210173b588436f092981664be2a0dea158c85b4d extends Twig_Template
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
        $__internal_6c57074c7a23d449993ef2d8bb99c6d90d7ef37baa794a28d30ac428887b1cef = $this->env->getExtension("native_profiler");
        $__internal_6c57074c7a23d449993ef2d8bb99c6d90d7ef37baa794a28d30ac428887b1cef->enter($__internal_6c57074c7a23d449993ef2d8bb99c6d90d7ef37baa794a28d30ac428887b1cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6c57074c7a23d449993ef2d8bb99c6d90d7ef37baa794a28d30ac428887b1cef->leave($__internal_6c57074c7a23d449993ef2d8bb99c6d90d7ef37baa794a28d30ac428887b1cef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
