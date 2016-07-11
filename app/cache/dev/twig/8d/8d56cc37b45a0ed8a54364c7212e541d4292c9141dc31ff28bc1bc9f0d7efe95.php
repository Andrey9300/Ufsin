<?php

/* zabolevaniya/showOsugdenyis.html.twig */
class __TwigTemplate_2769464b4c77c2943c28f594730ae650051b0ff7e95916432bd28bfc45bf853c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "zabolevaniya/showOsugdenyis.html.twig", 1);
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
        $__internal_85000141b5d7c135bb85922f38ee0ca4f493eccec28df46e3af6d4054b8a3dbf = $this->env->getExtension("native_profiler");
        $__internal_85000141b5d7c135bb85922f38ee0ca4f493eccec28df46e3af6d4054b8a3dbf->enter($__internal_85000141b5d7c135bb85922f38ee0ca4f493eccec28df46e3af6d4054b8a3dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "zabolevaniya/showOsugdenyis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85000141b5d7c135bb85922f38ee0ca4f493eccec28df46e3af6d4054b8a3dbf->leave($__internal_85000141b5d7c135bb85922f38ee0ca4f493eccec28df46e3af6d4054b8a3dbf_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_37103f54aac21cd1ce6fa203c4d0c3757baae6ffd91f9252f5d7e4d3a4543e58 = $this->env->getExtension("native_profiler");
        $__internal_37103f54aac21cd1ce6fa203c4d0c3757baae6ffd91f9252f5d7e4d3a4543e58->enter($__internal_37103f54aac21cd1ce6fa203c4d0c3757baae6ffd91f9252f5d7e4d3a4543e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Выберите осужденного:</h1>
</div>

<div class=\"row\" style=\"margin-bottom:50px\">
    <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("show_osugdenyis");
        echo "\" >
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
        <div class=\"col-md-3\" style=\"margin-top:45px\">
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("create_zabolevanie_osugdenyi");
        echo "\" style=\"font-size:18px\">Добавить нового заболевшего</a>
        </div>    
    </form>

    ";
        // line 26
        if (twig_test_empty((isset($context["osugdenyis"]) ? $context["osugdenyis"] : $this->getContext($context, "osugdenyis")))) {
            // line 27
            echo "        <p>Нет заболевших в данный период</p>
    ";
        } else {
            // line 29
            echo "
        <table class=\"table table-hover main table-bordered\">
            <thead>
                <tr>
                    <td>ФИО</td>
                    <td>Учреждение</td>
                    <td>Место</td>
                    <td>Дата рождения</td>
                    <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                    <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
                </tr>
            </thead>
            <tbody>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["osugdenyis"]) ? $context["osugdenyis"] : $this->getContext($context, "osugdenyis")));
            foreach ($context['_seq'] as $context["_key"] => $context["osugdenyi"]) {
                // line 43
                echo "                <tr>
                    <td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_card_osugdenyi", array("id" => $this->getAttribute($context["osugdenyi"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["osugdenyi"], "fio", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["osugdenyi"], "name_short", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["osugdenyi"], "place_progivaniya", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["osugdenyi"], "date_birthday", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_osugdenyi", array("id" => $this->getAttribute($context["osugdenyi"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_osugdenyi", array("id" => $this->getAttribute($context["osugdenyi"], "id", array()))), "html", null, true);
                echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osugdenyi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </tbody>
        </table>
    ";
        }
        // line 55
        echo "</div>

";
        
        $__internal_37103f54aac21cd1ce6fa203c4d0c3757baae6ffd91f9252f5d7e4d3a4543e58->leave($__internal_37103f54aac21cd1ce6fa203c4d0c3757baae6ffd91f9252f5d7e4d3a4543e58_prof);

    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6f03d0b8a1def0c83dad45281c5560709a0003b03adf1d1a79fefc22e3e45e3a = $this->env->getExtension("native_profiler");
        $__internal_6f03d0b8a1def0c83dad45281c5560709a0003b03adf1d1a79fefc22e3e45e3a->enter($__internal_6f03d0b8a1def0c83dad45281c5560709a0003b03adf1d1a79fefc22e3e45e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 60
        echo "
";
        
        $__internal_6f03d0b8a1def0c83dad45281c5560709a0003b03adf1d1a79fefc22e3e45e3a->leave($__internal_6f03d0b8a1def0c83dad45281c5560709a0003b03adf1d1a79fefc22e3e45e3a_prof);

    }

    public function getTemplateName()
    {
        return "zabolevaniya/showOsugdenyis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  150 => 59,  141 => 55,  136 => 52,  127 => 49,  123 => 48,  119 => 47,  115 => 46,  111 => 45,  105 => 44,  102 => 43,  98 => 42,  83 => 29,  79 => 27,  77 => 26,  70 => 22,  61 => 16,  55 => 13,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Выберите осужденного:</h1>*/
/* </div>*/
/* */
/* <div class="row" style="margin-bottom:50px">*/
/*     <form class="has-validation-callback" method="post" action="{{ path('show_osugdenyis') }}" >*/
/*         <div class="col-md-3">*/
/*             <label class="required" for="proverka_date">Дата от (дд.мм.гггг)</label>*/
/*             <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateOt" id="proverka_date" value="{{ dateOt }}">*/
/*         </div><div class="col-md-3">*/
/*             <label class="required" for="proverka_date">Дата до (дд.мм.гггг)</label>*/
/*             <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateDo" id="proverka_date" value="{{ dateDo }}">*/
/*         </div>*/
/*         <div class="col-md-3" style="margin-top:25px">*/
/*             <input type="submit" class="btn btn-success" value="Выбрать">*/
/*         </div>*/
/*         <div class="col-md-3" style="margin-top:45px">*/
/*             <a href="{{ path('create_zabolevanie_osugdenyi') }}" style="font-size:18px">Добавить нового заболевшего</a>*/
/*         </div>    */
/*     </form>*/
/* */
/*     {% if osugdenyis is empty%}*/
/*         <p>Нет заболевших в данный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover main table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td>ФИО</td>*/
/*                     <td>Учреждение</td>*/
/*                     <td>Место</td>*/
/*                     <td>Дата рождения</td>*/
/*                     <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                     <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for osugdenyi in osugdenyis %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('show_card_osugdenyi', {'id': osugdenyi.id}) }}">{{ osugdenyi.fio }}</a></td>*/
/*                     <td>{{ osugdenyi.name_short }}</td>*/
/*                     <td>{{ osugdenyi.place_progivaniya }}</td>*/
/*                     <td>{{ osugdenyi.date_birthday|date("d.m.Y") }}</td>*/
/*                     <td><a href="{{ path('edit_osugdenyi', {'id': osugdenyi.id}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="{{ path('delete_osugdenyi', {'id': osugdenyi.id}) }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
