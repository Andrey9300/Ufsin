<?php

/* fkuz/sanZaklOnDate.html.twig */
class __TwigTemplate_8d5190cf8adf2e0d695d47425a6fde27f6e09dbfb62928807424c49e1fda5253 extends Twig_Template
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
        $__internal_6b51302ec8992b771bd3113d1d206279d03665ab083cfc64acdda07ac4d6ea22 = $this->env->getExtension("native_profiler");
        $__internal_6b51302ec8992b771bd3113d1d206279d03665ab083cfc64acdda07ac4d6ea22->enter($__internal_6b51302ec8992b771bd3113d1d206279d03665ab083cfc64acdda07ac4d6ea22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/sanZaklOnDate.html.twig"));

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
        
        $__internal_6b51302ec8992b771bd3113d1d206279d03665ab083cfc64acdda07ac4d6ea22->leave($__internal_6b51302ec8992b771bd3113d1d206279d03665ab083cfc64acdda07ac4d6ea22_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/sanZaklOnDate.html.twig";
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
