<?php

/* :otchet/ajax:issledovanie_pokazatel.html.twig */
class __TwigTemplate_feaaf45c32714fe91eb63dba76e27b10538766389890e83cf1dd225a6f771a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet/ajax:issledovanie_pokazatel.html.twig", 1);
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
        $__internal_4b621ae09b13057a93af697a30aca78e4fb10e71f24d6ce6d1e4dc75b2fb9281 = $this->env->getExtension("native_profiler");
        $__internal_4b621ae09b13057a93af697a30aca78e4fb10e71f24d6ce6d1e4dc75b2fb9281->enter($__internal_4b621ae09b13057a93af697a30aca78e4fb10e71f24d6ce6d1e4dc75b2fb9281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:issledovanie_pokazatel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b621ae09b13057a93af697a30aca78e4fb10e71f24d6ce6d1e4dc75b2fb9281->leave($__internal_4b621ae09b13057a93af697a30aca78e4fb10e71f24d6ce6d1e4dc75b2fb9281_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7cf38b67331bc614c66fa7239f3c9da99b35eb45a6ba0d94dcb81eeba10e03b4 = $this->env->getExtension("native_profiler");
        $__internal_7cf38b67331bc614c66fa7239f3c9da99b35eb45a6ba0d94dcb81eeba10e03b4->enter($__internal_7cf38b67331bc614c66fa7239f3c9da99b35eb45a6ba0d94dcb81eeba10e03b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/issledovanie_menu.html", ":otchet/ajax:issledovanie_pokazatel.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <table class=\"table table-hover table-bordered\" id=\"common_proverka\">
        <caption>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name_statistic"]) ? $context["name_statistic"] : $this->getContext($context, "name_statistic")), "html", null, true);
        echo "</caption>
        <thead>
            <tr>
                <td></td>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
        foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
            // line 14
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                <td>Итого</td>
            </tr>
        </thead>
        <tbody>
  
        ";
        // line 21
        $context["flag"] = "0";
        // line 22
        echo "
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["issledovaniePokazatels"]) ? $context["issledovaniePokazatels"] : $this->getContext($context, "issledovaniePokazatels")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pokazatel"]) {
            // line 24
            echo "            <tr class=\"pokazatels";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                <td class=\"name\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "name", array()), "html", null, true);
            echo "</td>
                
                ";
            // line 27
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
                // line 28
                echo "                
                    ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pokazatelQuantity"]) ? $context["pokazatelQuantity"] : $this->getContext($context, "pokazatelQuantity")));
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
                    // line 30
                    echo "                    
                        ";
                    // line 31
                    if (($this->getAttribute($context["quantity"], "name", array()) == $this->getAttribute($context["pokazatel"], "name", array()))) {
                        // line 32
                        echo "                        
                            ";
                        // line 33
                        if (($this->getAttribute($context["quantity"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                            // line 34
                            echo "                                <td class=\"pokazatel";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["quantity"], 1, array(), "array"), "html", null, true);
                            echo "</td>
                                ";
                            // line 35
                            $context["flag"] = "1";
                            // line 36
                            echo "                            ";
                        }
                        // line 37
                        echo "                            
                        ";
                    }
                    // line 39
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
                // line 41
                echo "                    
                    ";
                // line 42
                if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                    // line 43
                    echo "                        <td></td>
                    ";
                }
                // line 45
                echo "                    ";
                $context["flag"] = "0";
                // line 46
                echo "                ";
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
            // line 47
            echo "                <td></td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokazatel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
        <tfoot>
            <tr>
                <td>Всего</td>
                ";
        // line 54
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
            // line 55
            echo "                    <td id=\"result";
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
        // line 57
        echo "                <td id=\"vsego\"></td>
            </tr>
            <tr>
                <td></td>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
        foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
            // line 62
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "nameShort", array()), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                <td></td>
            </tr>
        </tfoot>
    </table>
</div>
";
        
        $__internal_7cf38b67331bc614c66fa7239f3c9da99b35eb45a6ba0d94dcb81eeba10e03b4->leave($__internal_7cf38b67331bc614c66fa7239f3c9da99b35eb45a6ba0d94dcb81eeba10e03b4_prof);

    }

    // line 71
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bb15fb1a60da6b8945daabcfe725b0ff7c70f393f1f1552d1bfffc3c940d1f70 = $this->env->getExtension("native_profiler");
        $__internal_bb15fb1a60da6b8945daabcfe725b0ff7c70f393f1f1552d1bfffc3c940d1f70->enter($__internal_bb15fb1a60da6b8945daabcfe725b0ff7c70f393f1f1552d1bfffc3c940d1f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 72
        echo "
";
        
        $__internal_bb15fb1a60da6b8945daabcfe725b0ff7c70f393f1f1552d1bfffc3c940d1f70->leave($__internal_bb15fb1a60da6b8945daabcfe725b0ff7c70f393f1f1552d1bfffc3c940d1f70_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:issledovanie_pokazatel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 72,  301 => 71,  289 => 64,  280 => 62,  276 => 61,  270 => 57,  253 => 55,  236 => 54,  230 => 50,  214 => 47,  200 => 46,  197 => 45,  193 => 43,  191 => 42,  188 => 41,  173 => 39,  169 => 37,  166 => 36,  164 => 35,  157 => 34,  155 => 33,  152 => 32,  150 => 31,  147 => 30,  130 => 29,  127 => 28,  110 => 27,  105 => 25,  100 => 24,  83 => 23,  80 => 22,  78 => 21,  71 => 16,  62 => 14,  58 => 13,  51 => 9,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/issledovanie_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <table class="table table-hover table-bordered" id="common_proverka">*/
/*         <caption>{{ name_statistic }}</caption>*/
/*         <thead>*/
/*             <tr>*/
/*                 <td></td>*/
/*                 {% for organization in organizations %}*/
/*                     <td>{{organization.nameShort}}</td>*/
/*                 {% endfor %}*/
/*                 <td>Итого</td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*   */
/*         {% set flag = "0" %}*/
/* */
/*         {% for pokazatel in issledovaniePokazatels %}*/
/*             <tr class="pokazatels{{loop.index}}">*/
/*                 <td class="name">{{pokazatel.name}}</td>*/
/*                 */
/*                 {% for organization in organizations %}*/
/*                 */
/*                     {% for quantity in pokazatelQuantity %}*/
/*                     */
/*                         {% if quantity.name == pokazatel.name %}*/
/*                         */
/*                             {% if quantity.name_full == organization.nameFull %}*/
/*                                 <td class="pokazatel{{loop.parent.loop.index}}">{{quantity[1]}}</td>*/
/*                                 {% set flag = "1" %}*/
/*                             {% endif %}*/
/*                             */
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/*                     */
/*                     {% if flag == "0" %}*/
/*                         <td></td>*/
/*                     {% endif %}*/
/*                     {% set flag = "0" %}*/
/*                 {% endfor %}*/
/*                 <td></td>*/
/*             </tr> */
/*         {% endfor %}*/
/*         </tbody>*/
/*         <tfoot>*/
/*             <tr>*/
/*                 <td>Всего</td>*/
/*                 {% for organization in organizations %}*/
/*                     <td id="result{{loop.index}}"></td>*/
/*                 {% endfor %}*/
/*                 <td id="vsego"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td></td>*/
/*                 {% for organization in organizations %}*/
/*                     <td>{{organization.nameShort}}</td>*/
/*                 {% endfor %}*/
/*                 <td></td>*/
/*             </tr>*/
/*         </tfoot>*/
/*     </table>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
