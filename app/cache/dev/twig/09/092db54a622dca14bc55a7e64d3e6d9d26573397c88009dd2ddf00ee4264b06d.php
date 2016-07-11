<?php

/* :otchet:index.html.twig */
class __TwigTemplate_e1a27791d50a6718b17ce861403d5791a9952e1ed4b88e971e0eff530d456674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6949dea8ec7122a08f427ccd83d23c372316f94235a93b1dfbeb418346506de = $this->env->getExtension("native_profiler");
        $__internal_d6949dea8ec7122a08f427ccd83d23c372316f94235a93b1dfbeb418346506de->enter($__internal_d6949dea8ec7122a08f427ccd83d23c372316f94235a93b1dfbeb418346506de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6949dea8ec7122a08f427ccd83d23c372316f94235a93b1dfbeb418346506de->leave($__internal_d6949dea8ec7122a08f427ccd83d23c372316f94235a93b1dfbeb418346506de_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_81d6e35e7ed31941ae01923acc08aaa2a98536c0c07c45086ac71cc4ac8215eb = $this->env->getExtension("native_profiler");
        $__internal_81d6e35e7ed31941ae01923acc08aaa2a98536c0c07c45086ac71cc4ac8215eb->enter($__internal_81d6e35e7ed31941ae01923acc08aaa2a98536c0c07c45086ac71cc4ac8215eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <div id=\"main\" class=\"col-sm-9\">
        <h1>Все отчеты</h1>
    </div>
</div>

";
        
        $__internal_81d6e35e7ed31941ae01923acc08aaa2a98536c0c07c45086ac71cc4ac8215eb->leave($__internal_81d6e35e7ed31941ae01923acc08aaa2a98536c0c07c45086ac71cc4ac8215eb_prof);

    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1c84294335e42a9dce2bd07c69d172029d85807ca732836b81eb1e217267d967 = $this->env->getExtension("native_profiler");
        $__internal_1c84294335e42a9dce2bd07c69d172029d85807ca732836b81eb1e217267d967->enter($__internal_1c84294335e42a9dce2bd07c69d172029d85807ca732836b81eb1e217267d967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 14
        echo "
";
        
        $__internal_1c84294335e42a9dce2bd07c69d172029d85807ca732836b81eb1e217267d967->leave($__internal_1c84294335e42a9dce2bd07c69d172029d85807ca732836b81eb1e217267d967_prof);

    }

    public function getTemplateName()
    {
        return ":otchet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 13,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <div id="main" class="col-sm-9">*/
/*         <h1>Все отчеты</h1>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
