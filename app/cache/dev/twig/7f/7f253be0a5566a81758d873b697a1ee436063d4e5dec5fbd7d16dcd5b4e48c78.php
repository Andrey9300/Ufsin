<?php

/* fkuz/createVidDeyatelnosti.html.twig */
class __TwigTemplate_df0756a180adc52110d4b0870905e2ee24a22122ebbaeaa3f2be63dfc145244e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fkuz/createVidDeyatelnosti.html.twig", 1);
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
        $__internal_433ce1b87c3a5c7e22df69aa319da1f35a5179474c22dde9f66cdc74d47ff572 = $this->env->getExtension("native_profiler");
        $__internal_433ce1b87c3a5c7e22df69aa319da1f35a5179474c22dde9f66cdc74d47ff572->enter($__internal_433ce1b87c3a5c7e22df69aa319da1f35a5179474c22dde9f66cdc74d47ff572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/createVidDeyatelnosti.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433ce1b87c3a5c7e22df69aa319da1f35a5179474c22dde9f66cdc74d47ff572->leave($__internal_433ce1b87c3a5c7e22df69aa319da1f35a5179474c22dde9f66cdc74d47ff572_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_9a101bf31b7329ac00f8d4f6696712d94e078656a330abdfb66909636f096fa1 = $this->env->getExtension("native_profiler");
        $__internal_9a101bf31b7329ac00f8d4f6696712d94e078656a330abdfb66909636f096fa1->enter($__internal_9a101bf31b7329ac00f8d4f6696712d94e078656a330abdfb66909636f096fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_9a101bf31b7329ac00f8d4f6696712d94e078656a330abdfb66909636f096fa1->leave($__internal_9a101bf31b7329ac00f8d4f6696712d94e078656a330abdfb66909636f096fa1_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8d1ffab5d3a616d597bd399749bce3515d97c9b498ff10d7e8ddcdc5315322fd = $this->env->getExtension("native_profiler");
        $__internal_8d1ffab5d3a616d597bd399749bce3515d97c9b498ff10d7e8ddcdc5315322fd->enter($__internal_8d1ffab5d3a616d597bd399749bce3515d97c9b498ff10d7e8ddcdc5315322fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 25
        echo "
";
        
        $__internal_8d1ffab5d3a616d597bd399749bce3515d97c9b498ff10d7e8ddcdc5315322fd->leave($__internal_8d1ffab5d3a616d597bd399749bce3515d97c9b498ff10d7e8ddcdc5315322fd_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/createVidDeyatelnosti.html.twig";
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
