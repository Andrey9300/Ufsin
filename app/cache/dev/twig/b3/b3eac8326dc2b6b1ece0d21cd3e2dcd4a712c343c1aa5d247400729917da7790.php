<?php

/* :zabolevaniya:createZabolevanieOchag.html.twig */
class __TwigTemplate_f99786988bd148386fdb267da28ca99d3e560cf65958bc784474a4b6541ea139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":zabolevaniya:createZabolevanieOchag.html.twig", 1);
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
        $__internal_0f19a2a718ab698b676affccf5191ebade7d965d6d6504c759390015b86d7d03 = $this->env->getExtension("native_profiler");
        $__internal_0f19a2a718ab698b676affccf5191ebade7d965d6d6504c759390015b86d7d03->enter($__internal_0f19a2a718ab698b676affccf5191ebade7d965d6d6504c759390015b86d7d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":zabolevaniya:createZabolevanieOchag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f19a2a718ab698b676affccf5191ebade7d965d6d6504c759390015b86d7d03->leave($__internal_0f19a2a718ab698b676affccf5191ebade7d965d6d6504c759390015b86d7d03_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c28993795ef197ba191199cd9527aaf06836a79a6deaafddaf58761ae2a3172a = $this->env->getExtension("native_profiler");
        $__internal_c28993795ef197ba191199cd9527aaf06836a79a6deaafddaf58761ae2a3172a->enter($__internal_c28993795ef197ba191199cd9527aaf06836a79a6deaafddaf58761ae2a3172a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление очага заболеваний</h1>
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
\t    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'label', array("label" => "Учреждение"));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Наименование"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo " 
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'label', array("label" => "Место"));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "        
    </div>
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"osugdenyi\" data-prototype=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "osugdenyi", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>    
    <div class=\"col-md-6 list_add\"></div>
    
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-6\">
        <div class=\"kontaktnyi\" data-prototype=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kontaktnyi", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>    
    <div class=\"col-md-6 list_add\"></div>
    
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить очаг заболеваний\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_c28993795ef197ba191199cd9527aaf06836a79a6deaafddaf58761ae2a3172a->leave($__internal_c28993795ef197ba191199cd9527aaf06836a79a6deaafddaf58761ae2a3172a_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_03cb5f5999497c81238f63cf70f30e0897a6caee2f5439acc18cbe7d4881d55e = $this->env->getExtension("native_profiler");
        $__internal_03cb5f5999497c81238f63cf70f30e0897a6caee2f5439acc18cbe7d4881d55e->enter($__internal_03cb5f5999497c81238f63cf70f30e0897a6caee2f5439acc18cbe7d4881d55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "
";
        
        $__internal_03cb5f5999497c81238f63cf70f30e0897a6caee2f5439acc18cbe7d4881d55e->leave($__internal_03cb5f5999497c81238f63cf70f30e0897a6caee2f5439acc18cbe7d4881d55e_prof);

    }

    public function getTemplateName()
    {
        return ":zabolevaniya:createZabolevanieOchag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 57,  131 => 56,  113 => 44,  99 => 33,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление очага заболеваний</h1>*/
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
/* 	    {{ form_label(form.organization, 'Учреждение') }}*/
/*         {{ form_widget(form.organization, { 'attr': {'class': 'form-control'} }) }}*/
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
