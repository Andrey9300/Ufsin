<?php

/* organization/showNamesIssledovanie.html.twig */
class __TwigTemplate_4202e0a58f8daf31ea4de36b75132888f80df7ee54a8e7cbdfda2279168fdc13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/showNamesIssledovanie.html.twig", 1);
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
        $__internal_f66eee759818dd542a8662d28d6c1f9173546def75558bc9e2a7b261b46878a3 = $this->env->getExtension("native_profiler");
        $__internal_f66eee759818dd542a8662d28d6c1f9173546def75558bc9e2a7b261b46878a3->enter($__internal_f66eee759818dd542a8662d28d6c1f9173546def75558bc9e2a7b261b46878a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/showNamesIssledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f66eee759818dd542a8662d28d6c1f9173546def75558bc9e2a7b261b46878a3->leave($__internal_f66eee759818dd542a8662d28d6c1f9173546def75558bc9e2a7b261b46878a3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5d79fc5719891f29474310ed6b94d8dbcd8227b1b27c4ffdf6a1dab1d502448b = $this->env->getExtension("native_profiler");
        $__internal_5d79fc5719891f29474310ed6b94d8dbcd8227b1b27c4ffdf6a1dab1d502448b->enter($__internal_5d79fc5719891f29474310ed6b94d8dbcd8227b1b27c4ffdf6a1dab1d502448b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Выберите период:</h1>
    </div>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"/issledovanie/";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "html", null, true);
        echo "/showNamesIssl\">
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
                <td>Всего</td>
                <td>Не соотв.</td>
                <td>Несоответствия</td>
                <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["issledovanie"]) ? $context["issledovanie"] : $this->getContext($context, "issledovanie")));
        foreach ($context['_seq'] as $context["_key"] => $context["issl"]) {
            // line 39
            echo "                <tr>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "nomer", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["issl"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "all_count", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "ne_sootv", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"/issledovanie/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "/showPokazatels\">Несоответствия</a></td>
                    <td><a href=\"/issledovanie/";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "/editIssledovanie\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"/issledovanie/deleteIssledovanie/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_5d79fc5719891f29474310ed6b94d8dbcd8227b1b27c4ffdf6a1dab1d502448b->leave($__internal_5d79fc5719891f29474310ed6b94d8dbcd8227b1b27c4ffdf6a1dab1d502448b_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7edcb9f09f0b0d730bf96b60ef9816f867cd6f298100a94958d185f90fd17082 = $this->env->getExtension("native_profiler");
        $__internal_7edcb9f09f0b0d730bf96b60ef9816f867cd6f298100a94958d185f90fd17082->enter($__internal_7edcb9f09f0b0d730bf96b60ef9816f867cd6f298100a94958d185f90fd17082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 56
        echo "
";
        
        $__internal_7edcb9f09f0b0d730bf96b60ef9816f867cd6f298100a94958d185f90fd17082->leave($__internal_7edcb9f09f0b0d730bf96b60ef9816f867cd6f298100a94958d185f90fd17082_prof);

    }

    public function getTemplateName()
    {
        return "organization/showNamesIssledovanie.html.twig";
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
/*     <div class="row">*/
/*         <h1>Выберите период:</h1>*/
/*     </div>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="/issledovanie/{{ organization }}/showNamesIssl">*/
/*             <div class="col-md-3">*/
/*                 <label class="required" for="proverka_date">Дата от (дд.мм.гггг)</label>*/
/*                 <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateOt" id="proverka_date" value="{{ dateOt }}">*/
/*             </div><div class="col-md-3">*/
/*                 <label class="required" for="proverka_date">Дата до (дд.мм.гггг)</label>*/
/*                 <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateDo" id="proverka_date" value="{{ dateDo }}">*/
/*             </div>*/
/*             <div class="col-md-3" style="margin-top:25px">*/
/*                 <input type="submit" class="btn btn-success" value="Выбрать">*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <table class="table table-hover main table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <td>Номер</td>*/
/*                 <td>Дата</td>*/
/*                 <td>Всего</td>*/
/*                 <td>Не соотв.</td>*/
/*                 <td>Несоответствия</td>*/
/*                 <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for issl in issledovanie %}*/
/*                 <tr>*/
/*                     <td>{{ issl.nomer }}</td>*/
/*                     <td>{{ issl.date|date("d.m.Y") }}</td>*/
/*                     <td>{{ issl.all_count}}</td>*/
/*                     <td>{{ issl.ne_sootv}}</td>*/
/*                     <td><a href="/issledovanie/{{ issl.id }}/showPokazatels">Несоответствия</a></td>*/
/*                     <td><a href="/issledovanie/{{ issl.id }}/editIssledovanie"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="/issledovanie/deleteIssledovanie/{{ issl.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
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
