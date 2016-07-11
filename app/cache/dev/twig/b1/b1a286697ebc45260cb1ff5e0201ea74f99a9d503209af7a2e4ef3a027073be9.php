<?php

/* organization/newRukZamTest.html.twig */
class __TwigTemplate_9d3eae836e19666a948993ed47f6f8dacc77a08ae292d4b3eb6bbff7dc1c74c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/newRukZamTest.html.twig", 1);
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
        $__internal_5411e05f56a8d84787e0454c7d988e2370b57b569d8bf536c5c9f4e684efcda5 = $this->env->getExtension("native_profiler");
        $__internal_5411e05f56a8d84787e0454c7d988e2370b57b569d8bf536c5c9f4e684efcda5->enter($__internal_5411e05f56a8d84787e0454c7d988e2370b57b569d8bf536c5c9f4e684efcda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/newRukZamTest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5411e05f56a8d84787e0454c7d988e2370b57b569d8bf536c5c9f4e684efcda5->leave($__internal_5411e05f56a8d84787e0454c7d988e2370b57b569d8bf536c5c9f4e684efcda5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_30d5cec810108fc88fbe4b5c3f81e0476aefd808396d44f88ce9d3c7b7ac28d4 = $this->env->getExtension("native_profiler");
        $__internal_30d5cec810108fc88fbe4b5c3f81e0476aefd808396d44f88ce9d3c7b7ac28d4->enter($__internal_30d5cec810108fc88fbe4b5c3f81e0476aefd808396d44f88ce9d3c7b7ac28d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
   ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zvanie", array()), 'row');
        echo "

    <ul class=\"tags\" data-prototype=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel_zamestitel", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">

    </ul>

    
    <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"addRukovoditel\">Добавить руководителя</button>
    </div>
    <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"addZamestitel\" style=\"display:none\">Добавить заместителя</button>
    </div>    

    <input type=\"submit\" value=\"Добавить организацию\" class=\"btn btn-success\" />

";
        
        $__internal_30d5cec810108fc88fbe4b5c3f81e0476aefd808396d44f88ce9d3c7b7ac28d4->leave($__internal_30d5cec810108fc88fbe4b5c3f81e0476aefd808396d44f88ce9d3c7b7ac28d4_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_57765e7384dc7e863c9956a9def7abad97016e254efc9d0fd78bac93ece8d114 = $this->env->getExtension("native_profiler");
        $__internal_57765e7384dc7e863c9956a9def7abad97016e254efc9d0fd78bac93ece8d114->enter($__internal_57765e7384dc7e863c9956a9def7abad97016e254efc9d0fd78bac93ece8d114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "
";
        
        $__internal_57765e7384dc7e863c9956a9def7abad97016e254efc9d0fd78bac93ece8d114->leave($__internal_57765e7384dc7e863c9956a9def7abad97016e254efc9d0fd78bac93ece8d114_prof);

    }

    public function getTemplateName()
    {
        return "organization/newRukZamTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  79 => 25,  57 => 9,  52 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*    {{ form_start(form) }}*/
/*     {{ form_row(form.fio) }}*/
/*     {{ form_row(form.zvanie) }}*/
/* */
/*     <ul class="tags" data-prototype="{{ form_widget(form.rukovoditel_zamestitel.vars.prototype)|e }}">*/
/* */
/*     </ul>*/
/* */
/*     */
/*     <div class="form-group">*/
/*         <button type="button" class="btn btn-sm btn-primary" id="addRukovoditel">Добавить руководителя</button>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <button type="button" class="btn btn-sm btn-primary" id="addZamestitel" style="display:none">Добавить заместителя</button>*/
/*     </div>    */
/* */
/*     <input type="submit" value="Добавить организацию" class="btn btn-success" />*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
