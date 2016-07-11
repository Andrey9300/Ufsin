<?php

/* otchet/proverkaNakazaniyaAll.html.twig */
class __TwigTemplate_131e48ec65d9acad6de8219e8cf105f5dca842109958333c4d9dfba9bf0feb23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/proverkaNakazaniyaAll.html.twig", 1);
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
        $__internal_8e5cf86c320313444ecfeb98dca52fd2dd911d3052c8ce57bffd873ef62fe6b1 = $this->env->getExtension("native_profiler");
        $__internal_8e5cf86c320313444ecfeb98dca52fd2dd911d3052c8ce57bffd873ef62fe6b1->enter($__internal_8e5cf86c320313444ecfeb98dca52fd2dd911d3052c8ce57bffd873ef62fe6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/proverkaNakazaniyaAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5cf86c320313444ecfeb98dca52fd2dd911d3052c8ce57bffd873ef62fe6b1->leave($__internal_8e5cf86c320313444ecfeb98dca52fd2dd911d3052c8ce57bffd873ef62fe6b1_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_695aa49899850307cdca26d20629cc48c717a1ad6b0f682e13b138f2992932c1 = $this->env->getExtension("native_profiler");
        $__internal_695aa49899850307cdca26d20629cc48c717a1ad6b0f682e13b138f2992932c1->enter($__internal_695aa49899850307cdca26d20629cc48c717a1ad6b0f682e13b138f2992932c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", "otchet/proverkaNakazaniyaAll.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Привлеченные к наказанию</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("proverka_nakazaniya");
        echo "\">
            <div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата от (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateOt\" id=\"proverka_date\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["dateOt"]) ? $context["dateOt"] : $this->getContext($context, "dateOt")), "html", null, true);
        echo "\">
            </div><div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата до (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateDo\" id=\"proverka_date\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["dateDo"]) ? $context["dateDo"] : $this->getContext($context, "dateDo")), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-3\" style=\"margin-top:25px\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Выбрать\">
            </div>
        </form>
    </div>

    ";
        // line 25
        if (twig_test_empty((isset($context["proverkaNakazaniya"]) ? $context["proverkaNakazaniya"] : $this->getContext($context, "proverkaNakazaniya")))) {
            // line 26
            echo "        <p>Нет наказаний в учреждениях в выбранный период</p>
    ";
        } else {
            // line 28
            echo "
        <table class=\"table table-hover main narusheniyaOrganization\">
            <thead>
                <tr>
                    <td>ИК</td>
                    <td>Номер</td>
                    <td>ФИО</td>
                    <td>Дата</td>
                    <td>Должность</td>
                    <td>Звание</td>
                    <td>Тип наказания</td>
                    <td>Вид наказания</td>
                </tr>
            </thead>
            <tbody>
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaNakazaniya"]) ? $context["proverkaNakazaniya"] : $this->getContext($context, "proverkaNakazaniya")));
            foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
                // line 44
                echo "                    <tr>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "name_short", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "nomer", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "fio", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverka"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "dolgnost", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "zvanie", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "type", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "podchinennost", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </tbody>
        </table>
    ";
        }
        // line 58
        echo "</div>

";
        
        $__internal_695aa49899850307cdca26d20629cc48c717a1ad6b0f682e13b138f2992932c1->leave($__internal_695aa49899850307cdca26d20629cc48c717a1ad6b0f682e13b138f2992932c1_prof);

    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6f6df16ff155bf854746d0d02766d075067c6851cd25290155514c66436f18cc = $this->env->getExtension("native_profiler");
        $__internal_6f6df16ff155bf854746d0d02766d075067c6851cd25290155514c66436f18cc->enter($__internal_6f6df16ff155bf854746d0d02766d075067c6851cd25290155514c66436f18cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 63
        echo "
";
        
        $__internal_6f6df16ff155bf854746d0d02766d075067c6851cd25290155514c66436f18cc->leave($__internal_6f6df16ff155bf854746d0d02766d075067c6851cd25290155514c66436f18cc_prof);

    }

    public function getTemplateName()
    {
        return "otchet/proverkaNakazaniyaAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 63,  157 => 62,  148 => 58,  143 => 55,  134 => 52,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  110 => 46,  106 => 45,  103 => 44,  99 => 43,  82 => 28,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/proverka_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Привлеченные к наказанию</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('proverka_nakazaniya') }}">*/
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
/*     {% if proverkaNakazaniya is empty%}*/
/*         <p>Нет наказаний в учреждениях в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover main narusheniyaOrganization">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td>ИК</td>*/
/*                     <td>Номер</td>*/
/*                     <td>ФИО</td>*/
/*                     <td>Дата</td>*/
/*                     <td>Должность</td>*/
/*                     <td>Звание</td>*/
/*                     <td>Тип наказания</td>*/
/*                     <td>Вид наказания</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for proverka in proverkaNakazaniya %}*/
/*                     <tr>*/
/*                         <td>{{ proverka.name_short }}</td>*/
/*                         <td>{{ proverka.nomer }}</td>*/
/*                         <td>{{ proverka.fio }}</td>*/
/*                         <td>{{ proverka.date|date("d.m.Y") }}</td>*/
/*                         <td>{{ proverka.dolgnost }}</td>*/
/*                         <td>{{ proverka.zvanie }}</td>*/
/*                         <td>{{ proverka.type }}</td>*/
/*                         <td>{{ proverka.podchinennost }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
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
