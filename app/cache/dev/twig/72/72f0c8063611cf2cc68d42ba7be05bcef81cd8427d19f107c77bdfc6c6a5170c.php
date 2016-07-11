<?php

/* otchet/ajax/zabolevaniya_otryad.html.twig */
class __TwigTemplate_98c3a0b9115fa10a5abcfb353724de568335a97bff4a9d222d1df1beb89910ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/ajax/zabolevaniya_otryad.html.twig", 1);
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
        $__internal_52240d53ac7e14fd6e6d1f171b4db636a11363a227df300afc863e9785c910ff = $this->env->getExtension("native_profiler");
        $__internal_52240d53ac7e14fd6e6d1f171b4db636a11363a227df300afc863e9785c910ff->enter($__internal_52240d53ac7e14fd6e6d1f171b4db636a11363a227df300afc863e9785c910ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/zabolevaniya_otryad.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52240d53ac7e14fd6e6d1f171b4db636a11363a227df300afc863e9785c910ff->leave($__internal_52240d53ac7e14fd6e6d1f171b4db636a11363a227df300afc863e9785c910ff_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0d94af13913543dc1d30212b0fc2bc6b35a85d5646c3ad933c45a3b5f7d14ab0 = $this->env->getExtension("native_profiler");
        $__internal_0d94af13913543dc1d30212b0fc2bc6b35a85d5646c3ad933c45a3b5f7d14ab0->enter($__internal_0d94af13913543dc1d30212b0fc2bc6b35a85d5646c3ad933c45a3b5f7d14ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/zabolevanie_menu.html", "otchet/ajax/zabolevaniya_otryad.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Статистика заболевших осужденных по отрядам</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("otryad");
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
(isset($context["osugdeniy"]) ? $context["osugdeniy"] : $this->getContext($context, "osugdeniy")))) {
            // line 28
            echo "        <p>Нет заболевших в выбранный период</p>
    ";
        } else {
            // line 30
            echo "
        ";
            // line 31
            $context["place_progivaniya"] = array(0 => "1 отряд", 1 => "2 отряд", 2 => "3 отряд", 3 => "4 отряд", 4 => "5 отряд", 5 => "6 отряд", 6 => "7 отряд", 7 => "8 отряд", 8 => "9 отряд", 9 => "10 отряд", 10 => "11 отряд", 11 => "12 отряд", 12 => "ПКТ", 13 => "ЕПКТ", 14 => "ОСУОН", 15 => "ШИЗО", 16 => "Карантинное отделение");
            // line 32
            echo "
        <table class=\"table table-hover table-bordered numbers\">
            <thead>
                <tr>
                    <td>Учреждение</td>
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["place_progivaniya"]) ? $context["place_progivaniya"] : $this->getContext($context, "place_progivaniya")));
            foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                // line 38
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_slice($this->env, $context["place"], 0, 5), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    <td>Итог</td>
                </tr>
            </thead>
            <tbody>

            ";
            // line 45
            $context["flag"] = "0";
            // line 46
            echo "
            ";
            // line 47
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
                // line 48
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>

                    ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["place_progivaniya"]) ? $context["place_progivaniya"] : $this->getContext($context, "place_progivaniya")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                    // line 52
                    echo "
                            ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["osugdeniy"]) ? $context["osugdeniy"] : $this->getContext($context, "osugdeniy")));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["osug"]) {
                        // line 54
                        echo "
                                ";
                        // line 55
                        if (($this->getAttribute($context["osug"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                            // line 56
                            echo "
                                    ";
                            // line 57
                            if (($this->getAttribute($context["osug"], "place_progivaniya", array()) == $context["place"])) {
                                // line 58
                                echo "
                                        <td class=\"pokazatel";
                                // line 59
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["osug"], 1, array(), "array"), "html", null, true);
                                echo "</td>

                                        ";
                                // line 61
                                $context["flag"] = "1";
                                // line 62
                                echo "
                                    ";
                            }
                            // line 64
                            echo "
                                ";
                        }
                        // line 66
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osug'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    echo "
                            ";
                    // line 69
                    if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                        // line 70
                        echo "                                <td></td>
                            ";
                    }
                    // line 72
                    echo "
                            ";
                    // line 73
                    $context["flag"] = "0";
                    // line 74
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                    <td></td>
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
            // line 79
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td>Всего</td>
                    ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["place_progivaniya"]) ? $context["place_progivaniya"] : $this->getContext($context, "place_progivaniya")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                // line 84
                echo "                        <td id=\"result";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"></td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                    <td id=\"vsego\"></td>
                </tr>
            </tfoot>
        </table>
    ";
        }
        // line 91
        echo "</div>

";
        
        $__internal_0d94af13913543dc1d30212b0fc2bc6b35a85d5646c3ad933c45a3b5f7d14ab0->leave($__internal_0d94af13913543dc1d30212b0fc2bc6b35a85d5646c3ad933c45a3b5f7d14ab0_prof);

    }

    // line 95
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1277438447fba0adf90103225762db59de58c2e6acf1ca68aff7f44ac13a9337 = $this->env->getExtension("native_profiler");
        $__internal_1277438447fba0adf90103225762db59de58c2e6acf1ca68aff7f44ac13a9337->enter($__internal_1277438447fba0adf90103225762db59de58c2e6acf1ca68aff7f44ac13a9337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 96
        echo "
";
        
        $__internal_1277438447fba0adf90103225762db59de58c2e6acf1ca68aff7f44ac13a9337->leave($__internal_1277438447fba0adf90103225762db59de58c2e6acf1ca68aff7f44ac13a9337_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/zabolevaniya_otryad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 96,  334 => 95,  325 => 91,  318 => 86,  301 => 84,  284 => 83,  278 => 79,  262 => 76,  247 => 74,  245 => 73,  242 => 72,  238 => 70,  236 => 69,  233 => 68,  218 => 66,  214 => 64,  210 => 62,  208 => 61,  201 => 59,  198 => 58,  196 => 57,  193 => 56,  191 => 55,  188 => 54,  171 => 53,  168 => 52,  151 => 51,  146 => 49,  141 => 48,  124 => 47,  121 => 46,  119 => 45,  112 => 40,  103 => 38,  99 => 37,  92 => 32,  90 => 31,  87 => 30,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/zabolevanie_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Статистика заболевших осужденных по отрядам</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('otryad') }}" >*/
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
/*     {% elseif osugdeniy is empty%}*/
/*         <p>Нет заболевших в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         {% set place_progivaniya = ["1 отряд", "2 отряд", "3 отряд", "4 отряд", "5 отряд", "6 отряд", "7 отряд", "8 отряд", "9 отряд", "10 отряд", "11 отряд", "12 отряд", "ПКТ", "ЕПКТ", "ОСУОН", "ШИЗО", "Карантинное отделение"] %}*/
/* */
/*         <table class="table table-hover table-bordered numbers">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td>Учреждение</td>*/
/*                     {% for place in place_progivaniya %}*/
/*                         <td>{{ place|slice(0,5) }}</td>*/
/*                     {% endfor %}*/
/*                     <td>Итог</td>*/
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
/*                     {% for place in place_progivaniya %}*/
/* */
/*                             {% for osug in osugdeniy %}*/
/* */
/*                                 {% if osug.name_full == organization.nameFull %}*/
/* */
/*                                     {% if osug.place_progivaniya == place %}*/
/* */
/*                                         <td class="pokazatel{{loop.parent.loop.index}}">{{ osug[1] }}</td>*/
/* */
/*                                         {% set flag = "1" %}*/
/* */
/*                                     {% endif %}*/
/* */
/*                                 {% endif %}*/
/* */
/*                             {% endfor %}*/
/* */
/*                             {% if flag == "0" %}*/
/*                                 <td></td>*/
/*                             {% endif %}*/
/* */
/*                             {% set flag = "0" %}*/
/* */
/*                     {% endfor %}*/
/*                     <td></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*             <tfoot>*/
/*                 <tr>*/
/*                     <td>Всего</td>*/
/*                     {% for place in place_progivaniya %}*/
/*                         <td id="result{{loop.index}}"></td>*/
/*                     {% endfor %}*/
/*                     <td id="vsego"></td>*/
/*                 </tr>*/
/*             </tfoot>*/
/*         </table>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
