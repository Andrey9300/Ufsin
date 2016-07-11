<?php

/* organization/allNameOrganizations.html.twig */
class __TwigTemplate_1363f1b1d2d0badbdffc940750a16bdb2c9b66ec98011ad8116145ec86059cdc extends Twig_Template
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
        if (twig_test_empty((isset($context["organizations"]) ? $context["organizations"] : null))) {
            // line 3
            echo "        <li><a href=\"/\">Учреждения не добавлены</a></li>
    ";
        } else {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 6
                echo "            <li><a href=\"/organization/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "nameShort", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "organization/allNameOrganizations.html.twig";
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
/*     {% if organizations is empty%}*/
/*         <li><a href="/">Учреждения не добавлены</a></li>*/
/*     {% else %}*/
/*         {% for org in organizations %}*/
/*             <li><a href="/organization/{{org.id}}">{{org.nameShort}}</a></li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </ul>*/
