<?php

/* :dogovor:showNamesDogovor.html.twig */
class __TwigTemplate_f9b294575432c449dcd706d3b3cf99b2fd943e93613c408f0800369114a115f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogovor:showNamesDogovor.html.twig", 1);
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
        $__internal_c0cb5841d07b79e8a75cf28987c3b25bd4c0f1da3db458e042093255ab17881d = $this->env->getExtension("native_profiler");
        $__internal_c0cb5841d07b79e8a75cf28987c3b25bd4c0f1da3db458e042093255ab17881d->enter($__internal_c0cb5841d07b79e8a75cf28987c3b25bd4c0f1da3db458e042093255ab17881d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogovor:showNamesDogovor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0cb5841d07b79e8a75cf28987c3b25bd4c0f1da3db458e042093255ab17881d->leave($__internal_c0cb5841d07b79e8a75cf28987c3b25bd4c0f1da3db458e042093255ab17881d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c4232599f0761f2d1a929bb20b5ba1634df986392e0bbf8221e8e71136eaaa6a = $this->env->getExtension("native_profiler");
        $__internal_c4232599f0761f2d1a929bb20b5ba1634df986392e0bbf8221e8e71136eaaa6a->enter($__internal_c4232599f0761f2d1a929bb20b5ba1634df986392e0bbf8221e8e71136eaaa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Выберите договор:</h1>
</div>

<div class=\"row\" style=\"margin-bottom:50px\">
    <form class=\"has-validation-callback\" method=\"post\" action=\"/dogovor/";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "html", null, true);
        echo "/showNamesDogovor\">
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
                <td>Организация посредник</td>
                <td>Сумма</td>
                <td>Тип договора</td>
                <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dogovor"]) ? $context["dogovor"] : $this->getContext($context, "dogovor")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nomer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "organization_posrednik", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "summa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "name", array()), "html", null, true);
            echo "</td>
                <td><a href=\"/dogovor/editDogovor/";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
\t\t\t\t<td><a href=\"/dogovor/deleteDogovor/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
            </tr> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_c4232599f0761f2d1a929bb20b5ba1634df986392e0bbf8221e8e71136eaaa6a->leave($__internal_c4232599f0761f2d1a929bb20b5ba1634df986392e0bbf8221e8e71136eaaa6a_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7cf25975848bf5c2fa7349a6de05be856db566382f0f49960cee7891bfbd476c = $this->env->getExtension("native_profiler");
        $__internal_7cf25975848bf5c2fa7349a6de05be856db566382f0f49960cee7891bfbd476c->enter($__internal_7cf25975848bf5c2fa7349a6de05be856db566382f0f49960cee7891bfbd476c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 56
        echo "
";
        
        $__internal_7cf25975848bf5c2fa7349a6de05be856db566382f0f49960cee7891bfbd476c->leave($__internal_7cf25975848bf5c2fa7349a6de05be856db566382f0f49960cee7891bfbd476c_prof);

    }

    public function getTemplateName()
    {
        return ":dogovor:showNamesDogovor.html.twig";
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
/*     <h1>Выберите договор:</h1>*/
/* </div>*/
/* */
/* <div class="row" style="margin-bottom:50px">*/
/*     <form class="has-validation-callback" method="post" action="/dogovor/{{ organization }}/showNamesDogovor">*/
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
/*                 <td>Организация посредник</td>*/
/*                 <td>Сумма</td>*/
/*                 <td>Тип договора</td>*/
/*                 <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for d in dogovor %}*/
/*             <tr>*/
/*                 <td>{{ d.nomer }}</td>*/
/*                 <td>{{d.date|date("d.m.Y") }}</td>*/
/*                 <td>{{d.organization_posrednik }}</td>*/
/*                 <td>{{d.summa }}</td>*/
/*                 <td>{{d.name }}</td>*/
/*                 <td><a href="/dogovor/editDogovor/{{ d.id }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/* 				<td><a href="/dogovor/deleteDogovor/{{ d.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
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
