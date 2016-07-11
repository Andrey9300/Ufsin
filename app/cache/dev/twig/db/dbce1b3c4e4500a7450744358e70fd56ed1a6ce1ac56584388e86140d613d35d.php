<?php

/* :organization:proverkiOnDate.html.twig */
class __TwigTemplate_075757e4174c60f115237af99a435475d8a9c6debfad90c0a347b6386d551760 extends Twig_Template
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
        $__internal_23a81c23176fd1e9940e4bdaf48b094ad6d2fef17054c221d8293f1559268a55 = $this->env->getExtension("native_profiler");
        $__internal_23a81c23176fd1e9940e4bdaf48b094ad6d2fef17054c221d8293f1559268a55->enter($__internal_23a81c23176fd1e9940e4bdaf48b094ad6d2fef17054c221d8293f1559268a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:proverkiOnDate.html.twig"));

        // line 1
        $context["flag"] = "0";
        echo "  
";
        // line 2
        $context["usloviya"] = array(0 => "1", 1 => "0", 2 => "-1");
        echo "  

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proverkaIds"]) ? $context["proverkaIds"] : $this->getContext($context, "proverkaIds")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["proverkaId"]) {
            // line 5
            echo "    <tr class=\"pokazatels";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
        <td>";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverkaId"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usloviya"]) ? $context["usloviya"] : $this->getContext($context, "usloviya")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["uslovie"]) {
                // line 8
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["proverkaAll"]) ? $context["proverkaAll"] : $this->getContext($context, "proverkaAll")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
                    // line 9
                    echo "            
                ";
                    // line 10
                    if (($this->getAttribute($context["proverka"], "id", array()) == $this->getAttribute($context["proverkaId"], "id", array()))) {
                        // line 11
                        echo "                    ";
                        if (($this->getAttribute($context["proverka"], "otmetka_ustraneniya", array()) == $context["uslovie"])) {
                            // line 12
                            echo "                        <td class=\"pokazatel";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], 1, array()), "html", null, true);
                            echo "</td>
                        ";
                            // line 13
                            $context["flag"] = "1";
                            // line 14
                            echo "                    ";
                        }
                        echo "                    
                ";
                    }
                    // line 16
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "  
            
            ";
                // line 19
                if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "0")) {
                    // line 20
                    echo "                <td></td>
            ";
                }
                // line 22
                echo "            
            ";
                // line 23
                $context["flag"] = "0";
                // line 24
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uslovie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
        <td></td>                            
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverkaId'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_23a81c23176fd1e9940e4bdaf48b094ad6d2fef17054c221d8293f1559268a55->leave($__internal_23a81c23176fd1e9940e4bdaf48b094ad6d2fef17054c221d8293f1559268a55_prof);

    }

    public function getTemplateName()
    {
        return ":organization:proverkiOnDate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 24,  143 => 23,  140 => 22,  136 => 20,  134 => 19,  130 => 17,  115 => 16,  109 => 14,  107 => 13,  100 => 12,  97 => 11,  95 => 10,  92 => 9,  74 => 8,  57 => 7,  53 => 6,  48 => 5,  31 => 4,  26 => 2,  22 => 1,);
    }
}
/* {% set flag = "0" %}  */
/* {% set usloviya = ["1", "0", "-1"] %}  */
/* */
/* {% for proverkaId in proverkaIds %}*/
/*     <tr class="pokazatels{{loop.index}}">*/
/*         <td>{{ proverkaId.date|date("d.m.Y") }}</td>*/
/*         {% for uslovie in usloviya %}*/
/*             {% for proverka in proverkaAll %}*/
/*             */
/*                 {% if proverka.id == proverkaId.id %}*/
/*                     {% if proverka.otmetka_ustraneniya == uslovie  %}*/
/*                         <td class="pokazatel{{loop.parent.loop.index}}">{{proverka.1}}</td>*/
/*                         {% set flag = "1" %}*/
/*                     {% endif %}                    */
/*                 {% endif %}*/
/*                 */
/*             {% endfor %}  */
/*             */
/*             {% if flag == "0" %}*/
/*                 <td></td>*/
/*             {% endif %}*/
/*             */
/*             {% set flag = "0" %}*/
/*         {% endfor %} */
/*         <td></td>                            */
/*     </tr> */
/* {% endfor %}*/
