<?php

/* :otchet:proverka.html.twig */
class __TwigTemplate_ee7dfa899fe45ea7e4523471f58898b08d0fb99a900798c05976ae9e21e66bfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet:proverka.html.twig", 1);
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
        $__internal_a0ce8c9b33abad3e8ef91ddd910b6e3217aef8b4ba56bfa57af265e4b1da037b = $this->env->getExtension("native_profiler");
        $__internal_a0ce8c9b33abad3e8ef91ddd910b6e3217aef8b4ba56bfa57af265e4b1da037b->enter($__internal_a0ce8c9b33abad3e8ef91ddd910b6e3217aef8b4ba56bfa57af265e4b1da037b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet:proverka.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ce8c9b33abad3e8ef91ddd910b6e3217aef8b4ba56bfa57af265e4b1da037b->leave($__internal_a0ce8c9b33abad3e8ef91ddd910b6e3217aef8b4ba56bfa57af265e4b1da037b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_95538201e2a96aa91c442394039bcfc2cb369962e5a1f1c6846b77da916e963c = $this->env->getExtension("native_profiler");
        $__internal_95538201e2a96aa91c442394039bcfc2cb369962e5a1f1c6846b77da916e963c->enter($__internal_95538201e2a96aa91c442394039bcfc2cb369962e5a1f1c6846b77da916e963c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", ":otchet:proverka.html.twig", 5)->display($context);
        // line 6
        echo "
";
        
        $__internal_95538201e2a96aa91c442394039bcfc2cb369962e5a1f1c6846b77da916e963c->leave($__internal_95538201e2a96aa91c442394039bcfc2cb369962e5a1f1c6846b77da916e963c_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4d32613998134567a11841ebb5375902745763bdb9a7dc45f7842891e1e47bba = $this->env->getExtension("native_profiler");
        $__internal_4d32613998134567a11841ebb5375902745763bdb9a7dc45f7842891e1e47bba->enter($__internal_4d32613998134567a11841ebb5375902745763bdb9a7dc45f7842891e1e47bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "
";
        
        $__internal_4d32613998134567a11841ebb5375902745763bdb9a7dc45f7842891e1e47bba->leave($__internal_4d32613998134567a11841ebb5375902745763bdb9a7dc45f7842891e1e47bba_prof);

    }

    public function getTemplateName()
    {
        return ":otchet:proverka.html.twig";
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
/* {% include 'views/otchet/ajax/proverka_menu.html' %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
