<?php

/* ::base.html.twig */
class __TwigTemplate_0f2fadb8d51163506090a6dd8f61b290956d817f68609906f622e7c4827471cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89397484a8a0189a4e496bf3ca21e6e6596f26c6179549d413c92186d7289003 = $this->env->getExtension("native_profiler");
        $__internal_89397484a8a0189a4e496bf3ca21e6e6596f26c6179549d413c92186d7289003->enter($__internal_89397484a8a0189a4e496bf3ca21e6e6596f26c6179549d413c92186d7289003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 14
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 91
        echo "
        <div class=\"container body-container\">
            ";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "        </div>

        ";
        // line 106
        $this->displayBlock('footer', $context, $blocks);
        // line 116
        echo "
        ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "    </body>
</html>
";
        
        $__internal_89397484a8a0189a4e496bf3ca21e6e6596f26c6179549d413c92186d7289003->leave($__internal_89397484a8a0189a4e496bf3ca21e6e6596f26c6179549d413c92186d7289003_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab51654226195cf6cb6bc081533e7e921e32be8e74fff5d67a92670b8ce93522 = $this->env->getExtension("native_profiler");
        $__internal_ab51654226195cf6cb6bc081533e7e921e32be8e74fff5d67a92670b8ce93522->enter($__internal_ab51654226195cf6cb6bc081533e7e921e32be8e74fff5d67a92670b8ce93522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Application";
        
        $__internal_ab51654226195cf6cb6bc081533e7e921e32be8e74fff5d67a92670b8ce93522->leave($__internal_ab51654226195cf6cb6bc081533e7e921e32be8e74fff5d67a92670b8ce93522_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c43c47c5607d8b50b73c46c0b3d253a73925ee01e02f90eef2c53d8dc6f0b558 = $this->env->getExtension("native_profiler");
        $__internal_c43c47c5607d8b50b73c46c0b3d253a73925ee01e02f90eef2c53d8dc6f0b558->enter($__internal_c43c47c5607d8b50b73c46c0b3d253a73925ee01e02f90eef2c53d8dc6f0b558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_c43c47c5607d8b50b73c46c0b3d253a73925ee01e02f90eef2c53d8dc6f0b558->leave($__internal_c43c47c5607d8b50b73c46c0b3d253a73925ee01e02f90eef2c53d8dc6f0b558_prof);

    }

    // line 14
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e1af8b63035af115f11d03be74c793aa2da6299f039ee7a3595500bf111e256e = $this->env->getExtension("native_profiler");
        $__internal_e1af8b63035af115f11d03be74c793aa2da6299f039ee7a3595500bf111e256e->enter($__internal_e1af8b63035af115f11d03be74c793aa2da6299f039ee7a3595500bf111e256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_e1af8b63035af115f11d03be74c793aa2da6299f039ee7a3595500bf111e256e->leave($__internal_e1af8b63035af115f11d03be74c793aa2da6299f039ee7a3595500bf111e256e_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_a5b9d3885dff2aedd4fe9ebda871410a586522d8b4727ce3523708b3c7202001 = $this->env->getExtension("native_profiler");
        $__internal_a5b9d3885dff2aedd4fe9ebda871410a586522d8b4727ce3523708b3c7202001->enter($__internal_a5b9d3885dff2aedd4fe9ebda871410a586522d8b4727ce3523708b3c7202001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "            <header>
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>

                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                ";
        // line 31
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "              
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Учреждения<span class=\"caret\"></span></a>

                                     ";
            // line 35
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Organization:allOrganizations"));
            echo "

                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Заболеваемость TBS<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("show_lichnyi_sostavs");
            echo "\">Личный состав</a></li>
                                        <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("show_osugdenyis");
            echo "\">Осужденные</a></li>
                                        <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("show_ochags");
            echo "\">Очаг</a></li>
                                    </ul>
                                </li> 
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">ФКУЗ<span class=\"caret\"></span></a>
                                     
                                     ";
            // line 49
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Fkuz:allNameFilial"));
            echo "
                                     
                                </li>
                                <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Отчеты<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("common_dogovor");
            echo "\">По договорам</a></li>
                                        <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("otchet_proverka");
            echo "\">По проверкам</a></li>
                                        <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("issledovanie");
            echo "\">По исследованиям</a></li>
                                        <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("zabolevaniya");
            echo "\">По заболевшим</a></li>
                                        <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("otchetFkuz");
            echo "\">По ФКУЗ/Филиалу</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Добавить<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("organization_new");
            echo "\">Учреждение</a></li>
                                        <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("create_fkuz");
            echo "\">ФКУЗ / Филиал</a></li>
                                        <li><a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("create_type");
            echo "\">Тип исследования</a></li>
                                        <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("create_dogovor_type");
            echo "\">Тип договора</a></li>                       
                                        <li><a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("create_object");
            echo "\">Объект</a></li>
                                        
                                    </ul>
                                </li>                                
                                ";
        }
        // line 73
        echo "                                
                            </ul>
                            <ul class=\"nav navbar-nav navbar-right\">
                                
                                ";
        // line 77
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 78
            echo "                                    <li>
                                        <a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i>Выход
                                        </a>
                                    </li>
                                ";
        }
        // line 84
        echo "
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        ";
        
        $__internal_a5b9d3885dff2aedd4fe9ebda871410a586522d8b4727ce3523708b3c7202001->leave($__internal_a5b9d3885dff2aedd4fe9ebda871410a586522d8b4727ce3523708b3c7202001_prof);

    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        $__internal_93447d41cb8d990f1adb1de22c5dc302543ac7c29d2d7e6cc52c624a851d55e6 = $this->env->getExtension("native_profiler");
        $__internal_93447d41cb8d990f1adb1de22c5dc302543ac7c29d2d7e6cc52c624a851d55e6->enter($__internal_93447d41cb8d990f1adb1de22c5dc302543ac7c29d2d7e6cc52c624a851d55e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "
                    ";
        // line 95
        $this->displayBlock('main', $context, $blocks);
        // line 98
        echo "
                    ";
        // line 99
        $this->displayBlock('sidebar', $context, $blocks);
        // line 102
        echo "
            ";
        
        $__internal_93447d41cb8d990f1adb1de22c5dc302543ac7c29d2d7e6cc52c624a851d55e6->leave($__internal_93447d41cb8d990f1adb1de22c5dc302543ac7c29d2d7e6cc52c624a851d55e6_prof);

    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        $__internal_6889716650c5747c8675ab9bb08446fa9735f6174599c0bad419b12c1cb4ccad = $this->env->getExtension("native_profiler");
        $__internal_6889716650c5747c8675ab9bb08446fa9735f6174599c0bad419b12c1cb4ccad->enter($__internal_6889716650c5747c8675ab9bb08446fa9735f6174599c0bad419b12c1cb4ccad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 96
        echo "                        
                    ";
        
        $__internal_6889716650c5747c8675ab9bb08446fa9735f6174599c0bad419b12c1cb4ccad->leave($__internal_6889716650c5747c8675ab9bb08446fa9735f6174599c0bad419b12c1cb4ccad_prof);

    }

    // line 99
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9290dcfc90027a763f393a68fdc4250346296e313f4e20ea4cc759ff9f30291e = $this->env->getExtension("native_profiler");
        $__internal_9290dcfc90027a763f393a68fdc4250346296e313f4e20ea4cc759ff9f30291e->enter($__internal_9290dcfc90027a763f393a68fdc4250346296e313f4e20ea4cc759ff9f30291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 100
        echo "
                    ";
        
        $__internal_9290dcfc90027a763f393a68fdc4250346296e313f4e20ea4cc759ff9f30291e->leave($__internal_9290dcfc90027a763f393a68fdc4250346296e313f4e20ea4cc759ff9f30291e_prof);

    }

    // line 106
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2902de5c08496b19c86c0e5ab459b53264e46245f0df55d8d18764a06385624f = $this->env->getExtension("native_profiler");
        $__internal_2902de5c08496b19c86c0e5ab459b53264e46245f0df55d8d18764a06385624f->enter($__internal_2902de5c08496b19c86c0e5ab459b53264e46245f0df55d8d18764a06385624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 107
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\"></div>
                        <div id=\"footer-resources\" class=\"col-md-6\"></div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_2902de5c08496b19c86c0e5ab459b53264e46245f0df55d8d18764a06385624f->leave($__internal_2902de5c08496b19c86c0e5ab459b53264e46245f0df55d8d18764a06385624f_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_475f9f32880a2543e66643c6b1e58e151e60bbf54b6bd790e2281d8d0c91ac6c = $this->env->getExtension("native_profiler");
        $__internal_475f9f32880a2543e66643c6b1e58e151e60bbf54b6bd790e2281d8d0c91ac6c->enter($__internal_475f9f32880a2543e66643c6b1e58e151e60bbf54b6bd790e2281d8d0c91ac6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/date.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_475f9f32880a2543e66643c6b1e58e151e60bbf54b6bd790e2281d8d0c91ac6c->leave($__internal_475f9f32880a2543e66643c6b1e58e151e60bbf54b6bd790e2281d8d0c91ac6c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 121,  360 => 120,  356 => 119,  351 => 118,  345 => 117,  330 => 107,  324 => 106,  316 => 100,  310 => 99,  302 => 96,  296 => 95,  288 => 102,  286 => 99,  283 => 98,  281 => 95,  278 => 94,  272 => 93,  259 => 84,  251 => 79,  248 => 78,  246 => 77,  240 => 73,  232 => 69,  228 => 68,  224 => 67,  220 => 66,  216 => 65,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  191 => 55,  182 => 49,  173 => 43,  169 => 42,  165 => 41,  156 => 35,  149 => 31,  133 => 17,  127 => 16,  116 => 14,  107 => 9,  102 => 8,  96 => 7,  84 => 5,  75 => 123,  73 => 117,  70 => 116,  68 => 106,  64 => 104,  62 => 93,  58 => 91,  56 => 16,  51 => 14,  44 => 11,  42 => 7,  37 => 5,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Application{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}">*/
/* */
/*         {% block header %}*/
/*             <header>*/
/*                 <nav class="navbar navbar-default">*/
/*                     <div class="container-fluid">*/
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/* */
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 {% if app.user %}              */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Учреждения<span class="caret"></span></a>*/
/* */
/*                                      {{ render(controller('AppBundle:Organization:allOrganizations')) }}*/
/* */
/*                                 </li>*/
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Заболеваемость TBS<span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="{{ path('show_lichnyi_sostavs') }}">Личный состав</a></li>*/
/*                                         <li><a href="{{ path('show_osugdenyis') }}">Осужденные</a></li>*/
/*                                         <li><a href="{{ path('show_ochags') }}">Очаг</a></li>*/
/*                                     </ul>*/
/*                                 </li> */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ФКУЗ<span class="caret"></span></a>*/
/*                                      */
/*                                      {{ render(controller('AppBundle:Fkuz:allNameFilial')) }}*/
/*                                      */
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Отчеты<span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="{{ path('common_dogovor') }}">По договорам</a></li>*/
/*                                         <li><a href="{{ path('otchet_proverka') }}">По проверкам</a></li>*/
/*                                         <li><a href="{{ path('issledovanie') }}">По исследованиям</a></li>*/
/*                                         <li><a href="{{ path('zabolevaniya') }}">По заболевшим</a></li>*/
/*                                         <li><a href="{{ path('otchetFkuz') }}">По ФКУЗ/Филиалу</a></li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Добавить<span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="{{ path('organization_new') }}">Учреждение</a></li>*/
/*                                         <li><a href="{{ path('create_fkuz') }}">ФКУЗ / Филиал</a></li>*/
/*                                         <li><a href="{{ path('create_type') }}">Тип исследования</a></li>*/
/*                                         <li><a href="{{ path('create_dogovor_type') }}">Тип договора</a></li>                       */
/*                                         <li><a href="{{ path('create_object') }}">Объект</a></li>*/
/*                                         */
/*                                     </ul>*/
/*                                 </li>                                */
/*                                 {% endif %}                                */
/*                             </ul>*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                                 */
/*                                 {% if app.user %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('security_logout') }}">*/
/*                                             <i class="fa fa-sign-out"></i>Выход*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/*         {% endblock %}*/
/* */
/*         <div class="container body-container">*/
/*             {% block body %}*/
/* */
/*                     {% block main %}*/
/*                         */
/*                     {% endblock %}*/
/* */
/*                     {% block sidebar %}*/
/* */
/*                     {% endblock %}*/
/* */
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         {% block footer %}*/
/*             <footer>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div id="footer-copyright" class="col-md-6"></div>*/
/*                         <div id="footer-resources" class="col-md-6"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('js/app.js') }}"></script>*/
/*             <script src="{{ asset('js/script.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.form-validator.min.js') }}"></script>*/
/*             <script src="{{ asset('js/date.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
