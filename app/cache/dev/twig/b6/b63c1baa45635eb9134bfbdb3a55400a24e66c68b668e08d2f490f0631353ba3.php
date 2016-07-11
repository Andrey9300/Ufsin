<?php

/* :otchet/ajax:zabolevaniya_iz_kontaktnyh.html.twig */
class __TwigTemplate_c61823f5f2805d292bbc00b96a03dead57f26503420dbcd260d209aca8064429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet/ajax:zabolevaniya_iz_kontaktnyh.html.twig", 1);
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
        $__internal_07f029f2859d4361943b104c3e004b6a2802c2895d171eaa2a3be259bb4489ed = $this->env->getExtension("native_profiler");
        $__internal_07f029f2859d4361943b104c3e004b6a2802c2895d171eaa2a3be259bb4489ed->enter($__internal_07f029f2859d4361943b104c3e004b6a2802c2895d171eaa2a3be259bb4489ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:zabolevaniya_iz_kontaktnyh.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f029f2859d4361943b104c3e004b6a2802c2895d171eaa2a3be259bb4489ed->leave($__internal_07f029f2859d4361943b104c3e004b6a2802c2895d171eaa2a3be259bb4489ed_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_bd7019bec305653a7493befc1c129e23f497d34733dabdbe9a25f9f375cfb3b1 = $this->env->getExtension("native_profiler");
        $__internal_bd7019bec305653a7493befc1c129e23f497d34733dabdbe9a25f9f375cfb3b1->enter($__internal_bd7019bec305653a7493befc1c129e23f497d34733dabdbe9a25f9f375cfb3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/zabolevanie_menu.html", ":otchet/ajax:zabolevaniya_iz_kontaktnyh.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Повторно заболевших</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("iz_kontaktnyh");
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
(isset($context["onOrganizationIzKontaktnyh"]) ? $context["onOrganizationIzKontaktnyh"] : $this->getContext($context, "onOrganizationIzKontaktnyh")))) {
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
                $context['_seq'] = twig_ensure_traversable((isset($context["onOrganizationIzKontaktnyh"]) ? $context["onOrganizationIzKontaktnyh"] : $this->getContext($context, "onOrganizationIzKontaktnyh")));
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
                // line 57
                echo "
                            ";
                // line 58
                if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                    // line 59
                    echo "                                <td></td>
                            ";
                }
                // line 61
                echo "                            ";
                $context["flag"] = "0";
                // line 62
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
            // line 64
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
        // line 74
        echo "</div>
    
";
        
        $__internal_bd7019bec305653a7493befc1c129e23f497d34733dabdbe9a25f9f375cfb3b1->leave($__internal_bd7019bec305653a7493befc1c129e23f497d34733dabdbe9a25f9f375cfb3b1_prof);

    }

    // line 78
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c7c653b5dc14473fb41310b0bdba7e7cad3304b37354641e87276b05f464e10e = $this->env->getExtension("native_profiler");
        $__internal_c7c653b5dc14473fb41310b0bdba7e7cad3304b37354641e87276b05f464e10e->enter($__internal_c7c653b5dc14473fb41310b0bdba7e7cad3304b37354641e87276b05f464e10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 79
        echo "
";
        
        $__internal_c7c653b5dc14473fb41310b0bdba7e7cad3304b37354641e87276b05f464e10e->leave($__internal_c7c653b5dc14473fb41310b0bdba7e7cad3304b37354641e87276b05f464e10e_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:zabolevaniya_iz_kontaktnyh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 79,  232 => 78,  223 => 74,  211 => 64,  196 => 62,  193 => 61,  189 => 59,  187 => 58,  184 => 57,  169 => 55,  165 => 53,  163 => 52,  157 => 51,  154 => 50,  152 => 49,  149 => 48,  132 => 47,  127 => 45,  122 => 44,  105 => 43,  102 => 42,  100 => 41,  87 => 30,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/zabolevanie_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Повторно заболевших</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('iz_kontaktnyh') }}" >*/
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
/*     {% elseif onOrganizationIzKontaktnyh is empty%}*/
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
/*                             {% for quantity in onOrganizationIzKontaktnyh %}*/
/* */
/*                                 {% if quantity.name_full == organization.nameFull %}*/
/* */
/*                                     <td  class="pokazatel{{loop.parent.loop.index}}">{{quantity[1]}}</td>*/
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
