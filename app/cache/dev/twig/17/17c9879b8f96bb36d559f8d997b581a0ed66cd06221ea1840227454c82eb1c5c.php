<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cee596443ba63ee436353d4555cfcf923237dc8891a320bccee902c90e9d1ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2485c5a3775372573d917136e1245128d107d393107621bea9a6e75796c950e = $this->env->getExtension("native_profiler");
        $__internal_e2485c5a3775372573d917136e1245128d107d393107621bea9a6e75796c950e->enter($__internal_e2485c5a3775372573d917136e1245128d107d393107621bea9a6e75796c950e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2485c5a3775372573d917136e1245128d107d393107621bea9a6e75796c950e->leave($__internal_e2485c5a3775372573d917136e1245128d107d393107621bea9a6e75796c950e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ba041baa7a88892bbb506d648257b191f1a32b960db693832af330fd12e3c9f = $this->env->getExtension("native_profiler");
        $__internal_3ba041baa7a88892bbb506d648257b191f1a32b960db693832af330fd12e3c9f->enter($__internal_3ba041baa7a88892bbb506d648257b191f1a32b960db693832af330fd12e3c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3ba041baa7a88892bbb506d648257b191f1a32b960db693832af330fd12e3c9f->leave($__internal_3ba041baa7a88892bbb506d648257b191f1a32b960db693832af330fd12e3c9f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f772e8dbe6df674a2553375d296c844ac4ab19677cec4b6dacbda0ef4ce92a7 = $this->env->getExtension("native_profiler");
        $__internal_0f772e8dbe6df674a2553375d296c844ac4ab19677cec4b6dacbda0ef4ce92a7->enter($__internal_0f772e8dbe6df674a2553375d296c844ac4ab19677cec4b6dacbda0ef4ce92a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0f772e8dbe6df674a2553375d296c844ac4ab19677cec4b6dacbda0ef4ce92a7->leave($__internal_0f772e8dbe6df674a2553375d296c844ac4ab19677cec4b6dacbda0ef4ce92a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
