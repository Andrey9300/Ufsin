<?php

/* otchet/proverkaNarusheniyaVnimanie.html.twig */
class __TwigTemplate_bcf1e0c0d9c7ea5d361e9ee0dac417c4a7ae7084578c1a7dcf4f14e18a410e9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/proverkaNarusheniyaVnimanie.html.twig", 1);
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
        $__internal_50da7ce581838fe805aeb2bcd16a7b5b45ba481d6f6b36fbf74757be2429fbb4 = $this->env->getExtension("native_profiler");
        $__internal_50da7ce581838fe805aeb2bcd16a7b5b45ba481d6f6b36fbf74757be2429fbb4->enter($__internal_50da7ce581838fe805aeb2bcd16a7b5b45ba481d6f6b36fbf74757be2429fbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/proverkaNarusheniyaVnimanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50da7ce581838fe805aeb2bcd16a7b5b45ba481d6f6b36fbf74757be2429fbb4->leave($__internal_50da7ce581838fe805aeb2bcd16a7b5b45ba481d6f6b36fbf74757be2429fbb4_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f87d63390181495ad97ee3def7eaef86e12d338aa7e9a122b2f629a24d52b384 = $this->env->getExtension("native_profiler");
        $__internal_f87d63390181495ad97ee3def7eaef86e12d338aa7e9a122b2f629a24d52b384->enter($__internal_f87d63390181495ad97ee3def7eaef86e12d338aa7e9a122b2f629a24d52b384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", "otchet/proverkaNarusheniyaVnimanie.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Нарушения требующие особого внимания</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("proverka_narusheniya_vnimanie");
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
        if (twig_test_empty((isset($context["proverkaNarusheniyaVnimanie"]) ? $context["proverkaNarusheniyaVnimanie"] : $this->getContext($context, "proverkaNarusheniyaVnimanie")))) {
            // line 26
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } else {
            // line 28
            echo "
        <table class=\"table table-hover main narusheniyaOrganization\">
            <thead>
            <tr>
                <td>УК</td>
                <td>Объект</td>
                <td>Описание</td>
                <td>Дата устранения</td>
                <td>Затраты</td>
                <td>Отметка устранения</td>
            </tr>
            </thead>
            <tbody>
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaNarusheniyaVnimanie"]) ? $context["proverkaNarusheniyaVnimanie"] : $this->getContext($context, "proverkaNarusheniyaVnimanie")));
            foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
                // line 42
                echo "                <tr>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "name_short", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "name", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "description", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverka"], "date_ustraneniya", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 47
                if (($this->getAttribute($context["proverka"], "zatraty", array()) == "1")) {
                    // line 48
                    echo "                            Требует больших затрат
                        ";
                } elseif (($this->getAttribute(                // line 49
$context["proverka"], "zatraty", array()) == "0")) {
                    // line 50
                    echo "                            Требует затрат
                        ";
                } elseif (($this->getAttribute(                // line 51
$context["proverka"], "zatraty", array()) == "-1")) {
                    // line 52
                    echo "                            Не требует затрат
                        ";
                }
                // line 54
                echo "                    </td>
                    <td>
                        <select class=\"form-control otmetka\">
                            ";
                // line 57
                if (($this->getAttribute($context["proverka"], "otmetka_ustraneniya", array()) == "0")) {
                    // line 58
                    echo "                                <option id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"0\">Нет</option>
                                <option id=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"1\">Да</option>
                                <option id=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"-1\">Частично</option>
                                <option id=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"2\">Устранено в ходе проверки</option>
                            ";
                } elseif (($this->getAttribute(                // line 62
$context["proverka"], "otmetka_ustraneniya", array()) == "-1")) {
                    // line 63
                    echo "                                <option id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"-1\">Частично</option>
                                <option id=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"0\">Нет</option>
                                <option id=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"1\">Да</option>
                                <option id=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"2\">Устранено в ходе проверки</option>
                            ";
                } elseif (($this->getAttribute(                // line 67
$context["proverka"], "otmetka_ustraneniya", array()) == "1")) {
                    // line 68
                    echo "                                <option id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"1\">Да</option>
                                <option id=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"-1\">Частично</option>
                                <option id=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"0\">Нет</option>
                                <option id=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"2\">Устранено в ходе проверки</option>
                            ";
                } elseif (($this->getAttribute(                // line 72
$context["proverka"], "otmetka_ustraneniya", array()) == "2")) {
                    // line 73
                    echo "                                <option id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"2\">Устранено в ходе проверки</option>
                                <option id=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"1\">Да</option>
                                <option id=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"-1\">Частично</option>
                                <option id=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
                    echo "\" otmetka=\"0\">Нет</option>
                            ";
                }
                // line 78
                echo "                        </select>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "            </tbody>
        </table>
    ";
        }
        // line 85
        echo "</div>

";
        
        $__internal_f87d63390181495ad97ee3def7eaef86e12d338aa7e9a122b2f629a24d52b384->leave($__internal_f87d63390181495ad97ee3def7eaef86e12d338aa7e9a122b2f629a24d52b384_prof);

    }

    // line 89
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3b6d83eb686b0af6a01595ce9f9c905225fd831199087d0ad4a893a843cdfc06 = $this->env->getExtension("native_profiler");
        $__internal_3b6d83eb686b0af6a01595ce9f9c905225fd831199087d0ad4a893a843cdfc06->enter($__internal_3b6d83eb686b0af6a01595ce9f9c905225fd831199087d0ad4a893a843cdfc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 90
        echo "
";
        
        $__internal_3b6d83eb686b0af6a01595ce9f9c905225fd831199087d0ad4a893a843cdfc06->leave($__internal_3b6d83eb686b0af6a01595ce9f9c905225fd831199087d0ad4a893a843cdfc06_prof);

    }

    public function getTemplateName()
    {
        return "otchet/proverkaNarusheniyaVnimanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 90,  241 => 89,  232 => 85,  227 => 82,  218 => 78,  213 => 76,  209 => 75,  205 => 74,  200 => 73,  198 => 72,  194 => 71,  190 => 70,  186 => 69,  181 => 68,  179 => 67,  175 => 66,  171 => 65,  167 => 64,  162 => 63,  160 => 62,  156 => 61,  152 => 60,  148 => 59,  143 => 58,  141 => 57,  136 => 54,  132 => 52,  130 => 51,  127 => 50,  125 => 49,  122 => 48,  120 => 47,  116 => 46,  112 => 45,  108 => 44,  104 => 43,  101 => 42,  97 => 41,  82 => 28,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/proverka_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Нарушения требующие особого внимания</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('proverka_narusheniya_vnimanie') }}">*/
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
/*     {% if proverkaNarusheniyaVnimanie is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover main narusheniyaOrganization">*/
/*             <thead>*/
/*             <tr>*/
/*                 <td>УК</td>*/
/*                 <td>Объект</td>*/
/*                 <td>Описание</td>*/
/*                 <td>Дата устранения</td>*/
/*                 <td>Затраты</td>*/
/*                 <td>Отметка устранения</td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for proverka in proverkaNarusheniyaVnimanie %}*/
/*                 <tr>*/
/*                     <td>{{ proverka.name_short }}</td>*/
/*                     <td>{{ proverka.name }}</td>*/
/*                     <td>{{ proverka.description }}</td>*/
/*                     <td>{{ proverka.date_ustraneniya|date("d.m.Y") }}</td>*/
/*                     <td>{% if proverka.zatraty == "1" %}*/
/*                             Требует больших затрат*/
/*                         {% elseif proverka.zatraty == "0" %}*/
/*                             Требует затрат*/
/*                         {% elseif proverka.zatraty == "-1" %}*/
/*                             Не требует затрат*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         <select class="form-control otmetka">*/
/*                             {% if proverka.otmetka_ustraneniya == "0" %}*/
/*                                 <option id="{{ proverka.id }}" otmetka="0">Нет</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="1">Да</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="-1">Частично</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="2">Устранено в ходе проверки</option>*/
/*                             {% elseif proverka.otmetka_ustraneniya == "-1" %}*/
/*                                 <option id="{{ proverka.id }}" otmetka="-1">Частично</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="0">Нет</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="1">Да</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="2">Устранено в ходе проверки</option>*/
/*                             {% elseif proverka.otmetka_ustraneniya == "1" %}*/
/*                                 <option id="{{ proverka.id }}" otmetka="1">Да</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="-1">Частично</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="0">Нет</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="2">Устранено в ходе проверки</option>*/
/*                             {% elseif proverka.otmetka_ustraneniya == "2" %}*/
/*                                 <option id="{{ proverka.id }}" otmetka="2">Устранено в ходе проверки</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="1">Да</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="-1">Частично</option>*/
/*                                 <option id="{{ proverka.id }}" otmetka="0">Нет</option>*/
/*                             {% endif %}*/
/*                         </select>*/
/*                     </td>*/
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