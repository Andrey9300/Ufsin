<?php

/* :organization:showNamesIssledovanie.html.twig */
class __TwigTemplate_c8ebd1d3ce75a35831a80192a039c5872e0d40ac178a228a96add0bd899c4dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:showNamesIssledovanie.html.twig", 1);
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
        $__internal_294c7e6a3c08f6568483718df34ec76d2e2cb8dddc22081974d8afe4240f3d3e = $this->env->getExtension("native_profiler");
        $__internal_294c7e6a3c08f6568483718df34ec76d2e2cb8dddc22081974d8afe4240f3d3e->enter($__internal_294c7e6a3c08f6568483718df34ec76d2e2cb8dddc22081974d8afe4240f3d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:showNamesIssledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_294c7e6a3c08f6568483718df34ec76d2e2cb8dddc22081974d8afe4240f3d3e->leave($__internal_294c7e6a3c08f6568483718df34ec76d2e2cb8dddc22081974d8afe4240f3d3e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f6115c2a4e0c095fc40daa980427141d40bbfd2551f6fae12245c088e138f490 = $this->env->getExtension("native_profiler");
        $__internal_f6115c2a4e0c095fc40daa980427141d40bbfd2551f6fae12245c088e138f490->enter($__internal_f6115c2a4e0c095fc40daa980427141d40bbfd2551f6fae12245c088e138f490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Выберите период:</h1>
    </div>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"/issledovanie/";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "html", null, true);
        echo "/showNamesIssl\">
            <div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата от (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateOt\" id=\"proverka_date\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["dateOt"]) ? $context["dateOt"] : $this->getContext($context, "dateOt")), "html", null, true);
        echo "\">
            </div><div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата до (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateDo\" id=\"proverka_date\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["dateDo"]) ? $context["dateDo"] : $this->getContext($context, "dateDo")), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-3\" style=\"margin-top:25px\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Выбрать\">
            </div>
        </form>
    </div>

    <div class=\"row\">
        <table class=\"table table-hover main table-bordered\">
            <thead>
            <tr>
                <td>Номер</td>
                <td>Дата</td>
                <td>Всего</td>
                <td>Не соотв.</td>
                <td>Несоответствия</td>
                <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["issledovanie"]) ? $context["issledovanie"] : $this->getContext($context, "issledovanie")));
        foreach ($context['_seq'] as $context["_key"] => $context["issl"]) {
            // line 39
            echo "                <tr>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "nomer", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["issl"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "all_count", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "ne_sootv", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"/issledovanie/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "/showPokazatels\">Несоответствия</a></td>
                    <td><a href=\"/issledovanie/";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "/editIssledovanie\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"/issledovanie/deleteIssledovanie/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_f6115c2a4e0c095fc40daa980427141d40bbfd2551f6fae12245c088e138f490->leave($__internal_f6115c2a4e0c095fc40daa980427141d40bbfd2551f6fae12245c088e138f490_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bd2d5b5f8c68f561fe3a3624e810f081d9995daea882ea40be6dec870ba7b820 = $this->env->getExtension("native_profiler");
        $__internal_bd2d5b5f8c68f561fe3a3624e810f081d9995daea882ea40be6dec870ba7b820->enter($__internal_bd2d5b5f8c68f561fe3a3624e810f081d9995daea882ea40be6dec870ba7b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 56
        echo "
";
        
        $__internal_bd2d5b5f8c68f561fe3a3624e810f081d9995daea882ea40be6dec870ba7b820->leave($__internal_bd2d5b5f8c68f561fe3a3624e810f081d9995daea882ea40be6dec870ba7b820_prof);

    }

    public function getTemplateName()
    {
        return ":organization:showNamesIssledovanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 56,  137 => 55,  126 => 49,  117 => 46,  113 => 45,  109 => 44,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  90 => 39,  86 => 38,  61 => 16,  55 => 13,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Выберите период:</h1>*/
/*     </div>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="/issledovanie/{{ organization }}/showNamesIssl">*/
/*             <div class="col-md-3">*/
/*                 <label class="required" for="proverka_date">Дата от (дд.мм.гггг)</label>*/
/*                 <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateOt" id="proverka_date" value="{{ dateOt }}">*/
/*             </div><div class="col-md-3">*/
/*                 <label class="required" for="proverka_date">Дата до (дд.мм.гггг)</label>*/
/*                 <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateDo" id="proverka_date" value="{{ dateDo }}">*/
/*             </div>*/
/*             <div class="col-md-3" style="margin-top:25px">*/
/*                 <input type="submit" class="btn btn-success" value="Выбрать">*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <table class="table table-hover main table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <td>Номер</td>*/
/*                 <td>Дата</td>*/
/*                 <td>Всего</td>*/
/*                 <td>Не соотв.</td>*/
/*                 <td>Несоответствия</td>*/
/*                 <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for issl in issledovanie %}*/
/*                 <tr>*/
/*                     <td>{{ issl.nomer }}</td>*/
/*                     <td>{{ issl.date|date("d.m.Y") }}</td>*/
/*                     <td>{{ issl.all_count}}</td>*/
/*                     <td>{{ issl.ne_sootv}}</td>*/
/*                     <td><a href="/issledovanie/{{ issl.id }}/showPokazatels">Несоответствия</a></td>*/
/*                     <td><a href="/issledovanie/{{ issl.id }}/editIssledovanie"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="/issledovanie/deleteIssledovanie/{{ issl.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
