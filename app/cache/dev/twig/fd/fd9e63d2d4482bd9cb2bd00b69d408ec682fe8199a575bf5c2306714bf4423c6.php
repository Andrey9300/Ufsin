<?php

/* organization/createZabolevanieOchag.html.twig */
class __TwigTemplate_20730926068fc90896cfa2dbbdb6e4be0b06e9e34c81c7f5c491e95282387c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/createZabolevanieOchag.html.twig", 1);
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
        $__internal_1f26885da4f1cd28caa0bb669f60a3f3e409069c38472d98b4c50825b4d8f25c = $this->env->getExtension("native_profiler");
        $__internal_1f26885da4f1cd28caa0bb669f60a3f3e409069c38472d98b4c50825b4d8f25c->enter($__internal_1f26885da4f1cd28caa0bb669f60a3f3e409069c38472d98b4c50825b4d8f25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/createZabolevanieOchag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f26885da4f1cd28caa0bb669f60a3f3e409069c38472d98b4c50825b4d8f25c->leave($__internal_1f26885da4f1cd28caa0bb669f60a3f3e409069c38472d98b4c50825b4d8f25c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a97a5629ebfde5905470651c96a9c13be71b2ac74f276951b9535d470db84cf2 = $this->env->getExtension("native_profiler");
        $__internal_a97a5629ebfde5905470651c96a9c13be71b2ac74f276951b9535d470db84cf2->enter($__internal_a97a5629ebfde5905470651c96a9c13be71b2ac74f276951b9535d470db84cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a97a5629ebfde5905470651c96a9c13be71b2ac74f276951b9535d470db84cf2->leave($__internal_a97a5629ebfde5905470651c96a9c13be71b2ac74f276951b9535d470db84cf2_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3241c1089236be5c49a34070b77628cdcc3c7d5fc638476f9fd6dad4885c3015 = $this->env->getExtension("native_profiler");
        $__internal_3241c1089236be5c49a34070b77628cdcc3c7d5fc638476f9fd6dad4885c3015->enter($__internal_3241c1089236be5c49a34070b77628cdcc3c7d5fc638476f9fd6dad4885c3015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "
";
        
        $__internal_3241c1089236be5c49a34070b77628cdcc3c7d5fc638476f9fd6dad4885c3015->leave($__internal_3241c1089236be5c49a34070b77628cdcc3c7d5fc638476f9fd6dad4885c3015_prof);

    }

    public function getTemplateName()
    {
        return "organization/createZabolevanieOchag.html.twig";
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
