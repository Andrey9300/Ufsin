<?php

/* organization/currentOrganization.html.twig */
class __TwigTemplate_d6608eb8f7e3e49ba68d3820972d2616c8bf47f9dbf3dff3564583eda769c12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/currentOrganization.html.twig", 1);
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
        $__internal_bd1783df456b1caf3b7406b220117612095f2008a286200be2a369437f073d2b = $this->env->getExtension("native_profiler");
        $__internal_bd1783df456b1caf3b7406b220117612095f2008a286200be2a369437f073d2b->enter($__internal_bd1783df456b1caf3b7406b220117612095f2008a286200be2a369437f073d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/currentOrganization.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd1783df456b1caf3b7406b220117612095f2008a286200be2a369437f073d2b->leave($__internal_bd1783df456b1caf3b7406b220117612095f2008a286200be2a369437f073d2b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ae12a1281d84b45019ab63f8107d00b14f9fa979028e2066519b372397c505cd = $this->env->getExtension("native_profiler");
        $__internal_ae12a1281d84b45019ab63f8107d00b14f9fa979028e2066519b372397c505cd->enter($__internal_ae12a1281d84b45019ab63f8107d00b14f9fa979028e2066519b372397c505cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>«";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "nameShort", array()), "html", null, true);
        echo "»</h1>
    <div class=\"col-md-8\">
        <div class=\"row\">          
            <table class=\"table table-hover main\">
                <tbody>
                    <tr>
                        <td>Юридический адрес:</td>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "urAddress", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Руководитель:</td>
                        <td>
                            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rukovoditel"]) ? $context["rukovoditel"] : $this->getContext($context, "rukovoditel")));
        foreach ($context['_seq'] as $context["_key"] => $context["ruk"]) {
            // line 19
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruk"], "fio", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruk"], "zvanie", array()), "html", null, true);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                        </td>
                    </tr>
                  <tr>
                    <td>Замы:</td>
                    <td>           
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["org_ruk_zams"]) ? $context["org_ruk_zams"] : $this->getContext($context, "org_ruk_zams")));
        foreach ($context['_seq'] as $context["_key"] => $context["ruk_zam"]) {
            // line 27
            echo "                            <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruk_zam"], "fio", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruk_zam"], "zvanie", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruk_zam"], "oblastDeaytelnosti", array()), "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruk_zam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </td>
                  </tr>
                  <tr>
                    <td>Филиал:</td>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mch"]) ? $context["mch"] : $this->getContext($context, "mch")), "name", array()), "html", null, true);
        echo "</td>
                  </tr>
                </tbody>
            </table>
        </div>
        
        ";
        // line 39
        if ((isset($context["dogovorAll"]) ? $context["dogovorAll"] : $this->getContext($context, "dogovorAll"))) {
            // line 40
            echo "        <div class=\"row\">
            <hr/>
            <h4 class=\"withDates\">Договора</h4>
             
            <ul class=\"nav navbar-nav add\">
\t\t\t\t\t
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dogovorDates"]) ? $context["dogovorDates"] : $this->getContext($context, "dogovorDates")));
            foreach ($context['_seq'] as $context["_key"] => $context["dogovorDate"]) {
                // line 47
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["dogovorDate"]);
                foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                    // line 48
                    echo "                        <li><a href=\"/web/organization/sortDogovor/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "\" class=\"onDate\" id=\"dogovorOrganization\">... ";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "</a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogovorDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t
\t\t\t</ul>
            
            <table class=\"table table-hover main dogovorOrganization\">
                <thead>
                    <tr>
                        <td>Тип договора</td>
                        <td>Дата</td>
                        <td>Номер</td>
                        <td>С кем заключен</td>
                        <td>Сумма</td>
                    </tr>
                </thead>
                <tbody>
                 ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dogovorAll"]) ? $context["dogovorAll"] : $this->getContext($context, "dogovorAll")));
            foreach ($context['_seq'] as $context["_key"] => $context["dogovor"]) {
                // line 66
                echo "                        <tr>
                            <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dogovor"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "nomer", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "organization_posrednik", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "summa", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogovor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                </tbody>
            </table>
        </div>
        ";
        }
        // line 78
        echo "        
        <div class=\"row\">  
            <hr/>
            ";
        // line 81
        if ((isset($context["proverkaAll"]) ? $context["proverkaAll"] : $this->getContext($context, "proverkaAll"))) {
            // line 82
            echo "            <div class=\"col-md-6 row\">
                <h4 class=\"withDates\">Проверки</h4>       
                
                <ul class=\"nav navbar-nav add\">
                        
                    ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkiDates"]) ? $context["proverkiDates"] : $this->getContext($context, "proverkiDates")));
            foreach ($context['_seq'] as $context["_key"] => $context["proverkiDate"]) {
                // line 88
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["proverkiDate"]);
                foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                    // line 89
                    echo "                            <li><a href=\"/web/organization/sortProverki/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "\" class=\"onDate\" id=\"proverkiOrganization\">... ";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverkiDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                        
                </ul>
            
                <table class=\"table table-hover table-bordered numbers proverkiOrganization\" style=\"float:left\">
                    <thead>
                        <tr>
                            <td>Дата</td>
                            <td>Да</td>
                            <td>Нет</td>
                            <td>Частично</td>
                            <td>Итог</td>
                        </tr>
                    </thead>
                    <tbody>

                    ";
            // line 107
            $context["flag"] = "0";
            echo "  
                    ";
            // line 108
            $context["usloviya"] = array(0 => "1", 1 => "0", 2 => "-1");
            echo "  
                 
                    ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaIds"]) ? $context["proverkaIds"] : $this->getContext($context, "proverkaIds")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["proverkaId"]) {
                // line 111
                echo "                        <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                            <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverkaId"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                            ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["usloviya"]) ? $context["usloviya"] : $this->getContext($context, "usloviya")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["uslovie"]) {
                    // line 114
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["proverkaAll"]) ? $context["proverkaAll"] : $this->getContext($context, "proverkaAll")));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
                        // line 115
                        echo "                                
                                    ";
                        // line 116
                        if (($this->getAttribute($context["proverka"], "id", array()) == $this->getAttribute($context["proverkaId"], "id", array()))) {
                            // line 117
                            echo "                                        ";
                            if (($this->getAttribute($context["proverka"], "otmetka_ustraneniya", array()) == $context["uslovie"])) {
                                // line 118
                                echo "                                            <td class=\"pokazatel";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], 1, array()), "html", null, true);
                                echo "</td>
                                            ";
                                // line 119
                                $context["flag"] = "1";
                                // line 120
                                echo "                                        ";
                            }
                            echo "                    
                                    ";
                        }
                        // line 122
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "  
                                
                                ";
                    // line 125
                    if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                        // line 126
                        echo "                                    <td></td>
                                ";
                    }
                    // line 128
                    echo "                                
                                ";
                    // line 129
                    $context["flag"] = "0";
                    // line 130
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uslovie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverkaId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Всего</td>
                                <td id=\"result1\"></td>
                                <td id=\"result2\"></td>
                                <td id=\"result3\"></td>
                                <td id=\"vsego\"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            ";
        }
        // line 148
        echo "
            ";
        // line 149
        if ((($this->getAttribute($this->getAttribute((isset($context["lichnyiSostavCount"]) ? $context["lichnyiSostavCount"] : $this->getContext($context, "lichnyiSostavCount")), 0, array(), "array"), 1, array()) != 0) || ($this->getAttribute($this->getAttribute((isset($context["osugdenyiCount"]) ? $context["osugdenyiCount"] : $this->getContext($context, "osugdenyiCount")), 0, array(), "array"), 1, array()) != 0))) {
            // line 150
            echo "            <div class=\"col-md-6 row\">
                <h4 class=\"withDates\">Заболеваемость</h4>       
                
                <ul class=\"nav navbar-nav add\">
                        
                    ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["zabolevaniyaDates"]) ? $context["zabolevaniyaDates"] : $this->getContext($context, "zabolevaniyaDates")));
            foreach ($context['_seq'] as $context["_key"] => $context["zabolevaniyaDate"]) {
                // line 156
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["zabolevaniyaDate"]);
                foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                    // line 157
                    echo "                            <li><a href=\"/web/organization/sortZabolveniya/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "\" class=\"onDate\" id=\"zabolevaniyaOrganization\">... ";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zabolevaniyaDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "                  
                </ul>
                
                <table class=\"table table-hover table-bordered numbers zabolevaniyaOrganization\">
                    <thead>
                        <tr>
                            <td>Тип</td>
                            <td>Количество</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lichnyiSostavCount"]) ? $context["lichnyiSostavCount"] : $this->getContext($context, "lichnyiSostavCount")));
            foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                // line 172
                echo "                                <td>Личный состав</td>
                                <td>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["count"], 1, array()), "html", null, true);
                echo "</td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                            </tr>
                            
                            <tr>
                            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["osugdenyiCount"]) ? $context["osugdenyiCount"] : $this->getContext($context, "osugdenyiCount")));
            foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                // line 179
                echo "                                <td>Осужденные</td>
                                <td>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["count"], 1, array()), "html", null, true);
                echo "</td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                        </tr>                       
                    </tbody>
                </table>
            </div>
            ";
        }
        // line 187
        echo "        </div>  

        <div class=\"row\">
            ";
        // line 190
        if ((isset($context["proverkaNakazaniya"]) ? $context["proverkaNakazaniya"] : $this->getContext($context, "proverkaNakazaniya"))) {
            // line 191
            echo "            <hr/>
            <h4 class=\"withDates\">Привлеченные к наказанию</h4>

            <table class=\"table table-hover main narusheniyaOrganization\">
                <thead>
                    <tr>
                        <td>ФИО</td>
                        <td>Дата</td>
                        <td>Тип наказания</td>
                        <td>Вид наказания</td>
                    </tr>
                </thead>
                <tbody>
                 ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaNakazaniya"]) ? $context["proverkaNakazaniya"] : $this->getContext($context, "proverkaNakazaniya")));
            foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
                // line 205
                echo "                        <tr>
                            <td>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "fio", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 207
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverka"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "type", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "podchinennost", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "                </tbody>
            </table>
            ";
        }
        // line 214
        echo " 
        </div>

        <div class=\"row\" style=\"margin-bottom: 50px\">    
            <hr/>
            <ul class=\"nav navbar-nav add\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"padding: 10px; font-size: 14px;\">Проверка<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_proverka", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\">Добавить проверку</a></li>
                        <li><a href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_names_proverka", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\">Редактировать проверку</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"padding: 10px; font-size: 14px;\">Договор<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_dogovor", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\">Добавить договор</a></li>
                        <li><a href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_names_dogovor", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\">Редактировать договор</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"padding: 10px; font-size: 14px;\">Исследования<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_issledovanie", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\">Добавить лабораторное исследование</a></li>
                        <li><a href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_names_issl", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\">Редактировать лабораторное исследование</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_organization", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\" style=\"padding: 10px; font-size: 14px;\">Редактировать учреждение</a></li>
                <li><a href=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_organization", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\" class=\"delete_entity\" style=\"padding: 10px; font-size: 14px;\">Удалить учреждение</a></li>
            </ul>       
        </div>

    </div>   

    <div class=\"col-md-4\">
        <div style=\"margin-bottom:10px\">Объекты:</div>
            <div style=\"margin-bottom:10px\"> 
                ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) ? $context["objects"] : $this->getContext($context, "objects")));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 252
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "name", array()), "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "            </div>
    </div>
</div>

";
        
        $__internal_ae12a1281d84b45019ab63f8107d00b14f9fa979028e2066519b372397c505cd->leave($__internal_ae12a1281d84b45019ab63f8107d00b14f9fa979028e2066519b372397c505cd_prof);

    }

    // line 260
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_745e2d3a32d911b77f2a0b547d6cb00c11a056aa1a097ba89e5e1d6819b541b1 = $this->env->getExtension("native_profiler");
        $__internal_745e2d3a32d911b77f2a0b547d6cb00c11a056aa1a097ba89e5e1d6819b541b1->enter($__internal_745e2d3a32d911b77f2a0b547d6cb00c11a056aa1a097ba89e5e1d6819b541b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 261
        echo "
";
        
        $__internal_745e2d3a32d911b77f2a0b547d6cb00c11a056aa1a097ba89e5e1d6819b541b1->leave($__internal_745e2d3a32d911b77f2a0b547d6cb00c11a056aa1a097ba89e5e1d6819b541b1_prof);

    }

    public function getTemplateName()
    {
        return "organization/currentOrganization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 261,  674 => 260,  663 => 254,  654 => 252,  650 => 251,  638 => 242,  634 => 241,  628 => 238,  624 => 237,  615 => 231,  611 => 230,  602 => 224,  598 => 223,  587 => 214,  582 => 212,  573 => 209,  569 => 208,  565 => 207,  561 => 206,  558 => 205,  554 => 204,  539 => 191,  537 => 190,  532 => 187,  525 => 182,  517 => 180,  514 => 179,  510 => 178,  505 => 175,  497 => 173,  494 => 172,  490 => 171,  471 => 159,  458 => 157,  453 => 156,  449 => 155,  442 => 150,  440 => 149,  437 => 148,  421 => 134,  391 => 130,  389 => 129,  386 => 128,  382 => 126,  380 => 125,  376 => 123,  361 => 122,  355 => 120,  353 => 119,  346 => 118,  343 => 117,  341 => 116,  338 => 115,  320 => 114,  303 => 113,  299 => 112,  294 => 111,  277 => 110,  272 => 108,  268 => 107,  251 => 92,  245 => 91,  232 => 89,  227 => 88,  223 => 87,  216 => 82,  214 => 81,  209 => 78,  203 => 74,  194 => 71,  190 => 70,  186 => 69,  182 => 68,  178 => 67,  175 => 66,  171 => 65,  155 => 51,  149 => 50,  136 => 48,  131 => 47,  127 => 46,  119 => 40,  117 => 39,  108 => 33,  102 => 29,  89 => 27,  85 => 26,  78 => 21,  67 => 19,  63 => 18,  55 => 13,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>«{{ organization.nameShort }}»</h1>*/
/*     <div class="col-md-8">*/
/*         <div class="row">          */
/*             <table class="table table-hover main">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td>Юридический адрес:</td>*/
/*                         <td>{{ organization.urAddress }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Руководитель:</td>*/
/*                         <td>*/
/*                             {% for ruk in rukovoditel %}*/
/*                                 {{ ruk.fio}}, {{ ruk.zvanie}}*/
/*                             {% endfor %}*/
/*                         </td>*/
/*                     </tr>*/
/*                   <tr>*/
/*                     <td>Замы:</td>*/
/*                     <td>           */
/*                         {% for ruk_zam in org_ruk_zams %}*/
/*                             <div>{{ ruk_zam.fio}}, {{ ruk_zam.zvanie}}, {{ ruk_zam.oblastDeaytelnosti}}</div>*/
/*                         {% endfor %}*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>Филиал:</td>*/
/*                     <td>{{ mch.name }}</td>*/
/*                   </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         */
/*         {% if dogovorAll %}*/
/*         <div class="row">*/
/*             <hr/>*/
/*             <h4 class="withDates">Договора</h4>*/
/*              */
/*             <ul class="nav navbar-nav add">*/
/* 					*/
/*                 {% for dogovorDate in dogovorDates %}*/
/*                     {% for date in dogovorDate %}*/
/*                         <li><a href="/web/organization/sortDogovor/{{ organization.id }}/{{ date }}" class="onDate" id="dogovorOrganization">... {{ date }}</a></li>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/* 					*/
/* 			</ul>*/
/*             */
/*             <table class="table table-hover main dogovorOrganization">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <td>Тип договора</td>*/
/*                         <td>Дата</td>*/
/*                         <td>Номер</td>*/
/*                         <td>С кем заключен</td>*/
/*                         <td>Сумма</td>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                  {% for dogovor in dogovorAll %}*/
/*                         <tr>*/
/*                             <td>{{ dogovor.name }}</td>*/
/*                             <td>{{ dogovor.date|date("d.m.Y") }}</td>*/
/*                             <td>{{ dogovor.nomer }}</td>*/
/*                             <td>{{ dogovor.organization_posrednik }}</td>*/
/*                             <td>{{ dogovor.summa }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/*         */
/*         <div class="row">  */
/*             <hr/>*/
/*             {% if proverkaAll %}*/
/*             <div class="col-md-6 row">*/
/*                 <h4 class="withDates">Проверки</h4>       */
/*                 */
/*                 <ul class="nav navbar-nav add">*/
/*                         */
/*                     {% for proverkiDate in proverkiDates %}*/
/*                         {% for date in proverkiDate %}*/
/*                             <li><a href="/web/organization/sortProverki/{{ organization.id }}/{{ date }}" class="onDate" id="proverkiOrganization">... {{ date }}</a></li>*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                         */
/*                 </ul>*/
/*             */
/*                 <table class="table table-hover table-bordered numbers proverkiOrganization" style="float:left">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <td>Дата</td>*/
/*                             <td>Да</td>*/
/*                             <td>Нет</td>*/
/*                             <td>Частично</td>*/
/*                             <td>Итог</td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                     {% set flag = "0" %}  */
/*                     {% set usloviya = ["1", "0", "-1"] %}  */
/*                  */
/*                     {% for proverkaId in proverkaIds %}*/
/*                         <tr class="pokazatels{{loop.index}}">*/
/*                             <td>{{ proverkaId.date|date("d.m.Y") }}</td>*/
/*                             {% for uslovie in usloviya %}*/
/*                                 {% for proverka in proverkaAll %}*/
/*                                 */
/*                                     {% if proverka.id == proverkaId.id %}*/
/*                                         {% if proverka.otmetka_ustraneniya == uslovie  %}*/
/*                                             <td class="pokazatel{{loop.parent.loop.index}}">{{proverka.1}}</td>*/
/*                                             {% set flag = "1" %}*/
/*                                         {% endif %}                    */
/*                                     {% endif %}*/
/*                                     */
/*                                 {% endfor %}  */
/*                                 */
/*                                 {% if flag == "0" %}*/
/*                                     <td></td>*/
/*                                 {% endif %}*/
/*                                 */
/*                                 {% set flag = "0" %}*/
/*                             {% endfor %} */
/*                             <td></td>                            */
/*                         </tr> */
/*                     {% endfor %}*/
/* */
/*                     </tbody>*/
/*                     <tfoot>*/
/*                         <tr>*/
/*                             <td>Всего</td>*/
/*                                 <td id="result1"></td>*/
/*                                 <td id="result2"></td>*/
/*                                 <td id="result3"></td>*/
/*                                 <td id="vsego"></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             {% if lichnyiSostavCount[0].1 !=0 or osugdenyiCount[0].1 !=0 %}*/
/*             <div class="col-md-6 row">*/
/*                 <h4 class="withDates">Заболеваемость</h4>       */
/*                 */
/*                 <ul class="nav navbar-nav add">*/
/*                         */
/*                     {% for zabolevaniyaDate in zabolevaniyaDates %}*/
/*                         {% for date in zabolevaniyaDate %}*/
/*                             <li><a href="/web/organization/sortZabolveniya/{{ organization.id }}/{{ date }}" class="onDate" id="zabolevaniyaOrganization">... {{ date }}</a></li>*/
/*                         {% endfor %}*/
/*                     {% endfor %}                  */
/*                 </ul>*/
/*                 */
/*                 <table class="table table-hover table-bordered numbers zabolevaniyaOrganization">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <td>Тип</td>*/
/*                             <td>Количество</td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             {% for count in lichnyiSostavCount %}*/
/*                                 <td>Личный состав</td>*/
/*                                 <td>{{ count.1 }}</td>*/
/*                             {% endfor %}*/
/*                             </tr>*/
/*                             */
/*                             <tr>*/
/*                             {% for count in osugdenyiCount %}*/
/*                                 <td>Осужденные</td>*/
/*                                 <td>{{ count.1 }}</td>*/
/*                             {% endfor %}*/
/*                         </tr>                       */
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             {% endif %}*/
/*         </div>  */
/* */
/*         <div class="row">*/
/*             {% if proverkaNakazaniya %}*/
/*             <hr/>*/
/*             <h4 class="withDates">Привлеченные к наказанию</h4>*/
/* */
/*             <table class="table table-hover main narusheniyaOrganization">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <td>ФИО</td>*/
/*                         <td>Дата</td>*/
/*                         <td>Тип наказания</td>*/
/*                         <td>Вид наказания</td>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                  {% for proverka in proverkaNakazaniya %}*/
/*                         <tr>*/
/*                             <td>{{ proverka.fio }}</td>*/
/*                             <td>{{ proverka.date|date("d.m.Y") }}</td>*/
/*                             <td>{{ proverka.type }}</td>*/
/*                             <td>{{ proverka.podchinennost }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {% endif %} */
/*         </div>*/
/* */
/*         <div class="row" style="margin-bottom: 50px">    */
/*             <hr/>*/
/*             <ul class="nav navbar-nav add">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding: 10px; font-size: 14px;">Проверка<span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path('create_proverka', {'id': organization.id}) }}">Добавить проверку</a></li>*/
/*                         <li><a href="{{ path('show_names_proverka', {'id': organization.id}) }}">Редактировать проверку</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding: 10px; font-size: 14px;">Договор<span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path('create_dogovor', {'id': organization.id}) }}">Добавить договор</a></li>*/
/*                         <li><a href="{{ path('show_names_dogovor', {'id': organization.id}) }}">Редактировать договор</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding: 10px; font-size: 14px;">Исследования<span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path('create_issledovanie', {'id': organization.id}) }}">Добавить лабораторное исследование</a></li>*/
/*                         <li><a href="{{ path('show_names_issl', {'id': organization.id}) }}">Редактировать лабораторное исследование</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="{{ path('edit_organization', {'id': organization.id}) }}" style="padding: 10px; font-size: 14px;">Редактировать учреждение</a></li>*/
/*                 <li><a href="{{ path('delete_organization', {'id': organization.id}) }}" class="delete_entity" style="padding: 10px; font-size: 14px;">Удалить учреждение</a></li>*/
/*             </ul>       */
/*         </div>*/
/* */
/*     </div>   */
/* */
/*     <div class="col-md-4">*/
/*         <div style="margin-bottom:10px">Объекты:</div>*/
/*             <div style="margin-bottom:10px"> */
/*                 {% for obj in objects %}*/
/*                 <div>{{ obj.name}}</div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
