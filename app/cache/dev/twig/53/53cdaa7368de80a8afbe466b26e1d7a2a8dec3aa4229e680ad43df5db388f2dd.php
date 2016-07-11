<?php

/* fkuz/showNamesIssledovanieFkuz.html.twig */
class __TwigTemplate_bdd867e2c943b0f95f0f0bce2149f858d7dee49ffe69f1b192af6d209e97f93f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/showNamesIssledovanieFkuz.html.twig", 1);
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
        $__internal_874684f94e4c92b7ad8e0fb00e1f4f4bcd3429537e011abbd1ede3052b90b610 = $this->env->getExtension("native_profiler");
        $__internal_874684f94e4c92b7ad8e0fb00e1f4f4bcd3429537e011abbd1ede3052b90b610->enter($__internal_874684f94e4c92b7ad8e0fb00e1f4f4bcd3429537e011abbd1ede3052b90b610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/showNamesIssledovanieFkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_874684f94e4c92b7ad8e0fb00e1f4f4bcd3429537e011abbd1ede3052b90b610->leave($__internal_874684f94e4c92b7ad8e0fb00e1f4f4bcd3429537e011abbd1ede3052b90b610_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_407e9938c94b9c34aca2a235fdd9d36d70328e9829bc7c0e801a1813e5639b60 = $this->env->getExtension("native_profiler");
        $__internal_407e9938c94b9c34aca2a235fdd9d36d70328e9829bc7c0e801a1813e5639b60->enter($__internal_407e9938c94b9c34aca2a235fdd9d36d70328e9829bc7c0e801a1813e5639b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Выберите период:</h1>
    </div>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"/fkuz/showNamesIssl/";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "html", null, true);
        echo "\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["issledovanieFkuz"]) ? $context["issledovanieFkuz"] : $this->getContext($context, "issledovanieFkuz")));
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
                    <td><a href=\"/fkuz/showPokazatels/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "\">Несоответствия</a></td>
                    <td><a href=\"/fkuz/editIssledovanie/";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"/fkuz/deleteIssledovanie/";
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
        
        $__internal_407e9938c94b9c34aca2a235fdd9d36d70328e9829bc7c0e801a1813e5639b60->leave($__internal_407e9938c94b9c34aca2a235fdd9d36d70328e9829bc7c0e801a1813e5639b60_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0488b940940451b9063afe9e7a272acccfa93e49883173db65490251041656b1 = $this->env->getExtension("native_profiler");
        $__internal_0488b940940451b9063afe9e7a272acccfa93e49883173db65490251041656b1->enter($__internal_0488b940940451b9063afe9e7a272acccfa93e49883173db65490251041656b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 56
        echo "
";
        
        $__internal_0488b940940451b9063afe9e7a272acccfa93e49883173db65490251041656b1->leave($__internal_0488b940940451b9063afe9e7a272acccfa93e49883173db65490251041656b1_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/showNamesIssledovanieFkuz.html.twig";
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
/*         <form class="has-validation-callback" method="post" action="/fkuz/showNamesIssl/{{ fkuz }}">*/
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
/*             {% for issl in issledovanieFkuz %}*/
/*                 <tr>*/
/*                     <td>{{ issl.nomer }}</td>*/
/*                     <td>{{ issl.date|date("d.m.Y") }}</td>*/
/*                     <td>{{ issl.all_count}}</td>*/
/*                     <td>{{ issl.ne_sootv}}</td>*/
/*                     <td><a href="/fkuz/showPokazatels/{{ issl.id }}">Несоответствия</a></td>*/
/*                     <td><a href="/fkuz/editIssledovanie/{{ issl.id }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="/fkuz/deleteIssledovanie/{{ issl.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
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
