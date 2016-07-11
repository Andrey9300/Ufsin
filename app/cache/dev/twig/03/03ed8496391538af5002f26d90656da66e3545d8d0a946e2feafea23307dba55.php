<?php

/* :fkuz:editIssledovanie.html.twig */
class __TwigTemplate_48bd480a1319f4bdb3691b32d3b7a087b0abd94795d34238f10eb4cb475b8ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:editIssledovanie.html.twig", 1);
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
        $__internal_105654d6a9001fc1dc06d930596aa74ca99f9c7f4a3ea735396961df6f61810e = $this->env->getExtension("native_profiler");
        $__internal_105654d6a9001fc1dc06d930596aa74ca99f9c7f4a3ea735396961df6f61810e->enter($__internal_105654d6a9001fc1dc06d930596aa74ca99f9c7f4a3ea735396961df6f61810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:editIssledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_105654d6a9001fc1dc06d930596aa74ca99f9c7f4a3ea735396961df6f61810e->leave($__internal_105654d6a9001fc1dc06d930596aa74ca99f9c7f4a3ea735396961df6f61810e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8cb9fd85e28496e383f9f9d0e4d182ce70f6ca7ea534ae6e49ee17e243e3e395 = $this->env->getExtension("native_profiler");
        $__internal_8cb9fd85e28496e383f9f9d0e4d182ce70f6ca7ea534ae6e49ee17e243e3e395->enter($__internal_8cb9fd85e28496e383f9f9d0e4d182ce70f6ca7ea534ae6e49ee17e243e3e395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Редакитрование лабораторного исследования</h1>
    </div>
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right; margin-bottom: 30px\"/>
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
        </div>
        <div class=\"col-md-3\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата протокола (дд.мм.гггг)"));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "all_count", array()), 'label', array("label" => "Всего проб"));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "all_count", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ne_sootv", array()), 'label', array("label" => "Не соответствует"));
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ne_sootv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"col-md-3\">

        </div>
        <div class=\"col-md-3\">

        </div>
    </div>

    <div class=\"row\">
        <hr/>
        <ul class=\"nav navbar-nav add\">
            <li><a href=\"/fkuz/deleteIssledovanie/";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issledovanieFkuz"]) ? $context["issledovanieFkuz"] : $this->getContext($context, "issledovanieFkuz")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить лабораторное исследование</a></li>
        </ul>
    </div>

    <div class=\"row\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right; margin-top:30px\"/>
    </div>

";
        
        $__internal_8cb9fd85e28496e383f9f9d0e4d182ce70f6ca7ea534ae6e49ee17e243e3e395->leave($__internal_8cb9fd85e28496e383f9f9d0e4d182ce70f6ca7ea534ae6e49ee17e243e3e395_prof);

    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_876ebc444c888b4358d271ec6e83b1e4affbf4042a920b4734123d1e1ce72379 = $this->env->getExtension("native_profiler");
        $__internal_876ebc444c888b4358d271ec6e83b1e4affbf4042a920b4734123d1e1ce72379->enter($__internal_876ebc444c888b4358d271ec6e83b1e4affbf4042a920b4734123d1e1ce72379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 54
        echo "
";
        
        $__internal_876ebc444c888b4358d271ec6e83b1e4affbf4042a920b4734123d1e1ce72379->leave($__internal_876ebc444c888b4358d271ec6e83b1e4affbf4042a920b4734123d1e1ce72379_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:editIssledovanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 54,  125 => 53,  109 => 43,  92 => 29,  88 => 28,  82 => 25,  78 => 24,  72 => 21,  68 => 20,  62 => 17,  58 => 16,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Редакитрование лабораторного исследования</h1>*/
/*     </div>*/
/*     {{ form_start(form) }}*/
/* */
/*     <div class="row">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right; margin-bottom: 30px"/>*/
/*     </div>*/
/* */
/*     <div class="issledovanie row">*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.nomer, 'Номер протокола') }}*/
/*             {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date, 'Дата протокола (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.all_count, 'Всего проб') }}*/
/*             {{ form_widget(form.all_count, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.ne_sootv, 'Не соответствует') }}*/
/*             {{ form_widget(form.ne_sootv, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/* */
/*         <div class="col-md-3">*/
/* */
/*         </div>*/
/*         <div class="col-md-3">*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <hr/>*/
/*         <ul class="nav navbar-nav add">*/
/*             <li><a href="/fkuz/deleteIssledovanie/{{ issledovanieFkuz.id }}" class="delete_entity">Удалить лабораторное исследование</a></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right; margin-top:30px"/>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
