<?php

/* :issledovanie:createType.html.twig */
class __TwigTemplate_436e1d6a5dd8a231bc3c0a934fdde89b869b4a9fde87ad238511a59e8089a63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":issledovanie:createType.html.twig", 1);
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
        $__internal_7db732a82d50736561035229b1fa58ce1a18a93608e138c46fd6e042f802db1d = $this->env->getExtension("native_profiler");
        $__internal_7db732a82d50736561035229b1fa58ce1a18a93608e138c46fd6e042f802db1d->enter($__internal_7db732a82d50736561035229b1fa58ce1a18a93608e138c46fd6e042f802db1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":issledovanie:createType.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db732a82d50736561035229b1fa58ce1a18a93608e138c46fd6e042f802db1d->leave($__internal_7db732a82d50736561035229b1fa58ce1a18a93608e138c46fd6e042f802db1d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f95e19f1f62bcd7bcde5d75841efcc6876eb4b72eb93ece9776196246a3904a2 = $this->env->getExtension("native_profiler");
        $__internal_f95e19f1f62bcd7bcde5d75841efcc6876eb4b72eb93ece9776196246a3904a2->enter($__internal_f95e19f1f62bcd7bcde5d75841efcc6876eb4b72eb93ece9776196246a3904a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавить тип исследования</h1>
</div>

";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Наименование"));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <input type=\"submit\" value=\"Добавить\" class=\"btn btn-success add_button\"/>
    </div>
    <div class=\"col-md-4\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'label', array("label" => "Родительская категория"));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-md-4 list_now\">
        ";
        // line 22
        if (twig_test_empty((isset($context["allTypes"]) ? $context["allTypes"] : $this->getContext($context, "allTypes")))) {
            // line 23
            echo "            <div><strong>Вы еще не добавляли типы исследований</strong></div>
        ";
        } else {
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allTypes"]) ? $context["allTypes"] : $this->getContext($context, "allTypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 26
                echo "                <div>Добавленные <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
                echo "</strong><div style=\"display:inline\"><button style=\"float:none\" id_now=\"/issledovanie/deleteType/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
                echo "\" class=\"close delete_now\" type=\"button\"><span aria-hidden=\"true\">×</span></button></div></div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "    </div>
</div>

";
        
        $__internal_f95e19f1f62bcd7bcde5d75841efcc6876eb4b72eb93ece9776196246a3904a2->leave($__internal_f95e19f1f62bcd7bcde5d75841efcc6876eb4b72eb93ece9776196246a3904a2_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9273cc889a342ff09c17e68d1f0da66c06709811812f6cc49a2bc072adf0830c = $this->env->getExtension("native_profiler");
        $__internal_9273cc889a342ff09c17e68d1f0da66c06709811812f6cc49a2bc072adf0830c->enter($__internal_9273cc889a342ff09c17e68d1f0da66c06709811812f6cc49a2bc072adf0830c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "
";
        
        $__internal_9273cc889a342ff09c17e68d1f0da66c06709811812f6cc49a2bc072adf0830c->leave($__internal_9273cc889a342ff09c17e68d1f0da66c06709811812f6cc49a2bc072adf0830c_prof);

    }

    public function getTemplateName()
    {
        return ":issledovanie:createType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  111 => 34,  101 => 29,  98 => 28,  87 => 26,  82 => 25,  78 => 23,  76 => 22,  70 => 19,  66 => 18,  59 => 14,  55 => 13,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавить тип исследования</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {{ form_label(form.name, 'Наименование') }}*/
/*         {{ form_widget(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/*         <input type="submit" value="Добавить" class="btn btn-success add_button"/>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         {{ form_label(form.parent, 'Родительская категория') }}*/
/*         {{ form_widget(form.parent, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/*     <div class="col-md-4 list_now">*/
/*         {% if allTypes is empty%}*/
/*             <div><strong>Вы еще не добавляли типы исследований</strong></div>*/
/*         {% else %}*/
/*             {% for type in allTypes %}*/
/*                 <div>Добавленные <strong>{{ type.name }}</strong><div style="display:inline"><button style="float:none" id_now="/issledovanie/deleteType/{{ type.id }}" class="close delete_now" type="button"><span aria-hidden="true">×</span></button></div></div>*/
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
