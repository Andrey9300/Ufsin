<?php

/* otchet/ajax/proverka_nakazanie.html.twig */
class __TwigTemplate_3c7c2fc38c3eed6e9234012ac390d3f5229b9b28642baab67d4d8d7ab3135753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/ajax/proverka_nakazanie.html.twig", 1);
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
        $__internal_11534225e70f3f228cddf567a5616ccf8a1c2239a66de204f258f09d16f15784 = $this->env->getExtension("native_profiler");
        $__internal_11534225e70f3f228cddf567a5616ccf8a1c2239a66de204f258f09d16f15784->enter($__internal_11534225e70f3f228cddf567a5616ccf8a1c2239a66de204f258f09d16f15784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/proverka_nakazanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11534225e70f3f228cddf567a5616ccf8a1c2239a66de204f258f09d16f15784->leave($__internal_11534225e70f3f228cddf567a5616ccf8a1c2239a66de204f258f09d16f15784_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5e8399c17e8ef9599b110777166378ebda921390f83d43201ff8f55acac4dacd = $this->env->getExtension("native_profiler");
        $__internal_5e8399c17e8ef9599b110777166378ebda921390f83d43201ff8f55acac4dacd->enter($__internal_5e8399c17e8ef9599b110777166378ebda921390f83d43201ff8f55acac4dacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", "otchet/ajax/proverka_nakazanie.html.twig", 5)->display($context);
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
        $this->loadTemplate("otchet/ajax/proverka_nakazanie_vid.html.twig", "otchet/ajax/proverka_nakazanie.html.twig", 26)->display(array_merge($context, array("organizations" => (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")), "narusheniyaVidSlug" => (isset($context["narusheniyaVidSlug"]) ? $context["narusheniyaVidSlug"] : $this->getContext($context, "narusheniyaVidSlug")), "narusheniyaVidAdm" => (isset($context["narusheniyaVidAdm"]) ? $context["narusheniyaVidAdm"] : $this->getContext($context, "narusheniyaVidAdm")))));
        // line 27
        echo "    </div>

    <div class=\"col-md-6\">
        ";
        // line 30
        $this->loadTemplate("otchet/ajax/proverka_nakazanie_podch.html.twig", "otchet/ajax/proverka_nakazanie.html.twig", 30)->display(array_merge($context, array("organizations" => (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")), "narusheniyaPeoAtt" => (isset($context["narusheniyaPeoAtt"]) ? $context["narusheniyaPeoAtt"] : $this->getContext($context, "narusheniyaPeoAtt")), "narusheniyaPeoVol" => (isset($context["narusheniyaPeoVol"]) ? $context["narusheniyaPeoVol"] : $this->getContext($context, "narusheniyaPeoVol")))));
        // line 31
        echo "    </div>
</div>
<br>
        ";
        // line 34
        $this->loadTemplate("otchet/ajax/proverka_nakazanie_type.html.twig", "otchet/ajax/proverka_nakazanie.html.twig", 34)->display(array_merge($context, array("organizations" => (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")), "narusheniyaType1" => (isset($context["narusheniyaType1"]) ? $context["narusheniyaType1"] : $this->getContext($context, "narusheniyaType1")), "narusheniyaType2" => (isset($context["narusheniyaType2"]) ? $context["narusheniyaType2"] : $this->getContext($context, "narusheniyaType2")), "narusheniyaType3" => (isset($context["narusheniyaType3"]) ? $context["narusheniyaType3"] : $this->getContext($context, "narusheniyaType3")))));
        // line 35
        echo "
";
        
        $__internal_5e8399c17e8ef9599b110777166378ebda921390f83d43201ff8f55acac4dacd->leave($__internal_5e8399c17e8ef9599b110777166378ebda921390f83d43201ff8f55acac4dacd_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2cd00f1ff67b749a1ea3f6735a394a43c0d960107f072f88a9562d729d29a7da = $this->env->getExtension("native_profiler");
        $__internal_2cd00f1ff67b749a1ea3f6735a394a43c0d960107f072f88a9562d729d29a7da->enter($__internal_2cd00f1ff67b749a1ea3f6735a394a43c0d960107f072f88a9562d729d29a7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "
";
        
        $__internal_2cd00f1ff67b749a1ea3f6735a394a43c0d960107f072f88a9562d729d29a7da->leave($__internal_2cd00f1ff67b749a1ea3f6735a394a43c0d960107f072f88a9562d729d29a7da_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/proverka_nakazanie.html.twig";
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
