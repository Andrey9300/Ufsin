<?php

/* organization/createIssledovanie.html.twig */
class __TwigTemplate_42648068f270702c8cc9a819626bf333956c3921e8e59e0f9f2910718d057c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/createIssledovanie.html.twig", 1);
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
        $__internal_cf6b5969ad458fb586b4f573bc2c0be866690ab2d8f3ed5fe4fbf4eb8e63f88d = $this->env->getExtension("native_profiler");
        $__internal_cf6b5969ad458fb586b4f573bc2c0be866690ab2d8f3ed5fe4fbf4eb8e63f88d->enter($__internal_cf6b5969ad458fb586b4f573bc2c0be866690ab2d8f3ed5fe4fbf4eb8e63f88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/createIssledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf6b5969ad458fb586b4f573bc2c0be866690ab2d8f3ed5fe4fbf4eb8e63f88d->leave($__internal_cf6b5969ad458fb586b4f573bc2c0be866690ab2d8f3ed5fe4fbf4eb8e63f88d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_062e9e6b84c7ca0f512a87dd9033b65dcf3fe4ab8873814e44ade31dc0430986 = $this->env->getExtension("native_profiler");
        $__internal_062e9e6b84c7ca0f512a87dd9033b65dcf3fe4ab8873814e44ade31dc0430986->enter($__internal_062e9e6b84c7ca0f512a87dd9033b65dcf3fe4ab8873814e44ade31dc0430986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление лабораторного исследования для «";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pokazatelsIssledovaniy", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\" style=\"display:none\"></div>
    </div>
</div>

<hr/>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить исследование\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_062e9e6b84c7ca0f512a87dd9033b65dcf3fe4ab8873814e44ade31dc0430986->leave($__internal_062e9e6b84c7ca0f512a87dd9033b65dcf3fe4ab8873814e44ade31dc0430986_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4445b7618f720c34f670108c547bae0a1287e2585e0fc24a25e1ee0599318685 = $this->env->getExtension("native_profiler");
        $__internal_4445b7618f720c34f670108c547bae0a1287e2585e0fc24a25e1ee0599318685->enter($__internal_4445b7618f720c34f670108c547bae0a1287e2585e0fc24a25e1ee0599318685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "
";
        
        $__internal_4445b7618f720c34f670108c547bae0a1287e2585e0fc24a25e1ee0599318685->leave($__internal_4445b7618f720c34f670108c547bae0a1287e2585e0fc24a25e1ee0599318685_prof);

    }

    public function getTemplateName()
    {
        return "organization/createIssledovanie.html.twig";
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
/* <div class="row">*/
/*     <h1>Добавление лабораторного исследования для «{{organization_name}}»</h1>*/
/* </div>*/
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить исследование" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="issledovanie row">*/
/*     <div class="col-md-3">*/
/*         {{ form_label(form.nomer, 'Номер протокола') }}*/
/*         {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.all_count, 'Всего проб') }}*/
/*         {{ form_widget(form.all_count, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/*     <div class="col-md-3">*/
/*         {{ form_label(form.date, 'Дата протокола (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         {{ form_label(form.ne_sootv, 'Не соответствует') }}*/
/*         {{ form_widget(form.ne_sootv, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/*     <div class="col-md-3">*/
/*         {{ form_label(form.issledovanieType, 'Тип') }}*/
/*         {{ form_widget(form.issledovanieType, { 'attr': {'class': 'form-control type_issledovaniya'} }) }}*/
/* */
/*     </div>*/
/*     <div class="col-md-3">*/
/* */
/*     </div>*/
/*     <div class="col-md-3">*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/*     <div class="col-md-12">*/
/*         <div class="pokazatelsIssledovaniya" data-prototype="{{ form_widget(form.pokazatelsIssledovaniy.vars.prototype)|e }}" style="display:none"></div>*/
/*     </div>*/
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить исследование" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
