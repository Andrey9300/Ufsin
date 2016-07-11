<?php

/* :fkuz:createLicense.html.twig */
class __TwigTemplate_85b503aa15f8a94464386dcbd51c549c8f9d89b104714d056f1a440d0c9933e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:createLicense.html.twig", 1);
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
        $__internal_2037772641d98357aa437901e3be050033a2652d2996de5badb01281dca63fb9 = $this->env->getExtension("native_profiler");
        $__internal_2037772641d98357aa437901e3be050033a2652d2996de5badb01281dca63fb9->enter($__internal_2037772641d98357aa437901e3be050033a2652d2996de5badb01281dca63fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:createLicense.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2037772641d98357aa437901e3be050033a2652d2996de5badb01281dca63fb9->leave($__internal_2037772641d98357aa437901e3be050033a2652d2996de5badb01281dca63fb9_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ee579ac6bb739dde5d28523bed04979347f38e467047f5c594a2bf684f651642 = $this->env->getExtension("native_profiler");
        $__internal_ee579ac6bb739dde5d28523bed04979347f38e467047f5c594a2bf684f651642->enter($__internal_ee579ac6bb739dde5d28523bed04979347f38e467047f5c594a2bf684f651642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Добавить лицензию</h1>

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
        <input type=\"submit\" value=\"Добавить\" class=\"btn btn-success add_button\" />
    </div>
</div>

";
        
        $__internal_ee579ac6bb739dde5d28523bed04979347f38e467047f5c594a2bf684f651642->leave($__internal_ee579ac6bb739dde5d28523bed04979347f38e467047f5c594a2bf684f651642_prof);

    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_044b36762df0d6f96496cb0ab4808d946b087a02f60747ae8f5c5503b68ffaef = $this->env->getExtension("native_profiler");
        $__internal_044b36762df0d6f96496cb0ab4808d946b087a02f60747ae8f5c5503b68ffaef->enter($__internal_044b36762df0d6f96496cb0ab4808d946b087a02f60747ae8f5c5503b68ffaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        echo "
";
        
        $__internal_044b36762df0d6f96496cb0ab4808d946b087a02f60747ae8f5c5503b68ffaef->leave($__internal_044b36762df0d6f96496cb0ab4808d946b087a02f60747ae8f5c5503b68ffaef_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:createLicense.html.twig";
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
/* <h1>Добавить лицензию</h1>*/
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
/*         <input type="submit" value="Добавить" class="btn btn-success add_button" />*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
