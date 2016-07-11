<?php

/* zabolevaniya/showOchags.html.twig */
class __TwigTemplate_9354de5cd024a70ec5267ea73a462c5034aff2f632685645adb622cacf68d7c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "zabolevaniya/showOchags.html.twig", 1);
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
        $__internal_9fb127b5c7e756a37e236e3f5063762f9a68fb85f9475691c5c412808812bf72 = $this->env->getExtension("native_profiler");
        $__internal_9fb127b5c7e756a37e236e3f5063762f9a68fb85f9475691c5c412808812bf72->enter($__internal_9fb127b5c7e756a37e236e3f5063762f9a68fb85f9475691c5c412808812bf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "zabolevaniya/showOchags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fb127b5c7e756a37e236e3f5063762f9a68fb85f9475691c5c412808812bf72->leave($__internal_9fb127b5c7e756a37e236e3f5063762f9a68fb85f9475691c5c412808812bf72_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8b5ceb266febeda74b9b80e3be9c2943ef527df45ab8c47a07ccf49c0ccb6886 = $this->env->getExtension("native_profiler");
        $__internal_8b5ceb266febeda74b9b80e3be9c2943ef527df45ab8c47a07ccf49c0ccb6886->enter($__internal_8b5ceb266febeda74b9b80e3be9c2943ef527df45ab8c47a07ccf49c0ccb6886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Выберите очаг:</h1>
</div>

<div class=\"row\" style=\"margin-bottom:50px\">
    <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("show_ochags");
        echo "/zabolevaniya/showOchags\" >
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
        <div class=\"col-md-3\" style=\"margin-top:45px\">
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("create_zabolevanie_ochag");
        echo "\" style=\"font-size:18px\">Добавить очаг</a>
        </div>    
    </form>

    ";
        // line 26
        if (twig_test_empty((isset($context["ochags"]) ? $context["ochags"] : $this->getContext($context, "ochags")))) {
            // line 27
            echo "        <p>Нет очагов в данный период</p>
    ";
        } else {
            // line 29
            echo "
        <table class=\"table table-hover main table-bordered\">
            <thead>
                <tr>
                    <td>Название</td>
                    <td>Место</td>
                    <td>Дата </td>
                    <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                    <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
                </tr>
            </thead>
            <tbody>
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ochags"]) ? $context["ochags"] : $this->getContext($context, "ochags")));
            foreach ($context['_seq'] as $context["_key"] => $context["ochag"]) {
                // line 42
                echo "                <tr>
                    <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_ochags", array("id" => $this->getAttribute($context["ochag"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ochag"], "name", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["ochag"], "place", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ochag"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_ochag", array("id" => $this->getAttribute($context["ochag"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_ochag", array("id" => $this->getAttribute($context["ochag"], "id", array()))), "html", null, true);
                echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ochag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </tbody>
        </table>
    ";
        }
        // line 53
        echo "</div>

";
        
        $__internal_8b5ceb266febeda74b9b80e3be9c2943ef527df45ab8c47a07ccf49c0ccb6886->leave($__internal_8b5ceb266febeda74b9b80e3be9c2943ef527df45ab8c47a07ccf49c0ccb6886_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_adb1e64aed4642597f6a93d3703208885c8343c523a46303ca65ef5e36cbd6a1 = $this->env->getExtension("native_profiler");
        $__internal_adb1e64aed4642597f6a93d3703208885c8343c523a46303ca65ef5e36cbd6a1->enter($__internal_adb1e64aed4642597f6a93d3703208885c8343c523a46303ca65ef5e36cbd6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 58
        echo "
";
        
        $__internal_adb1e64aed4642597f6a93d3703208885c8343c523a46303ca65ef5e36cbd6a1->leave($__internal_adb1e64aed4642597f6a93d3703208885c8343c523a46303ca65ef5e36cbd6a1_prof);

    }

    public function getTemplateName()
    {
        return "zabolevaniya/showOchags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  145 => 57,  136 => 53,  131 => 50,  122 => 47,  118 => 46,  114 => 45,  110 => 44,  104 => 43,  101 => 42,  97 => 41,  83 => 29,  79 => 27,  77 => 26,  70 => 22,  61 => 16,  55 => 13,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Выберите очаг:</h1>*/
/* </div>*/
/* */
/* <div class="row" style="margin-bottom:50px">*/
/*     <form class="has-validation-callback" method="post" action="{{ path('show_ochags') }}/zabolevaniya/showOchags" >*/
/*         <div class="col-md-3">*/
/*             <label class="required" for="proverka_date">Дата от (дд.мм.гггг)</label>*/
/*             <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateOt" id="proverka_date" value="{{ dateOt }}">*/
/*         </div><div class="col-md-3">*/
/*             <label class="required" for="proverka_date">Дата до (дд.мм.гггг)</label>*/
/*             <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateDo" id="proverka_date" value="{{ dateDo }}">*/
/*         </div>*/
/*         <div class="col-md-3" style="margin-top:25px">*/
/*             <input type="submit" class="btn btn-success" value="Выбрать">*/
/*         </div>*/
/*         <div class="col-md-3" style="margin-top:45px">*/
/*             <a href="{{ path('create_zabolevanie_ochag') }}" style="font-size:18px">Добавить очаг</a>*/
/*         </div>    */
/*     </form>*/
/* */
/*     {% if ochags is empty%}*/
/*         <p>Нет очагов в данный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover main table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td>Название</td>*/
/*                     <td>Место</td>*/
/*                     <td>Дата </td>*/
/*                     <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                     <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for ochag in ochags %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('show_ochags', {'id': ochag.id}) }}">{{ ochag.name }}</a></td>*/
/*                     <td>{{ ochag.place }}</td>*/
/*                     <td>{{ ochag.date|date("d.m.Y") }}</td>*/
/*                     <td><a href="{{ path('edit_ochag', {'id': ochag.id}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="{{ path('delete_ochag', {'id': ochag.id}) }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
