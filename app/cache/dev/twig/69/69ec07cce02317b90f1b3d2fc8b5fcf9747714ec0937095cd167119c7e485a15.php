<?php

/* issledovanie/editLaboratornyiControl.html.twig */
class __TwigTemplate_81657bd8977380d231214bcf867efca22f704a6ee2fa4cfdf48d412b50686c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "issledovanie/editLaboratornyiControl.html.twig", 1);
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
        $__internal_d10509cfcec327bf63d13a8e93f9f177d624e2a967fa6ad92e002fcd91c50e7e = $this->env->getExtension("native_profiler");
        $__internal_d10509cfcec327bf63d13a8e93f9f177d624e2a967fa6ad92e002fcd91c50e7e->enter($__internal_d10509cfcec327bf63d13a8e93f9f177d624e2a967fa6ad92e002fcd91c50e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "issledovanie/editLaboratornyiControl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d10509cfcec327bf63d13a8e93f9f177d624e2a967fa6ad92e002fcd91c50e7e->leave($__internal_d10509cfcec327bf63d13a8e93f9f177d624e2a967fa6ad92e002fcd91c50e7e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2398d8b039453b1393512de278b472a43168392b7a95beabcdd570d8db664da4 = $this->env->getExtension("native_profiler");
        $__internal_2398d8b039453b1393512de278b472a43168392b7a95beabcdd570d8db664da4->enter($__internal_2398d8b039453b1393512de278b472a43168392b7a95beabcdd570d8db664da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Редактирование лабораторного исследования для «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laboratornyiControl"]) ? $context["laboratornyiControl"] : $this->getContext($context, "laboratornyiControl")), "nomer", array()), "html", null, true);
        echo "»</h1>
</div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
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

    <div class=\"col-md-4\">
        <div class=\"lab_issledovanie\" data-prototype=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieobject", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-4 list_add\"></div>
    <div class=\"col-md-4 list_now\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["laboratornyiControl"]) ? $context["laboratornyiControl"] : $this->getContext($context, "laboratornyiControl")), "getIssledovanieobject", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["issl"]) {
            // line 33
            echo "            <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["issl"], "objects", array()), "name", array()), "html", null, true);
            echo "</strong>, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["issl"], "issledovaniePokazatel", array()), "name", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "result", array()), "html", null, true);
            echo "<button style=\"float:none\" id=\"/issledovanie/deleteIssledovanie/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "\" class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </div>   
</div>
   
<hr/>

<div class=\"row\">            
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"/issledovanie/deleteLabCon/";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laboratornyiControl"]) ? $context["laboratornyiControl"] : $this->getContext($context, "laboratornyiControl")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить лабораторное исследование</a></li>
   </ul>
</div>
   
<div class=\"row\">
    <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_2398d8b039453b1393512de278b472a43168392b7a95beabcdd570d8db664da4->leave($__internal_2398d8b039453b1393512de278b472a43168392b7a95beabcdd570d8db664da4_prof);

    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_84776a10197c2c5d8c1d71663778c35968b974e050e10c47a115eca486f95c1b = $this->env->getExtension("native_profiler");
        $__internal_84776a10197c2c5d8c1d71663778c35968b974e050e10c47a115eca486f95c1b->enter($__internal_84776a10197c2c5d8c1d71663778c35968b974e050e10c47a115eca486f95c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 53
        echo "
";
        
        $__internal_84776a10197c2c5d8c1d71663778c35968b974e050e10c47a115eca486f95c1b->leave($__internal_84776a10197c2c5d8c1d71663778c35968b974e050e10c47a115eca486f95c1b_prof);

    }

    public function getTemplateName()
    {
        return "issledovanie/editLaboratornyiControl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 53,  136 => 52,  120 => 42,  111 => 35,  96 => 33,  92 => 32,  85 => 28,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  50 => 8,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Редактирование лабораторного исследования для «{{laboratornyiControl.nomer}}»</h1>*/
/* </div>*/
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
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
/*     <div class="col-md-4">*/
/*         <div class="lab_issledovanie" data-prototype="{{ form_widget(form.issledovanieobject.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-4 list_add"></div>*/
/*     <div class="col-md-4 list_now">*/
/*         {% for issl in laboratornyiControl.getIssledovanieobject %}*/
/*             <div>Добавленные <strong>{{ issl.objects.name }}</strong>, {{ issl.issledovaniePokazatel.name }}, {{ issl.result }}<button style="float:none" id="/issledovanie/deleteIssledovanie/{{ issl.id }}" class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button></div>*/
/*         {% endfor %}*/
/*     </div>   */
/* </div>*/
/*    */
/* <hr/>*/
/* */
/* <div class="row">            */
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="/issledovanie/deleteLabCon/{{ laboratornyiControl.id }}" class="delete_entity">Удалить лабораторное исследование</a></li>*/
/*    </ul>*/
/* </div>*/
/*    */
/* <div class="row">*/
/*     <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
