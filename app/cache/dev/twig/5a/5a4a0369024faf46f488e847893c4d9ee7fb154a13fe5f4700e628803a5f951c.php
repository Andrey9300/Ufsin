<?php

/* :organization:createObject.html.twig */
class __TwigTemplate_cec08f48199c4971454991e2b6217c4ced7efd979f0b2d69a8d467ad6ff7835e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:createObject.html.twig", 1);
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
        $__internal_078ff093ab1f0b9f0dce0ff8363fae1b4fcfca149dfbb154aa3bb5c389b9ff8d = $this->env->getExtension("native_profiler");
        $__internal_078ff093ab1f0b9f0dce0ff8363fae1b4fcfca149dfbb154aa3bb5c389b9ff8d->enter($__internal_078ff093ab1f0b9f0dce0ff8363fae1b4fcfca149dfbb154aa3bb5c389b9ff8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:createObject.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078ff093ab1f0b9f0dce0ff8363fae1b4fcfca149dfbb154aa3bb5c389b9ff8d->leave($__internal_078ff093ab1f0b9f0dce0ff8363fae1b4fcfca149dfbb154aa3bb5c389b9ff8d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_16cc5bf643141bf1dfbaa6cf337cf117dfce2cfa4e746e31439dcc2aa9040f69 = $this->env->getExtension("native_profiler");
        $__internal_16cc5bf643141bf1dfbaa6cf337cf117dfce2cfa4e746e31439dcc2aa9040f69->enter($__internal_16cc5bf643141bf1dfbaa6cf337cf117dfce2cfa4e746e31439dcc2aa9040f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_16cc5bf643141bf1dfbaa6cf337cf117dfce2cfa4e746e31439dcc2aa9040f69->leave($__internal_16cc5bf643141bf1dfbaa6cf337cf117dfce2cfa4e746e31439dcc2aa9040f69_prof);

    }

    // line 29
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_84dcdd056418e925d74ba537a04e24186146005b8c738ec7547884db635e5e77 = $this->env->getExtension("native_profiler");
        $__internal_84dcdd056418e925d74ba537a04e24186146005b8c738ec7547884db635e5e77->enter($__internal_84dcdd056418e925d74ba537a04e24186146005b8c738ec7547884db635e5e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 30
        echo "
";
        
        $__internal_84dcdd056418e925d74ba537a04e24186146005b8c738ec7547884db635e5e77->leave($__internal_84dcdd056418e925d74ba537a04e24186146005b8c738ec7547884db635e5e77_prof);

    }

    public function getTemplateName()
    {
        return ":organization:createObject.html.twig";
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
