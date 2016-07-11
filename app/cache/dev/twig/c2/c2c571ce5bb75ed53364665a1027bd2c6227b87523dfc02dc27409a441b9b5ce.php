<?php

/* otchet/ajax/proverka_type.html.twig */
class __TwigTemplate_e2cbc2b79759bb8d7ffa7f7559f881eba2a7b642d381147ae8e54426bfe31697 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/ajax/proverka_type.html.twig", 1);
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
        $__internal_60a29d3531c0bc375a8720ddbc1d0d5db0097011ae9a2310e1087752b5147282 = $this->env->getExtension("native_profiler");
        $__internal_60a29d3531c0bc375a8720ddbc1d0d5db0097011ae9a2310e1087752b5147282->enter($__internal_60a29d3531c0bc375a8720ddbc1d0d5db0097011ae9a2310e1087752b5147282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/proverka_type.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a29d3531c0bc375a8720ddbc1d0d5db0097011ae9a2310e1087752b5147282->leave($__internal_60a29d3531c0bc375a8720ddbc1d0d5db0097011ae9a2310e1087752b5147282_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2075b271684de2538b1dad7aef7cfb8256b46f7eeca2e3902cc41572d4581493 = $this->env->getExtension("native_profiler");
        $__internal_2075b271684de2538b1dad7aef7cfb8256b46f7eeca2e3902cc41572d4581493->enter($__internal_2075b271684de2538b1dad7aef7cfb8256b46f7eeca2e3902cc41572d4581493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", "otchet/ajax/proverka_type.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Статистика по проверкам</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("common_proverka");
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
        if (twig_test_empty((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")))) {
            // line 26
            echo "        <p>Не добавлены учреждения</p>
    ";
        } elseif (twig_test_empty(        // line 27
(isset($context["proverkaType"]) ? $context["proverkaType"] : $this->getContext($context, "proverkaType")))) {
            // line 28
            echo "        <p>Не добавлены проверки</p>
    ";
        } elseif (twig_test_empty(        // line 29
(isset($context["onTypeAndOrganizationQuantity"]) ? $context["onTypeAndOrganizationQuantity"] : $this->getContext($context, "onTypeAndOrganizationQuantity")))) {
            // line 30
            echo "        <p>Нет проверок в учреждениях в выбранный период</p>
    ";
        } else {
            // line 32
            echo "
        <table class=\"table table-hover table-bordered numbers\">
            <thead>
                <tr>
                    <td></td>
                    <td colspan=\"4\">Плановые</td>
                    <td colspan=\"3\">Внеплановые</td>
                    <td colspan=\"2\" id=\"itog_double\">Итог</td>
                </tr>
                <tr>
                    <td>Учреждение</td>
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaType"]) ? $context["proverkaType"] : $this->getContext($context, "proverkaType")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 44
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    <td>Плановые</td>
                    <td>Внеплановые</td>
                </tr>
            </thead>
            <tbody>

            ";
            // line 52
            $context["flag"] = "0";
            // line 53
            echo "
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                // line 55
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>

                    ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["proverkaType"]) ? $context["proverkaType"] : $this->getContext($context, "proverkaType")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 59
                    echo "
                        ";
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["onTypeAndOrganizationQuantity"]) ? $context["onTypeAndOrganizationQuantity"] : $this->getContext($context, "onTypeAndOrganizationQuantity")));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["quantity"]) {
                        // line 61
                        echo "
                            ";
                        // line 62
                        if (($this->getAttribute($context["quantity"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                            // line 63
                            echo "
                                ";
                            // line 64
                            if (($this->getAttribute($context["quantity"], "name", array()) == $this->getAttribute($context["type"], "name", array()))) {
                                // line 65
                                echo "
                                    ";
                                // line 66
                                if (($this->getAttribute($context["quantity"], "planovost", array()) == "1")) {
                                    // line 67
                                    echo "                                    <td class=\"pokazatel";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                                    echo " plan\">";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["quantity"], 1, array(), "array"), "html", null, true);
                                    echo "</td>
                                    ";
                                } else {
                                    // line 69
                                    echo "                                    <td class=\"pokazatel";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                                    echo " vneplan\">";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["quantity"], 1, array(), "array"), "html", null, true);
                                    echo "</td>
                                    ";
                                }
                                // line 71
                                echo "
                                    ";
                                // line 72
                                $context["flag"] = "1";
                                // line 73
                                echo "
                                ";
                            }
                            // line 75
                            echo "
                            ";
                        }
                        // line 77
                        echo "
                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantity'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "
                        ";
                    // line 80
                    if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                        // line 81
                        echo "                            <td></td>
                        ";
                    }
                    // line 83
                    echo "                        ";
                    $context["flag"] = "0";
                    // line 84
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "
                    <td></td>
                    <td></td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td rowspan=\"3\" style=\"text-align:center; padding-top:40px\">Всего</td>
                    <td id=\"result1\"></td>
                    <td id=\"result2\"></td>
                    <td id=\"result3\"></td>
                    <td id=\"result4\"></td>
                    <td id=\"result5\"></td>
                    <td id=\"result6\"></td>
                    <td id=\"result7\"></td>
                    <td style=\"text-align:center;padding-top:40px\" colspan=\"2\" rowspan=\"3\" id=\"vsego\"></td>
                </tr>
                <tr>
                    <td colspan=\"4\">Плановые</td>
                    <td colspan=\"3\">Внеплановые</td>
                </tr>
                <tr>
                    <td colspan=\"4\" id=\"result8\"></td>
                    <td colspan=\"3\" id=\"result9\"></td>
                </tr>
            </tfoot>
        </table>
    ";
        }
        // line 115
        echo "</div>
";
        
        $__internal_2075b271684de2538b1dad7aef7cfb8256b46f7eeca2e3902cc41572d4581493->leave($__internal_2075b271684de2538b1dad7aef7cfb8256b46f7eeca2e3902cc41572d4581493_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4fff3ba23b5ba0db823f7493034bdadb523678e8b5ab78d2a6425d2bc767fa85 = $this->env->getExtension("native_profiler");
        $__internal_4fff3ba23b5ba0db823f7493034bdadb523678e8b5ab78d2a6425d2bc767fa85->enter($__internal_4fff3ba23b5ba0db823f7493034bdadb523678e8b5ab78d2a6425d2bc767fa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "
";
        
        $__internal_4fff3ba23b5ba0db823f7493034bdadb523678e8b5ab78d2a6425d2bc767fa85->leave($__internal_4fff3ba23b5ba0db823f7493034bdadb523678e8b5ab78d2a6425d2bc767fa85_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/proverka_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 119,  333 => 118,  325 => 115,  299 => 91,  281 => 86,  266 => 84,  263 => 83,  259 => 81,  257 => 80,  254 => 79,  239 => 77,  235 => 75,  231 => 73,  229 => 72,  226 => 71,  218 => 69,  210 => 67,  208 => 66,  205 => 65,  203 => 64,  200 => 63,  198 => 62,  195 => 61,  178 => 60,  175 => 59,  158 => 58,  153 => 56,  148 => 55,  131 => 54,  128 => 53,  126 => 52,  118 => 46,  109 => 44,  105 => 43,  92 => 32,  88 => 30,  86 => 29,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/proverka_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Статистика по проверкам</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('common_proverka') }}" >*/
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
/*     {% if organizations is empty%}*/
/*         <p>Не добавлены учреждения</p>*/
/*     {% elseif proverkaType is empty%}*/
/*         <p>Не добавлены проверки</p>*/
/*     {% elseif onTypeAndOrganizationQuantity is empty%}*/
/*         <p>Нет проверок в учреждениях в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover table-bordered numbers">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td></td>*/
/*                     <td colspan="4">Плановые</td>*/
/*                     <td colspan="3">Внеплановые</td>*/
/*                     <td colspan="2" id="itog_double">Итог</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Учреждение</td>*/
/*                     {% for type in proverkaType %}*/
/*                         <td>{{type.name}}</td>*/
/*                     {% endfor %}*/
/*                     <td>Плановые</td>*/
/*                     <td>Внеплановые</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% set flag = "0" %}*/
/* */
/*             {% for organization in organizations %}*/
/*                 <tr class="pokazatels{{loop.index}}">*/
/*                     <td class="name">{{organization.nameShort}}</td>*/
/* */
/*                     {% for type in proverkaType %}*/
/* */
/*                         {% for quantity in onTypeAndOrganizationQuantity %}*/
/* */
/*                             {% if quantity.name_full == organization.nameFull %}*/
/* */
/*                                 {% if quantity.name == type.name %}*/
/* */
/*                                     {% if quantity.planovost == "1" %}*/
/*                                     <td class="pokazatel{{loop.parent.loop.index}} plan">{{quantity[1]}}</td>*/
/*                                     {% else %}*/
/*                                     <td class="pokazatel{{loop.parent.loop.index}} vneplan">{{quantity[1]}}</td>*/
/*                                     {% endif %}*/
/* */
/*                                     {% set flag = "1" %}*/
/* */
/*                                 {% endif %}*/
/* */
/*                             {% endif %}*/
/* */
/*                         {% endfor %}*/
/* */
/*                         {% if flag == "0" %}*/
/*                             <td></td>*/
/*                         {% endif %}*/
/*                         {% set flag = "0" %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     <td></td>*/
/*                     <td></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*             <tfoot>*/
/*                 <tr>*/
/*                     <td rowspan="3" style="text-align:center; padding-top:40px">Всего</td>*/
/*                     <td id="result1"></td>*/
/*                     <td id="result2"></td>*/
/*                     <td id="result3"></td>*/
/*                     <td id="result4"></td>*/
/*                     <td id="result5"></td>*/
/*                     <td id="result6"></td>*/
/*                     <td id="result7"></td>*/
/*                     <td style="text-align:center;padding-top:40px" colspan="2" rowspan="3" id="vsego"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="4">Плановые</td>*/
/*                     <td colspan="3">Внеплановые</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="4" id="result8"></td>*/
/*                     <td colspan="3" id="result9"></td>*/
/*                 </tr>*/
/*             </tfoot>*/
/*         </table>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
