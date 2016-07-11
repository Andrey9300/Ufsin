<?php

/* otchet/ajax/fkuz_menu.html */
class __TwigTemplate_403a0fc302e8dad87cdff75d851392119263dcf258c85d8219d55ba5aa3886dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d393294238bee4923a977b3168378a7eb93122edfc4a5b63cf1ffd47a0b1fbe1 = $this->env->getExtension("native_profiler");
        $__internal_d393294238bee4923a977b3168378a7eb93122edfc4a5b63cf1ffd47a0b1fbe1->enter($__internal_d393294238bee4923a977b3168378a7eb93122edfc4a5b63cf1ffd47a0b1fbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/fkuz_menu.html"));

        // line 1
        echo "<div  class=\"row\">
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("nakazaniya_fkuz");
        echo "\">Наказания</a></li>
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("type_issledovanie_fkuz");
        echo "\">Исследования</a></li>
    </ul>
</div>";
        
        $__internal_d393294238bee4923a977b3168378a7eb93122edfc4a5b63cf1ffd47a0b1fbe1->leave($__internal_d393294238bee4923a977b3168378a7eb93122edfc4a5b63cf1ffd47a0b1fbe1_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/fkuz_menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div  class="row">*/
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="{{ path('nakazaniya_fkuz') }}">Наказания</a></li>*/
/*         <li><a href="{{ path('type_issledovanie_fkuz') }}">Исследования</a></li>*/
/*     </ul>*/
/* </div>*/
