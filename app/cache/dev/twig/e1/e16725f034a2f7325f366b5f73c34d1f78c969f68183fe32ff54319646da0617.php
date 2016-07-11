<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_ff6df60024859c4581f64f95000c890811143eaf52291cdbd718994b78195dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error403.html.twig", 1);
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
        $__internal_db24dc1bc17ce748be0aed8b1583f66376d3f52d5b99bc593a185758ceca7162 = $this->env->getExtension("native_profiler");
        $__internal_db24dc1bc17ce748be0aed8b1583f66376d3f52d5b99bc593a185758ceca7162->enter($__internal_db24dc1bc17ce748be0aed8b1583f66376d3f52d5b99bc593a185758ceca7162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db24dc1bc17ce748be0aed8b1583f66376d3f52d5b99bc593a185758ceca7162->leave($__internal_db24dc1bc17ce748be0aed8b1583f66376d3f52d5b99bc593a185758ceca7162_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a4596c8e5865e1422e9ab9176dc16c0eff98afd5f622fcea0735bee9b6cbfe6f = $this->env->getExtension("native_profiler");
        $__internal_a4596c8e5865e1422e9ab9176dc16c0eff98afd5f622fcea0735bee9b6cbfe6f->enter($__internal_a4596c8e5865e1422e9ab9176dc16c0eff98afd5f622fcea0735bee9b6cbfe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_a4596c8e5865e1422e9ab9176dc16c0eff98afd5f622fcea0735bee9b6cbfe6f->leave($__internal_a4596c8e5865e1422e9ab9176dc16c0eff98afd5f622fcea0735bee9b6cbfe6f_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_2791db75be6ecb2fbe8bf623e8dfc09643465e241513e68cd0e59af003d5571c = $this->env->getExtension("native_profiler");
        $__internal_2791db75be6ecb2fbe8bf623e8dfc09643465e241513e68cd0e59af003d5571c->enter($__internal_2791db75be6ecb2fbe8bf623e8dfc09643465e241513e68cd0e59af003d5571c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1 class=\"text-danger\">Ошибка доступа</h1>

    <p class=\"lead\">
        У вас нет прав на посещение данного ресурса.
    </p>
    <p>
        Обратитесь к вашему администратору или начальнику.
    </p>
";
        
        $__internal_2791db75be6ecb2fbe8bf623e8dfc09643465e241513e68cd0e59af003d5571c->leave($__internal_2791db75be6ecb2fbe8bf623e8dfc09643465e241513e68cd0e59af003d5571c_prof);

    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4f281c5ee955943a050968c2d15799a5b21a0f44f94597fc8cbde7e7c125af2b = $this->env->getExtension("native_profiler");
        $__internal_4f281c5ee955943a050968c2d15799a5b21a0f44f94597fc8cbde7e7c125af2b->enter($__internal_4f281c5ee955943a050968c2d15799a5b21a0f44f94597fc8cbde7e7c125af2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 17
        echo "
";
        
        $__internal_4f281c5ee955943a050968c2d15799a5b21a0f44f94597fc8cbde7e7c125af2b->leave($__internal_4f281c5ee955943a050968c2d15799a5b21a0f44f94597fc8cbde7e7c125af2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  69 => 16,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'error' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-danger">Ошибка доступа</h1>*/
/* */
/*     <p class="lead">*/
/*         У вас нет прав на посещение данного ресурса.*/
/*     </p>*/
/*     <p>*/
/*         Обратитесь к вашему администратору или начальнику.*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
/* */
