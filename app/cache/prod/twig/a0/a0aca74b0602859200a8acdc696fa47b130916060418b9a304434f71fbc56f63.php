<?php

/* security/login.html.twig */
class __TwigTemplate_0267e4d0ab5c0e48d724340e509bcc0563d1d2168fd2f1508fb5110bc914a2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        echo "login";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  85 => 37,  71 => 26,  62 => 20,  54 => 15,  48 => 11,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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
