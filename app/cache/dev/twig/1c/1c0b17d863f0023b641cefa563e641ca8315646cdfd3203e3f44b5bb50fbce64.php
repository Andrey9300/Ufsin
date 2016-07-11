<?php

/* :organization:showPokazatelsIssledovaniya.html.twig */
class __TwigTemplate_04ddb7cdff93bf5a8f4be0095caff44f7ddb91c1f9165e400a4ffd9e41aa9084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:showPokazatelsIssledovaniya.html.twig", 1);
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
        $__internal_5c16e9a2153d85acce546150d1e4784ecca6a01ac36413e3ca76de51736028ff = $this->env->getExtension("native_profiler");
        $__internal_5c16e9a2153d85acce546150d1e4784ecca6a01ac36413e3ca76de51736028ff->enter($__internal_5c16e9a2153d85acce546150d1e4784ecca6a01ac36413e3ca76de51736028ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:showPokazatelsIssledovaniya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c16e9a2153d85acce546150d1e4784ecca6a01ac36413e3ca76de51736028ff->leave($__internal_5c16e9a2153d85acce546150d1e4784ecca6a01ac36413e3ca76de51736028ff_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8aaba1a3375f8680dd0ddee0e3c9909380d65fc46a7329eaf5a5a26a7056acf2 = $this->env->getExtension("native_profiler");
        $__internal_8aaba1a3375f8680dd0ddee0e3c9909380d65fc46a7329eaf5a5a26a7056acf2->enter($__internal_8aaba1a3375f8680dd0ddee0e3c9909380d65fc46a7329eaf5a5a26a7056acf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                    <td><a href=\"/issledovanie/editPokazatel/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"/issledovanie/deletePokazatel/";
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
        
        $__internal_8aaba1a3375f8680dd0ddee0e3c9909380d65fc46a7329eaf5a5a26a7056acf2->leave($__internal_8aaba1a3375f8680dd0ddee0e3c9909380d65fc46a7329eaf5a5a26a7056acf2_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_438cbe6d66ef261b7953a4f1b5308eea18da615c91ce08ea47b68f89dce0bae4 = $this->env->getExtension("native_profiler");
        $__internal_438cbe6d66ef261b7953a4f1b5308eea18da615c91ce08ea47b68f89dce0bae4->enter($__internal_438cbe6d66ef261b7953a4f1b5308eea18da615c91ce08ea47b68f89dce0bae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "
";
        
        $__internal_438cbe6d66ef261b7953a4f1b5308eea18da615c91ce08ea47b68f89dce0bae4->leave($__internal_438cbe6d66ef261b7953a4f1b5308eea18da615c91ce08ea47b68f89dce0bae4_prof);

    }

    public function getTemplateName()
    {
        return ":organization:showPokazatelsIssledovaniya.html.twig";
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
/*                     <td><a href="/issledovanie/editPokazatel/{{ pokazatel.id }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="/issledovanie/deletePokazatel/{{ pokazatel.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
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
