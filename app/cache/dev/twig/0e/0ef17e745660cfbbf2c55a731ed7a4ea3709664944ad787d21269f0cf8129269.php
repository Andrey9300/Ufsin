<?php

/* fkuz/editLicense.html.twig */
class __TwigTemplate_f263a0c37d52e056c442770e076c938b05dd1518daf5025c6dd9f9251d321df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/editLicense.html.twig", 1);
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
        $__internal_5a08169bdba366553342bb44265c8a9162aecdb5b1973f5ba41b22af738b51ad = $this->env->getExtension("native_profiler");
        $__internal_5a08169bdba366553342bb44265c8a9162aecdb5b1973f5ba41b22af738b51ad->enter($__internal_5a08169bdba366553342bb44265c8a9162aecdb5b1973f5ba41b22af738b51ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/editLicense.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a08169bdba366553342bb44265c8a9162aecdb5b1973f5ba41b22af738b51ad->leave($__internal_5a08169bdba366553342bb44265c8a9162aecdb5b1973f5ba41b22af738b51ad_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8082b327f971ed522c03c373142340b19ed292ab99abbfaacc361a9c76fed405 = $this->env->getExtension("native_profiler");
        $__internal_8082b327f971ed522c03c373142340b19ed292ab99abbfaacc361a9c76fed405->enter($__internal_8082b327f971ed522c03c373142340b19ed292ab99abbfaacc361a9c76fed405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Изменить лицензию</h1>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер"));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата"));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "  
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vidDeytelnosti", array()), 'label', array("label" => "Вид деятельности"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vidDeytelnosti", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "\t\t
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-4\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success add_button\" />
    </div>
</div>

";
        
        $__internal_8082b327f971ed522c03c373142340b19ed292ab99abbfaacc361a9c76fed405->leave($__internal_8082b327f971ed522c03c373142340b19ed292ab99abbfaacc361a9c76fed405_prof);

    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fc0f97ce16dfd7f74ac0905dc44b7cc25ef1de5fff774d61f4ac7bf077625297 = $this->env->getExtension("native_profiler");
        $__internal_fc0f97ce16dfd7f74ac0905dc44b7cc25ef1de5fff774d61f4ac7bf077625297->enter($__internal_fc0f97ce16dfd7f74ac0905dc44b7cc25ef1de5fff774d61f4ac7bf077625297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        echo "
";
        
        $__internal_fc0f97ce16dfd7f74ac0905dc44b7cc25ef1de5fff774d61f4ac7bf077625297->leave($__internal_fc0f97ce16dfd7f74ac0905dc44b7cc25ef1de5fff774d61f4ac7bf077625297_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/editLicense.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  91 => 28,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <h1>Изменить лицензию</h1>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {{ form_label(form.nomer, 'Номер') }}*/
/*         {{ form_widget(form.nomer, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*         {{ form_label(form.date, 'Дата') }}*/
/*         {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}  */
/*         {{ form_label(form.vidDeytelnosti, 'Вид деятельности') }}*/
/*         {{ form_widget(form.vidDeytelnosti, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}		*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success add_button" />*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
