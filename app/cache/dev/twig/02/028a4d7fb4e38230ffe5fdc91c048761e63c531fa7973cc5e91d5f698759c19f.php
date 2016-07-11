<?php

/* organization/index.html.twig */
class __TwigTemplate_74489ee646fa61ae1bfe8f708a9107b2bad71d4fae0e22e95b40b8256d3881a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/index.html.twig", 1);
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
        $__internal_70c42240f4e94274c7fd0ed7f93bdb346a579f8ecbe4b3c78f05982e1c789880 = $this->env->getExtension("native_profiler");
        $__internal_70c42240f4e94274c7fd0ed7f93bdb346a579f8ecbe4b3c78f05982e1c789880->enter($__internal_70c42240f4e94274c7fd0ed7f93bdb346a579f8ecbe4b3c78f05982e1c789880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70c42240f4e94274c7fd0ed7f93bdb346a579f8ecbe4b3c78f05982e1c789880->leave($__internal_70c42240f4e94274c7fd0ed7f93bdb346a579f8ecbe4b3c78f05982e1c789880_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_33cf0fed452d10f4923f21862262d31191665a33929dc57ab692aa02dc2b9f41 = $this->env->getExtension("native_profiler");
        $__internal_33cf0fed452d10f4923f21862262d31191665a33929dc57ab692aa02dc2b9f41->enter($__internal_33cf0fed452d10f4923f21862262d31191665a33929dc57ab692aa02dc2b9f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_33cf0fed452d10f4923f21862262d31191665a33929dc57ab692aa02dc2b9f41->leave($__internal_33cf0fed452d10f4923f21862262d31191665a33929dc57ab692aa02dc2b9f41_prof);

    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3cc9c3160816bbe86da6a9a26ba096329ff6867b65705ede2868ff48b098e3e2 = $this->env->getExtension("native_profiler");
        $__internal_3cc9c3160816bbe86da6a9a26ba096329ff6867b65705ede2868ff48b098e3e2->enter($__internal_3cc9c3160816bbe86da6a9a26ba096329ff6867b65705ede2868ff48b098e3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 15
        echo "
";
        
        $__internal_3cc9c3160816bbe86da6a9a26ba096329ff6867b65705ede2868ff48b098e3e2->leave($__internal_3cc9c3160816bbe86da6a9a26ba096329ff6867b65705ede2868ff48b098e3e2_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba22ba3a27d37b4b1107f53793bb8422ecbeb2ed64b25553e93b314f04cd432c = $this->env->getExtension("native_profiler");
        $__internal_ba22ba3a27d37b4b1107f53793bb8422ecbeb2ed64b25553e93b314f04cd432c->enter($__internal_ba22ba3a27d37b4b1107f53793bb8422ecbeb2ed64b25553e93b314f04cd432c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "
";
        // line 20
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_ba22ba3a27d37b4b1107f53793bb8422ecbeb2ed64b25553e93b314f04cd432c->leave($__internal_ba22ba3a27d37b4b1107f53793bb8422ecbeb2ed64b25553e93b314f04cd432c_prof);

    }

    public function getTemplateName()
    {
        return "organization/index.html.twig";
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
