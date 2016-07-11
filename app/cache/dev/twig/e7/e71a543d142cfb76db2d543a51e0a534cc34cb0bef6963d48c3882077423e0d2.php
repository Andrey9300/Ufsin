<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6d6aaf976b0519906a0fe7a09eb6aade9eb53f9dc804dce10721b1d42dfa98da extends Twig_Template
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
        $__internal_9e7ec65fa45d87506708b05e6293feb4ce3ca6e2745d351cc1e877a199ab8509 = $this->env->getExtension("native_profiler");
        $__internal_9e7ec65fa45d87506708b05e6293feb4ce3ca6e2745d351cc1e877a199ab8509->enter($__internal_9e7ec65fa45d87506708b05e6293feb4ce3ca6e2745d351cc1e877a199ab8509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_9e7ec65fa45d87506708b05e6293feb4ce3ca6e2745d351cc1e877a199ab8509->leave($__internal_9e7ec65fa45d87506708b05e6293feb4ce3ca6e2745d351cc1e877a199ab8509_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
