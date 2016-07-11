<?php

/* otchet/ajax/proverka_narusheniya_obj.html.twig */
class __TwigTemplate_3105e998199c3c2d23ebceafa3138f98de4ece4cc04338a43051a9b4da7c5365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/ajax/proverka_narusheniya_obj.html.twig", 1);
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
        $__internal_52936f4b67f05ab07c16acee3f25ee71dedaafe4d771acb315c5351b63ee3a50 = $this->env->getExtension("native_profiler");
        $__internal_52936f4b67f05ab07c16acee3f25ee71dedaafe4d771acb315c5351b63ee3a50->enter($__internal_52936f4b67f05ab07c16acee3f25ee71dedaafe4d771acb315c5351b63ee3a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/proverka_narusheniya_obj.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52936f4b67f05ab07c16acee3f25ee71dedaafe4d771acb315c5351b63ee3a50->leave($__internal_52936f4b67f05ab07c16acee3f25ee71dedaafe4d771acb315c5351b63ee3a50_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_97961ddaa5baf26e5272002eecd06747b323ccdadc77589c576541704a578d8d = $this->env->getExtension("native_profiler");
        $__internal_97961ddaa5baf26e5272002eecd06747b323ccdadc77589c576541704a578d8d->enter($__internal_97961ddaa5baf26e5272002eecd06747b323ccdadc77589c576541704a578d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", "otchet/ajax/proverka_narusheniya_obj.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Статистика нарушений по учреждениям и объектам</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("narusheniya_obj");
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
(isset($context["objects"]) ? $context["objects"] : $this->getContext($context, "objects")))) {
            // line 28
            echo "        <p>Не добавлены объекты в учреждениях</p>
    ";
        } elseif (twig_test_empty(        // line 29
(isset($context["narusheniyaObj"]) ? $context["narusheniyaObj"] : $this->getContext($context, "narusheniyaObj")))) {
            // line 30
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } else {
            // line 32
            echo "
        <table class=\"table table-hover table-bordered numbers\">
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
            echo "                    <td>Итого</td>
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
            $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) ? $context["objects"] : $this->getContext($context, "objects")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 48
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "name", array()), "html", null, true);
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
                    $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaObj"]) ? $context["narusheniyaObj"] : $this->getContext($context, "narusheniyaObj")));
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
                        // line 54
                        echo "
                            ";
                        // line 55
                        if (($this->getAttribute($context["quantity"], "name", array()) == $this->getAttribute($context["obj"], "name", array()))) {
                            // line 56
                            echo "
                                ";
                            // line 57
                            if (($this->getAttribute($context["quantity"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                                // line 58
                                echo "                                    <td class=\"pokazatel";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["quantity"], 1, array(), "array"), "html", null, true);
                                echo "</td>
                                    ";
                                // line 59
                                $context["flag"] = "1";
                                // line 60
                                echo "                                ";
                            }
                            // line 61
                            echo "
                            ";
                        }
                        // line 63
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
                    // line 65
                    echo "
                        ";
                    // line 66
                    if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                        // line 67
                        echo "                            <td></td>
                        ";
                    }
                    // line 69
                    echo "                        ";
                    $context["flag"] = "0";
                    // line 70
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
                // line 71
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td>Всего</td>
                    ";
            // line 78
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
                // line 79
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
            // line 81
            echo "                    <td id=\"vsego\"></td>
                </tr>
                <tr>
                    <td></td>
                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
            foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                // line 86
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                    <td></td>
                </tr>
            </tfoot>
        </table>
    ";
        }
        // line 93
        echo "</div>
";
        
        $__internal_97961ddaa5baf26e5272002eecd06747b323ccdadc77589c576541704a578d8d->leave($__internal_97961ddaa5baf26e5272002eecd06747b323ccdadc77589c576541704a578d8d_prof);

    }

    // line 96
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fc29ad34ed1492e6b67223b18ea228a7436ff87d7d0a54a2219e8d06dd943e62 = $this->env->getExtension("native_profiler");
        $__internal_fc29ad34ed1492e6b67223b18ea228a7436ff87d7d0a54a2219e8d06dd943e62->enter($__internal_fc29ad34ed1492e6b67223b18ea228a7436ff87d7d0a54a2219e8d06dd943e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 97
        echo "
";
        
        $__internal_fc29ad34ed1492e6b67223b18ea228a7436ff87d7d0a54a2219e8d06dd943e62->leave($__internal_fc29ad34ed1492e6b67223b18ea228a7436ff87d7d0a54a2219e8d06dd943e62_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/proverka_narusheniya_obj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 97,  345 => 96,  337 => 93,  330 => 88,  321 => 86,  317 => 85,  311 => 81,  294 => 79,  277 => 78,  271 => 74,  255 => 71,  241 => 70,  238 => 69,  234 => 67,  232 => 66,  229 => 65,  214 => 63,  210 => 61,  207 => 60,  205 => 59,  198 => 58,  196 => 57,  193 => 56,  191 => 55,  188 => 54,  171 => 53,  168 => 52,  151 => 51,  146 => 49,  141 => 48,  124 => 47,  121 => 46,  119 => 45,  112 => 40,  103 => 38,  99 => 37,  92 => 32,  88 => 30,  86 => 29,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/proverka_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Статистика нарушений по учреждениям и объектам</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('narusheniya_obj') }}" >*/
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
/*     {% elseif objects is empty%}*/
/*         <p>Не добавлены объекты в учреждениях</p>*/
/*     {% elseif narusheniyaObj is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover table-bordered numbers">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td></td>*/
/*                     {% for organization in organizations %}*/
/*                         <td>{{organization.nameShort}}</td>*/
/*                     {% endfor %}*/
/*                     <td>Итого</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% set flag = "0" %}*/
/* */
/*             {% for obj in objects %}*/
/*                 <tr class="pokazatels{{loop.index}}">*/
/*                     <td class="name">{{obj.name}}</td>*/
/* */
/*                     {% for organization in organizations %}*/
/* */
/*                         {% for quantity in narusheniyaObj %}*/
/* */
/*                             {% if quantity.name == obj.name %}*/
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
