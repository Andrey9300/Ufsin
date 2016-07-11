<?php

/* :organization:editProverka.html.twig */
class __TwigTemplate_d48a39739b96c6f4828d655c486632d111a336a03206e515b615e5ed5f8272dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:editProverka.html.twig", 1);
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
        $__internal_3622a8adb930e4ddb023679c05538545565540e851856a816728482775c439dd = $this->env->getExtension("native_profiler");
        $__internal_3622a8adb930e4ddb023679c05538545565540e851856a816728482775c439dd->enter($__internal_3622a8adb930e4ddb023679c05538545565540e851856a816728482775c439dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:editProverka.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3622a8adb930e4ddb023679c05538545565540e851856a816728482775c439dd->leave($__internal_3622a8adb930e4ddb023679c05538545565540e851856a816728482775c439dd_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_9eab8f8abd7b7d66cda1f486a549b93b0427d522a7e6b1a7249419e01d17b6e0 = $this->env->getExtension("native_profiler");
        $__internal_9eab8f8abd7b7d66cda1f486a549b93b0427d522a7e6b1a7249419e01d17b6e0->enter($__internal_9eab8f8abd7b7d66cda1f486a549b93b0427d522a7e6b1a7249419e01d17b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h3>Редатирование проверки от «";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proverka"]) ? $context["proverka"] : $this->getContext($context, "proverka")), "date", array()), "d.m.Y"), "html", null, true);
        echo "», номер ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proverka"]) ? $context["proverka"] : $this->getContext($context, "proverka")), "nomer", array()), "html", null, true);
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
    
    ";
        // line 29
        if ((($this->getAttribute((isset($context["proverkaType"]) ? $context["proverkaType"] : $this->getContext($context, "proverkaType")), "id", array()) != 3) && ($this->getAttribute((isset($context["proverkaType"]) ? $context["proverkaType"] : $this->getContext($context, "proverkaType")), "id", array()) != 4))) {
            // line 30
            echo "        <div class=\"col-md-3\">
            ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_rasporyageniya", array()), 'label', array("label" => "Дата распоряжения (дд.мм.гггг)"));
            echo "
            ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_rasporyageniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
            echo "
        </div>
        <div class=\"col-md-3\">
            ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_akt", array()), 'label', array("label" => "Дата выдачи акта (дд.мм.гггг)"));
            echo "
            ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_akt", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
            echo "    
        </div>
        <div class=\"col-md-3\">
            ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_predpisaniya", array()), 'label', array("label" => "Дата предписания (дд.мм.гггг)"));
            echo "
            ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_predpisaniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
            echo "
        </div>  
    ";
        }
        // line 43
        echo "    
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kem_vydano", array()), 'label', array("label" => "Кем выдано"));
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kem_vydano", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "     
    </div>
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-4\">
        <div class=\"narushenie\" data-prototype=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverka_narushenie", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-4 list_add\"></div>  
    <div class=\"col-md-4 list_now\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proverka"]) ? $context["proverka"] : $this->getContext($context, "proverka")), "getProverkaNarushenie", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["narushenie"]) {
            // line 63
            echo "            <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["narushenie"], "dateUstraneniya", array()), "d.m.Y"), "html", null, true);
            echo "</strong>, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["narushenie"], "description", array()), "html", null, true);
            echo "<button style=\"float:none\" id=\"/organization/deleteNarushenie/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["narushenie"], "id", array()), "html", null, true);
            echo "\" class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['narushenie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </div>    
</div>

<hr/>

<div class=\"dobavlenie row\">
    
    <div class=\"col-md-4\">
        <div class=\"nakazanie\" data-prototype=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proverka_nakazanie", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-4 list_add\"></div>
    <div class=\"col-md-4 list_now\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proverka"]) ? $context["proverka"] : $this->getContext($context, "proverka")), "getProverkaNakazanie", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["nakazanie"]) {
            // line 78
            echo "            <div>Добавленные <strong>";
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
        // line 79
        echo "  
    </div>    
</div>

<hr/>

<div class=\"row\">            
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"/organization/deleteProverka/";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proverka"]) ? $context["proverka"] : $this->getContext($context, "proverka")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить проверку</a></li>
   </ul>
</div> 

<div class=\"row\">
    <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_9eab8f8abd7b7d66cda1f486a549b93b0427d522a7e6b1a7249419e01d17b6e0->leave($__internal_9eab8f8abd7b7d66cda1f486a549b93b0427d522a7e6b1a7249419e01d17b6e0_prof);

    }

    // line 97
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7e4b0195dcf2896543f9d009fbdabfa7defb5054470f09f94af340394a1fa042 = $this->env->getExtension("native_profiler");
        $__internal_7e4b0195dcf2896543f9d009fbdabfa7defb5054470f09f94af340394a1fa042->enter($__internal_7e4b0195dcf2896543f9d009fbdabfa7defb5054470f09f94af340394a1fa042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 98
        echo "
";
        
        $__internal_7e4b0195dcf2896543f9d009fbdabfa7defb5054470f09f94af340394a1fa042->leave($__internal_7e4b0195dcf2896543f9d009fbdabfa7defb5054470f09f94af340394a1fa042_prof);

    }

    public function getTemplateName()
    {
        return ":organization:editProverka.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 98,  236 => 97,  220 => 87,  210 => 79,  197 => 78,  193 => 77,  186 => 73,  176 => 65,  163 => 63,  159 => 62,  152 => 58,  140 => 49,  136 => 48,  129 => 43,  123 => 40,  119 => 39,  113 => 36,  109 => 35,  103 => 32,  99 => 31,  96 => 30,  94 => 29,  88 => 26,  84 => 25,  78 => 22,  74 => 21,  68 => 18,  64 => 17,  53 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h3>Редатирование проверки от «{{ proverka.date|date("d.m.Y") }}», номер {{ proverka.nomer }}</h3>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="row">   */
/*     <div class="col-md-3">*/
/*         {{ form_label(form.nomer, 'Номер проверки') }}*/
/*         {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }} */
/*     </div>      */
/*     <div class="col-md-3">*/
/*         {{ form_label(form.proverkaType, 'Тип проверки') }}*/
/*         {{ form_widget(form.proverkaType, { 'attr': {'class': 'form-control'} }) }} */
/*     </div>  */
/*     <div class="col-md-3">*/
/*         {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*     </div> */
/*     */
/*     {% if proverkaType.id != 3 and proverkaType.id != 4 %}*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date_rasporyageniya, 'Дата распоряжения (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_rasporyageniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date_akt, 'Дата выдачи акта (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_akt, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}    */
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date_predpisaniya, 'Дата предписания (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_predpisaniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>  */
/*     {% endif %}*/
/*     */
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         {{ form_label(form.kem_vydano, 'Кем выдано') }}*/
/*         {{ form_widget(form.kem_vydano, { 'attr': {'class': 'form-control'} }) }}     */
/*     </div>*/
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/*     */
/*     <div class="col-md-4">*/
/*         <div class="narushenie" data-prototype="{{ form_widget(form.proverka_narushenie.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-4 list_add"></div>  */
/*     <div class="col-md-4 list_now">*/
/*         {% for narushenie in proverka.getProverkaNarushenie %}*/
/*             <div>Добавленные <strong>{{ narushenie.dateUstraneniya|date("d.m.Y") }}</strong>, {{ narushenie.description }}<button style="float:none" id="/organization/deleteNarushenie/{{ narushenie.id }}" class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button></div>*/
/*         {% endfor %}*/
/*     </div>    */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/*     */
/*     <div class="col-md-4">*/
/*         <div class="nakazanie" data-prototype="{{ form_widget(form.proverka_nakazanie.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-4 list_add"></div>*/
/*     <div class="col-md-4 list_now">*/
/*         {% for nakazanie in proverka.getProverkaNakazanie %}*/
/*             <div>Добавленные <strong>{{ nakazanie.date|date("d.m.Y") }}</strong>, {{ nakazanie.nomer }}<button style="float:none" id="/organization/deleteNakazanie/{{ nakazanie.id }}" class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button></div>*/
/*         {% endfor %}  */
/*     </div>    */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="row">            */
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="/organization/deleteProverka/{{ proverka.id }}" class="delete_entity">Удалить проверку</a></li>*/
/*    </ul>*/
/* </div> */
/* */
/* <div class="row">*/
/*     <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
