<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_93d25cb52a38443e066d97e10d83864f742225f33f71d5d0ed149e1f3f4e45c6 extends Twig_Template
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
        $__internal_5e7a24023d2b00a8ab0af7cb73e8795ba4d49633eb54156827b98ac3c23ff47b = $this->env->getExtension("native_profiler");
        $__internal_5e7a24023d2b00a8ab0af7cb73e8795ba4d49633eb54156827b98ac3c23ff47b->enter($__internal_5e7a24023d2b00a8ab0af7cb73e8795ba4d49633eb54156827b98ac3c23ff47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5e7a24023d2b00a8ab0af7cb73e8795ba4d49633eb54156827b98ac3c23ff47b->leave($__internal_5e7a24023d2b00a8ab0af7cb73e8795ba4d49633eb54156827b98ac3c23ff47b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
