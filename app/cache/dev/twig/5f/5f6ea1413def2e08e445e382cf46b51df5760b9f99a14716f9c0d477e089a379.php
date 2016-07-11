<?php

/* otchet/ajax/issledovanie_type.html.twig */
class __TwigTemplate_4b784f18a80b619dcafcbaae35bdb8a38c023e1c5ef048462570f068decae0d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/ajax/issledovanie_type.html.twig", 1);
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
        $__internal_a3a42b3b60fddc109a97f86efe036119e32d546e0f616c8808803d03de43cead = $this->env->getExtension("native_profiler");
        $__internal_a3a42b3b60fddc109a97f86efe036119e32d546e0f616c8808803d03de43cead->enter($__internal_a3a42b3b60fddc109a97f86efe036119e32d546e0f616c8808803d03de43cead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/issledovanie_type.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3a42b3b60fddc109a97f86efe036119e32d546e0f616c8808803d03de43cead->leave($__internal_a3a42b3b60fddc109a97f86efe036119e32d546e0f616c8808803d03de43cead_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_16a5840d5978ef489ae52f710163a1b6bf90574fae417b03736be17f15d5ac06 = $this->env->getExtension("native_profiler");
        $__internal_16a5840d5978ef489ae52f710163a1b6bf90574fae417b03736be17f15d5ac06->enter($__internal_16a5840d5978ef489ae52f710163a1b6bf90574fae417b03736be17f15d5ac06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/issledovanie_menu.html", "otchet/ajax/issledovanie_type.html.twig", 5)->display($context);
        // line 6
        echo "    
<div class=\"row\">
    <h3>Общая статистика исследований</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("type_issledovanie");
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
(isset($context["issledovanieTypes"]) ? $context["issledovanieTypes"] : $this->getContext($context, "issledovanieTypes")))) {
            // line 28
            echo "        <p>Не добавлены типы исследований</p>
    ";
        } elseif (twig_test_empty(        // line 29
(isset($context["commonAll"]) ? $context["commonAll"] : $this->getContext($context, "commonAll")))) {
            // line 30
            echo "        <p>Нет исследований в учреждениях в выбранный период</p>
    ";
        } else {
            // line 32
            echo "
        <table class=\"table table-hover table-bordered numbers\" id=\"common_proverka\">
            <thead>
                <tr>
                    <td></td>
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
            foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                // line 38
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    <td id=\"issledovaniya\">Итого</td>
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
            $context['_seq'] = twig_ensure_traversable((isset($context["issledovanieTypes"]) ? $context["issledovanieTypes"] : $this->getContext($context, "issledovanieTypes")));
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
                // line 48
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
                echo "</td>

                    ";
                // line 51
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
                    // line 52
                    echo "
                        ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["commonAll"]) ? $context["commonAll"] : $this->getContext($context, "commonAll")));
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
                    foreach ($context['_seq'] as $context["quantity"] => $context["key"]) {
                        // line 54
                        echo "
                            ";
                        // line 55
                        if (($this->getAttribute($context["key"], "name_full", array(), "array") == $this->getAttribute($context["organization"], "nameFull", array()))) {
                            // line 56
                            echo "
                                    ";
                            // line 57
                            if (($this->getAttribute($context["key"], "name", array(), "array") == $this->getAttribute($context["type"], "name", array()))) {
                                // line 58
                                echo "
                                        <td class=\"pokazatel";
                                // line 59
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                                echo "\">
                                        <span>";
                                // line 60
                                echo twig_escape_filter($this->env, $this->getAttribute($context["key"], 1, array(), "array"), "html", null, true);
                                echo "</span>(";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["key"], 2, array(), "array"), "html", null, true);
                                echo ")
                                    </td>
                                        ";
                                // line 62
                                $context["flag"] = "1";
                                // line 63
                                echo "                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['quantity'], $context['key'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    echo "
                        ";
                    // line 69
                    if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                        // line 70
                        echo "                            <td></td>
                        ";
                    }
                    // line 72
                    echo "                        ";
                    $context["flag"] = "0";
                    // line 73
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
                // line 74
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td>Всего</td>
                    ";
            // line 81
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
                // line 82
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
            // line 84
            echo "                    <td id=\"vsego\"></td>
                </tr>
                <tr>
                    <td></td>
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
            foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                // line 89
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    <td></td>
                </tr>
            </tfoot>
        </table>
    ";
        }
        // line 96
        echo "</div>
";
        
        $__internal_16a5840d5978ef489ae52f710163a1b6bf90574fae417b03736be17f15d5ac06->leave($__internal_16a5840d5978ef489ae52f710163a1b6bf90574fae417b03736be17f15d5ac06_prof);

    }

    // line 99
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9fad98b54a9d30debb107b863db5a68536d4d7e19d657fc49f14dd6c2cd98c01 = $this->env->getExtension("native_profiler");
        $__internal_9fad98b54a9d30debb107b863db5a68536d4d7e19d657fc49f14dd6c2cd98c01->enter($__internal_9fad98b54a9d30debb107b863db5a68536d4d7e19d657fc49f14dd6c2cd98c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 100
        echo "
";
        
        $__internal_9fad98b54a9d30debb107b863db5a68536d4d7e19d657fc49f14dd6c2cd98c01->leave($__internal_9fad98b54a9d30debb107b863db5a68536d4d7e19d657fc49f14dd6c2cd98c01_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/issledovanie_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 100,  352 => 99,  344 => 96,  337 => 91,  328 => 89,  324 => 88,  318 => 84,  301 => 82,  284 => 81,  278 => 77,  262 => 74,  248 => 73,  245 => 72,  241 => 70,  239 => 69,  236 => 68,  221 => 66,  217 => 64,  214 => 63,  212 => 62,  205 => 60,  201 => 59,  198 => 58,  196 => 57,  193 => 56,  191 => 55,  188 => 54,  171 => 53,  168 => 52,  151 => 51,  146 => 49,  141 => 48,  124 => 47,  121 => 46,  119 => 45,  112 => 40,  103 => 38,  99 => 37,  92 => 32,  88 => 30,  86 => 29,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/issledovanie_menu.html' %}*/
/*     */
/* <div class="row">*/
/*     <h3>Общая статистика исследований</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('type_issledovanie') }}" >*/
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
/*     {% elseif issledovanieTypes is empty%}*/
/*         <p>Не добавлены типы исследований</p>*/
/*     {% elseif commonAll is empty%}*/
/*         <p>Нет исследований в учреждениях в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover table-bordered numbers" id="common_proverka">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td></td>*/
/*                     {% for organization in organizations %}*/
/*                         <td>{{organization.nameShort}}</td>*/
/*                     {% endfor %}*/
/*                     <td id="issledovaniya">Итого</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% set flag = "0" %}*/
/* */
/*             {% for type in issledovanieTypes %}*/
/*                 <tr class="pokazatels{{loop.index}}">*/
/*                     <td class="name">{{type.name}}</td>*/
/* */
/*                     {% for organization in organizations %}*/
/* */
/*                         {% for quantity, key in commonAll %}*/
/* */
/*                             {% if key["name_full"] == organization.nameFull %}*/
/* */
/*                                     {% if key["name"] == type.name %}*/
/* */
/*                                         <td class="pokazatel{{loop.parent.loop.index}}">*/
/*                                         <span>{{ key[1] }}</span>({{ key[2] }})*/
/*                                     </td>*/
/*                                         {% set flag = "1" %}*/
/*                                     {% endif %}*/
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
/*                 <tr>*/
/*                     <td></td>*/
/*                     {% for organization in organizations %}*/
/*                         <td>{{organization.nameShort}}</td>*/
/*                     {% endfor %}*/
/*                     <td></td>*/
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
