<?php

/* :issledovanie:editPokazatel.html.twig */
class __TwigTemplate_e392b23de7ecd99f5c7337e2b506652b8592a1297678cb60930bd3949fce7270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":issledovanie:editPokazatel.html.twig", 1);
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
        $__internal_bac1cb52b45757cfb41dc5535830ff6d4ac0ceb2d8c64d133318f89544975518 = $this->env->getExtension("native_profiler");
        $__internal_bac1cb52b45757cfb41dc5535830ff6d4ac0ceb2d8c64d133318f89544975518->enter($__internal_bac1cb52b45757cfb41dc5535830ff6d4ac0ceb2d8c64d133318f89544975518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":issledovanie:editPokazatel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac1cb52b45757cfb41dc5535830ff6d4ac0ceb2d8c64d133318f89544975518->leave($__internal_bac1cb52b45757cfb41dc5535830ff6d4ac0ceb2d8c64d133318f89544975518_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6be028fbd6212b53bca6f702204c8986eef0168ef543450481c4a2363cdcab3e = $this->env->getExtension("native_profiler");
        $__internal_6be028fbd6212b53bca6f702204c8986eef0168ef543450481c4a2363cdcab3e->enter($__internal_6be028fbd6212b53bca6f702204c8986eef0168ef543450481c4a2363cdcab3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Редактирование показателя</h1>
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
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pokazatel", array()), 'label', array("label" => "Показатель"));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pokazatel", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "readonly")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Не соответствие"));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>

    <div class=\"row\">
        <hr/>
        <ul class=\"nav navbar-nav add\">
            <li><a href=\"/issledovanie/deletePokazatel/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pokazateslIssledovaniya"]) ? $context["pokazateslIssledovaniya"] : $this->getContext($context, "pokazateslIssledovaniya")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить показатель</a></li>
        </ul>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
        </div>
    </div>

";
        
        $__internal_6be028fbd6212b53bca6f702204c8986eef0168ef543450481c4a2363cdcab3e->leave($__internal_6be028fbd6212b53bca6f702204c8986eef0168ef543450481c4a2363cdcab3e_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7cc04c1cbb0004dbe1ced58bc3acf45d441930a5b2b7c1f33b7aa92ba9e4b2d7 = $this->env->getExtension("native_profiler");
        $__internal_7cc04c1cbb0004dbe1ced58bc3acf45d441930a5b2b7c1f33b7aa92ba9e4b2d7->enter($__internal_7cc04c1cbb0004dbe1ced58bc3acf45d441930a5b2b7c1f33b7aa92ba9e4b2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 40
        echo "
";
        
        $__internal_7cc04c1cbb0004dbe1ced58bc3acf45d441930a5b2b7c1f33b7aa92ba9e4b2d7->leave($__internal_7cc04c1cbb0004dbe1ced58bc3acf45d441930a5b2b7c1f33b7aa92ba9e4b2d7_prof);

    }

    public function getTemplateName()
    {
        return ":issledovanie:editPokazatel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  99 => 39,  81 => 27,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Редактирование показателя</h1>*/
/*     </div>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         {{ form_label(form.pokazatel, 'Показатель') }}*/
/*         {{ form_widget(form.pokazatel, { 'attr': {'class': 'form-control', 'readonly' : 'readonly'} }) }}*/
/*         {{ form_label(form.description, 'Не соответствие') }}*/
/*         {{ form_widget(form.description, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <hr/>*/
/*         <ul class="nav navbar-nav add">*/
/*             <li><a href="/issledovanie/deletePokazatel/{{ pokazateslIssledovaniya.id }}" class="delete_entity">Удалить показатель</a></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
