<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_f2a5b3e586d4e888f7e2505e951a8616120775097ce194dbec352d964fcdba15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error.html.twig", 11);
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
        $__internal_c571a9472d991cb64d102eb2844b3618ed8b2b1025e0c9ea37244c1d2de726e6 = $this->env->getExtension("native_profiler");
        $__internal_c571a9472d991cb64d102eb2844b3618ed8b2b1025e0c9ea37244c1d2de726e6->enter($__internal_c571a9472d991cb64d102eb2844b3618ed8b2b1025e0c9ea37244c1d2de726e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c571a9472d991cb64d102eb2844b3618ed8b2b1025e0c9ea37244c1d2de726e6->leave($__internal_c571a9472d991cb64d102eb2844b3618ed8b2b1025e0c9ea37244c1d2de726e6_prof);

    }

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0072f71236de7cf31b322b5c98e0eac227b0e48ebbe36aed14b60843c54e13f1 = $this->env->getExtension("native_profiler");
        $__internal_0072f71236de7cf31b322b5c98e0eac227b0e48ebbe36aed14b60843c54e13f1->enter($__internal_0072f71236de7cf31b322b5c98e0eac227b0e48ebbe36aed14b60843c54e13f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_0072f71236de7cf31b322b5c98e0eac227b0e48ebbe36aed14b60843c54e13f1->leave($__internal_0072f71236de7cf31b322b5c98e0eac227b0e48ebbe36aed14b60843c54e13f1_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_b62dc1083b4f9b2838f41fb4b611a0392a2d6434b7b8f50bcdb5ef8cae97ae97 = $this->env->getExtension("native_profiler");
        $__internal_b62dc1083b4f9b2838f41fb4b611a0392a2d6434b7b8f50bcdb5ef8cae97ae97->enter($__internal_b62dc1083b4f9b2838f41fb4b611a0392a2d6434b7b8f50bcdb5ef8cae97ae97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <h1 class=\"text-danger\">Произошла ошибка</h1>

    <p class=\"lead\">
        Скорее всего вы не верно ввели данные или произошла техническая ошибка.
    </p>
    
    <p>
        Пожалуйста, проверьте вводимые данные <a href=\"#\" id=\"back_page\">на предыдущей странице</a> и/или повторите снова.
    </p>
";
        
        $__internal_b62dc1083b4f9b2838f41fb4b611a0392a2d6434b7b8f50bcdb5ef8cae97ae97->leave($__internal_b62dc1083b4f9b2838f41fb4b611a0392a2d6434b7b8f50bcdb5ef8cae97ae97_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_950e4133d77e9564e23d25001b6a1a44a2832fc319599c4daf7abb7234b37280 = $this->env->getExtension("native_profiler");
        $__internal_950e4133d77e9564e23d25001b6a1a44a2832fc319599c4daf7abb7234b37280->enter($__internal_950e4133d77e9564e23d25001b6a1a44a2832fc319599c4daf7abb7234b37280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "
";
        
        $__internal_950e4133d77e9564e23d25001b6a1a44a2832fc319599c4daf7abb7234b37280->leave($__internal_950e4133d77e9564e23d25001b6a1a44a2832fc319599c4daf7abb7234b37280_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
