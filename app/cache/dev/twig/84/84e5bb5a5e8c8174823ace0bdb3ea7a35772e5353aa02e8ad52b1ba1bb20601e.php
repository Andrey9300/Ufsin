<?php

/* :fkuz:createIssledovanie.html.twig */
class __TwigTemplate_383bad78415755b2d0665081fbc6ecfe483be2418a1e3e4f39b539bea7ed2f6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:createIssledovanie.html.twig", 1);
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
        $__internal_2043cd430fecda5a5df0b07d7f85df3dcf72dcbaeebc9b127a6f9b482c6a07ed = $this->env->getExtension("native_profiler");
        $__internal_2043cd430fecda5a5df0b07d7f85df3dcf72dcbaeebc9b127a6f9b482c6a07ed->enter($__internal_2043cd430fecda5a5df0b07d7f85df3dcf72dcbaeebc9b127a6f9b482c6a07ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:createIssledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2043cd430fecda5a5df0b07d7f85df3dcf72dcbaeebc9b127a6f9b482c6a07ed->leave($__internal_2043cd430fecda5a5df0b07d7f85df3dcf72dcbaeebc9b127a6f9b482c6a07ed_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_40782948ae8a83c37eb56c64ae2475b405f1015349bd69c1bde2cbbf782409bb = $this->env->getExtension("native_profiler");
        $__internal_40782948ae8a83c37eb56c64ae2475b405f1015349bd69c1bde2cbbf782409bb->enter($__internal_40782948ae8a83c37eb56c64ae2475b405f1015349bd69c1bde2cbbf782409bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление лабораторного исследования для «";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["fkuzName"]) ? $context["fkuzName"] : $this->getContext($context, "fkuzName")), "html", null, true);
        echo "»</h1>
</div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить исследование\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"issledovanie row\">

    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер протокола"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата протокола (дд.мм.гггг)"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "

</div>

<hr/>

<div class=\"dobavlenie row\">

    <div class=\"col-md-6\">
        <div class=\"lab_issledovanie\" data-prototype=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieObjectFkuz", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-6 list_add\"></div>
    
</div>
   
<hr/>
   
<div class=\"row\">
    <input type=\"submit\" value=\"Добавить исследование\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_40782948ae8a83c37eb56c64ae2475b405f1015349bd69c1bde2cbbf782409bb->leave($__internal_40782948ae8a83c37eb56c64ae2475b405f1015349bd69c1bde2cbbf782409bb_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3899cf1a2f9d6665dd53333d02566506df8e8314e98899504a41dd1d1890af11 = $this->env->getExtension("native_profiler");
        $__internal_3899cf1a2f9d6665dd53333d02566506df8e8314e98899504a41dd1d1890af11->enter($__internal_3899cf1a2f9d6665dd53333d02566506df8e8314e98899504a41dd1d1890af11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 43
        echo "
";
        
        $__internal_3899cf1a2f9d6665dd53333d02566506df8e8314e98899504a41dd1d1890af11->leave($__internal_3899cf1a2f9d6665dd53333d02566506df8e8314e98899504a41dd1d1890af11_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:createIssledovanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  105 => 42,  85 => 28,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  50 => 8,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление лабораторного исследования для «{{ fkuzName }}»</h1>*/
/* </div>*/
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить исследование" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="issledovanie row">*/
/* */
/*     {{ form_label(form.nomer, 'Номер протокола') }}*/
/*     {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*     {{ form_label(form.date, 'Дата протокола (дд.мм.гггг)') }}*/
/*     {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/* */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/* */
/*     <div class="col-md-6">*/
/*         <div class="lab_issledovanie" data-prototype="{{ form_widget(form.issledovanieObjectFkuz.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-6 list_add"></div>*/
/*     */
/* </div>*/
/*    */
/* <hr/>*/
/*    */
/* <div class="row">*/
/*     <input type="submit" value="Добавить исследование" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
