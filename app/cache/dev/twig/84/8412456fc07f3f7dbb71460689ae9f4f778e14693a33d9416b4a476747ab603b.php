<?php

/* security/login.html.twig */
class __TwigTemplate_2a8e586aef237829fd11218e3192c22588819ec994c61b47e9ebc6375d3624ce extends Twig_Template
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
        $__internal_29eee9d2b5c751265ed10dc613f3bf91770bc6a5f9e59cc0dee0d289a3256e62 = $this->env->getExtension("native_profiler");
        $__internal_29eee9d2b5c751265ed10dc613f3bf91770bc6a5f9e59cc0dee0d289a3256e62->enter($__internal_29eee9d2b5c751265ed10dc613f3bf91770bc6a5f9e59cc0dee0d289a3256e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29eee9d2b5c751265ed10dc613f3bf91770bc6a5f9e59cc0dee0d289a3256e62->leave($__internal_29eee9d2b5c751265ed10dc613f3bf91770bc6a5f9e59cc0dee0d289a3256e62_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_bc31d5bf7d04840842ae62b7da4fb2a1c957bef8b1475f7e67f06fc91e449f75 = $this->env->getExtension("native_profiler");
        $__internal_bc31d5bf7d04840842ae62b7da4fb2a1c957bef8b1475f7e67f06fc91e449f75->enter($__internal_bc31d5bf7d04840842ae62b7da4fb2a1c957bef8b1475f7e67f06fc91e449f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_bc31d5bf7d04840842ae62b7da4fb2a1c957bef8b1475f7e67f06fc91e449f75->leave($__internal_bc31d5bf7d04840842ae62b7da4fb2a1c957bef8b1475f7e67f06fc91e449f75_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_49ac7617fd1231223f292f331536964d2b20978b2d7e73fbef1fd28025065828 = $this->env->getExtension("native_profiler");
        $__internal_49ac7617fd1231223f292f331536964d2b20978b2d7e73fbef1fd28025065828->enter($__internal_49ac7617fd1231223f292f331536964d2b20978b2d7e73fbef1fd28025065828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_49ac7617fd1231223f292f331536964d2b20978b2d7e73fbef1fd28025065828->leave($__internal_49ac7617fd1231223f292f331536964d2b20978b2d7e73fbef1fd28025065828_prof);

    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_42d258f074535ac1e2a9593806b64aebe8e89c64a56690211b54b984b469afdf = $this->env->getExtension("native_profiler");
        $__internal_42d258f074535ac1e2a9593806b64aebe8e89c64a56690211b54b984b469afdf->enter($__internal_42d258f074535ac1e2a9593806b64aebe8e89c64a56690211b54b984b469afdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 38
        echo "
";
        
        $__internal_42d258f074535ac1e2a9593806b64aebe8e89c64a56690211b54b984b469afdf->leave($__internal_42d258f074535ac1e2a9593806b64aebe8e89c64a56690211b54b984b469afdf_prof);

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
