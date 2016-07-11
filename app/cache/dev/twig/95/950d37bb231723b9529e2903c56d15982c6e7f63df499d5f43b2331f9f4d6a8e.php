<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e9e44eb261387f9c112916a8b7acb0a1db2381fefae40c2b1d5781b7c74d2ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_7a20447dead2f56f5c1be2ce2571ceb95fc3d2ba03c97a8476bb31e17b800a63 = $this->env->getExtension("native_profiler");
        $__internal_7a20447dead2f56f5c1be2ce2571ceb95fc3d2ba03c97a8476bb31e17b800a63->enter($__internal_7a20447dead2f56f5c1be2ce2571ceb95fc3d2ba03c97a8476bb31e17b800a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a20447dead2f56f5c1be2ce2571ceb95fc3d2ba03c97a8476bb31e17b800a63->leave($__internal_7a20447dead2f56f5c1be2ce2571ceb95fc3d2ba03c97a8476bb31e17b800a63_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3480c620ad1cd5dc359f94d949e9c086791f45cf4e52cc08ee04dd31397ddb0 = $this->env->getExtension("native_profiler");
        $__internal_d3480c620ad1cd5dc359f94d949e9c086791f45cf4e52cc08ee04dd31397ddb0->enter($__internal_d3480c620ad1cd5dc359f94d949e9c086791f45cf4e52cc08ee04dd31397ddb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d3480c620ad1cd5dc359f94d949e9c086791f45cf4e52cc08ee04dd31397ddb0->leave($__internal_d3480c620ad1cd5dc359f94d949e9c086791f45cf4e52cc08ee04dd31397ddb0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c0d5c55b839111aab5b12194f5a41a52214c5ad8da20f680f9b1a3de6748862 = $this->env->getExtension("native_profiler");
        $__internal_9c0d5c55b839111aab5b12194f5a41a52214c5ad8da20f680f9b1a3de6748862->enter($__internal_9c0d5c55b839111aab5b12194f5a41a52214c5ad8da20f680f9b1a3de6748862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c0d5c55b839111aab5b12194f5a41a52214c5ad8da20f680f9b1a3de6748862->leave($__internal_9c0d5c55b839111aab5b12194f5a41a52214c5ad8da20f680f9b1a3de6748862_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
