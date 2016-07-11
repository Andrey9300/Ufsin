<?php

/* :organization:createZabolevanieOchag.html.twig */
class __TwigTemplate_74a7a392387d0ed7019eedfaca8bd403daac29722e291b4d27b9e81e86b964a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:createZabolevanieOchag.html.twig", 1);
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
        $__internal_8c2c84155ee04047ee4a9bdf47a62d8ac1b243a1415af79c0f38006b54a23f36 = $this->env->getExtension("native_profiler");
        $__internal_8c2c84155ee04047ee4a9bdf47a62d8ac1b243a1415af79c0f38006b54a23f36->enter($__internal_8c2c84155ee04047ee4a9bdf47a62d8ac1b243a1415af79c0f38006b54a23f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:createZabolevanieOchag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c2c84155ee04047ee4a9bdf47a62d8ac1b243a1415af79c0f38006b54a23f36->leave($__internal_8c2c84155ee04047ee4a9bdf47a62d8ac1b243a1415af79c0f38006b54a23f36_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0ce8662b98e3c0a457bc1ab04be304de55d53f074fe904eda9c08822d128b0ee = $this->env->getExtension("native_profiler");
        $__internal_0ce8662b98e3c0a457bc1ab04be304de55d53f074fe904eda9c08822d128b0ee->enter($__internal_0ce8662b98e3c0a457bc1ab04be304de55d53f074fe904eda9c08822d128b0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление очага заболеваний в «";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
        echo "»</h1>
</div>

";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить очаг заболеваний\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Наименование"));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo " 
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'label', array("label" => "Место"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "        
    </div>
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"osugdenyi\" data-prototype=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "osugdenyi", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>    
    <div class=\"col-md-6 list_add\"></div>
    
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"kontaktnyi\" data-prototype=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kontaktnyi", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>    
    <div class=\"col-md-6 list_add\"></div>
    
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить очаг заболеваний\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_0ce8662b98e3c0a457bc1ab04be304de55d53f074fe904eda9c08822d128b0ee->leave($__internal_0ce8662b98e3c0a457bc1ab04be304de55d53f074fe904eda9c08822d128b0ee_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0046c4eb6dac68311419b8b8e9d5c0b5697bc83b133dc047bb1b3aa873ddfbe8 = $this->env->getExtension("native_profiler");
        $__internal_0046c4eb6dac68311419b8b8e9d5c0b5697bc83b133dc047bb1b3aa873ddfbe8->enter($__internal_0046c4eb6dac68311419b8b8e9d5c0b5697bc83b133dc047bb1b3aa873ddfbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "
";
        
        $__internal_0046c4eb6dac68311419b8b8e9d5c0b5697bc83b133dc047bb1b3aa873ddfbe8->leave($__internal_0046c4eb6dac68311419b8b8e9d5c0b5697bc83b133dc047bb1b3aa873ddfbe8_prof);

    }

    public function getTemplateName()
    {
        return ":organization:createZabolevanieOchag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  126 => 54,  108 => 42,  94 => 31,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление очага заболеваний в «{{organization_name}}»</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить очаг заболеваний" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-6">*/
/*         {{ form_label(form.name, 'Наименование') }}*/
/*         {{ form_widget(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }} */
/*         {{ form_label(form.place, 'Место') }}*/
/*         {{ form_widget(form.place, { 'attr': {'class': 'form-control'} }) }}        */
/*     </div>*/
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/*     */
/*     <div class="col-md-6">*/
/*         <div class="osugdenyi" data-prototype="{{ form_widget(form.osugdenyi.vars.prototype)|e }}"></div>*/
/*     </div>    */
/*     <div class="col-md-6 list_add"></div>*/
/*     */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/*     */
/*     <div class="col-md-6">*/
/*         <div class="kontaktnyi" data-prototype="{{ form_widget(form.kontaktnyi.vars.prototype)|e }}"></div>*/
/*     </div>    */
/*     <div class="col-md-6 list_add"></div>*/
/*     */
/* </div>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить очаг заболеваний" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
