<?php

/* :fkuz:editDogovorFkuz.html.twig */
class __TwigTemplate_ae7734c94fe0fb23e65f0dbcdfcd0f01eff9f50e458ba728256824517e7e446a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:editDogovorFkuz.html.twig", 1);
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
        $__internal_bd8c2240f1b46c21d85374d336fd68b82f5862d84ba807c1ea0679dbff615a9e = $this->env->getExtension("native_profiler");
        $__internal_bd8c2240f1b46c21d85374d336fd68b82f5862d84ba807c1ea0679dbff615a9e->enter($__internal_bd8c2240f1b46c21d85374d336fd68b82f5862d84ba807c1ea0679dbff615a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:editDogovorFkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd8c2240f1b46c21d85374d336fd68b82f5862d84ba807c1ea0679dbff615a9e->leave($__internal_bd8c2240f1b46c21d85374d336fd68b82f5862d84ba807c1ea0679dbff615a9e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4f10a081de5329dd5fd3ed06d7b1e47538660aee4d5bf72529395d45b0929b43 = $this->env->getExtension("native_profiler");
        $__internal_4f10a081de5329dd5fd3ed06d7b1e47538660aee4d5bf72529395d45b0929b43->enter($__internal_4f10a081de5329dd5fd3ed06d7b1e47538660aee4d5bf72529395d45b0929b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Изменить договор</h1>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер"));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "  
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization_posrednik", array()), 'label', array("label" => "Организация посредник"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization_posrednik", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summa", array()), 'label', array("label" => "Сумма"));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summa", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovorType", array()), 'label', array("label" => "Тип договора"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovorType", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "       
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-4\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success add_button\" />
    </div>
</div>

";
        
        $__internal_4f10a081de5329dd5fd3ed06d7b1e47538660aee4d5bf72529395d45b0929b43->leave($__internal_4f10a081de5329dd5fd3ed06d7b1e47538660aee4d5bf72529395d45b0929b43_prof);

    }

    // line 32
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e0425679520c8f668c8bc4ea715fd6b935cdd567cbac52c6457f175b461c6baf = $this->env->getExtension("native_profiler");
        $__internal_e0425679520c8f668c8bc4ea715fd6b935cdd567cbac52c6457f175b461c6baf->enter($__internal_e0425679520c8f668c8bc4ea715fd6b935cdd567cbac52c6457f175b461c6baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 33
        echo "
";
        
        $__internal_e0425679520c8f668c8bc4ea715fd6b935cdd567cbac52c6457f175b461c6baf->leave($__internal_e0425679520c8f668c8bc4ea715fd6b935cdd567cbac52c6457f175b461c6baf_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:editDogovorFkuz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  107 => 32,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <h1>Изменить договор</h1>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {{ form_label(form.nomer, 'Номер') }}*/
/*         {{ form_widget(form.nomer, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*         {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}  */
/*         {{ form_label(form.organization_posrednik, 'Организация посредник') }}*/
/*         {{ form_widget(form.organization_posrednik, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*         {{ form_label(form.summa, 'Сумма') }}*/
/*         {{ form_widget(form.summa, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*         {{ form_label(form.dogovorType, 'Тип договора') }}*/
/*         {{ form_widget(form.dogovorType, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}       */
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success add_button" />*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/