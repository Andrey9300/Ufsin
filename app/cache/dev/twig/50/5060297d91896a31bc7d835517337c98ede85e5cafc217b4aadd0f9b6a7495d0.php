<?php

/* organization/showNamesProverka.html.twig */
class __TwigTemplate_9e66c4dd0709abec64b56281b52f7969b8721345f31a856832804b94d8afa25b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/showNamesProverka.html.twig", 1);
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
        $__internal_399a9b8aed8cb22bebf252986caa7791a5e5f29aa8a30c9a1bbe45c78e3ec091 = $this->env->getExtension("native_profiler");
        $__internal_399a9b8aed8cb22bebf252986caa7791a5e5f29aa8a30c9a1bbe45c78e3ec091->enter($__internal_399a9b8aed8cb22bebf252986caa7791a5e5f29aa8a30c9a1bbe45c78e3ec091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/showNamesProverka.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_399a9b8aed8cb22bebf252986caa7791a5e5f29aa8a30c9a1bbe45c78e3ec091->leave($__internal_399a9b8aed8cb22bebf252986caa7791a5e5f29aa8a30c9a1bbe45c78e3ec091_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0367439a1f71052e424781416ccd569cd4727c02bd3851bf0c992909f14042c2 = $this->env->getExtension("native_profiler");
        $__internal_0367439a1f71052e424781416ccd569cd4727c02bd3851bf0c992909f14042c2->enter($__internal_0367439a1f71052e424781416ccd569cd4727c02bd3851bf0c992909f14042c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Выберите период:</h1>
</div>

<div class=\"row\" style=\"margin-bottom:50px\">
    <form class=\"has-validation-callback\" method=\"post\" action=\"/organization/";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "html", null, true);
        echo "/showNamesProverka\">
        <div class=\"col-md-3\">
            <label class=\"required\" for=\"proverka_date\">Дата от (дд.мм.гггг)</label>
            <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateOt\" id=\"proverka_date\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["dateOt"]) ? $context["dateOt"] : $this->getContext($context, "dateOt")), "html", null, true);
        echo "\">
        </div><div class=\"col-md-3\">
            <label class=\"required\" for=\"proverka_date\">Дата до (дд.мм.гггг)</label>
            <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateDo\" id=\"proverka_date\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["dateDo"]) ? $context["dateDo"] : $this->getContext($context, "dateDo")), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-3\" style=\"margin-top:25px\">
            <input type=\"submit\" class=\"btn btn-success\" value=\"Выбрать\">
        </div>  
    </form>    
</div>

<div class=\"row\">
    <table class=\"table table-hover main table-bordered\">
        <thead>
            <tr>
                <td>Номер</td>
                <td>Дата</td>
                <td>Кем выдано</td>
                <td>Нарушения</td>
                <td>Наказания</td>
                <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proverka"]) ? $context["proverka"] : $this->getContext($context, "proverka")));
        foreach ($context['_seq'] as $context["_key"] => $context["prov"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["prov"], "nomer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prov"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["prov"], "kem_vydano", array()), "html", null, true);
            echo "</td>
                <td><a href=\"/organization/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["prov"], "id", array()), "html", null, true);
            echo "/showNarusheniya\">Нарушения</a></td>
                <td><a href=\"/organization/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["prov"], "id", array()), "html", null, true);
            echo "/showNakazaniya\">Наказания</a></td>
                <td><a href=\"/organization/";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["prov"], "id", array()), "html", null, true);
            echo "/editProverka\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
\t\t\t\t<td><a href=\"/organization/deleteProverka/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["prov"], "id", array()), "html", null, true);
            echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
            </tr> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prov'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_0367439a1f71052e424781416ccd569cd4727c02bd3851bf0c992909f14042c2->leave($__internal_0367439a1f71052e424781416ccd569cd4727c02bd3851bf0c992909f14042c2_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_eb488b1867669651a27d45fdcb5c462b157d79d409ee0a682fd400c3b10e5b23 = $this->env->getExtension("native_profiler");
        $__internal_eb488b1867669651a27d45fdcb5c462b157d79d409ee0a682fd400c3b10e5b23->enter($__internal_eb488b1867669651a27d45fdcb5c462b157d79d409ee0a682fd400c3b10e5b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 56
        echo "
";
        
        $__internal_eb488b1867669651a27d45fdcb5c462b157d79d409ee0a682fd400c3b10e5b23->leave($__internal_eb488b1867669651a27d45fdcb5c462b157d79d409ee0a682fd400c3b10e5b23_prof);

    }

    public function getTemplateName()
    {
        return "organization/showNamesProverka.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 56,  137 => 55,  126 => 49,  117 => 46,  113 => 45,  109 => 44,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  90 => 39,  86 => 38,  61 => 16,  55 => 13,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Выберите период:</h1>*/
/* </div>*/
/* */
/* <div class="row" style="margin-bottom:50px">*/
/*     <form class="has-validation-callback" method="post" action="/organization/{{ organization }}/showNamesProverka">*/
/*         <div class="col-md-3">*/
/*             <label class="required" for="proverka_date">Дата от (дд.мм.гггг)</label>*/
/*             <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateOt" id="proverka_date" value="{{ dateOt }}">*/
/*         </div><div class="col-md-3">*/
/*             <label class="required" for="proverka_date">Дата до (дд.мм.гггг)</label>*/
/*             <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateDo" id="proverka_date" value="{{ dateDo }}">*/
/*         </div>*/
/*         <div class="col-md-3" style="margin-top:25px">*/
/*             <input type="submit" class="btn btn-success" value="Выбрать">*/
/*         </div>  */
/*     </form>    */
/* </div>*/
/* */
/* <div class="row">*/
/*     <table class="table table-hover main table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <td>Номер</td>*/
/*                 <td>Дата</td>*/
/*                 <td>Кем выдано</td>*/
/*                 <td>Нарушения</td>*/
/*                 <td>Наказания</td>*/
/*                 <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for prov in proverka %}*/
/*             <tr>*/
/*                 <td>{{ prov.nomer }}</td>*/
/*                 <td>{{prov.date|date("d.m.Y") }}</td>*/
/*                 <td>{{prov.kem_vydano }}</td>*/
/*                 <td><a href="/organization/{{ prov.id }}/showNarusheniya">Нарушения</a></td>*/
/*                 <td><a href="/organization/{{ prov.id }}/showNakazaniya">Наказания</a></td>*/
/*                 <td><a href="/organization/{{ prov.id }}/editProverka"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/* 				<td><a href="/organization/deleteProverka/{{ prov.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
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
