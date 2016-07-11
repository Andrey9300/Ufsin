<?php

/* zabolevaniya/createZabolevanieLichnyi.html.twig */
class __TwigTemplate_cb401224cd99cdc839547ad43a43f39d66d71dfe4a3f9d757dff0a71834a3f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "zabolevaniya/createZabolevanieLichnyi.html.twig", 1);
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
        $__internal_c3bcd045f9a5c012e854663539862445359abfbb82f7c7a7c60a1ee138ef2ab7 = $this->env->getExtension("native_profiler");
        $__internal_c3bcd045f9a5c012e854663539862445359abfbb82f7c7a7c60a1ee138ef2ab7->enter($__internal_c3bcd045f9a5c012e854663539862445359abfbb82f7c7a7c60a1ee138ef2ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "zabolevaniya/createZabolevanieLichnyi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3bcd045f9a5c012e854663539862445359abfbb82f7c7a7c60a1ee138ef2ab7->leave($__internal_c3bcd045f9a5c012e854663539862445359abfbb82f7c7a7c60a1ee138ef2ab7_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_69efbf3df9af18a39f236bd5cd13676316e8f1c90ba783ccc9f9b6df7c8639db = $this->env->getExtension("native_profiler");
        $__internal_69efbf3df9af18a39f236bd5cd13676316e8f1c90ba783ccc9f9b6df7c8639db->enter($__internal_69efbf3df9af18a39f236bd5cd13676316e8f1c90ba783ccc9f9b6df7c8639db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление заболевшего личного состава</h1>
</div>

";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить заболевшего личного состава\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'label', array("label" => "Учреждение"));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "     
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label" => "Пол"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'label', array("label" => "ФИО"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_birthday", array()), 'label', array("label" => "Дата рождения (дд.мм.гггг)"));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_birthday", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "        
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'label', array("label" => "Профессия"));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label', array("label" => "Адрес"));
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "        
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_zabolevaniya", array()), 'label', array("label" => "Дата заболевания (дд.мм.гггг)"));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_zabolevaniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_obracheniya", array()), 'label', array("label" => "Дата обращения (дд.мм.гггг)"));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_obracheniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo " 
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_extr_izv", array()), 'label', array("label" => "Дата извещения (дд.мм.гггг)"));
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_extr_izv", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
    </div>
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить заболевшего личного состава\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_69efbf3df9af18a39f236bd5cd13676316e8f1c90ba783ccc9f9b6df7c8639db->leave($__internal_69efbf3df9af18a39f236bd5cd13676316e8f1c90ba783ccc9f9b6df7c8639db_prof);

    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c819142b234209f92f31e9886f6e182cec27e9c714c284f2a953d6daa1720d20 = $this->env->getExtension("native_profiler");
        $__internal_c819142b234209f92f31e9886f6e182cec27e9c714c284f2a953d6daa1720d20->enter($__internal_c819142b234209f92f31e9886f6e182cec27e9c714c284f2a953d6daa1720d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 45
        echo "
";
        
        $__internal_c819142b234209f92f31e9886f6e182cec27e9c714c284f2a953d6daa1720d20->leave($__internal_c819142b234209f92f31e9886f6e182cec27e9c714c284f2a953d6daa1720d20_prof);

    }

    public function getTemplateName()
    {
        return "zabolevaniya/createZabolevanieLichnyi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 45,  143 => 44,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление заболевшего личного состава</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить заболевшего личного состава" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-6">*/
/*         {{ form_label(form.organization, 'Учреждение') }}*/
/*         {{ form_widget(form.organization, { 'attr': {'class': 'form-control'} }) }}     */
/*         {{ form_label(form.gender, 'Пол') }}*/
/*         {{ form_widget(form.gender, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.fio, 'ФИО') }}*/
/*         {{ form_widget(form.fio, { 'attr': {'class': 'form-control'} }) }}  */
/*         {{ form_label(form.date_birthday, 'Дата рождения (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_birthday, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}        */
/*         {{ form_label(form.profession, 'Профессия') }}*/
/*         {{ form_widget(form.profession, { 'attr': {'class': 'form-control', 'spellcheck': 'true'} }) }}*/
/*         {{ form_label(form.address, 'Адрес') }}*/
/*         {{ form_widget(form.address, { 'attr': {'class': 'form-control', 'spellcheck': 'true'} }) }}        */
/*         {{ form_label(form.data_zabolevaniya, 'Дата заболевания (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.data_zabolevaniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         {{ form_label(form.data_obracheniya, 'Дата обращения (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.data_obracheniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }} */
/*         {{ form_label(form.data_extr_izv, 'Дата извещения (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.data_extr_izv, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить заболевшего личного состава" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
