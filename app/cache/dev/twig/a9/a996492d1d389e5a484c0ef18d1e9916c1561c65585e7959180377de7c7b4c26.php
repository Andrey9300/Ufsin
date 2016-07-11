<?php

/* zabolevaniya/showLichnyiSostavs.html.twig */
class __TwigTemplate_1b50b5d27e3cff65c033f4ff6702948b90415b2ccfa88bf372ddca902cf89ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "zabolevaniya/showLichnyiSostavs.html.twig", 1);
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
        $__internal_9d0ece380da95c25897b97b71b1559c3f7004c85269151fc0eb65f86ebd68ada = $this->env->getExtension("native_profiler");
        $__internal_9d0ece380da95c25897b97b71b1559c3f7004c85269151fc0eb65f86ebd68ada->enter($__internal_9d0ece380da95c25897b97b71b1559c3f7004c85269151fc0eb65f86ebd68ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "zabolevaniya/showLichnyiSostavs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d0ece380da95c25897b97b71b1559c3f7004c85269151fc0eb65f86ebd68ada->leave($__internal_9d0ece380da95c25897b97b71b1559c3f7004c85269151fc0eb65f86ebd68ada_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_18b2c7e3f70bfea8c6b63633a3364459b69148dabd45f3bb130c87cb89db5642 = $this->env->getExtension("native_profiler");
        $__internal_18b2c7e3f70bfea8c6b63633a3364459b69148dabd45f3bb130c87cb89db5642->enter($__internal_18b2c7e3f70bfea8c6b63633a3364459b69148dabd45f3bb130c87cb89db5642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Выберите заболевшего личного состава:</h1>
</div>

<div class=\"row\" style=\"margin-bottom:50px\">
    <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("show_lichnyi_sostavs");
        echo "\" >
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
        echo $this->env->getExtension('routing')->getPath("create_zabolevanie_lichnyi");
        echo "\" style=\"font-size:18px\">Добавить нового заболевшего</a>
        </div>
    </form>

    ";
        // line 26
        if (twig_test_empty((isset($context["lichnyiSostavs"]) ? $context["lichnyiSostavs"] : $this->getContext($context, "lichnyiSostavs")))) {
            // line 27
            echo "        <p>Нет заболевших в данный период</p>
    ";
        } else {
            // line 29
            echo "
        <table class=\"table table-hover main table-bordered\">
            <thead>
                <tr>
                    <td>ФИО</td>
                    <td>Дата рождения</td>
                    <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                    <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
                </tr>
            </thead>
            <tbody>
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lichnyiSostavs"]) ? $context["lichnyiSostavs"] : $this->getContext($context, "lichnyiSostavs")));
            foreach ($context['_seq'] as $context["_key"] => $context["lichnyiSostav"]) {
                // line 41
                echo "                <tr>
                    <td><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_card_lichnyi", array("id" => $this->getAttribute($context["lichnyiSostav"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lichnyiSostav"], "fio", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lichnyiSostav"], "date_birthday", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_lichnyi_sostav", array("id" => $this->getAttribute($context["lichnyiSostav"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_lichnyi_sostav", array("id" => $this->getAttribute($context["lichnyiSostav"], "id", array()))), "html", null, true);
                echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lichnyiSostav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </tbody>
        </table>
    ";
        }
        // line 51
        echo "</div>

";
        
        $__internal_18b2c7e3f70bfea8c6b63633a3364459b69148dabd45f3bb130c87cb89db5642->leave($__internal_18b2c7e3f70bfea8c6b63633a3364459b69148dabd45f3bb130c87cb89db5642_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d1333788be48c830e8c30b691c16550c167871a368966ad59de727f282cb7f7b = $this->env->getExtension("native_profiler");
        $__internal_d1333788be48c830e8c30b691c16550c167871a368966ad59de727f282cb7f7b->enter($__internal_d1333788be48c830e8c30b691c16550c167871a368966ad59de727f282cb7f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 56
        echo "
";
        
        $__internal_d1333788be48c830e8c30b691c16550c167871a368966ad59de727f282cb7f7b->leave($__internal_d1333788be48c830e8c30b691c16550c167871a368966ad59de727f282cb7f7b_prof);

    }

    public function getTemplateName()
    {
        return "zabolevaniya/showLichnyiSostavs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 56,  140 => 55,  131 => 51,  126 => 48,  117 => 45,  113 => 44,  109 => 43,  103 => 42,  100 => 41,  96 => 40,  83 => 29,  79 => 27,  77 => 26,  70 => 22,  61 => 16,  55 => 13,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Выберите заболевшего личного состава:</h1>*/
/* </div>*/
/* */
/* <div class="row" style="margin-bottom:50px">*/
/*     <form class="has-validation-callback" method="post" action="{{ path('show_lichnyi_sostavs') }}" >*/
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
/*             <a href="{{ path('create_zabolevanie_lichnyi') }}" style="font-size:18px">Добавить нового заболевшего</a>*/
/*         </div>*/
/*     </form>*/
/* */
/*     {% if lichnyiSostavs is empty%}*/
/*         <p>Нет заболевших в данный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover main table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td>ФИО</td>*/
/*                     <td>Дата рождения</td>*/
/*                     <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                     <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for lichnyiSostav in lichnyiSostavs %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('show_card_lichnyi', {'id': lichnyiSostav.id}) }}">{{ lichnyiSostav.fio }}</a></td>*/
/*                     <td>{{lichnyiSostav.date_birthday|date("d.m.Y") }}</td>*/
/*                     <td><a href="{{ path('edit_lichnyi_sostav', {'id': lichnyiSostav.id}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="{{ path('delete_lichnyi_sostav', {'id': lichnyiSostav.id}) }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
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
