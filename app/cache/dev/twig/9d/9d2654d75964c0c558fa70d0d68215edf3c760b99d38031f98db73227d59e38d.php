<?php

/* :organization:editNakazanie.html.twig */
class __TwigTemplate_b22dc46283bf0774b710e87e8a5722e5818220a68e6906f2fbedf949d1887222 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:editNakazanie.html.twig", 1);
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
        $__internal_cf42a889f4b716beb15106172bb85464d61b0e5b3518dff287d1a72d19e70dc0 = $this->env->getExtension("native_profiler");
        $__internal_cf42a889f4b716beb15106172bb85464d61b0e5b3518dff287d1a72d19e70dc0->enter($__internal_cf42a889f4b716beb15106172bb85464d61b0e5b3518dff287d1a72d19e70dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:editNakazanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf42a889f4b716beb15106172bb85464d61b0e5b3518dff287d1a72d19e70dc0->leave($__internal_cf42a889f4b716beb15106172bb85464d61b0e5b3518dff287d1a72d19e70dc0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f3c1963146d1175c1389986d65dc11f44673ff0b02871079106c820a28567993 = $this->env->getExtension("native_profiler");
        $__internal_f3c1963146d1175c1389986d65dc11f44673ff0b02871079106c820a28567993->enter($__internal_f3c1963146d1175c1389986d65dc11f44673ff0b02871079106c820a28567993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Редактирование наказания от «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proverkaNakazanie"]) ? $context["proverkaNakazanie"] : $this->getContext($context, "proverkaNakazanie")), "nomer", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proverkaNakazanie"]) ? $context["proverkaNakazanie"] : $this->getContext($context, "proverkaNakazanie")), "date", array()), "d.m.Y"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'label', array("label" => "ФИО"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dolgnost", array()), 'label', array("label" => "Должность"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dolgnost", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zvanie", array()), 'label', array("label" => "Звание"));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zvanie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "podchinennost", array()), 'label', array("label" => "Подчиненность"));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "podchinennost", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label" => "Тип наказания"));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "      
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vid", array()), 'label', array("label" => "Вид наказания"));
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vid", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    
</div>

<div class=\"row\">   
    <hr/>         
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"/organization/deleteNakazanie/";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proverkaNakazanie"]) ? $context["proverkaNakazanie"] : $this->getContext($context, "proverkaNakazanie")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить наказание</a></li>
   </ul>
</div> 

<div class=\"row\">
    <div class=\"col-md-12\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>
</div>

";
        
        $__internal_f3c1963146d1175c1389986d65dc11f44673ff0b02871079106c820a28567993->leave($__internal_f3c1963146d1175c1389986d65dc11f44673ff0b02871079106c820a28567993_prof);

    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_31e8e3e3b6cc0362bd15dd2aca546e16d7dce89fdc5d91d0eefcf2d785b69b42 = $this->env->getExtension("native_profiler");
        $__internal_31e8e3e3b6cc0362bd15dd2aca546e16d7dce89fdc5d91d0eefcf2d785b69b42->enter($__internal_31e8e3e3b6cc0362bd15dd2aca546e16d7dce89fdc5d91d0eefcf2d785b69b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 54
        echo "
";
        
        $__internal_31e8e3e3b6cc0362bd15dd2aca546e16d7dce89fdc5d91d0eefcf2d785b69b42->leave($__internal_31e8e3e3b6cc0362bd15dd2aca546e16d7dce89fdc5d91d0eefcf2d785b69b42_prof);

    }

    public function getTemplateName()
    {
        return ":organization:editNakazanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  154 => 53,  136 => 41,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  53 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Редактирование наказания от «{{ proverkaNakazanie.nomer }}, {{ proverkaNakazanie.date|date("d.m.Y") }}»</h1>*/
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
/*     {{ form_label(form.nomer, 'Номер') }}*/
/*     {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*     {{ form_widget(form.date, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.fio, 'ФИО') }}*/
/*     {{ form_widget(form.fio, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.dolgnost, 'Должность') }}*/
/*     {{ form_widget(form.dolgnost, { 'attr': {'class': 'form-control'} }) }}  */
/*     {{ form_label(form.zvanie, 'Звание') }}*/
/*     {{ form_widget(form.zvanie, { 'attr': {'class': 'form-control'} }) }}    */
/*     {{ form_label(form.podchinennost, 'Подчиненность') }}*/
/*     {{ form_widget(form.podchinennost, { 'attr': {'class': 'form-control'} }) }}      */
/*     {{ form_label(form.type, 'Тип наказания') }}*/
/*     {{ form_widget(form.type, { 'attr': {'class': 'form-control'} }) }}      */
/*     {{ form_label(form.vid, 'Вид наказания') }}*/
/*     {{ form_widget(form.vid, { 'attr': {'class': 'form-control'} }) }}*/
/*     */
/* </div>*/
/* */
/* <div class="row">   */
/*     <hr/>         */
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="/organization/deleteNakazanie/{{ proverkaNakazanie.id }}" class="delete_entity">Удалить наказание</a></li>*/
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
