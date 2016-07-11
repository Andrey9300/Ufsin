<?php

/* organization/dogovorOnDate.html.twig */
class __TwigTemplate_5e0884541cbba856f66046917d8c3fd6afe49962840f6bc331ab5bf683d1fae3 extends Twig_Template
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
        $__internal_a779a9ee515ee6b2b6357cdfeff5b92a7d0452c6f5d304133bbfe65fcd68d6b9 = $this->env->getExtension("native_profiler");
        $__internal_a779a9ee515ee6b2b6357cdfeff5b92a7d0452c6f5d304133bbfe65fcd68d6b9->enter($__internal_a779a9ee515ee6b2b6357cdfeff5b92a7d0452c6f5d304133bbfe65fcd68d6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/dogovorOnDate.html.twig"));

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
        
        $__internal_a779a9ee515ee6b2b6357cdfeff5b92a7d0452c6f5d304133bbfe65fcd68d6b9->leave($__internal_a779a9ee515ee6b2b6357cdfeff5b92a7d0452c6f5d304133bbfe65fcd68d6b9_prof);

    }

    public function getTemplateName()
    {
        return "organization/dogovorOnDate.html.twig";
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
