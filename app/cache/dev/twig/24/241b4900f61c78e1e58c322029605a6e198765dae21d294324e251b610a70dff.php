<?php

/* :issledovanie:showNamesLabCon.html.twig */
class __TwigTemplate_f5c62e3cad07a456acdbf36d44f2bee7d36b9ba91fe3b6f4442b7af5319a951a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":issledovanie:showNamesLabCon.html.twig", 1);
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
        $__internal_a9a576d2dbb31d2b91d518fc4606b45bdfb4dc0753f6352e2bb0f9ca0208818e = $this->env->getExtension("native_profiler");
        $__internal_a9a576d2dbb31d2b91d518fc4606b45bdfb4dc0753f6352e2bb0f9ca0208818e->enter($__internal_a9a576d2dbb31d2b91d518fc4606b45bdfb4dc0753f6352e2bb0f9ca0208818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":issledovanie:showNamesLabCon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a576d2dbb31d2b91d518fc4606b45bdfb4dc0753f6352e2bb0f9ca0208818e->leave($__internal_a9a576d2dbb31d2b91d518fc4606b45bdfb4dc0753f6352e2bb0f9ca0208818e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f0dc98de7f783c089a640abb81699a14f3b775428da5fd425cc965017d4f210b = $this->env->getExtension("native_profiler");
        $__internal_f0dc98de7f783c089a640abb81699a14f3b775428da5fd425cc965017d4f210b->enter($__internal_f0dc98de7f783c089a640abb81699a14f3b775428da5fd425cc965017d4f210b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Выберите исследование:</h1>
</div>

<div class=\"row\">
    <select class=\"form-control\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["laboratornyiControl"]) ? $context["laboratornyiControl"] : $this->getContext($context, "laboratornyiControl")));
        foreach ($context['_seq'] as $context["_key"] => $context["lab"]) {
            // line 12
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lab"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lab"], "nomer", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lab"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </select>
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Редактировать исследование\" class=\"btn btn-success\" id=\"showIssledovanie\" style=\"margin-top:10px\"/>
</div>    

";
        
        $__internal_f0dc98de7f783c089a640abb81699a14f3b775428da5fd425cc965017d4f210b->leave($__internal_f0dc98de7f783c089a640abb81699a14f3b775428da5fd425cc965017d4f210b_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cbc8e782a6ab358dd1b6d246a5be5da11279851414c232e042527d3b1d0ec33a = $this->env->getExtension("native_profiler");
        $__internal_cbc8e782a6ab358dd1b6d246a5be5da11279851414c232e042527d3b1d0ec33a->enter($__internal_cbc8e782a6ab358dd1b6d246a5be5da11279851414c232e042527d3b1d0ec33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "
";
        
        $__internal_cbc8e782a6ab358dd1b6d246a5be5da11279851414c232e042527d3b1d0ec33a->leave($__internal_cbc8e782a6ab358dd1b6d246a5be5da11279851414c232e042527d3b1d0ec33a_prof);

    }

    public function getTemplateName()
    {
        return ":issledovanie:showNamesLabCon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  81 => 23,  67 => 14,  54 => 12,  50 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Выберите исследование:</h1>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <select class="form-control">*/
/*         {% for lab in laboratornyiControl %}*/
/*         <option value="{{ lab.id }}">{{ lab.nomer }}, {{lab.date|date("d.m.Y") }}</option>*/
/*         {% endfor %}*/
/*     </select>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Редактировать исследование" class="btn btn-success" id="showIssledovanie" style="margin-top:10px"/>*/
/* </div>    */
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
