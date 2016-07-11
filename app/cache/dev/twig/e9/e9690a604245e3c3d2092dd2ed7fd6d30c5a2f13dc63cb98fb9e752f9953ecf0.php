<?php

/* :otchet/ajax:proverka_nakazanie.html.twig */
class __TwigTemplate_3978dac95f0e9fd9e8b162de660ec4ec0d7f96c608d7e254455b260d6f5a3ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet/ajax:proverka_nakazanie.html.twig", 1);
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
        $__internal_52f9109302f3e8b9f6b8087fee9a0b8cfe5d3001b71fe680531b21a98d1e9d75 = $this->env->getExtension("native_profiler");
        $__internal_52f9109302f3e8b9f6b8087fee9a0b8cfe5d3001b71fe680531b21a98d1e9d75->enter($__internal_52f9109302f3e8b9f6b8087fee9a0b8cfe5d3001b71fe680531b21a98d1e9d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:proverka_nakazanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f9109302f3e8b9f6b8087fee9a0b8cfe5d3001b71fe680531b21a98d1e9d75->leave($__internal_52f9109302f3e8b9f6b8087fee9a0b8cfe5d3001b71fe680531b21a98d1e9d75_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_77082c57d00135a48dac71ce6dbd16e451c2074d641ae487496f98a3cbeae8ee = $this->env->getExtension("native_profiler");
        $__internal_77082c57d00135a48dac71ce6dbd16e451c2074d641ae487496f98a3cbeae8ee->enter($__internal_77082c57d00135a48dac71ce6dbd16e451c2074d641ae487496f98a3cbeae8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", ":otchet/ajax:proverka_nakazanie.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    <h3>Статистика наказаний по виду, подчиненности, типу</h3>

    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("nakazaniya");
        echo "\" >
            <div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата от (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateOt\" id=\"proverka_date\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["dateOt"]) ? $context["dateOt"] : $this->getContext($context, "dateOt")), "html", null, true);
        echo "\">
            </div><div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата до (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateDo\" id=\"proverka_date\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["dateDo"]) ? $context["dateDo"] : $this->getContext($context, "dateDo")), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-3\" style=\"margin-top:25px\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Выбрать\">
            </div>
        </form>
    </div>

    <div class=\"col-md-6\">
        ";
        // line 26
        $this->loadTemplate("otchet/ajax/proverka_nakazanie_vid.html.twig", ":otchet/ajax:proverka_nakazanie.html.twig", 26)->display(array_merge($context, array("organizations" => (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")), "narusheniyaVidSlug" => (isset($context["narusheniyaVidSlug"]) ? $context["narusheniyaVidSlug"] : $this->getContext($context, "narusheniyaVidSlug")), "narusheniyaVidAdm" => (isset($context["narusheniyaVidAdm"]) ? $context["narusheniyaVidAdm"] : $this->getContext($context, "narusheniyaVidAdm")))));
        // line 27
        echo "    </div>

    <div class=\"col-md-6\">
        ";
        // line 30
        $this->loadTemplate("otchet/ajax/proverka_nakazanie_podch.html.twig", ":otchet/ajax:proverka_nakazanie.html.twig", 30)->display(array_merge($context, array("organizations" => (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")), "narusheniyaPeoAtt" => (isset($context["narusheniyaPeoAtt"]) ? $context["narusheniyaPeoAtt"] : $this->getContext($context, "narusheniyaPeoAtt")), "narusheniyaPeoVol" => (isset($context["narusheniyaPeoVol"]) ? $context["narusheniyaPeoVol"] : $this->getContext($context, "narusheniyaPeoVol")))));
        // line 31
        echo "    </div>
</div>
<br>
        ";
        // line 34
        $this->loadTemplate("otchet/ajax/proverka_nakazanie_type.html.twig", ":otchet/ajax:proverka_nakazanie.html.twig", 34)->display(array_merge($context, array("organizations" => (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")), "narusheniyaType1" => (isset($context["narusheniyaType1"]) ? $context["narusheniyaType1"] : $this->getContext($context, "narusheniyaType1")), "narusheniyaType2" => (isset($context["narusheniyaType2"]) ? $context["narusheniyaType2"] : $this->getContext($context, "narusheniyaType2")), "narusheniyaType3" => (isset($context["narusheniyaType3"]) ? $context["narusheniyaType3"] : $this->getContext($context, "narusheniyaType3")))));
        // line 35
        echo "
";
        
        $__internal_77082c57d00135a48dac71ce6dbd16e451c2074d641ae487496f98a3cbeae8ee->leave($__internal_77082c57d00135a48dac71ce6dbd16e451c2074d641ae487496f98a3cbeae8ee_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_54402dba19f04118a8203f4d5f072bc93368ca0ed974d140d87b074f60d17daa = $this->env->getExtension("native_profiler");
        $__internal_54402dba19f04118a8203f4d5f072bc93368ca0ed974d140d87b074f60d17daa->enter($__internal_54402dba19f04118a8203f4d5f072bc93368ca0ed974d140d87b074f60d17daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "
";
        
        $__internal_54402dba19f04118a8203f4d5f072bc93368ca0ed974d140d87b074f60d17daa->leave($__internal_54402dba19f04118a8203f4d5f072bc93368ca0ed974d140d87b074f60d17daa_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:proverka_nakazanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  101 => 38,  93 => 35,  91 => 34,  86 => 31,  84 => 30,  79 => 27,  77 => 26,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/proverka_menu.html' %}*/
/* */
/* <div class="row">*/
/*     <h3>Статистика наказаний по виду, подчиненности, типу</h3>*/
/* */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('nakazaniya') }}" >*/
/*             <div class="col-md-3">*/
/*                 <label class="required" for="proverka_date">Дата от (дд.мм.гггг)</label>*/
/*                 <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateOt" id="proverka_date" value="{{ dateOt }}">*/
/*             </div><div class="col-md-3">*/
/*                 <label class="required" for="proverka_date">Дата до (дд.мм.гггг)</label>*/
/*                 <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateDo" id="proverka_date" value="{{ dateDo }}">*/
/*             </div>*/
/*             <div class="col-md-3" style="margin-top:25px">*/
/*                 <input type="submit" class="btn btn-success" value="Выбрать">*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div class="col-md-6">*/
/*         {% include 'otchet/ajax/proverka_nakazanie_vid.html.twig' with {'organizations' : organizations, 'narusheniyaVidSlug' : narusheniyaVidSlug, 'narusheniyaVidAdm' : narusheniyaVidAdm} %}*/
/*     </div>*/
/* */
/*     <div class="col-md-6">*/
/*         {% include 'otchet/ajax/proverka_nakazanie_podch.html.twig' with {'organizations' : organizations, 'narusheniyaPeoAtt' : narusheniyaPeoAtt, 'narusheniyaPeoVol' : narusheniyaPeoVol} %}*/
/*     </div>*/
/* </div>*/
/* <br>*/
/*         {% include 'otchet/ajax/proverka_nakazanie_type.html.twig' with {'organizations' : organizations, 'narusheniyaType1' : narusheniyaType1, 'narusheniyaType2' : narusheniyaType2, 'narusheniyaType3' : narusheniyaType3} %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
