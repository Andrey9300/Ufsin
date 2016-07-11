<?php

/* :proverka:createProverka.html.twig */
class __TwigTemplate_a24f3c6fabd888839f0fe613539fe8563cdcb42947c579bad7f31ed8d829bf69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proverka:createProverka.html.twig", 1);
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
        $__internal_e6f3e6c183f9c3c02b1a96b045a9f4ec4d2be87be7da3722cdbcf78681ee53b2 = $this->env->getExtension("native_profiler");
        $__internal_e6f3e6c183f9c3c02b1a96b045a9f4ec4d2be87be7da3722cdbcf78681ee53b2->enter($__internal_e6f3e6c183f9c3c02b1a96b045a9f4ec4d2be87be7da3722cdbcf78681ee53b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proverka:createProverka.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f3e6c183f9c3c02b1a96b045a9f4ec4d2be87be7da3722cdbcf78681ee53b2->leave($__internal_e6f3e6c183f9c3c02b1a96b045a9f4ec4d2be87be7da3722cdbcf78681ee53b2_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4337194ccbec35a2194684fdae8e8481854eadceb9347346c97b1e5427e4d1b1 = $this->env->getExtension("native_profiler");
        $__internal_4337194ccbec35a2194684fdae8e8481854eadceb9347346c97b1e5427e4d1b1->enter($__internal_4337194ccbec35a2194684fdae8e8481854eadceb9347346c97b1e5427e4d1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление проверки для «";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
        echo "»</h1>
</div>

";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить проверку\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"proverka row\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер проверки"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
        </div>
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverkaType", array()), 'label', array("label" => "Тип проверки"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverkaType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
    </div>
    <div class=\"row\">   
        <div class=\"col-md-3\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>  
        <div class=\"col-md-3 dates\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_rasporyageniya", array()), 'label', array("label" => "Дата распоряжения (дд.мм.гггг)"));
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_rasporyageniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>
        <div class=\"col-md-3 dates\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_akt", array()), 'label', array("label" => "Дата выдачи акта (дд.мм.гггг)"));
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_akt", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "    
        </div>
        <div class=\"col-md-3 dates\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_predpisaniya", array()), 'label', array("label" => "Дата предписания (дд.мм.гггг)"));
        echo "
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_predpisaniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>  
    </div>
  
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kem_vydano", array()), 'label', array("label" => "Кем выдано"));
        echo "
    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kem_vydano", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "            
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"narushenie\" data-prototype=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverka_narushenie", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-6 list_add\"></div>  
    
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"nakazanie\" data-prototype=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverka_nakazanie", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-6 list_add\"></div>
    
</div>
<hr/>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить проверку\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_4337194ccbec35a2194684fdae8e8481854eadceb9347346c97b1e5427e4d1b1->leave($__internal_4337194ccbec35a2194684fdae8e8481854eadceb9347346c97b1e5427e4d1b1_prof);

    }

    // line 76
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_18db68a5da67298894584b515132b8095fa6cda56b236b35e0ea113fce4d0255 = $this->env->getExtension("native_profiler");
        $__internal_18db68a5da67298894584b515132b8095fa6cda56b236b35e0ea113fce4d0255->enter($__internal_18db68a5da67298894584b515132b8095fa6cda56b236b35e0ea113fce4d0255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 77
        echo "
";
        
        $__internal_18db68a5da67298894584b515132b8095fa6cda56b236b35e0ea113fce4d0255->leave($__internal_18db68a5da67298894584b515132b8095fa6cda56b236b35e0ea113fce4d0255_prof);

    }

    public function getTemplateName()
    {
        return ":proverka:createProverka.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 77,  172 => 76,  153 => 63,  139 => 52,  128 => 44,  124 => 43,  117 => 39,  113 => 38,  107 => 35,  103 => 34,  97 => 31,  93 => 30,  87 => 27,  83 => 26,  76 => 22,  72 => 21,  67 => 19,  63 => 18,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление проверки для «{{organization_name}}»</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить проверку" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="proverka row">*/
/*     <div class="row">*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.nomer, 'Номер проверки') }}*/
/*             {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }} */
/*         </div>*/
/*         {{ form_label(form.proverkaType, 'Тип проверки') }}*/
/*         {{ form_widget(form.proverkaType, { 'attr': {'class': 'form-control'} }) }} */
/*     </div>*/
/*     <div class="row">   */
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>  */
/*         <div class="col-md-3 dates">*/
/*             {{ form_label(form.date_rasporyageniya, 'Дата распоряжения (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_rasporyageniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3 dates">*/
/*             {{ form_label(form.date_akt, 'Дата выдачи акта (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_akt, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}    */
/*         </div>*/
/*         <div class="col-md-3 dates">*/
/*             {{ form_label(form.date_predpisaniya, 'Дата предписания (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_predpisaniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>  */
/*     </div>*/
/*   */
/*     {{ form_label(form.kem_vydano, 'Кем выдано') }}*/
/*     {{ form_widget(form.kem_vydano, { 'attr': {'class': 'form-control'} }) }}            */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/*     */
/*     <div class="col-md-6">*/
/*         <div class="narushenie" data-prototype="{{ form_widget(form.proverka_narushenie.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-6 list_add"></div>  */
/*     */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/*     */
/*     <div class="col-md-6">*/
/*         <div class="nakazanie" data-prototype="{{ form_widget(form.proverka_nakazanie.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-6 list_add"></div>*/
/*     */
/* </div>*/
/* <hr/>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить проверку" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
