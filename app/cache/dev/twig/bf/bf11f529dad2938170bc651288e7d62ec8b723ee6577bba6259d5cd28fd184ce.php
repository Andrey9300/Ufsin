<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_32aa9868ed0ca673770856c753bc8fb5704c12b2b58043b97683018c76794430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 11);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
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
        $__internal_fa45315991ca8907fdc5683ed911231bac531719686893a2cf96b046b5a13f15 = $this->env->getExtension("native_profiler");
        $__internal_fa45315991ca8907fdc5683ed911231bac531719686893a2cf96b046b5a13f15->enter($__internal_fa45315991ca8907fdc5683ed911231bac531719686893a2cf96b046b5a13f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa45315991ca8907fdc5683ed911231bac531719686893a2cf96b046b5a13f15->leave($__internal_fa45315991ca8907fdc5683ed911231bac531719686893a2cf96b046b5a13f15_prof);

    }

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1d3d5ba415af8d18c86c5ee506ca541c29382d6a46cabf2de63c548c0948ac1a = $this->env->getExtension("native_profiler");
        $__internal_1d3d5ba415af8d18c86c5ee506ca541c29382d6a46cabf2de63c548c0948ac1a->enter($__internal_1d3d5ba415af8d18c86c5ee506ca541c29382d6a46cabf2de63c548c0948ac1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_1d3d5ba415af8d18c86c5ee506ca541c29382d6a46cabf2de63c548c0948ac1a->leave($__internal_1d3d5ba415af8d18c86c5ee506ca541c29382d6a46cabf2de63c548c0948ac1a_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_ffbb77386db6a902e75d6ea86fb4ce4780e365ba033026b6620ad0ac68cdf678 = $this->env->getExtension("native_profiler");
        $__internal_ffbb77386db6a902e75d6ea86fb4ce4780e365ba033026b6620ad0ac68cdf678->enter($__internal_ffbb77386db6a902e75d6ea86fb4ce4780e365ba033026b6620ad0ac68cdf678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <h1 class=\"text-danger\">Произошла ошибка</h1>

    <p class=\"lead\">
        Скорее всего вы не верно ввели данные или произошла техническая ошибка.
    </p>
    
    <p>
        Пожалуйста, проверьте вводимые данные <a href=\"#\" id=\"back_page\">на предыдущей странице</a> и/или повторите снова.
    </p>
";
        
        $__internal_ffbb77386db6a902e75d6ea86fb4ce4780e365ba033026b6620ad0ac68cdf678->leave($__internal_ffbb77386db6a902e75d6ea86fb4ce4780e365ba033026b6620ad0ac68cdf678_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cc991eafdf4fa77c651514797acd8437f0ef6ad9e8781683fb915b2d8e8d30c9 = $this->env->getExtension("native_profiler");
        $__internal_cc991eafdf4fa77c651514797acd8437f0ef6ad9e8781683fb915b2d8e8d30c9->enter($__internal_cc991eafdf4fa77c651514797acd8437f0ef6ad9e8781683fb915b2d8e8d30c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "
";
        
        $__internal_cc991eafdf4fa77c651514797acd8437f0ef6ad9e8781683fb915b2d8e8d30c9->leave($__internal_cc991eafdf4fa77c651514797acd8437f0ef6ad9e8781683fb915b2d8e8d30c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  70 => 27,  54 => 16,  48 => 15,  36 => 13,  11 => 11,);
    }
}
/* {#*/
/*     This template is used to render errors of type HTTP 500 (Internal Server Error)*/
/* */
/*     This is the simplest way to customize error pages in Symfony applications.*/
/*     In case you need it, you can also hook into the internal exception handling*/
/*     made by Symfony. This allows you to perform advanced tasks and even recover*/
/*     your application from some errors.*/
/*     See http://symfony.com/doc/current/cookbook/controller/error_pages.html*/
/* #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'error' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-danger">Произошла ошибка</h1>*/
/* */
/*     <p class="lead">*/
/*         Скорее всего вы не верно ввели данные или произошла техническая ошибка.*/
/*     </p>*/
/*     */
/*     <p>*/
/*         Пожалуйста, проверьте вводимые данные <a href="#" id="back_page">на предыдущей странице</a> и/или повторите снова.*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
/* */
