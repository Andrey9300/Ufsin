<?php

/* :organization:zabolevaniyaOnDate.html.twig */
class __TwigTemplate_c85742c39edc21b860e4ee626156a62d99023c286df5bead98ca6935c4dee8cb extends Twig_Template
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
        $__internal_b41c66e86efb5aa83c7ffcc7592fbbdc843162da1829d415722969114476ef48 = $this->env->getExtension("native_profiler");
        $__internal_b41c66e86efb5aa83c7ffcc7592fbbdc843162da1829d415722969114476ef48->enter($__internal_b41c66e86efb5aa83c7ffcc7592fbbdc843162da1829d415722969114476ef48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:zabolevaniyaOnDate.html.twig"));

        // line 1
        echo "<tr>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lichnyiSostavCount"]) ? $context["lichnyiSostavCount"] : $this->getContext($context, "lichnyiSostavCount")));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            // line 3
            echo "        <td>Личный состав</td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["count"], 1, array()), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </tr>

    <tr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["osugdenyiCount"]) ? $context["osugdenyiCount"] : $this->getContext($context, "osugdenyiCount")));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            // line 10
            echo "        <td>Осужденные</td>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["count"], 1, array()), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</tr>       ";
        
        $__internal_b41c66e86efb5aa83c7ffcc7592fbbdc843162da1829d415722969114476ef48->leave($__internal_b41c66e86efb5aa83c7ffcc7592fbbdc843162da1829d415722969114476ef48_prof);

    }

    public function getTemplateName()
    {
        return ":organization:zabolevaniyaOnDate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  52 => 11,  49 => 10,  45 => 9,  40 => 6,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <tr>*/
/*     {% for count in lichnyiSostavCount %}*/
/*         <td>Личный состав</td>*/
/*         <td>{{ count.1 }}</td>*/
/*     {% endfor %}*/
/*     </tr>*/
/* */
/*     <tr>*/
/*     {% for count in osugdenyiCount %}*/
/*         <td>Осужденные</td>*/
/*         <td>{{ count.1 }}</td>*/
/*     {% endfor %}*/
/* </tr>       */
