<?php

/* :organization:proverkaChastichnoAll.html.twig */
class __TwigTemplate_6ffca3a7a4f62c3861ef3057c7ef80e775f70bfbd33db87f30f7c61924d208ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:proverkaChastichnoAll.html.twig", 1);
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
        $__internal_da89376a59e95cf2c06e2443470bc391bf5dbedd7d600b9225eca3d81cb531ea = $this->env->getExtension("native_profiler");
        $__internal_da89376a59e95cf2c06e2443470bc391bf5dbedd7d600b9225eca3d81cb531ea->enter($__internal_da89376a59e95cf2c06e2443470bc391bf5dbedd7d600b9225eca3d81cb531ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:proverkaChastichnoAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da89376a59e95cf2c06e2443470bc391bf5dbedd7d600b9225eca3d81cb531ea->leave($__internal_da89376a59e95cf2c06e2443470bc391bf5dbedd7d600b9225eca3d81cb531ea_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a74ba1d08850e516f90a249874788ca19e1be95a3fed0f13854573cd8fc734dd = $this->env->getExtension("native_profiler");
        $__internal_a74ba1d08850e516f90a249874788ca19e1be95a3fed0f13854573cd8fc734dd->enter($__internal_a74ba1d08850e516f90a249874788ca19e1be95a3fed0f13854573cd8fc734dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h3>Выполнены частично нарушения в учреждении «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "nameShort", array()), "html", null, true);
        echo "»</h3>
        
    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"/organization/proverkaChastichno/";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()), "html", null, true);
        echo "\">
            <div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата от (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateOt\" id=\"proverka_date\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["dateOt"]) ? $context["dateOt"] : $this->getContext($context, "dateOt")), "html", null, true);
        echo "\">
            </div><div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата до (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateDo\" id=\"proverka_date\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["dateDo"]) ? $context["dateDo"] : $this->getContext($context, "dateDo")), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-3\" style=\"margin-top:25px\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Выбрать\">
            </div>
        </form>    
    </div>
    
    <table class=\"table table-hover main narusheniyaOrganization\">
        <thead>
            <tr>
                <td>Объект</td>
                <td>Описание</td>
                <td>Дата устранения</td>
                <td>Затраты</td>
                <td>Отметка устранения</td>
            </tr>
        </thead>
        <tbody>
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proverkaChastichnoAll"]) ? $context["proverkaChastichnoAll"] : $this->getContext($context, "proverkaChastichnoAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
            // line 35
            echo "                <tr>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverka"], "date_ustraneniya", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            if (($this->getAttribute($context["proverka"], "zatraty", array()) == "1")) {
                // line 40
                echo "                        Требует больших затрат
                        ";
            } elseif (($this->getAttribute(            // line 41
$context["proverka"], "zatraty", array()) == "0")) {
                // line 42
                echo "                        Требует затрат
                        ";
            } elseif (($this->getAttribute(            // line 43
$context["proverka"], "zatraty", array()) == "-1")) {
                // line 44
                echo "                        Не требует затрат
                        ";
            }
            // line 46
            echo "                    </td>
                    <td>
                        <select class=\"form-control otmetka\">
                            <option id=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
            echo "\" otmetka=\"-1\">Частично</option>
                            <option id=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
            echo "\" otmetka=\"0\">Нет</option>
                            <option id=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
            echo "\" otmetka=\"1\">Да</option>
                        </select>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>
</div>
        
";
        
        $__internal_a74ba1d08850e516f90a249874788ca19e1be95a3fed0f13854573cd8fc734dd->leave($__internal_a74ba1d08850e516f90a249874788ca19e1be95a3fed0f13854573cd8fc734dd_prof);

    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e40b53611d5b85bdf2565070e3d18935fae6740ccc8796014998101f1f5b0a3b = $this->env->getExtension("native_profiler");
        $__internal_e40b53611d5b85bdf2565070e3d18935fae6740ccc8796014998101f1f5b0a3b->enter($__internal_e40b53611d5b85bdf2565070e3d18935fae6740ccc8796014998101f1f5b0a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 63
        echo "
";
        
        $__internal_e40b53611d5b85bdf2565070e3d18935fae6740ccc8796014998101f1f5b0a3b->leave($__internal_e40b53611d5b85bdf2565070e3d18935fae6740ccc8796014998101f1f5b0a3b_prof);

    }

    public function getTemplateName()
    {
        return ":organization:proverkaChastichnoAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  155 => 62,  144 => 56,  133 => 51,  129 => 50,  125 => 49,  120 => 46,  116 => 44,  114 => 43,  111 => 42,  109 => 41,  106 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  89 => 35,  85 => 34,  63 => 15,  57 => 12,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h3>Выполнены частично нарушения в учреждении «{{ organization.nameShort }}»</h3>*/
/*         */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="/organization/proverkaChastichno/{{ organization.id }}">*/
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
/*         </form>    */
/*     </div>*/
/*     */
/*     <table class="table table-hover main narusheniyaOrganization">*/
/*         <thead>*/
/*             <tr>*/
/*                 <td>Объект</td>*/
/*                 <td>Описание</td>*/
/*                 <td>Дата устранения</td>*/
/*                 <td>Затраты</td>*/
/*                 <td>Отметка устранения</td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for proverka in proverkaChastichnoAll %}*/
/*                 <tr>*/
/*                     <td>{{ proverka.name }}</td>*/
/*                     <td>{{ proverka.description }}</td>*/
/*                     <td>{{ proverka.date_ustraneniya|date("d.m.Y") }}</td>*/
/*                     <td>{% if proverka.zatraty == "1" %}*/
/*                         Требует больших затрат*/
/*                         {% elseif proverka.zatraty == "0" %}*/
/*                         Требует затрат*/
/*                         {% elseif proverka.zatraty == "-1" %}*/
/*                         Не требует затрат*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         <select class="form-control otmetka">*/
/*                             <option id="{{ proverka.id }}" otmetka="-1">Частично</option>*/
/*                             <option id="{{ proverka.id }}" otmetka="0">Нет</option>*/
/*                             <option id="{{ proverka.id }}" otmetka="1">Да</option>*/
/*                         </select>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/*         */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
