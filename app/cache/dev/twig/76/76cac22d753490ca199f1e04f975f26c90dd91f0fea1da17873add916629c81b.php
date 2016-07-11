<?php

/* :dogovor:createDogovor.html.twig */
class __TwigTemplate_f32cff24d1a3ccba41d25853a09df43b5bfe04e992da07407a1541abc28d4e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogovor:createDogovor.html.twig", 1);
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
        $__internal_2cd4c5d3e5578e6dfb94f5ce48d8c015dad8b96f4eb3b7f13601cb6fc069d9e5 = $this->env->getExtension("native_profiler");
        $__internal_2cd4c5d3e5578e6dfb94f5ce48d8c015dad8b96f4eb3b7f13601cb6fc069d9e5->enter($__internal_2cd4c5d3e5578e6dfb94f5ce48d8c015dad8b96f4eb3b7f13601cb6fc069d9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogovor:createDogovor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd4c5d3e5578e6dfb94f5ce48d8c015dad8b96f4eb3b7f13601cb6fc069d9e5->leave($__internal_2cd4c5d3e5578e6dfb94f5ce48d8c015dad8b96f4eb3b7f13601cb6fc069d9e5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_497a4041aa5a6f407163b0060790c733a72b31b6f15c19f7ccabdb9ede8f8c14 = $this->env->getExtension("native_profiler");
        $__internal_497a4041aa5a6f407163b0060790c733a72b31b6f15c19f7ccabdb9ede8f8c14->enter($__internal_497a4041aa5a6f407163b0060790c733a72b31b6f15c19f7ccabdb9ede8f8c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление договора для «";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
        echo "»</h1>
</div>

";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"col-md-12\">
        <input type=\"submit\" value=\"Добавить договор\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-3\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер договора"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-md-3\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата (дд.мм.гггг)"));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "    
    </div>
    <div class=\"col-md-3\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summa", array()), 'label', array("label" => "Сумма"));
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summa", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-md-3\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovorType", array()), 'label', array("label" => "Тип договора"));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovorType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization_posrednik", array()), 'label', array("label" => "Организация"));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization_posrednik", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
    </div>
</div>

<div class=\"row dogovor_objects\">
    <div class=\"col-md-12\">
        <h4>Объекты</h4>
    </div>
    <div class=\"col-md-6\">
    
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovor_objects", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 50
            echo "            ";
            if (($this->getAttribute($context["loop"], "index", array()) <= (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovor_objects", array())) / 2))) {
                // line 51
                echo "                <div>
                    ";
                // line 52
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                    ";
                // line 53
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                </div>
            ";
            }
            // line 56
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        
    </div>
    <div class=\"col-md-6\">
        
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovor_objects", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 62
            echo "            ";
            if (($this->getAttribute($context["loop"], "index", array()) > (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dogovor_objects", array())) / 2))) {
                // line 63
                echo "                <div>
                    ";
                // line 64
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                    ";
                // line 65
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                </div>
            ";
            }
            // line 68
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        
    </div>
    <div class=\"col-md-12\">
        <input type=\"button\" value=\"Выделить все\" class=\"btn btn-xs btn-primary\" id=\"checkedObjectsAll\"/>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <input type=\"submit\" value=\"Добавить договор\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>
</div>

";
        
        $__internal_497a4041aa5a6f407163b0060790c733a72b31b6f15c19f7ccabdb9ede8f8c14->leave($__internal_497a4041aa5a6f407163b0060790c733a72b31b6f15c19f7ccabdb9ede8f8c14_prof);

    }

    // line 84
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fb0a6058ff272cbff4c38709620f7797cc5cc75bcf6a381522fc2c15816bd761 = $this->env->getExtension("native_profiler");
        $__internal_fb0a6058ff272cbff4c38709620f7797cc5cc75bcf6a381522fc2c15816bd761->enter($__internal_fb0a6058ff272cbff4c38709620f7797cc5cc75bcf6a381522fc2c15816bd761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 85
        echo "
";
        
        $__internal_fb0a6058ff272cbff4c38709620f7797cc5cc75bcf6a381522fc2c15816bd761->leave($__internal_fb0a6058ff272cbff4c38709620f7797cc5cc75bcf6a381522fc2c15816bd761_prof);

    }

    public function getTemplateName()
    {
        return ":dogovor:createDogovor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 85,  244 => 84,  224 => 69,  210 => 68,  204 => 65,  200 => 64,  197 => 63,  194 => 62,  177 => 61,  171 => 57,  157 => 56,  151 => 53,  147 => 52,  144 => 51,  141 => 50,  124 => 49,  111 => 39,  107 => 38,  98 => 32,  94 => 31,  88 => 28,  84 => 27,  78 => 24,  74 => 23,  68 => 20,  64 => 19,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление договора для «{{organization_name}}»</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <input type="submit" value="Добавить договор" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-3">*/
/*         {{ form_label(form.nomer, 'Номер договора') }}*/
/*         {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/*     <div class="col-md-3">*/
/*         {{ form_label(form.date, 'Дата (дд.мм.гггг)') }}*/
/*         {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}    */
/*     </div>*/
/*     <div class="col-md-3">*/
/*         {{ form_label(form.summa, 'Сумма') }}*/
/*         {{ form_widget(form.summa, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/*     <div class="col-md-3">*/
/*         {{ form_label(form.dogovorType, 'Тип договора') }}*/
/*         {{ form_widget(form.dogovorType, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         {{ form_label(form.organization_posrednik, 'Организация') }}*/
/*         {{ form_widget(form.organization_posrednik, { 'attr': {'class': 'form-control'} }) }}  */
/*     </div>*/
/* </div>*/
/* */
/* <div class="row dogovor_objects">*/
/*     <div class="col-md-12">*/
/*         <h4>Объекты</h4>*/
/*     </div>*/
/*     <div class="col-md-6">*/
/*     */
/*         {% for obj in form.dogovor_objects %}*/
/*             {% if loop.index <= (form.dogovor_objects|length)/2 %}*/
/*                 <div>*/
/*                     {{ form_widget(obj) }}*/
/*                     {{ form_label(obj) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         */
/*     </div>*/
/*     <div class="col-md-6">*/
/*         */
/*         {% for obj in form.dogovor_objects %}*/
/*             {% if loop.index > (form.dogovor_objects|length)/2 %}*/
/*                 <div>*/
/*                     {{ form_widget(obj) }}*/
/*                     {{ form_label(obj) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         */
/*     </div>*/
/*     <div class="col-md-12">*/
/*         <input type="button" value="Выделить все" class="btn btn-xs btn-primary" id="checkedObjectsAll"/>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <input type="submit" value="Добавить договор" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
