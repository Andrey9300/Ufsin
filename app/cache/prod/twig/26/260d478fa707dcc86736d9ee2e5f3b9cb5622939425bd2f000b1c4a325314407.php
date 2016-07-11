<?php

/* base.html.twig */
class __TwigTemplate_49f4cd3ae179a7e029c7bbf73537abf7c3aa5b2399f9aab5590c1daf9b24eb15 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Application";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 14
    public function block_body_id($context, array $blocks = array())
    {
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
                                        <li><a href=\"/zabolevaniya/showLichnyiSostavs\">Личный состав</a></li>
                                        <li><a href=\"/zabolevaniya/showOsugdenyis\">Осужденные</a></li>
                                        <li><a href=\"/zabolevaniya/showOchags\">Очаг</a></li>
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
                                        <li><a href=\"/otchetDogovor/common\">По договорам</a></li>
                                        <li><a href=\"/otchetProverka/\">По проверкам</a></li>
                                        <li><a href=\"/otchetIssledovaniya/\">По исследованиям</a></li>
                                        <li><a href=\"/otchetZabolevaniya/\">По заболевшим</a></li>
                                        <li><a href=\"/otchetFkuz/\">По ФКУЗ/Филиалу</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Добавить<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("organization_new");
            echo "\">Учреждение</a></li>
                                        <li><a href=\"/fkuz/createFkuz\">ФКУЗ / Филиал</a></li>
                                        <li><a href=\"/issledovanie/createType\">Тип исследования</a></li>
                                        <li><a href=\"/dogovor/createType\">Тип договора</a></li>                       
                                        <li><a href=\"/organization/createObject\">Объект</a></li>
                                        
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        // line 96
        echo "                        
                    ";
    }

    // line 99
    public function block_sidebar($context, array $blocks = array())
    {
        // line 100
        echo "
                    ";
    }

    // line 106
    public function block_footer($context, array $blocks = array())
    {
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
    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 121,  267 => 120,  263 => 119,  258 => 118,  255 => 117,  243 => 107,  240 => 106,  235 => 100,  232 => 99,  227 => 96,  224 => 95,  219 => 102,  217 => 99,  214 => 98,  212 => 95,  209 => 94,  206 => 93,  196 => 84,  188 => 79,  185 => 78,  183 => 77,  177 => 73,  165 => 65,  146 => 49,  129 => 35,  122 => 31,  106 => 17,  103 => 16,  98 => 14,  92 => 9,  87 => 8,  84 => 7,  78 => 5,  72 => 123,  70 => 117,  67 => 116,  65 => 106,  61 => 104,  59 => 93,  55 => 91,  53 => 16,  48 => 14,  41 => 11,  39 => 7,  34 => 5,  28 => 1,);
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
/*                                         <li><a href="/zabolevaniya/showLichnyiSostavs">Личный состав</a></li>*/
/*                                         <li><a href="/zabolevaniya/showOsugdenyis">Осужденные</a></li>*/
/*                                         <li><a href="/zabolevaniya/showOchags">Очаг</a></li>*/
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
/*                                         <li><a href="/otchetDogovor/common">По договорам</a></li>*/
/*                                         <li><a href="/otchetProverka/">По проверкам</a></li>*/
/*                                         <li><a href="/otchetIssledovaniya/">По исследованиям</a></li>*/
/*                                         <li><a href="/otchetZabolevaniya/">По заболевшим</a></li>*/
/*                                         <li><a href="/otchetFkuz/">По ФКУЗ/Филиалу</a></li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Добавить<span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="{{ path('organization_new') }}">Учреждение</a></li>*/
/*                                         <li><a href="/fkuz/createFkuz">ФКУЗ / Филиал</a></li>*/
/*                                         <li><a href="/issledovanie/createType">Тип исследования</a></li>*/
/*                                         <li><a href="/dogovor/createType">Тип договора</a></li>                       */
/*                                         <li><a href="/organization/createObject">Объект</a></li>*/
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
