<?php

/* fkuz/showFkuz.html.twig */
class __TwigTemplate_80b61ff965da88146425478b3cadd0af800e4f548c15d926e0a3cd3a910ca023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/showFkuz.html.twig", 1);
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
        $__internal_c531e9ab935ee3cc41eed5b0501d5a2c73002700a3ce655d499cf40c9d7ce619 = $this->env->getExtension("native_profiler");
        $__internal_c531e9ab935ee3cc41eed5b0501d5a2c73002700a3ce655d499cf40c9d7ce619->enter($__internal_c531e9ab935ee3cc41eed5b0501d5a2c73002700a3ce655d499cf40c9d7ce619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/showFkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c531e9ab935ee3cc41eed5b0501d5a2c73002700a3ce655d499cf40c9d7ce619->leave($__internal_c531e9ab935ee3cc41eed5b0501d5a2c73002700a3ce655d499cf40c9d7ce619_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_331b140efbe67514425ef5de23323a009764fb6021d21769460f6d7b820715cf = $this->env->getExtension("native_profiler");
        $__internal_331b140efbe67514425ef5de23323a009764fb6021d21769460f6d7b820715cf->enter($__internal_331b140efbe67514425ef5de23323a009764fb6021d21769460f6d7b820715cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\"> 
    <h1>«";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "nameShort", array()), "html", null, true);
        echo "»</h1>
    <div class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"table table-hover main\">
                    <tbody>
                        <tr>
                            <td>Юридический адрес:</td>
                            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "address", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Руководитель:</td>
                            <td>
                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rukovoditel"]) ? $context["rukovoditel"] : $this->getContext($context, "rukovoditel")));
        foreach ($context['_seq'] as $context["_key"] => $context["ruk"]) {
            // line 20
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruk"], "fio", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruk"], "zvanie", array()), "html", null, true);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                            </td>
                        </tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 25
        if ((isset($context["rukZams"]) ? $context["rukZams"] : $this->getContext($context, "rukZams"))) {
            // line 26
            echo "                        <tr>
\t\t\t\t\t\t\t<td>Замы:</td>
\t\t\t\t\t\t\t<td>           
\t\t\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rukZams"]) ? $context["rukZams"] : $this->getContext($context, "rukZams")));
            foreach ($context['_seq'] as $context["_key"] => $context["ruk_zam"]) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t<div>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ruk_zam"], "fio", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ruk_zam"], "zvanie", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ruk_zam"], "oblastDeaytelnosti", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruk_zam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t\t\t</td>
                        </tr>
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t
                    </tbody>
                </table>
            </div>
        </div>
\t\t<hr/>
        <div class=\"row\">  
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 43
        if ((isset($context["licenses"]) ? $context["licenses"] : $this->getContext($context, "licenses"))) {
            // line 44
            echo "                <h4 class=\"withDates\">Лицензии</h4>
                
                <ul class=\"nav navbar-nav add\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["licenseDates"]) ? $context["licenseDates"] : $this->getContext($context, "licenseDates")));
            foreach ($context['_seq'] as $context["_key"] => $context["licenseDate"]) {
                // line 49
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["licenseDate"]);
                foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                    // line 50
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sort_license_fkuz", array("date" => $context["date"])), "html", null, true);
                    echo "\" class=\"onDate\" id=\"licenseFkuz\">... ";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licenseDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t
\t\t\t\t</ul>
                
\t\t\t\t<table class=\"table table-hover main licenseFkuz\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Номер</td>
\t\t\t\t\t\t\t<td>Дата</td>
\t\t\t\t\t\t\t<td>Вид деятельности</td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["licenses"]) ? $context["licenses"] : $this->getContext($context, "licenses")));
            foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
                // line 68
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "nomer", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["license"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "vidDeytelnosti", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-pencil edit_in_fkuz\" aria-hidden=\"true\" id_now=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_license", array("id" => $this->getAttribute($context["license"], "id", array()))), "html", null, true);
                echo "\"></span></td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-remove delete_now\" aria-hidden=\"true\" id_now=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_license", array("id" => $this->getAttribute($context["license"], "id", array()))), "html", null, true);
                echo "\"></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
        }
        // line 79
        echo "\t\t\t</div>

\t\t\t<div class=\"col-md-6\">  
\t\t\t\t";
        // line 82
        if ((isset($context["sanZakls"]) ? $context["sanZakls"] : $this->getContext($context, "sanZakls"))) {
            // line 83
            echo "                <h4 class=\"withDates\">Сан-эпид заключения</h4>
                
                <ul class=\"nav navbar-nav add\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sanZaklDates"]) ? $context["sanZaklDates"] : $this->getContext($context, "sanZaklDates")));
            foreach ($context['_seq'] as $context["_key"] => $context["sanZaklDate"]) {
                // line 88
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sanZaklDate"]);
                foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                    // line 89
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sort_san_zakl_fkuz", array("date" => $context["date"])), "html", null, true);
                    echo "\" class=\"onDate\" id=\"sanZaklFkuz\">... ";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sanZaklDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t\t
\t\t\t\t</ul>
                
\t\t\t\t<table class=\"table table-hover main sanZaklFkuz\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Номер</td>
\t\t\t\t\t\t\t<td>Дата</td>
\t\t\t\t\t\t\t<td>Вид деятельности</td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                            <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
                        </tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sanZakls"]) ? $context["sanZakls"] : $this->getContext($context, "sanZakls")));
            foreach ($context['_seq'] as $context["_key"] => $context["sanZakl"]) {
                // line 107
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["sanZakl"], "nomer", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 109
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sanZakl"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["sanZakl"], "vidDeytelnosti", array()), "html", null, true);
                echo "</td>
                            <td><span class=\"glyphicon glyphicon-pencil edit_in_fkuz\" aria-hidden=\"true\" id_now=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_san_zakl", array("id" => $this->getAttribute($context["sanZakl"], "id", array()))), "html", null, true);
                echo "\"></span></td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-remove delete_now\" aria-hidden=\"true\" id_now=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_san_zakl", array("id" => $this->getAttribute($context["sanZakl"], "id", array()))), "html", null, true);
                echo "\"></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sanZakl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
        }
        // line 118
        echo "\t\t\t</div>\t\t\t
        </div>
        
        <div class=\"row\">
\t\t\t<div class=\"col-md-12\"> 
\t\t\t\t";
        // line 123
        if ((isset($context["dogovorFkuz"]) ? $context["dogovorFkuz"] : $this->getContext($context, "dogovorFkuz"))) {
            // line 124
            echo "                <hr/>
                <h4 class=\"withDates\">Договора</h4>
                
                <ul class=\"nav navbar-nav add\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dogovorDates"]) ? $context["dogovorDates"] : $this->getContext($context, "dogovorDates")));
            foreach ($context['_seq'] as $context["_key"] => $context["dogovorDate"]) {
                // line 130
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["dogovorDate"]);
                foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                    // line 131
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sort_dogovor_fkuz", array("date" => $context["date"])), "html", null, true);
                    echo "\" class=\"onDate\" id=\"dogovorFkuz\">... ";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogovorDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "\t\t\t\t\t
\t\t\t\t</ul>
                
\t\t\t\t<table class=\"table table-hover main dogovorFkuz\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Тип</td>
\t\t\t\t\t\t\t<td>Дата</td>
\t\t\t\t\t\t\t<td>Номер</td>
\t\t\t\t\t\t\t<td>Организация посредник</td>
\t\t\t\t\t\t\t<td>Сумма</td>
                            <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                            <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>            
\t\t\t\t\t<tbody>
                    
\t\t\t\t\t";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dogovorFkuz"]) ? $context["dogovorFkuz"] : $this->getContext($context, "dogovorFkuz")));
            foreach ($context['_seq'] as $context["_key"] => $context["dogovor"]) {
                // line 152
                echo "\t\t\t\t\t\t<tr>
                            <td>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dogovor"], "dogovorType", array()), "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 154
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dogovor"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "nomer", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "organizationPosrednik", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "summa", array()), "html", null, true);
                echo "</td>
                            <td><span class=\"glyphicon glyphicon-pencil edit_in_fkuz\" aria-hidden=\"true\" id_now=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_dogovor_fkuz", array("id" => $this->getAttribute($context["dogovor"], "id", array()))), "html", null, true);
                echo "\"></span></td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-remove delete_now\" aria-hidden=\"true\" id_now=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_dogovor_fkuz", array("id" => $this->getAttribute($context["dogovor"], "id", array()))), "html", null, true);
                echo "\"></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogovor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t";
        }
        // line 165
        echo "    
\t\t\t\t 
\t\t\t</div>        
        </div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
        // line 172
        if ((isset($context["proverkaFkuz"]) ? $context["proverkaFkuz"] : $this->getContext($context, "proverkaFkuz"))) {
            // line 173
            echo "\t\t\t\t\t<hr/>
\t\t\t\t\t<h4 class=\"withDates\">Проверки</h4>

\t\t\t\t\t<ul class=\"nav navbar-nav add\">

\t\t\t\t\t\t";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaFkuzDates"]) ? $context["proverkaFkuzDates"] : $this->getContext($context, "proverkaFkuzDates")));
            foreach ($context['_seq'] as $context["_key"] => $context["proverkaFkuzDate"]) {
                // line 179
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["proverkaFkuzDate"]);
                foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sort_proverka_fkuz", array("date" => $context["date"])), "html", null, true);
                    echo "\" class=\"onDate\" id=\"proverkaFkuz\">... ";
                    echo twig_escape_filter($this->env, $context["date"], "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverkaFkuzDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "
\t\t\t\t\t</ul>

\t\t\t\t\t<table class=\"table table-hover main proverkaFkuz\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Номер</td>
\t\t\t\t\t\t\t<td>Дата</td>
\t\t\t\t\t\t\t<td>Наказания</td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaFkuz"]) ? $context["proverkaFkuz"] : $this->getContext($context, "proverkaFkuz")));
            foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
                // line 199
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "nomer", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 201
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverka"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 202
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_nakazaniya_fkuz", array("id" => $this->getAttribute($context["proverka"], "id", array()))), "html", null, true);
                echo "\">Наказания</a></td>
\t\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-pencil edit_in_fkuz\" aria-hidden=\"true\" id_now=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_proverka_fkuz", array("id" => $this->getAttribute($context["proverka"], "id", array()))), "html", null, true);
                echo "\"></span></td>
\t\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-remove delete_now\" aria-hidden=\"true\" id_now=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_proverka_fkuz", array("id" => $this->getAttribute($context["proverka"], "id", array()))), "html", null, true);
                echo "\"></span></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t";
        }
        // line 211
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
        // line 217
        if ((isset($context["proverkaNakazaniyaFkuz"]) ? $context["proverkaNakazaniyaFkuz"] : $this->getContext($context, "proverkaNakazaniyaFkuz"))) {
            // line 218
            echo "\t\t\t\t\t<hr/>
\t\t\t\t\t<h4 class=\"withDates\">Привлеченные к наказанию</h4>

\t\t\t\t\t<table class=\"table table-hover main narusheniyaOrganization\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>ФИО</td>
\t\t\t\t\t\t\t<td>Номер</td>
\t\t\t\t\t\t\t<td>Дата</td>
\t\t\t\t\t\t\t<td>Тип наказания</td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaNakazaniyaFkuz"]) ? $context["proverkaNakazaniyaFkuz"] : $this->getContext($context, "proverkaNakazaniyaFkuz")));
            foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
                // line 234
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "fio", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "nomer", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 237
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverka"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "type", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_nakazanie_fkuz", array("id" => $this->getAttribute($context["proverka"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 240
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_nakazanie_fkuz", array("id" => $this->getAttribute($context["proverka"], "id", array()))), "html", null, true);
                echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 246
        echo "\t\t\t</div>
\t\t</div>    <hr/>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\"> 
\t\t\t\t<ul class=\"nav navbar-nav add\">
\t\t\t\t\t<li><a href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_license", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\">Добавить лицензию</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_san_zakl", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\">Добавить сан-эпид заключение</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_dogovor_fkuz", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\">Добавить договор</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_proverka_fkuz", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\">Добавить Проверку</a></li>
                    <li><a href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_fkuz", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\">Редактировать филиал</a></li>
                    <li><a href=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_fkuz", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить ФКУЗ</a></li>
\t\t\t\t</ul>
            </div>    
        </div>
    </div>   
</div>

";
        
        $__internal_331b140efbe67514425ef5de23323a009764fb6021d21769460f6d7b820715cf->leave($__internal_331b140efbe67514425ef5de23323a009764fb6021d21769460f6d7b820715cf_prof);

    }

    // line 266
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_60ed6534c2ef27d6dafc10184f4d28457da9982896c1063eaf8be19dc95e1035 = $this->env->getExtension("native_profiler");
        $__internal_60ed6534c2ef27d6dafc10184f4d28457da9982896c1063eaf8be19dc95e1035->enter($__internal_60ed6534c2ef27d6dafc10184f4d28457da9982896c1063eaf8be19dc95e1035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 267
        echo "
";
        
        $__internal_60ed6534c2ef27d6dafc10184f4d28457da9982896c1063eaf8be19dc95e1035->leave($__internal_60ed6534c2ef27d6dafc10184f4d28457da9982896c1063eaf8be19dc95e1035_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/showFkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 267,  619 => 266,  604 => 257,  600 => 256,  596 => 255,  592 => 254,  588 => 253,  584 => 252,  576 => 246,  571 => 243,  562 => 240,  558 => 239,  554 => 238,  550 => 237,  546 => 236,  542 => 235,  539 => 234,  535 => 233,  518 => 218,  516 => 217,  508 => 211,  502 => 207,  493 => 204,  489 => 203,  485 => 202,  481 => 201,  477 => 200,  474 => 199,  470 => 198,  453 => 183,  447 => 182,  436 => 180,  431 => 179,  427 => 178,  420 => 173,  418 => 172,  409 => 165,  403 => 162,  394 => 159,  390 => 158,  386 => 157,  382 => 156,  378 => 155,  374 => 154,  370 => 153,  367 => 152,  363 => 151,  344 => 134,  338 => 133,  327 => 131,  322 => 130,  318 => 129,  311 => 124,  309 => 123,  302 => 118,  297 => 115,  288 => 112,  284 => 111,  280 => 110,  276 => 109,  272 => 108,  269 => 107,  265 => 106,  249 => 92,  243 => 91,  232 => 89,  227 => 88,  223 => 87,  217 => 83,  215 => 82,  210 => 79,  205 => 76,  196 => 73,  192 => 72,  188 => 71,  184 => 70,  180 => 69,  177 => 68,  173 => 67,  157 => 53,  151 => 52,  140 => 50,  135 => 49,  131 => 48,  125 => 44,  123 => 43,  113 => 35,  108 => 32,  95 => 30,  91 => 29,  86 => 26,  84 => 25,  79 => 22,  68 => 20,  64 => 19,  56 => 14,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row"> */
/*     <h1>«{{ fkuz.nameShort }}»</h1>*/
/*     <div class="col-md-12">*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 <table class="table table-hover main">*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td>Юридический адрес:</td>*/
/*                             <td>{{ fkuz.address }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Руководитель:</td>*/
/*                             <td>*/
/*                                 {% for ruk in rukovoditel %}*/
/*                                     {{ ruk.fio}}, {{ ruk.zvanie}}*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                         </tr>*/
/* 						*/
/* 						{% if rukZams %}*/
/*                         <tr>*/
/* 							<td>Замы:</td>*/
/* 							<td>           */
/* 								{% for ruk_zam in rukZams %}*/
/* 									<div>{{ ruk_zam.fio}}, {{ ruk_zam.zvanie}}, {{ ruk_zam.oblastDeaytelnosti}}</div>*/
/* 								{% endfor %}*/
/* 							</td>*/
/*                         </tr>*/
/* 						{% endif %}*/
/* 						*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* 		<hr/>*/
/*         <div class="row">  */
/* 			<div class="col-md-6">*/
/* 				{% if licenses %}*/
/*                 <h4 class="withDates">Лицензии</h4>*/
/*                 */
/*                 <ul class="nav navbar-nav add">*/
/* 					*/
/* 					{% for licenseDate in licenseDates %}*/
/*                         {% for date in licenseDate %}*/
/*                             <li><a href="{{ path('sort_license_fkuz', {'date': date}) }}" class="onDate" id="licenseFkuz">... {{ date }}</a></li>*/
/*                         {% endfor %}*/
/* 					{% endfor %}*/
/* 					*/
/* 				</ul>*/
/*                 */
/* 				<table class="table table-hover main licenseFkuz">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<td>Номер</td>*/
/* 							<td>Дата</td>*/
/* 							<td>Вид деятельности</td>*/
/* 							<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/* 							<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 					{% for license in licenses %}*/
/* 						<tr>*/
/* 							<td>{{ license.nomer }}</td>*/
/* 							<td>{{ license.date|date("d.m.Y") }}</td>*/
/* 							<td>{{ license.vidDeytelnosti }}</td>*/
/* 							<td><span class="glyphicon glyphicon-pencil edit_in_fkuz" aria-hidden="true" id_now="{{ path('edit_license', {'id': license.id}) }}"></span></td>*/
/* 							<td><span class="glyphicon glyphicon-remove delete_now" aria-hidden="true" id_now="{{ path('delete_license', {'id': license.id}) }}"></span></td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 				{% endif %}*/
/* 			</div>*/
/* */
/* 			<div class="col-md-6">  */
/* 				{% if sanZakls %}*/
/*                 <h4 class="withDates">Сан-эпид заключения</h4>*/
/*                 */
/*                 <ul class="nav navbar-nav add">*/
/* 					*/
/* 					{% for sanZaklDate in sanZaklDates %}*/
/*                         {% for date in sanZaklDate %}*/
/*                             <li><a href="{{ path('sort_san_zakl_fkuz', {'date': date}) }}" class="onDate" id="sanZaklFkuz">... {{ date }}</a></li>*/
/*                         {% endfor %}*/
/* 					{% endfor %}*/
/* 					*/
/* 				</ul>*/
/*                 */
/* 				<table class="table table-hover main sanZaklFkuz">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<td>Номер</td>*/
/* 							<td>Дата</td>*/
/* 							<td>Вид деятельности</td>*/
/* 							<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                             <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*                         </tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 					{% for sanZakl in sanZakls %}*/
/* 						<tr>*/
/* 							<td>{{ sanZakl.nomer }}</td>*/
/* 							<td>{{ sanZakl.date|date("d.m.Y") }}</td>*/
/* 							<td>{{ sanZakl.vidDeytelnosti }}</td>*/
/*                             <td><span class="glyphicon glyphicon-pencil edit_in_fkuz" aria-hidden="true" id_now="{{ path('edit_san_zakl', {'id': sanZakl.id}) }}"></span></td>*/
/* 							<td><span class="glyphicon glyphicon-remove delete_now" aria-hidden="true" id_now="{{ path('delete_san_zakl', {'id': sanZakl.id}) }}"></span></td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 				{% endif %}*/
/* 			</div>			*/
/*         </div>*/
/*         */
/*         <div class="row">*/
/* 			<div class="col-md-12"> */
/* 				{% if dogovorFkuz %}*/
/*                 <hr/>*/
/*                 <h4 class="withDates">Договора</h4>*/
/*                 */
/*                 <ul class="nav navbar-nav add">*/
/* 					*/
/* 					{% for dogovorDate in dogovorDates %}*/
/*                         {% for date in dogovorDate%}*/
/*                             <li><a href="{{ path('sort_dogovor_fkuz', {'date': date}) }}" class="onDate" id="dogovorFkuz">... {{ date }}</a></li>*/
/*                         {% endfor %}*/
/* 					{% endfor %}*/
/* 					*/
/* 				</ul>*/
/*                 */
/* 				<table class="table table-hover main dogovorFkuz">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<td>Тип</td>*/
/* 							<td>Дата</td>*/
/* 							<td>Номер</td>*/
/* 							<td>Организация посредник</td>*/
/* 							<td>Сумма</td>*/
/*                             <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                             <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/* 						</tr>*/
/* 					</thead>            */
/* 					<tbody>*/
/*                     */
/* 					{% for dogovor in dogovorFkuz %}*/
/* 						<tr>*/
/*                             <td>{{ dogovor.dogovorType.name }}</td>*/
/* 							<td>{{ dogovor.date|date("d.m.Y") }}</td>*/
/* 							<td>{{ dogovor.nomer }}</td>*/
/* 							<td>{{ dogovor.organizationPosrednik }}</td>*/
/* 							<td>{{ dogovor.summa }}</td>*/
/*                             <td><span class="glyphicon glyphicon-pencil edit_in_fkuz" aria-hidden="true" id_now="{{ path('edit_dogovor_fkuz', {'id': dogovor.id}) }}"></span></td>*/
/* 							<td><span class="glyphicon glyphicon-remove delete_now" aria-hidden="true" id_now="{{ path('delete_dogovor_fkuz', {'id': dogovor.id}) }}"></span></td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* */
/* 				{% endif %}    */
/* 				 */
/* 			</div>        */
/*         </div>*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				{% if proverkaFkuz %}*/
/* 					<hr/>*/
/* 					<h4 class="withDates">Проверки</h4>*/
/* */
/* 					<ul class="nav navbar-nav add">*/
/* */
/* 						{% for proverkaFkuzDate in proverkaFkuzDates %}*/
/* 							{% for date in proverkaFkuzDate%}*/
/* 								<li><a href="{{ path('sort_proverka_fkuz', {'date': date}) }}" class="onDate" id="proverkaFkuz">... {{ date }}</a></li>*/
/* 							{% endfor %}*/
/* 						{% endfor %}*/
/* */
/* 					</ul>*/
/* */
/* 					<table class="table table-hover main proverkaFkuz">*/
/* 						<thead>*/
/* 						<tr>*/
/* 							<td>Номер</td>*/
/* 							<td>Дата</td>*/
/* 							<td>Наказания</td>*/
/* 							<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/* 							<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/* 						</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* */
/* 						{% for proverka in proverkaFkuz %}*/
/* 							<tr>*/
/* 								<td>{{ proverka.nomer }}</td>*/
/* 								<td>{{ proverka.date|date("d.m.Y") }}</td>*/
/* 								<td><a href="{{ path('show_nakazaniya_fkuz', {'id': proverka.id}) }}">Наказания</a></td>*/
/* 								<td><span class="glyphicon glyphicon-pencil edit_in_fkuz" aria-hidden="true" id_now="{{ path('edit_proverka_fkuz', {'id': proverka.id}) }}"></span></td>*/
/* 								<td><span class="glyphicon glyphicon-remove delete_now" aria-hidden="true" id_now="{{ path('delete_proverka_fkuz', {'id': proverka.id}) }}"></span></td>*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 						</tbody>*/
/* 					</table>*/
/* */
/* 				{% endif %}*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				{% if proverkaNakazaniyaFkuz %}*/
/* 					<hr/>*/
/* 					<h4 class="withDates">Привлеченные к наказанию</h4>*/
/* */
/* 					<table class="table table-hover main narusheniyaOrganization">*/
/* 						<thead>*/
/* 						<tr>*/
/* 							<td>ФИО</td>*/
/* 							<td>Номер</td>*/
/* 							<td>Дата</td>*/
/* 							<td>Тип наказания</td>*/
/* 							<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/* 							<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/* 						</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 						{% for proverka in proverkaNakazaniyaFkuz %}*/
/* 							<tr>*/
/* 								<td>{{ proverka.fio }}</td>*/
/* 								<td>{{ proverka.nomer }}</td>*/
/* 								<td>{{ proverka.date|date("d.m.Y") }}</td>*/
/* 								<td>{{ proverka.type }}</td>*/
/* 								<td><a href="{{ path('edit_nakazanie_fkuz', {'id': proverka.id}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/* 								<td><a href="{{ path('delete_nakazanie_fkuz', {'id': proverka.id}) }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 						</tbody>*/
/* 					</table>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>    <hr/>*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-12"> */
/* 				<ul class="nav navbar-nav add">*/
/* 					<li><a href="{{ path('create_license', {'id': fkuz.id}) }}">Добавить лицензию</a></li>*/
/* 					<li><a href="{{ path('create_san_zakl', {'id': fkuz.id}) }}">Добавить сан-эпид заключение</a></li>*/
/* 					<li><a href="{{ path('create_dogovor_fkuz', {'id': fkuz.id}) }}">Добавить договор</a></li>*/
/* 					<li><a href="{{ path('create_proverka_fkuz', {'id': fkuz.id}) }}">Добавить Проверку</a></li>*/
/*                     <li><a href="{{ path('edit_fkuz', {'id': fkuz.id}) }}">Редактировать филиал</a></li>*/
/*                     <li><a href="{{ path('delete_fkuz', {'id': fkuz.id}) }}" class="delete_entity">Удалить ФКУЗ</a></li>*/
/* 				</ul>*/
/*             </div>    */
/*         </div>*/
/*     </div>   */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
