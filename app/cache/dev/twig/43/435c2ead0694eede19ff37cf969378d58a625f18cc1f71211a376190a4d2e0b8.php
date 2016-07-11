<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_2f054f9ab69e9fca08b5cdfd2e4802b4284452c6ad82245bf8e879318ac18e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
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
        $__internal_0d42082822c1ce4d3c4043c800a87c3eb78095c754032a94a6b33ab58d1b0ffe = $this->env->getExtension("native_profiler");
        $__internal_0d42082822c1ce4d3c4043c800a87c3eb78095c754032a94a6b33ab58d1b0ffe->enter($__internal_0d42082822c1ce4d3c4043c800a87c3eb78095c754032a94a6b33ab58d1b0ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d42082822c1ce4d3c4043c800a87c3eb78095c754032a94a6b33ab58d1b0ffe->leave($__internal_0d42082822c1ce4d3c4043c800a87c3eb78095c754032a94a6b33ab58d1b0ffe_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9d7e35928beb2e82089d0f8ede994e6ebd923edd3fd9ddb20bca97528757a59c = $this->env->getExtension("native_profiler");
        $__internal_9d7e35928beb2e82089d0f8ede994e6ebd923edd3fd9ddb20bca97528757a59c->enter($__internal_9d7e35928beb2e82089d0f8ede994e6ebd923edd3fd9ddb20bca97528757a59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_9d7e35928beb2e82089d0f8ede994e6ebd923edd3fd9ddb20bca97528757a59c->leave($__internal_9d7e35928beb2e82089d0f8ede994e6ebd923edd3fd9ddb20bca97528757a59c_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_0e33c571e71994beb2cb9f0a24a5c0d5b4a7cf81671f7652716bd902511ae494 = $this->env->getExtension("native_profiler");
        $__internal_0e33c571e71994beb2cb9f0a24a5c0d5b4a7cf81671f7652716bd902511ae494->enter($__internal_0e33c571e71994beb2cb9f0a24a5c0d5b4a7cf81671f7652716bd902511ae494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1 class=\"text-danger\">Страница не найдена</h1>

    <p class=\"lead\">
        Пожалуйста, вернитесь <a href=\"#\" id=\"back_page\">на предыдущую страницу</a> или перейдите <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("main_index");
        echo "\">на главную страницу</a>.
    </p>
";
        
        $__internal_0e33c571e71994beb2cb9f0a24a5c0d5b4a7cf81671f7652716bd902511ae494->leave($__internal_0e33c571e71994beb2cb9f0a24a5c0d5b4a7cf81671f7652716bd902511ae494_prof);

    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4a3799a087bbf9351ce0d7e84cf1bc630cf0f2e747fc4be582cb64d5ed6563a2 = $this->env->getExtension("native_profiler");
        $__internal_4a3799a087bbf9351ce0d7e84cf1bc630cf0f2e747fc4be582cb64d5ed6563a2->enter($__internal_4a3799a087bbf9351ce0d7e84cf1bc630cf0f2e747fc4be582cb64d5ed6563a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 14
        echo "
";
        
        $__internal_4a3799a087bbf9351ce0d7e84cf1bc630cf0f2e747fc4be582cb64d5ed6563a2->leave($__internal_4a3799a087bbf9351ce0d7e84cf1bc630cf0f2e747fc4be582cb64d5ed6563a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  69 => 13,  59 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'error' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-danger">Страница не найдена</h1>*/
/* */
/*     <p class="lead">*/
/*         Пожалуйста, вернитесь <a href="#" id="back_page">на предыдущую страницу</a> или перейдите <a href="{{ path('main_index') }}">на главную страницу</a>.*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
