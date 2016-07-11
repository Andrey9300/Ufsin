<?php

/* fkuz/showNakazaniyaFkuz.html.twig */
class __TwigTemplate_2e0ff4670b0b4dff9fe28f3d0d1238eabda239ee296ef18d4956c1ca2e9f3cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/showNakazaniyaFkuz.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3554d980438f440090760e1eb2440e6070af6cb8185ca03df73196fc6963a97f = $this->env->getExtension("native_profiler");
        $__internal_3554d980438f440090760e1eb2440e6070af6cb8185ca03df73196fc6963a97f->enter($__internal_3554d980438f440090760e1eb2440e6070af6cb8185ca03df73196fc6963a97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/showNakazaniyaFkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3554d980438f440090760e1eb2440e6070af6cb8185ca03df73196fc6963a97f->leave($__internal_3554d980438f440090760e1eb2440e6070af6cb8185ca03df73196fc6963a97f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_456103ff43b96de28f8be134ea9ad18749bae1c60777fbb5e0e8160b277a59e3 = $this->env->getExtension("native_profiler");
        $__internal_456103ff43b96de28f8be134ea9ad18749bae1c60777fbb5e0e8160b277a59e3->enter($__internal_456103ff43b96de28f8be134ea9ad18749bae1c60777fbb5e0e8160b277a59e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Выберите наказание:</h1>
    </div>

    <div class=\"row\">
        <table class=\"table table-hover main table-bordered\">
            <thead>
            <tr>
                <td>ФИО</td>
                <td>Номер</td>
                <td>Дата</td>
                <td>Тип</td>
                <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nakazaniyaFkuz"]) ? $context["nakazaniyaFkuz"] : $this->getContext($context, "nakazaniyaFkuz")));
        foreach ($context['_seq'] as $context["_key"] => $context["nak"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["nak"], "fio", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["nak"], "nomer", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["nak"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["nak"], "type", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"/fkuz/editNakazanieFkuz/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["nak"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"/fkuz/deleteNakazanieFkuz/";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["nak"], "id", array()), "html", null, true);
            echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nak'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_456103ff43b96de28f8be134ea9ad18749bae1c60777fbb5e0e8160b277a59e3->leave($__internal_456103ff43b96de28f8be134ea9ad18749bae1c60777fbb5e0e8160b277a59e3_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b0395b16aad434a88a8a0909d2b815c9f9fc3d21cf613fccaf662940d224fa3b = $this->env->getExtension("native_profiler");
        $__internal_b0395b16aad434a88a8a0909d2b815c9f9fc3d21cf613fccaf662940d224fa3b->enter($__internal_b0395b16aad434a88a8a0909d2b815c9f9fc3d21cf613fccaf662940d224fa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "
";
        
        $__internal_b0395b16aad434a88a8a0909d2b815c9f9fc3d21cf613fccaf662940d224fa3b->leave($__internal_b0395b16aad434a88a8a0909d2b815c9f9fc3d21cf613fccaf662940d224fa3b_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/showNakazaniyaFkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  108 => 38,  97 => 32,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  65 => 23,  61 => 22,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Выберите наказание:</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <table class="table table-hover main table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <td>ФИО</td>*/
/*                 <td>Номер</td>*/
/*                 <td>Дата</td>*/
/*                 <td>Тип</td>*/
/*                 <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for nak in nakazaniyaFkuz %}*/
/*                 <tr>*/
/*                     <td>{{ nak.fio }}</td>*/
/*                     <td>{{ nak.nomer }}</td>*/
/*                     <td>{{ nak.date|date("d.m.Y") }}</td>*/
/*                     <td>{{ nak.type }}</td>*/
/*                     <td><a href="/fkuz/editNakazanieFkuz/{{ nak.id }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="/fkuz/deleteNakazanieFkuz/{{ nak.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
