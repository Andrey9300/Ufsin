<?php

/* fkuz/proverkaNakazaniyaFkuzAll.html.twig */
class __TwigTemplate_48a86fdb523b7777d19387ea345bde59fd1275776925431345dc72d59e2c80c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/proverkaNakazaniyaFkuzAll.html.twig", 1);
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
        $__internal_5960bb723153542497cab9f05139ccb0644014593f070820a31d0dcced5dc3a8 = $this->env->getExtension("native_profiler");
        $__internal_5960bb723153542497cab9f05139ccb0644014593f070820a31d0dcced5dc3a8->enter($__internal_5960bb723153542497cab9f05139ccb0644014593f070820a31d0dcced5dc3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/proverkaNakazaniyaFkuzAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5960bb723153542497cab9f05139ccb0644014593f070820a31d0dcced5dc3a8->leave($__internal_5960bb723153542497cab9f05139ccb0644014593f070820a31d0dcced5dc3a8_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f17daf83cff506984dd52a34f4946856e8e3483048d37257b8ca6cc1ebe7088d = $this->env->getExtension("native_profiler");
        $__internal_f17daf83cff506984dd52a34f4946856e8e3483048d37257b8ca6cc1ebe7088d->enter($__internal_f17daf83cff506984dd52a34f4946856e8e3483048d37257b8ca6cc1ebe7088d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h3>Привлеченные к наказанию в учреждении «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "nameShort", array()), "html", null, true);
        echo "»</h3>

        <div class=\"row\" style=\"margin-bottom:50px\">
            <form class=\"has-validation-callback\" method=\"post\" action=\"/fkuz/proverkaNakazaniyaFkuz/";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()), "html", null, true);
        echo "\">
                <div class=\"col-md-3\">
                    <label class=\"required\" for=\"proverka_date\">Дата от (дд.мм.гггг)</label>
                    <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateOt\" id=\"proverka_date\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["dateOt"]) ? $context["dateOt"] : $this->getContext($context, "dateOt")), "html", null, true);
        echo "\">
                </div><div class=\"col-md-3\">
                    <label class=\"required\" for=\"proverka_date\">Дата до (дд.мм.гггг)</label>
                    <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateDo\" id=\"proverka_date\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["dateDo"]) ? $context["dateDo"] : $this->getContext($context, "dateDo")), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-3\" style=\"margin-top:25px\">
                    <input type=\"submit\" class=\"btn btn-success\" value=\"Выбрать\">
                </div>
            </form>
        </div>

        <table class=\"table table-hover main narusheniyaOrganization\">
            <thead>
            <tr>
                <td>Номер</td>
                <td>ФИО</td>
                <td>Дата</td>
                <td>Должность</td>
                <td>Звание</td>
                <td>Тип наказания</td>
                <td>Вид наказания</td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proverkaNakazaniyaFkuz"]) ? $context["proverkaNakazaniyaFkuz"] : $this->getContext($context, "proverkaNakazaniyaFkuz")));
        foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
            // line 37
            echo "                <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "nomer", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "fio", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverka"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "dolgnost", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "zvanie", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "type", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "podchinennost", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_f17daf83cff506984dd52a34f4946856e8e3483048d37257b8ca6cc1ebe7088d->leave($__internal_f17daf83cff506984dd52a34f4946856e8e3483048d37257b8ca6cc1ebe7088d_prof);

    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0c9edc256a48b6c452aaf433d64afb4affbc76d4a14ba8491e1765dbeb71d6d5 = $this->env->getExtension("native_profiler");
        $__internal_0c9edc256a48b6c452aaf433d64afb4affbc76d4a14ba8491e1765dbeb71d6d5->enter($__internal_0c9edc256a48b6c452aaf433d64afb4affbc76d4a14ba8491e1765dbeb71d6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 54
        echo "
";
        
        $__internal_0c9edc256a48b6c452aaf433d64afb4affbc76d4a14ba8491e1765dbeb71d6d5->leave($__internal_0c9edc256a48b6c452aaf433d64afb4affbc76d4a14ba8491e1765dbeb71d6d5_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/proverkaNakazaniyaFkuzAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 54,  138 => 53,  127 => 47,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  91 => 37,  87 => 36,  63 => 15,  57 => 12,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h3>Привлеченные к наказанию в учреждении «{{ fkuz.nameShort }}»</h3>*/
/* */
/*         <div class="row" style="margin-bottom:50px">*/
/*             <form class="has-validation-callback" method="post" action="/fkuz/proverkaNakazaniyaFkuz/{{ fkuz.id }}">*/
/*                 <div class="col-md-3">*/
/*                     <label class="required" for="proverka_date">Дата от (дд.мм.гггг)</label>*/
/*                     <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateOt" id="proverka_date" value="{{ dateOt }}">*/
/*                 </div><div class="col-md-3">*/
/*                     <label class="required" for="proverka_date">Дата до (дд.мм.гггг)</label>*/
/*                     <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateDo" id="proverka_date" value="{{ dateDo }}">*/
/*                 </div>*/
/*                 <div class="col-md-3" style="margin-top:25px">*/
/*                     <input type="submit" class="btn btn-success" value="Выбрать">*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <table class="table table-hover main narusheniyaOrganization">*/
/*             <thead>*/
/*             <tr>*/
/*                 <td>Номер</td>*/
/*                 <td>ФИО</td>*/
/*                 <td>Дата</td>*/
/*                 <td>Должность</td>*/
/*                 <td>Звание</td>*/
/*                 <td>Тип наказания</td>*/
/*                 <td>Вид наказания</td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for proverka in proverkaNakazaniyaFkuz %}*/
/*                 <tr>*/
/*                     <td>{{ proverka.nomer }}</td>*/
/*                     <td>{{ proverka.fio }}</td>*/
/*                     <td>{{ proverka.date|date("d.m.Y") }}</td>*/
/*                     <td>{{ proverka.dolgnost }}</td>*/
/*                     <td>{{ proverka.zvanie }}</td>*/
/*                     <td>{{ proverka.type }}</td>*/
/*                     <td>{{ proverka.podchinennost }}</td>*/
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
