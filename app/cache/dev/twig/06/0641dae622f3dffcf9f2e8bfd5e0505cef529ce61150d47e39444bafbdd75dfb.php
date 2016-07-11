<?php

/* :otchet/ajax:zabolevaniya_povtornye.html.twig */
class __TwigTemplate_4327a357934d691f27019c67b004e2338d4eb211dca1b8c86789ebb5af5e3ce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet/ajax:zabolevaniya_povtornye.html.twig", 1);
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
        $__internal_eeb640872dd1377519509bfeb16d210ae9e9bb0043011312ac1e6dfb290d9b99 = $this->env->getExtension("native_profiler");
        $__internal_eeb640872dd1377519509bfeb16d210ae9e9bb0043011312ac1e6dfb290d9b99->enter($__internal_eeb640872dd1377519509bfeb16d210ae9e9bb0043011312ac1e6dfb290d9b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:zabolevaniya_povtornye.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb640872dd1377519509bfeb16d210ae9e9bb0043011312ac1e6dfb290d9b99->leave($__internal_eeb640872dd1377519509bfeb16d210ae9e9bb0043011312ac1e6dfb290d9b99_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c81fb444867e3365de1de0d02a99ef8016c765d979cba3da5ae8a36255b20768 = $this->env->getExtension("native_profiler");
        $__internal_c81fb444867e3365de1de0d02a99ef8016c765d979cba3da5ae8a36255b20768->enter($__internal_c81fb444867e3365de1de0d02a99ef8016c765d979cba3da5ae8a36255b20768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/zabolevanie_menu.html", ":otchet/ajax:zabolevaniya_povtornye.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Повторно заболевшие</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("povtorno");
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
(isset($context["onOrganizationPovtornye"]) ? $context["onOrganizationPovtornye"] : $this->getContext($context, "onOrganizationPovtornye")))) {
            // line 27
            echo "        <p>Нет заболевших в выбранный период</p>
    ";
        } else {
            // line 29
            echo "        <div class=\"col-md-2\">
            <table class=\"table table-hover table-bordered numbers\">
                <thead>
                    <tr>
                        <td>Учреждение</td>
                        <td id=\"zabolevaniya\">Количество</td>
                    </tr>
                </thead>
                <tbody>

                ";
            // line 39
            $context["flag"] = "0";
            // line 40
            echo "
                ";
            // line 41
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
                // line 42
                echo "                    <tr  class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                        <td class=\"name\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>

                            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["onOrganizationPovtornye"]) ? $context["onOrganizationPovtornye"] : $this->getContext($context, "onOrganizationPovtornye")));
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
                foreach ($context['_seq'] as $context["key"] => $context["quantity"]) {
                    // line 46
                    echo "
                                ";
                    // line 47
                    if (($context["key"] == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 48
                        echo "
                                    <td  class=\"pokazatel";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["quantity"], "html", null, true);
                        echo "</td>
                                    ";
                        // line 50
                        $context["flag"] = "1";
                        // line 51
                        echo "
                                ";
                    }
                    // line 53
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['quantity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "
                            ";
                // line 56
                if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                    // line 57
                    echo "                                <td></td>
                            ";
                }
                // line 59
                echo "                            ";
                $context["flag"] = "0";
                // line 60
                echo "                    </tr>
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
            // line 62
            echo "                </tbody>
                <tfoot>
                    <tr>
                        <td>Всего</td>
                        <td id=\"vsego_zabolevchih\"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    ";
        }
        // line 72
        echo "</div>
    
";
        
        $__internal_c81fb444867e3365de1de0d02a99ef8016c765d979cba3da5ae8a36255b20768->leave($__internal_c81fb444867e3365de1de0d02a99ef8016c765d979cba3da5ae8a36255b20768_prof);

    }

    // line 76
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_914155505db04ef5e62c323311f9c4233fd95789ed10f85d0d29cf117f87825e = $this->env->getExtension("native_profiler");
        $__internal_914155505db04ef5e62c323311f9c4233fd95789ed10f85d0d29cf117f87825e->enter($__internal_914155505db04ef5e62c323311f9c4233fd95789ed10f85d0d29cf117f87825e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 77
        echo "
";
        
        $__internal_914155505db04ef5e62c323311f9c4233fd95789ed10f85d0d29cf117f87825e->leave($__internal_914155505db04ef5e62c323311f9c4233fd95789ed10f85d0d29cf117f87825e_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:zabolevaniya_povtornye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 77,  230 => 76,  221 => 72,  209 => 62,  194 => 60,  191 => 59,  187 => 57,  185 => 56,  182 => 55,  167 => 53,  163 => 51,  161 => 50,  155 => 49,  152 => 48,  150 => 47,  147 => 46,  130 => 45,  125 => 43,  120 => 42,  103 => 41,  100 => 40,  98 => 39,  86 => 29,  82 => 27,  80 => 26,  77 => 25,  75 => 24,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/zabolevanie_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Повторно заболевшие</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('povtorno') }}" >*/
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
/*     {% elseif onOrganizationPovtornye is empty%}*/
/*         <p>Нет заболевших в выбранный период</p>*/
/*     {% else %}*/
/*         <div class="col-md-2">*/
/*             <table class="table table-hover table-bordered numbers">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <td>Учреждение</td>*/
/*                         <td id="zabolevaniya">Количество</td>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% set flag = "0" %}*/
/* */
/*                 {% for organization in organizations %}*/
/*                     <tr  class="pokazatels{{loop.index}}">*/
/*                         <td class="name">{{organization.nameShort}}</td>*/
/* */
/*                             {% for key, quantity in onOrganizationPovtornye %}*/
/* */
/*                                 {% if key == organization.nameFull %}*/
/* */
/*                                     <td  class="pokazatel{{loop.parent.loop.index}}">{{ quantity }}</td>*/
/*                                     {% set flag = "1" %}*/
/* */
/*                                 {% endif %}*/
/* */
/*                             {% endfor %}*/
/* */
/*                             {% if flag == "0" %}*/
/*                                 <td></td>*/
/*                             {% endif %}*/
/*                             {% set flag = "0" %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*                 <tfoot>*/
/*                     <tr>*/
/*                         <td>Всего</td>*/
/*                         <td id="vsego_zabolevchih"></td>*/
/*                     </tr>*/
/*                 </tfoot>*/
/*             </table>*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
