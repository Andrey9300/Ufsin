<?php

/* :fkuz:editIssledovanieObject.html.twig */
class __TwigTemplate_eef7552329a590fd2ec787dece808ee030025258f1e44ba53c5529571e3cc9bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:editIssledovanieObject.html.twig", 1);
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
        $__internal_eeb4cb3dfe9b930b3418f7e8c2252e670c0f42336ee644a34f5e98d03d99271e = $this->env->getExtension("native_profiler");
        $__internal_eeb4cb3dfe9b930b3418f7e8c2252e670c0f42336ee644a34f5e98d03d99271e->enter($__internal_eeb4cb3dfe9b930b3418f7e8c2252e670c0f42336ee644a34f5e98d03d99271e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:editIssledovanieObject.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb4cb3dfe9b930b3418f7e8c2252e670c0f42336ee644a34f5e98d03d99271e->leave($__internal_eeb4cb3dfe9b930b3418f7e8c2252e670c0f42336ee644a34f5e98d03d99271e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_667c26c745e7feb4c93ae865776e04ae7646ea53ef1b535348116323bc2d9220 = $this->env->getExtension("native_profiler");
        $__internal_667c26c745e7feb4c93ae865776e04ae7646ea53ef1b535348116323bc2d9220->enter($__internal_667c26c745e7feb4c93ae865776e04ae7646ea53ef1b535348116323bc2d9220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Редактирование исследования</h1>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "result", array()), 'label', array("label" => "Результат"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "result", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieType", array()), 'label', array("label" => "Тип исследования"));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovaniePokazatelFkuz", array()), 'label', array("label" => "Показатель исследования"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovaniePokazatelFkuz", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proba", array()), 'label', array("label" => "Проба"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proba", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_znak", array()), 'label', array("label" => "Если больше \"+\" (меньше \"-\")"));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_znak", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ", array()), 'label', array("label" => "Начало диапазона (от), или +/- (присутствует/отсутствует), или число"));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_dob", array()), 'label', array("label" => "Норматив до"));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_dob", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      

</div> 

<div class=\"row\">
    <div class=\"col-md-12\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>
</div>

";
        
        $__internal_667c26c745e7feb4c93ae865776e04ae7646ea53ef1b535348116323bc2d9220->leave($__internal_667c26c745e7feb4c93ae865776e04ae7646ea53ef1b535348116323bc2d9220_prof);

    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1665bf90070cad52244cb4d95f2daf950f7a0c01c27554c917e9f62290b63ecf = $this->env->getExtension("native_profiler");
        $__internal_1665bf90070cad52244cb4d95f2daf950f7a0c01c27554c917e9f62290b63ecf->enter($__internal_1665bf90070cad52244cb4d95f2daf950f7a0c01c27554c917e9f62290b63ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 45
        echo "
";
        
        $__internal_1665bf90070cad52244cb4d95f2daf950f7a0c01c27554c917e9f62290b63ecf->leave($__internal_1665bf90070cad52244cb4d95f2daf950f7a0c01c27554c917e9f62290b63ecf_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:editIssledovanieObject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 45,  131 => 44,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Редактирование исследования</h1>*/
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
/*     {{ form_label(form.result, 'Результат') }}*/
/*     {{ form_widget(form.result, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.issledovanieType, 'Тип исследования') }}*/
/*     {{ form_widget(form.issledovanieType, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.issledovaniePokazatelFkuz, 'Показатель исследования') }}*/
/*     {{ form_widget(form.issledovaniePokazatelFkuz, { 'attr': {'class': 'form-control'} }) }}    */
/*     {{ form_label(form.proba, 'Проба') }}*/
/*     {{ form_widget(form.proba, { 'attr': {'class': 'form-control'} }) }}      */
/*     {{ form_label(form.normativ_znak, 'Если больше "+" (меньше "-")') }}*/
/*     {{ form_widget(form.normativ_znak, { 'attr': {'class': 'form-control'} }) }}      */
/*     {{ form_label(form.normativ, 'Начало диапазона (от), или +/- (присутствует/отсутствует), или число') }}*/
/*     {{ form_widget(form.normativ, { 'attr': {'class': 'form-control'} }) }}      */
/*     {{ form_label(form.normativ_dob, 'Норматив до') }}*/
/*     {{ form_widget(form.normativ_dob, { 'attr': {'class': 'form-control'} }) }}      */
/* */
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
