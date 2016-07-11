<?php

/* :organization:allNameOrganizations.html.twig */
class __TwigTemplate_1cbbc211b6a6b7cb150930b01a04b1af6759d3ea672ee9f2dfbed5caa4d0578f extends Twig_Template
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
        $__internal_82175fc84720aa2e793db9aa8971d000eb9c1c24b5fdb156f0ff855ab29d4d22 = $this->env->getExtension("native_profiler");
        $__internal_82175fc84720aa2e793db9aa8971d000eb9c1c24b5fdb156f0ff855ab29d4d22->enter($__internal_82175fc84720aa2e793db9aa8971d000eb9c1c24b5fdb156f0ff855ab29d4d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:allNameOrganizations.html.twig"));

        // line 1
        echo "<ul class=\"dropdown-menu\">
    ";
        // line 2
        if (twig_test_empty((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")))) {
            // line 3
            echo "        <li><a href=\"#\">Учреждения не добавлены</a></li>
    ";
        } else {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 6
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("current_organization", array("id" => $this->getAttribute($context["org"], "id", array()))), "html", null, true);
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
        
        $__internal_82175fc84720aa2e793db9aa8971d000eb9c1c24b5fdb156f0ff855ab29d4d22->leave($__internal_82175fc84720aa2e793db9aa8971d000eb9c1c24b5fdb156f0ff855ab29d4d22_prof);

    }

    public function getTemplateName()
    {
        return ":organization:allNameOrganizations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  47 => 8,  36 => 6,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="dropdown-menu">*/
/*     {% if organizations is empty%}*/
/*         <li><a href="#">Учреждения не добавлены</a></li>*/
/*     {% else %}*/
/*         {% for org in organizations %}*/
/*             <li><a href="{{ path('current_organization', {'id': org.id}) }}">{{org.nameShort}}</a></li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </ul>*/
