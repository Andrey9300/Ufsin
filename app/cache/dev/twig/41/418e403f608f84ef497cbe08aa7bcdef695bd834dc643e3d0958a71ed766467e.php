<?php

/* zabolevaniya/createZabolevanieOsugdenyi.html.twig */
class __TwigTemplate_e3689aaaa4f9d2157eb682761dff95b25aa7b0ce7ea497503294e4238b9d7411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "zabolevaniya/createZabolevanieOsugdenyi.html.twig", 1);
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
        $__internal_271a91da7cfcd134ef6c8d91beaf0092f45df1c382a4605e1b4d010a827356b0 = $this->env->getExtension("native_profiler");
        $__internal_271a91da7cfcd134ef6c8d91beaf0092f45df1c382a4605e1b4d010a827356b0->enter($__internal_271a91da7cfcd134ef6c8d91beaf0092f45df1c382a4605e1b4d010a827356b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "zabolevaniya/createZabolevanieOsugdenyi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_271a91da7cfcd134ef6c8d91beaf0092f45df1c382a4605e1b4d010a827356b0->leave($__internal_271a91da7cfcd134ef6c8d91beaf0092f45df1c382a4605e1b4d010a827356b0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f98ce70c6c9787ef89cac321150a14ba738ecb66f0efa4e9a2454f8d189e33b8 = $this->env->getExtension("native_profiler");
        $__internal_f98ce70c6c9787ef89cac321150a14ba738ecb66f0efa4e9a2454f8d189e33b8->enter($__internal_f98ce70c6c9787ef89cac321150a14ba738ecb66f0efa4e9a2454f8d189e33b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление заболевшего осужденного</h1>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_job", array()), 'label', array("label" => "Место работы"));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_job", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_study", array()), 'label', array("label" => "Место учебы"));
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_study", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_progivaniya", array()), 'label', array("label" => "Место проживания"));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_progivaniya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_viyavleniya", array()), 'label', array("label" => "Дата заболевания (дд.мм.гггг)"));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_viyavleniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_gospit", array()), 'label', array("label" => "Дата госпитализации в МЧ (дд.мм.гггг)"));
        echo "
        ";
        // line 34
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
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mbt", array()), 'label', array("label" => "МБТ"));
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mbt", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_zakl_dezin", array()), 'label', array("label" => "Дата заключительной дезинфекции (дд.мм.гггг)"));
        echo "
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_zakl_dezin", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_post_v_org", array()), 'label', array("label" => "Дата поступления в учреждение (дд.мм.гггг)"));
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_post_v_org", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "       
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_obr", array()), 'label', array("label" => "Дата обращения в МЧ (дд.мм.гггг)"));
        echo "
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_obr", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "         
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viyavlen", array()), 'label', array("label" => "Выявлен"));
        echo "
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viyavlen", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recidiv", array()), 'label', array("label" => "Заболеваемость"));
        echo "
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recidiv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postupil_iz", array()), 'label', array("label" => "Поступил из"));
        echo "
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postupil_iz", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_common", array()), 'label', array("label" => "Адрес общий"));
        echo "
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_common", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_propiska", array()), 'label', array("label" => "Адрес по прописке"));
        echo "
        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_propiska", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "          
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ochag", array()), 'label', array("label" => "Очаг"));
        echo "
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ochag", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "        
    </div>
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"datesFLG\" data-prototype=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datesFLG", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>    
    <div class=\"col-md-6 list_add\"></div>
    
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"patologiya\" data-prototype=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "soput_patol", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>    
    <div class=\"col-md-6 list_add\"></div>
    
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"kontaktnyi\" data-prototype=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kontaktnyi", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>    
    <div class=\"col-md-6 list_add\"></div>
    
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить заболевшего осужденного\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_f98ce70c6c9787ef89cac321150a14ba738ecb66f0efa4e9a2454f8d189e33b8->leave($__internal_f98ce70c6c9787ef89cac321150a14ba738ecb66f0efa4e9a2454f8d189e33b8_prof);

    }

    // line 101
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4c125d23b9a7232259fd18c2c829718ced083e8d2d3599da3bbc526db0026374 = $this->env->getExtension("native_profiler");
        $__internal_4c125d23b9a7232259fd18c2c829718ced083e8d2d3599da3bbc526db0026374->enter($__internal_4c125d23b9a7232259fd18c2c829718ced083e8d2d3599da3bbc526db0026374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 102
        echo "
";
        
        $__internal_4c125d23b9a7232259fd18c2c829718ced083e8d2d3599da3bbc526db0026374->leave($__internal_4c125d23b9a7232259fd18c2c829718ced083e8d2d3599da3bbc526db0026374_prof);

    }

    public function getTemplateName()
    {
        return "zabolevaniya/createZabolevanieOsugdenyi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 102,  281 => 101,  263 => 89,  249 => 78,  235 => 67,  223 => 58,  219 => 57,  215 => 56,  211 => 55,  207 => 54,  203 => 53,  199 => 52,  195 => 51,  191 => 50,  187 => 49,  183 => 48,  179 => 47,  175 => 46,  171 => 45,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление заболевшего осужденного</h1>*/
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
/*         {{ form_label(form.organization, 'Учреждение') }}*/
/*         {{ form_widget(form.organization, { 'attr': {'class': 'form-control'} }) }}    */
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
/*         {{ form_label(form.date_vzyatiya_na_uchet, 'Дата взятия на учет ЛИУ-9 (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_vzyatiya_na_uchet, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         {{ form_label(form.date_perevoda, 'Дата перевода в ЛИУ-9 (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_perevoda, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }} */
/*         {{ form_label(form.mbt, 'МБТ') }}*/
/*         {{ form_widget(form.mbt, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.date_zakl_dezin, 'Дата заключительной дезинфекции (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_zakl_dezin, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         {{ form_label(form.date_post_v_org, 'Дата поступления в учреждение (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_post_v_org, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}       */
/*         {{ form_label(form.date_obr, 'Дата обращения в МЧ (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date_obr, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}         */
/*         {{ form_label(form.viyavlen, 'Выявлен') }}*/
/*         {{ form_widget(form.viyavlen, { 'attr': {'class': 'form-control'} }) }}      */
/*         {{ form_label(form.recidiv, 'Заболеваемость') }}*/
/*         {{ form_widget(form.recidiv, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.postupil_iz, 'Поступил из') }}*/
/*         {{ form_widget(form.postupil_iz, { 'attr': {'class': 'form-control'} }) }}  */
/*         {{ form_label(form.address_common, 'Адрес общий') }}*/
/*         {{ form_widget(form.address_common, { 'attr': {'class': 'form-control'} }) }}  */
/*         {{ form_label(form.address_propiska, 'Адрес по прописке') }}*/
/*         {{ form_widget(form.address_propiska, { 'attr': {'class': 'form-control'} }) }}          */
/*         {{ form_label(form.ochag, 'Очаг') }}*/
/*         {{ form_widget(form.ochag, { 'attr': {'class': 'form-control'} }) }}        */
/*     </div>*/
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/*     */
/*     <div class="col-md-6">*/
/*         <div class="datesFLG" data-prototype="{{ form_widget(form.datesFLG.vars.prototype)|e }}"></div>*/
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
/*         <div class="patologiya" data-prototype="{{ form_widget(form.soput_patol.vars.prototype)|e }}"></div>*/
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
/*     <input type="submit" value="Добавить заболевшего осужденного" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
