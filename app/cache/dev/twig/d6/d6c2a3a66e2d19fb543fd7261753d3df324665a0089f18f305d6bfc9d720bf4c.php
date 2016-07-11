<?php

/* :fkuz:editProverkaFkuz.html.twig */
class __TwigTemplate_d89d02a838d3cf695b2c7448de2da13543821787860e60c513fcc3367e58ea87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:editProverkaFkuz.html.twig", 1);
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
        $__internal_d2b31b79703d7ba2581a700c32856adee81dfeb1e007faace8c3eefaaed8b2c0 = $this->env->getExtension("native_profiler");
        $__internal_d2b31b79703d7ba2581a700c32856adee81dfeb1e007faace8c3eefaaed8b2c0->enter($__internal_d2b31b79703d7ba2581a700c32856adee81dfeb1e007faace8c3eefaaed8b2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:editProverkaFkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b31b79703d7ba2581a700c32856adee81dfeb1e007faace8c3eefaaed8b2c0->leave($__internal_d2b31b79703d7ba2581a700c32856adee81dfeb1e007faace8c3eefaaed8b2c0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7bc0797be3c1c89f149af2124b82a84149dbb2e7236e46df36fea51d0cbddbc3 = $this->env->getExtension("native_profiler");
        $__internal_7bc0797be3c1c89f149af2124b82a84149dbb2e7236e46df36fea51d0cbddbc3->enter($__internal_7bc0797be3c1c89f149af2124b82a84149dbb2e7236e46df36fea51d0cbddbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h3>Редатирование проверки от «";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proverkaFkuz"]) ? $context["proverkaFkuz"] : $this->getContext($context, "proverkaFkuz")), "date", array()), "d.m.Y"), "html", null, true);
        echo "», номер ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proverkaFkuz"]) ? $context["proverkaFkuz"] : $this->getContext($context, "proverkaFkuz")), "nomer", array()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер проверки"));
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverkaType", array()), 'label', array("label" => "Тип проверки"));
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverkaType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>

        <div class=\"col-md-3\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_rasporyageniya", array()), 'label', array("label" => "Дата распоряжения (дд.мм.гггг)"));
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_rasporyageniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_akt", array()), 'label', array("label" => "Дата выдачи акта (дд.мм.гггг)"));
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_akt", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_predpisaniya", array()), 'label', array("label" => "Дата предписания (дд.мм.гггг)"));
        echo "
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_predpisaniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>

    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kem_vydano", array()), 'label', array("label" => "Кем выдано"));
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kem_vydano", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <hr/>

    <div class=\"dobavlenie row\">

        <div class=\"col-md-4\">
            <div class=\"nakazanie\" data-prototype=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverkaNakazanieFkuz", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
        </div>
        <div class=\"col-md-4 list_add\"></div>
        <div class=\"col-md-4 list_now\">
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proverkaFkuz"]) ? $context["proverkaFkuz"] : $this->getContext($context, "proverkaFkuz")), "getProverkaNakazanieFkuz", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["nakazanie"]) {
            // line 61
            echo "                <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["nakazanie"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</strong>, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nakazanie"], "nomer", array()), "html", null, true);
            echo "<button style=\"float:none\" id=\"/organization/deleteNakazanie/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nakazanie"], "id", array()), "html", null, true);
            echo "\" class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nakazanie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </div>
    </div>

    <hr/>

    <div class=\"row\">
        <ul class=\"nav navbar-nav add\">
            <li><a href=\"/fkuz/deleteProverkaFkuz/";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proverkaFkuz"]) ? $context["proverkaFkuz"] : $this->getContext($context, "proverkaFkuz")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить проверку</a></li>
        </ul>
    </div>

    <div class=\"row\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>

";
        
        $__internal_7bc0797be3c1c89f149af2124b82a84149dbb2e7236e46df36fea51d0cbddbc3->leave($__internal_7bc0797be3c1c89f149af2124b82a84149dbb2e7236e46df36fea51d0cbddbc3_prof);

    }

    // line 80
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e5bf8c465ed455ce0fe2dc8cdd40bc02c41de046dc0ff82e05965a80118b9db5 = $this->env->getExtension("native_profiler");
        $__internal_e5bf8c465ed455ce0fe2dc8cdd40bc02c41de046dc0ff82e05965a80118b9db5->enter($__internal_e5bf8c465ed455ce0fe2dc8cdd40bc02c41de046dc0ff82e05965a80118b9db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 81
        echo "
";
        
        $__internal_e5bf8c465ed455ce0fe2dc8cdd40bc02c41de046dc0ff82e05965a80118b9db5->leave($__internal_e5bf8c465ed455ce0fe2dc8cdd40bc02c41de046dc0ff82e05965a80118b9db5_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:editProverkaFkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 81,  194 => 80,  178 => 70,  169 => 63,  156 => 61,  152 => 60,  145 => 56,  133 => 47,  129 => 46,  119 => 39,  115 => 38,  109 => 35,  105 => 34,  99 => 31,  95 => 30,  88 => 26,  84 => 25,  78 => 22,  74 => 21,  68 => 18,  64 => 17,  53 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h3>Редатирование проверки от «{{ proverkaFkuz.date|date("d.m.Y") }}», номер {{ proverkaFkuz.nomer }}</h3>*/
/*     </div>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*     <div class="row">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.nomer, 'Номер проверки') }}*/
/*             {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.proverkaType, 'Тип проверки') }}*/
/*             {{ form_widget(form.proverkaType, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>*/
/* */
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date_rasporyageniya, 'Дата распоряжения (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_rasporyageniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date_akt, 'Дата выдачи акта (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_akt, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date_predpisaniya, 'Дата предписания (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_predpisaniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ form_label(form.kem_vydano, 'Кем выдано') }}*/
/*             {{ form_widget(form.kem_vydano, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="dobavlenie row">*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="nakazanie" data-prototype="{{ form_widget(form.proverkaNakazanieFkuz.vars.prototype)|e }}"></div>*/
/*         </div>*/
/*         <div class="col-md-4 list_add"></div>*/
/*         <div class="col-md-4 list_now">*/
/*             {% for nakazanie in proverkaFkuz.getProverkaNakazanieFkuz %}*/
/*                 <div>Добавленные <strong>{{ nakazanie.date|date("d.m.Y") }}</strong>, {{ nakazanie.nomer }}<button style="float:none" id="/organization/deleteNakazanie/{{ nakazanie.id }}" class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button></div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="row">*/
/*         <ul class="nav navbar-nav add">*/
/*             <li><a href="/fkuz/deleteProverkaFkuz/{{ proverkaFkuz.id }}" class="delete_entity">Удалить проверку</a></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
