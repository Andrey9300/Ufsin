<?php

/* :fkuz:editFkuz.html.twig */
class __TwigTemplate_35f195dbe447377a64cb982ed34b902182ead58e9eabc526a4239b8373fe4192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:editFkuz.html.twig", 1);
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
        $__internal_15cfd8a70faa4b21f24abf3493a4a977eaf8fa2b884936e775bae3f760d40288 = $this->env->getExtension("native_profiler");
        $__internal_15cfd8a70faa4b21f24abf3493a4a977eaf8fa2b884936e775bae3f760d40288->enter($__internal_15cfd8a70faa4b21f24abf3493a4a977eaf8fa2b884936e775bae3f760d40288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:editFkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15cfd8a70faa4b21f24abf3493a4a977eaf8fa2b884936e775bae3f760d40288->leave($__internal_15cfd8a70faa4b21f24abf3493a4a977eaf8fa2b884936e775bae3f760d40288_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0adeee2a738ba2db5b9df72470c49ef93b4d64f5b7c0a87d3aae694f815ee519 = $this->env->getExtension("native_profiler");
        $__internal_0adeee2a738ba2db5b9df72470c49ef93b4d64f5b7c0a87d3aae694f815ee519->enter($__internal_0adeee2a738ba2db5b9df72470c49ef93b4d64f5b7c0a87d3aae694f815ee519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"row\">
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_full", array()), 'label', array("label" => "Полное название"));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_full", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_short", array()), 'label', array("label" => "Краткое название"));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_short", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label', array("label" => "Адрес"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'label', array("label" => "ФИО руководителя"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'label', array("label" => "Звание руководителя"));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_0adeee2a738ba2db5b9df72470c49ef93b4d64f5b7c0a87d3aae694f815ee519->leave($__internal_0adeee2a738ba2db5b9df72470c49ef93b4d64f5b7c0a87d3aae694f815ee519_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d3de6074b3307f72bdf25e9fd77045ef12a6b09f597db1cf3401d792f8f6e6ef = $this->env->getExtension("native_profiler");
        $__internal_d3de6074b3307f72bdf25e9fd77045ef12a6b09f597db1cf3401d792f8f6e6ef->enter($__internal_d3de6074b3307f72bdf25e9fd77045ef12a6b09f597db1cf3401d792f8f6e6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_d3de6074b3307f72bdf25e9fd77045ef12a6b09f597db1cf3401d792f8f6e6ef->leave($__internal_d3de6074b3307f72bdf25e9fd77045ef12a6b09f597db1cf3401d792f8f6e6ef_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:editFkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  105 => 30,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     {{ form_label(form.name_full, 'Полное название') }}*/
/*     {{ form_widget(form.name_full, { 'attr': {'class': 'form-control'} }) }}*/
/*     {{ form_label(form.name_short, 'Краткое название') }}*/
/*     {{ form_widget(form.name_short, { 'attr': {'class': 'form-control'} }) }}    */
/*     {{ form_label(form.address, 'Адрес') }}*/
/*     {{ form_widget(form.address, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*     {{ form_label(form.rukovoditel.fio, 'ФИО руководителя') }}*/
/*     {{ form_widget(form.rukovoditel.fio, { 'attr': {'class': 'form-control'} }) }}*/
/*     {{ form_label(form.rukovoditel.zvanie, 'Звание руководителя') }}*/
/*     {{ form_widget(form.rukovoditel.zvanie, { 'attr': {'class': 'form-control'} }) }}*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
