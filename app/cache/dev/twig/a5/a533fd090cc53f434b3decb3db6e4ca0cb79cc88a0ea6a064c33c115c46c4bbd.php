<?php

/* :zabolevaniya:editOchag.html.twig */
class __TwigTemplate_fcf4fd46208f57e396b7a48def48f17ee547ba936d9d87ee17c607dd594619db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":zabolevaniya:editOchag.html.twig", 1);
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
        $__internal_9b77d4b0958b0463ebdfa9333e73970ce573e8013e5e09c649325caea0c942ba = $this->env->getExtension("native_profiler");
        $__internal_9b77d4b0958b0463ebdfa9333e73970ce573e8013e5e09c649325caea0c942ba->enter($__internal_9b77d4b0958b0463ebdfa9333e73970ce573e8013e5e09c649325caea0c942ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":zabolevaniya:editOchag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b77d4b0958b0463ebdfa9333e73970ce573e8013e5e09c649325caea0c942ba->leave($__internal_9b77d4b0958b0463ebdfa9333e73970ce573e8013e5e09c649325caea0c942ba_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2454c08d43cf3165fa92084e650370f8f01221f3256055a3e9ab6e55b4b74a25 = $this->env->getExtension("native_profiler");
        $__internal_2454c08d43cf3165fa92084e650370f8f01221f3256055a3e9ab6e55b4b74a25->enter($__internal_2454c08d43cf3165fa92084e650370f8f01221f3256055a3e9ab6e55b4b74a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Редактировать очаг</h1>
    </div>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'label', array("label" => "Учреждение"));
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Наименование"));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'label', array("label" => "Место"));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        </div>
    </div>

    <hr/>

    <div class=\"dobavlenie row\">

        <div class=\"col-md-4\">
            <div class=\"kontaktnyi\" data-prototype=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kontaktnyi", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
        </div>
        <div class=\"col-md-4 list_add\"></div>
        <div class=\"col-md-4 list_now\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ochag"]) ? $context["ochag"] : $this->getContext($context, "ochag")), "getKontaktnyi", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["kon"]) {
            // line 38
            echo "                <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["kon"], "fio", array()), "html", null, true);
            echo "</strong>, ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["kon"], "dateBirthday", array()), "d.m.Y"), "html", null, true);
            echo "
                    <button style=\"float:none\" id=\"/zabolevaniya/deleteOsugdenyiKontaktnyi/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["kon"], "id", array()), "html", null, true);
            echo "\"
                            class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>
    </div>

    <hr/>

    <div class=\"row\">
        <ul class=\"nav navbar-nav add\">
            <li><a href=\"/zabolevaniya/deleteOchag/";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ochag"]) ? $context["ochag"] : $this->getContext($context, "ochag")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить очаг</a></li>
        </ul>
    </div>

    <div class=\"row\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>

";
        
        $__internal_2454c08d43cf3165fa92084e650370f8f01221f3256055a3e9ab6e55b4b74a25->leave($__internal_2454c08d43cf3165fa92084e650370f8f01221f3256055a3e9ab6e55b4b74a25_prof);

    }

    // line 60
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2eb92ae5ac36a3b2d7da750aced8793779f4ca96aae719c7f54617ff5cbbbd2b = $this->env->getExtension("native_profiler");
        $__internal_2eb92ae5ac36a3b2d7da750aced8793779f4ca96aae719c7f54617ff5cbbbd2b->enter($__internal_2eb92ae5ac36a3b2d7da750aced8793779f4ca96aae719c7f54617ff5cbbbd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 61
        echo "
";
        
        $__internal_2eb92ae5ac36a3b2d7da750aced8793779f4ca96aae719c7f54617ff5cbbbd2b->leave($__internal_2eb92ae5ac36a3b2d7da750aced8793779f4ca96aae719c7f54617ff5cbbbd2b_prof);

    }

    public function getTemplateName()
    {
        return ":zabolevaniya:editOchag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 61,  152 => 60,  136 => 50,  127 => 43,  117 => 39,  110 => 38,  106 => 37,  99 => 33,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Редактировать очаг</h1>*/
/*     </div>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*     <div class="row">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             {{ form_label(form.organization, 'Учреждение') }}*/
/*             {{ form_widget(form.organization, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.name, 'Наименование') }}*/
/*             {{ form_widget(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.place, 'Место') }}*/
/*             {{ form_widget(form.place, { 'attr': {'class': 'form-control', 'spellcheck': 'true'} }) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="dobavlenie row">*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="kontaktnyi" data-prototype="{{ form_widget(form.kontaktnyi.vars.prototype)|e }}"></div>*/
/*         </div>*/
/*         <div class="col-md-4 list_add"></div>*/
/*         <div class="col-md-4 list_now">*/
/*             {% for kon in ochag.getKontaktnyi %}*/
/*                 <div>Добавленные <strong>{{ kon.fio }}</strong>, {{ kon.dateBirthday|date("d.m.Y") }}*/
/*                     <button style="float:none" id="/zabolevaniya/deleteOsugdenyiKontaktnyi/{{ kon.id }}"*/
/*                             class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="row">*/
/*         <ul class="nav navbar-nav add">*/
/*             <li><a href="/zabolevaniya/deleteOchag/{{ ochag.id }}" class="delete_entity">Удалить очаг</a></li>*/
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