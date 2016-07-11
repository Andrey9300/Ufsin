<?php

/* fkuz/showPokazatelsIssledovaniya.html.twig */
class __TwigTemplate_f3e00279f6bd1d58215785737bab62193e4f4d7c2b3598b42f026519303bc90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/showPokazatelsIssledovaniya.html.twig", 1);
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
        $__internal_e2dfce90f1d6242e2906f0d7192df9dd0d8dd79562b0848bbd0df85fa34b1eae = $this->env->getExtension("native_profiler");
        $__internal_e2dfce90f1d6242e2906f0d7192df9dd0d8dd79562b0848bbd0df85fa34b1eae->enter($__internal_e2dfce90f1d6242e2906f0d7192df9dd0d8dd79562b0848bbd0df85fa34b1eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/showPokazatelsIssledovaniya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2dfce90f1d6242e2906f0d7192df9dd0d8dd79562b0848bbd0df85fa34b1eae->leave($__internal_e2dfce90f1d6242e2906f0d7192df9dd0d8dd79562b0848bbd0df85fa34b1eae_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_9a27f25e0cd1bb0dabdffc78b70357f48f48c470fe5383535a4f21b715175d4c = $this->env->getExtension("native_profiler");
        $__internal_9a27f25e0cd1bb0dabdffc78b70357f48f48c470fe5383535a4f21b715175d4c->enter($__internal_9a27f25e0cd1bb0dabdffc78b70357f48f48c470fe5383535a4f21b715175d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Выберите показатель:</h1>
    </div>

    <div class=\"row\">
        <table class=\"table table-hover main table-bordered\">
            <thead>
            <tr>
                <td>Показатель</td>
                <td>Не соответствие</td>
                <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokazatelsIssledovaniya"]) ? $context["pokazatelsIssledovaniya"] : $this->getContext($context, "pokazatelsIssledovaniya")));
        foreach ($context['_seq'] as $context["_key"] => $context["pokazatel"]) {
            // line 21
            echo "                <tr>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "pokazatel", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"/fkuz/editPokazatel/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"/fkuz/deletePokazatel/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "id", array()), "html", null, true);
            echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokazatel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_9a27f25e0cd1bb0dabdffc78b70357f48f48c470fe5383535a4f21b715175d4c->leave($__internal_9a27f25e0cd1bb0dabdffc78b70357f48f48c470fe5383535a4f21b715175d4c_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_efd26b108746778a15d69fce70f33b7d236bdc485e3010ffae7cf832d591e794 = $this->env->getExtension("native_profiler");
        $__internal_efd26b108746778a15d69fce70f33b7d236bdc485e3010ffae7cf832d591e794->enter($__internal_efd26b108746778a15d69fce70f33b7d236bdc485e3010ffae7cf832d591e794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "
";
        
        $__internal_efd26b108746778a15d69fce70f33b7d236bdc485e3010ffae7cf832d591e794->leave($__internal_efd26b108746778a15d69fce70f33b7d236bdc485e3010ffae7cf832d591e794_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/showPokazatelsIssledovaniya.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  98 => 34,  87 => 28,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  63 => 21,  59 => 20,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Выберите показатель:</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <table class="table table-hover main table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <td>Показатель</td>*/
/*                 <td>Не соответствие</td>*/
/*                 <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for pokazatel in pokazatelsIssledovaniya %}*/
/*                 <tr>*/
/*                     <td>{{ pokazatel.description }}</td>*/
/*                     <td>{{ pokazatel.pokazatel }}</td>*/
/*                     <td><a href="/fkuz/editPokazatel/{{ pokazatel.id }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="/fkuz/deletePokazatel/{{ pokazatel.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
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
