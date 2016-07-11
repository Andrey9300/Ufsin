<?php

/* organization/showOsugdenyi.html.twig */
class __TwigTemplate_c300bce6fe5e0c781530a40dbcf30fbd2ebb9ae39bec8a2ec2ea84ddbdc04372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/showOsugdenyi.html.twig", 1);
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
        $__internal_70b916d548e9f05acf2fef8f908f187ed378acc5f96dd1bc1e8da83968929362 = $this->env->getExtension("native_profiler");
        $__internal_70b916d548e9f05acf2fef8f908f187ed378acc5f96dd1bc1e8da83968929362->enter($__internal_70b916d548e9f05acf2fef8f908f187ed378acc5f96dd1bc1e8da83968929362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/showOsugdenyi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b916d548e9f05acf2fef8f908f187ed378acc5f96dd1bc1e8da83968929362->leave($__internal_70b916d548e9f05acf2fef8f908f187ed378acc5f96dd1bc1e8da83968929362_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_665ebc42cd477944c594f9fa79a75cd28093d01654e4cd88727859f045f6afa0 = $this->env->getExtension("native_profiler");
        $__internal_665ebc42cd477944c594f9fa79a75cd28093d01654e4cd88727859f045f6afa0->enter($__internal_665ebc42cd477944c594f9fa79a75cd28093d01654e4cd88727859f045f6afa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Выберите осужденного:</h1>
</div>

<div class=\"row\">
    <select class=\"form-control\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["osugdenyis"]) ? $context["osugdenyis"] : $this->getContext($context, "osugdenyis")));
        foreach ($context['_seq'] as $context["_key"] => $context["osugdenyi"]) {
            // line 12
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osugdenyi"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osugdenyi"], "fio", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["osugdenyi"], "dateBirthday", array()), "d.m.Y"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osugdenyi"], "placeProgivaniya", array()), "html", null, true);
            echo " </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osugdenyi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </select>
</div>

<div class=\"row\">
    <input type=\"submit\" value=\"Редактировать карточку заболевшего\" class=\"btn btn-success\" id=\"showOsugdenyi\" style=\"margin-top:10px\"/>
</div>    

";
        
        $__internal_665ebc42cd477944c594f9fa79a75cd28093d01654e4cd88727859f045f6afa0->leave($__internal_665ebc42cd477944c594f9fa79a75cd28093d01654e4cd88727859f045f6afa0_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3747a0f138e5f6a6c1f52dd89fa1375b8eb4290ea195e720adf8d4907794985e = $this->env->getExtension("native_profiler");
        $__internal_3747a0f138e5f6a6c1f52dd89fa1375b8eb4290ea195e720adf8d4907794985e->enter($__internal_3747a0f138e5f6a6c1f52dd89fa1375b8eb4290ea195e720adf8d4907794985e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "
";
        
        $__internal_3747a0f138e5f6a6c1f52dd89fa1375b8eb4290ea195e720adf8d4907794985e->leave($__internal_3747a0f138e5f6a6c1f52dd89fa1375b8eb4290ea195e720adf8d4907794985e_prof);

    }

    public function getTemplateName()
    {
        return "organization/showOsugdenyi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  83 => 23,  69 => 14,  54 => 12,  50 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Выберите осужденного:</h1>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <select class="form-control">*/
/*         {% for osugdenyi in osugdenyis %}*/
/*         <option value="{{ osugdenyi.id }}">{{ osugdenyi.fio }}, {{osugdenyi.dateBirthday|date("d.m.Y") }}, {{ osugdenyi.placeProgivaniya }} </option>*/
/*         {% endfor %}*/
/*     </select>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <input type="submit" value="Редактировать карточку заболевшего" class="btn btn-success" id="showOsugdenyi" style="margin-top:10px"/>*/
/* </div>    */
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
