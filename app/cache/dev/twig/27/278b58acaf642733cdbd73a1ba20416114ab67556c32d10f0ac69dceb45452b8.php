<?php

/* :organization:showNarusheniyaProverka.html.twig */
class __TwigTemplate_07603755c2b3df37ce2281fbe1cb4d152ab61ea392b768a2fe70393681defe7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:showNarusheniyaProverka.html.twig", 1);
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
        $__internal_e66416317cbc411000afcec84f3fbe000469bea93b82ec4cbb6f746680b85603 = $this->env->getExtension("native_profiler");
        $__internal_e66416317cbc411000afcec84f3fbe000469bea93b82ec4cbb6f746680b85603->enter($__internal_e66416317cbc411000afcec84f3fbe000469bea93b82ec4cbb6f746680b85603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:showNarusheniyaProverka.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e66416317cbc411000afcec84f3fbe000469bea93b82ec4cbb6f746680b85603->leave($__internal_e66416317cbc411000afcec84f3fbe000469bea93b82ec4cbb6f746680b85603_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e52c51f7429bf299b1b3334d47aabe98f03ed91904e3a73a3938aece33776351 = $this->env->getExtension("native_profiler");
        $__internal_e52c51f7429bf299b1b3334d47aabe98f03ed91904e3a73a3938aece33776351->enter($__internal_e52c51f7429bf299b1b3334d47aabe98f03ed91904e3a73a3938aece33776351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">

    <div class=\"col-md-3\">
        <div>Выберите проверку</div>
        <select class=\"form-control\" id=\"proverkiNarusheniya\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proverka"]) ? $context["proverka"] : $this->getContext($context, "proverka")));
        foreach ($context['_seq'] as $context["_key"] => $context["prov"]) {
            // line 11
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prov"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prov"], "nomer", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prov"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prov'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </select>
    </div>
    
    <div class=\"col-md-3\"> 
        <div>Выберите нарушение</div>
        <div id=\"narusheniya\"></div>
    </div>
</div>
   
<div class=\"row\">  
    <div class=\"col-md-3\">
        <input type=\"submit\" value=\"Редактировать нарушение\" class=\"btn btn-success\" id=\"showNarusheniya\" style=\"margin-top:30px\"/>
    </div>
</div>

";
        
        $__internal_e52c51f7429bf299b1b3334d47aabe98f03ed91904e3a73a3938aece33776351->leave($__internal_e52c51f7429bf299b1b3334d47aabe98f03ed91904e3a73a3938aece33776351_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_991fb71ba0d7d95e505223da7e942fe00bfdd8a69d37931cf7bdfc3ba4e40235 = $this->env->getExtension("native_profiler");
        $__internal_991fb71ba0d7d95e505223da7e942fe00bfdd8a69d37931cf7bdfc3ba4e40235->enter($__internal_991fb71ba0d7d95e505223da7e942fe00bfdd8a69d37931cf7bdfc3ba4e40235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_991fb71ba0d7d95e505223da7e942fe00bfdd8a69d37931cf7bdfc3ba4e40235->leave($__internal_991fb71ba0d7d95e505223da7e942fe00bfdd8a69d37931cf7bdfc3ba4e40235_prof);

    }

    public function getTemplateName()
    {
        return ":organization:showNarusheniyaProverka.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  88 => 30,  66 => 13,  53 => 11,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/* */
/*     <div class="col-md-3">*/
/*         <div>Выберите проверку</div>*/
/*         <select class="form-control" id="proverkiNarusheniya">*/
/*             {% for prov in proverka %}*/
/*             <option value="{{ prov.id }}">{{ prov.nomer }}, {{prov.date|date("d.m.Y") }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/*     */
/*     <div class="col-md-3"> */
/*         <div>Выберите нарушение</div>*/
/*         <div id="narusheniya"></div>*/
/*     </div>*/
/* </div>*/
/*    */
/* <div class="row">  */
/*     <div class="col-md-3">*/
/*         <input type="submit" value="Редактировать нарушение" class="btn btn-success" id="showNarusheniya" style="margin-top:30px"/>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
