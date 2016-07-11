<?php

/* :organization:newRukZamTest.html.twig */
class __TwigTemplate_8cc0b9c7d32a55eccbf40f8d94be6d11902212471974cc9c97085ae9382c40ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:newRukZamTest.html.twig", 1);
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
        $__internal_7ee1116cc84008073237f68b10313a0e3a64dfeebc13ee91b7d02fa09c47945b = $this->env->getExtension("native_profiler");
        $__internal_7ee1116cc84008073237f68b10313a0e3a64dfeebc13ee91b7d02fa09c47945b->enter($__internal_7ee1116cc84008073237f68b10313a0e3a64dfeebc13ee91b7d02fa09c47945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:newRukZamTest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee1116cc84008073237f68b10313a0e3a64dfeebc13ee91b7d02fa09c47945b->leave($__internal_7ee1116cc84008073237f68b10313a0e3a64dfeebc13ee91b7d02fa09c47945b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1bc076314ff1c63873bc5eee97f162e3339bb5cfde39894641223fdccddf92d5 = $this->env->getExtension("native_profiler");
        $__internal_1bc076314ff1c63873bc5eee97f162e3339bb5cfde39894641223fdccddf92d5->enter($__internal_1bc076314ff1c63873bc5eee97f162e3339bb5cfde39894641223fdccddf92d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
   ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zvanie", array()), 'row');
        echo "

    <ul class=\"tags\" data-prototype=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel_zamestitel", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">

    </ul>

    
    <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"addRukovoditel\">Добавить руководителя</button>
    </div>
    <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"addZamestitel\" style=\"display:none\">Добавить заместителя</button>
    </div>    

    <input type=\"submit\" value=\"Добавить организацию\" class=\"btn btn-success\" />

";
        
        $__internal_1bc076314ff1c63873bc5eee97f162e3339bb5cfde39894641223fdccddf92d5->leave($__internal_1bc076314ff1c63873bc5eee97f162e3339bb5cfde39894641223fdccddf92d5_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e14ef0e9f36ba1fb0696cfa3a339eb1b42c5fdced5100a5a28f0abeeb2cea18c = $this->env->getExtension("native_profiler");
        $__internal_e14ef0e9f36ba1fb0696cfa3a339eb1b42c5fdced5100a5a28f0abeeb2cea18c->enter($__internal_e14ef0e9f36ba1fb0696cfa3a339eb1b42c5fdced5100a5a28f0abeeb2cea18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "
";
        
        $__internal_e14ef0e9f36ba1fb0696cfa3a339eb1b42c5fdced5100a5a28f0abeeb2cea18c->leave($__internal_e14ef0e9f36ba1fb0696cfa3a339eb1b42c5fdced5100a5a28f0abeeb2cea18c_prof);

    }

    public function getTemplateName()
    {
        return ":organization:newRukZamTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  79 => 25,  57 => 9,  52 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*    {{ form_start(form) }}*/
/*     {{ form_row(form.fio) }}*/
/*     {{ form_row(form.zvanie) }}*/
/* */
/*     <ul class="tags" data-prototype="{{ form_widget(form.rukovoditel_zamestitel.vars.prototype)|e }}">*/
/* */
/*     </ul>*/
/* */
/*     */
/*     <div class="form-group">*/
/*         <button type="button" class="btn btn-sm btn-primary" id="addRukovoditel">Добавить руководителя</button>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <button type="button" class="btn btn-sm btn-primary" id="addZamestitel" style="display:none">Добавить заместителя</button>*/
/*     </div>    */
/* */
/*     <input type="submit" value="Добавить организацию" class="btn btn-success" />*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
