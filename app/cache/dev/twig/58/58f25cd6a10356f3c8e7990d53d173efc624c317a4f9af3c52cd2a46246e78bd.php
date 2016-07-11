<?php

/* :issledovanie:editIssledovanieObject.html.twig */
class __TwigTemplate_a25ddd9070f7e552b5abe0db5ea72d7e6749f3cf6b4b0eb145ae25ddc113fba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":issledovanie:editIssledovanieObject.html.twig", 1);
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
        $__internal_ae79749e8121085dc706bbcc262a1c9cecdf0c3bf11a14bf1ccfbe3076ab270c = $this->env->getExtension("native_profiler");
        $__internal_ae79749e8121085dc706bbcc262a1c9cecdf0c3bf11a14bf1ccfbe3076ab270c->enter($__internal_ae79749e8121085dc706bbcc262a1c9cecdf0c3bf11a14bf1ccfbe3076ab270c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":issledovanie:editIssledovanieObject.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae79749e8121085dc706bbcc262a1c9cecdf0c3bf11a14bf1ccfbe3076ab270c->leave($__internal_ae79749e8121085dc706bbcc262a1c9cecdf0c3bf11a14bf1ccfbe3076ab270c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_bc685961299f5fdcfce692118b115045f5e00c9cafe334d387b0b870c3c95e84 = $this->env->getExtension("native_profiler");
        $__internal_bc685961299f5fdcfce692118b115045f5e00c9cafe334d387b0b870c3c95e84->enter($__internal_bc685961299f5fdcfce692118b115045f5e00c9cafe334d387b0b870c3c95e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Редактирование исследования «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["issledovanieObject"]) ? $context["issledovanieObject"] : $this->getContext($context, "issledovanieObject")), "object", array()), "name", array()), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "object", array()), 'label', array("label" => "Объект"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "object", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "result", array()), 'label', array("label" => "Результат"));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "result", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'label', array("label" => "Место"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieType", array()), 'label', array("label" => "Тип исследования"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovaniePokazatel", array()), 'label', array("label" => "Показатель исследования"));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovaniePokazatel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proba", array()), 'label', array("label" => "Проба"));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proba", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_znak", array()), 'label', array("label" => "Если больше \"+\" (меньше \"-\")"));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_znak", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ", array()), 'label', array("label" => "Начало диапазона (от), или +/- (присутствует/отсутствует), или число"));
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_dob", array()), 'label', array("label" => "Норматив до"));
        echo "
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_dob", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      

</div> 

<div class=\"row\">
    <div class=\"col-md-12\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>
</div>

";
        
        $__internal_bc685961299f5fdcfce692118b115045f5e00c9cafe334d387b0b870c3c95e84->leave($__internal_bc685961299f5fdcfce692118b115045f5e00c9cafe334d387b0b870c3c95e84_prof);

    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_65ba18e253e97cce66bf1ef009437b9e9673546fa142c2fb48fae83442ef73b0 = $this->env->getExtension("native_profiler");
        $__internal_65ba18e253e97cce66bf1ef009437b9e9673546fa142c2fb48fae83442ef73b0->enter($__internal_65ba18e253e97cce66bf1ef009437b9e9673546fa142c2fb48fae83442ef73b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 49
        echo "
";
        
        $__internal_65ba18e253e97cce66bf1ef009437b9e9673546fa142c2fb48fae83442ef73b0->leave($__internal_65ba18e253e97cce66bf1ef009437b9e9673546fa142c2fb48fae83442ef73b0_prof);

    }

    public function getTemplateName()
    {
        return ":issledovanie:editIssledovanieObject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 49,  150 => 48,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Редактирование исследования «{{ issledovanieObject.object.name }}»</h1>*/
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
/*     {{ form_label(form.object, 'Объект') }}*/
/*     {{ form_widget(form.object, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.result, 'Результат') }}*/
/*     {{ form_widget(form.result, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.place, 'Место') }}*/
/*     {{ form_widget(form.place, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.issledovanieType, 'Тип исследования') }}*/
/*     {{ form_widget(form.issledovanieType, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.issledovaniePokazatel, 'Показатель исследования') }}*/
/*     {{ form_widget(form.issledovaniePokazatel, { 'attr': {'class': 'form-control'} }) }}    */
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
