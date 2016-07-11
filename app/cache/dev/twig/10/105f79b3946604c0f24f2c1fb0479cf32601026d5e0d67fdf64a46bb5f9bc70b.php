<?php

/* :issledovanie:createPokazatel.html.twig */
class __TwigTemplate_a2d74870174c9504181a5df4760ec0373d0a4774afae5b2e723dfc643204778d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":issledovanie:createPokazatel.html.twig", 1);
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
        $__internal_5923dabe0593c7d0c15578c3f3e5dacc80b42e41304495bc843abb0f69b4961a = $this->env->getExtension("native_profiler");
        $__internal_5923dabe0593c7d0c15578c3f3e5dacc80b42e41304495bc843abb0f69b4961a->enter($__internal_5923dabe0593c7d0c15578c3f3e5dacc80b42e41304495bc843abb0f69b4961a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":issledovanie:createPokazatel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5923dabe0593c7d0c15578c3f3e5dacc80b42e41304495bc843abb0f69b4961a->leave($__internal_5923dabe0593c7d0c15578c3f3e5dacc80b42e41304495bc843abb0f69b4961a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_cb082136ebe0f3ce6bfff44bfd53c3e15115620682b494d68ec20154363dff0f = $this->env->getExtension("native_profiler");
        $__internal_cb082136ebe0f3ce6bfff44bfd53c3e15115620682b494d68ec20154363dff0f->enter($__internal_cb082136ebe0f3ce6bfff44bfd53c3e15115620682b494d68ec20154363dff0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавить показатель исследования</h1>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieType", array()), 'label', array("label" => "Тип исследования"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "issledovanieType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_znak", array()), 'label', array("label" => "Если больше \"+\" (меньше \"-\") или +/- (присутствует/отсутствует)"));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_znak", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ", array()), 'label', array("label" => "Начало диапазона (от) или число"));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_dob", array()), 'label', array("label" => "Норматив до"));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normativ_dob", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edinicy_issledovaniya", array()), 'label', array("label" => "Ед. изм."));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edinicy_issledovaniya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <input type=\"submit\" value=\"Добавить\" class=\"btn btn-success add_button\" id=\"createPokazatel\"/>
    </div>    
    <div class=\"col-md-4\"></div>
    <div class=\"col-md-4 list_now\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allPokazatels"]) ? $context["allPokazatels"] : $this->getContext($context, "allPokazatels")));
        foreach ($context['_seq'] as $context["_key"] => $context["pokazatel"]) {
            // line 32
            echo "            <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "name", array()), "html", null, true);
            echo "</strong><div style=\"display:inline\"><button style=\"float:none\" id_now=\"/issledovanie/deletePokazatel/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "id", array()), "html", null, true);
            echo "\" class=\"close delete_now\" type=\"button\"><span aria-hidden=\"true\">×</span></button></div></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokazatel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>  
</div>

";
        
        $__internal_cb082136ebe0f3ce6bfff44bfd53c3e15115620682b494d68ec20154363dff0f->leave($__internal_cb082136ebe0f3ce6bfff44bfd53c3e15115620682b494d68ec20154363dff0f_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f4b6b118b157598346e7c1c082244691f1e0ee7ae88c1339990b3fcf1ef1b8a1 = $this->env->getExtension("native_profiler");
        $__internal_f4b6b118b157598346e7c1c082244691f1e0ee7ae88c1339990b3fcf1ef1b8a1->enter($__internal_f4b6b118b157598346e7c1c082244691f1e0ee7ae88c1339990b3fcf1ef1b8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 40
        echo "
";
        
        $__internal_f4b6b118b157598346e7c1c082244691f1e0ee7ae88c1339990b3fcf1ef1b8a1->leave($__internal_f4b6b118b157598346e7c1c082244691f1e0ee7ae88c1339990b3fcf1ef1b8a1_prof);

    }

    public function getTemplateName()
    {
        return ":issledovanie:createPokazatel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 40,  134 => 39,  124 => 34,  113 => 32,  109 => 31,  101 => 26,  97 => 25,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавить показатель исследования</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {{ form_label(form.name, 'Наименование') }}*/
/*         {{ form_widget(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.issledovanieType, 'Тип исследования') }}*/
/*         {{ form_widget(form.issledovanieType, { 'attr': {'class': 'form-control'} }) }}*/
/* */
/*         {{ form_label(form.normativ_znak, 'Если больше "+" (меньше "-") или +/- (присутствует/отсутствует)') }}*/
/*         {{ form_widget(form.normativ_znak, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.normativ, 'Начало диапазона (от) или число') }}*/
/*         {{ form_widget(form.normativ, { 'attr': {'class': 'form-control'} }) }}*/
/*         {{ form_label(form.normativ_dob, 'Норматив до') }}*/
/*         {{ form_widget(form.normativ_dob, { 'attr': {'class': 'form-control'} }) }}*/
/*         */
/*         {{ form_label(form.edinicy_issledovaniya, 'Ед. изм.') }}*/
/*         {{ form_widget(form.edinicy_issledovaniya, { 'attr': {'class': 'form-control'} }) }}*/
/*         <input type="submit" value="Добавить" class="btn btn-success add_button" id="createPokazatel"/>*/
/*     </div>    */
/*     <div class="col-md-4"></div>*/
/*     <div class="col-md-4 list_now">*/
/*         {% for pokazatel in allPokazatels %}*/
/*             <div>Добавленные <strong>{{ pokazatel.name }}</strong><div style="display:inline"><button style="float:none" id_now="/issledovanie/deletePokazatel/{{ pokazatel.id }}" class="close delete_now" type="button"><span aria-hidden="true">×</span></button></div></div>*/
/*         {% endfor %}*/
/*     </div>  */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
