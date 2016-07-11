<?php

/* issledovanie/showNamesLabCon.html.twig */
class __TwigTemplate_6e2385ea43ff96ffcb52c4cb01562461336fe31b9ad05d145a0119c600c57005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "issledovanie/showNamesLabCon.html.twig", 1);
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
        $__internal_d03643c2cc43a77ea29a2d8df51d63a78c8e8d9fad33ca53c7069515c120464b = $this->env->getExtension("native_profiler");
        $__internal_d03643c2cc43a77ea29a2d8df51d63a78c8e8d9fad33ca53c7069515c120464b->enter($__internal_d03643c2cc43a77ea29a2d8df51d63a78c8e8d9fad33ca53c7069515c120464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "issledovanie/showNamesLabCon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03643c2cc43a77ea29a2d8df51d63a78c8e8d9fad33ca53c7069515c120464b->leave($__internal_d03643c2cc43a77ea29a2d8df51d63a78c8e8d9fad33ca53c7069515c120464b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_3ec8c0d09acb05f867169da1e1fa07a02f79f3ec978969689fa17c08a0ae2888 = $this->env->getExtension("native_profiler");
        $__internal_3ec8c0d09acb05f867169da1e1fa07a02f79f3ec978969689fa17c08a0ae2888->enter($__internal_3ec8c0d09acb05f867169da1e1fa07a02f79f3ec978969689fa17c08a0ae2888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_3ec8c0d09acb05f867169da1e1fa07a02f79f3ec978969689fa17c08a0ae2888->leave($__internal_3ec8c0d09acb05f867169da1e1fa07a02f79f3ec978969689fa17c08a0ae2888_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_043205ada3ba94972cb910a9f3acf633e666e84d2ee7c39fcc5b7b89d96090e8 = $this->env->getExtension("native_profiler");
        $__internal_043205ada3ba94972cb910a9f3acf633e666e84d2ee7c39fcc5b7b89d96090e8->enter($__internal_043205ada3ba94972cb910a9f3acf633e666e84d2ee7c39fcc5b7b89d96090e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "
";
        
        $__internal_043205ada3ba94972cb910a9f3acf633e666e84d2ee7c39fcc5b7b89d96090e8->leave($__internal_043205ada3ba94972cb910a9f3acf633e666e84d2ee7c39fcc5b7b89d96090e8_prof);

    }

    public function getTemplateName()
    {
        return "issledovanie/showNamesLabCon.html.twig";
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
