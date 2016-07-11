<?php

/* otchet/issledovanie.html.twig */
class __TwigTemplate_7924882285afc79f226279184bfdc149e782a1c8d86d0c28c1af0036591d68fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/issledovanie.html.twig", 1);
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
        $__internal_da5ee43a009dc12f45f5a7a6f645ab7d958d7ed290a9f441de99a80a9bf0f333 = $this->env->getExtension("native_profiler");
        $__internal_da5ee43a009dc12f45f5a7a6f645ab7d958d7ed290a9f441de99a80a9bf0f333->enter($__internal_da5ee43a009dc12f45f5a7a6f645ab7d958d7ed290a9f441de99a80a9bf0f333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/issledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da5ee43a009dc12f45f5a7a6f645ab7d958d7ed290a9f441de99a80a9bf0f333->leave($__internal_da5ee43a009dc12f45f5a7a6f645ab7d958d7ed290a9f441de99a80a9bf0f333_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1ef7d8ed482c1aad83cde626bb8e91fa124d7046563bd80e06d0e7438461111b = $this->env->getExtension("native_profiler");
        $__internal_1ef7d8ed482c1aad83cde626bb8e91fa124d7046563bd80e06d0e7438461111b->enter($__internal_1ef7d8ed482c1aad83cde626bb8e91fa124d7046563bd80e06d0e7438461111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/issledovanie_menu.html", "otchet/issledovanie.html.twig", 5)->display($context);
        // line 6
        echo "
";
        
        $__internal_1ef7d8ed482c1aad83cde626bb8e91fa124d7046563bd80e06d0e7438461111b->leave($__internal_1ef7d8ed482c1aad83cde626bb8e91fa124d7046563bd80e06d0e7438461111b_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_283887ddf8e5196adc0727bad7e59001aacbb5cd1b32eb648bbf25956dafe235 = $this->env->getExtension("native_profiler");
        $__internal_283887ddf8e5196adc0727bad7e59001aacbb5cd1b32eb648bbf25956dafe235->enter($__internal_283887ddf8e5196adc0727bad7e59001aacbb5cd1b32eb648bbf25956dafe235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "
";
        
        $__internal_283887ddf8e5196adc0727bad7e59001aacbb5cd1b32eb648bbf25956dafe235->leave($__internal_283887ddf8e5196adc0727bad7e59001aacbb5cd1b32eb648bbf25956dafe235_prof);

    }

    public function getTemplateName()
    {
        return "otchet/issledovanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 9,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/issledovanie_menu.html' %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
