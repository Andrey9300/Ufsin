<?php

/* otchet/index.html.twig */
class __TwigTemplate_49296d8c3872576ad427234e0ff207ceaeac3a72a036a713d938362fa11a389f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/index.html.twig", 1);
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
        $__internal_62cfab5082e6cf9458101f38dbaba13f110ff54472ae638fe5bdb40bb4dbc3bf = $this->env->getExtension("native_profiler");
        $__internal_62cfab5082e6cf9458101f38dbaba13f110ff54472ae638fe5bdb40bb4dbc3bf->enter($__internal_62cfab5082e6cf9458101f38dbaba13f110ff54472ae638fe5bdb40bb4dbc3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62cfab5082e6cf9458101f38dbaba13f110ff54472ae638fe5bdb40bb4dbc3bf->leave($__internal_62cfab5082e6cf9458101f38dbaba13f110ff54472ae638fe5bdb40bb4dbc3bf_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d4b5f1ec0b23400261f88cce35345de13eff6d415ec88f43c2f5e91849c55a32 = $this->env->getExtension("native_profiler");
        $__internal_d4b5f1ec0b23400261f88cce35345de13eff6d415ec88f43c2f5e91849c55a32->enter($__internal_d4b5f1ec0b23400261f88cce35345de13eff6d415ec88f43c2f5e91849c55a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <div id=\"main\" class=\"col-sm-9\">
        <h1>Все отчеты</h1>
    </div>
</div>

";
        
        $__internal_d4b5f1ec0b23400261f88cce35345de13eff6d415ec88f43c2f5e91849c55a32->leave($__internal_d4b5f1ec0b23400261f88cce35345de13eff6d415ec88f43c2f5e91849c55a32_prof);

    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_99957f53c7b848ea11cc0178b1a6ad81fcd741949735c2bd53ad967cf7a55262 = $this->env->getExtension("native_profiler");
        $__internal_99957f53c7b848ea11cc0178b1a6ad81fcd741949735c2bd53ad967cf7a55262->enter($__internal_99957f53c7b848ea11cc0178b1a6ad81fcd741949735c2bd53ad967cf7a55262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 14
        echo "
";
        
        $__internal_99957f53c7b848ea11cc0178b1a6ad81fcd741949735c2bd53ad967cf7a55262->leave($__internal_99957f53c7b848ea11cc0178b1a6ad81fcd741949735c2bd53ad967cf7a55262_prof);

    }

    public function getTemplateName()
    {
        return "otchet/index.html.twig";
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
