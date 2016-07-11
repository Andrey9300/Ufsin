<?php

/* :otchet/ajax:proverka_nakazanie_fkuz.html.twig */
class __TwigTemplate_ca1b3be7d57a46133d2166afac9bcddbdc4d3715398adbbb30996c849efaf40e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet/ajax:proverka_nakazanie_fkuz.html.twig", 1);
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
        $__internal_81d615a67333835f0d53f396e7032494a718c74be84b5208edd56d5a939bdd09 = $this->env->getExtension("native_profiler");
        $__internal_81d615a67333835f0d53f396e7032494a718c74be84b5208edd56d5a939bdd09->enter($__internal_81d615a67333835f0d53f396e7032494a718c74be84b5208edd56d5a939bdd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:proverka_nakazanie_fkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81d615a67333835f0d53f396e7032494a718c74be84b5208edd56d5a939bdd09->leave($__internal_81d615a67333835f0d53f396e7032494a718c74be84b5208edd56d5a939bdd09_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f08db9af4c0e0edcbc66d0c89790afcc0fa4234499058b587e9102e2eb29b941 = $this->env->getExtension("native_profiler");
        $__internal_f08db9af4c0e0edcbc66d0c89790afcc0fa4234499058b587e9102e2eb29b941->enter($__internal_f08db9af4c0e0edcbc66d0c89790afcc0fa4234499058b587e9102e2eb29b941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("views/otchet/ajax/fkuz_menu.html", ":otchet/ajax:proverka_nakazanie_fkuz.html.twig", 5)->display($context);
        // line 6
        echo "
    <div class=\"row\">
        <h3>Статистика наказаний по виду, подчиненности, типу</h3>

        <div class=\"row\" style=\"margin-bottom:50px\">
            <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("nakazaniya_fkuz");
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
        $this->loadTemplate("otchet/ajax/proverka_nakazanie_vid_fkuz.html.twig", ":otchet/ajax:proverka_nakazanie_fkuz.html.twig", 26)->display(array_merge($context, array("allNamefilial" => (isset($context["allNamefilial"]) ? $context["allNamefilial"] : $this->getContext($context, "allNamefilial")), "narusheniyaVidSlug" => (isset($context["narusheniyaVidSlug"]) ? $context["narusheniyaVidSlug"] : $this->getContext($context, "narusheniyaVidSlug")), "narusheniyaVidAdm" => (isset($context["narusheniyaVidAdm"]) ? $context["narusheniyaVidAdm"] : $this->getContext($context, "narusheniyaVidAdm")))));
        // line 27
        echo "        </div>

        <div class=\"col-md-6\">
            ";
        // line 30
        $this->loadTemplate("otchet/ajax/proverka_nakazanie_podch_fkuz.html.twig", ":otchet/ajax:proverka_nakazanie_fkuz.html.twig", 30)->display(array_merge($context, array("allNamefilial" => (isset($context["allNamefilial"]) ? $context["allNamefilial"] : $this->getContext($context, "allNamefilial")), "narusheniyaPeoAtt" => (isset($context["narusheniyaPeoAtt"]) ? $context["narusheniyaPeoAtt"] : $this->getContext($context, "narusheniyaPeoAtt")), "narusheniyaPeoVol" => (isset($context["narusheniyaPeoVol"]) ? $context["narusheniyaPeoVol"] : $this->getContext($context, "narusheniyaPeoVol")))));
        // line 31
        echo "        </div>
    </div>
    <br>
            ";
        // line 34
        $this->loadTemplate("otchet/ajax/proverka_nakazanie_type_fkuz.html.twig", ":otchet/ajax:proverka_nakazanie_fkuz.html.twig", 34)->display(array_merge($context, array("allNamefilial" => (isset($context["allNamefilial"]) ? $context["allNamefilial"] : $this->getContext($context, "allNamefilial")), "narusheniyaType1" => (isset($context["narusheniyaType1"]) ? $context["narusheniyaType1"] : $this->getContext($context, "narusheniyaType1")), "narusheniyaType2" => (isset($context["narusheniyaType2"]) ? $context["narusheniyaType2"] : $this->getContext($context, "narusheniyaType2")), "narusheniyaType3" => (isset($context["narusheniyaType3"]) ? $context["narusheniyaType3"] : $this->getContext($context, "narusheniyaType3")))));
        // line 35
        echo "



";
        
        $__internal_f08db9af4c0e0edcbc66d0c89790afcc0fa4234499058b587e9102e2eb29b941->leave($__internal_f08db9af4c0e0edcbc66d0c89790afcc0fa4234499058b587e9102e2eb29b941_prof);

    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_49b93e1bec7fe78be4889abf2f00228ef0e5016c3a73f960d89854e358696e79 = $this->env->getExtension("native_profiler");
        $__internal_49b93e1bec7fe78be4889abf2f00228ef0e5016c3a73f960d89854e358696e79->enter($__internal_49b93e1bec7fe78be4889abf2f00228ef0e5016c3a73f960d89854e358696e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 42
        echo "
";
        
        $__internal_49b93e1bec7fe78be4889abf2f00228ef0e5016c3a73f960d89854e358696e79->leave($__internal_49b93e1bec7fe78be4889abf2f00228ef0e5016c3a73f960d89854e358696e79_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:proverka_nakazanie_fkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  104 => 41,  93 => 35,  91 => 34,  86 => 31,  84 => 30,  79 => 27,  77 => 26,  65 => 17,  59 => 14,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     {% include 'views/otchet/ajax/fkuz_menu.html' %}*/
/* */
/*     <div class="row">*/
/*         <h3>Статистика наказаний по виду, подчиненности, типу</h3>*/
/* */
/*         <div class="row" style="margin-bottom:50px">*/
/*             <form class="has-validation-callback" method="post" action="{{ path('nakazaniya_fkuz') }}" >*/
/*                 <div class="col-md-3">*/
/*                     <label class="required" for="proverka_date">Дата от (дд.мм.гггг)</label>*/
/*                     <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateOt" id="proverka_date" value="{{ dateOt }}">*/
/*                 </div><div class="col-md-3">*/
/*                     <label class="required" for="proverka_date">Дата до (дд.мм.гггг)</label>*/
/*                     <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateDo" id="proverka_date" value="{{ dateDo }}">*/
/*                 </div>*/
/*                 <div class="col-md-3" style="margin-top:25px">*/
/*                     <input type="submit" class="btn btn-success" value="Выбрать">*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <div class="col-md-6">*/
/*             {% include 'otchet/ajax/proverka_nakazanie_vid_fkuz.html.twig' with {'allNamefilial' : allNamefilial, 'narusheniyaVidSlug' : narusheniyaVidSlug, 'narusheniyaVidAdm' : narusheniyaVidAdm} %}*/
/*         </div>*/
/* */
/*         <div class="col-md-6">*/
/*             {% include 'otchet/ajax/proverka_nakazanie_podch_fkuz.html.twig' with {'allNamefilial' : allNamefilial, 'narusheniyaPeoAtt' : narusheniyaPeoAtt, 'narusheniyaPeoVol' : narusheniyaPeoVol} %}*/
/*         </div>*/
/*     </div>*/
/*     <br>*/
/*             {% include 'otchet/ajax/proverka_nakazanie_type_fkuz.html.twig' with {'allNamefilial' : allNamefilial, 'narusheniyaType1' : narusheniyaType1, 'narusheniyaType2' : narusheniyaType2, 'narusheniyaType3' : narusheniyaType3} %}*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
