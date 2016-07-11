<?php

/* dogovor/createType.html.twig */
class __TwigTemplate_8ec92596933a69495fdff50ea99590492fe8cf3ed660ec934210e67ef698677e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dogovor/createType.html.twig", 1);
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
        $__internal_a802c8104ba57e08693447b9353345b16d8a1dc8f38a9d4b261adcb65a143a40 = $this->env->getExtension("native_profiler");
        $__internal_a802c8104ba57e08693447b9353345b16d8a1dc8f38a9d4b261adcb65a143a40->enter($__internal_a802c8104ba57e08693447b9353345b16d8a1dc8f38a9d4b261adcb65a143a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dogovor/createType.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a802c8104ba57e08693447b9353345b16d8a1dc8f38a9d4b261adcb65a143a40->leave($__internal_a802c8104ba57e08693447b9353345b16d8a1dc8f38a9d4b261adcb65a143a40_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5bcde666b428d8b842f2333c4e0e4b6d571828ce1c1383dba7290d4cac43016e = $this->env->getExtension("native_profiler");
        $__internal_5bcde666b428d8b842f2333c4e0e4b6d571828ce1c1383dba7290d4cac43016e->enter($__internal_5bcde666b428d8b842f2333c4e0e4b6d571828ce1c1383dba7290d4cac43016e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавить тип договора</h1>
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
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'label', array("label" => "Родительская категория"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
\t<div class=\"col-md-4\">
\t\t<input type=\"submit\" value=\"Добавить\" class=\"btn btn-success add_button\"/>
\t</div>
    <div class=\"col-md-4 list_now\">
        ";
        // line 22
        if (twig_test_empty((isset($context["dogovorTypes"]) ? $context["dogovorTypes"] : $this->getContext($context, "dogovorTypes")))) {
            // line 23
            echo "            <div><strong>Вы еще не добавляли типы договоров</strong></div>
        ";
        } else {
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dogovorTypes"]) ? $context["dogovorTypes"] : $this->getContext($context, "dogovorTypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 26
                echo "                <div>Добавленные <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
                echo "</strong><div style=\"display:inline\"><button style=\"float:none\" id_now=\"/dogovor/deleteType/";
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


\t
";
        
        $__internal_5bcde666b428d8b842f2333c4e0e4b6d571828ce1c1383dba7290d4cac43016e->leave($__internal_5bcde666b428d8b842f2333c4e0e4b6d571828ce1c1383dba7290d4cac43016e_prof);

    }

    // line 36
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e56417875d09bd16f5b82115f922f99f1dce85ce2fa985b814a68ebbefd81b76 = $this->env->getExtension("native_profiler");
        $__internal_e56417875d09bd16f5b82115f922f99f1dce85ce2fa985b814a68ebbefd81b76->enter($__internal_e56417875d09bd16f5b82115f922f99f1dce85ce2fa985b814a68ebbefd81b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 37
        echo "
";
        
        $__internal_e56417875d09bd16f5b82115f922f99f1dce85ce2fa985b814a68ebbefd81b76->leave($__internal_e56417875d09bd16f5b82115f922f99f1dce85ce2fa985b814a68ebbefd81b76_prof);

    }

    public function getTemplateName()
    {
        return "dogovor/createType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  113 => 36,  101 => 29,  98 => 28,  87 => 26,  82 => 25,  78 => 23,  76 => 22,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавить тип договора</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {{ form_label(form.name, 'Наименование') }}*/
/*         {{ form_widget(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.parent, 'Родительская категория') }}*/
/*         {{ form_widget(form.parent, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/* 	<div class="col-md-4">*/
/* 		<input type="submit" value="Добавить" class="btn btn-success add_button"/>*/
/* 	</div>*/
/*     <div class="col-md-4 list_now">*/
/*         {% if dogovorTypes is empty%}*/
/*             <div><strong>Вы еще не добавляли типы договоров</strong></div>*/
/*         {% else %}*/
/*             {% for type in dogovorTypes %}*/
/*                 <div>Добавленные <strong>{{ type.name }}</strong><div style="display:inline"><button style="float:none" id_now="/dogovor/deleteType/{{ type.id }}" class="close delete_now" type="button"><span aria-hidden="true">×</span></button></div></div>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* 	*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
