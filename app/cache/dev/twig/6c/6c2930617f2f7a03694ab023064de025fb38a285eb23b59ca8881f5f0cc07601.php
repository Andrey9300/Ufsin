<?php

/* :otchet/ajax:zabolevaniya_viyavlenie.html.twig */
class __TwigTemplate_5b180c7b67542056500d53637df810af129c7e6471bf8c0c484ab6ff1bba8395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet/ajax:zabolevaniya_viyavlenie.html.twig", 1);
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
        $__internal_20ba63efefb9c8b3ce7c20a36ed02dbb4dabc94ac0705a78d34848466aea9a1f = $this->env->getExtension("native_profiler");
        $__internal_20ba63efefb9c8b3ce7c20a36ed02dbb4dabc94ac0705a78d34848466aea9a1f->enter($__internal_20ba63efefb9c8b3ce7c20a36ed02dbb4dabc94ac0705a78d34848466aea9a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:zabolevaniya_viyavlenie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20ba63efefb9c8b3ce7c20a36ed02dbb4dabc94ac0705a78d34848466aea9a1f->leave($__internal_20ba63efefb9c8b3ce7c20a36ed02dbb4dabc94ac0705a78d34848466aea9a1f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_37ac42712a9f7221f6566c9f254186cf5778931563082b013bb5fb7cbd78405e = $this->env->getExtension("native_profiler");
        $__internal_37ac42712a9f7221f6566c9f254186cf5778931563082b013bb5fb7cbd78405e->enter($__internal_37ac42712a9f7221f6566c9f254186cf5778931563082b013bb5fb7cbd78405e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/zabolevanie_menu.html", ":otchet/ajax:zabolevaniya_viyavlenie.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Статистика заболевших осужденных по выявлению</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("viyavlenie");
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
        <table class=\"table table-hover table-bordered numbers\">
            <thead>
                <tr>
                    <td>Учреждение</td>
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
            foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                // line 36
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    <td>Итог</td>
                </tr>
            </thead>
            <tbody>

            ";
            // line 43
            $context["flag"] = "0";
            // line 44
            echo "
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "При профосмотре", 1 => "При обращении в МЧ"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["viyavlen"]) {
                // line 46
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 47
                echo twig_escape_filter($this->env, $context["viyavlen"], "html", null, true);
                echo "</td>

                    ";
                // line 49
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
                    // line 50
                    echo "
                        ";
                    // line 51
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
                    foreach ($context['_seq'] as $context["_key"] => $context["quantity"]) {
                        // line 52
                        echo "
                            ";
                        // line 53
                        if (($this->getAttribute($context["quantity"], "viyavlen", array()) == $context["viyavlen"])) {
                            // line 54
                            echo "
                                ";
                            // line 55
                            if (($this->getAttribute($context["quantity"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                                // line 56
                                echo "                                    <td class=\"pokazatel";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["quantity"], 1, array(), "array"), "html", null, true);
                                echo "</td>
                                    ";
                                // line 57
                                $context["flag"] = "1";
                                // line 58
                                echo "                                ";
                            }
                            // line 59
                            echo "
                            ";
                        }
                        // line 61
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
                    // line 63
                    echo "
                        ";
                    // line 64
                    if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                        // line 65
                        echo "                            <td></td>
                        ";
                    }
                    // line 67
                    echo "                        ";
                    $context["flag"] = "0";
                    // line 68
                    echo "                    ";
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
                // line 69
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viyavlen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td>Всего</td>
                    ";
            // line 76
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
                // line 77
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                    <td id=\"vsego\"></td>
                </tr>
            </tfoot>
        </table>
    ";
        }
        // line 84
        echo "</div>

";
        
        $__internal_37ac42712a9f7221f6566c9f254186cf5778931563082b013bb5fb7cbd78405e->leave($__internal_37ac42712a9f7221f6566c9f254186cf5778931563082b013bb5fb7cbd78405e_prof);

    }

    // line 88
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2c56817ef4ae542acdc8031024491f6b55765a35e90a8da676c71fded38731f9 = $this->env->getExtension("native_profiler");
        $__internal_2c56817ef4ae542acdc8031024491f6b55765a35e90a8da676c71fded38731f9->enter($__internal_2c56817ef4ae542acdc8031024491f6b55765a35e90a8da676c71fded38731f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 89
        echo "
";
        
        $__internal_2c56817ef4ae542acdc8031024491f6b55765a35e90a8da676c71fded38731f9->leave($__internal_2c56817ef4ae542acdc8031024491f6b55765a35e90a8da676c71fded38731f9_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:zabolevaniya_viyavlenie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 89,  322 => 88,  313 => 84,  306 => 79,  289 => 77,  272 => 76,  266 => 72,  250 => 69,  236 => 68,  233 => 67,  229 => 65,  227 => 64,  224 => 63,  209 => 61,  205 => 59,  202 => 58,  200 => 57,  193 => 56,  191 => 55,  188 => 54,  186 => 53,  183 => 52,  166 => 51,  163 => 50,  146 => 49,  141 => 47,  136 => 46,  119 => 45,  116 => 44,  114 => 43,  107 => 38,  98 => 36,  94 => 35,  87 => 30,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/zabolevanie_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Статистика заболевших осужденных по выявлению</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('viyavlenie') }}" >*/
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
/*         <table class="table table-hover table-bordered numbers">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td>Учреждение</td>*/
/*                     {% for organization in organizations %}*/
/*                         <td>{{ organization.nameShort }}</td>*/
/*                     {% endfor %}*/
/*                     <td>Итог</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% set flag = "0" %}*/
/* */
/*             {% for viyavlen in ["При профосмотре", "При обращении в МЧ"] %}*/
/*                 <tr class="pokazatels{{loop.index}}">*/
/*                     <td class="name">{{ viyavlen }}</td>*/
/* */
/*                     {% for organization in organizations %}*/
/* */
/*                         {% for quantity in osugdeniy %}*/
/* */
/*                             {% if quantity.viyavlen == viyavlen %}*/
/* */
/*                                 {% if quantity.name_full == organization.nameFull %}*/
/*                                     <td class="pokazatel{{loop.parent.loop.index}}">{{quantity[1]}}</td>*/
/*                                     {% set flag = "1" %}*/
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
/*                     {% endfor %}*/
/*                     <td></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*             <tfoot>*/
/*                 <tr>*/
/*                     <td>Всего</td>*/
/*                     {% for organization in organizations %}*/
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
