<?php

/* :fkuz:editPokazatel.html.twig */
class __TwigTemplate_d95a2bf5d967b9c47a33292139c2d3bf316c3ed01ab31ff4e6acd8bc5135881a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fkuz:editPokazatel.html.twig", 1);
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
        $__internal_814c106444d3db00aee178b5b1b6e4b9332321ccadac1d950b801e4590dec5ad = $this->env->getExtension("native_profiler");
        $__internal_814c106444d3db00aee178b5b1b6e4b9332321ccadac1d950b801e4590dec5ad->enter($__internal_814c106444d3db00aee178b5b1b6e4b9332321ccadac1d950b801e4590dec5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:editPokazatel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814c106444d3db00aee178b5b1b6e4b9332321ccadac1d950b801e4590dec5ad->leave($__internal_814c106444d3db00aee178b5b1b6e4b9332321ccadac1d950b801e4590dec5ad_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6365e0926e1fd5f332c1c3c8bc06dd51fc0e75cc300b2738d557788da248f515 = $this->env->getExtension("native_profiler");
        $__internal_6365e0926e1fd5f332c1c3c8bc06dd51fc0e75cc300b2738d557788da248f515->enter($__internal_6365e0926e1fd5f332c1c3c8bc06dd51fc0e75cc300b2738d557788da248f515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_6365e0926e1fd5f332c1c3c8bc06dd51fc0e75cc300b2738d557788da248f515->leave($__internal_6365e0926e1fd5f332c1c3c8bc06dd51fc0e75cc300b2738d557788da248f515_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4ab849146ce57c4154efeb52b4f0498d601f8518c2a216daf536a9109d171902 = $this->env->getExtension("native_profiler");
        $__internal_4ab849146ce57c4154efeb52b4f0498d601f8518c2a216daf536a9109d171902->enter($__internal_4ab849146ce57c4154efeb52b4f0498d601f8518c2a216daf536a9109d171902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 40
        echo "
";
        
        $__internal_4ab849146ce57c4154efeb52b4f0498d601f8518c2a216daf536a9109d171902->leave($__internal_4ab849146ce57c4154efeb52b4f0498d601f8518c2a216daf536a9109d171902_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:editPokazatel.html.twig";
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
