<?php

/* organization/editOrganization.html.twig */
class __TwigTemplate_745b2ec4b378302a77982c6bd80d6f3e8391d486e8f18dabb857f0bc498d0a7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/editOrganization.html.twig", 1);
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
        $__internal_ada130576233a3e565ca83e86bfb31570423d73942465ba3e2dc2cc169da67a7 = $this->env->getExtension("native_profiler");
        $__internal_ada130576233a3e565ca83e86bfb31570423d73942465ba3e2dc2cc169da67a7->enter($__internal_ada130576233a3e565ca83e86bfb31570423d73942465ba3e2dc2cc169da67a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/editOrganization.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada130576233a3e565ca83e86bfb31570423d73942465ba3e2dc2cc169da67a7->leave($__internal_ada130576233a3e565ca83e86bfb31570423d73942465ba3e2dc2cc169da67a7_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b2e0541cdb575450bf4f1cd9f987e9c33e9cc9fa697ca7f85a1fd4e5fcec8389 = $this->env->getExtension("native_profiler");
        $__internal_b2e0541cdb575450bf4f1cd9f987e9c33e9cc9fa697ca7f85a1fd4e5fcec8389->enter($__internal_b2e0541cdb575450bf4f1cd9f987e9c33e9cc9fa697ca7f85a1fd4e5fcec8389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Редактировать учреждение «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "nameShort", array()), "html", null, true);
        echo "»</h1>
</div>

";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"row\">
    <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

<div class=\"row\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_full", array()), 'label', array("label" => "Полное название"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_full", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_short", array()), 'label', array("label" => "Краткое название"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_short", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ur_address", array()), 'label', array("label" => "Юридический адрес"));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ur_address", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'label', array("label" => "ФИО руководителя"));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'label', array("label" => "Звание руководителя"));
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "zvanie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "    
</div>

<hr/>

<div class=\"dobavlenie row\">

    <div class=\"col-md-4\">
        <div class=\"zamestiteli\" data-prototype=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rukovoditel", array()), "rukovoditel_zamestitel", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
    </div>
    <div class=\"col-md-4 list_add\"></div>
    <div class=\"col-md-4 list_now\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organization_rukovoditel_zamestitel"]) ? $context["organization_rukovoditel_zamestitel"] : $this->getContext($context, "organization_rukovoditel_zamestitel")));
        foreach ($context['_seq'] as $context["_key"] => $context["rukovoditel_zamestitel"]) {
            // line 38
            echo "            <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rukovoditel_zamestitel"], "fio", array()), "html", null, true);
            echo "</strong>, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rukovoditel_zamestitel"], "zvanie", array()), "html", null, true);
            echo "<button style=\"float:none\" id=\"/organization/deleteRukZam/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rukovoditel_zamestitel"], "id", array()), "html", null, true);
            echo "\" class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rukovoditel_zamestitel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>    
</div>

<hr/>

<div class=\"row\">
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationMCH", array()), 'label', array("label" => "Филиал ФКУЗ МСЧ-76 ФСИН России"));
        echo "
    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationMCH", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div class=\"row\">
    <h4>Объекты</h4>
    <div class=\"col-md-6\">
    
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 55
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["obj"], "vars", array()), "value", array()) < (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array())) / 2))) {
                // line 56
                echo "                <div>
                    ";
                // line 57
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'errors');
                echo "
                    ";
                // line 58
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                    ";
                // line 59
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                </div>
            ";
            }
            // line 62
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        
    </div>
    <div class=\"col-md-6\">
        
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 68
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["obj"], "vars", array()), "value", array()) >= (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objects", array())) / 2))) {
                // line 69
                echo "                <div>
                    ";
                // line 70
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'errors');
                echo "
                    ";
                // line 71
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'widget');
                echo "
                    ";
                // line 72
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["obj"], 'label');
                echo "
                </div>
            ";
            }
            // line 75
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        
    </div>
</div>

<div class=\"row\">

    <div class=\"col-md-6 list_now\">
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "getObjects", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 84
            echo "            ";
            if (($this->getAttribute($context["loop"], "index", array()) < (twig_length_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "getObjects", array())) / 2))) {
                // line 85
                echo "                <div>Добавленные <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "name", array()), "html", null, true);
                echo "</strong><button style=\"float:none\" id=\"/organization/deleteObjectOrganization/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "id", array()), "html", null, true);
                echo "\" class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button></div>
            ";
            }
            // line 87
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    </div>
    
    <div class=\"col-md-6 list_now\">
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "getObjects", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 92
            echo "            ";
            if (($this->getAttribute($context["loop"], "index", array()) >= (twig_length_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "getObjects", array())) / 2))) {
                // line 93
                echo "                <div>Добавленные <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "name", array()), "html", null, true);
                echo "</strong><button style=\"float:none\" id=\"/organization/deleteObjectOrganization/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "id", array()), "html", null, true);
                echo "\" class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button></div>
            ";
            }
            // line 95
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    </div>    
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
</div>

";
        
        $__internal_b2e0541cdb575450bf4f1cd9f987e9c33e9cc9fa697ca7f85a1fd4e5fcec8389->leave($__internal_b2e0541cdb575450bf4f1cd9f987e9c33e9cc9fa697ca7f85a1fd4e5fcec8389_prof);

    }

    // line 105
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5636680be7cf7bdb5a8e2e22f89b93b80e5a1877ddbdf9d7c7800edc4cb6651d = $this->env->getExtension("native_profiler");
        $__internal_5636680be7cf7bdb5a8e2e22f89b93b80e5a1877ddbdf9d7c7800edc4cb6651d->enter($__internal_5636680be7cf7bdb5a8e2e22f89b93b80e5a1877ddbdf9d7c7800edc4cb6651d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 106
        echo "
";
        
        $__internal_5636680be7cf7bdb5a8e2e22f89b93b80e5a1877ddbdf9d7c7800edc4cb6651d->leave($__internal_5636680be7cf7bdb5a8e2e22f89b93b80e5a1877ddbdf9d7c7800edc4cb6651d_prof);

    }

    public function getTemplateName()
    {
        return "organization/editOrganization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 106,  336 => 105,  322 => 96,  308 => 95,  298 => 93,  295 => 92,  278 => 91,  273 => 88,  259 => 87,  249 => 85,  246 => 84,  229 => 83,  220 => 76,  214 => 75,  208 => 72,  204 => 71,  200 => 70,  197 => 69,  194 => 68,  190 => 67,  184 => 63,  178 => 62,  172 => 59,  168 => 58,  164 => 57,  161 => 56,  158 => 55,  154 => 54,  144 => 47,  140 => 46,  132 => 40,  119 => 38,  115 => 37,  108 => 33,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Редактировать учреждение «{{ organization.nameShort }}»</h1>*/
/* </div>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
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
/*     {{ form_widget(form.rukovoditel.zvanie, { 'attr': {'class': 'form-control'} }) }}    */
/* </div>*/
/* */
/* <hr/>*/
/* */
/* <div class="dobavlenie row">*/
/* */
/*     <div class="col-md-4">*/
/*         <div class="zamestiteli" data-prototype="{{ form_widget(form.rukovoditel.rukovoditel_zamestitel.vars.prototype)|e }}"></div>*/
/*     </div>*/
/*     <div class="col-md-4 list_add"></div>*/
/*     <div class="col-md-4 list_now">*/
/*         {% for rukovoditel_zamestitel in organization_rukovoditel_zamestitel %}*/
/*             <div>Добавленные <strong>{{ rukovoditel_zamestitel.fio }}</strong>, {{ rukovoditel_zamestitel.zvanie }}<button style="float:none" id="/organization/deleteRukZam/{{ rukovoditel_zamestitel.id }}" class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button></div>*/
/*         {% endfor %}*/
/*     </div>    */
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
/* */
/*     <div class="col-md-6 list_now">*/
/*         {% for object in organization.getObjects %}*/
/*             {% if loop.index < (organization.getObjects|length)/2 %}*/
/*                 <div>Добавленные <strong>{{ object.name }}</strong><button style="float:none" id="/organization/deleteObjectOrganization/{{ organization.id }}/{{ object.id }}" class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button></div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/*     */
/*     <div class="col-md-6 list_now">*/
/*         {% for object in organization.getObjects %}*/
/*             {% if loop.index >= (organization.getObjects|length)/2 %}*/
/*                 <div>Добавленные <strong>{{ object.name }}</strong><button style="float:none" id="/organization/deleteObjectOrganization/{{ organization.id }}/{{ object.id }}" class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button></div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>    */
/* </div>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
