<?php

/* :fkuz:createSanZakl.html.twig */
class __TwigTemplate_b2f0fefdc18c6a6f62c2ebd14c3b1d3cab99be41699b286ee02092161c55c646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:createSanZakl.html.twig", 1);
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
        $__internal_a67c7c30124d1bff1803b8399a364d16cd0a71a8fc75373eab6d77013d1673dd = $this->env->getExtension("native_profiler");
        $__internal_a67c7c30124d1bff1803b8399a364d16cd0a71a8fc75373eab6d77013d1673dd->enter($__internal_a67c7c30124d1bff1803b8399a364d16cd0a71a8fc75373eab6d77013d1673dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:createSanZakl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a67c7c30124d1bff1803b8399a364d16cd0a71a8fc75373eab6d77013d1673dd->leave($__internal_a67c7c30124d1bff1803b8399a364d16cd0a71a8fc75373eab6d77013d1673dd_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_90e3f14fd406d4768ddf5c776380de294f8ac7ec677dbf694b3ea3b2bb2713bb = $this->env->getExtension("native_profiler");
        $__internal_90e3f14fd406d4768ddf5c776380de294f8ac7ec677dbf694b3ea3b2bb2713bb->enter($__internal_90e3f14fd406d4768ddf5c776380de294f8ac7ec677dbf694b3ea3b2bb2713bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Добавить санитарно-эпидемиологическое заключение</h1>

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
        <input type=\"submit\" value=\"Добавить\" class=\"btn btn-success add_button\" />
    </div>
</div>

";
        
        $__internal_90e3f14fd406d4768ddf5c776380de294f8ac7ec677dbf694b3ea3b2bb2713bb->leave($__internal_90e3f14fd406d4768ddf5c776380de294f8ac7ec677dbf694b3ea3b2bb2713bb_prof);

    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f805b4238f050fdea45b74ae6c29c39d7c4b3e880e945dc4d4199afd527cd2ba = $this->env->getExtension("native_profiler");
        $__internal_f805b4238f050fdea45b74ae6c29c39d7c4b3e880e945dc4d4199afd527cd2ba->enter($__internal_f805b4238f050fdea45b74ae6c29c39d7c4b3e880e945dc4d4199afd527cd2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        echo "
";
        
        $__internal_f805b4238f050fdea45b74ae6c29c39d7c4b3e880e945dc4d4199afd527cd2ba->leave($__internal_f805b4238f050fdea45b74ae6c29c39d7c4b3e880e945dc4d4199afd527cd2ba_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:createSanZakl.html.twig";
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
/* <h1>Добавить санитарно-эпидемиологическое заключение</h1>*/
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
/*         <input type="submit" value="Добавить" class="btn btn-success add_button" />*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
