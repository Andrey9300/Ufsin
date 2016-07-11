<?php

/* fkuz/showFilial.html.twig */
class __TwigTemplate_2e9afd627e26a220ba33adabdd4e9550851c41525e691a58015298c36357b6c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/showFilial.html.twig", 1);
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
        $__internal_757e4a5522439ce79cc7bb34778bb8555f42ecbc35abe04c464158e3bfeeaf56 = $this->env->getExtension("native_profiler");
        $__internal_757e4a5522439ce79cc7bb34778bb8555f42ecbc35abe04c464158e3bfeeaf56->enter($__internal_757e4a5522439ce79cc7bb34778bb8555f42ecbc35abe04c464158e3bfeeaf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/showFilial.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_757e4a5522439ce79cc7bb34778bb8555f42ecbc35abe04c464158e3bfeeaf56->leave($__internal_757e4a5522439ce79cc7bb34778bb8555f42ecbc35abe04c464158e3bfeeaf56_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1864799d67eacb6030906341d5efbcb25b3294d4755f81d08ec8fd79dfef749a = $this->env->getExtension("native_profiler");
        $__internal_1864799d67eacb6030906341d5efbcb25b3294d4755f81d08ec8fd79dfef749a->enter($__internal_1864799d67eacb6030906341d5efbcb25b3294d4755f81d08ec8fd79dfef749a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\"> 
    <h1>«";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "nameShort", array()), "html", null, true);
        echo "»</h1>
    <div class=\"col-md-12\">
        <div class=\"row\">    
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<table class=\"table table-hover main\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Фактический адрес:</td>
\t\t\t\t\t\t\t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "address", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Руководитель:</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rukovoditel"]) ? $context["rukovoditel"] : $this->getContext($context, "rukovoditel")));
        foreach ($context['_seq'] as $context["_key"] => $context["ruk"]) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruk"], "fio", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruk"], "zvanie", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 24
        if ((isset($context["rukZams"]) ? $context["rukZams"] : $this->getContext($context, "rukZams"))) {
            // line 25
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Замы:</td>
\t\t\t\t\t\t\t<td>           
\t\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rukZams"]) ? $context["rukZams"] : $this->getContext($context, "rukZams")));
            foreach ($context['_seq'] as $context["_key"] => $context["ruk_zam"]) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t<div>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ruk_zam"], "fio", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ruk_zam"], "zvanie", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ruk_zam"], "oblastDeaytelnosti", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruk_zam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
        </div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
        // line 41
        if ((isset($context["proverkaNakazaniyaFkuz"]) ? $context["proverkaNakazaniyaFkuz"] : $this->getContext($context, "proverkaNakazaniyaFkuz"))) {
            // line 42
            echo "\t\t\t\t\t<hr/>
\t\t\t\t\t<h4 class=\"withDates\">Привлеченные к наказанию</h4>

\t\t\t\t\t<table class=\"table table-hover main narusheniyaOrganization\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>ФИО</td>
\t\t\t\t\t\t\t<td>Номер</td>
\t\t\t\t\t\t\t<td>Дата</td>
\t\t\t\t\t\t\t<td>Тип наказания</td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proverkaNakazaniyaFkuz"]) ? $context["proverkaNakazaniyaFkuz"] : $this->getContext($context, "proverkaNakazaniyaFkuz")));
            foreach ($context['_seq'] as $context["_key"] => $context["proverka"]) {
                // line 58
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "fio", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "nomer", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proverka"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["proverka"], "type", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_nakazanie_fkuz", array("id" => $this->getAttribute($context["proverka"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_nakazanie_fkuz", array("id" => $this->getAttribute($context["proverka"], "id", array()))), "html", null, true);
                echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proverka'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 70
        echo "\t\t\t</div>
\t\t</div>

        <div class=\"row\" style=\"margin-bottom: 50px\">
            <hr/>
            <ul class=\"nav navbar-nav add\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Исследования<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_issledovanie_fkuz", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\">Добавить лабораторное исследование</a></li>
                        <li><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_names_issl_fkuz", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\">Редактировать лабораторное исследование</a></li>
                    </ul>
                </li>
\t\t\t\t<li><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_proverka_fkuz", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\">Добавить Проверку</a></li>
                <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_fkuz", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\">Редактировать филиал</a></li>
                <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_fkuz", array("id" => $this->getAttribute((isset($context["fkuz"]) ? $context["fkuz"] : $this->getContext($context, "fkuz")), "id", array()))), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить филиал</a></li>
            </ul>
        </div>
    </div>
</div>


";
        
        $__internal_1864799d67eacb6030906341d5efbcb25b3294d4755f81d08ec8fd79dfef749a->leave($__internal_1864799d67eacb6030906341d5efbcb25b3294d4755f81d08ec8fd79dfef749a_prof);

    }

    // line 94
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fabb986c3681f78477c7b42121fd4df26e3f3165e49818a1888bf38c8d1137cd = $this->env->getExtension("native_profiler");
        $__internal_fabb986c3681f78477c7b42121fd4df26e3f3165e49818a1888bf38c8d1137cd->enter($__internal_fabb986c3681f78477c7b42121fd4df26e3f3165e49818a1888bf38c8d1137cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 95
        echo "
";
        
        $__internal_fabb986c3681f78477c7b42121fd4df26e3f3165e49818a1888bf38c8d1137cd->leave($__internal_fabb986c3681f78477c7b42121fd4df26e3f3165e49818a1888bf38c8d1137cd_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/showFilial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 95,  225 => 94,  210 => 85,  206 => 84,  202 => 83,  196 => 80,  192 => 79,  181 => 70,  176 => 67,  167 => 64,  163 => 63,  159 => 62,  155 => 61,  151 => 60,  147 => 59,  144 => 58,  140 => 57,  123 => 42,  121 => 41,  112 => 34,  107 => 31,  94 => 29,  90 => 28,  85 => 25,  83 => 24,  79 => 22,  68 => 20,  64 => 19,  56 => 14,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row"> */
/*     <h1>«{{ fkuz.nameShort }}»</h1>*/
/*     <div class="col-md-12">*/
/*         <div class="row">    */
/* 			<div class="col-md-6">*/
/* 				<table class="table table-hover main">*/
/* 					<tbody>*/
/* 						<tr>*/
/* 							<td>Фактический адрес:</td>*/
/* 							<td>{{ fkuz.address }}</td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Руководитель:</td>*/
/* 							<td>*/
/* 								{% for ruk in rukovoditel %}*/
/* 									{{ ruk.fio}}, {{ ruk.zvanie}}*/
/* 								{% endfor %}*/
/* 							</td>*/
/* 						</tr>*/
/* 						{% if rukZams %}*/
/* 						<tr>*/
/* 							<td>Замы:</td>*/
/* 							<td>           */
/* 								{% for ruk_zam in rukZams %}*/
/* 									<div>{{ ruk_zam.fio}}, {{ ruk_zam.zvanie}}, {{ ruk_zam.oblastDeaytelnosti}}</div>*/
/* 								{% endfor %}*/
/* 							</td>*/
/* 						</tr>*/
/* 						{% endif %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/*         </div>*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				{% if proverkaNakazaniyaFkuz %}*/
/* 					<hr/>*/
/* 					<h4 class="withDates">Привлеченные к наказанию</h4>*/
/* */
/* 					<table class="table table-hover main narusheniyaOrganization">*/
/* 						<thead>*/
/* 						<tr>*/
/* 							<td>ФИО</td>*/
/* 							<td>Номер</td>*/
/* 							<td>Дата</td>*/
/* 							<td>Тип наказания</td>*/
/* 							<td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/* 							<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/* 						</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 						{% for proverka in proverkaNakazaniyaFkuz %}*/
/* 							<tr>*/
/* 								<td>{{ proverka.fio }}</td>*/
/* 								<td>{{ proverka.nomer }}</td>*/
/* 								<td>{{ proverka.date|date("d.m.Y") }}</td>*/
/* 								<td>{{ proverka.type }}</td>*/
/* 								<td><a href="{{ path('edit_nakazanie_fkuz', {'id': proverka.id}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/* 								<td><a href="{{ path('delete_nakazanie_fkuz', {'id': proverka.id}) }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 						</tbody>*/
/* 					</table>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* */
/*         <div class="row" style="margin-bottom: 50px">*/
/*             <hr/>*/
/*             <ul class="nav navbar-nav add">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Исследования<span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path('create_issledovanie_fkuz', {'id': fkuz.id}) }}">Добавить лабораторное исследование</a></li>*/
/*                         <li><a href="{{ path('show_names_issl_fkuz', {'id': fkuz.id}) }}">Редактировать лабораторное исследование</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/* 				<li><a href="{{ path('create_proverka_fkuz', {'id': fkuz.id}) }}">Добавить Проверку</a></li>*/
/*                 <li><a href="{{ path('edit_fkuz', {'id': fkuz.id}) }}">Редактировать филиал</a></li>*/
/*                 <li><a href="{{ path('delete_fkuz', {'id': fkuz.id}) }}" class="delete_entity">Удалить филиал</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
