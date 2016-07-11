<?php

/* otchet/ajax/proverka_narusheniya.html.twig */
class __TwigTemplate_3cb373cb6ddb84b70f3420ce75410117ae2d2d5a30665e101a00596921e3dee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/ajax/proverka_narusheniya.html.twig", 1);
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
        $__internal_3700829ce061c08cc803d64fabf42d55e6bb6dd32a578182c6bd494e11281858 = $this->env->getExtension("native_profiler");
        $__internal_3700829ce061c08cc803d64fabf42d55e6bb6dd32a578182c6bd494e11281858->enter($__internal_3700829ce061c08cc803d64fabf42d55e6bb6dd32a578182c6bd494e11281858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/proverka_narusheniya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3700829ce061c08cc803d64fabf42d55e6bb6dd32a578182c6bd494e11281858->leave($__internal_3700829ce061c08cc803d64fabf42d55e6bb6dd32a578182c6bd494e11281858_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a15251244bbd5737d9b0d8f913561852d77545746f6e0a364be8fc8a09656acb = $this->env->getExtension("native_profiler");
        $__internal_a15251244bbd5737d9b0d8f913561852d77545746f6e0a364be8fc8a09656acb->enter($__internal_a15251244bbd5737d9b0d8f913561852d77545746f6e0a364be8fc8a09656acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", "otchet/ajax/proverka_narusheniya.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Статистика нарушений по учреждениям и типам проверки</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("narusheniya");
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
        if (twig_test_empty((isset($context["proverkaType"]) ? $context["proverkaType"] : $this->getContext($context, "proverkaType")))) {
            // line 26
            echo "        <p>Не добавлены учреждения или проверки или нет проверок в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 27
(isset($context["proverka_temp"]) ? $context["proverka_temp"] : $this->getContext($context, "proverka_temp")))) {
            // line 28
            echo "        <p>Не добавлены учреждения или проверки или нет проверок в выбранный период</p>
    ";
        } else {
            // line 30
            echo "
        <div>В - выполнено, Н - невыполнено, Ч - частично, И - итого</div>
        <table class=\"table table-hover table-bordered numbers\" style=\"position:absolute; left:5px; font-size:14px;\">
            <thead>
                <tr>
                    <td></td>
                    <td colspan=\"16\">Плановые</td>
                    <td colspan=\"12\">Внеплановые</td>
                    <td colspan=\"8\" id=\"narusheniya\">Итог</td>
                </tr>
                <tr>
                    <td>Учреждение</td>
                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaType"]) ? $context["proverkaType"] : $this->getContext($context, "proverkaType")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 43
                echo "                        <td colspan=\"4\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    <td colspan=\"4\">Плановые</td>
                    <td colspan=\"4\">Внеплановые</td>
                </tr>
                <tr>
                    <td></td>
                    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaType"]) ? $context["proverkaType"] : $this->getContext($context, "proverkaType")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 51
                echo "                        <td>В</td>
                        <td>Н</td>
                        <td>Ч</td>
                        <td>И</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    <td>В</td>
                    <td>Н</td>
                    <td>Ч</td>
                    <td>И</td>
                    <td>В</td>
                    <td>Н</td>
                    <td>Ч</td>
                    <td>И</td>
                </tr>
            </thead>
            <tbody>

            ";
            // line 68
            $context["flag1"] = "0";
            // line 69
            echo "            ";
            $context["flag2"] = "0";
            // line 70
            echo "            ";
            $context["flag3"] = "0";
            // line 71
            echo "            ";
            $context["count1"] = "0";
            // line 72
            echo "            ";
            $context["count2"] = "0";
            // line 73
            echo "            ";
            $context["count3"] = "0";
            // line 74
            echo "            ";
            $context["count_all"] = "0";
            // line 75
            echo "            ";
            $context["count_P_V"] = "0";
            // line 76
            echo "            ";
            $context["count_P_N"] = "0";
            // line 77
            echo "            ";
            $context["count_P_CH"] = "0";
            // line 78
            echo "            ";
            $context["count_V_V"] = "0";
            // line 79
            echo "            ";
            $context["count_V_N"] = "0";
            // line 80
            echo "            ";
            $context["count_V_CH"] = "0";
            // line 81
            echo "            ";
            $context["otmetki"] = array(0 => "1", 1 => "0", 2 => "-1");
            // line 82
            echo "
            ";
            // line 83
            $context["cgsn_v"] = "0";
            // line 84
            echo "            ";
            $context["cgsn_n"] = "0";
            // line 85
            echo "            ";
            $context["cgsn_ch"] = "0";
            // line 86
            echo "            ";
            $context["kr_v"] = "0";
            // line 87
            echo "            ";
            $context["kr_n"] = "0";
            // line 88
            echo "            ";
            $context["kr_ch"] = "0";
            // line 89
            echo "            ";
            $context["inspec_v"] = "0";
            // line 90
            echo "            ";
            $context["inspec_n"] = "0";
            // line 91
            echo "            ";
            $context["inspec_ch"] = "0";
            // line 92
            echo "            ";
            $context["dk_v"] = "0";
            // line 93
            echo "            ";
            $context["dk_n"] = "0";
            // line 94
            echo "            ";
            $context["dk_ch"] = "0";
            // line 95
            echo "            ";
            $context["prok_v"] = "0";
            // line 96
            echo "            ";
            $context["prok_n"] = "0";
            // line 97
            echo "            ";
            $context["prok_ch"] = "0";
            // line 98
            echo "            ";
            $context["gal_v"] = "0";
            // line 99
            echo "            ";
            $context["gal_n"] = "0";
            // line 100
            echo "            ";
            $context["gal_ch"] = "0";
            // line 101
            echo "            ";
            $context["cgsn_v_v"] = "0";
            // line 102
            echo "            ";
            $context["cgsn_v_n"] = "0";
            // line 103
            echo "            ";
            $context["cgsn_v_ch"] = "0";
            // line 104
            echo "

            ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverka_temp"]) ? $context["proverka_temp"] : $this->getContext($context, "proverka_temp")));
            foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
                // line 107
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["proverka"]);
                foreach ($context['_seq'] as $context["key"] => $context["prov"]) {
                    // line 108
                    echo "

                    ";
                    // line 110
                    if (($context["key"] == "ЦГСЭН")) {
                        // line 111
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["prov"]);
                        foreach ($context['_seq'] as $context["k"] => $context["p"]) {
                            // line 112
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["p"]);
                            foreach ($context['_seq'] as $context["k1"] => $context["p1"]) {
                                // line 113
                                echo "
                                ";
                                // line 114
                                if (($context["k1"] == "1")) {
                                    // line 115
                                    echo "                                    ";
                                    $context["cgsn_v"] = ((isset($context["cgsn_v"]) ? $context["cgsn_v"] : $this->getContext($context, "cgsn_v")) + $context["p1"]);
                                    // line 116
                                    echo "                                ";
                                }
                                // line 117
                                echo "                                ";
                                if (($context["k1"] == "0")) {
                                    // line 118
                                    echo "                                    ";
                                    $context["cgsn_n"] = ((isset($context["cgsn_n"]) ? $context["cgsn_n"] : $this->getContext($context, "cgsn_n")) + $context["p1"]);
                                    // line 119
                                    echo "                                ";
                                }
                                // line 120
                                echo "                                ";
                                if (($context["k1"] == "-1")) {
                                    // line 121
                                    echo "                                    ";
                                    $context["cgsn_ch"] = ((isset($context["cgsn_ch"]) ? $context["cgsn_ch"] : $this->getContext($context, "cgsn_ch")) + $context["p1"]);
                                    // line 122
                                    echo "                                ";
                                }
                                // line 123
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k1'], $context['p1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 124
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 125
                        echo "                    ";
                    }
                    // line 126
                    echo "
                    ";
                    // line 127
                    if (($context["key"] == "Контрольная проверка")) {
                        // line 128
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["prov"]);
                        foreach ($context['_seq'] as $context["k"] => $context["p"]) {
                            // line 129
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["p"]);
                            foreach ($context['_seq'] as $context["k1"] => $context["p1"]) {
                                // line 130
                                echo "
                                ";
                                // line 131
                                if (($context["k1"] == "1")) {
                                    // line 132
                                    echo "                                    ";
                                    $context["kr_v"] = ((isset($context["kr_v"]) ? $context["kr_v"] : $this->getContext($context, "kr_v")) + $context["p1"]);
                                    // line 133
                                    echo "                                ";
                                }
                                // line 134
                                echo "                                ";
                                if (($context["k1"] == "0")) {
                                    // line 135
                                    echo "                                    ";
                                    $context["kr_n"] = ((isset($context["kr_n"]) ? $context["kr_n"] : $this->getContext($context, "kr_n")) + $context["p1"]);
                                    // line 136
                                    echo "                                ";
                                }
                                // line 137
                                echo "                                ";
                                if (($context["k1"] == "-1")) {
                                    // line 138
                                    echo "                                    ";
                                    $context["kr_ch"] = ((isset($context["kr_ch"]) ? $context["kr_ch"] : $this->getContext($context, "kr_ch")) + $context["p1"]);
                                    // line 139
                                    echo "                                ";
                                }
                                // line 140
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k1'], $context['p1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 141
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 142
                        echo "                    ";
                    }
                    // line 143
                    echo "
                    ";
                    // line 144
                    if (($context["key"] == "Инспектирование")) {
                        // line 145
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["prov"]);
                        foreach ($context['_seq'] as $context["k"] => $context["p"]) {
                            // line 146
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["p"]);
                            foreach ($context['_seq'] as $context["k1"] => $context["p1"]) {
                                // line 147
                                echo "
                                ";
                                // line 148
                                if (($context["k1"] == "1")) {
                                    // line 149
                                    echo "                                    ";
                                    $context["inspec_v"] = ((isset($context["inspec_v"]) ? $context["inspec_v"] : $this->getContext($context, "inspec_v")) + $context["p1"]);
                                    // line 150
                                    echo "                                ";
                                }
                                // line 151
                                echo "                                ";
                                if (($context["k1"] == "0")) {
                                    // line 152
                                    echo "                                    ";
                                    $context["inspec_n"] = ((isset($context["inspec_n"]) ? $context["inspec_n"] : $this->getContext($context, "inspec_n")) + $context["p1"]);
                                    // line 153
                                    echo "                                ";
                                }
                                // line 154
                                echo "                                ";
                                if (($context["k1"] == "-1")) {
                                    // line 155
                                    echo "                                    ";
                                    $context["inspec_ch"] = ((isset($context["inspec_ch"]) ? $context["inspec_ch"] : $this->getContext($context, "inspec_ch")) + $context["p1"]);
                                    // line 156
                                    echo "                                ";
                                }
                                // line 157
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k1'], $context['p1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 158
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 159
                        echo "                    ";
                    }
                    // line 160
                    echo "
                    ";
                    // line 161
                    if (($context["key"] == "День куратора")) {
                        // line 162
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["prov"]);
                        foreach ($context['_seq'] as $context["k"] => $context["p"]) {
                            // line 163
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["p"]);
                            foreach ($context['_seq'] as $context["k1"] => $context["p1"]) {
                                // line 164
                                echo "
                                ";
                                // line 165
                                if (($context["k1"] == "1")) {
                                    // line 166
                                    echo "                                    ";
                                    $context["dk_v"] = ((isset($context["dk_v"]) ? $context["dk_v"] : $this->getContext($context, "dk_v")) + $context["p1"]);
                                    // line 167
                                    echo "                                ";
                                }
                                // line 168
                                echo "                                ";
                                if (($context["k1"] == "0")) {
                                    // line 169
                                    echo "                                    ";
                                    $context["dk_n"] = ((isset($context["dk_n"]) ? $context["dk_n"] : $this->getContext($context, "dk_n")) + $context["p1"]);
                                    // line 170
                                    echo "                                ";
                                }
                                // line 171
                                echo "                                ";
                                if (($context["k1"] == "-1")) {
                                    // line 172
                                    echo "                                    ";
                                    $context["dk_ch"] = ((isset($context["dk_ch"]) ? $context["dk_ch"] : $this->getContext($context, "dk_ch")) + $context["p1"]);
                                    // line 173
                                    echo "                                ";
                                }
                                // line 174
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k1'], $context['p1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 175
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 176
                        echo "                    ";
                    }
                    // line 177
                    echo "
                    ";
                    // line 178
                    if (($context["key"] == "Прокуратура")) {
                        // line 179
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["prov"]);
                        foreach ($context['_seq'] as $context["k"] => $context["p"]) {
                            // line 180
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["p"]);
                            foreach ($context['_seq'] as $context["k1"] => $context["p1"]) {
                                // line 181
                                echo "
                                ";
                                // line 182
                                if (($context["k1"] == "1")) {
                                    // line 183
                                    echo "                                    ";
                                    $context["prok_v"] = ((isset($context["prok_v"]) ? $context["prok_v"] : $this->getContext($context, "prok_v")) + $context["p1"]);
                                    // line 184
                                    echo "                                ";
                                }
                                // line 185
                                echo "                                ";
                                if (($context["k1"] == "0")) {
                                    // line 186
                                    echo "                                    ";
                                    $context["prok_n"] = ((isset($context["prok_n"]) ? $context["prok_n"] : $this->getContext($context, "prok_n")) + $context["p1"]);
                                    // line 187
                                    echo "                                ";
                                }
                                // line 188
                                echo "                                ";
                                if (($context["k1"] == "-1")) {
                                    // line 189
                                    echo "                                    ";
                                    $context["prok_ch"] = ((isset($context["prok_ch"]) ? $context["prok_ch"] : $this->getContext($context, "prok_ch")) + $context["p1"]);
                                    // line 190
                                    echo "                                ";
                                }
                                // line 191
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k1'], $context['p1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 192
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 193
                        echo "                    ";
                    }
                    // line 194
                    echo "
                    ";
                    // line 195
                    if (($context["key"] == "По жалобе")) {
                        // line 196
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["prov"]);
                        foreach ($context['_seq'] as $context["k"] => $context["p"]) {
                            // line 197
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["p"]);
                            foreach ($context['_seq'] as $context["k1"] => $context["p1"]) {
                                // line 198
                                echo "
                                ";
                                // line 199
                                if (($context["k1"] == "1")) {
                                    // line 200
                                    echo "                                    ";
                                    $context["gal_v"] = ((isset($context["gal_v"]) ? $context["gal_v"] : $this->getContext($context, "gal_v")) + $context["p1"]);
                                    // line 201
                                    echo "                                ";
                                }
                                // line 202
                                echo "                                ";
                                if (($context["k1"] == "0")) {
                                    // line 203
                                    echo "                                    ";
                                    $context["gal_n"] = ((isset($context["gal_n"]) ? $context["gal_n"] : $this->getContext($context, "gal_n")) + $context["p1"]);
                                    // line 204
                                    echo "                                ";
                                }
                                // line 205
                                echo "                                ";
                                if (($context["k1"] == "-1")) {
                                    // line 206
                                    echo "                                    ";
                                    $context["gal_ch"] = ((isset($context["gal_ch"]) ? $context["gal_ch"] : $this->getContext($context, "gal_ch")) + $context["p1"]);
                                    // line 207
                                    echo "                                ";
                                }
                                // line 208
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k1'], $context['p1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 209
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 210
                        echo "                    ";
                    }
                    // line 211
                    echo "
                    ";
                    // line 212
                    if (($context["key"] == "ЦГСЭН внеплановая")) {
                        // line 213
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["prov"]);
                        foreach ($context['_seq'] as $context["k"] => $context["p"]) {
                            // line 214
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["p"]);
                            foreach ($context['_seq'] as $context["k1"] => $context["p1"]) {
                                // line 215
                                echo "
                                ";
                                // line 216
                                if (($context["k1"] == "1")) {
                                    // line 217
                                    echo "                                    ";
                                    $context["cgsn_v_v"] = ((isset($context["cgsn_v_v"]) ? $context["cgsn_v_v"] : $this->getContext($context, "cgsn_v_v")) + $context["p1"]);
                                    // line 218
                                    echo "                                ";
                                }
                                // line 219
                                echo "                                ";
                                if (($context["k1"] == "0")) {
                                    // line 220
                                    echo "                                    ";
                                    $context["cgsn_v_n"] = ((isset($context["cgsn_v_n"]) ? $context["cgsn_v_n"] : $this->getContext($context, "cgsn_v_n")) + $context["p1"]);
                                    // line 221
                                    echo "                                ";
                                }
                                // line 222
                                echo "                                ";
                                if (($context["k1"] == "-1")) {
                                    // line 223
                                    echo "                                    ";
                                    $context["cgsn_v_ch"] = ((isset($context["cgsn_v_ch"]) ? $context["cgsn_v_ch"] : $this->getContext($context, "cgsn_v_ch")) + $context["p1"]);
                                    // line 224
                                    echo "                                ";
                                }
                                // line 225
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k1'], $context['p1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 226
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['p'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 227
                        echo "                    ";
                    }
                    // line 228
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['prov'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "
            ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverka_temp"]) ? $context["proverka_temp"] : $this->getContext($context, "proverka_temp")));
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
            foreach ($context['_seq'] as $context["key"] => $context["proverki"]) {
                // line 232
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 233
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td>
                ";
                // line 234
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["proverkaType"]) ? $context["proverkaType"] : $this->getContext($context, "proverkaType")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 235
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["proverki"]);
                    foreach ($context['_seq'] as $context["key_proverka"] => $context["proverka"]) {
                        // line 236
                        echo "                        ";
                        if (($this->getAttribute($context["type"], "name", array()) == $context["key_proverka"])) {
                            // line 237
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["proverka"]);
                            foreach ($context['_seq'] as $context["key"] => $context["otmetka"]) {
                                // line 238
                                echo "
                                ";
                                // line 239
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["otmetka"]);
                                foreach ($context['_seq'] as $context["key"] => $context["count"]) {
                                    // line 240
                                    echo "
                                    ";
                                    // line 241
                                    if ($this->getAttribute($context["otmetka"], "1", array(), "array", true, true)) {
                                        // line 242
                                        echo "                                        ";
                                        if (($context["key"] == "1")) {
                                            // line 243
                                            echo "                                            ";
                                            $context["count_all"] = ((isset($context["count_all"]) ? $context["count_all"] : $this->getContext($context, "count_all")) + $context["count"]);
                                            // line 244
                                            echo "                                            ";
                                            $context["count1"] = ((isset($context["count1"]) ? $context["count1"] : $this->getContext($context, "count1")) + $context["count"]);
                                            // line 245
                                            echo "
                                            ";
                                            // line 246
                                            if ((((($context["key_proverka"] == "ЦГСЭН") || (                                            // line 247
$context["key_proverka"] == "Контрольная проверка")) || (                                            // line 248
$context["key_proverka"] == "Инспектирование")) || (                                            // line 249
$context["key_proverka"] == "День куратора"))) {
                                                // line 250
                                                echo "                                                ";
                                                $context["count_P_V"] = ((isset($context["count_P_V"]) ? $context["count_P_V"] : $this->getContext($context, "count_P_V")) + $context["count"]);
                                                // line 251
                                                echo "                                            ";
                                            } else {
                                                // line 252
                                                echo "                                                ";
                                                $context["count_V_V"] = ((isset($context["count_V_V"]) ? $context["count_V_V"] : $this->getContext($context, "count_V_V")) + $context["count"]);
                                                // line 253
                                                echo "                                            ";
                                            }
                                            // line 254
                                            echo "
                                            ";
                                            // line 255
                                            $context["flag1"] = "1";
                                            // line 256
                                            echo "                                        ";
                                        }
                                        // line 257
                                        echo "                                    ";
                                    }
                                    // line 258
                                    echo "                                    ";
                                    if ($this->getAttribute($context["otmetka"], "0", array(), "array", true, true)) {
                                        // line 259
                                        echo "                                        ";
                                        if (($context["key"] == "0")) {
                                            // line 260
                                            echo "                                            ";
                                            $context["count_all"] = ((isset($context["count_all"]) ? $context["count_all"] : $this->getContext($context, "count_all")) + $context["count"]);
                                            // line 261
                                            echo "                                            ";
                                            $context["count2"] = ((isset($context["count2"]) ? $context["count2"] : $this->getContext($context, "count2")) + $context["count"]);
                                            // line 262
                                            echo "
                                            ";
                                            // line 263
                                            if ((((($context["key_proverka"] == "ЦГСЭН") || (                                            // line 264
$context["key_proverka"] == "Контрольная проверка")) || (                                            // line 265
$context["key_proverka"] == "Инспектирование")) || (                                            // line 266
$context["key_proverka"] == "День куратора"))) {
                                                // line 267
                                                echo "                                                ";
                                                $context["count_P_N"] = ((isset($context["count_P_N"]) ? $context["count_P_N"] : $this->getContext($context, "count_P_N")) + $context["count"]);
                                                // line 268
                                                echo "                                            ";
                                            } else {
                                                // line 269
                                                echo "                                                ";
                                                $context["count_V_N"] = ((isset($context["count_V_N"]) ? $context["count_V_N"] : $this->getContext($context, "count_V_N")) + $context["count"]);
                                                // line 270
                                                echo "                                            ";
                                            }
                                            // line 271
                                            echo "
                                            ";
                                            // line 272
                                            $context["flag2"] = "1";
                                            // line 273
                                            echo "                                        ";
                                        }
                                        // line 274
                                        echo "                                    ";
                                    }
                                    // line 275
                                    echo "                                    ";
                                    if ($this->getAttribute($context["otmetka"], "-1", array(), "array", true, true)) {
                                        // line 276
                                        echo "                                        ";
                                        if (($context["key"] == "-1")) {
                                            // line 277
                                            echo "                                            ";
                                            $context["count_all"] = ((isset($context["count_all"]) ? $context["count_all"] : $this->getContext($context, "count_all")) + $context["count"]);
                                            // line 278
                                            echo "                                            ";
                                            $context["count3"] = ((isset($context["count3"]) ? $context["count3"] : $this->getContext($context, "count3")) + $context["count"]);
                                            // line 279
                                            echo "
                                            ";
                                            // line 280
                                            if ((((($context["key_proverka"] == "ЦГСЭН") || (                                            // line 281
$context["key_proverka"] == "Контрольная проверка")) || (                                            // line 282
$context["key_proverka"] == "Инспектирование")) || (                                            // line 283
$context["key_proverka"] == "День куратора"))) {
                                                // line 284
                                                echo "                                                ";
                                                $context["count_P_CH"] = ((isset($context["count_P_CH"]) ? $context["count_P_CH"] : $this->getContext($context, "count_P_CH")) + $context["count"]);
                                                // line 285
                                                echo "                                            ";
                                            } else {
                                                // line 286
                                                echo "                                                ";
                                                $context["count_V_CH"] = ((isset($context["count_V_CH"]) ? $context["count_V_CH"] : $this->getContext($context, "count_V_CH")) + $context["count"]);
                                                // line 287
                                                echo "                                            ";
                                            }
                                            // line 288
                                            echo "
                                            ";
                                            // line 289
                                            $context["flag3"] = "1";
                                            // line 290
                                            echo "                                        ";
                                        }
                                        // line 291
                                        echo "                                    ";
                                    }
                                    // line 292
                                    echo "                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['key'], $context['count'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 293
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['otmetka'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 294
                            echo "

                        ";
                        }
                        // line 297
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key_proverka'], $context['proverka'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 298
                    echo "
                    ";
                    // line 299
                    if (((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) == "1")) {
                        // line 300
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, (isset($context["count1"]) ? $context["count1"] : $this->getContext($context, "count1")), "html", null, true);
                        echo "</td>
                    ";
                    } else {
                        // line 302
                        echo "                        <td>-</td>
                    ";
                    }
                    // line 304
                    echo "                    ";
                    if (((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2")) == "1")) {
                        // line 305
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, (isset($context["count2"]) ? $context["count2"] : $this->getContext($context, "count2")), "html", null, true);
                        echo "</td>
                    ";
                    } else {
                        // line 307
                        echo "                        <td>-</td>
                    ";
                    }
                    // line 309
                    echo "                    ";
                    if (((isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3")) == "1")) {
                        // line 310
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, (isset($context["count3"]) ? $context["count3"] : $this->getContext($context, "count3")), "html", null, true);
                        echo "</td>
                    ";
                    } else {
                        // line 312
                        echo "                        <td>-</td>
                    ";
                    }
                    // line 314
                    echo "                    ";
                    if ((isset($context["count_all"]) ? $context["count_all"] : $this->getContext($context, "count_all"))) {
                        // line 315
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, (isset($context["count_all"]) ? $context["count_all"] : $this->getContext($context, "count_all")), "html", null, true);
                        echo "</td>
                    ";
                    } else {
                        // line 317
                        echo "                        <td>-</td>
                    ";
                    }
                    // line 319
                    echo "
                    ";
                    // line 320
                    $context["flag1"] = "0";
                    // line 321
                    echo "                    ";
                    $context["flag2"] = "0";
                    // line 322
                    echo "                    ";
                    $context["flag3"] = "0";
                    // line 323
                    echo "                    ";
                    $context["count1"] = "0";
                    // line 324
                    echo "                    ";
                    $context["count2"] = "0";
                    // line 325
                    echo "                    ";
                    $context["count3"] = "0";
                    // line 326
                    echo "                    ";
                    $context["count_all"] = "0";
                    // line 327
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "
                    <td>";
                // line 330
                echo twig_escape_filter($this->env, (isset($context["count_P_V"]) ? $context["count_P_V"] : $this->getContext($context, "count_P_V")), "html", null, true);
                echo "</td>
                    <td>";
                // line 331
                echo twig_escape_filter($this->env, (isset($context["count_P_N"]) ? $context["count_P_N"] : $this->getContext($context, "count_P_N")), "html", null, true);
                echo "</td>
                    <td>";
                // line 332
                echo twig_escape_filter($this->env, (isset($context["count_P_CH"]) ? $context["count_P_CH"] : $this->getContext($context, "count_P_CH")), "html", null, true);
                echo "</td>
                    <td>";
                // line 333
                echo twig_escape_filter($this->env, (((isset($context["count_P_V"]) ? $context["count_P_V"] : $this->getContext($context, "count_P_V")) + (isset($context["count_P_N"]) ? $context["count_P_N"] : $this->getContext($context, "count_P_N"))) + (isset($context["count_P_CH"]) ? $context["count_P_CH"] : $this->getContext($context, "count_P_CH"))), "html", null, true);
                echo "</td>
                    <td>";
                // line 334
                echo twig_escape_filter($this->env, (isset($context["count_V_V"]) ? $context["count_V_V"] : $this->getContext($context, "count_V_V")), "html", null, true);
                echo "</td>
                    <td>";
                // line 335
                echo twig_escape_filter($this->env, (isset($context["count_V_N"]) ? $context["count_V_N"] : $this->getContext($context, "count_V_N")), "html", null, true);
                echo "</td>
                    <td>";
                // line 336
                echo twig_escape_filter($this->env, (isset($context["count_V_CH"]) ? $context["count_V_CH"] : $this->getContext($context, "count_V_CH")), "html", null, true);
                echo "</td>
                    <td>";
                // line 337
                echo twig_escape_filter($this->env, (((isset($context["count_V_V"]) ? $context["count_V_V"] : $this->getContext($context, "count_V_V")) + (isset($context["count_V_N"]) ? $context["count_V_N"] : $this->getContext($context, "count_V_N"))) + (isset($context["count_V_CH"]) ? $context["count_V_CH"] : $this->getContext($context, "count_V_CH"))), "html", null, true);
                echo "</td>


                    ";
                // line 340
                $context["count_P_V"] = "0";
                // line 341
                echo "                    ";
                $context["count_P_N"] = "0";
                // line 342
                echo "                    ";
                $context["count_P_CH"] = "0";
                // line 343
                echo "                    ";
                $context["count_V_V"] = "0";
                // line 344
                echo "                    ";
                $context["count_V_N"] = "0";
                // line 345
                echo "                    ";
                $context["count_V_CH"] = "0";
                // line 346
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['proverki'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 349
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td rowspan=\"4\" style=\"padding-top:50px\">Всего</td>
                    <td>";
            // line 353
            echo twig_escape_filter($this->env, (isset($context["cgsn_v"]) ? $context["cgsn_v"] : $this->getContext($context, "cgsn_v")), "html", null, true);
            echo "</td>
                    <td>";
            // line 354
            echo twig_escape_filter($this->env, (isset($context["cgsn_n"]) ? $context["cgsn_n"] : $this->getContext($context, "cgsn_n")), "html", null, true);
            echo "</td>
                    <td>";
            // line 355
            echo twig_escape_filter($this->env, (isset($context["cgsn_ch"]) ? $context["cgsn_ch"] : $this->getContext($context, "cgsn_ch")), "html", null, true);
            echo "</td>
                    <td>";
            // line 356
            echo twig_escape_filter($this->env, (((isset($context["cgsn_v"]) ? $context["cgsn_v"] : $this->getContext($context, "cgsn_v")) + (isset($context["cgsn_n"]) ? $context["cgsn_n"] : $this->getContext($context, "cgsn_n"))) + (isset($context["cgsn_ch"]) ? $context["cgsn_ch"] : $this->getContext($context, "cgsn_ch"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 357
            echo twig_escape_filter($this->env, (isset($context["kr_v"]) ? $context["kr_v"] : $this->getContext($context, "kr_v")), "html", null, true);
            echo "</td>
                    <td>";
            // line 358
            echo twig_escape_filter($this->env, (isset($context["kr_n"]) ? $context["kr_n"] : $this->getContext($context, "kr_n")), "html", null, true);
            echo "</td>
                    <td>";
            // line 359
            echo twig_escape_filter($this->env, (isset($context["kr_ch"]) ? $context["kr_ch"] : $this->getContext($context, "kr_ch")), "html", null, true);
            echo "</td>
                    <td>";
            // line 360
            echo twig_escape_filter($this->env, (((isset($context["kr_v"]) ? $context["kr_v"] : $this->getContext($context, "kr_v")) + (isset($context["kr_n"]) ? $context["kr_n"] : $this->getContext($context, "kr_n"))) + (isset($context["kr_ch"]) ? $context["kr_ch"] : $this->getContext($context, "kr_ch"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 361
            echo twig_escape_filter($this->env, (isset($context["inspec_v"]) ? $context["inspec_v"] : $this->getContext($context, "inspec_v")), "html", null, true);
            echo "</td>
                    <td>";
            // line 362
            echo twig_escape_filter($this->env, (isset($context["inspec_n"]) ? $context["inspec_n"] : $this->getContext($context, "inspec_n")), "html", null, true);
            echo "</td>
                    <td>";
            // line 363
            echo twig_escape_filter($this->env, (isset($context["inspec_ch"]) ? $context["inspec_ch"] : $this->getContext($context, "inspec_ch")), "html", null, true);
            echo "</td>
                    <td>";
            // line 364
            echo twig_escape_filter($this->env, (((isset($context["inspec_v"]) ? $context["inspec_v"] : $this->getContext($context, "inspec_v")) + (isset($context["inspec_n"]) ? $context["inspec_n"] : $this->getContext($context, "inspec_n"))) + (isset($context["inspec_ch"]) ? $context["inspec_ch"] : $this->getContext($context, "inspec_ch"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 365
            echo twig_escape_filter($this->env, (isset($context["dk_v"]) ? $context["dk_v"] : $this->getContext($context, "dk_v")), "html", null, true);
            echo "</td>
                    <td>";
            // line 366
            echo twig_escape_filter($this->env, (isset($context["dk_n"]) ? $context["dk_n"] : $this->getContext($context, "dk_n")), "html", null, true);
            echo "</td>
                    <td>";
            // line 367
            echo twig_escape_filter($this->env, (isset($context["dk_ch"]) ? $context["dk_ch"] : $this->getContext($context, "dk_ch")), "html", null, true);
            echo "</td>
                    <td>";
            // line 368
            echo twig_escape_filter($this->env, (((isset($context["dk_v"]) ? $context["dk_v"] : $this->getContext($context, "dk_v")) + (isset($context["dk_n"]) ? $context["dk_n"] : $this->getContext($context, "dk_n"))) + (isset($context["dk_ch"]) ? $context["dk_ch"] : $this->getContext($context, "dk_ch"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 369
            echo twig_escape_filter($this->env, (isset($context["prok_v"]) ? $context["prok_v"] : $this->getContext($context, "prok_v")), "html", null, true);
            echo "</td>
                    <td>";
            // line 370
            echo twig_escape_filter($this->env, (isset($context["prok_n"]) ? $context["prok_n"] : $this->getContext($context, "prok_n")), "html", null, true);
            echo "</td>
                    <td>";
            // line 371
            echo twig_escape_filter($this->env, (isset($context["prok_ch"]) ? $context["prok_ch"] : $this->getContext($context, "prok_ch")), "html", null, true);
            echo "</td>
                    <td>";
            // line 372
            echo twig_escape_filter($this->env, (((isset($context["prok_v"]) ? $context["prok_v"] : $this->getContext($context, "prok_v")) + (isset($context["prok_n"]) ? $context["prok_n"] : $this->getContext($context, "prok_n"))) + (isset($context["prok_ch"]) ? $context["prok_ch"] : $this->getContext($context, "prok_ch"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 373
            echo twig_escape_filter($this->env, (isset($context["gal_v"]) ? $context["gal_v"] : $this->getContext($context, "gal_v")), "html", null, true);
            echo "</td>
                    <td>";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["gal_n"]) ? $context["gal_n"] : $this->getContext($context, "gal_n")), "html", null, true);
            echo "</td>
                    <td>";
            // line 375
            echo twig_escape_filter($this->env, (isset($context["gal_ch"]) ? $context["gal_ch"] : $this->getContext($context, "gal_ch")), "html", null, true);
            echo "</td>
                    <td>";
            // line 376
            echo twig_escape_filter($this->env, (((isset($context["gal_v"]) ? $context["gal_v"] : $this->getContext($context, "gal_v")) + (isset($context["gal_n"]) ? $context["gal_n"] : $this->getContext($context, "gal_n"))) + (isset($context["gal_ch"]) ? $context["gal_ch"] : $this->getContext($context, "gal_ch"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 377
            echo twig_escape_filter($this->env, (isset($context["cgsn_v_v"]) ? $context["cgsn_v_v"] : $this->getContext($context, "cgsn_v_v")), "html", null, true);
            echo "</td>
                    <td>";
            // line 378
            echo twig_escape_filter($this->env, (isset($context["cgsn_v_n"]) ? $context["cgsn_v_n"] : $this->getContext($context, "cgsn_v_n")), "html", null, true);
            echo "</td>
                    <td>";
            // line 379
            echo twig_escape_filter($this->env, (isset($context["cgsn_v_ch"]) ? $context["cgsn_v_ch"] : $this->getContext($context, "cgsn_v_ch")), "html", null, true);
            echo "</td>
                    <td>";
            // line 380
            echo twig_escape_filter($this->env, (((isset($context["cgsn_v_v"]) ? $context["cgsn_v_v"] : $this->getContext($context, "cgsn_v_v")) + (isset($context["cgsn_v_n"]) ? $context["cgsn_v_n"] : $this->getContext($context, "cgsn_v_n"))) + (isset($context["cgsn_v_ch"]) ? $context["cgsn_v_ch"] : $this->getContext($context, "cgsn_v_ch"))), "html", null, true);
            echo "</td>
                    <td style=\"text-align:center;padding-top:50px\" colspan=\"8\" rowspan=\"4\" id=\"vsego\">";
            // line 381
            echo twig_escape_filter($this->env, (((((((((((((((((((((isset($context["cgsn_v"]) ? $context["cgsn_v"] : $this->getContext($context, "cgsn_v")) + (isset($context["kr_v"]) ? $context["kr_v"] : $this->getContext($context, "kr_v"))) + (isset($context["inspec_v"]) ? $context["inspec_v"] : $this->getContext($context, "inspec_v"))) + (isset($context["dk_v"]) ? $context["dk_v"] : $this->getContext($context, "dk_v"))) + (isset($context["cgsn_n"]) ? $context["cgsn_n"] : $this->getContext($context, "cgsn_n"))) + (isset($context["kr_n"]) ? $context["kr_n"] : $this->getContext($context, "kr_n"))) + (isset($context["inspec_n"]) ? $context["inspec_n"] : $this->getContext($context, "inspec_n"))) + (isset($context["dk_n"]) ? $context["dk_n"] : $this->getContext($context, "dk_n"))) + (isset($context["cgsn_ch"]) ? $context["cgsn_ch"] : $this->getContext($context, "cgsn_ch"))) + (isset($context["kr_ch"]) ? $context["kr_ch"] : $this->getContext($context, "kr_ch"))) + (isset($context["inspec_ch"]) ? $context["inspec_ch"] : $this->getContext($context, "inspec_ch"))) + (isset($context["dk_ch"]) ? $context["dk_ch"] : $this->getContext($context, "dk_ch"))) + (isset($context["prok_v"]) ? $context["prok_v"] : $this->getContext($context, "prok_v"))) + (isset($context["gal_v"]) ? $context["gal_v"] : $this->getContext($context, "gal_v"))) + (isset($context["cgsn_v_v"]) ? $context["cgsn_v_v"] : $this->getContext($context, "cgsn_v_v"))) + (isset($context["prok_n"]) ? $context["prok_n"] : $this->getContext($context, "prok_n"))) + (isset($context["gal_n"]) ? $context["gal_n"] : $this->getContext($context, "gal_n"))) + (isset($context["cgsn_v_n"]) ? $context["cgsn_v_n"] : $this->getContext($context, "cgsn_v_n"))) + (isset($context["prok_ch"]) ? $context["prok_ch"] : $this->getContext($context, "prok_ch"))) + (isset($context["gal_ch"]) ? $context["gal_ch"] : $this->getContext($context, "gal_ch"))) + (isset($context["cgsn_v_ch"]) ? $context["cgsn_v_ch"] : $this->getContext($context, "cgsn_v_ch"))), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (((((((isset($context["cgsn_v"]) ? $context["cgsn_v"] : $this->getContext($context, "cgsn_v")) + (isset($context["kr_v"]) ? $context["kr_v"] : $this->getContext($context, "kr_v"))) + (isset($context["inspec_v"]) ? $context["inspec_v"] : $this->getContext($context, "inspec_v"))) + (isset($context["dk_v"]) ? $context["dk_v"] : $this->getContext($context, "dk_v"))) + (isset($context["prok_v"]) ? $context["prok_v"] : $this->getContext($context, "prok_v"))) + (isset($context["gal_v"]) ? $context["gal_v"] : $this->getContext($context, "gal_v"))) + (isset($context["cgsn_v_v"]) ? $context["cgsn_v_v"] : $this->getContext($context, "cgsn_v_v"))), "html", null, true);
            echo ")</td>
                </tr>
                <tr>
                    <td colspan=\"16\">Плановые</td>
                    <td colspan=\"12\">Внеплановые</td>
                </tr>
                <tr>
                    <td colspan=\"4\">В</td>
                    <td colspan=\"4\">Н</td>
                    <td colspan=\"4\">Ч</td>
                    <td colspan=\"4\">И</td>
                    <td colspan=\"4\">В</td>
                    <td colspan=\"4\">Н</td>
                    <td colspan=\"2\">Ч</td>
                    <td colspan=\"2\">И</td>
                </tr>
                <tr>
                    <td colspan=\"4\">";
            // line 398
            echo twig_escape_filter($this->env, ((((isset($context["cgsn_v"]) ? $context["cgsn_v"] : $this->getContext($context, "cgsn_v")) + (isset($context["kr_v"]) ? $context["kr_v"] : $this->getContext($context, "kr_v"))) + (isset($context["inspec_v"]) ? $context["inspec_v"] : $this->getContext($context, "inspec_v"))) + (isset($context["dk_v"]) ? $context["dk_v"] : $this->getContext($context, "dk_v"))), "html", null, true);
            echo "</td>
                    <td colspan=\"4\">";
            // line 399
            echo twig_escape_filter($this->env, ((((isset($context["cgsn_n"]) ? $context["cgsn_n"] : $this->getContext($context, "cgsn_n")) + (isset($context["kr_n"]) ? $context["kr_n"] : $this->getContext($context, "kr_n"))) + (isset($context["inspec_n"]) ? $context["inspec_n"] : $this->getContext($context, "inspec_n"))) + (isset($context["dk_n"]) ? $context["dk_n"] : $this->getContext($context, "dk_n"))), "html", null, true);
            echo "</td>
                    <td colspan=\"4\">";
            // line 400
            echo twig_escape_filter($this->env, ((((isset($context["cgsn_ch"]) ? $context["cgsn_ch"] : $this->getContext($context, "cgsn_ch")) + (isset($context["kr_ch"]) ? $context["kr_ch"] : $this->getContext($context, "kr_ch"))) + (isset($context["inspec_ch"]) ? $context["inspec_ch"] : $this->getContext($context, "inspec_ch"))) + (isset($context["dk_ch"]) ? $context["dk_ch"] : $this->getContext($context, "dk_ch"))), "html", null, true);
            echo "</td>
                    <td colspan=\"4\">";
            // line 401
            echo twig_escape_filter($this->env, ((((((((((((isset($context["cgsn_v"]) ? $context["cgsn_v"] : $this->getContext($context, "cgsn_v")) + (isset($context["kr_v"]) ? $context["kr_v"] : $this->getContext($context, "kr_v"))) + (isset($context["inspec_v"]) ? $context["inspec_v"] : $this->getContext($context, "inspec_v"))) + (isset($context["dk_v"]) ? $context["dk_v"] : $this->getContext($context, "dk_v"))) + (isset($context["cgsn_n"]) ? $context["cgsn_n"] : $this->getContext($context, "cgsn_n"))) + (isset($context["kr_n"]) ? $context["kr_n"] : $this->getContext($context, "kr_n"))) + (isset($context["inspec_n"]) ? $context["inspec_n"] : $this->getContext($context, "inspec_n"))) + (isset($context["dk_n"]) ? $context["dk_n"] : $this->getContext($context, "dk_n"))) + (isset($context["cgsn_ch"]) ? $context["cgsn_ch"] : $this->getContext($context, "cgsn_ch"))) + (isset($context["kr_ch"]) ? $context["kr_ch"] : $this->getContext($context, "kr_ch"))) + (isset($context["inspec_ch"]) ? $context["inspec_ch"] : $this->getContext($context, "inspec_ch"))) + (isset($context["dk_ch"]) ? $context["dk_ch"] : $this->getContext($context, "dk_ch"))), "html", null, true);
            echo "</td>
                    <td colspan=\"4\">";
            // line 402
            echo twig_escape_filter($this->env, (((isset($context["prok_v"]) ? $context["prok_v"] : $this->getContext($context, "prok_v")) + (isset($context["gal_v"]) ? $context["gal_v"] : $this->getContext($context, "gal_v"))) + (isset($context["cgsn_v_v"]) ? $context["cgsn_v_v"] : $this->getContext($context, "cgsn_v_v"))), "html", null, true);
            echo "</td>
                    <td colspan=\"4\">";
            // line 403
            echo twig_escape_filter($this->env, (((isset($context["prok_n"]) ? $context["prok_n"] : $this->getContext($context, "prok_n")) + (isset($context["gal_n"]) ? $context["gal_n"] : $this->getContext($context, "gal_n"))) + (isset($context["cgsn_v_n"]) ? $context["cgsn_v_n"] : $this->getContext($context, "cgsn_v_n"))), "html", null, true);
            echo "</td>
                    <td colspan=\"2\">";
            // line 404
            echo twig_escape_filter($this->env, (((isset($context["prok_ch"]) ? $context["prok_ch"] : $this->getContext($context, "prok_ch")) + (isset($context["gal_ch"]) ? $context["gal_ch"] : $this->getContext($context, "gal_ch"))) + (isset($context["cgsn_v_ch"]) ? $context["cgsn_v_ch"] : $this->getContext($context, "cgsn_v_ch"))), "html", null, true);
            echo "</td>
                    <td colspan=\"2\">";
            // line 405
            echo twig_escape_filter($this->env, (((((((((isset($context["prok_v"]) ? $context["prok_v"] : $this->getContext($context, "prok_v")) + (isset($context["gal_v"]) ? $context["gal_v"] : $this->getContext($context, "gal_v"))) + (isset($context["cgsn_v_v"]) ? $context["cgsn_v_v"] : $this->getContext($context, "cgsn_v_v"))) + (isset($context["prok_n"]) ? $context["prok_n"] : $this->getContext($context, "prok_n"))) + (isset($context["gal_n"]) ? $context["gal_n"] : $this->getContext($context, "gal_n"))) + (isset($context["cgsn_v_n"]) ? $context["cgsn_v_n"] : $this->getContext($context, "cgsn_v_n"))) + (isset($context["prok_ch"]) ? $context["prok_ch"] : $this->getContext($context, "prok_ch"))) + (isset($context["gal_ch"]) ? $context["gal_ch"] : $this->getContext($context, "gal_ch"))) + (isset($context["cgsn_v_ch"]) ? $context["cgsn_v_ch"] : $this->getContext($context, "cgsn_v_ch"))), "html", null, true);
            echo "</td>
                </tr>
            </tfoot>

        </table>
    ";
        }
        // line 411
        echo "</div>
";
        
        $__internal_a15251244bbd5737d9b0d8f913561852d77545746f6e0a364be8fc8a09656acb->leave($__internal_a15251244bbd5737d9b0d8f913561852d77545746f6e0a364be8fc8a09656acb_prof);

    }

    // line 414
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_23ad95e900b44a7fdf86ef9cec82dc0dcd488b24a518551f886acdc0955a4f1e = $this->env->getExtension("native_profiler");
        $__internal_23ad95e900b44a7fdf86ef9cec82dc0dcd488b24a518551f886acdc0955a4f1e->enter($__internal_23ad95e900b44a7fdf86ef9cec82dc0dcd488b24a518551f886acdc0955a4f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 415
        echo "
";
        
        $__internal_23ad95e900b44a7fdf86ef9cec82dc0dcd488b24a518551f886acdc0955a4f1e->leave($__internal_23ad95e900b44a7fdf86ef9cec82dc0dcd488b24a518551f886acdc0955a4f1e_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/proverka_narusheniya.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1246 => 415,  1240 => 414,  1232 => 411,  1223 => 405,  1219 => 404,  1215 => 403,  1211 => 402,  1207 => 401,  1203 => 400,  1199 => 399,  1195 => 398,  1173 => 381,  1169 => 380,  1165 => 379,  1161 => 378,  1157 => 377,  1153 => 376,  1149 => 375,  1145 => 374,  1141 => 373,  1137 => 372,  1133 => 371,  1129 => 370,  1125 => 369,  1121 => 368,  1117 => 367,  1113 => 366,  1109 => 365,  1105 => 364,  1101 => 363,  1097 => 362,  1093 => 361,  1089 => 360,  1085 => 359,  1081 => 358,  1077 => 357,  1073 => 356,  1069 => 355,  1065 => 354,  1061 => 353,  1055 => 349,  1039 => 346,  1036 => 345,  1033 => 344,  1030 => 343,  1027 => 342,  1024 => 341,  1022 => 340,  1016 => 337,  1012 => 336,  1008 => 335,  1004 => 334,  1000 => 333,  996 => 332,  992 => 331,  988 => 330,  985 => 329,  978 => 327,  975 => 326,  972 => 325,  969 => 324,  966 => 323,  963 => 322,  960 => 321,  958 => 320,  955 => 319,  951 => 317,  945 => 315,  942 => 314,  938 => 312,  932 => 310,  929 => 309,  925 => 307,  919 => 305,  916 => 304,  912 => 302,  906 => 300,  904 => 299,  901 => 298,  895 => 297,  890 => 294,  884 => 293,  878 => 292,  875 => 291,  872 => 290,  870 => 289,  867 => 288,  864 => 287,  861 => 286,  858 => 285,  855 => 284,  853 => 283,  852 => 282,  851 => 281,  850 => 280,  847 => 279,  844 => 278,  841 => 277,  838 => 276,  835 => 275,  832 => 274,  829 => 273,  827 => 272,  824 => 271,  821 => 270,  818 => 269,  815 => 268,  812 => 267,  810 => 266,  809 => 265,  808 => 264,  807 => 263,  804 => 262,  801 => 261,  798 => 260,  795 => 259,  792 => 258,  789 => 257,  786 => 256,  784 => 255,  781 => 254,  778 => 253,  775 => 252,  772 => 251,  769 => 250,  767 => 249,  766 => 248,  765 => 247,  764 => 246,  761 => 245,  758 => 244,  755 => 243,  752 => 242,  750 => 241,  747 => 240,  743 => 239,  740 => 238,  735 => 237,  732 => 236,  727 => 235,  723 => 234,  719 => 233,  714 => 232,  697 => 231,  694 => 230,  688 => 229,  682 => 228,  679 => 227,  673 => 226,  667 => 225,  664 => 224,  661 => 223,  658 => 222,  655 => 221,  652 => 220,  649 => 219,  646 => 218,  643 => 217,  641 => 216,  638 => 215,  633 => 214,  628 => 213,  626 => 212,  623 => 211,  620 => 210,  614 => 209,  608 => 208,  605 => 207,  602 => 206,  599 => 205,  596 => 204,  593 => 203,  590 => 202,  587 => 201,  584 => 200,  582 => 199,  579 => 198,  574 => 197,  569 => 196,  567 => 195,  564 => 194,  561 => 193,  555 => 192,  549 => 191,  546 => 190,  543 => 189,  540 => 188,  537 => 187,  534 => 186,  531 => 185,  528 => 184,  525 => 183,  523 => 182,  520 => 181,  515 => 180,  510 => 179,  508 => 178,  505 => 177,  502 => 176,  496 => 175,  490 => 174,  487 => 173,  484 => 172,  481 => 171,  478 => 170,  475 => 169,  472 => 168,  469 => 167,  466 => 166,  464 => 165,  461 => 164,  456 => 163,  451 => 162,  449 => 161,  446 => 160,  443 => 159,  437 => 158,  431 => 157,  428 => 156,  425 => 155,  422 => 154,  419 => 153,  416 => 152,  413 => 151,  410 => 150,  407 => 149,  405 => 148,  402 => 147,  397 => 146,  392 => 145,  390 => 144,  387 => 143,  384 => 142,  378 => 141,  372 => 140,  369 => 139,  366 => 138,  363 => 137,  360 => 136,  357 => 135,  354 => 134,  351 => 133,  348 => 132,  346 => 131,  343 => 130,  338 => 129,  333 => 128,  331 => 127,  328 => 126,  325 => 125,  319 => 124,  313 => 123,  310 => 122,  307 => 121,  304 => 120,  301 => 119,  298 => 118,  295 => 117,  292 => 116,  289 => 115,  287 => 114,  284 => 113,  279 => 112,  274 => 111,  272 => 110,  268 => 108,  263 => 107,  259 => 106,  255 => 104,  252 => 103,  249 => 102,  246 => 101,  243 => 100,  240 => 99,  237 => 98,  234 => 97,  231 => 96,  228 => 95,  225 => 94,  222 => 93,  219 => 92,  216 => 91,  213 => 90,  210 => 89,  207 => 88,  204 => 87,  201 => 86,  198 => 85,  195 => 84,  193 => 83,  190 => 82,  187 => 81,  184 => 80,  181 => 79,  178 => 78,  175 => 77,  172 => 76,  169 => 75,  166 => 74,  163 => 73,  160 => 72,  157 => 71,  154 => 70,  151 => 69,  149 => 68,  135 => 56,  125 => 51,  121 => 50,  114 => 45,  105 => 43,  101 => 42,  87 => 30,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/proverka_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Статистика нарушений по учреждениям и типам проверки</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('narusheniya') }}" >*/
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
/*     {% if proverkaType is empty%}*/
/*         <p>Не добавлены учреждения или проверки или нет проверок в выбранный период</p>*/
/*     {% elseif proverka_temp is empty%}*/
/*         <p>Не добавлены учреждения или проверки или нет проверок в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <div>В - выполнено, Н - невыполнено, Ч - частично, И - итого</div>*/
/*         <table class="table table-hover table-bordered numbers" style="position:absolute; left:5px; font-size:14px;">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td></td>*/
/*                     <td colspan="16">Плановые</td>*/
/*                     <td colspan="12">Внеплановые</td>*/
/*                     <td colspan="8" id="narusheniya">Итог</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Учреждение</td>*/
/*                     {% for type in proverkaType %}*/
/*                         <td colspan="4">{{type.name}}</td>*/
/*                     {% endfor %}*/
/*                     <td colspan="4">Плановые</td>*/
/*                     <td colspan="4">Внеплановые</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td></td>*/
/*                     {% for type in proverkaType %}*/
/*                         <td>В</td>*/
/*                         <td>Н</td>*/
/*                         <td>Ч</td>*/
/*                         <td>И</td>*/
/*                     {% endfor %}*/
/*                     <td>В</td>*/
/*                     <td>Н</td>*/
/*                     <td>Ч</td>*/
/*                     <td>И</td>*/
/*                     <td>В</td>*/
/*                     <td>Н</td>*/
/*                     <td>Ч</td>*/
/*                     <td>И</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% set flag1 = "0" %}*/
/*             {% set flag2 = "0" %}*/
/*             {% set flag3 = "0" %}*/
/*             {% set count1 = "0" %}*/
/*             {% set count2 = "0" %}*/
/*             {% set count3 = "0" %}*/
/*             {% set count_all = "0" %}*/
/*             {% set count_P_V = "0" %}*/
/*             {% set count_P_N = "0" %}*/
/*             {% set count_P_CH = "0" %}*/
/*             {% set count_V_V = "0" %}*/
/*             {% set count_V_N = "0" %}*/
/*             {% set count_V_CH = "0" %}*/
/*             {% set otmetki = ["1", "0", "-1"] %}*/
/* */
/*             {% set cgsn_v = "0" %}*/
/*             {% set cgsn_n = "0" %}*/
/*             {% set cgsn_ch = "0" %}*/
/*             {% set kr_v = "0" %}*/
/*             {% set kr_n = "0" %}*/
/*             {% set kr_ch = "0" %}*/
/*             {% set inspec_v = "0" %}*/
/*             {% set inspec_n = "0" %}*/
/*             {% set inspec_ch = "0" %}*/
/*             {% set dk_v = "0" %}*/
/*             {% set dk_n = "0" %}*/
/*             {% set dk_ch = "0" %}*/
/*             {% set prok_v = "0" %}*/
/*             {% set prok_n = "0" %}*/
/*             {% set prok_ch = "0" %}*/
/*             {% set gal_v = "0" %}*/
/*             {% set gal_n = "0" %}*/
/*             {% set gal_ch = "0" %}*/
/*             {% set cgsn_v_v = "0" %}*/
/*             {% set cgsn_v_n = "0" %}*/
/*             {% set cgsn_v_ch = "0" %}*/
/* */
/* */
/*             {% for proverka in proverka_temp %}*/
/*                 {% for key, prov in proverka %}*/
/* */
/* */
/*                     {% if key == "ЦГСЭН" %}*/
/*                         {% for k, p in prov %}*/
/*                             {% for k1, p1 in p %}*/
/* */
/*                                 {% if k1 == "1" %}*/
/*                                     {% set cgsn_v = cgsn_v + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "0" %}*/
/*                                     {% set cgsn_n = cgsn_n + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "-1" %}*/
/*                                     {% set cgsn_ch = cgsn_ch + p1 %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                     {% if key == "Контрольная проверка" %}*/
/*                         {% for k, p in prov %}*/
/*                             {% for k1, p1 in p %}*/
/* */
/*                                 {% if k1 == "1" %}*/
/*                                     {% set kr_v = kr_v + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "0" %}*/
/*                                     {% set kr_n = kr_n + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "-1" %}*/
/*                                     {% set kr_ch = kr_ch + p1 %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                     {% if key == "Инспектирование" %}*/
/*                         {% for k, p in prov %}*/
/*                             {% for k1, p1 in p %}*/
/* */
/*                                 {% if k1 == "1" %}*/
/*                                     {% set inspec_v = inspec_v + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "0" %}*/
/*                                     {% set inspec_n = inspec_n + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "-1" %}*/
/*                                     {% set inspec_ch = inspec_ch + p1 %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                     {% if key == "День куратора" %}*/
/*                         {% for k, p in prov %}*/
/*                             {% for k1, p1 in p %}*/
/* */
/*                                 {% if k1 == "1" %}*/
/*                                     {% set dk_v = dk_v + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "0" %}*/
/*                                     {% set dk_n = dk_n + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "-1" %}*/
/*                                     {% set dk_ch = dk_ch + p1 %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                     {% if key == "Прокуратура" %}*/
/*                         {% for k, p in prov %}*/
/*                             {% for k1, p1 in p %}*/
/* */
/*                                 {% if k1 == "1" %}*/
/*                                     {% set prok_v = prok_v + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "0" %}*/
/*                                     {% set prok_n = prok_n + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "-1" %}*/
/*                                     {% set prok_ch = prok_ch + p1 %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                     {% if key == "По жалобе" %}*/
/*                         {% for k, p in prov %}*/
/*                             {% for k1, p1 in p %}*/
/* */
/*                                 {% if k1 == "1" %}*/
/*                                     {% set gal_v = gal_v + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "0" %}*/
/*                                     {% set gal_n = gal_n + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "-1" %}*/
/*                                     {% set gal_ch = gal_ch + p1 %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                     {% if key == "ЦГСЭН внеплановая" %}*/
/*                         {% for k, p in prov %}*/
/*                             {% for k1, p1 in p %}*/
/* */
/*                                 {% if k1 == "1" %}*/
/*                                     {% set cgsn_v_v = cgsn_v_v + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "0" %}*/
/*                                     {% set cgsn_v_n = cgsn_v_n + p1 %}*/
/*                                 {% endif %}*/
/*                                 {% if k1 == "-1" %}*/
/*                                     {% set cgsn_v_ch = cgsn_v_ch + p1 %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/* */
/*             {% for key, proverki in proverka_temp %}*/
/*                 <tr class="pokazatels{{loop.index}}">*/
/*                     <td class="name">{{ key }}</td>*/
/*                 {% for type in proverkaType %}*/
/*                     {% for key_proverka, proverka in proverki %}*/
/*                         {% if type.name == key_proverka %}*/
/*                             {% for key, otmetka in proverka %}*/
/* */
/*                                 {% for key, count in otmetka %}*/
/* */
/*                                     {% if otmetka["1"] is defined %}*/
/*                                         {% if key == "1" %}*/
/*                                             {% set count_all = count_all + count %}*/
/*                                             {% set count1 = count1 + count %}*/
/* */
/*                                             {% if key_proverka == "ЦГСЭН" or*/
/*                                                   key_proverka == "Контрольная проверка" or*/
/*                                                   key_proverka == "Инспектирование" or*/
/*                                                   key_proverka == "День куратора" %}*/
/*                                                 {% set count_P_V = count_P_V + count %}*/
/*                                             {% else %}*/
/*                                                 {% set count_V_V = count_V_V + count %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% set flag1 = "1" %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                     {% if otmetka["0"] is defined %}*/
/*                                         {% if key == "0" %}*/
/*                                             {% set count_all = count_all + count %}*/
/*                                             {% set count2 = count2 + count %}*/
/* */
/*                                             {% if key_proverka == "ЦГСЭН" or*/
/*                                                   key_proverka == "Контрольная проверка" or*/
/*                                                   key_proverka == "Инспектирование" or*/
/*                                                   key_proverka == "День куратора" %}*/
/*                                                 {% set count_P_N = count_P_N + count %}*/
/*                                             {% else %}*/
/*                                                 {% set count_V_N = count_V_N + count %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% set flag2 = "1" %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                     {% if otmetka["-1"] is defined %}*/
/*                                         {% if key == "-1" %}*/
/*                                             {% set count_all = count_all + count %}*/
/*                                             {% set count3 = count3 + count %}*/
/* */
/*                                             {% if key_proverka == "ЦГСЭН" or*/
/*                                                   key_proverka == "Контрольная проверка" or*/
/*                                                   key_proverka == "Инспектирование" or*/
/*                                                   key_proverka == "День куратора" %}*/
/*                                                 {% set count_P_CH = count_P_CH + count %}*/
/*                                             {% else %}*/
/*                                                 {% set count_V_CH = count_V_CH + count %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% set flag3 = "1" %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                         {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                     {% if flag1 == "1" %}*/
/*                         <td>{{ count1 }}</td>*/
/*                     {% else %}*/
/*                         <td>-</td>*/
/*                     {% endif %}*/
/*                     {% if flag2 == "1" %}*/
/*                         <td>{{ count2 }}</td>*/
/*                     {% else %}*/
/*                         <td>-</td>*/
/*                     {% endif %}*/
/*                     {% if flag3 == "1" %}*/
/*                         <td>{{ count3 }}</td>*/
/*                     {% else %}*/
/*                         <td>-</td>*/
/*                     {% endif %}*/
/*                     {% if count_all %}*/
/*                         <td>{{ count_all }}</td>*/
/*                     {% else %}*/
/*                         <td>-</td>*/
/*                     {% endif %}*/
/* */
/*                     {% set flag1 = "0" %}*/
/*                     {% set flag2 = "0" %}*/
/*                     {% set flag3 = "0" %}*/
/*                     {% set count1 = "0" %}*/
/*                     {% set count2 = "0" %}*/
/*                     {% set count3 = "0" %}*/
/*                     {% set count_all = "0" %}*/
/* */
/*                 {% endfor %}*/
/* */
/*                     <td>{{ count_P_V }}</td>*/
/*                     <td>{{ count_P_N }}</td>*/
/*                     <td>{{ count_P_CH }}</td>*/
/*                     <td>{{ count_P_V + count_P_N + count_P_CH }}</td>*/
/*                     <td>{{ count_V_V }}</td>*/
/*                     <td>{{ count_V_N }}</td>*/
/*                     <td>{{ count_V_CH }}</td>*/
/*                     <td>{{ count_V_V + count_V_N + count_V_CH }}</td>*/
/* */
/* */
/*                     {% set count_P_V = "0" %}*/
/*                     {% set count_P_N = "0" %}*/
/*                     {% set count_P_CH = "0" %}*/
/*                     {% set count_V_V = "0" %}*/
/*                     {% set count_V_N = "0" %}*/
/*                     {% set count_V_CH = "0" %}*/
/* */
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*             <tfoot>*/
/*                 <tr>*/
/*                     <td rowspan="4" style="padding-top:50px">Всего</td>*/
/*                     <td>{{ cgsn_v }}</td>*/
/*                     <td>{{ cgsn_n }}</td>*/
/*                     <td>{{ cgsn_ch }}</td>*/
/*                     <td>{{ cgsn_v + cgsn_n + cgsn_ch }}</td>*/
/*                     <td>{{ kr_v }}</td>*/
/*                     <td>{{ kr_n }}</td>*/
/*                     <td>{{ kr_ch }}</td>*/
/*                     <td>{{ kr_v + kr_n + kr_ch}}</td>*/
/*                     <td>{{ inspec_v }}</td>*/
/*                     <td>{{ inspec_n }}</td>*/
/*                     <td>{{ inspec_ch }}</td>*/
/*                     <td>{{ inspec_v + inspec_n + inspec_ch }}</td>*/
/*                     <td>{{ dk_v }}</td>*/
/*                     <td>{{ dk_n }}</td>*/
/*                     <td>{{ dk_ch }}</td>*/
/*                     <td>{{ dk_v + dk_n + dk_ch }}</td>*/
/*                     <td>{{ prok_v }}</td>*/
/*                     <td>{{ prok_n }}</td>*/
/*                     <td>{{ prok_ch }}</td>*/
/*                     <td>{{ prok_v + prok_n + prok_ch }}</td>*/
/*                     <td>{{ gal_v }}</td>*/
/*                     <td>{{ gal_n }}</td>*/
/*                     <td>{{ gal_ch }}</td>*/
/*                     <td>{{ gal_v + gal_n + gal_ch }}</td>*/
/*                     <td>{{ cgsn_v_v }}</td>*/
/*                     <td>{{ cgsn_v_n }}</td>*/
/*                     <td>{{ cgsn_v_ch }}</td>*/
/*                     <td>{{ cgsn_v_v + cgsn_v_n + cgsn_v_ch }}</td>*/
/*                     <td style="text-align:center;padding-top:50px" colspan="8" rowspan="4" id="vsego">{{ cgsn_v + kr_v + inspec_v + dk_v + cgsn_n + kr_n + inspec_n + dk_n + cgsn_ch + kr_ch + inspec_ch + dk_ch + prok_v + gal_v + cgsn_v_v + prok_n + gal_n + cgsn_v_n + prok_ch + gal_ch + cgsn_v_ch }} ({{cgsn_v + kr_v + inspec_v + dk_v + prok_v + gal_v + cgsn_v_v }})</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="16">Плановые</td>*/
/*                     <td colspan="12">Внеплановые</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="4">В</td>*/
/*                     <td colspan="4">Н</td>*/
/*                     <td colspan="4">Ч</td>*/
/*                     <td colspan="4">И</td>*/
/*                     <td colspan="4">В</td>*/
/*                     <td colspan="4">Н</td>*/
/*                     <td colspan="2">Ч</td>*/
/*                     <td colspan="2">И</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="4">{{ cgsn_v + kr_v + inspec_v + dk_v }}</td>*/
/*                     <td colspan="4">{{ cgsn_n + kr_n + inspec_n + dk_n }}</td>*/
/*                     <td colspan="4">{{ cgsn_ch + kr_ch + inspec_ch + dk_ch }}</td>*/
/*                     <td colspan="4">{{ cgsn_v + kr_v + inspec_v + dk_v + cgsn_n + kr_n + inspec_n + dk_n + cgsn_ch + kr_ch + inspec_ch + dk_ch }}</td>*/
/*                     <td colspan="4">{{ prok_v + gal_v + cgsn_v_v }}</td>*/
/*                     <td colspan="4">{{ prok_n + gal_n + cgsn_v_n }}</td>*/
/*                     <td colspan="2">{{ prok_ch + gal_ch + cgsn_v_ch }}</td>*/
/*                     <td colspan="2">{{ prok_v + gal_v + cgsn_v_v + prok_n + gal_n + cgsn_v_n + prok_ch + gal_ch + cgsn_v_ch }}</td>*/
/*                 </tr>*/
/*             </tfoot>*/
/* */
/*         </table>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
