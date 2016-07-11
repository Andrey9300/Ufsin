<?php

/* :otchet:fkuz.html.twig */
class __TwigTemplate_806d40235b52e5d7fd51e0901bbde306c44871fecab959d961c42c30f5627f45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet:fkuz.html.twig", 1);
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
        $__internal_51e6a37f4f09101002c0d92b7fb261414af75220cfdb12b207ac6df80f9b3ac8 = $this->env->getExtension("native_profiler");
        $__internal_51e6a37f4f09101002c0d92b7fb261414af75220cfdb12b207ac6df80f9b3ac8->enter($__internal_51e6a37f4f09101002c0d92b7fb261414af75220cfdb12b207ac6df80f9b3ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet:fkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51e6a37f4f09101002c0d92b7fb261414af75220cfdb12b207ac6df80f9b3ac8->leave($__internal_51e6a37f4f09101002c0d92b7fb261414af75220cfdb12b207ac6df80f9b3ac8_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4d0393c5944d8f8d559c0cbbf0ecee8e79050bbdca359afbf33ccb8d117caf9f = $this->env->getExtension("native_profiler");
        $__internal_4d0393c5944d8f8d559c0cbbf0ecee8e79050bbdca359afbf33ccb8d117caf9f->enter($__internal_4d0393c5944d8f8d559c0cbbf0ecee8e79050bbdca359afbf33ccb8d117caf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("views/otchet/ajax/fkuz_menu.html", ":otchet:fkuz.html.twig", 5)->display($context);
        // line 6
        echo "
";
        
        $__internal_4d0393c5944d8f8d559c0cbbf0ecee8e79050bbdca359afbf33ccb8d117caf9f->leave($__internal_4d0393c5944d8f8d559c0cbbf0ecee8e79050bbdca359afbf33ccb8d117caf9f_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f912985b9d69bbaf3cc26c2c59e6759e5ddc85616039976f69ebd420216bb0e2 = $this->env->getExtension("native_profiler");
        $__internal_f912985b9d69bbaf3cc26c2c59e6759e5ddc85616039976f69ebd420216bb0e2->enter($__internal_f912985b9d69bbaf3cc26c2c59e6759e5ddc85616039976f69ebd420216bb0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "
";
        
        $__internal_f912985b9d69bbaf3cc26c2c59e6759e5ddc85616039976f69ebd420216bb0e2->leave($__internal_f912985b9d69bbaf3cc26c2c59e6759e5ddc85616039976f69ebd420216bb0e2_prof);

    }

    public function getTemplateName()
    {
        return ":otchet:fkuz.html.twig";
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
/*     {% include 'views/otchet/ajax/fkuz_menu.html' %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
