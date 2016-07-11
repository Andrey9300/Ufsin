<?php

/* :fkuz:editSanZakl.html.twig */
class __TwigTemplate_6f9e3f59221ec2b5d98b2cce977afa126152d392115325d606f24fbc0f5608e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:editSanZakl.html.twig", 1);
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
        $__internal_78c7c3dcef55b4078fcb3880e10346cb9e15b2d18fc98238dcfaaf4c1573b003 = $this->env->getExtension("native_profiler");
        $__internal_78c7c3dcef55b4078fcb3880e10346cb9e15b2d18fc98238dcfaaf4c1573b003->enter($__internal_78c7c3dcef55b4078fcb3880e10346cb9e15b2d18fc98238dcfaaf4c1573b003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:editSanZakl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c7c3dcef55b4078fcb3880e10346cb9e15b2d18fc98238dcfaaf4c1573b003->leave($__internal_78c7c3dcef55b4078fcb3880e10346cb9e15b2d18fc98238dcfaaf4c1573b003_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f056e5b00cbe9efee352217c054044c9b3c6fd6b0a5c6c2be0eb24af80bcd04f = $this->env->getExtension("native_profiler");
        $__internal_f056e5b00cbe9efee352217c054044c9b3c6fd6b0a5c6c2be0eb24af80bcd04f->enter($__internal_f056e5b00cbe9efee352217c054044c9b3c6fd6b0a5c6c2be0eb24af80bcd04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Редактировать санитарно-эпидемиологическое заключение</h1>

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
        echo "        
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-4\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success add_button\" />
    </div>
</div>

";
        
        $__internal_f056e5b00cbe9efee352217c054044c9b3c6fd6b0a5c6c2be0eb24af80bcd04f->leave($__internal_f056e5b00cbe9efee352217c054044c9b3c6fd6b0a5c6c2be0eb24af80bcd04f_prof);

    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8f079f710ca2d4bd4de2f3241055a6f89341a312cf015957e1af8dce8958b8ee = $this->env->getExtension("native_profiler");
        $__internal_8f079f710ca2d4bd4de2f3241055a6f89341a312cf015957e1af8dce8958b8ee->enter($__internal_8f079f710ca2d4bd4de2f3241055a6f89341a312cf015957e1af8dce8958b8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        echo "
";
        
        $__internal_8f079f710ca2d4bd4de2f3241055a6f89341a312cf015957e1af8dce8958b8ee->leave($__internal_8f079f710ca2d4bd4de2f3241055a6f89341a312cf015957e1af8dce8958b8ee_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:editSanZakl.html.twig";
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
/* <h1>Редактировать санитарно-эпидемиологическое заключение</h1>*/
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
/*         {{ form_widget(form.vidDeytelnosti, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}        */
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
