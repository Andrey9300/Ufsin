<?php

/* :organization:createZabolevanieOsugdenyi.html.twig */
class __TwigTemplate_935729fb4ce8de3483cbd3f4ffa554c2eff0ccc12d556d8d225e3f43b6e8a870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:createZabolevanieOsugdenyi.html.twig", 1);
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
        $__internal_b1695acfa98a324886d2a03922530e897ca1a296b1918ea957077cfaa49555d6 = $this->env->getExtension("native_profiler");
        $__internal_b1695acfa98a324886d2a03922530e897ca1a296b1918ea957077cfaa49555d6->enter($__internal_b1695acfa98a324886d2a03922530e897ca1a296b1918ea957077cfaa49555d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:createZabolevanieOsugdenyi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1695acfa98a324886d2a03922530e897ca1a296b1918ea957077cfaa49555d6->leave($__internal_b1695acfa98a324886d2a03922530e897ca1a296b1918ea957077cfaa49555d6_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ddfa25365d5c8962cadf3b0172871f29e93b65f66ec47d4d8fcf09e527e6a607 = $this->env->getExtension("native_profiler");
        $__internal_ddfa25365d5c8962cadf3b0172871f29e93b65f66ec47d4d8fcf09e527e6a607->enter($__internal_ddfa25365d5c8962cadf3b0172871f29e93b65f66ec47d4d8fcf09e527e6a607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление заболевшего осужденного в «";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
        echo "»</h1>
</div>

";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить заболевшего  осужденного\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label" => "Пол"));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'label', array("label" => "ФИО"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_birthday", array()), 'label', array("label" => "Дата рождения (дд.мм.гггг)"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_birthday", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "        
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_job", array()), 'label', array("label" => "Место работы"));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_job", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_study", array()), 'label', array("label" => "Место учебы"));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_study", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_progivaniya", array()), 'label', array("label" => "Место проживания"));
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_progivaniya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_viyavleniya", array()), 'label', array("label" => "Дата заболевания (дд.мм.гггг)"));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_viyavleniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_gospit", array()), 'label', array("label" => "Дата госпитализации в МЧ (дд.мм.гггг)"));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_gospit", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo " 

        
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_vzyatiya_na_uchet", array()), 'label', array("label" => "Дата взятия на учет ЛИУ-9 (дд.мм.гггг)"));
        echo "
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_vzyatiya_na_uchet", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_perevoda", array()), 'label', array("label" => "Дата перевода в ЛИУ-9 (дд.мм.гггг)"));
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_perevoda", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo " 


        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mbt", array()), 'label', array("label" => "МБТ"));
        echo "
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mbt", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_zakl_dezin", array()), 'label', array("label" => "Дата заключительной дезинфекции (дд.мм.гггг)"));
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_zakl_dezin", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo " 
    </div>
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"kontaktnyi\" data-prototype=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kontaktnyi", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>    
    <div class=\"col-md-6 list_add\"></div>
    
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить заболевшего осужденного\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_ddfa25365d5c8962cadf3b0172871f29e93b65f66ec47d4d8fcf09e527e6a607->leave($__internal_ddfa25365d5c8962cadf3b0172871f29e93b65f66ec47d4d8fcf09e527e6a607_prof);

    }

    // line 65
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ae5a0c948a4f8d33d16c11846fba493e8fb727c4b426c4cb8d8abc24b2ceaec5 = $this->env->getExtension("native_profiler");
        $__internal_ae5a0c948a4f8d33d16c11846fba493e8fb727c4b426c4cb8d8abc24b2ceaec5->enter($__internal_ae5a0c948a4f8d33d16c11846fba493e8fb727c4b426c4cb8d8abc24b2ceaec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 66
        echo "
";
        
        $__internal_ae5a0c948a4f8d33d16c11846fba493e8fb727c4b426c4cb8d8abc24b2ceaec5->leave($__internal_ae5a0c948a4f8d33d16c11846fba493e8fb727c4b426c4cb8d8abc24b2ceaec5_prof);

    }

    public function getTemplateName()
    {
        return ":organization:createZabolevanieOsugdenyi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 66,  188 => 65,  170 => 53,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление заболевшего осужденного в «{{organization_name}}»</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить заболевшего  осужденного" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-6">*/
/*         {{ form_label(form.gender, 'Пол') }}*/
/*         {{ form_widget(form.gender, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.fio, 'ФИО') }}*/
/*         {{ form_widget(form.fio, { 'attr': {'class': 'form-control'} }) }}      */
/*         {{ form_label(form.date_birthday, 'Дата рождения (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_birthday, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}        */
/*         {{ form_label(form.place_job, 'Место работы') }}*/
/*         {{ form_widget(form.place_job, { 'attr': {'class': 'form-control', 'spellcheck': 'true'} }) }}*/
/*         {{ form_label(form.place_study, 'Место учебы') }}*/
/*         {{ form_widget(form.place_study, { 'attr': {'class': 'form-control', 'spellcheck': 'true'} }) }}*/
/*         {{ form_label(form.place_progivaniya, 'Место проживания') }}*/
/*         {{ form_widget(form.place_progivaniya, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.date_viyavleniya, 'Дата заболевания (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_viyavleniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         {{ form_label(form.date_gospit, 'Дата госпитализации в МЧ (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_gospit, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }} */
/* */
/*         */
/*         {{ form_label(form.date_vzyatiya_na_uchet, 'Дата взятия на учет ЛИУ-9 (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_vzyatiya_na_uchet, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         {{ form_label(form.date_perevoda, 'Дата перевода в ЛИУ-9 (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_perevoda, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }} */
/* */
/* */
/*         {{ form_label(form.mbt, 'МБТ') }}*/
/*         {{ form_widget(form.mbt, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.date_zakl_dezin, 'Дата заключительной дезинфекции (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_zakl_dezin, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }} */
/*     </div>*/
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
/*     <input type="submit" value="Добавить заболевшего осужденного" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
