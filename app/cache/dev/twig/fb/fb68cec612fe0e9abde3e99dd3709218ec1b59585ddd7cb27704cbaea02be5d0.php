<?php

/* organization/showNakazaniyaProverka.html.twig */
class __TwigTemplate_45d3e0b078a7b3ae53ed040e1a8b9f24ae85a4890e1b351c494d326df5117022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/showNakazaniyaProverka.html.twig", 1);
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
        $__internal_8ac1f08a54030631d1086ace8af9d591816e3a9b72ae37af93231219d67c3676 = $this->env->getExtension("native_profiler");
        $__internal_8ac1f08a54030631d1086ace8af9d591816e3a9b72ae37af93231219d67c3676->enter($__internal_8ac1f08a54030631d1086ace8af9d591816e3a9b72ae37af93231219d67c3676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/showNakazaniyaProverka.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac1f08a54030631d1086ace8af9d591816e3a9b72ae37af93231219d67c3676->leave($__internal_8ac1f08a54030631d1086ace8af9d591816e3a9b72ae37af93231219d67c3676_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_95e24f7fc935ce856303fa6c7f17b98e892793965fe24b904072568e74202e9e = $this->env->getExtension("native_profiler");
        $__internal_95e24f7fc935ce856303fa6c7f17b98e892793965fe24b904072568e74202e9e->enter($__internal_95e24f7fc935ce856303fa6c7f17b98e892793965fe24b904072568e74202e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">

    <div class=\"col-md-3\">
        <div>Выберите проверку</div>
        <select class=\"form-control\" id=\"proverkiNakazaniya\">
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
        <div>Выберите наказание</div>
        <div id=\"nakazaniya\"></div>
    </div>
</div>
   
<div class=\"row\">  
    <div class=\"col-md-3\">
        <input type=\"submit\" value=\"Редактировать наказание\" class=\"btn btn-success\" id=\"showNakazaniya\" style=\"margin-top:30px\"/>
    </div>
</div>

";
        
        $__internal_95e24f7fc935ce856303fa6c7f17b98e892793965fe24b904072568e74202e9e->leave($__internal_95e24f7fc935ce856303fa6c7f17b98e892793965fe24b904072568e74202e9e_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ce5a15bbfa81c7986e5347d1c78c46acb32f58e206b09de28a7b2646846d9808 = $this->env->getExtension("native_profiler");
        $__internal_ce5a15bbfa81c7986e5347d1c78c46acb32f58e206b09de28a7b2646846d9808->enter($__internal_ce5a15bbfa81c7986e5347d1c78c46acb32f58e206b09de28a7b2646846d9808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_ce5a15bbfa81c7986e5347d1c78c46acb32f58e206b09de28a7b2646846d9808->leave($__internal_ce5a15bbfa81c7986e5347d1c78c46acb32f58e206b09de28a7b2646846d9808_prof);

    }

    public function getTemplateName()
    {
        return "organization/showNakazaniyaProverka.html.twig";
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
/*         <select class="form-control" id="proverkiNakazaniya">*/
/*             {% for prov in proverka %}*/
/*             <option value="{{ prov.id }}">{{ prov.nomer }}, {{prov.date|date("d.m.Y") }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/*     */
/*     <div class="col-md-3"> */
/*         <div>Выберите наказание</div>*/
/*         <div id="nakazaniya"></div>*/
/*     </div>*/
/* </div>*/
/*    */
/* <div class="row">  */
/*     <div class="col-md-3">*/
/*         <input type="submit" value="Редактировать наказание" class="btn btn-success" id="showNakazaniya" style="margin-top:30px"/>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
