<?php

/* organization/allNameOrganizations.html.twig */
class __TwigTemplate_4b3af722b26b5b166e832c897ee77ae7f3111d16cf103375d0e0335834b73307 extends Twig_Template
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
        $__internal_069bb87ab016253467527069461e692349119d3c64506aeefa651d944482ac26 = $this->env->getExtension("native_profiler");
        $__internal_069bb87ab016253467527069461e692349119d3c64506aeefa651d944482ac26->enter($__internal_069bb87ab016253467527069461e692349119d3c64506aeefa651d944482ac26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/allNameOrganizations.html.twig"));

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
        
        $__internal_069bb87ab016253467527069461e692349119d3c64506aeefa651d944482ac26->leave($__internal_069bb87ab016253467527069461e692349119d3c64506aeefa651d944482ac26_prof);

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
