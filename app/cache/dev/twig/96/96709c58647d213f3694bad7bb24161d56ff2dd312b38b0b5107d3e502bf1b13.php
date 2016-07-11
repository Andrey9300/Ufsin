<?php

/* otchet/proverka.html.twig */
class __TwigTemplate_bbadfff407134f2d396bfaefd4f09b0e313c237a13b4ba2991cfc2799dc0ba27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otchet/proverka.html.twig", 1);
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
        $__internal_ff744b7e98dd140c3fe5b3d56c585d3196b90893c61d7fb0ceee125dcc281366 = $this->env->getExtension("native_profiler");
        $__internal_ff744b7e98dd140c3fe5b3d56c585d3196b90893c61d7fb0ceee125dcc281366->enter($__internal_ff744b7e98dd140c3fe5b3d56c585d3196b90893c61d7fb0ceee125dcc281366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/proverka.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff744b7e98dd140c3fe5b3d56c585d3196b90893c61d7fb0ceee125dcc281366->leave($__internal_ff744b7e98dd140c3fe5b3d56c585d3196b90893c61d7fb0ceee125dcc281366_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a580f8097ee2b457e54ce3d1d867fe2521d2d6f07f592688303e8c2c036c5300 = $this->env->getExtension("native_profiler");
        $__internal_a580f8097ee2b457e54ce3d1d867fe2521d2d6f07f592688303e8c2c036c5300->enter($__internal_a580f8097ee2b457e54ce3d1d867fe2521d2d6f07f592688303e8c2c036c5300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/proverka_menu.html", "otchet/proverka.html.twig", 5)->display($context);
        // line 6
        echo "
";
        
        $__internal_a580f8097ee2b457e54ce3d1d867fe2521d2d6f07f592688303e8c2c036c5300->leave($__internal_a580f8097ee2b457e54ce3d1d867fe2521d2d6f07f592688303e8c2c036c5300_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4366f97f912cca3e6ac74fa6ef22ec267da3b7cab0e1bb194fd2a9eea96e1757 = $this->env->getExtension("native_profiler");
        $__internal_4366f97f912cca3e6ac74fa6ef22ec267da3b7cab0e1bb194fd2a9eea96e1757->enter($__internal_4366f97f912cca3e6ac74fa6ef22ec267da3b7cab0e1bb194fd2a9eea96e1757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "
";
        
        $__internal_4366f97f912cca3e6ac74fa6ef22ec267da3b7cab0e1bb194fd2a9eea96e1757->leave($__internal_4366f97f912cca3e6ac74fa6ef22ec267da3b7cab0e1bb194fd2a9eea96e1757_prof);

    }

    public function getTemplateName()
    {
        return "otchet/proverka.html.twig";
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
