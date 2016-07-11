<?php

/* organization/createDogovorForOrganization.html.twig */
class __TwigTemplate_3d36a6a13ce9bb943ad1db1a6856eac9100a437de0bc34f7a0084934bccd618a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/createDogovorForOrganization.html.twig", 1);
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
        $__internal_aed7d63b53bf08826fe0226f2708da2116b8680db5f12e2a5a7f251897ff5c2c = $this->env->getExtension("native_profiler");
        $__internal_aed7d63b53bf08826fe0226f2708da2116b8680db5f12e2a5a7f251897ff5c2c->enter($__internal_aed7d63b53bf08826fe0226f2708da2116b8680db5f12e2a5a7f251897ff5c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/createDogovorForOrganization.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed7d63b53bf08826fe0226f2708da2116b8680db5f12e2a5a7f251897ff5c2c->leave($__internal_aed7d63b53bf08826fe0226f2708da2116b8680db5f12e2a5a7f251897ff5c2c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f8403e8c6f48e621382437f8edf9a7ad39aa5473eb6e319c2e99eac8b04137f5 = $this->env->getExtension("native_profiler");
        $__internal_f8403e8c6f48e621382437f8edf9a7ad39aa5473eb6e319c2e99eac8b04137f5->enter($__internal_f8403e8c6f48e621382437f8edf9a7ad39aa5473eb6e319c2e99eac8b04137f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Добавление договора для ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
        echo "</h1>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"form-group\" style=\"height:30px\">
    <input type=\"submit\" value=\"Добавить договор\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер договора"));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (гггг-мм-дд)"));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summa", array()), 'label', array("label" => "Сумма"));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summa", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization_posrednik", array()), 'label', array("label" => "Организация"));
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization_posrednik", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

<h4>Объекты:</h4>

<div class=\"container\">
    <div class=\"row dogovor_objects\">
        <div class=\"col-xs-6\">
        
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovor_objects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 38
            echo "                ";
            if (($this->getAttribute($this->getAttribute($context["obj"], "vars", array()), "value", array()) < (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovor_objects", array())) / 2))) {
                // line 39
                echo "                    <div>
                        ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'errors');
                echo "
                        ";
                // line 41
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                        ";
                // line 42
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                    </div>
                ";
            }
            // line 45
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            
        </div>
        <div class=\"col-xs-6\">
            
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovor_objects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 51
            echo "                ";
            if (($this->getAttribute($this->getAttribute($context["obj"], "vars", array()), "value", array()) >= (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovor_objects", array())) / 2))) {
                // line 52
                echo "                    <div>
                        ";
                // line 53
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'errors');
                echo "
                        ";
                // line 54
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                        ";
                // line 55
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                    </div>
                ";
            }
            // line 58
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            
        </div>
    </div><input type=\"button\" value=\"Выделить все\" class=\"btn btn-xs btn-primary\" id=\"checkedObjectsAll\" style=\"float:right;\"/>
</div>
         
<h4>Тип договора:</h4>
<div class=\"form-group\">
    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovor_type_id", array()), 'widget');
        echo "
</div>

<div class=\"form-group\" style=\"height:30px\">
    <input type=\"submit\" value=\"Добавить договор\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_f8403e8c6f48e621382437f8edf9a7ad39aa5473eb6e319c2e99eac8b04137f5->leave($__internal_f8403e8c6f48e621382437f8edf9a7ad39aa5473eb6e319c2e99eac8b04137f5_prof);

    }

    // line 75
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4e2086a635d8645ab183f3396a1c5d6d6bcacc928a422bb580c1a42a4dcde343 = $this->env->getExtension("native_profiler");
        $__internal_4e2086a635d8645ab183f3396a1c5d6d6bcacc928a422bb580c1a42a4dcde343->enter($__internal_4e2086a635d8645ab183f3396a1c5d6d6bcacc928a422bb580c1a42a4dcde343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 76
        echo "
";
        
        $__internal_4e2086a635d8645ab183f3396a1c5d6d6bcacc928a422bb580c1a42a4dcde343->leave($__internal_4e2086a635d8645ab183f3396a1c5d6d6bcacc928a422bb580c1a42a4dcde343_prof);

    }

    public function getTemplateName()
    {
        return "organization/createDogovorForOrganization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 76,  196 => 75,  181 => 66,  172 => 59,  166 => 58,  160 => 55,  156 => 54,  152 => 53,  149 => 52,  146 => 51,  142 => 50,  136 => 46,  130 => 45,  124 => 42,  120 => 41,  116 => 40,  113 => 39,  110 => 38,  106 => 37,  95 => 29,  91 => 28,  84 => 24,  80 => 23,  74 => 20,  70 => 19,  64 => 16,  60 => 15,  49 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <h1>Добавление договора для {{organization_name}}</h1>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="form-group" style="height:30px">*/
/*     <input type="submit" value="Добавить договор" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-4">*/
/*             {{ form_label(form.nomer, 'Номер договора') }}*/
/*             {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-lg-4">*/
/*             {{ form_label(form.date, 'Дата (гггг-мм-дд)') }}*/
/*             {{ form_widget(form.date, { 'attr': {'class': 'form-control'} }) }}    */
/*         </div>*/
/*         <div class="col-lg-4">*/
/*             {{ form_label(form.summa, 'Сумма') }}*/
/*             {{ form_widget(form.summa, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_label(form.organization_posrednik, 'Организация') }}*/
/*     {{ form_widget(form.organization_posrednik, { 'attr': {'class': 'form-control'} }) }}*/
/* */
/* <h4>Объекты:</h4>*/
/* */
/* <div class="container">*/
/*     <div class="row dogovor_objects">*/
/*         <div class="col-xs-6">*/
/*         */
/*             {% for obj in form.dogovor_objects %}*/
/*                 {% if obj.vars.value < (form.dogovor_objects|length)/2 %}*/
/*                     <div>*/
/*                         {{ form_errors(obj) }}*/
/*                         {{ form_widget(obj) }}*/
/*                         {{ form_label(obj) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             */
/*         </div>*/
/*         <div class="col-xs-6">*/
/*             */
/*             {% for obj in form.dogovor_objects %}*/
/*                 {% if obj.vars.value >= (form.dogovor_objects|length)/2 %}*/
/*                     <div>*/
/*                         {{ form_errors(obj) }}*/
/*                         {{ form_widget(obj) }}*/
/*                         {{ form_label(obj) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             */
/*         </div>*/
/*     </div><input type="button" value="Выделить все" class="btn btn-xs btn-primary" id="checkedObjectsAll" style="float:right;"/>*/
/* </div>*/
/*          */
/* <h4>Тип договора:</h4>*/
/* <div class="form-group">*/
/*     {{ form_widget(form.dogovor_type_id) }}*/
/* </div>*/
/* */
/* <div class="form-group" style="height:30px">*/
/*     <input type="submit" value="Добавить договор" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
