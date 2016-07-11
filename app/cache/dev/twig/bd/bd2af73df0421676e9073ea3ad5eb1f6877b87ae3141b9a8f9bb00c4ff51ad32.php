<?php

/* fkuz/dogovorOnDate.html.twig */
class __TwigTemplate_75984699cce95457077423463cb067df3e00c6839bddea2fb489df161fe9836c extends Twig_Template
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
        $__internal_0563ad606cfb381a640f7f686bf9e0820cd5d4bda6ef6832239194b648721ebe = $this->env->getExtension("native_profiler");
        $__internal_0563ad606cfb381a640f7f686bf9e0820cd5d4bda6ef6832239194b648721ebe->enter($__internal_0563ad606cfb381a640f7f686bf9e0820cd5d4bda6ef6832239194b648721ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/dogovorOnDate.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dogovorOnDate"]) ? $context["dogovorOnDate"] : $this->getContext($context, "dogovorOnDate")));
        foreach ($context['_seq'] as $context["_key"] => $context["dogovor"]) {
            // line 2
            echo "\t<tr>
\t\t<td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dogovor"], "dogovorType", array()), "name", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "nomer", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dogovor"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "organizationPosrednik", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "summa", array()), "html", null, true);
            echo "</td>
        <td><span class=\"glyphicon glyphicon-pencil edit_in_fkuz\" aria-hidden=\"true\" id_now=\"/fkuz/editDogovor/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "id", array()), "html", null, true);
            echo "\"></span></td>
\t\t<td><span class=\"glyphicon glyphicon-remove delete_now\" aria-hidden=\"true\" id_now=\"/fkuz/deleteDogobor/";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "id", array()), "html", null, true);
            echo "\"></span></td>        
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogovor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0563ad606cfb381a640f7f686bf9e0820cd5d4bda6ef6832239194b648721ebe->leave($__internal_0563ad606cfb381a640f7f686bf9e0820cd5d4bda6ef6832239194b648721ebe_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/dogovorOnDate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for dogovor in dogovorOnDate %}*/
/* 	<tr>*/
/* 		<td>{{ dogovor.dogovorType.name }}</td>*/
/* 		<td>{{ dogovor.nomer }}</td>*/
/* 		<td>{{ dogovor.date|date("d.m.Y") }}</td>*/
/* 		<td>{{ dogovor.organizationPosrednik }}</td>*/
/* 		<td>{{ dogovor.summa }}</td>*/
/*         <td><span class="glyphicon glyphicon-pencil edit_in_fkuz" aria-hidden="true" id_now="/fkuz/editDogovor/{{ dogovor.id }}"></span></td>*/
/* 		<td><span class="glyphicon glyphicon-remove delete_now" aria-hidden="true" id_now="/fkuz/deleteDogobor/{{ dogovor.id }}"></span></td>        */
/* 	</tr>*/
/* {% endfor %}*/
