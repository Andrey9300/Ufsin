<?php

/* otchet/ajax/zabolevaniya_patologiya.html.twig */
class __TwigTemplate_ff8bbd18788e3eb1f74d916173f7df724b41892aa4ade97e980515c692c7865a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/ajax/zabolevaniya_patologiya.html.twig", 1);
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
        $__internal_895a973e3a6b448a4cdfffce2e067d204ef3ffdbeeb074cacb73b32e65b3772b = $this->env->getExtension("native_profiler");
        $__internal_895a973e3a6b448a4cdfffce2e067d204ef3ffdbeeb074cacb73b32e65b3772b->enter($__internal_895a973e3a6b448a4cdfffce2e067d204ef3ffdbeeb074cacb73b32e65b3772b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/zabolevaniya_patologiya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895a973e3a6b448a4cdfffce2e067d204ef3ffdbeeb074cacb73b32e65b3772b->leave($__internal_895a973e3a6b448a4cdfffce2e067d204ef3ffdbeeb074cacb73b32e65b3772b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_81f24541ec375e54268711f4a3c5f5b1c58007884bbe7a5037d23ae4461912f8 = $this->env->getExtension("native_profiler");
        $__internal_81f24541ec375e54268711f4a3c5f5b1c58007884bbe7a5037d23ae4461912f8->enter($__internal_81f24541ec375e54268711f4a3c5f5b1c58007884bbe7a5037d23ae4461912f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/zabolevanie_menu.html", "otchet/ajax/zabolevaniya_patologiya.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Статистика заболевших осужденных по сопутствующей патологии</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("patologiya");
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
        // line 24
        if (twig_test_empty((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")))) {
            // line 25
            echo "        <p>Не добавлены учреждения</p>
    ";
        } elseif (twig_test_empty(        // line 26
(isset($context["osugdeniy"]) ? $context["osugdeniy"] : $this->getContext($context, "osugdeniy")))) {
            // line 27
            echo "        <p>Нет заболевших в выбранный период</p>
    ";
        } else {
            // line 29
            echo "        <table class=\"table table-hover table-bordered numbers\">
            <thead>
                <tr>
                    <td>Учреждение</td>
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
            foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                // line 34
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    <td>Итог</td>
                </tr>
            </thead>
            <tbody>

            ";
            // line 41
            $context["flag"] = "0";
            // line 42
            echo "
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "ВИЧ", 1 => "Гипатит B", 2 => "Гипатит C", 3 => "Гипатит B+C", 4 => "ПИН"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["patologiya"]) {
                // line 44
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 45
                echo twig_escape_filter($this->env, $context["patologiya"], "html", null, true);
                echo "</td>

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
                    echo "
                        ";
                    // line 49
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
                        // line 50
                        echo "
                            ";
                        // line 51
                        if (($this->getAttribute($context["quantity"], "name", array()) == $context["patologiya"])) {
                            // line 52
                            echo "
                                ";
                            // line 53
                            if (($this->getAttribute($context["quantity"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                                // line 54
                                echo "                                    <td class=\"pokazatel";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["quantity"], 1, array(), "array"), "html", null, true);
                                echo "</td>
                                    ";
                                // line 55
                                $context["flag"] = "1";
                                // line 56
                                echo "                                ";
                            }
                            // line 57
                            echo "
                            ";
                        }
                        // line 59
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
                    // line 61
                    echo "
                        ";
                    // line 62
                    if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                        // line 63
                        echo "                            <td></td>
                        ";
                    }
                    // line 65
                    echo "                        ";
                    $context["flag"] = "0";
                    // line 66
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
                // line 67
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patologiya'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td>Всего</td>
                    ";
            // line 74
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
                // line 75
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
            // line 77
            echo "                    <td id=\"vsego\"></td>
                </tr>
            </tfoot>
        </table>
    ";
        }
        // line 82
        echo "</div>

";
        
        $__internal_81f24541ec375e54268711f4a3c5f5b1c58007884bbe7a5037d23ae4461912f8->leave($__internal_81f24541ec375e54268711f4a3c5f5b1c58007884bbe7a5037d23ae4461912f8_prof);

    }

    // line 86
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d2c44391eee8c6b3f4cf316e550e8d38eb594e3d1e5c0ed8591af450317a7cf4 = $this->env->getExtension("native_profiler");
        $__internal_d2c44391eee8c6b3f4cf316e550e8d38eb594e3d1e5c0ed8591af450317a7cf4->enter($__internal_d2c44391eee8c6b3f4cf316e550e8d38eb594e3d1e5c0ed8591af450317a7cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 87
        echo "
";
        
        $__internal_d2c44391eee8c6b3f4cf316e550e8d38eb594e3d1e5c0ed8591af450317a7cf4->leave($__internal_d2c44391eee8c6b3f4cf316e550e8d38eb594e3d1e5c0ed8591af450317a7cf4_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/zabolevaniya_patologiya.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 87,  320 => 86,  311 => 82,  304 => 77,  287 => 75,  270 => 74,  264 => 70,  248 => 67,  234 => 66,  231 => 65,  227 => 63,  225 => 62,  222 => 61,  207 => 59,  203 => 57,  200 => 56,  198 => 55,  191 => 54,  189 => 53,  186 => 52,  184 => 51,  181 => 50,  164 => 49,  161 => 48,  144 => 47,  139 => 45,  134 => 44,  117 => 43,  114 => 42,  112 => 41,  105 => 36,  96 => 34,  92 => 33,  86 => 29,  82 => 27,  80 => 26,  77 => 25,  75 => 24,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/zabolevanie_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Статистика заболевших осужденных по сопутствующей патологии</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('patologiya') }}" >*/
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
/*     {% if organizations is empty%}*/
/*         <p>Не добавлены учреждения</p>*/
/*     {% elseif osugdeniy is empty%}*/
/*         <p>Нет заболевших в выбранный период</p>*/
/*     {% else %}*/
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
/*             {% for patologiya in ["ВИЧ", "Гипатит B", "Гипатит C", "Гипатит B+C", "ПИН"] %}*/
/*                 <tr class="pokazatels{{loop.index}}">*/
/*                     <td class="name">{{ patologiya }}</td>*/
/* */
/*                     {% for organization in organizations %}*/
/* */
/*                         {% for quantity in osugdeniy %}*/
/* */
/*                             {% if quantity.name == patologiya %}*/
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
