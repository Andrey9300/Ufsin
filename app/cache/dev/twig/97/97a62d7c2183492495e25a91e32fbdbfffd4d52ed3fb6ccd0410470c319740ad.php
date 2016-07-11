<?php

/* zabolevaniya/editLichnyiSostav.html.twig */
class __TwigTemplate_0551ba21a2ce3d44daaac482f686b863afbccd7539b92b225d6b4f32c936801a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "zabolevaniya/editLichnyiSostav.html.twig", 1);
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
        $__internal_24c0c12522721e0c529c1369f07a113cea0d6f4cfadc3910319981352f0cce8c = $this->env->getExtension("native_profiler");
        $__internal_24c0c12522721e0c529c1369f07a113cea0d6f4cfadc3910319981352f0cce8c->enter($__internal_24c0c12522721e0c529c1369f07a113cea0d6f4cfadc3910319981352f0cce8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "zabolevaniya/editLichnyiSostav.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24c0c12522721e0c529c1369f07a113cea0d6f4cfadc3910319981352f0cce8c->leave($__internal_24c0c12522721e0c529c1369f07a113cea0d6f4cfadc3910319981352f0cce8c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b473e25c195898c3f73a4d4b414f203c81c29515bfd5fe0b484258999d4df3ea = $this->env->getExtension("native_profiler");
        $__internal_b473e25c195898c3f73a4d4b414f203c81c29515bfd5fe0b484258999d4df3ea->enter($__internal_b473e25c195898c3f73a4d4b414f203c81c29515bfd5fe0b484258999d4df3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Редактировать «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "fio", array()), "html", null, true);
        echo "»</h1>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label" => "Пол"));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'label', array("label" => "ФИО"));
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_birthday", array()), 'label', array("label" => "Дата рождения (дд.мм.гггг)"));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_birthday", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'label', array("label" => "Профессия"));
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label', array("label" => "Адрес"));
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_zabolevaniya", array()), 'label', array("label" => "Дата заболевания (дд.мм.гггг)"));
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_zabolevaniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_obracheniya", array()), 'label', array("label" => "Дата обращения (дд.мм.гггг)"));
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_obracheniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_extr_izv", array()), 'label', array("label" => "Дата извещения (дд.мм.гггг)"));
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data_extr_izv", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>
    </div>

    <hr/>

    <div class=\"row\">
        <ul class=\"nav navbar-nav add\">
            <li><a href=\"/zabolevaniya/deleteLichnyiSostav/";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить заболевшего</a></li>
        </ul>
    </div>

    <div class=\"row\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>

";
        
        $__internal_b473e25c195898c3f73a4d4b414f203c81c29515bfd5fe0b484258999d4df3ea->leave($__internal_b473e25c195898c3f73a4d4b414f203c81c29515bfd5fe0b484258999d4df3ea_prof);

    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_03f1b5c8a0b795d0aa10bb8834a0b6ff7d28ea7e18a63d4fc378e3a268528947 = $this->env->getExtension("native_profiler");
        $__internal_03f1b5c8a0b795d0aa10bb8834a0b6ff7d28ea7e18a63d4fc378e3a268528947->enter($__internal_03f1b5c8a0b795d0aa10bb8834a0b6ff7d28ea7e18a63d4fc378e3a268528947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 53
        echo "
";
        
        $__internal_03f1b5c8a0b795d0aa10bb8834a0b6ff7d28ea7e18a63d4fc378e3a268528947->leave($__internal_03f1b5c8a0b795d0aa10bb8834a0b6ff7d28ea7e18a63d4fc378e3a268528947_prof);

    }

    public function getTemplateName()
    {
        return "zabolevaniya/editLichnyiSostav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  157 => 52,  141 => 42,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Редактировать «{{ lichnyiSostav.fio }}»</h1>*/
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
/*             {{ form_label(form.gender, 'Пол') }}*/
/*             {{ form_widget(form.gender, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.fio, 'ФИО') }}*/
/*             {{ form_widget(form.fio, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.date_birthday, 'Дата рождения (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_birthday, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.profession, 'Профессия') }}*/
/*             {{ form_widget(form.profession, { 'attr': {'class': 'form-control', 'spellcheck': 'true'} }) }}*/
/*             {{ form_label(form.address, 'Адрес') }}*/
/*             {{ form_widget(form.address, { 'attr': {'class': 'form-control', 'spellcheck': 'true'} }) }}*/
/*             {{ form_label(form.data_zabolevaniya, 'Дата заболевания (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.data_zabolevaniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.data_obracheniya, 'Дата обращения (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.data_obracheniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.data_extr_izv, 'Дата извещения (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.data_extr_izv, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="row">*/
/*         <ul class="nav navbar-nav add">*/
/*             <li><a href="/zabolevaniya/deleteLichnyiSostav/{{ lichnyiSostav.id }}" class="delete_entity">Удалить заболевшего</a></li>*/
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
