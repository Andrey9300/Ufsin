<?php

/* fkuz/allFilialNames.html.twig */
class __TwigTemplate_37d89df889f2d1d72b9bb220c9291c43110f1ced124d0b98c4654f7430132061 extends Twig_Template
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
        // line 1
        echo "<ul class=\"dropdown-menu\">
    ";
        // line 2
        if (twig_test_empty((isset($context["filialNames"]) ? $context["filialNames"] : null))) {
            // line 3
            echo "        <li><a href=\"/\">Филиалы не добавлены</a></li>
    ";
        } else {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filialNames"]) ? $context["filialNames"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["filial"]) {
                // line 6
                echo "            <li><a href=\"/fkuz/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filial"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filial"], "nameShort", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "fkuz/allFilialNames.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  44 => 8,  33 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="dropdown-menu">*/
/*     {% if filialNames is empty %}*/
/*         <li><a href="/">Филиалы не добавлены</a></li>*/
/*     {% else %}*/
/*         {% for filial in filialNames %}*/
/*             <li><a href="/fkuz/{{filial.id}}">{{filial.nameShort}}</a></li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </ul>*/
