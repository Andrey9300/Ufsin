<?php

/* :organization:createZabolevanieLichnyi.html.twig */
class __TwigTemplate_c59cd817673e58dd569a7280b3942b59b0593d2fc6461e8dfb2e6e04ef9abfbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:createZabolevanieLichnyi.html.twig", 1);
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
        $__internal_15e6034c2ab859f2b22a33a42122a9ebcba75de16bb2d35ee9c8deadec29462c = $this->env->getExtension("native_profiler");
        $__internal_15e6034c2ab859f2b22a33a42122a9ebcba75de16bb2d35ee9c8deadec29462c->enter($__internal_15e6034c2ab859f2b22a33a42122a9ebcba75de16bb2d35ee9c8deadec29462c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:createZabolevanieLichnyi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e6034c2ab859f2b22a33a42122a9ebcba75de16bb2d35ee9c8deadec29462c->leave($__internal_15e6034c2ab859f2b22a33a42122a9ebcba75de16bb2d35ee9c8deadec29462c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5a933a69285108b88bf62d2e3fc8752848f1b4ece1a9c292370f2e18a2a8b7d4 = $this->env->getExtension("native_profiler");
        $__internal_5a933a69285108b88bf62d2e3fc8752848f1b4ece1a9c292370f2e18a2a8b7d4->enter($__internal_5a933a69285108b88bf62d2e3fc8752848f1b4ece1a9c292370f2e18a2a8b7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление заболевшего личного состава в «";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
        echo "»</h1>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'label', array("label" => "Профессия"));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label', array("label" => "Адрес"));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "        
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_zabolevaniya", array()), 'label', array("label" => "Дата заболевания (дд.мм.гггг)"));
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_zabolevaniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_obracheniya", array()), 'label', array("label" => "Дата обращения (дд.мм.гггг)"));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_obracheniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo " 
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_extr_izv", array()), 'label', array("label" => "Дата извещения (дд.мм.гггг)"));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_extr_izv", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
    </div>
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить заболевшего личного состава\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_5a933a69285108b88bf62d2e3fc8752848f1b4ece1a9c292370f2e18a2a8b7d4->leave($__internal_5a933a69285108b88bf62d2e3fc8752848f1b4ece1a9c292370f2e18a2a8b7d4_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_19133c92b3f824f092920688ef082c848e05e093b174cc750c244daf9b101711 = $this->env->getExtension("native_profiler");
        $__internal_19133c92b3f824f092920688ef082c848e05e093b174cc750c244daf9b101711->enter($__internal_19133c92b3f824f092920688ef082c848e05e093b174cc750c244daf9b101711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 43
        echo "
";
        
        $__internal_19133c92b3f824f092920688ef082c848e05e093b174cc750c244daf9b101711->leave($__internal_19133c92b3f824f092920688ef082c848e05e093b174cc750c244daf9b101711_prof);

    }

    public function getTemplateName()
    {
        return ":organization:createZabolevanieLichnyi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 43,  138 => 42,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление заболевшего личного состава в «{{organization_name}}»</h1>*/
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
