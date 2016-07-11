<?php

/* fkuz/licenseOnDate.html.twig */
class __TwigTemplate_02d2a0fbddff8c8545bd5020d775326548c031c9c4f731ee168655e86688732c extends Twig_Template
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
        $__internal_e23bbdb4159c02a4b6c9b06ceffb97be77fb5156dbb8f86fd17d93feda2cee21 = $this->env->getExtension("native_profiler");
        $__internal_e23bbdb4159c02a4b6c9b06ceffb97be77fb5156dbb8f86fd17d93feda2cee21->enter($__internal_e23bbdb4159c02a4b6c9b06ceffb97be77fb5156dbb8f86fd17d93feda2cee21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/licenseOnDate.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["licenseOnDate"]) ? $context["licenseOnDate"] : $this->getContext($context, "licenseOnDate")));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 2
            echo "\t<tr>
\t\t<td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "nomer", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["license"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "vidDeytelnosti", array()), "html", null, true);
            echo "</td>
        <td><span class=\"glyphicon glyphicon-pencil edit_in_fkuz\" aria-hidden=\"true\" id_now=\"/fkuz/editLicense/";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "id", array()), "html", null, true);
            echo "\"></span></td>
\t\t<td><span class=\"glyphicon glyphicon-remove delete_now\" aria-hidden=\"true\" id_now=\"/fkuz/deleteLicense/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "id", array()), "html", null, true);
            echo "\"></span></td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e23bbdb4159c02a4b6c9b06ceffb97be77fb5156dbb8f86fd17d93feda2cee21->leave($__internal_e23bbdb4159c02a4b6c9b06ceffb97be77fb5156dbb8f86fd17d93feda2cee21_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/licenseOnDate.html.twig";
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
/* {% for license in licenseOnDate %}*/
/* 	<tr>*/
/* 		<td>{{ license.nomer }}</td>*/
/* 		<td>{{ license.date|date("d.m.Y") }}</td>*/
/* 		<td>{{ license.vidDeytelnosti }}</td>*/
/*         <td><span class="glyphicon glyphicon-pencil edit_in_fkuz" aria-hidden="true" id_now="/fkuz/editLicense/{{ license.id }}"></span></td>*/
/* 		<td><span class="glyphicon glyphicon-remove delete_now" aria-hidden="true" id_now="/fkuz/deleteLicense/{{ license.id }}"></span></td>*/
/* 	</tr>*/
/* {% endfor %}*/
