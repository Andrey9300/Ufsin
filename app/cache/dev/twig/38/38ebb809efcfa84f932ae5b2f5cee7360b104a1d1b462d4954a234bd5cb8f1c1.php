<?php

/* :fkuz:showLabIssl.html.twig */
class __TwigTemplate_3af01484f5a017866ac9b2c4d9ce14d34f133245e07f900e90130456ecc27ab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:showLabIssl.html.twig", 1);
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
        $__internal_0e4959588a679ef54e5ea94ebbf8527fee7bc0ab85b234f2aa4eb2a431dc12f9 = $this->env->getExtension("native_profiler");
        $__internal_0e4959588a679ef54e5ea94ebbf8527fee7bc0ab85b234f2aa4eb2a431dc12f9->enter($__internal_0e4959588a679ef54e5ea94ebbf8527fee7bc0ab85b234f2aa4eb2a431dc12f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:showLabIssl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e4959588a679ef54e5ea94ebbf8527fee7bc0ab85b234f2aa4eb2a431dc12f9->leave($__internal_0e4959588a679ef54e5ea94ebbf8527fee7bc0ab85b234f2aa4eb2a431dc12f9_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_819443cc198313624a1d70f8b7b2e2f6632f858ed5d444bc0abf1328d19cf0c7 = $this->env->getExtension("native_profiler");
        $__internal_819443cc198313624a1d70f8b7b2e2f6632f858ed5d444bc0abf1328d19cf0c7->enter($__internal_819443cc198313624a1d70f8b7b2e2f6632f858ed5d444bc0abf1328d19cf0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">

    <div class=\"col-md-3\">
        <div>Выберите исследование</div>
        <select class=\"form-control\" id=\"labIssledovaniyaFkuz\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labIssl"]) ? $context["labIssl"] : $this->getContext($context, "labIssl")));
        foreach ($context['_seq'] as $context["_key"] => $context["issl"]) {
            // line 11
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "nomer", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["issl"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </select>
    </div>
    
    <div class=\"col-md-3\"> 
        <div>Выберите результат</div>
        <div id=\"issledovanie\"></div>
    </div>
</div>
   
<div class=\"row\">  
    <div class=\"col-md-3\">
        <input type=\"submit\" value=\"Редактировать исследование\" class=\"btn btn-success\" id=\"showIssledovaniyaFkuz\" style=\"margin-top:30px\"/>
    </div>
</div>

";
        
        $__internal_819443cc198313624a1d70f8b7b2e2f6632f858ed5d444bc0abf1328d19cf0c7->leave($__internal_819443cc198313624a1d70f8b7b2e2f6632f858ed5d444bc0abf1328d19cf0c7_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a08cfb84921c8167c78952171903e238084dc2eaf8959a8db0c0f97f6e45ac03 = $this->env->getExtension("native_profiler");
        $__internal_a08cfb84921c8167c78952171903e238084dc2eaf8959a8db0c0f97f6e45ac03->enter($__internal_a08cfb84921c8167c78952171903e238084dc2eaf8959a8db0c0f97f6e45ac03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_a08cfb84921c8167c78952171903e238084dc2eaf8959a8db0c0f97f6e45ac03->leave($__internal_a08cfb84921c8167c78952171903e238084dc2eaf8959a8db0c0f97f6e45ac03_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:showLabIssl.html.twig";
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
/*         <div>Выберите исследование</div>*/
/*         <select class="form-control" id="labIssledovaniyaFkuz">*/
/*             {% for issl in labIssl %}*/
/*             <option value="{{ issl.id }}">{{ issl.nomer }}, {{issl.date|date("d.m.Y") }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/*     */
/*     <div class="col-md-3"> */
/*         <div>Выберите результат</div>*/
/*         <div id="issledovanie"></div>*/
/*     </div>*/
/* </div>*/
/*    */
/* <div class="row">  */
/*     <div class="col-md-3">*/
/*         <input type="submit" value="Редактировать исследование" class="btn btn-success" id="showIssledovaniyaFkuz" style="margin-top:30px"/>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
