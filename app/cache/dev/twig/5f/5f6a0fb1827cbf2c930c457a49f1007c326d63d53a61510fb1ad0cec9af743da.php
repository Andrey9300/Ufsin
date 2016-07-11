<?php

/* :fkuz:allFilialNames.html.twig */
class __TwigTemplate_66c3b030ca7fbc57b6f69d4d12bff7c4034cccf59cecfcf14a93d0543fd47930 extends Twig_Template
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
        $__internal_1bdb1e9f1acebe59dcb2120a7412fe0e30247904d908ce0c18be140e6f08f210 = $this->env->getExtension("native_profiler");
        $__internal_1bdb1e9f1acebe59dcb2120a7412fe0e30247904d908ce0c18be140e6f08f210->enter($__internal_1bdb1e9f1acebe59dcb2120a7412fe0e30247904d908ce0c18be140e6f08f210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:allFilialNames.html.twig"));

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
        
        $__internal_1bdb1e9f1acebe59dcb2120a7412fe0e30247904d908ce0c18be140e6f08f210->leave($__internal_1bdb1e9f1acebe59dcb2120a7412fe0e30247904d908ce0c18be140e6f08f210_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:allFilialNames.html.twig";
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
