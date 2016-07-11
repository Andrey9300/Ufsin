<?php

/* :otchet/ajax:zabolevaniya_common.html.twig */
class __TwigTemplate_77b2f87e7d4388bff2cd648e6ec051aeebffbd9f63a3888da67b99d2c9d2ca33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2fecf5770167c179e7d5c039eb3814b89e637db5d12b11ce64bee7630f659b1 = $this->env->getExtension("native_profiler");
        $__internal_b2fecf5770167c179e7d5c039eb3814b89e637db5d12b11ce64bee7630f659b1->enter($__internal_b2fecf5770167c179e7d5c039eb3814b89e637db5d12b11ce64bee7630f659b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:zabolevaniya_common.html.twig"));

        // line 1
        if (twig_test_empty((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")))) {
            // line 2
            echo "    <p>Не добавлены учреждения</p>
";
        } elseif (twig_test_empty(        // line 3
(isset($context["onOrganization"]) ? $context["onOrganization"] : $this->getContext($context, "onOrganization")))) {
            // line 4
            echo "    <p>Не добавлены заболевшие</p>
";
        } else {
            // line 6
            echo "    <table class=\"table table-hover table-bordered numbers\">
        <thead>
            <tr>
                <td>Учреждение</td>
                <td id=\"zabolevaniya\">Количество</td>
            </tr>
        </thead>
        <tbody>

        ";
            // line 15
            $context["flag"] = "0";
            // line 16
            echo "
        ";
            // line 17
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
                // line 18
                echo "            <tr  class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                <td class=\"name\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
                echo "</td>

                    ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["onOrganization"]) ? $context["onOrganization"] : $this->getContext($context, "onOrganization")));
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
                    // line 22
                    echo "
                        ";
                    // line 23
                    if (($this->getAttribute($context["quantity"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 24
                        echo "
                            <td  class=\"pokazatel";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["quantity"], 1, array(), "array"), "html", null, true);
                        echo "</td>
                            ";
                        // line 26
                        $context["flag"] = "1";
                        // line 27
                        echo "
                        ";
                    }
                    // line 29
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
                // line 31
                echo "
                    ";
                // line 32
                if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                    // line 33
                    echo "                        <td></td>
                    ";
                }
                // line 35
                echo "                    ";
                $context["flag"] = "0";
                // line 36
                echo "            </tr>
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
            // line 38
            echo "        </tbody>
        <tfoot>
            <tr>
                <td>Всего</td>
                <td id=\"vsego_zabolevchih\"></td>
            </tr>
        </tfoot>
    </table>
";
        }
        
        $__internal_b2fecf5770167c179e7d5c039eb3814b89e637db5d12b11ce64bee7630f659b1->leave($__internal_b2fecf5770167c179e7d5c039eb3814b89e637db5d12b11ce64bee7630f659b1_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:zabolevaniya_common.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 38,  140 => 36,  137 => 35,  133 => 33,  131 => 32,  128 => 31,  113 => 29,  109 => 27,  107 => 26,  101 => 25,  98 => 24,  96 => 23,  93 => 22,  76 => 21,  71 => 19,  66 => 18,  49 => 17,  46 => 16,  44 => 15,  33 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if organizations is empty%}*/
/*     <p>Не добавлены учреждения</p>*/
/* {% elseif onOrganization is empty%}*/
/*     <p>Не добавлены заболевшие</p>*/
/* {% else %}*/
/*     <table class="table table-hover table-bordered numbers">*/
/*         <thead>*/
/*             <tr>*/
/*                 <td>Учреждение</td>*/
/*                 <td id="zabolevaniya">Количество</td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* */
/*         {% set flag = "0" %}*/
/* */
/*         {% for organization in organizations %}*/
/*             <tr  class="pokazatels{{loop.index}}">*/
/*                 <td class="name">{{organization.nameShort}}</td>*/
/* */
/*                     {% for quantity in onOrganization %}*/
/* */
/*                         {% if quantity.name_full == organization.nameFull %}*/
/* */
/*                             <td  class="pokazatel{{loop.parent.loop.index}}">{{quantity[1]}}</td>*/
/*                             {% set flag = "1" %}*/
/* */
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     {% if flag == "0" %}*/
/*                         <td></td>*/
/*                     {% endif %}*/
/*                     {% set flag = "0" %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*         <tfoot>*/
/*             <tr>*/
/*                 <td>Всего</td>*/
/*                 <td id="vsego_zabolevchih"></td>*/
/*             </tr>*/
/*         </tfoot>*/
/*     </table>*/
/* {% endif %}*/
