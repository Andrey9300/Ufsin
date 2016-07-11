<?php

/* fkuz/showNamesLabCon.html.twig */
class __TwigTemplate_0e3962cbea56dab22e017d90e0a1390e33e141dc3c4402207aae7bb4e8fb8a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/showNamesLabCon.html.twig", 1);
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
        $__internal_ffd0270ae7f2987cb51febb6ba81eec74fa4e422cbc97060a76e71a5e771f22c = $this->env->getExtension("native_profiler");
        $__internal_ffd0270ae7f2987cb51febb6ba81eec74fa4e422cbc97060a76e71a5e771f22c->enter($__internal_ffd0270ae7f2987cb51febb6ba81eec74fa4e422cbc97060a76e71a5e771f22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/showNamesLabCon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd0270ae7f2987cb51febb6ba81eec74fa4e422cbc97060a76e71a5e771f22c->leave($__internal_ffd0270ae7f2987cb51febb6ba81eec74fa4e422cbc97060a76e71a5e771f22c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_aa129d31840d8bc10d297967a39179611ef285e54f9a1efed25723161443fffb = $this->env->getExtension("native_profiler");
        $__internal_aa129d31840d8bc10d297967a39179611ef285e54f9a1efed25723161443fffb->enter($__internal_aa129d31840d8bc10d297967a39179611ef285e54f9a1efed25723161443fffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["labConFkuz"]) ? $context["labConFkuz"] : $this->getContext($context, "labConFkuz")));
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
    <input type=\"submit\" value=\"Редактировать исследование\" class=\"btn btn-success\" id=\"showIssledovanieFkuz\" style=\"margin-top:10px\"/>
</div>    

";
        
        $__internal_aa129d31840d8bc10d297967a39179611ef285e54f9a1efed25723161443fffb->leave($__internal_aa129d31840d8bc10d297967a39179611ef285e54f9a1efed25723161443fffb_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5b9ad219562d2b269d263b75ba591bc16b09c10bab46f8b066d12f5433cedba1 = $this->env->getExtension("native_profiler");
        $__internal_5b9ad219562d2b269d263b75ba591bc16b09c10bab46f8b066d12f5433cedba1->enter($__internal_5b9ad219562d2b269d263b75ba591bc16b09c10bab46f8b066d12f5433cedba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "
";
        
        $__internal_5b9ad219562d2b269d263b75ba591bc16b09c10bab46f8b066d12f5433cedba1->leave($__internal_5b9ad219562d2b269d263b75ba591bc16b09c10bab46f8b066d12f5433cedba1_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/showNamesLabCon.html.twig";
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
/*         {% for lab in labConFkuz %}*/
/*         <option value="{{ lab.id }}">{{ lab.nomer }}, {{lab.date|date("d.m.Y") }}</option>*/
/*         {% endfor %}*/
/*     </select>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Редактировать исследование" class="btn btn-success" id="showIssledovanieFkuz" style="margin-top:10px"/>*/
/* </div>    */
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
