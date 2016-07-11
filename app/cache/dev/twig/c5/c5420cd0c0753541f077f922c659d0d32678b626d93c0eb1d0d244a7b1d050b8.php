<?php

/* fkuz/editPokazatel.html.twig */
class __TwigTemplate_9471d04d31ff5cb35c61ef9b78315b136730e6a1e5148b028045da4a8739cf9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/editPokazatel.html.twig", 1);
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
        $__internal_b34246ebfc9044ef4bde83cd05b0ad44a06c1a71474d39ddff745f53b0ff8e90 = $this->env->getExtension("native_profiler");
        $__internal_b34246ebfc9044ef4bde83cd05b0ad44a06c1a71474d39ddff745f53b0ff8e90->enter($__internal_b34246ebfc9044ef4bde83cd05b0ad44a06c1a71474d39ddff745f53b0ff8e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/editPokazatel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b34246ebfc9044ef4bde83cd05b0ad44a06c1a71474d39ddff745f53b0ff8e90->leave($__internal_b34246ebfc9044ef4bde83cd05b0ad44a06c1a71474d39ddff745f53b0ff8e90_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_9d29d6c3281dca09268d00a8c552513e8ee102e11fc6b56e36078d0b0bfb0434 = $this->env->getExtension("native_profiler");
        $__internal_9d29d6c3281dca09268d00a8c552513e8ee102e11fc6b56e36078d0b0bfb0434->enter($__internal_9d29d6c3281dca09268d00a8c552513e8ee102e11fc6b56e36078d0b0bfb0434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Редактирование показателя</h1>
    </div>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-md-12\">
            <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pokazatel", array()), 'label', array("label" => "Показатель"));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pokazatel", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "readonly")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Не соответствие"));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>

    <div class=\"row\">
        <hr/>
        <ul class=\"nav navbar-nav add\">
            <li><a href=\"/fkuz/deletePokazatel/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pokazateslIssledovaniyaFkuz"]) ? $context["pokazateslIssledovaniyaFkuz"] : $this->getContext($context, "pokazateslIssledovaniyaFkuz")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить показатель</a></li>
        </ul>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
        </div>
    </div>

";
        
        $__internal_9d29d6c3281dca09268d00a8c552513e8ee102e11fc6b56e36078d0b0bfb0434->leave($__internal_9d29d6c3281dca09268d00a8c552513e8ee102e11fc6b56e36078d0b0bfb0434_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3b65df4fb5b67df0ea47013008e9206ce553b48671fbb8ae6c21f8b1e1104b87 = $this->env->getExtension("native_profiler");
        $__internal_3b65df4fb5b67df0ea47013008e9206ce553b48671fbb8ae6c21f8b1e1104b87->enter($__internal_3b65df4fb5b67df0ea47013008e9206ce553b48671fbb8ae6c21f8b1e1104b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 40
        echo "
";
        
        $__internal_3b65df4fb5b67df0ea47013008e9206ce553b48671fbb8ae6c21f8b1e1104b87->leave($__internal_3b65df4fb5b67df0ea47013008e9206ce553b48671fbb8ae6c21f8b1e1104b87_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/editPokazatel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  99 => 39,  81 => 27,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Редактирование показателя</h1>*/
/*     </div>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         {{ form_label(form.pokazatel, 'Показатель') }}*/
/*         {{ form_widget(form.pokazatel, { 'attr': {'class': 'form-control', 'readonly' : 'readonly'} }) }}*/
/*         {{ form_label(form.description, 'Не соответствие') }}*/
/*         {{ form_widget(form.description, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <hr/>*/
/*         <ul class="nav navbar-nav add">*/
/*             <li><a href="/fkuz/deletePokazatel/{{ pokazateslIssledovaniyaFkuz.id }}" class="delete_entity">Удалить показатель</a></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
