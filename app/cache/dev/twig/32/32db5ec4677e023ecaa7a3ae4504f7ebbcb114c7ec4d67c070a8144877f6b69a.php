<?php

/* fkuz/showLabIssl.html.twig */
class __TwigTemplate_f1079e0e40b48470d78997bc6656464a71931c03e1611c9ff91d8ce0a9e8fba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/showLabIssl.html.twig", 1);
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
        $__internal_7f4d350fc8951ab86a7900981a07de3ba188a913b03efa97a4c074e7c0157006 = $this->env->getExtension("native_profiler");
        $__internal_7f4d350fc8951ab86a7900981a07de3ba188a913b03efa97a4c074e7c0157006->enter($__internal_7f4d350fc8951ab86a7900981a07de3ba188a913b03efa97a4c074e7c0157006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/showLabIssl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f4d350fc8951ab86a7900981a07de3ba188a913b03efa97a4c074e7c0157006->leave($__internal_7f4d350fc8951ab86a7900981a07de3ba188a913b03efa97a4c074e7c0157006_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f2d53c5da7d0259b3c1afaee9ec59abb140dd4fa58c3c1d59eb9d895234a1afa = $this->env->getExtension("native_profiler");
        $__internal_f2d53c5da7d0259b3c1afaee9ec59abb140dd4fa58c3c1d59eb9d895234a1afa->enter($__internal_f2d53c5da7d0259b3c1afaee9ec59abb140dd4fa58c3c1d59eb9d895234a1afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_f2d53c5da7d0259b3c1afaee9ec59abb140dd4fa58c3c1d59eb9d895234a1afa->leave($__internal_f2d53c5da7d0259b3c1afaee9ec59abb140dd4fa58c3c1d59eb9d895234a1afa_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_996614c355c26450c5b6d313a52b502f2f45c542b6b9951616aa544976f9c91f = $this->env->getExtension("native_profiler");
        $__internal_996614c355c26450c5b6d313a52b502f2f45c542b6b9951616aa544976f9c91f->enter($__internal_996614c355c26450c5b6d313a52b502f2f45c542b6b9951616aa544976f9c91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_996614c355c26450c5b6d313a52b502f2f45c542b6b9951616aa544976f9c91f->leave($__internal_996614c355c26450c5b6d313a52b502f2f45c542b6b9951616aa544976f9c91f_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/showLabIssl.html.twig";
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
