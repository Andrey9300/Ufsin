<?php

/* :fkuz:createVidDeyatelnosti.html.twig */
class __TwigTemplate_a1bd064e54de74cd6caed134024c146d4ed59ded4eff764cee15ae12b3899faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:createVidDeyatelnosti.html.twig", 1);
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
        $__internal_a7bfff8e1c54e09e9495f404da2a58a3bed534251fbca19d10afbc1ae1eb6cdf = $this->env->getExtension("native_profiler");
        $__internal_a7bfff8e1c54e09e9495f404da2a58a3bed534251fbca19d10afbc1ae1eb6cdf->enter($__internal_a7bfff8e1c54e09e9495f404da2a58a3bed534251fbca19d10afbc1ae1eb6cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:createVidDeyatelnosti.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7bfff8e1c54e09e9495f404da2a58a3bed534251fbca19d10afbc1ae1eb6cdf->leave($__internal_a7bfff8e1c54e09e9495f404da2a58a3bed534251fbca19d10afbc1ae1eb6cdf_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_865503f166925ebaf42dc1900def2cb8300181242545ad26f859e3862885423c = $this->env->getExtension("native_profiler");
        $__internal_865503f166925ebaf42dc1900def2cb8300181242545ad26f859e3862885423c->enter($__internal_865503f166925ebaf42dc1900def2cb8300181242545ad26f859e3862885423c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Добавить вид деятельности</h1>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Наименование"));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "     
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-4\">
        <input type=\"submit\" value=\"Добавить\" class=\"btn btn-success add_button\" />
    </div>
</div>

";
        
        $__internal_865503f166925ebaf42dc1900def2cb8300181242545ad26f859e3862885423c->leave($__internal_865503f166925ebaf42dc1900def2cb8300181242545ad26f859e3862885423c_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8b50721496cdb1495f677ae3d13da0778d4ce8e492713e4c661912669e7bd652 = $this->env->getExtension("native_profiler");
        $__internal_8b50721496cdb1495f677ae3d13da0778d4ce8e492713e4c661912669e7bd652->enter($__internal_8b50721496cdb1495f677ae3d13da0778d4ce8e492713e4c661912669e7bd652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 25
        echo "
";
        
        $__internal_8b50721496cdb1495f677ae3d13da0778d4ce8e492713e4c661912669e7bd652->leave($__internal_8b50721496cdb1495f677ae3d13da0778d4ce8e492713e4c661912669e7bd652_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:createVidDeyatelnosti.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  75 => 24,  57 => 12,  53 => 11,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <h1>Добавить вид деятельности</h1>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {{ form_label(form.name, 'Наименование') }}*/
/*         {{ form_widget(form.name, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}     */
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         <input type="submit" value="Добавить" class="btn btn-success add_button" />*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
