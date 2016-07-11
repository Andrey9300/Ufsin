<?php

/* fkuz/editSanZakl.html.twig */
class __TwigTemplate_cadc943481cd43b1eac97c1b8fc7b9d01e2b335c86d00f1929f97672a650ced8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/editSanZakl.html.twig", 1);
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
        $__internal_c532ccc91f689bd9929a3ac15717c0922c2cc9ea1690ff5be66a6df9a710f6d0 = $this->env->getExtension("native_profiler");
        $__internal_c532ccc91f689bd9929a3ac15717c0922c2cc9ea1690ff5be66a6df9a710f6d0->enter($__internal_c532ccc91f689bd9929a3ac15717c0922c2cc9ea1690ff5be66a6df9a710f6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/editSanZakl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c532ccc91f689bd9929a3ac15717c0922c2cc9ea1690ff5be66a6df9a710f6d0->leave($__internal_c532ccc91f689bd9929a3ac15717c0922c2cc9ea1690ff5be66a6df9a710f6d0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a795aaaead15e27ce9c6352ab9559759666becc499a874babc134d8afebb7820 = $this->env->getExtension("native_profiler");
        $__internal_a795aaaead15e27ce9c6352ab9559759666becc499a874babc134d8afebb7820->enter($__internal_a795aaaead15e27ce9c6352ab9559759666becc499a874babc134d8afebb7820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a795aaaead15e27ce9c6352ab9559759666becc499a874babc134d8afebb7820->leave($__internal_a795aaaead15e27ce9c6352ab9559759666becc499a874babc134d8afebb7820_prof);

    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1c366e945ccd27aedb6ced43e647318168576663f33e14cbf9e3083ac25d10eb = $this->env->getExtension("native_profiler");
        $__internal_1c366e945ccd27aedb6ced43e647318168576663f33e14cbf9e3083ac25d10eb->enter($__internal_1c366e945ccd27aedb6ced43e647318168576663f33e14cbf9e3083ac25d10eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        echo "
";
        
        $__internal_1c366e945ccd27aedb6ced43e647318168576663f33e14cbf9e3083ac25d10eb->leave($__internal_1c366e945ccd27aedb6ced43e647318168576663f33e14cbf9e3083ac25d10eb_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/editSanZakl.html.twig";
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
