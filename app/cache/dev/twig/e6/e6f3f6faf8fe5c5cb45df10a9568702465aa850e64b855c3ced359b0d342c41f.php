<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3eb0acf247c333e4809d7baf3c463caf55a73e2f776111f1892d1beaec349989 extends Twig_Template
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
        $__internal_6330e7eab63119dc6a65ae637da92b729def73cee8d540ea46f061874adb34ff = $this->env->getExtension("native_profiler");
        $__internal_6330e7eab63119dc6a65ae637da92b729def73cee8d540ea46f061874adb34ff->enter($__internal_6330e7eab63119dc6a65ae637da92b729def73cee8d540ea46f061874adb34ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6330e7eab63119dc6a65ae637da92b729def73cee8d540ea46f061874adb34ff->leave($__internal_6330e7eab63119dc6a65ae637da92b729def73cee8d540ea46f061874adb34ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
