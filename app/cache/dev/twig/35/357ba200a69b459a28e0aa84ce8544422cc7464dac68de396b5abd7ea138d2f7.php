<?php

/* :organization:showOsugdenyi.html.twig */
class __TwigTemplate_ef53f7e494bdb1d2fb82dbd65045115e36c5dbb62f73072310c72a93b14c239d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:showOsugdenyi.html.twig", 1);
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
        $__internal_48f5a6813fb4243162416df9d3df90b9bbbda10a8fa3f68251b419a3f86a9eb5 = $this->env->getExtension("native_profiler");
        $__internal_48f5a6813fb4243162416df9d3df90b9bbbda10a8fa3f68251b419a3f86a9eb5->enter($__internal_48f5a6813fb4243162416df9d3df90b9bbbda10a8fa3f68251b419a3f86a9eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:showOsugdenyi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f5a6813fb4243162416df9d3df90b9bbbda10a8fa3f68251b419a3f86a9eb5->leave($__internal_48f5a6813fb4243162416df9d3df90b9bbbda10a8fa3f68251b419a3f86a9eb5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_94d49d647fe7035d0b94d98335ed64a1559cafb9f0ee5d98976b760f6859bad2 = $this->env->getExtension("native_profiler");
        $__internal_94d49d647fe7035d0b94d98335ed64a1559cafb9f0ee5d98976b760f6859bad2->enter($__internal_94d49d647fe7035d0b94d98335ed64a1559cafb9f0ee5d98976b760f6859bad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_94d49d647fe7035d0b94d98335ed64a1559cafb9f0ee5d98976b760f6859bad2->leave($__internal_94d49d647fe7035d0b94d98335ed64a1559cafb9f0ee5d98976b760f6859bad2_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_06bd8ab6a169b0354cdb16aebb3cb6bf7bd8873fb78105bda07036969cea9547 = $this->env->getExtension("native_profiler");
        $__internal_06bd8ab6a169b0354cdb16aebb3cb6bf7bd8873fb78105bda07036969cea9547->enter($__internal_06bd8ab6a169b0354cdb16aebb3cb6bf7bd8873fb78105bda07036969cea9547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "
";
        
        $__internal_06bd8ab6a169b0354cdb16aebb3cb6bf7bd8873fb78105bda07036969cea9547->leave($__internal_06bd8ab6a169b0354cdb16aebb3cb6bf7bd8873fb78105bda07036969cea9547_prof);

    }

    public function getTemplateName()
    {
        return ":organization:showOsugdenyi.html.twig";
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
