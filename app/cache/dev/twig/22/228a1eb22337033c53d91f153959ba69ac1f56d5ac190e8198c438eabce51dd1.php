<?php

/* issledovanie/editPokazatel.html.twig */
class __TwigTemplate_068837f5405cc8df07332302c4f6fe5abfd23a028a9e51334d9caf2f8d726b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "issledovanie/editPokazatel.html.twig", 1);
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
        $__internal_ca2f3ec05cc29d2c21b442c483feada3412d0e443b05e0a7358b1034c24b4afe = $this->env->getExtension("native_profiler");
        $__internal_ca2f3ec05cc29d2c21b442c483feada3412d0e443b05e0a7358b1034c24b4afe->enter($__internal_ca2f3ec05cc29d2c21b442c483feada3412d0e443b05e0a7358b1034c24b4afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "issledovanie/editPokazatel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2f3ec05cc29d2c21b442c483feada3412d0e443b05e0a7358b1034c24b4afe->leave($__internal_ca2f3ec05cc29d2c21b442c483feada3412d0e443b05e0a7358b1034c24b4afe_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_3f55d4026db5bdd764589a4a60e8e7c5e3ae1186857fd50cd6d33830da086026 = $this->env->getExtension("native_profiler");
        $__internal_3f55d4026db5bdd764589a4a60e8e7c5e3ae1186857fd50cd6d33830da086026->enter($__internal_3f55d4026db5bdd764589a4a60e8e7c5e3ae1186857fd50cd6d33830da086026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            <li><a href=\"/issledovanie/deletePokazatel/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pokazateslIssledovaniya"]) ? $context["pokazateslIssledovaniya"] : $this->getContext($context, "pokazateslIssledovaniya")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить показатель</a></li>
        </ul>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
        </div>
    </div>

";
        
        $__internal_3f55d4026db5bdd764589a4a60e8e7c5e3ae1186857fd50cd6d33830da086026->leave($__internal_3f55d4026db5bdd764589a4a60e8e7c5e3ae1186857fd50cd6d33830da086026_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a44611120fcde6e9a0149217e61d3dae3dc797f2ed4ceb03ae01824467b6f15b = $this->env->getExtension("native_profiler");
        $__internal_a44611120fcde6e9a0149217e61d3dae3dc797f2ed4ceb03ae01824467b6f15b->enter($__internal_a44611120fcde6e9a0149217e61d3dae3dc797f2ed4ceb03ae01824467b6f15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 40
        echo "
";
        
        $__internal_a44611120fcde6e9a0149217e61d3dae3dc797f2ed4ceb03ae01824467b6f15b->leave($__internal_a44611120fcde6e9a0149217e61d3dae3dc797f2ed4ceb03ae01824467b6f15b_prof);

    }

    public function getTemplateName()
    {
        return "issledovanie/editPokazatel.html.twig";
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
/*             <li><a href="/issledovanie/deletePokazatel/{{ pokazateslIssledovaniya.id }}" class="delete_entity">Удалить показатель</a></li>*/
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
