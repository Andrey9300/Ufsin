<?php

/* otchet/ajax/proverka_nakazanie_type_fkuz.html.twig */
class __TwigTemplate_3d2faac7111bbed4268d93f1bbd174fe908f58c0b071f4798e9a76ab8d054af2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6dc40a4af17ff64c49021289c16eee3abd34de56d80dfedcb5dbb4e6a30834e = $this->env->getExtension("native_profiler");
        $__internal_b6dc40a4af17ff64c49021289c16eee3abd34de56d80dfedcb5dbb4e6a30834e->enter($__internal_b6dc40a4af17ff64c49021289c16eee3abd34de56d80dfedcb5dbb4e6a30834e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/proverka_nakazanie_type_fkuz.html.twig"));

        // line 1
        echo "<div class=\"row\">

    ";
        // line 3
        if (twig_test_empty((isset($context["allNamefilial"]) ? $context["allNamefilial"] : $this->getContext($context, "allNamefilial")))) {
            // line 4
            echo "        <p>Не добавлены филиалы</p>
    ";
        } elseif (twig_test_empty(        // line 5
(isset($context["narusheniyaType1"]) ? $context["narusheniyaType1"] : $this->getContext($context, "narusheniyaType1")))) {
            // line 6
            echo "        <p>Нет нарушений в филиалах в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 7
(isset($context["narusheniyaType2"]) ? $context["narusheniyaType2"] : $this->getContext($context, "narusheniyaType2")))) {
            // line 8
            echo "        <p>Нет нарушений в филиалах в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 9
(isset($context["narusheniyaType3"]) ? $context["narusheniyaType3"] : $this->getContext($context, "narusheniyaType3")))) {
            // line 10
            echo "        <p>Нет нарушений в филиалах в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 11
(isset($context["narusheniyaType4"]) ? $context["narusheniyaType4"] : $this->getContext($context, "narusheniyaType4")))) {
            // line 12
            echo "        <p>Нет нарушений в филиалах в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 13
(isset($context["narusheniyaType5"]) ? $context["narusheniyaType5"] : $this->getContext($context, "narusheniyaType5")))) {
            // line 14
            echo "        <p>Нет нарушений в филиалах в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 15
(isset($context["narusheniyaType6"]) ? $context["narusheniyaType6"] : $this->getContext($context, "narusheniyaType6")))) {
            // line 16
            echo "        <p>Нет нарушений в филиалах в выбранный период</p>
    ";
        } else {
            // line 18
            echo "
        <table class=\"table table-hover table-bordered numbers\">
            <thead>
            <tr>
                <td></td>
                <td style=\"font-size:12px\">Неполное служебное</td>
                <td style=\"font-size:12px\">Строгий выговор</td>
                <td style=\"font-size:12px\">Выговор</td>
                <td style=\"font-size:12px\">Замечание</td>
                <td style=\"font-size:12px\">Ораничиться ранее</td>
                <td style=\"font-size:12px\">Строго предупредить</td>
                <td style=\"font-size:12px\">Итог</td>
            </tr>
            </thead>
            <tbody>

            ";
            // line 34
            $context["flag1"] = "0";
            // line 35
            echo "            ";
            $context["flag2"] = "0";
            // line 36
            echo "            ";
            $context["flag3"] = "0";
            // line 37
            echo "            ";
            $context["flag4"] = "0";
            // line 38
            echo "            ";
            $context["flag5"] = "0";
            // line 39
            echo "            ";
            $context["flag6"] = "0";
            // line 40
            echo "
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allNamefilial"]) ? $context["allNamefilial"] : $this->getContext($context, "allNamefilial")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filial"]) {
                // line 42
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 43
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["filial"], "nameShort", array()), 3, 7), "html", null, true);
                echo "</td>

                    ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType1"]) ? $context["narusheniyaType1"] : $this->getContext($context, "narusheniyaType1")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 46
                    echo "
                        ";
                    // line 47
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["filial"], "nameFull", array()))) {
                        // line 48
                        echo "                            <td class=\"pokazatel1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 49
                        $context["flag1"] = "1";
                        // line 50
                        echo "                        ";
                    }
                    // line 51
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
                    ";
                // line 54
                if (((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) == "0")) {
                    // line 55
                    echo "                        <td></td>
                    ";
                }
                // line 57
                echo "                    ";
                $context["flag1"] = "0";
                // line 58
                echo "
                    ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType2"]) ? $context["narusheniyaType2"] : $this->getContext($context, "narusheniyaType2")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 60
                    echo "
                        ";
                    // line 61
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["filial"], "nameFull", array()))) {
                        // line 62
                        echo "                            <td class=\"pokazatel2\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 63
                        $context["flag2"] = "1";
                        // line 64
                        echo "                        ";
                    }
                    // line 65
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "
                    ";
                // line 68
                if (((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2")) == "0")) {
                    // line 69
                    echo "                        <td></td>
                    ";
                }
                // line 71
                echo "                    ";
                $context["flag2"] = "0";
                // line 72
                echo "
                    ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType3"]) ? $context["narusheniyaType3"] : $this->getContext($context, "narusheniyaType3")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 74
                    echo "
                        ";
                    // line 75
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["filial"], "nameFull", array()))) {
                        // line 76
                        echo "                            <td class=\"pokazatel3\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 77
                        $context["flag3"] = "1";
                        // line 78
                        echo "                        ";
                    }
                    // line 79
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "
                    ";
                // line 82
                if (((isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3")) == "0")) {
                    // line 83
                    echo "                        <td></td>
                    ";
                }
                // line 85
                echo "                    ";
                $context["flag3"] = "0";
                // line 86
                echo "
                    ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType4"]) ? $context["narusheniyaType4"] : $this->getContext($context, "narusheniyaType4")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 88
                    echo "
                        ";
                    // line 89
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["filial"], "nameFull", array()))) {
                        // line 90
                        echo "                            <td class=\"pokazatel1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 91
                        $context["flag4"] = "1";
                        // line 92
                        echo "                        ";
                    }
                    // line 93
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "
                    ";
                // line 96
                if (((isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4")) == "0")) {
                    // line 97
                    echo "                        <td></td>
                    ";
                }
                // line 99
                echo "                    ";
                $context["flag4"] = "0";
                // line 100
                echo "
                    ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType5"]) ? $context["narusheniyaType5"] : $this->getContext($context, "narusheniyaType5")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 102
                    echo "
                        ";
                    // line 103
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["filial"], "nameFull", array()))) {
                        // line 104
                        echo "                            <td class=\"pokazatel1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 105
                        $context["flag5"] = "1";
                        // line 106
                        echo "                        ";
                    }
                    // line 107
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "
                    ";
                // line 110
                if (((isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5")) == "0")) {
                    // line 111
                    echo "                        <td></td>
                    ";
                }
                // line 113
                echo "                    ";
                $context["flag5"] = "0";
                // line 114
                echo "
                    ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType6"]) ? $context["narusheniyaType6"] : $this->getContext($context, "narusheniyaType6")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 116
                    echo "
                        ";
                    // line 117
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["filial"], "nameFull", array()))) {
                        // line 118
                        echo "                            <td class=\"pokazatel1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 119
                        $context["flag6"] = "1";
                        // line 120
                        echo "                        ";
                    }
                    // line 121
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "
                    ";
                // line 124
                if (((isset($context["flag6"]) ? $context["flag6"] : $this->getContext($context, "flag6")) == "0")) {
                    // line 125
                    echo "                        <td></td>
                    ";
                }
                // line 127
                echo "                    ";
                $context["flag6"] = "0";
                // line 128
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            </tbody>
            <tfoot>
            <tr>
                <td>Всего</td>
                <td id=\"result1\"></td>
                <td id=\"result2\"></td>
                <td id=\"result3\"></td>
                <td id=\"result4\"></td>
                <td id=\"result5\"></td>
                <td id=\"result6\"></td>
                <td id=\"vsego\"></td>
            </tr>
            </tfoot>
        </table>
    ";
        }
        // line 147
        echo "</div>";
        
        $__internal_b6dc40a4af17ff64c49021289c16eee3abd34de56d80dfedcb5dbb4e6a30834e->leave($__internal_b6dc40a4af17ff64c49021289c16eee3abd34de56d80dfedcb5dbb4e6a30834e_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/proverka_nakazanie_type_fkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 147,  387 => 132,  370 => 128,  367 => 127,  363 => 125,  361 => 124,  358 => 123,  351 => 121,  348 => 120,  346 => 119,  341 => 118,  339 => 117,  336 => 116,  332 => 115,  329 => 114,  326 => 113,  322 => 111,  320 => 110,  317 => 109,  310 => 107,  307 => 106,  305 => 105,  300 => 104,  298 => 103,  295 => 102,  291 => 101,  288 => 100,  285 => 99,  281 => 97,  279 => 96,  276 => 95,  269 => 93,  266 => 92,  264 => 91,  259 => 90,  257 => 89,  254 => 88,  250 => 87,  247 => 86,  244 => 85,  240 => 83,  238 => 82,  235 => 81,  228 => 79,  225 => 78,  223 => 77,  218 => 76,  216 => 75,  213 => 74,  209 => 73,  206 => 72,  203 => 71,  199 => 69,  197 => 68,  194 => 67,  187 => 65,  184 => 64,  182 => 63,  177 => 62,  175 => 61,  172 => 60,  168 => 59,  165 => 58,  162 => 57,  158 => 55,  156 => 54,  153 => 53,  146 => 51,  143 => 50,  141 => 49,  136 => 48,  134 => 47,  131 => 46,  127 => 45,  122 => 43,  117 => 42,  100 => 41,  97 => 40,  94 => 39,  91 => 38,  88 => 37,  85 => 36,  82 => 35,  80 => 34,  62 => 18,  58 => 16,  56 => 15,  53 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  33 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="row">*/
/* */
/*     {% if allNamefilial is empty%}*/
/*         <p>Не добавлены филиалы</p>*/
/*     {% elseif narusheniyaType1 is empty%}*/
/*         <p>Нет нарушений в филиалах в выбранный период</p>*/
/*     {% elseif narusheniyaType2 is empty%}*/
/*         <p>Нет нарушений в филиалах в выбранный период</p>*/
/*     {% elseif narusheniyaType3 is empty%}*/
/*         <p>Нет нарушений в филиалах в выбранный период</p>*/
/*     {% elseif narusheniyaType4 is empty%}*/
/*         <p>Нет нарушений в филиалах в выбранный период</p>*/
/*     {% elseif narusheniyaType5 is empty%}*/
/*         <p>Нет нарушений в филиалах в выбранный период</p>*/
/*     {% elseif narusheniyaType6 is empty%}*/
/*         <p>Нет нарушений в филиалах в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover table-bordered numbers">*/
/*             <thead>*/
/*             <tr>*/
/*                 <td></td>*/
/*                 <td style="font-size:12px">Неполное служебное</td>*/
/*                 <td style="font-size:12px">Строгий выговор</td>*/
/*                 <td style="font-size:12px">Выговор</td>*/
/*                 <td style="font-size:12px">Замечание</td>*/
/*                 <td style="font-size:12px">Ораничиться ранее</td>*/
/*                 <td style="font-size:12px">Строго предупредить</td>*/
/*                 <td style="font-size:12px">Итог</td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% set flag1= "0" %}*/
/*             {% set flag2 = "0" %}*/
/*             {% set flag3 = "0" %}*/
/*             {% set flag4 = "0" %}*/
/*             {% set flag5 = "0" %}*/
/*             {% set flag6 = "0" %}*/
/* */
/*             {% for filial in allNamefilial %}*/
/*                 <tr class="pokazatels{{loop.index}}">*/
/*                     <td class="name">{{ filial.nameShort|slice(3,7) }}</td>*/
/* */
/*                     {% for narush in narusheniyaType1 %}*/
/* */
/*                         {% if narush.name_full == filial.nameFull %}*/
/*                             <td class="pokazatel1">{{ narush.1 }}</td>*/
/*                             {% set flag1 = "1" %}*/
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     {% if flag1 == "0" %}*/
/*                         <td></td>*/
/*                     {% endif %}*/
/*                     {% set flag1 = "0" %}*/
/* */
/*                     {% for narush in narusheniyaType2 %}*/
/* */
/*                         {% if narush.name_full == filial.nameFull %}*/
/*                             <td class="pokazatel2">{{ narush.1 }}</td>*/
/*                             {% set flag2 = "1" %}*/
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     {% if flag2 == "0" %}*/
/*                         <td></td>*/
/*                     {% endif %}*/
/*                     {% set flag2 = "0" %}*/
/* */
/*                     {% for narush in narusheniyaType3 %}*/
/* */
/*                         {% if narush.name_full == filial.nameFull %}*/
/*                             <td class="pokazatel3">{{ narush.1 }}</td>*/
/*                             {% set flag3 = "1" %}*/
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     {% if flag3 == "0" %}*/
/*                         <td></td>*/
/*                     {% endif %}*/
/*                     {% set flag3 = "0" %}*/
/* */
/*                     {% for narush in narusheniyaType4 %}*/
/* */
/*                         {% if narush.name_full == filial.nameFull %}*/
/*                             <td class="pokazatel1">{{ narush.1 }}</td>*/
/*                             {% set flag4 = "1" %}*/
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     {% if flag4 == "0" %}*/
/*                         <td></td>*/
/*                     {% endif %}*/
/*                     {% set flag4 = "0" %}*/
/* */
/*                     {% for narush in narusheniyaType5 %}*/
/* */
/*                         {% if narush.name_full == filial.nameFull %}*/
/*                             <td class="pokazatel1">{{ narush.1 }}</td>*/
/*                             {% set flag5 = "1" %}*/
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     {% if flag5 == "0" %}*/
/*                         <td></td>*/
/*                     {% endif %}*/
/*                     {% set flag5 = "0" %}*/
/* */
/*                     {% for narush in narusheniyaType6 %}*/
/* */
/*                         {% if narush.name_full == filial.nameFull %}*/
/*                             <td class="pokazatel1">{{ narush.1 }}</td>*/
/*                             {% set flag6 = "1" %}*/
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     {% if flag6 == "0" %}*/
/*                         <td></td>*/
/*                     {% endif %}*/
/*                     {% set flag6 = "0" %}*/
/* */
/*                     <td></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*             <tfoot>*/
/*             <tr>*/
/*                 <td>Всего</td>*/
/*                 <td id="result1"></td>*/
/*                 <td id="result2"></td>*/
/*                 <td id="result3"></td>*/
/*                 <td id="result4"></td>*/
/*                 <td id="result5"></td>*/
/*                 <td id="result6"></td>*/
/*                 <td id="vsego"></td>*/
/*             </tr>*/
/*             </tfoot>*/
/*         </table>*/
/*     {% endif %}*/
/* </div>*/
