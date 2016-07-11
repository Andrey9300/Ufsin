<?php

/* otchet/ajax/proverka_narusheniya_all.html.twig */
class __TwigTemplate_f04a406a8096f325835e180a83ab3f80dc95df46124c239b5cacd5adf895fe42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/ajax/proverka_narusheniya_all.html.twig", 1);
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
        $__internal_b06df97bfb10ac523636d1afb1211865ab935676a3c70049531f00a3a77e8c8a = $this->env->getExtension("native_profiler");
        $__internal_b06df97bfb10ac523636d1afb1211865ab935676a3c70049531f00a3a77e8c8a->enter($__internal_b06df97bfb10ac523636d1afb1211865ab935676a3c70049531f00a3a77e8c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/proverka_narusheniya_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b06df97bfb10ac523636d1afb1211865ab935676a3c70049531f00a3a77e8c8a->leave($__internal_b06df97bfb10ac523636d1afb1211865ab935676a3c70049531f00a3a77e8c8a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_84a840d72bf2f8a05c05f3c86a43cf1522c423d31ee4852561e6c9677f41506c = $this->env->getExtension("native_profiler");
        $__internal_84a840d72bf2f8a05c05f3c86a43cf1522c423d31ee4852561e6c9677f41506c->enter($__internal_84a840d72bf2f8a05c05f3c86a43cf1522c423d31ee4852561e6c9677f41506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", "otchet/ajax/proverka_narusheniya_all.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Все нарушения по всем учреждениям</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("narusheniya_obj");
        echo "\" >
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
        if (twig_test_empty((isset($context["narusheniyaAll"]) ? $context["narusheniyaAll"] : $this->getContext($context, "narusheniyaAll")))) {
            // line 26
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } else {
            // line 28
            echo "
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <td>Учреждение</td>
                    <td>Описание нарушения</td>
                    <td>Срок устранения</td>
                    <td>Отметка устранения</td>
                </tr>
            </thead>
            <tbody>
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaAll"]) ? $context["narusheniyaAll"] : $this->getContext($context, "narusheniyaAll")));
            foreach ($context['_seq'] as $context["_key"] => $context["narushenie"]) {
                // line 40
                echo "                <tr>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["narushenie"], "name_short", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["narushenie"], "description", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["narushenie"], "date_ustraneniya", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 44
                if (($this->getAttribute($context["narushenie"], "otmetka_ustraneniya", array()) == "1")) {
                    // line 45
                    echo "                            Да
                            ";
                } elseif (($this->getAttribute(                // line 46
$context["narushenie"], "otmetka_ustraneniya", array()) == "0")) {
                    // line 47
                    echo "                            Нет
                            ";
                } elseif (($this->getAttribute(                // line 48
$context["narushenie"], "otmetka_ustraneniya", array()) == "-1")) {
                    // line 49
                    echo "                            Частично
                        ";
                }
                // line 51
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narushenie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </tbody>
        </table>
    ";
        }
        // line 57
        echo "</div>
";
        
        $__internal_84a840d72bf2f8a05c05f3c86a43cf1522c423d31ee4852561e6c9677f41506c->leave($__internal_84a840d72bf2f8a05c05f3c86a43cf1522c423d31ee4852561e6c9677f41506c_prof);

    }

    // line 60
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_945ae0170b47481f163cf06b1730656ea198945259b64271c14d8e56a8f9aec3 = $this->env->getExtension("native_profiler");
        $__internal_945ae0170b47481f163cf06b1730656ea198945259b64271c14d8e56a8f9aec3->enter($__internal_945ae0170b47481f163cf06b1730656ea198945259b64271c14d8e56a8f9aec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 61
        echo "
";
        
        $__internal_945ae0170b47481f163cf06b1730656ea198945259b64271c14d8e56a8f9aec3->leave($__internal_945ae0170b47481f163cf06b1730656ea198945259b64271c14d8e56a8f9aec3_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/proverka_narusheniya_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  151 => 60,  143 => 57,  138 => 54,  130 => 51,  126 => 49,  124 => 48,  121 => 47,  119 => 46,  116 => 45,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  99 => 40,  95 => 39,  82 => 28,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/proverka_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Все нарушения по всем учреждениям</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('narusheniya_obj') }}" >*/
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
/*     {% if narusheniyaAll is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td>Учреждение</td>*/
/*                     <td>Описание нарушения</td>*/
/*                     <td>Срок устранения</td>*/
/*                     <td>Отметка устранения</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for narushenie in narusheniyaAll %}*/
/*                 <tr>*/
/*                     <td>{{narushenie.name_short}}</td>*/
/*                     <td>{{narushenie.description}}</td>*/
/*                     <td>{{narushenie.date_ustraneniya|date("d.m.Y")}}</td>*/
/*                     <td>{% if narushenie.otmetka_ustraneniya == "1" %}*/
/*                             Да*/
/*                             {% elseif narushenie.otmetka_ustraneniya == "0" %}*/
/*                             Нет*/
/*                             {% elseif narushenie.otmetka_ustraneniya == "-1" %}*/
/*                             Частично*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
