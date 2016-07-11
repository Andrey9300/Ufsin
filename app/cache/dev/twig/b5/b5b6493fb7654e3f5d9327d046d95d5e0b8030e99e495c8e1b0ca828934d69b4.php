<?php

/* :organization:showNakazaniya.html.twig */
class __TwigTemplate_7a44d0019a5a409f6b3facdd378acf19d38961e505cfe9f3dba07d2cf6bc44e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:showNakazaniya.html.twig", 1);
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
        $__internal_2ef9db336fcb3bc6b77610461a6a635bbd15fa06cda0ec4faaedcfb8212eb757 = $this->env->getExtension("native_profiler");
        $__internal_2ef9db336fcb3bc6b77610461a6a635bbd15fa06cda0ec4faaedcfb8212eb757->enter($__internal_2ef9db336fcb3bc6b77610461a6a635bbd15fa06cda0ec4faaedcfb8212eb757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:showNakazaniya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef9db336fcb3bc6b77610461a6a635bbd15fa06cda0ec4faaedcfb8212eb757->leave($__internal_2ef9db336fcb3bc6b77610461a6a635bbd15fa06cda0ec4faaedcfb8212eb757_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c8809489076a7abf00258db57522784018019a1b90080d46e041860af90d9e4a = $this->env->getExtension("native_profiler");
        $__internal_c8809489076a7abf00258db57522784018019a1b90080d46e041860af90d9e4a->enter($__internal_c8809489076a7abf00258db57522784018019a1b90080d46e041860af90d9e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["nakazaniya"]) ? $context["nakazaniya"] : $this->getContext($context, "nakazaniya")));
        foreach ($context['_seq'] as $context["_key"] => $context["nak"]) {
            // line 23
            echo "            <tr>
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
                <td><a href=\"/organization/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["nak"], "id", array()), "html", null, true);
            echo "/editNakazanie\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
\t\t\t\t<td><a href=\"/organization/deleteNakazanie/";
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
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_c8809489076a7abf00258db57522784018019a1b90080d46e041860af90d9e4a->leave($__internal_c8809489076a7abf00258db57522784018019a1b90080d46e041860af90d9e4a_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c96a4ba364cedf9635e30aafb2b076ed11e85da399af6a284daf51744c0310f9 = $this->env->getExtension("native_profiler");
        $__internal_c96a4ba364cedf9635e30aafb2b076ed11e85da399af6a284daf51744c0310f9->enter($__internal_c96a4ba364cedf9635e30aafb2b076ed11e85da399af6a284daf51744c0310f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "
";
        
        $__internal_c96a4ba364cedf9635e30aafb2b076ed11e85da399af6a284daf51744c0310f9->leave($__internal_c96a4ba364cedf9635e30aafb2b076ed11e85da399af6a284daf51744c0310f9_prof);

    }

    public function getTemplateName()
    {
        return ":organization:showNakazaniya.html.twig";
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
/* <div class="row">*/
/*     <h1>Выберите наказание:</h1>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <table class="table table-hover main table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <td>ФИО</td>*/
/*                 <td>Номер</td>*/
/*                 <td>Дата</td>*/
/*                 <td>Тип</td>*/
/*                 <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for nak in nakazaniya %}*/
/*             <tr>*/
/*                 <td>{{ nak.fio }}</td>*/
/*                 <td>{{ nak.nomer }}</td>*/
/*                 <td>{{ nak.date|date("d.m.Y") }}</td>*/
/*                 <td>{{ nak.type }}</td>*/
/*                 <td><a href="/organization/{{ nak.id }}/editNakazanie"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/* 				<td><a href="/organization/deleteNakazanie/{{ nak.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/*             </tr> */
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
