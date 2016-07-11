<?php

/* :issledovanie:showLabIssl.html.twig */
class __TwigTemplate_cf5b7b162a57d4487122c666bca69bf5dfcb244388134907da143435bcf04a11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":issledovanie:showLabIssl.html.twig", 1);
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
        $__internal_25a9b6ef4c1236fe3d7e6b9b4f53c4a4a4e88e13c33aa75194333280725787ba = $this->env->getExtension("native_profiler");
        $__internal_25a9b6ef4c1236fe3d7e6b9b4f53c4a4a4e88e13c33aa75194333280725787ba->enter($__internal_25a9b6ef4c1236fe3d7e6b9b4f53c4a4a4e88e13c33aa75194333280725787ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":issledovanie:showLabIssl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a9b6ef4c1236fe3d7e6b9b4f53c4a4a4e88e13c33aa75194333280725787ba->leave($__internal_25a9b6ef4c1236fe3d7e6b9b4f53c4a4a4e88e13c33aa75194333280725787ba_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7522a6a6dcd48530c9f6980b1fbddd7682ddaca1278714b23f8f08b7f4e25226 = $this->env->getExtension("native_profiler");
        $__internal_7522a6a6dcd48530c9f6980b1fbddd7682ddaca1278714b23f8f08b7f4e25226->enter($__internal_7522a6a6dcd48530c9f6980b1fbddd7682ddaca1278714b23f8f08b7f4e25226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_7522a6a6dcd48530c9f6980b1fbddd7682ddaca1278714b23f8f08b7f4e25226->leave($__internal_7522a6a6dcd48530c9f6980b1fbddd7682ddaca1278714b23f8f08b7f4e25226_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_94ba07e42513770b59bd9290e6950873fc6fa6c66b8666588d7863b38c627e65 = $this->env->getExtension("native_profiler");
        $__internal_94ba07e42513770b59bd9290e6950873fc6fa6c66b8666588d7863b38c627e65->enter($__internal_94ba07e42513770b59bd9290e6950873fc6fa6c66b8666588d7863b38c627e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_94ba07e42513770b59bd9290e6950873fc6fa6c66b8666588d7863b38c627e65->leave($__internal_94ba07e42513770b59bd9290e6950873fc6fa6c66b8666588d7863b38c627e65_prof);

    }

    public function getTemplateName()
    {
        return ":issledovanie:showLabIssl.html.twig";
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
