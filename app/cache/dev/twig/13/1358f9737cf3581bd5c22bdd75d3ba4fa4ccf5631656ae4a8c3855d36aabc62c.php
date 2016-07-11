<?php

/* :organization:createIssledovanie.html.twig */
class __TwigTemplate_e4c575e44f886cc806f027be27c52f3d300beba658151e471d0c1da860ceed1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:createIssledovanie.html.twig", 1);
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
        $__internal_672fbc93cb17df3f243f05de4a87b27678b4c17d50a6b9aee684adffd3580377 = $this->env->getExtension("native_profiler");
        $__internal_672fbc93cb17df3f243f05de4a87b27678b4c17d50a6b9aee684adffd3580377->enter($__internal_672fbc93cb17df3f243f05de4a87b27678b4c17d50a6b9aee684adffd3580377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:createIssledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_672fbc93cb17df3f243f05de4a87b27678b4c17d50a6b9aee684adffd3580377->leave($__internal_672fbc93cb17df3f243f05de4a87b27678b4c17d50a6b9aee684adffd3580377_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ff4b686f2267faaddd2882e047e5287e5604c6deede7b3a74236a773c28ba4e1 = $this->env->getExtension("native_profiler");
        $__internal_ff4b686f2267faaddd2882e047e5287e5604c6deede7b3a74236a773c28ba4e1->enter($__internal_ff4b686f2267faaddd2882e047e5287e5604c6deede7b3a74236a773c28ba4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_ff4b686f2267faaddd2882e047e5287e5604c6deede7b3a74236a773c28ba4e1->leave($__internal_ff4b686f2267faaddd2882e047e5287e5604c6deede7b3a74236a773c28ba4e1_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4e5cb28dcf173f8cd7388d352ba6865c6df5166c555826796907682b83e99aad = $this->env->getExtension("native_profiler");
        $__internal_4e5cb28dcf173f8cd7388d352ba6865c6df5166c555826796907682b83e99aad->enter($__internal_4e5cb28dcf173f8cd7388d352ba6865c6df5166c555826796907682b83e99aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "
";
        
        $__internal_4e5cb28dcf173f8cd7388d352ba6865c6df5166c555826796907682b83e99aad->leave($__internal_4e5cb28dcf173f8cd7388d352ba6865c6df5166c555826796907682b83e99aad_prof);

    }

    public function getTemplateName()
    {
        return ":organization:createIssledovanie.html.twig";
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
