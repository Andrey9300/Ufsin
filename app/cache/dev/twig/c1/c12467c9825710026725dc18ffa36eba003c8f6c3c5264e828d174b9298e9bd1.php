<?php

/* otchet/ajax/issledovanie_menu.html */
class __TwigTemplate_ce3f2be1e01db8b80adf8ea4ffdae9cc47ba30a226d29625c4859c6f9e4607b4 extends Twig_Template
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
        $__internal_968fb14958b35029e89616f16b0be31e31411b198654fc18f898d5eca1698058 = $this->env->getExtension("native_profiler");
        $__internal_968fb14958b35029e89616f16b0be31e31411b198654fc18f898d5eca1698058->enter($__internal_968fb14958b35029e89616f16b0be31e31411b198654fc18f898d5eca1698058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/issledovanie_menu.html"));

        // line 1
        echo "<div  class=\"row\">
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("type_issledovanie");
        echo "\">Статистика исследований по типу</a></li>
    </ul>
</div>";
        
        $__internal_968fb14958b35029e89616f16b0be31e31411b198654fc18f898d5eca1698058->leave($__internal_968fb14958b35029e89616f16b0be31e31411b198654fc18f898d5eca1698058_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/issledovanie_menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div  class="row">*/
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="{{ path('type_issledovanie') }}">Статистика исследований по типу</a></li>*/
/*     </ul>*/
/* </div>*/
