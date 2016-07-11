<?php

/* fkuz/createFkuz.html.twig */
class __TwigTemplate_74c576777edf516e9bf0dd7290d677f3525da15ff14169e7406ec9570ea64496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/createFkuz.html.twig", 1);
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
        $__internal_ae104a13172160f9cef70fc453bebba58e3644e155b8cea752b94ef0f90b01c1 = $this->env->getExtension("native_profiler");
        $__internal_ae104a13172160f9cef70fc453bebba58e3644e155b8cea752b94ef0f90b01c1->enter($__internal_ae104a13172160f9cef70fc453bebba58e3644e155b8cea752b94ef0f90b01c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/createFkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae104a13172160f9cef70fc453bebba58e3644e155b8cea752b94ef0f90b01c1->leave($__internal_ae104a13172160f9cef70fc453bebba58e3644e155b8cea752b94ef0f90b01c1_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_952a3e044dac14f163666e9f7f1871e1fc717630a8bdc5deb16ffc56d7fe3e41 = $this->env->getExtension("native_profiler");
        $__internal_952a3e044dac14f163666e9f7f1871e1fc717630a8bdc5deb16ffc56d7fe3e41->enter($__internal_952a3e044dac14f163666e9f7f1871e1fc717630a8bdc5deb16ffc56d7fe3e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить фкуз/филиал\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"row\">
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_full", array()), 'label', array("label" => "Полное название"));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_full", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_short", array()), 'label', array("label" => "Краткое название"));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_short", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label', array("label" => "Адрес"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'label', array("label" => "ФИО руководителя"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'label', array("label" => "Звание руководителя"));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить фкуз/филиал\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_952a3e044dac14f163666e9f7f1871e1fc717630a8bdc5deb16ffc56d7fe3e41->leave($__internal_952a3e044dac14f163666e9f7f1871e1fc717630a8bdc5deb16ffc56d7fe3e41_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c467f13764e25a2c2853dd181bc16ab635e8e419d9faf9b7613dcc0e9aed2f66 = $this->env->getExtension("native_profiler");
        $__internal_c467f13764e25a2c2853dd181bc16ab635e8e419d9faf9b7613dcc0e9aed2f66->enter($__internal_c467f13764e25a2c2853dd181bc16ab635e8e419d9faf9b7613dcc0e9aed2f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_c467f13764e25a2c2853dd181bc16ab635e8e419d9faf9b7613dcc0e9aed2f66->leave($__internal_c467f13764e25a2c2853dd181bc16ab635e8e419d9faf9b7613dcc0e9aed2f66_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/createFkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  105 => 30,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить фкуз/филиал" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     {{ form_label(form.name_full, 'Полное название') }}*/
/*     {{ form_widget(form.name_full, { 'attr': {'class': 'form-control'} }) }}*/
/*     {{ form_label(form.name_short, 'Краткое название') }}*/
/*     {{ form_widget(form.name_short, { 'attr': {'class': 'form-control'} }) }}    */
/*     {{ form_label(form.address, 'Адрес') }}*/
/*     {{ form_widget(form.address, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*     {{ form_label(form.rukovoditel.fio, 'ФИО руководителя') }}*/
/*     {{ form_widget(form.rukovoditel.fio, { 'attr': {'class': 'form-control'} }) }}*/
/*     {{ form_label(form.rukovoditel.zvanie, 'Звание руководителя') }}*/
/*     {{ form_widget(form.rukovoditel.zvanie, { 'attr': {'class': 'form-control'} }) }}*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить фкуз/филиал" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
