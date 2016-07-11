<?php

/* issledovanie/showLabIssl.html.twig */
class __TwigTemplate_02da593945e7ee54262f1a5157a510ba078ab116991057bf1b257910c2b5f4a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "issledovanie/showLabIssl.html.twig", 1);
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
        $__internal_332baa72693678788e81f12778afc4b46dca18d168a64d77d39ec9ebfe34828a = $this->env->getExtension("native_profiler");
        $__internal_332baa72693678788e81f12778afc4b46dca18d168a64d77d39ec9ebfe34828a->enter($__internal_332baa72693678788e81f12778afc4b46dca18d168a64d77d39ec9ebfe34828a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "issledovanie/showLabIssl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332baa72693678788e81f12778afc4b46dca18d168a64d77d39ec9ebfe34828a->leave($__internal_332baa72693678788e81f12778afc4b46dca18d168a64d77d39ec9ebfe34828a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d97ce90f5c799a48ab6a096a50e894b02dfe423c118b1cd14160d13495219870 = $this->env->getExtension("native_profiler");
        $__internal_d97ce90f5c799a48ab6a096a50e894b02dfe423c118b1cd14160d13495219870->enter($__internal_d97ce90f5c799a48ab6a096a50e894b02dfe423c118b1cd14160d13495219870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">

    <div class=\"col-md-3\">
        <div>Выберите исследование</div>
        <select class=\"form-control\" id=\"labIssledovaniya\">
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
        <input type=\"submit\" value=\"Редактировать исследование\" class=\"btn btn-success\" id=\"showIssledovaniya\" style=\"margin-top:30px\"/>
    </div>
</div>

";
        
        $__internal_d97ce90f5c799a48ab6a096a50e894b02dfe423c118b1cd14160d13495219870->leave($__internal_d97ce90f5c799a48ab6a096a50e894b02dfe423c118b1cd14160d13495219870_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c77652e4da53fcd0eb09f90a68fb97b3fa05dd4b3070303577739298bbe1d1e6 = $this->env->getExtension("native_profiler");
        $__internal_c77652e4da53fcd0eb09f90a68fb97b3fa05dd4b3070303577739298bbe1d1e6->enter($__internal_c77652e4da53fcd0eb09f90a68fb97b3fa05dd4b3070303577739298bbe1d1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_c77652e4da53fcd0eb09f90a68fb97b3fa05dd4b3070303577739298bbe1d1e6->leave($__internal_c77652e4da53fcd0eb09f90a68fb97b3fa05dd4b3070303577739298bbe1d1e6_prof);

    }

    public function getTemplateName()
    {
        return "issledovanie/showLabIssl.html.twig";
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
/*         <select class="form-control" id="labIssledovaniya">*/
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
/*         <input type="submit" value="Редактировать исследование" class="btn btn-success" id="showIssledovaniya" style="margin-top:30px"/>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
