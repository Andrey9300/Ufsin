<?php

/* otchet/fkuz.html.twig */
class __TwigTemplate_8d20f3a1b17ee414192bd9e74aef7f7b629f2143e348163786329586280363ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/fkuz.html.twig", 1);
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
        $__internal_006a6f7841e572b124a64faedd1672fbfdd5f69514cfaa69ab87e45b6914af75 = $this->env->getExtension("native_profiler");
        $__internal_006a6f7841e572b124a64faedd1672fbfdd5f69514cfaa69ab87e45b6914af75->enter($__internal_006a6f7841e572b124a64faedd1672fbfdd5f69514cfaa69ab87e45b6914af75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/fkuz.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_006a6f7841e572b124a64faedd1672fbfdd5f69514cfaa69ab87e45b6914af75->leave($__internal_006a6f7841e572b124a64faedd1672fbfdd5f69514cfaa69ab87e45b6914af75_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_143651df7ef4587c58c7aeaea079e8bdcb7c1c5c9c7597ca3b6a2fe1c41103d1 = $this->env->getExtension("native_profiler");
        $__internal_143651df7ef4587c58c7aeaea079e8bdcb7c1c5c9c7597ca3b6a2fe1c41103d1->enter($__internal_143651df7ef4587c58c7aeaea079e8bdcb7c1c5c9c7597ca3b6a2fe1c41103d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("views/otchet/ajax/fkuz_menu.html", "otchet/fkuz.html.twig", 5)->display($context);
        // line 6
        echo "
";
        
        $__internal_143651df7ef4587c58c7aeaea079e8bdcb7c1c5c9c7597ca3b6a2fe1c41103d1->leave($__internal_143651df7ef4587c58c7aeaea079e8bdcb7c1c5c9c7597ca3b6a2fe1c41103d1_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_87a1aa745051d4ecc5c89d9eb30c8666133ae4430a0aded845a5c0bdef4f7559 = $this->env->getExtension("native_profiler");
        $__internal_87a1aa745051d4ecc5c89d9eb30c8666133ae4430a0aded845a5c0bdef4f7559->enter($__internal_87a1aa745051d4ecc5c89d9eb30c8666133ae4430a0aded845a5c0bdef4f7559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "
";
        
        $__internal_87a1aa745051d4ecc5c89d9eb30c8666133ae4430a0aded845a5c0bdef4f7559->leave($__internal_87a1aa745051d4ecc5c89d9eb30c8666133ae4430a0aded845a5c0bdef4f7559_prof);

    }

    public function getTemplateName()
    {
        return "otchet/fkuz.html.twig";
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
