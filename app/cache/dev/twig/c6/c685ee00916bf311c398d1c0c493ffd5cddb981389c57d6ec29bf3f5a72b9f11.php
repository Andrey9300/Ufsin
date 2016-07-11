<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_dde5b24f374be19fab2843b4a3736a15d974f847883ed06cf4814a951d90ba15 extends Twig_Template
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
        $__internal_271a11af02aca1e77fe4ecf6fb73b5e54758c6a1035c2876a8d9efe2c92f50f4 = $this->env->getExtension("native_profiler");
        $__internal_271a11af02aca1e77fe4ecf6fb73b5e54758c6a1035c2876a8d9efe2c92f50f4->enter($__internal_271a11af02aca1e77fe4ecf6fb73b5e54758c6a1035c2876a8d9efe2c92f50f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_271a11af02aca1e77fe4ecf6fb73b5e54758c6a1035c2876a8d9efe2c92f50f4->leave($__internal_271a11af02aca1e77fe4ecf6fb73b5e54758c6a1035c2876a8d9efe2c92f50f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
