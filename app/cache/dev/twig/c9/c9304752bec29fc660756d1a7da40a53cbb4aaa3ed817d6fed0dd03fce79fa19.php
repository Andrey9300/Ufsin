<?php

/* :security:login.html.twig */
class __TwigTemplate_896fe67225457d3e96d002cefb79a90f44e6267c287bec08e55c50b6db51c6b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
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
        $__internal_b6ea14ed9cb31f2fc30c1f9ad74de1b38e2c2c3c24bd7aeedb3ef339f685d733 = $this->env->getExtension("native_profiler");
        $__internal_b6ea14ed9cb31f2fc30c1f9ad74de1b38e2c2c3c24bd7aeedb3ef339f685d733->enter($__internal_b6ea14ed9cb31f2fc30c1f9ad74de1b38e2c2c3c24bd7aeedb3ef339f685d733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ea14ed9cb31f2fc30c1f9ad74de1b38e2c2c3c24bd7aeedb3ef339f685d733->leave($__internal_b6ea14ed9cb31f2fc30c1f9ad74de1b38e2c2c3c24bd7aeedb3ef339f685d733_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c0bcff010b00c1eaf37003e0926dcff3cccf8aa9e67a1096b5a94a71433d125d = $this->env->getExtension("native_profiler");
        $__internal_c0bcff010b00c1eaf37003e0926dcff3cccf8aa9e67a1096b5a94a71433d125d->enter($__internal_c0bcff010b00c1eaf37003e0926dcff3cccf8aa9e67a1096b5a94a71433d125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_c0bcff010b00c1eaf37003e0926dcff3cccf8aa9e67a1096b5a94a71433d125d->leave($__internal_c0bcff010b00c1eaf37003e0926dcff3cccf8aa9e67a1096b5a94a71433d125d_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_8280a9493723471cf232688b0a19c872f358f6031d8ceb838e2d07b30b611f7d = $this->env->getExtension("native_profiler");
        $__internal_8280a9493723471cf232688b0a19c872f358f6031d8ceb838e2d07b30b611f7d->enter($__internal_8280a9493723471cf232688b0a19c872f358f6031d8ceb838e2d07b30b611f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">
            Не верные данные
        </div>
    ";
        }
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"well\">
                <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("security_login_check");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\"></i>Авторизация</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">Логин</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Пароль</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\"></i>Войти
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_8280a9493723471cf232688b0a19c872f358f6031d8ceb838e2d07b30b611f7d->leave($__internal_8280a9493723471cf232688b0a19c872f358f6031d8ceb838e2d07b30b611f7d_prof);

    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5b30f834b25c17f845c3883c05215f1a78cbea20e6c2c654db5c4372048f176b = $this->env->getExtension("native_profiler");
        $__internal_5b30f834b25c17f845c3883c05215f1a78cbea20e6c2c654db5c4372048f176b->enter($__internal_5b30f834b25c17f845c3883c05215f1a78cbea20e6c2c654db5c4372048f176b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 38
        echo "
";
        
        $__internal_5b30f834b25c17f845c3883c05215f1a78cbea20e6c2c654db5c4372048f176b->leave($__internal_5b30f834b25c17f845c3883c05215f1a78cbea20e6c2c654db5c4372048f176b_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  103 => 37,  86 => 26,  77 => 20,  69 => 15,  63 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'login' %}*/
/* */
/* {% block main %}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">*/
/*             Не верные данные*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-4">*/
/*             <div class="well">*/
/*                 <form action="{{ path('security_login_check') }}" method="post">*/
/*                     <fieldset>*/
/*                         <legend><i class="fa fa-lock"></i>Авторизация</legend>*/
/*                         <div class="form-group">*/
/*                             <label for="username">Логин</label>*/
/*                             <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="password">Пароль</label>*/
/*                             <input type="password" id="password" name="_password" class="form-control" />*/
/*                         </div>*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}"/>*/
/*                         <button type="submit" class="btn btn-primary">*/
/*                             <i class="fa fa-sign-in"></i>Войти*/
/*                         </button>*/
/*                     </fieldset>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
