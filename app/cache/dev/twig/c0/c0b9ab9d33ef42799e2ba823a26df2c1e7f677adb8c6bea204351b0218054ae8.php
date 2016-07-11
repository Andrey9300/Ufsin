<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c5d49b53de3e0c933c9e00d402e80223267292e07bc3a98a937b5928cde85a2b extends Twig_Template
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
        $__internal_f3ccb5909cf496dbdcfea8c4ecced74cc111c0ee486ce5a12b16c0db384d58ce = $this->env->getExtension("native_profiler");
        $__internal_f3ccb5909cf496dbdcfea8c4ecced74cc111c0ee486ce5a12b16c0db384d58ce->enter($__internal_f3ccb5909cf496dbdcfea8c4ecced74cc111c0ee486ce5a12b16c0db384d58ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f3ccb5909cf496dbdcfea8c4ecced74cc111c0ee486ce5a12b16c0db384d58ce->leave($__internal_f3ccb5909cf496dbdcfea8c4ecced74cc111c0ee486ce5a12b16c0db384d58ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
