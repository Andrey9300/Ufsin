<?php

/* :fkuz:createIssledovanieFkuz.html.twig */
class __TwigTemplate_9905ad366f989e62bdf7d5684cbe194acee362229963494ad609ca6f092a48be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:createIssledovanieFkuz.html.twig", 1);
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
        $__internal_c4403fe87a9ec2a3f97e3e371ac20b44f8dabfe873a7726c2f98b74328cb208e = $this->env->getExtension("native_profiler");
        $__internal_c4403fe87a9ec2a3f97e3e371ac20b44f8dabfe873a7726c2f98b74328cb208e->enter($__internal_c4403fe87a9ec2a3f97e3e371ac20b44f8dabfe873a7726c2f98b74328cb208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:createIssledovanieFkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4403fe87a9ec2a3f97e3e371ac20b44f8dabfe873a7726c2f98b74328cb208e->leave($__internal_c4403fe87a9ec2a3f97e3e371ac20b44f8dabfe873a7726c2f98b74328cb208e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_77d6036520a37480d0ecb7b76d1d16ba2e4a6f0928a0a2fe3d0c41ad76b2db2c = $this->env->getExtension("native_profiler");
        $__internal_77d6036520a37480d0ecb7b76d1d16ba2e4a6f0928a0a2fe3d0c41ad76b2db2c->enter($__internal_77d6036520a37480d0ecb7b76d1d16ba2e4a6f0928a0a2fe3d0c41ad76b2db2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Добавление лабораторного исследования для «";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["fkuz_name"]) ? $context["fkuz_name"] : $this->getContext($context, "fkuz_name")), "html", null, true);
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
        <div class=\"col-md-3\">
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "all_count", array()), 'label', array("label" => "Всего проб"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "all_count", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата протокола (дд.мм.гггг)"));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ne_sootv", array()), 'label', array("label" => "Не соответствует"));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ne_sootv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieType", array()), 'label', array("label" => "Тип"));
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieType", array()), 'widget', array("attr" => array("class" => "form-control type_issledovaniya")));
        echo "

        </div>
        <div class=\"col-md-3\">

        </div>
        <div class=\"col-md-3\">

        </div>
    </div>

    <hr/>

    <div class=\"dobavlenie row\">
        <div class=\"col-md-12\">
            <div class=\"pokazatelsIssledovaniya\" data-prototype=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pokazatelsIssledovaniyFkuz", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\" style=\"display:none\"></div>
        </div>
    </div>

    <hr/>

    <div class=\"row\">
        <input type=\"submit\" value=\"Добавить исследование\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>

";
        
        $__internal_77d6036520a37480d0ecb7b76d1d16ba2e4a6f0928a0a2fe3d0c41ad76b2db2c->leave($__internal_77d6036520a37480d0ecb7b76d1d16ba2e4a6f0928a0a2fe3d0c41ad76b2db2c_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3c179550c2637b121516811523206fbae06ca180486aa83b4dd07de3ae6b0a92 = $this->env->getExtension("native_profiler");
        $__internal_3c179550c2637b121516811523206fbae06ca180486aa83b4dd07de3ae6b0a92->enter($__internal_3c179550c2637b121516811523206fbae06ca180486aa83b4dd07de3ae6b0a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "
";
        
        $__internal_3c179550c2637b121516811523206fbae06ca180486aa83b4dd07de3ae6b0a92->leave($__internal_3c179550c2637b121516811523206fbae06ca180486aa83b4dd07de3ae6b0a92_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:createIssledovanieFkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  137 => 56,  119 => 44,  101 => 29,  97 => 28,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  50 => 8,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Добавление лабораторного исследования для «{{ fkuz_name }}»</h1>*/
/*     </div>*/
/*     {{ form_start(form) }}*/
/* */
/*     <div class="row">*/
/*         <input type="submit" value="Добавить исследование" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* */
/*     <div class="issledovanie row">*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.nomer, 'Номер протокола') }}*/
/*             {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.all_count, 'Всего проб') }}*/
/*             {{ form_widget(form.all_count, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date, 'Дата протокола (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.ne_sootv, 'Не соответствует') }}*/
/*             {{ form_widget(form.ne_sootv, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.issledovanieType, 'Тип') }}*/
/*             {{ form_widget(form.issledovanieType, { 'attr': {'class': 'form-control type_issledovaniya'} }) }}*/
/* */
/*         </div>*/
/*         <div class="col-md-3">*/
/* */
/*         </div>*/
/*         <div class="col-md-3">*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="dobavlenie row">*/
/*         <div class="col-md-12">*/
/*             <div class="pokazatelsIssledovaniya" data-prototype="{{ form_widget(form.pokazatelsIssledovaniyFkuz.vars.prototype)|e }}" style="display:none"></div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="row">*/
/*         <input type="submit" value="Добавить исследование" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
