<?php

/* :fkuz:sanZaklOnDate.html.twig */
class __TwigTemplate_23375ffef1c883cefdd31a2af8e5d9c0d9e0cf07149f4a88de895d6b021df745 extends Twig_Template
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
        $__internal_25a0537fb59c2266e15ca5d0cee10cb4c41a2a94a42d575d8f8a1d9f9b2c877b = $this->env->getExtension("native_profiler");
        $__internal_25a0537fb59c2266e15ca5d0cee10cb4c41a2a94a42d575d8f8a1d9f9b2c877b->enter($__internal_25a0537fb59c2266e15ca5d0cee10cb4c41a2a94a42d575d8f8a1d9f9b2c877b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:sanZaklOnDate.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sanZaklOnDate"]) ? $context["sanZaklOnDate"] : $this->getContext($context, "sanZaklOnDate")));
        foreach ($context['_seq'] as $context["_key"] => $context["sanZakl"]) {
            // line 2
            echo "\t<tr>
\t\t<td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["sanZakl"], "nomer", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sanZakl"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["sanZakl"], "vidDeytelnosti", array()), "html", null, true);
            echo "</td>
        <td><span class=\"glyphicon glyphicon-pencil edit_in_fkuz\" aria-hidden=\"true\" id_now=\"/fkuz/editSanZakl/";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["sanZakl"], "id", array()), "html", null, true);
            echo "\"></span></td>
\t\t<td><span class=\"glyphicon glyphicon-remove delete_now\" aria-hidden=\"true\" id_now=\"/fkuz/deleteSanZakl/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["sanZakl"], "id", array()), "html", null, true);
            echo "\"></span></td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sanZakl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_25a0537fb59c2266e15ca5d0cee10cb4c41a2a94a42d575d8f8a1d9f9b2c877b->leave($__internal_25a0537fb59c2266e15ca5d0cee10cb4c41a2a94a42d575d8f8a1d9f9b2c877b_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:sanZaklOnDate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for sanZakl in sanZaklOnDate %}*/
/* 	<tr>*/
/* 		<td>{{ sanZakl.nomer }}</td>*/
/* 		<td>{{ sanZakl.date|date("d.m.Y") }}</td>*/
/* 		<td>{{ sanZakl.vidDeytelnosti }}</td>*/
/*         <td><span class="glyphicon glyphicon-pencil edit_in_fkuz" aria-hidden="true" id_now="/fkuz/editSanZakl/{{ sanZakl.id }}"></span></td>*/
/* 		<td><span class="glyphicon glyphicon-remove delete_now" aria-hidden="true" id_now="/fkuz/deleteSanZakl/{{ sanZakl.id }}"></span></td>*/
/* 	</tr>*/
/* {% endfor %}*/
