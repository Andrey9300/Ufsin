<?php

/* :fkuz:showPokazatelsIssledovaniya.html.twig */
class __TwigTemplate_efaf7a0f7dd31892acaa5865c476a696a059cf6de6dbb0b9ef43f1bdedf230b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:showPokazatelsIssledovaniya.html.twig", 1);
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
        $__internal_482e2d5382eefffd059c11300938754b55843f3d3d3e667e4b70705d0ca6e552 = $this->env->getExtension("native_profiler");
        $__internal_482e2d5382eefffd059c11300938754b55843f3d3d3e667e4b70705d0ca6e552->enter($__internal_482e2d5382eefffd059c11300938754b55843f3d3d3e667e4b70705d0ca6e552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:showPokazatelsIssledovaniya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482e2d5382eefffd059c11300938754b55843f3d3d3e667e4b70705d0ca6e552->leave($__internal_482e2d5382eefffd059c11300938754b55843f3d3d3e667e4b70705d0ca6e552_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_24550a66fe514073723971efd6f879ffd950d4daafa9c7af4343b0a5592b7ab8 = $this->env->getExtension("native_profiler");
        $__internal_24550a66fe514073723971efd6f879ffd950d4daafa9c7af4343b0a5592b7ab8->enter($__internal_24550a66fe514073723971efd6f879ffd950d4daafa9c7af4343b0a5592b7ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_24550a66fe514073723971efd6f879ffd950d4daafa9c7af4343b0a5592b7ab8->leave($__internal_24550a66fe514073723971efd6f879ffd950d4daafa9c7af4343b0a5592b7ab8_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bfb53497620127e49324e4dfc3c94b26a306492ddd7eeca5140141e46e41810e = $this->env->getExtension("native_profiler");
        $__internal_bfb53497620127e49324e4dfc3c94b26a306492ddd7eeca5140141e46e41810e->enter($__internal_bfb53497620127e49324e4dfc3c94b26a306492ddd7eeca5140141e46e41810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "
";
        
        $__internal_bfb53497620127e49324e4dfc3c94b26a306492ddd7eeca5140141e46e41810e->leave($__internal_bfb53497620127e49324e4dfc3c94b26a306492ddd7eeca5140141e46e41810e_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:showPokazatelsIssledovaniya.html.twig";
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
