<?php

/* organization/createObject.html.twig */
class __TwigTemplate_0393670b0170e52ba99ba771ce667f940458d9408912ad769400c7e1a1f9545c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/createObject.html.twig", 1);
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
        $__internal_6133af1f8f868c7bf668bc3e4b86432ab49ec3e3e3c7e1d72db03cefcf0b66ba = $this->env->getExtension("native_profiler");
        $__internal_6133af1f8f868c7bf668bc3e4b86432ab49ec3e3e3c7e1d72db03cefcf0b66ba->enter($__internal_6133af1f8f868c7bf668bc3e4b86432ab49ec3e3e3c7e1d72db03cefcf0b66ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/createObject.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6133af1f8f868c7bf668bc3e4b86432ab49ec3e3e3c7e1d72db03cefcf0b66ba->leave($__internal_6133af1f8f868c7bf668bc3e4b86432ab49ec3e3e3c7e1d72db03cefcf0b66ba_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2a98f0fbd926effe97ddc5e646ea5d928ce18f105369fb463efac9d21ef09f1d = $this->env->getExtension("native_profiler");
        $__internal_2a98f0fbd926effe97ddc5e646ea5d928ce18f105369fb463efac9d21ef09f1d->enter($__internal_2a98f0fbd926effe97ddc5e646ea5d928ce18f105369fb463efac9d21ef09f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Добавить объект</h1>

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
        <input type=\"submit\" value=\"Добавить\" class=\"btn btn-success add_button\" />
    </div>
    <div class=\"col-md-4\"></div>
    <div class=\"col-md-4 list_now\">
        ";
        // line 17
        if (twig_test_empty((isset($context["objects"]) ? $context["objects"] : $this->getContext($context, "objects")))) {
            // line 18
            echo "            <div><strong>Вы еще не добавляли объекты</strong></div>
        ";
        } else {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) ? $context["objects"] : $this->getContext($context, "objects")));
            foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
                // line 21
                echo "                <div>Добавленные <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "name", array()), "html", null, true);
                echo "</strong><div style=\"display:inline\"><button style=\"float:none\" id_now=\"/organization/deleteObject/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "id", array()), "html", null, true);
                echo "\" class=\"close delete_now\" type=\"button\"><span aria-hidden=\"true\">×</span></button></div></div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
</div>

";
        
        $__internal_2a98f0fbd926effe97ddc5e646ea5d928ce18f105369fb463efac9d21ef09f1d->leave($__internal_2a98f0fbd926effe97ddc5e646ea5d928ce18f105369fb463efac9d21ef09f1d_prof);

    }

    // line 29
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9185239fc470b6b199f59de884d5dd96de8ee85559c012726429829a15c0afc1 = $this->env->getExtension("native_profiler");
        $__internal_9185239fc470b6b199f59de884d5dd96de8ee85559c012726429829a15c0afc1->enter($__internal_9185239fc470b6b199f59de884d5dd96de8ee85559c012726429829a15c0afc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 30
        echo "
";
        
        $__internal_9185239fc470b6b199f59de884d5dd96de8ee85559c012726429829a15c0afc1->leave($__internal_9185239fc470b6b199f59de884d5dd96de8ee85559c012726429829a15c0afc1_prof);

    }

    public function getTemplateName()
    {
        return "organization/createObject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  100 => 29,  90 => 24,  87 => 23,  76 => 21,  71 => 20,  67 => 18,  65 => 17,  57 => 12,  53 => 11,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <h1>Добавить объект</h1>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {{ form_label(form.name, 'Наименование') }}*/
/*         {{ form_widget(form.name, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*         <input type="submit" value="Добавить" class="btn btn-success add_button" />*/
/*     </div>*/
/*     <div class="col-md-4"></div>*/
/*     <div class="col-md-4 list_now">*/
/*         {% if objects is empty%}*/
/*             <div><strong>Вы еще не добавляли объекты</strong></div>*/
/*         {% else %}*/
/*             {% for object in objects %}*/
/*                 <div>Добавленные <strong>{{ object.name }}</strong><div style="display:inline"><button style="float:none" id_now="/organization/deleteObject/{{ object.id }}" class="close delete_now" type="button"><span aria-hidden="true">×</span></button></div></div>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
