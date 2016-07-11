<?php

/* :otchet/ajax:zabolevaniya_kontaktnye.html.twig */
class __TwigTemplate_e274eb7ebf4620cd200417138e2045f2a335077f09b684294a41facd7a221a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet/ajax:zabolevaniya_kontaktnye.html.twig", 1);
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
        $__internal_0bfe7b5c1af741fee99f93e43adb04c57082573ad333c33acf7cc3a3966dbbe0 = $this->env->getExtension("native_profiler");
        $__internal_0bfe7b5c1af741fee99f93e43adb04c57082573ad333c33acf7cc3a3966dbbe0->enter($__internal_0bfe7b5c1af741fee99f93e43adb04c57082573ad333c33acf7cc3a3966dbbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:zabolevaniya_kontaktnye.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bfe7b5c1af741fee99f93e43adb04c57082573ad333c33acf7cc3a3966dbbe0->leave($__internal_0bfe7b5c1af741fee99f93e43adb04c57082573ad333c33acf7cc3a3966dbbe0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f227780b86673e58d96131824c981e65e562e36a8b8c7f6b5c9dedb44167dae8 = $this->env->getExtension("native_profiler");
        $__internal_f227780b86673e58d96131824c981e65e562e36a8b8c7f6b5c9dedb44167dae8->enter($__internal_f227780b86673e58d96131824c981e65e562e36a8b8c7f6b5c9dedb44167dae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/zabolevanie_menu.html", ":otchet/ajax:zabolevaniya_kontaktnye.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Общая статистика заболеваний контактных</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("kontaktnye");
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
(isset($context["kontaktnyeOnOrganization"]) ? $context["kontaktnyeOnOrganization"] : $this->getContext($context, "kontaktnyeOnOrganization")))) {
            // line 28
            echo "        <p>Нет заболевших в выбранный период</p>
    ";
        } else {
            // line 30
            echo "
        <div class=\"col-md-2\">
            <table class=\"table table-hover table-bordered numbers\">
                <thead>
                    <tr>
                        <td>Учреждение</td>
                        <td id=\"zabolevaniya\">Количество</td>
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
                // line 44
                echo "                    <tr  class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                        <td class=\"name\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>

                            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["kontaktnyeOnOrganization"]) ? $context["kontaktnyeOnOrganization"] : $this->getContext($context, "kontaktnyeOnOrganization")));
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
                    // line 48
                    echo "
                                ";
                    // line 49
                    if (($this->getAttribute($context["quantity"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 50
                        echo "
                                    <td  class=\"pokazatel";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["quantity"], 1, array(), "array"), "html", null, true);
                        echo "</td>
                                    ";
                        // line 52
                        $context["flag"] = "1";
                        // line 53
                        echo "
                                ";
                    }
                    // line 55
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
                // line 58
                echo "
                            ";
                // line 59
                if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                    // line 60
                    echo "                                <td></td>
                            ";
                }
                // line 62
                echo "                            ";
                $context["flag"] = "0";
                // line 63
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
            // line 65
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
        // line 75
        echo "</div>
    
";
        
        $__internal_f227780b86673e58d96131824c981e65e562e36a8b8c7f6b5c9dedb44167dae8->leave($__internal_f227780b86673e58d96131824c981e65e562e36a8b8c7f6b5c9dedb44167dae8_prof);

    }

    // line 79
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d26b5ec88e3f06490615b7c5cf5679780b0253d705deb3e20ab9012da6b3f3da = $this->env->getExtension("native_profiler");
        $__internal_d26b5ec88e3f06490615b7c5cf5679780b0253d705deb3e20ab9012da6b3f3da->enter($__internal_d26b5ec88e3f06490615b7c5cf5679780b0253d705deb3e20ab9012da6b3f3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 80
        echo "
";
        
        $__internal_d26b5ec88e3f06490615b7c5cf5679780b0253d705deb3e20ab9012da6b3f3da->leave($__internal_d26b5ec88e3f06490615b7c5cf5679780b0253d705deb3e20ab9012da6b3f3da_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:zabolevaniya_kontaktnye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 80,  233 => 79,  224 => 75,  212 => 65,  197 => 63,  194 => 62,  190 => 60,  188 => 59,  185 => 58,  169 => 55,  165 => 53,  163 => 52,  157 => 51,  154 => 50,  152 => 49,  149 => 48,  132 => 47,  127 => 45,  122 => 44,  105 => 43,  102 => 42,  100 => 41,  87 => 30,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/zabolevanie_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Общая статистика заболеваний контактных</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('kontaktnye') }}" >*/
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
/*     {% elseif kontaktnyeOnOrganization is empty%}*/
/*         <p>Нет заболевших в выбранный период</p>*/
/*     {% else %}*/
/* */
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
/*                             {% for quantity in kontaktnyeOnOrganization %}*/
/* */
/*                                 {% if quantity.name_full == organization.nameFull %}*/
/* */
/*                                     <td  class="pokazatel{{loop.parent.loop.index}}">{{quantity[1]}}</td>*/
/*                                     {% set flag = "1" %}*/
/* */
/*                                 {% endif %}*/
/* */
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
