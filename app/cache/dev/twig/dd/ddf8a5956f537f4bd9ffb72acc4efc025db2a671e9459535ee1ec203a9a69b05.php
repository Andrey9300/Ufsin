<?php

/* :organization:showNakazaniyaProverka.html.twig */
class __TwigTemplate_dbde2b240aaa7c40b3d849fa36f192e7eb4feb9824c4c15ae05699d7e4c2d2b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:showNakazaniyaProverka.html.twig", 1);
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
        $__internal_0f417d97ab7343b66cc9ee669b2dd1952a387519fe74eeeaa0b98d99fd129469 = $this->env->getExtension("native_profiler");
        $__internal_0f417d97ab7343b66cc9ee669b2dd1952a387519fe74eeeaa0b98d99fd129469->enter($__internal_0f417d97ab7343b66cc9ee669b2dd1952a387519fe74eeeaa0b98d99fd129469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:showNakazaniyaProverka.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f417d97ab7343b66cc9ee669b2dd1952a387519fe74eeeaa0b98d99fd129469->leave($__internal_0f417d97ab7343b66cc9ee669b2dd1952a387519fe74eeeaa0b98d99fd129469_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a8780c192def1d8b3dbb8f23da048a560df6e26abe59cbbbb4a7a979758773af = $this->env->getExtension("native_profiler");
        $__internal_a8780c192def1d8b3dbb8f23da048a560df6e26abe59cbbbb4a7a979758773af->enter($__internal_a8780c192def1d8b3dbb8f23da048a560df6e26abe59cbbbb4a7a979758773af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a8780c192def1d8b3dbb8f23da048a560df6e26abe59cbbbb4a7a979758773af->leave($__internal_a8780c192def1d8b3dbb8f23da048a560df6e26abe59cbbbb4a7a979758773af_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_155c5da98ec7011c13f98b0464f073042b5abf57ab8aade95d40101b32abaa79 = $this->env->getExtension("native_profiler");
        $__internal_155c5da98ec7011c13f98b0464f073042b5abf57ab8aade95d40101b32abaa79->enter($__internal_155c5da98ec7011c13f98b0464f073042b5abf57ab8aade95d40101b32abaa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_155c5da98ec7011c13f98b0464f073042b5abf57ab8aade95d40101b32abaa79->leave($__internal_155c5da98ec7011c13f98b0464f073042b5abf57ab8aade95d40101b32abaa79_prof);

    }

    public function getTemplateName()
    {
        return ":organization:showNakazaniyaProverka.html.twig";
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
