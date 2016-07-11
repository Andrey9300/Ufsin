<?php

/* :organization:index.html.twig */
class __TwigTemplate_29e1af24efeca691628b0c9d3f7a9f893f3ffd91f18f18c20f3b0480fa4cb146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8412675f948c5c64f14fb87b2ba4341aba497cb1c15835b85b6e434917918d9 = $this->env->getExtension("native_profiler");
        $__internal_c8412675f948c5c64f14fb87b2ba4341aba497cb1c15835b85b6e434917918d9->enter($__internal_c8412675f948c5c64f14fb87b2ba4341aba497cb1c15835b85b6e434917918d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8412675f948c5c64f14fb87b2ba4341aba497cb1c15835b85b6e434917918d9->leave($__internal_c8412675f948c5c64f14fb87b2ba4341aba497cb1c15835b85b6e434917918d9_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_af5c4938d4391a31112d6c5abed23197a6a0dd609411bc82fa65068c3ad43224 = $this->env->getExtension("native_profiler");
        $__internal_af5c4938d4391a31112d6c5abed23197a6a0dd609411bc82fa65068c3ad43224->enter($__internal_af5c4938d4391a31112d6c5abed23197a6a0dd609411bc82fa65068c3ad43224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <h1>Security</h1>
            </div>
        </div>
    </div>
";
        
        $__internal_af5c4938d4391a31112d6c5abed23197a6a0dd609411bc82fa65068c3ad43224->leave($__internal_af5c4938d4391a31112d6c5abed23197a6a0dd609411bc82fa65068c3ad43224_prof);

    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a2358bef1fbecce3007eb4eff2ac5b892682bd787d8aee53bc50a6d1019f5618 = $this->env->getExtension("native_profiler");
        $__internal_a2358bef1fbecce3007eb4eff2ac5b892682bd787d8aee53bc50a6d1019f5618->enter($__internal_a2358bef1fbecce3007eb4eff2ac5b892682bd787d8aee53bc50a6d1019f5618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 15
        echo "
";
        
        $__internal_a2358bef1fbecce3007eb4eff2ac5b892682bd787d8aee53bc50a6d1019f5618->leave($__internal_a2358bef1fbecce3007eb4eff2ac5b892682bd787d8aee53bc50a6d1019f5618_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4e90cfb6fe43bb457728f3d1e746028b111a0f08c40bcf0d4592072cfb1f8f1 = $this->env->getExtension("native_profiler");
        $__internal_a4e90cfb6fe43bb457728f3d1e746028b111a0f08c40bcf0d4592072cfb1f8f1->enter($__internal_a4e90cfb6fe43bb457728f3d1e746028b111a0f08c40bcf0d4592072cfb1f8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "
";
        // line 20
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_a4e90cfb6fe43bb457728f3d1e746028b111a0f08c40bcf0d4592072cfb1f8f1->leave($__internal_a4e90cfb6fe43bb457728f3d1e746028b111a0f08c40bcf0d4592072cfb1f8f1_prof);

    }

    public function getTemplateName()
    {
        return ":organization:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  77 => 19,  71 => 18,  63 => 15,  57 => 14,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-5">*/
/*             <div class="well">*/
/*                 <h1>Security</h1>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
