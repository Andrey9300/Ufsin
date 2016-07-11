<?php

/* fkuz/allFilialNames.html.twig */
class __TwigTemplate_f14c94a63a2618bd705b4b99da607aa48e6fb0606c8d9069b145ad290ba0868e extends Twig_Template
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
        $__internal_2e50d682de3f841754eeabded7449aa7df624666375d7b7f68b1ae3da7a3dd63 = $this->env->getExtension("native_profiler");
        $__internal_2e50d682de3f841754eeabded7449aa7df624666375d7b7f68b1ae3da7a3dd63->enter($__internal_2e50d682de3f841754eeabded7449aa7df624666375d7b7f68b1ae3da7a3dd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/allFilialNames.html.twig"));

        // line 1
        echo "<ul class=\"dropdown-menu\">
    ";
        // line 2
        if (twig_test_empty((isset($context["filialNames"]) ? $context["filialNames"] : $this->getContext($context, "filialNames")))) {
            // line 3
            echo "        <li><a href=\"#\">Филиалы не добавлены</a></li>
    ";
        } else {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filialNames"]) ? $context["filialNames"] : $this->getContext($context, "filialNames")));
            foreach ($context['_seq'] as $context["_key"] => $context["filial"]) {
                // line 6
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fkuz", array("id" => $this->getAttribute($context["filial"], "id", array()))), "html", null, true);
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
        
        $__internal_2e50d682de3f841754eeabded7449aa7df624666375d7b7f68b1ae3da7a3dd63->leave($__internal_2e50d682de3f841754eeabded7449aa7df624666375d7b7f68b1ae3da7a3dd63_prof);

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
        return array (  50 => 9,  47 => 8,  36 => 6,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="dropdown-menu">*/
/*     {% if filialNames is empty %}*/
/*         <li><a href="#">Филиалы не добавлены</a></li>*/
/*     {% else %}*/
/*         {% for filial in filialNames %}*/
/*             <li><a href="{{ path('fkuz', {'id': filial.id}) }}">{{filial.nameShort}}</a></li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </ul>*/
