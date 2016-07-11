<?php

/* :fkuz:showNamesLabCon.html.twig */
class __TwigTemplate_ef645052dc0df9eb347b09b36e6ee1f05888fe0890676aaa240d1434c6ee6b47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:showNamesLabCon.html.twig", 1);
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
        $__internal_e173297c0cf4540105f21f19e48743dd175ae1894eb36632e785559624f6367f = $this->env->getExtension("native_profiler");
        $__internal_e173297c0cf4540105f21f19e48743dd175ae1894eb36632e785559624f6367f->enter($__internal_e173297c0cf4540105f21f19e48743dd175ae1894eb36632e785559624f6367f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:showNamesLabCon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e173297c0cf4540105f21f19e48743dd175ae1894eb36632e785559624f6367f->leave($__internal_e173297c0cf4540105f21f19e48743dd175ae1894eb36632e785559624f6367f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ecef6490145b8534bef05c5aa8e89c41c283394398bc1fb15172f553067a21d5 = $this->env->getExtension("native_profiler");
        $__internal_ecef6490145b8534bef05c5aa8e89c41c283394398bc1fb15172f553067a21d5->enter($__internal_ecef6490145b8534bef05c5aa8e89c41c283394398bc1fb15172f553067a21d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_ecef6490145b8534bef05c5aa8e89c41c283394398bc1fb15172f553067a21d5->leave($__internal_ecef6490145b8534bef05c5aa8e89c41c283394398bc1fb15172f553067a21d5_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_40cadda94a483a109896b24fba21ce41508a4b30601f739745fb08b2adde88cc = $this->env->getExtension("native_profiler");
        $__internal_40cadda94a483a109896b24fba21ce41508a4b30601f739745fb08b2adde88cc->enter($__internal_40cadda94a483a109896b24fba21ce41508a4b30601f739745fb08b2adde88cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "
";
        
        $__internal_40cadda94a483a109896b24fba21ce41508a4b30601f739745fb08b2adde88cc->leave($__internal_40cadda94a483a109896b24fba21ce41508a4b30601f739745fb08b2adde88cc_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:showNamesLabCon.html.twig";
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
