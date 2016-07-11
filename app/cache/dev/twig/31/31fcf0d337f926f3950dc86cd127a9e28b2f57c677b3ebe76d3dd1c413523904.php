<?php

/* :otchet:dogovor.html.twig */
class __TwigTemplate_2ba256ebb23a035d0c5a85dfce0fcdc70fdb0bc6e2bb55b588994d8e1704dcd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet:dogovor.html.twig", 1);
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
        $__internal_e2cfe0c69e1e4ad6ccd489624256ce3946487a1e2c76d56e5180c828b0f70d84 = $this->env->getExtension("native_profiler");
        $__internal_e2cfe0c69e1e4ad6ccd489624256ce3946487a1e2c76d56e5180c828b0f70d84->enter($__internal_e2cfe0c69e1e4ad6ccd489624256ce3946487a1e2c76d56e5180c828b0f70d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet:dogovor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2cfe0c69e1e4ad6ccd489624256ce3946487a1e2c76d56e5180c828b0f70d84->leave($__internal_e2cfe0c69e1e4ad6ccd489624256ce3946487a1e2c76d56e5180c828b0f70d84_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_abff73bc00a5623f59699e22f2bbf0816dfc63afb00037d3314163ee2c13d2a0 = $this->env->getExtension("native_profiler");
        $__internal_abff73bc00a5623f59699e22f2bbf0816dfc63afb00037d3314163ee2c13d2a0->enter($__internal_abff73bc00a5623f59699e22f2bbf0816dfc63afb00037d3314163ee2c13d2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h3>Договора в учреждениях</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"/otchetDogovor/common\" >
            <div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата от (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateOt\" id=\"proverka_date\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["dateOt"]) ? $context["dateOt"] : $this->getContext($context, "dateOt")), "html", null, true);
        echo "\">
            </div><div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата до (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateDo\" id=\"proverka_date\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["dateDo"]) ? $context["dateDo"] : $this->getContext($context, "dateDo")), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-3\" style=\"margin-top:25px\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Выбрать\">
            </div>
        </form>
    </div>

    ";
        // line 23
        if (twig_test_empty((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")))) {
            // line 24
            echo "        <p>Не добавлены учреждения</p>
    ";
        } elseif (twig_test_empty(        // line 25
(isset($context["dogovorsType"]) ? $context["dogovorsType"] : $this->getContext($context, "dogovorsType")))) {
            // line 26
            echo "        <p>Не добавлены типы договоров</p>
    ";
        } elseif (twig_test_empty(        // line 27
(isset($context["dogovors"]) ? $context["dogovors"] : $this->getContext($context, "dogovors")))) {
            // line 28
            echo "        <p>Нет договоров в выбранный период</p>
    ";
        } else {
            // line 30
            echo "
        <table class=\"table table-hover table-bordered\" id=\"common_dogovor\" style=\"position:absolute; left:5px; font-size:14px;\">
            <thead>
                <tr>
                    <td>Учреждение</td>
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dogovorsType"]) ? $context["dogovorsType"] : $this->getContext($context, "dogovorsType")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 36
                echo "                        ";
                if (($this->getAttribute($context["type"], "name", array()) != "производственный контроль")) {
                    // line 37
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 39
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </tr>
            </thead>
            <tbody>

            ";
            // line 44
            $context["flag"] = "0";
            // line 45
            echo "
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
            foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                // line 47
                echo "                    <tr>
                        <td class=\"name\">";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>

                        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dogovorsType"]) ? $context["dogovorsType"] : $this->getContext($context, "dogovorsType")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 51
                    echo "
                            ";
                    // line 52
                    if (($this->getAttribute($context["type"], "name", array()) != "производственный контроль")) {
                        // line 53
                        echo "
                                ";
                        // line 54
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["dogovors"]) ? $context["dogovors"] : $this->getContext($context, "dogovors")));
                        foreach ($context['_seq'] as $context["_key"] => $context["dogovor"]) {
                            // line 55
                            echo "
                                    ";
                            // line 56
                            if (($this->getAttribute($context["dogovor"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                                // line 57
                                echo "
                                        ";
                                // line 58
                                if (($this->getAttribute($context["dogovor"], "name", array()) == $this->getAttribute($context["type"], "name", array()))) {
                                    // line 59
                                    echo "
                                            <td>+</td>

                                            ";
                                    // line 62
                                    $context["flag"] = "1";
                                    // line 63
                                    echo "
                                        ";
                                }
                                // line 65
                                echo "
                                    ";
                            }
                            // line 67
                            echo "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogovor'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo "
                                ";
                        // line 70
                        if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                            // line 71
                            echo "                                    <td></td>
                                ";
                        }
                        // line 73
                        echo "
                                ";
                        // line 74
                        $context["flag"] = "0";
                        // line 75
                        echo "
                            ";
                    }
                    // line 77
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                </tbody>
            <tfoot>
            </tfoot>
        </table>
    ";
        }
        // line 87
        echo "</div>

";
        
        $__internal_abff73bc00a5623f59699e22f2bbf0816dfc63afb00037d3314163ee2c13d2a0->leave($__internal_abff73bc00a5623f59699e22f2bbf0816dfc63afb00037d3314163ee2c13d2a0_prof);

    }

    // line 91
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9a5df2401d4e2561a23800487c1b08204feb236f036ebf425c9daf497427eb9d = $this->env->getExtension("native_profiler");
        $__internal_9a5df2401d4e2561a23800487c1b08204feb236f036ebf425c9daf497427eb9d->enter($__internal_9a5df2401d4e2561a23800487c1b08204feb236f036ebf425c9daf497427eb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 92
        echo "
";
        
        $__internal_9a5df2401d4e2561a23800487c1b08204feb236f036ebf425c9daf497427eb9d->leave($__internal_9a5df2401d4e2561a23800487c1b08204feb236f036ebf425c9daf497427eb9d_prof);

    }

    public function getTemplateName()
    {
        return ":otchet:dogovor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 92,  230 => 91,  221 => 87,  214 => 82,  206 => 79,  199 => 77,  195 => 75,  193 => 74,  190 => 73,  186 => 71,  184 => 70,  181 => 69,  174 => 67,  170 => 65,  166 => 63,  164 => 62,  159 => 59,  157 => 58,  154 => 57,  152 => 56,  149 => 55,  145 => 54,  142 => 53,  140 => 52,  137 => 51,  133 => 50,  128 => 48,  125 => 47,  121 => 46,  118 => 45,  116 => 44,  110 => 40,  104 => 39,  98 => 37,  95 => 36,  91 => 35,  84 => 30,  80 => 28,  78 => 27,  75 => 26,  73 => 25,  70 => 24,  68 => 23,  57 => 15,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h3>Договора в учреждениях</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="/otchetDogovor/common" >*/
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
/*     {% elseif dogovorsType is empty%}*/
/*         <p>Не добавлены типы договоров</p>*/
/*     {% elseif dogovors is empty%}*/
/*         <p>Нет договоров в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover table-bordered" id="common_dogovor" style="position:absolute; left:5px; font-size:14px;">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td>Учреждение</td>*/
/*                     {% for type in dogovorsType %}*/
/*                         {% if type.name != "производственный контроль" %}*/
/*                         <td>{{ type.name }}</td>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% set flag = "0" %}*/
/* */
/*                 {% for organization in organizations %}*/
/*                     <tr>*/
/*                         <td class="name">{{organization.nameShort}}</td>*/
/* */
/*                         {% for type in dogovorsType %}*/
/* */
/*                             {% if type.name != "производственный контроль" %}*/
/* */
/*                                 {% for dogovor in dogovors %}*/
/* */
/*                                     {% if dogovor.name_full == organization.nameFull %}*/
/* */
/*                                         {% if dogovor.name == type.name %}*/
/* */
/*                                             <td>+</td>*/
/* */
/*                                             {% set flag = "1" %}*/
/* */
/*                                         {% endif %}*/
/* */
/*                                     {% endif %}*/
/* */
/*                                 {% endfor %}*/
/* */
/*                                 {% if flag == "0" %}*/
/*                                     <td></td>*/
/*                                 {% endif %}*/
/* */
/*                                 {% set flag = "0" %}*/
/* */
/*                             {% endif %}*/
/* */
/*                         {% endfor %}*/
/* */
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             <tfoot>*/
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
