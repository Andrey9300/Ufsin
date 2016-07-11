<?php

/* organization/showNarusheniyaProverka.html.twig */
class __TwigTemplate_b5051d61148cbd67182dfc3c5516725d45e59fdef5334bbe3864b72f936da249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/showNarusheniyaProverka.html.twig", 1);
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
        $__internal_19217c4fd13cecc142708f7583c2fcff09b9a6ca1f5fd2399bc052e0cd081914 = $this->env->getExtension("native_profiler");
        $__internal_19217c4fd13cecc142708f7583c2fcff09b9a6ca1f5fd2399bc052e0cd081914->enter($__internal_19217c4fd13cecc142708f7583c2fcff09b9a6ca1f5fd2399bc052e0cd081914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/showNarusheniyaProverka.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19217c4fd13cecc142708f7583c2fcff09b9a6ca1f5fd2399bc052e0cd081914->leave($__internal_19217c4fd13cecc142708f7583c2fcff09b9a6ca1f5fd2399bc052e0cd081914_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e2115184ccf26e3d17a7ef3b3fa5b8e6ec7fc9a589ab48d312d654f9af8159f8 = $this->env->getExtension("native_profiler");
        $__internal_e2115184ccf26e3d17a7ef3b3fa5b8e6ec7fc9a589ab48d312d654f9af8159f8->enter($__internal_e2115184ccf26e3d17a7ef3b3fa5b8e6ec7fc9a589ab48d312d654f9af8159f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_e2115184ccf26e3d17a7ef3b3fa5b8e6ec7fc9a589ab48d312d654f9af8159f8->leave($__internal_e2115184ccf26e3d17a7ef3b3fa5b8e6ec7fc9a589ab48d312d654f9af8159f8_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3494e028392db75d937b7dd5299eea592fe2e36278c9063221277dd9bd8afb41 = $this->env->getExtension("native_profiler");
        $__internal_3494e028392db75d937b7dd5299eea592fe2e36278c9063221277dd9bd8afb41->enter($__internal_3494e028392db75d937b7dd5299eea592fe2e36278c9063221277dd9bd8afb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "
";
        
        $__internal_3494e028392db75d937b7dd5299eea592fe2e36278c9063221277dd9bd8afb41->leave($__internal_3494e028392db75d937b7dd5299eea592fe2e36278c9063221277dd9bd8afb41_prof);

    }

    public function getTemplateName()
    {
        return "organization/showNarusheniyaProverka.html.twig";
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
