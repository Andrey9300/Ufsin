<?php

/* organization/new.html.twig */
class __TwigTemplate_d92ef59613a1f616bc98d8b2a2b2877464b6f3e07f93de042562c44f35f2c868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/new.html.twig", 1);
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
        $__internal_02869510dea266a006b41fdef16187292195883f2100579a0b3474ac85edbc04 = $this->env->getExtension("native_profiler");
        $__internal_02869510dea266a006b41fdef16187292195883f2100579a0b3474ac85edbc04->enter($__internal_02869510dea266a006b41fdef16187292195883f2100579a0b3474ac85edbc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02869510dea266a006b41fdef16187292195883f2100579a0b3474ac85edbc04->leave($__internal_02869510dea266a006b41fdef16187292195883f2100579a0b3474ac85edbc04_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_3e8da47c5b3b89d50e0740c25a57627d7187ef0c359161580cacf218c169be5b = $this->env->getExtension("native_profiler");
        $__internal_3e8da47c5b3b89d50e0740c25a57627d7187ef0c359161580cacf218c169be5b->enter($__internal_3e8da47c5b3b89d50e0740c25a57627d7187ef0c359161580cacf218c169be5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
   ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"form-group\" style=\"height:30px\">
        <input type=\"submit\" value=\"Добавить учреждение\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>

    <div class=\"form-group\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Название"));
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ur_address", array()), 'label', array("label" => "Юридический адрес"));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ur_address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>    

    <h4>Объекты:</h4>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-6\">
            
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 27
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["obj"], "vars", array()), "value", array()) < (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array())) / 2))) {
                // line 28
                echo "                        <div>
                            ";
                // line 29
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'errors');
                echo "
                            ";
                // line 30
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                            ";
                // line 31
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                        </div>
                    ";
            }
            // line 34
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                
            </div>
            <div class=\"col-xs-6\">
                
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 40
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["obj"], "vars", array()), "value", array()) >= (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array())) / 2))) {
                // line 41
                echo "                        <div>
                            ";
                // line 42
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'errors');
                echo "
                            ";
                // line 43
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                            ";
                // line 44
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                        </div>
                    ";
            }
            // line 47
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                
            </div>
        </div>
    </div>
    
    <h4>Филиал ФКУЗ МСЧ-76 ФСИН России:</h4>
    <div class=\"form-group\">
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationMCH", array()), 'widget');
        echo "
    </div>
        
    <h4>Руководитель:</h4>
    <div class=\"form-group\">
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'label', array("label" => "ФИО"));
        echo "
        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div> 
    <div class=\"form-group\">
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'label', array("label" => "Звание"));
        echo "
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div> 

    <div class=\"zamestiteli\" data-prototype=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "rukovoditel_zamestitel", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">

    </div>
    
    <div class=\"form-group\" style=\"height:30px\">
        <input type=\"submit\" value=\"Добавить учреждение\" class=\"btn btn-success\" style=\"float:right;\"/>
    </div>
    
";
        
        $__internal_3e8da47c5b3b89d50e0740c25a57627d7187ef0c359161580cacf218c169be5b->leave($__internal_3e8da47c5b3b89d50e0740c25a57627d7187ef0c359161580cacf218c169be5b_prof);

    }

    // line 78
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1811358e53035157481867c26f43550f453aa36e869a69edaf4828ef0cc5d68f = $this->env->getExtension("native_profiler");
        $__internal_1811358e53035157481867c26f43550f453aa36e869a69edaf4828ef0cc5d68f->enter($__internal_1811358e53035157481867c26f43550f453aa36e869a69edaf4828ef0cc5d68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 79
        echo "
";
        
        $__internal_1811358e53035157481867c26f43550f453aa36e869a69edaf4828ef0cc5d68f->leave($__internal_1811358e53035157481867c26f43550f453aa36e869a69edaf4828ef0cc5d68f_prof);

    }

    public function getTemplateName()
    {
        return "organization/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 79,  199 => 78,  183 => 68,  177 => 65,  173 => 64,  167 => 61,  163 => 60,  155 => 55,  146 => 48,  140 => 47,  134 => 44,  130 => 43,  126 => 42,  123 => 41,  120 => 40,  116 => 39,  110 => 35,  104 => 34,  98 => 31,  94 => 30,  90 => 29,  87 => 28,  84 => 27,  80 => 26,  68 => 17,  64 => 16,  58 => 13,  54 => 12,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*    {{ form_start(form) }}*/
/* */
/*     <div class="form-group" style="height:30px">*/
/*         <input type="submit" value="Добавить учреждение" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.name, 'Название') }}*/
/*         {{ form_widget(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(form.ur_address, 'Юридический адрес') }}*/
/*         {{ form_widget(form.ur_address, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div>    */
/* */
/*     <h4>Объекты:</h4>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-6">*/
/*             */
/*                 {% for obj in form.objects %}*/
/*                     {% if obj.vars.value < (form.objects|length)/2 %}*/
/*                         <div>*/
/*                             {{ form_errors(obj) }}*/
/*                             {{ form_widget(obj) }}*/
/*                             {{ form_label(obj) }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 */
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 */
/*                 {% for obj in form.objects %}*/
/*                     {% if obj.vars.value >= (form.objects|length)/2 %}*/
/*                         <div>*/
/*                             {{ form_errors(obj) }}*/
/*                             {{ form_widget(obj) }}*/
/*                             {{ form_label(obj) }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <h4>Филиал ФКУЗ МСЧ-76 ФСИН России:</h4>*/
/*     <div class="form-group">*/
/*         {{ form_widget(form.organizationMCH) }}*/
/*     </div>*/
/*         */
/*     <h4>Руководитель:</h4>*/
/*     <div class="form-group">*/
/*         {{ form_label(form.rukovoditel.fio, 'ФИО') }}*/
/*         {{ form_widget(form.rukovoditel.fio, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div> */
/*     <div class="form-group">*/
/*         {{ form_label(form.rukovoditel.zvanie, 'Звание') }}*/
/*         {{ form_widget(form.rukovoditel.zvanie, { 'attr': {'class': 'form-control'} }) }}*/
/*     </div> */
/* */
/*     <div class="zamestiteli" data-prototype="{{ form_widget(form.rukovoditel.rukovoditel_zamestitel.vars.prototype)|e }}">*/
/* */
/*     </div>*/
/*     */
/*     <div class="form-group" style="height:30px">*/
/*         <input type="submit" value="Добавить учреждение" class="btn btn-success" style="float:right;"/>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
