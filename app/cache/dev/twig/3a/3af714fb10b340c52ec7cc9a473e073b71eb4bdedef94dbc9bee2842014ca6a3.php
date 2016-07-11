<?php

/* :fkuz:editLaboratornyiControlFkuz.html.twig */
class __TwigTemplate_915ac133ad4c82b48071c1e15f7febd4a3fa8c780584454b3816692caf2cf1cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:editLaboratornyiControlFkuz.html.twig", 1);
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
        $__internal_9b8bdba10dcd1fc1ca6c85c8b92941040ac2a8ca05ab1545766c2ced542f362e = $this->env->getExtension("native_profiler");
        $__internal_9b8bdba10dcd1fc1ca6c85c8b92941040ac2a8ca05ab1545766c2ced542f362e->enter($__internal_9b8bdba10dcd1fc1ca6c85c8b92941040ac2a8ca05ab1545766c2ced542f362e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:editLaboratornyiControlFkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b8bdba10dcd1fc1ca6c85c8b92941040ac2a8ca05ab1545766c2ced542f362e->leave($__internal_9b8bdba10dcd1fc1ca6c85c8b92941040ac2a8ca05ab1545766c2ced542f362e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_39db8c3d4849e1094ed52be5bfaff2685a3b37d7e74d1a4335859ecaba8e4a6d = $this->env->getExtension("native_profiler");
        $__internal_39db8c3d4849e1094ed52be5bfaff2685a3b37d7e74d1a4335859ecaba8e4a6d->enter($__internal_39db8c3d4849e1094ed52be5bfaff2685a3b37d7e74d1a4335859ecaba8e4a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Изменение лабораторного исследования «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laboratornyiControlFkuz"]) ? $context["laboratornyiControlFkuz"] : $this->getContext($context, "laboratornyiControlFkuz")), "nomer", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieObjectFkuz", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-4 list_add\"></div>
    <div class=\"col-md-4 list_now\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["laboratornyiControlFkuz"]) ? $context["laboratornyiControlFkuz"] : $this->getContext($context, "laboratornyiControlFkuz")), "getIssledovanieObjectFkuz", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["issl"]) {
            // line 33
            echo "            <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["issl"], "issledovaniePokazatelFkuz", array()), "name", array()), "html", null, true);
            echo "</strong>, ";
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
        <li><a href=\"/fkuz/deleteLabCon/";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laboratornyiControlFkuz"]) ? $context["laboratornyiControlFkuz"] : $this->getContext($context, "laboratornyiControlFkuz")), "id", array()), "html", null, true);
        echo "\">Удалить лабораторное исследование</a></li>
   </ul>
</div>
   
<div class=\"row\">
    <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_39db8c3d4849e1094ed52be5bfaff2685a3b37d7e74d1a4335859ecaba8e4a6d->leave($__internal_39db8c3d4849e1094ed52be5bfaff2685a3b37d7e74d1a4335859ecaba8e4a6d_prof);

    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1b70a5448cdfc679340814a7128ad48f9e535e5c289f423c1a6fb55f401c3663 = $this->env->getExtension("native_profiler");
        $__internal_1b70a5448cdfc679340814a7128ad48f9e535e5c289f423c1a6fb55f401c3663->enter($__internal_1b70a5448cdfc679340814a7128ad48f9e535e5c289f423c1a6fb55f401c3663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 53
        echo "
";
        
        $__internal_1b70a5448cdfc679340814a7128ad48f9e535e5c289f423c1a6fb55f401c3663->leave($__internal_1b70a5448cdfc679340814a7128ad48f9e535e5c289f423c1a6fb55f401c3663_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:editLaboratornyiControlFkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 53,  134 => 52,  118 => 42,  109 => 35,  96 => 33,  92 => 32,  85 => 28,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  50 => 8,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Изменение лабораторного исследования «{{ laboratornyiControlFkuz.nomer }}»</h1>*/
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
/*         <div class="lab_issledovanie" data-prototype="{{ form_widget(form.issledovanieObjectFkuz.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-4 list_add"></div>*/
/*     <div class="col-md-4 list_now">*/
/*         {% for issl in laboratornyiControlFkuz.getIssledovanieObjectFkuz %}*/
/*             <div>Добавленные <strong>{{ issl.issledovaniePokazatelFkuz.name }}</strong>, {{ issl.result }}<button style="float:none" id="/issledovanie/deleteIssledovanie/{{ issl.id }}" class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button></div>*/
/*         {% endfor %}*/
/*     </div>   */
/* </div>*/
/*     */
/* <hr/>*/
/* */
/* <div class="row">            */
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="/fkuz/deleteLabCon/{{ laboratornyiControlFkuz.id }}">Удалить лабораторное исследование</a></li>*/
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
