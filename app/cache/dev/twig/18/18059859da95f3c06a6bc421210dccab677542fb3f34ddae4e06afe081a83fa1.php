<?php

/* fkuz/createIssledovanie.html.twig */
class __TwigTemplate_2072c48fd1f34989bf1bf907038ecf57c23ceb1944962c93c6c8a44f66a5aec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/createIssledovanie.html.twig", 1);
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
        $__internal_d4ae539c2c453fe36f2e8cbae61f09f1d9bc8e28df6fe27d9ff9721dd5322673 = $this->env->getExtension("native_profiler");
        $__internal_d4ae539c2c453fe36f2e8cbae61f09f1d9bc8e28df6fe27d9ff9721dd5322673->enter($__internal_d4ae539c2c453fe36f2e8cbae61f09f1d9bc8e28df6fe27d9ff9721dd5322673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/createIssledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ae539c2c453fe36f2e8cbae61f09f1d9bc8e28df6fe27d9ff9721dd5322673->leave($__internal_d4ae539c2c453fe36f2e8cbae61f09f1d9bc8e28df6fe27d9ff9721dd5322673_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_541ca22356753e114959ed642890ddd731fc74c41f3a27475092f28531b4e88a = $this->env->getExtension("native_profiler");
        $__internal_541ca22356753e114959ed642890ddd731fc74c41f3a27475092f28531b4e88a->enter($__internal_541ca22356753e114959ed642890ddd731fc74c41f3a27475092f28531b4e88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление лабораторного исследования для «";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["fkuzName"]) ? $context["fkuzName"] : $this->getContext($context, "fkuzName")), "html", null, true);
        echo "»</h1>
</div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить исследование\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"issledovanie row\">

    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер протокола"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата протокола (дд.мм.гггг)"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "

</div>

<hr/>

<div class=\"dobavlenie row\">

    <div class=\"col-md-6\">
        <div class=\"lab_issledovanie\" data-prototype=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieObjectFkuz", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-6 list_add\"></div>
    
</div>
   
<hr/>
   
<div class=\"row\">
    <input type=\"submit\" value=\"Добавить исследование\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_541ca22356753e114959ed642890ddd731fc74c41f3a27475092f28531b4e88a->leave($__internal_541ca22356753e114959ed642890ddd731fc74c41f3a27475092f28531b4e88a_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_20a3d30ebc5a67ead82b9aeac7e0d0fba0e28aeceab55568fd033e8ebe1a4b91 = $this->env->getExtension("native_profiler");
        $__internal_20a3d30ebc5a67ead82b9aeac7e0d0fba0e28aeceab55568fd033e8ebe1a4b91->enter($__internal_20a3d30ebc5a67ead82b9aeac7e0d0fba0e28aeceab55568fd033e8ebe1a4b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 43
        echo "
";
        
        $__internal_20a3d30ebc5a67ead82b9aeac7e0d0fba0e28aeceab55568fd033e8ebe1a4b91->leave($__internal_20a3d30ebc5a67ead82b9aeac7e0d0fba0e28aeceab55568fd033e8ebe1a4b91_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/createIssledovanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  105 => 42,  85 => 28,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  50 => 8,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление лабораторного исследования для «{{ fkuzName }}»</h1>*/
/* </div>*/
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить исследование" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="issledovanie row">*/
/* */
/*     {{ form_label(form.nomer, 'Номер протокола') }}*/
/*     {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*     {{ form_label(form.date, 'Дата протокола (дд.мм.гггг)') }}*/
/*     {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/* */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/* */
/*     <div class="col-md-6">*/
/*         <div class="lab_issledovanie" data-prototype="{{ form_widget(form.issledovanieObjectFkuz.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-6 list_add"></div>*/
/*     */
/* </div>*/
/*    */
/* <hr/>*/
/*    */
/* <div class="row">*/
/*     <input type="submit" value="Добавить исследование" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
