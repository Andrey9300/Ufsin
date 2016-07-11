<?php

/* organization/editNarushenie.html.twig */
class __TwigTemplate_798a65013c690ca9ffe5c08c348a7d38591f8b40d4a68e3ed65cda6a851051f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/editNarushenie.html.twig", 1);
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
        $__internal_5997804ae5b0ea3b7f51d5e4b6e6e0e7547071d6d27b28fb4471809ca477ce85 = $this->env->getExtension("native_profiler");
        $__internal_5997804ae5b0ea3b7f51d5e4b6e6e0e7547071d6d27b28fb4471809ca477ce85->enter($__internal_5997804ae5b0ea3b7f51d5e4b6e6e0e7547071d6d27b28fb4471809ca477ce85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/editNarushenie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5997804ae5b0ea3b7f51d5e4b6e6e0e7547071d6d27b28fb4471809ca477ce85->leave($__internal_5997804ae5b0ea3b7f51d5e4b6e6e0e7547071d6d27b28fb4471809ca477ce85_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c00f19593a68901272f689392fdc8dcc40434d81de2cf368cbf9bfd2c7410362 = $this->env->getExtension("native_profiler");
        $__internal_c00f19593a68901272f689392fdc8dcc40434d81de2cf368cbf9bfd2c7410362->enter($__internal_c00f19593a68901272f689392fdc8dcc40434d81de2cf368cbf9bfd2c7410362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Редактирование нарушения от «";
        // line 6
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["proverkaNarushenie"]) ? $context["proverkaNarushenie"] : $this->getContext($context, "proverkaNarushenie")), "dateUstraneniya", array()))) ? ("") : ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["proverkaNarushenie"]) ? $context["proverkaNarushenie"] : $this->getContext($context, "proverkaNarushenie")), "dateUstraneniya", array()), "d.m.Y") . ","))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proverkaNarushenie"]) ? $context["proverkaNarushenie"] : $this->getContext($context, "proverkaNarushenie")), "description", array()), "html", null, true);
        echo "»</h1>
</div>

";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"col-md-12\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>
</div>

<div class=\"row\">

    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array()), 'label', array("label" => "Объект"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Описание"));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_ustraneniya", array()), 'label', array("label" => "Дата устранения (дд.мм.гггг)"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_ustraneniya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otmetka_ustraneniya", array()), 'label', array("label" => "Отметка устранения"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otmetka_ustraneniya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zatraty", array()), 'label', array("label" => "Затраты"));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zatraty", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primechanie", array()), 'label', array("label" => "Примечание"));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primechanie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vnimanie", array()), 'label', array("label" => "Требует особого внимания"));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vnimanie", array()), 'widget', array("attr" => array("class" => "checkbox")));
        echo "
\t
</div>

<div class=\"row\"> 
    <hr/>           
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"/organization/deleteNarushenie/";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proverkaNarushenie"]) ? $context["proverkaNarushenie"] : $this->getContext($context, "proverkaNarushenie")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить нарушение</a></li>
   </ul>
</div> 

<div class=\"row\">
    <div class=\"col-md-12\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>
</div>

";
        
        $__internal_c00f19593a68901272f689392fdc8dcc40434d81de2cf368cbf9bfd2c7410362->leave($__internal_c00f19593a68901272f689392fdc8dcc40434d81de2cf368cbf9bfd2c7410362_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_497ad9513dc88ba001d89836371a86ef123b7e565761444fb163536a2f08d5b7 = $this->env->getExtension("native_profiler");
        $__internal_497ad9513dc88ba001d89836371a86ef123b7e565761444fb163536a2f08d5b7->enter($__internal_497ad9513dc88ba001d89836371a86ef123b7e565761444fb163536a2f08d5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 52
        echo "
";
        
        $__internal_497ad9513dc88ba001d89836371a86ef123b7e565761444fb163536a2f08d5b7->leave($__internal_497ad9513dc88ba001d89836371a86ef123b7e565761444fb163536a2f08d5b7_prof);

    }

    public function getTemplateName()
    {
        return "organization/editNarushenie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  146 => 51,  128 => 39,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  53 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Редактирование нарушения от «{{ proverkaNarushenie.dateUstraneniya is empty ? "" : proverkaNarushenie.dateUstraneniya|date("d.m.Y") ~ "," }} {{ proverkaNarushenie.description }}»</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* */
/*     {{ form_label(form.objects, 'Объект') }}*/
/*     {{ form_widget(form.objects, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.description, 'Описание') }}*/
/*     {{ form_widget(form.description, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.date_ustraneniya, 'Дата устранения (дд.мм.гггг)') }}*/
/*     {{ form_widget(form.date_ustraneniya, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.otmetka_ustraneniya, 'Отметка устранения') }}*/
/*     {{ form_widget(form.otmetka_ustraneniya, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.zatraty, 'Затраты') }}*/
/*     {{ form_widget(form.zatraty, { 'attr': {'class': 'form-control'} }) }}    */
/*     {{ form_label(form.primechanie, 'Примечание') }}*/
/*     {{ form_widget(form.primechanie, { 'attr': {'class': 'form-control'} }) }}      */
/*     {{ form_label(form.vnimanie, 'Требует особого внимания') }}*/
/*     {{ form_widget(form.vnimanie, { 'attr': {'class': 'checkbox'} }) }}*/
/* 	*/
/* </div>*/
/* */
/* <div class="row"> */
/*     <hr/>           */
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="/organization/deleteNarushenie/{{ proverkaNarushenie.id }}" class="delete_entity">Удалить нарушение</a></li>*/
/*    </ul>*/
/* </div> */
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
