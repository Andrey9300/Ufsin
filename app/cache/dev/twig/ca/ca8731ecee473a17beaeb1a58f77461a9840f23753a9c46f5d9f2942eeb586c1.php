<?php

/* :otchet/ajax:proverka_nakazanie_type.html.twig */
class __TwigTemplate_5e0a62d0ca33ef99333643f033420ddc62dc59598d912371728a90c86e07f8f6 extends Twig_Template
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
        $__internal_557855183d7343f9d0a5fed9b10b16f937396989e848289615009952888a5cc0 = $this->env->getExtension("native_profiler");
        $__internal_557855183d7343f9d0a5fed9b10b16f937396989e848289615009952888a5cc0->enter($__internal_557855183d7343f9d0a5fed9b10b16f937396989e848289615009952888a5cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:proverka_nakazanie_type.html.twig"));

        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        if (twig_test_empty((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")))) {
            // line 3
            echo "        <p>Не добавлены учреждения</p>
    ";
        } elseif (twig_test_empty(        // line 4
(isset($context["narusheniyaType1"]) ? $context["narusheniyaType1"] : $this->getContext($context, "narusheniyaType1")))) {
            // line 5
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 6
(isset($context["narusheniyaType2"]) ? $context["narusheniyaType2"] : $this->getContext($context, "narusheniyaType2")))) {
            // line 7
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 8
(isset($context["narusheniyaType3"]) ? $context["narusheniyaType3"] : $this->getContext($context, "narusheniyaType3")))) {
            // line 9
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 10
(isset($context["narusheniyaType4"]) ? $context["narusheniyaType4"] : $this->getContext($context, "narusheniyaType4")))) {
            // line 11
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 12
(isset($context["narusheniyaType5"]) ? $context["narusheniyaType5"] : $this->getContext($context, "narusheniyaType5")))) {
            // line 13
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 14
(isset($context["narusheniyaType6"]) ? $context["narusheniyaType6"] : $this->getContext($context, "narusheniyaType6")))) {
            // line 15
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } else {
            // line 17
            echo "        <table class=\"table table-hover table-bordered numbers\">
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
            // line 32
            $context["flag1"] = "0";
            // line 33
            echo "            ";
            $context["flag2"] = "0";
            // line 34
            echo "            ";
            $context["flag3"] = "0";
            // line 35
            echo "            ";
            $context["flag4"] = "0";
            // line 36
            echo "            ";
            $context["flag5"] = "0";
            // line 37
            echo "            ";
            $context["flag6"] = "0";
            // line 38
            echo "
            ";
            // line 39
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
                // line 40
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 41
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["organization"], "nameShort", array()), 3, 7), "html", null, true);
                echo "</td>

                    ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType1"]) ? $context["narusheniyaType1"] : $this->getContext($context, "narusheniyaType1")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 44
                    echo "
                        ";
                    // line 45
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 46
                        echo "                            <td class=\"pokazatel1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 47
                        $context["flag1"] = "1";
                        // line 48
                        echo "                        ";
                    }
                    // line 49
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "
                    ";
                // line 52
                if (((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) == "0")) {
                    // line 53
                    echo "                        <td></td>
                    ";
                }
                // line 55
                echo "                    ";
                $context["flag1"] = "0";
                // line 56
                echo "
                    ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType2"]) ? $context["narusheniyaType2"] : $this->getContext($context, "narusheniyaType2")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 58
                    echo "
                        ";
                    // line 59
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 60
                        echo "                            <td class=\"pokazatel2\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 61
                        $context["flag2"] = "1";
                        // line 62
                        echo "                        ";
                    }
                    // line 63
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "
                    ";
                // line 66
                if (((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2")) == "0")) {
                    // line 67
                    echo "                        <td></td>
                    ";
                }
                // line 69
                echo "                    ";
                $context["flag2"] = "0";
                // line 70
                echo "
                    ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType3"]) ? $context["narusheniyaType3"] : $this->getContext($context, "narusheniyaType3")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 72
                    echo "
                        ";
                    // line 73
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 74
                        echo "                            <td class=\"pokazatel3\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 75
                        $context["flag3"] = "1";
                        // line 76
                        echo "                        ";
                    }
                    // line 77
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "
                    ";
                // line 80
                if (((isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3")) == "0")) {
                    // line 81
                    echo "                        <td></td>
                    ";
                }
                // line 83
                echo "                    ";
                $context["flag3"] = "0";
                // line 84
                echo "
                    ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType4"]) ? $context["narusheniyaType4"] : $this->getContext($context, "narusheniyaType4")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 86
                    echo "
                        ";
                    // line 87
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 88
                        echo "                            <td class=\"pokazatel1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 89
                        $context["flag4"] = "1";
                        // line 90
                        echo "                        ";
                    }
                    // line 91
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "
                    ";
                // line 94
                if (((isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4")) == "0")) {
                    // line 95
                    echo "                        <td></td>
                    ";
                }
                // line 97
                echo "                    ";
                $context["flag4"] = "0";
                // line 98
                echo "
                    ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType5"]) ? $context["narusheniyaType5"] : $this->getContext($context, "narusheniyaType5")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 100
                    echo "
                        ";
                    // line 101
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 102
                        echo "                            <td class=\"pokazatel1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 103
                        $context["flag5"] = "1";
                        // line 104
                        echo "                        ";
                    }
                    // line 105
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "
                    ";
                // line 108
                if (((isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5")) == "0")) {
                    // line 109
                    echo "                        <td></td>
                    ";
                }
                // line 111
                echo "                    ";
                $context["flag5"] = "0";
                // line 112
                echo "
                    ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaType6"]) ? $context["narusheniyaType6"] : $this->getContext($context, "narusheniyaType6")));
                foreach ($context['_seq'] as $context["_key"] => $context["narush"]) {
                    // line 114
                    echo "
                        ";
                    // line 115
                    if (($this->getAttribute($context["narush"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 116
                        echo "                            <td class=\"pokazatel1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["narush"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 117
                        $context["flag6"] = "1";
                        // line 118
                        echo "                        ";
                    }
                    // line 119
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narush'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "
                    ";
                // line 122
                if (((isset($context["flag6"]) ? $context["flag6"] : $this->getContext($context, "flag6")) == "0")) {
                    // line 123
                    echo "                        <td></td>
                    ";
                }
                // line 125
                echo "                    ";
                $context["flag6"] = "0";
                // line 126
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
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
        // line 145
        echo "</div>";
        
        $__internal_557855183d7343f9d0a5fed9b10b16f937396989e848289615009952888a5cc0->leave($__internal_557855183d7343f9d0a5fed9b10b16f937396989e848289615009952888a5cc0_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:proverka_nakazanie_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 145,  385 => 130,  368 => 126,  365 => 125,  361 => 123,  359 => 122,  356 => 121,  349 => 119,  346 => 118,  344 => 117,  339 => 116,  337 => 115,  334 => 114,  330 => 113,  327 => 112,  324 => 111,  320 => 109,  318 => 108,  315 => 107,  308 => 105,  305 => 104,  303 => 103,  298 => 102,  296 => 101,  293 => 100,  289 => 99,  286 => 98,  283 => 97,  279 => 95,  277 => 94,  274 => 93,  267 => 91,  264 => 90,  262 => 89,  257 => 88,  255 => 87,  252 => 86,  248 => 85,  245 => 84,  242 => 83,  238 => 81,  236 => 80,  233 => 79,  226 => 77,  223 => 76,  221 => 75,  216 => 74,  214 => 73,  211 => 72,  207 => 71,  204 => 70,  201 => 69,  197 => 67,  195 => 66,  192 => 65,  185 => 63,  182 => 62,  180 => 61,  175 => 60,  173 => 59,  170 => 58,  166 => 57,  163 => 56,  160 => 55,  156 => 53,  154 => 52,  151 => 51,  144 => 49,  141 => 48,  139 => 47,  134 => 46,  132 => 45,  129 => 44,  125 => 43,  120 => 41,  115 => 40,  98 => 39,  95 => 38,  92 => 37,  89 => 36,  86 => 35,  83 => 34,  80 => 33,  78 => 32,  61 => 17,  57 => 15,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="row">*/
/*     {% if organizations is empty%}*/
/*         <p>Не добавлены учреждения</p>*/
/*     {% elseif narusheniyaType1 is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% elseif narusheniyaType2 is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% elseif narusheniyaType3 is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% elseif narusheniyaType4 is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% elseif narusheniyaType5 is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% elseif narusheniyaType6 is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% else %}*/
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
/*             {% for organization in organizations %}*/
/*                 <tr class="pokazatels{{loop.index}}">*/
/*                     <td class="name">{{ organization.nameShort|slice(3,7) }}</td>*/
/* */
/*                     {% for narush in narusheniyaType1 %}*/
/* */
/*                         {% if narush.name_full == organization.nameFull %}*/
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
/*                         {% if narush.name_full == organization.nameFull %}*/
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
/*                         {% if narush.name_full == organization.nameFull %}*/
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
/*                         {% if narush.name_full == organization.nameFull %}*/
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
/*                         {% if narush.name_full == organization.nameFull %}*/
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
/*                         {% if narush.name_full == organization.nameFull %}*/
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
