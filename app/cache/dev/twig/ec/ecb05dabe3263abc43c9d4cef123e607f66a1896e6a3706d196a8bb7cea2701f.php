<?php

/* fkuz/createDogovor.html.twig */
class __TwigTemplate_c2bc26258ed3272aef8e15057b6ee8bdfb94259776982f985ae0450900bba5bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/createDogovor.html.twig", 1);
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
        $__internal_23afe6e482a39522d53dc7785c2bae59a24f5bbd639571176ddfd53db9467f74 = $this->env->getExtension("native_profiler");
        $__internal_23afe6e482a39522d53dc7785c2bae59a24f5bbd639571176ddfd53db9467f74->enter($__internal_23afe6e482a39522d53dc7785c2bae59a24f5bbd639571176ddfd53db9467f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/createDogovor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23afe6e482a39522d53dc7785c2bae59a24f5bbd639571176ddfd53db9467f74->leave($__internal_23afe6e482a39522d53dc7785c2bae59a24f5bbd639571176ddfd53db9467f74_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_42f2338c17492026c86ec89c4182ddf817edce99655faf9c8e21d98e18bfd647 = $this->env->getExtension("native_profiler");
        $__internal_42f2338c17492026c86ec89c4182ddf817edce99655faf9c8e21d98e18bfd647->enter($__internal_42f2338c17492026c86ec89c4182ddf817edce99655faf9c8e21d98e18bfd647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Добавить договор</h1>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "  
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization_posrednik", array()), 'label', array("label" => "Организация посредник"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization_posrednik", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summa", array()), 'label', array("label" => "Сумма"));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summa", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovorType", array()), 'label', array("label" => "Тип договора"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovorType", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "       
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-4\">
        <input type=\"submit\" value=\"Добавить\" class=\"btn btn-success add_button\" />
    </div>
</div>

";
        
        $__internal_42f2338c17492026c86ec89c4182ddf817edce99655faf9c8e21d98e18bfd647->leave($__internal_42f2338c17492026c86ec89c4182ddf817edce99655faf9c8e21d98e18bfd647_prof);

    }

    // line 32
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_16326e6f00a054399a37cfd1a56feaf63984bb98a28746a2a79f31caaa34ac7a = $this->env->getExtension("native_profiler");
        $__internal_16326e6f00a054399a37cfd1a56feaf63984bb98a28746a2a79f31caaa34ac7a->enter($__internal_16326e6f00a054399a37cfd1a56feaf63984bb98a28746a2a79f31caaa34ac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 33
        echo "
";
        
        $__internal_16326e6f00a054399a37cfd1a56feaf63984bb98a28746a2a79f31caaa34ac7a->leave($__internal_16326e6f00a054399a37cfd1a56feaf63984bb98a28746a2a79f31caaa34ac7a_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/createDogovor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  107 => 32,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <h1>Добавить договор</h1>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {{ form_label(form.nomer, 'Номер') }}*/
/*         {{ form_widget(form.nomer, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*         {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}  */
/*         {{ form_label(form.organization_posrednik, 'Организация посредник') }}*/
/*         {{ form_widget(form.organization_posrednik, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*         {{ form_label(form.summa, 'Сумма') }}*/
/*         {{ form_widget(form.summa, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*         {{ form_label(form.dogovorType, 'Тип договора') }}*/
/*         {{ form_widget(form.dogovorType, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}       */
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
