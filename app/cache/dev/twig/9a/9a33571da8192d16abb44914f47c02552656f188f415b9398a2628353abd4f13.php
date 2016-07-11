<?php

/* organization/createProverkaForOrganization.html.twig */
class __TwigTemplate_d4a4e37a66c741a32b4e262c0e4fdda602078240a9ccafc5cf97d6780a635f2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/createProverkaForOrganization.html.twig", 1);
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
        $__internal_68d4b0c5f70609ff1f65651be2370b9a15336f15887072f144c6f944f2a3d1d2 = $this->env->getExtension("native_profiler");
        $__internal_68d4b0c5f70609ff1f65651be2370b9a15336f15887072f144c6f944f2a3d1d2->enter($__internal_68d4b0c5f70609ff1f65651be2370b9a15336f15887072f144c6f944f2a3d1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/createProverkaForOrganization.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d4b0c5f70609ff1f65651be2370b9a15336f15887072f144c6f944f2a3d1d2->leave($__internal_68d4b0c5f70609ff1f65651be2370b9a15336f15887072f144c6f944f2a3d1d2_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c91b2b6c17ff806047a7406471c25f3267adc6301c8cb43ab3222d9685d70709 = $this->env->getExtension("native_profiler");
        $__internal_c91b2b6c17ff806047a7406471c25f3267adc6301c8cb43ab3222d9685d70709->enter($__internal_c91b2b6c17ff806047a7406471c25f3267adc6301c8cb43ab3222d9685d70709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Добавление проверки для ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
        echo "</h1>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"form-group\" style=\"height:30px\">
    <input type=\"submit\" value=\"Добавить проверку\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"form-group proverka\">
    <div class=\"row\">
        <div class=\"col-lg-3\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер проверки"));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-lg-3\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverkaType", array()), 'label', array("label" => "Тип проверки"));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverkaType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>       
        <div class=\"col-lg-3 dates\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_rasporyageniya", array()), 'label', array("label" => "Дата распоряжения (дд.мм.гггг)"));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_rasporyageniya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
        </div>
        <div class=\"col-lg-3 dates\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_akt", array()), 'label', array("label" => "Дата выдачи акта (дд.мм.гггг)"));
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_akt", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
        </div>
        <div class=\"col-lg-3 dates\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_predpisaniya", array()), 'label', array("label" => "Дата предписания (дд.мм.гггг)"));
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_predpisaniya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-lg-3 date\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
        </div>
    </div>
  
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kem_vydano", array()), 'label', array("label" => "Кем выдано"));
        echo "
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kem_vydano", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "            
</div>

<div class=\"form-group\">
    <div class=\"dobavlenie\">
        <div class=\"narushenie\" data-prototype=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverka_narushenie", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">

        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"dobavlenie\">
        <div class=\"nakazanie\" data-prototype=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverka_nakazanie", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">

        </div>
    </div>
</div>

<div class=\"form-group\" style=\"height:30px\">
    <input type=\"submit\" value=\"Добавить проверку\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_c91b2b6c17ff806047a7406471c25f3267adc6301c8cb43ab3222d9685d70709->leave($__internal_c91b2b6c17ff806047a7406471c25f3267adc6301c8cb43ab3222d9685d70709_prof);

    }

    // line 67
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_273d608164ec043c55e8792870fad79d6e44e89621c7615afbab6ff9fd295ac0 = $this->env->getExtension("native_profiler");
        $__internal_273d608164ec043c55e8792870fad79d6e44e89621c7615afbab6ff9fd295ac0->enter($__internal_273d608164ec043c55e8792870fad79d6e44e89621c7615afbab6ff9fd295ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 68
        echo "
";
        
        $__internal_273d608164ec043c55e8792870fad79d6e44e89621c7615afbab6ff9fd295ac0->leave($__internal_273d608164ec043c55e8792870fad79d6e44e89621c7615afbab6ff9fd295ac0_prof);

    }

    public function getTemplateName()
    {
        return "organization/createProverkaForOrganization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 68,  163 => 67,  145 => 55,  134 => 47,  126 => 42,  122 => 41,  115 => 37,  111 => 36,  105 => 33,  101 => 32,  95 => 29,  91 => 28,  85 => 25,  81 => 24,  75 => 21,  71 => 20,  65 => 17,  61 => 16,  49 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <h1>Добавление проверки для {{organization_name}}</h1>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="form-group" style="height:30px">*/
/*     <input type="submit" value="Добавить проверку" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="form-group proverka">*/
/*     <div class="row">*/
/*         <div class="col-lg-3">*/
/*             {{ form_label(form.nomer, 'Номер проверки') }}*/
/*             {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-lg-3">*/
/*             {{ form_label(form.proverkaType, 'Тип проверки') }}*/
/*             {{ form_widget(form.proverkaType, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>       */
/*         <div class="col-lg-3 dates">*/
/*             {{ form_label(form.date_rasporyageniya, 'Дата распоряжения (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_rasporyageniya, { 'attr': {'class': 'form-control'} }) }} */
/*         </div>*/
/*         <div class="col-lg-3 dates">*/
/*             {{ form_label(form.date_akt, 'Дата выдачи акта (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_akt, { 'attr': {'class': 'form-control'} }) }}    */
/*         </div>*/
/*         <div class="col-lg-3 dates">*/
/*             {{ form_label(form.date_predpisaniya, 'Дата предписания (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_predpisaniya, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-lg-3 date">*/
/*             {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date, { 'attr': {'class': 'form-control'} }) }} */
/*         </div>*/
/*     </div>*/
/*   */
/*     {{ form_label(form.kem_vydano, 'Кем выдано') }}*/
/*     {{ form_widget(form.kem_vydano, { 'attr': {'class': 'form-control'} }) }}            */
/* </div>*/
/* */
/* <div class="form-group">*/
/*     <div class="dobavlenie">*/
/*         <div class="narushenie" data-prototype="{{ form_widget(form.proverka_narushenie.vars.prototype)|e }}">*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*     <div class="dobavlenie">*/
/*         <div class="nakazanie" data-prototype="{{ form_widget(form.proverka_nakazanie.vars.prototype)|e }}">*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="form-group" style="height:30px">*/
/*     <input type="submit" value="Добавить проверку" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
