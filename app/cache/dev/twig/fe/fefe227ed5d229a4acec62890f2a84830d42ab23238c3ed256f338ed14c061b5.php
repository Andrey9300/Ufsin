<?php

/* dogovor/editDogovor.html.twig */
class __TwigTemplate_530d100b039fe579898b0ceca8c482b982924901612ae14cff061ca9ce06ded0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dogovor/editDogovor.html.twig", 1);
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
        $__internal_a1775ba3d91291de5d36c5ceb0f0d19ea8a4b89e81dca0f95849b65535a7124f = $this->env->getExtension("native_profiler");
        $__internal_a1775ba3d91291de5d36c5ceb0f0d19ea8a4b89e81dca0f95849b65535a7124f->enter($__internal_a1775ba3d91291de5d36c5ceb0f0d19ea8a4b89e81dca0f95849b65535a7124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dogovor/editDogovor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1775ba3d91291de5d36c5ceb0f0d19ea8a4b89e81dca0f95849b65535a7124f->leave($__internal_a1775ba3d91291de5d36c5ceb0f0d19ea8a4b89e81dca0f95849b65535a7124f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0f24958d197008f07a5efe8a1c498d4bb6e06ac13bd75a24d15bb8f6a7827b09 = $this->env->getExtension("native_profiler");
        $__internal_0f24958d197008f07a5efe8a1c498d4bb6e06ac13bd75a24d15bb8f6a7827b09->enter($__internal_0f24958d197008f07a5efe8a1c498d4bb6e06ac13bd75a24d15bb8f6a7827b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Изменение договора «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dogovor"]) ? $context["dogovor"] : $this->getContext($context, "dogovor")), "nomer", array()), "html", null, true);
        echo "»</h1>
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

<hr/>

<div class=\"row\">            
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"/dogovor/deleteDogovor/";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dogovor"]) ? $context["dogovor"] : $this->getContext($context, "dogovor")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить договор</a></li>
   </ul>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>
</div>

";
        
        $__internal_0f24958d197008f07a5efe8a1c498d4bb6e06ac13bd75a24d15bb8f6a7827b09->leave($__internal_0f24958d197008f07a5efe8a1c498d4bb6e06ac13bd75a24d15bb8f6a7827b09_prof);

    }

    // line 92
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_06836c80d0772ac67fcc5afc527bb2ac60d8e6023f443d6b0ed8be4908882564 = $this->env->getExtension("native_profiler");
        $__internal_06836c80d0772ac67fcc5afc527bb2ac60d8e6023f443d6b0ed8be4908882564->enter($__internal_06836c80d0772ac67fcc5afc527bb2ac60d8e6023f443d6b0ed8be4908882564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 93
        echo "
";
        
        $__internal_06836c80d0772ac67fcc5afc527bb2ac60d8e6023f443d6b0ed8be4908882564->leave($__internal_06836c80d0772ac67fcc5afc527bb2ac60d8e6023f443d6b0ed8be4908882564_prof);

    }

    public function getTemplateName()
    {
        return "dogovor/editDogovor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 93,  255 => 92,  237 => 80,  224 => 69,  210 => 68,  204 => 65,  200 => 64,  197 => 63,  194 => 62,  177 => 61,  171 => 57,  157 => 56,  151 => 53,  147 => 52,  144 => 51,  141 => 50,  124 => 49,  111 => 39,  107 => 38,  98 => 32,  94 => 31,  88 => 28,  84 => 27,  78 => 24,  74 => 23,  68 => 20,  64 => 19,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Изменение договора «{{ dogovor.nomer }}»</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
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
/*     </div>    */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="row">            */
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="/dogovor/deleteDogovor/{{ dogovor.id }}" class="delete_entity">Удалить договор</a></li>*/
/*    </ul>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
