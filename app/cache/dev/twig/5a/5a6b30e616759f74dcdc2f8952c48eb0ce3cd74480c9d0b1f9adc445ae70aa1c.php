<?php

/* organization/newOrganization.html.twig */
class __TwigTemplate_d72133bf7d24926349e20947d415b8ee0edf2d65d5061ec0e57ece0067fbb50d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/newOrganization.html.twig", 1);
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
        $__internal_116500ab0789b60ce89565e51ad7529220f9b23acc717f56f5b5c45874ae2c0a = $this->env->getExtension("native_profiler");
        $__internal_116500ab0789b60ce89565e51ad7529220f9b23acc717f56f5b5c45874ae2c0a->enter($__internal_116500ab0789b60ce89565e51ad7529220f9b23acc717f56f5b5c45874ae2c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/newOrganization.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_116500ab0789b60ce89565e51ad7529220f9b23acc717f56f5b5c45874ae2c0a->leave($__internal_116500ab0789b60ce89565e51ad7529220f9b23acc717f56f5b5c45874ae2c0a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b347df5dcb7f401a894ac04cd85239e36a062f7954c5da6230728e8e352ac8ab = $this->env->getExtension("native_profiler");
        $__internal_b347df5dcb7f401a894ac04cd85239e36a062f7954c5da6230728e8e352ac8ab->enter($__internal_b347df5dcb7f401a894ac04cd85239e36a062f7954c5da6230728e8e352ac8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить учреждение\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"row\">
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_full", array()), 'label', array("label" => "Полное название"));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_full", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_short", array()), 'label', array("label" => "Краткое название"));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_short", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ur_address", array()), 'label', array("label" => "Юридический адрес"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ur_address", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'label', array("label" => "ФИО руководителя"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'label', array("label" => "Звание руководителя"));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<hr/>

<div class=\"dobavlenie row\">

    <div class=\"col-md-6\">
        <div class=\"zamestiteli\" data-prototype=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "rukovoditel_zamestitel", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-6 list_add\"></div>
    
</div>

<hr/>

<div class=\"row\">
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationMCH", array()), 'label', array("label" => "Филиал ФКУЗ МСЧ-76 ФСИН России"));
        echo "
    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationMCH", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div class=\"row\">
    <h4>Объекты</h4>
    <div class=\"col-md-6\">
    
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 47
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["obj"], "vars", array()), "value", array()) < (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array())) / 2))) {
                // line 48
                echo "                <div>
                    ";
                // line 49
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'errors');
                echo "
                    ";
                // line 50
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                    ";
                // line 51
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                </div>
            ";
            }
            // line 54
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        
    </div>
    <div class=\"col-md-6\">
        
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 60
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["obj"], "vars", array()), "value", array()) >= (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array())) / 2))) {
                // line 61
                echo "                <div>
                    ";
                // line 62
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'errors');
                echo "
                    ";
                // line 63
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                    ";
                // line 64
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                </div>
            ";
            }
            // line 67
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        
    </div>
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Добавить учреждение\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_b347df5dcb7f401a894ac04cd85239e36a062f7954c5da6230728e8e352ac8ab->leave($__internal_b347df5dcb7f401a894ac04cd85239e36a062f7954c5da6230728e8e352ac8ab_prof);

    }

    // line 78
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9e716b4f362580c8203645096657db0619709b500c11dd9444ff8d52e108a431 = $this->env->getExtension("native_profiler");
        $__internal_9e716b4f362580c8203645096657db0619709b500c11dd9444ff8d52e108a431->enter($__internal_9e716b4f362580c8203645096657db0619709b500c11dd9444ff8d52e108a431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 79
        echo "
";
        
        $__internal_9e716b4f362580c8203645096657db0619709b500c11dd9444ff8d52e108a431->leave($__internal_9e716b4f362580c8203645096657db0619709b500c11dd9444ff8d52e108a431_prof);

    }

    public function getTemplateName()
    {
        return "organization/newOrganization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 79,  208 => 78,  193 => 68,  187 => 67,  181 => 64,  177 => 63,  173 => 62,  170 => 61,  167 => 60,  163 => 59,  157 => 55,  151 => 54,  145 => 51,  141 => 50,  137 => 49,  134 => 48,  131 => 47,  127 => 46,  117 => 39,  113 => 38,  101 => 29,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить учреждение" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     {{ form_label(form.name_full, 'Полное название') }}*/
/*     {{ form_widget(form.name_full, { 'attr': {'class': 'form-control'} }) }}*/
/*     {{ form_label(form.name_short, 'Краткое название') }}*/
/*     {{ form_widget(form.name_short, { 'attr': {'class': 'form-control'} }) }}    */
/*     {{ form_label(form.ur_address, 'Юридический адрес') }}*/
/*     {{ form_widget(form.ur_address, { 'attr': {'class': 'form-control', 'spellcheck' : 'true'} }) }}*/
/*     {{ form_label(form.rukovoditel.fio, 'ФИО руководителя') }}*/
/*     {{ form_widget(form.rukovoditel.fio, { 'attr': {'class': 'form-control'} }) }}*/
/*     {{ form_label(form.rukovoditel.zvanie, 'Звание руководителя') }}*/
/*     {{ form_widget(form.rukovoditel.zvanie, { 'attr': {'class': 'form-control'} }) }}*/
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/* */
/*     <div class="col-md-6">*/
/*         <div class="zamestiteli" data-prototype="{{ form_widget(form.rukovoditel.rukovoditel_zamestitel.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-6 list_add"></div>*/
/*     */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="row">*/
/*     {{ form_label(form.organizationMCH, 'Филиал ФКУЗ МСЧ-76 ФСИН России') }}*/
/*     {{ form_widget(form.organizationMCH, { 'attr': {'class': 'form-control'} }) }}*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <h4>Объекты</h4>*/
/*     <div class="col-md-6">*/
/*     */
/*         {% for obj in form.objects %}*/
/*             {% if obj.vars.value < (form.objects|length)/2 %}*/
/*                 <div>*/
/*                     {{ form_errors(obj) }}*/
/*                     {{ form_widget(obj) }}*/
/*                     {{ form_label(obj) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         */
/*     </div>*/
/*     <div class="col-md-6">*/
/*         */
/*         {% for obj in form.objects %}*/
/*             {% if obj.vars.value >= (form.objects|length)/2 %}*/
/*                 <div>*/
/*                     {{ form_errors(obj) }}*/
/*                     {{ form_widget(obj) }}*/
/*                     {{ form_label(obj) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         */
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Добавить учреждение" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
