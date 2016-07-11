<?php

/* :organization:dogovorOnDate.html.twig */
class __TwigTemplate_b0415ba80f95a398351b073fb459574219e0a102cf30f166903924f50c140e92 extends Twig_Template
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
        $__internal_7eaf14ab2fb845e163a0c1241bc39966d4d813a58260096f0b3d09320b6f2822 = $this->env->getExtension("native_profiler");
        $__internal_7eaf14ab2fb845e163a0c1241bc39966d4d813a58260096f0b3d09320b6f2822->enter($__internal_7eaf14ab2fb845e163a0c1241bc39966d4d813a58260096f0b3d09320b6f2822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:dogovorOnDate.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dogovorOnDate"]) ? $context["dogovorOnDate"] : $this->getContext($context, "dogovorOnDate")));
        foreach ($context['_seq'] as $context["_key"] => $context["dogovor"]) {
            // line 2
            echo "<tr>
    <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dogovor"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
    <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "nomer", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "organization_posrednik", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["dogovor"], "summa", array()), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogovor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7eaf14ab2fb845e163a0c1241bc39966d4d813a58260096f0b3d09320b6f2822->leave($__internal_7eaf14ab2fb845e163a0c1241bc39966d4d813a58260096f0b3d09320b6f2822_prof);

    }

    public function getTemplateName()
    {
        return ":organization:dogovorOnDate.html.twig";
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
/* {% for dogovor in dogovorOnDate %}*/
/* <tr>*/
/*     <td>{{ dogovor.name }}</td>*/
/*     <td>{{ dogovor.date|date("d.m.Y") }}</td>*/
/*     <td>{{ dogovor.nomer }}</td>*/
/*     <td>{{ dogovor.organization_posrednik }}</td>*/
/*     <td>{{ dogovor.summa }}</td>*/
/* </tr>*/
/* {% endfor %}*/
