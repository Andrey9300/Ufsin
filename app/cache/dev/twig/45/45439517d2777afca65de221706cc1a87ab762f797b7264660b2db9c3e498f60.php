<?php

/* :fkuz:proverkarOnDate.html.twig */
class __TwigTemplate_28413b015e6a6d72576c127f77742e3bf4b703b685ced3bfc23bf247aae4b067 extends Twig_Template
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
        $__internal_6caeba85ed14e1661a9bda7101b9a055bf5ee7f74e9d3b1d7b5e751b4e85e142 = $this->env->getExtension("native_profiler");
        $__internal_6caeba85ed14e1661a9bda7101b9a055bf5ee7f74e9d3b1d7b5e751b4e85e142->enter($__internal_6caeba85ed14e1661a9bda7101b9a055bf5ee7f74e9d3b1d7b5e751b4e85e142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:proverkarOnDate.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proverkarOnDate"]) ? $context["proverkarOnDate"] : $this->getContext($context, "proverkarOnDate")));
        foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
            // line 2
            echo "    <tr>
        <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "nomer", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverka"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
        <td><a href=\"/fkuz/showNakazaniyaFkuz/";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
            echo "\">Наказания</a></td>
        <td><span class=\"glyphicon glyphicon-pencil edit_in_fkuz\" aria-hidden=\"true\" id_now=\"/fkuz/editProverkaFkuz/";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
            echo "\"></span></td>
        <td><span class=\"glyphicon glyphicon-remove delete_now\" aria-hidden=\"true\" id_now=\"/fkuz/deleteProverkaFkuz/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "id", array()), "html", null, true);
            echo "\"></span></td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6caeba85ed14e1661a9bda7101b9a055bf5ee7f74e9d3b1d7b5e751b4e85e142->leave($__internal_6caeba85ed14e1661a9bda7101b9a055bf5ee7f74e9d3b1d7b5e751b4e85e142_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:proverkarOnDate.html.twig";
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
/* {% for proverka in proverkarOnDate %}*/
/*     <tr>*/
/*         <td>{{ proverka.nomer }}</td>*/
/*         <td>{{ proverka.date|date("d.m.Y") }}</td>*/
/*         <td><a href="/fkuz/showNakazaniyaFkuz/{{ proverka.id }}">Наказания</a></td>*/
/*         <td><span class="glyphicon glyphicon-pencil edit_in_fkuz" aria-hidden="true" id_now="/fkuz/editProverkaFkuz/{{ proverka.id }}"></span></td>*/
/*         <td><span class="glyphicon glyphicon-remove delete_now" aria-hidden="true" id_now="/fkuz/deleteProverkaFkuz/{{ proverka.id }}"></span></td>*/
/*     </tr>*/
/* {% endfor %}*/
