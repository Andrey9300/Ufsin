<?php

/* base.html.twig */
class __TwigTemplate_156589c3f97c08c7689693ebd74ad071e552fbd097cd320f856dfd78cd0ae8d9 extends Twig_Template
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
        $__internal_6a8522b68dbbe88bfb427f4be5a2cb5563adc5a8c62fb862ba436e51306c529d = $this->env->getExtension("native_profiler");
        $__internal_6a8522b68dbbe88bfb427f4be5a2cb5563adc5a8c62fb862ba436e51306c529d->enter($__internal_6a8522b68dbbe88bfb427f4be5a2cb5563adc5a8c62fb862ba436e51306c529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6a8522b68dbbe88bfb427f4be5a2cb5563adc5a8c62fb862ba436e51306c529d->leave($__internal_6a8522b68dbbe88bfb427f4be5a2cb5563adc5a8c62fb862ba436e51306c529d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81b23cf9665b9c2243988f62f8bab4263a5215ae7b3758dbcc463f95abbb431f = $this->env->getExtension("native_profiler");
        $__internal_81b23cf9665b9c2243988f62f8bab4263a5215ae7b3758dbcc463f95abbb431f->enter($__internal_81b23cf9665b9c2243988f62f8bab4263a5215ae7b3758dbcc463f95abbb431f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Application";
        
        $__internal_81b23cf9665b9c2243988f62f8bab4263a5215ae7b3758dbcc463f95abbb431f->leave($__internal_81b23cf9665b9c2243988f62f8bab4263a5215ae7b3758dbcc463f95abbb431f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_652eeef1533e5ba0629c1aac609c2f3db01072544265d51959ba5d406f5c0689 = $this->env->getExtension("native_profiler");
        $__internal_652eeef1533e5ba0629c1aac609c2f3db01072544265d51959ba5d406f5c0689->enter($__internal_652eeef1533e5ba0629c1aac609c2f3db01072544265d51959ba5d406f5c0689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_652eeef1533e5ba0629c1aac609c2f3db01072544265d51959ba5d406f5c0689->leave($__internal_652eeef1533e5ba0629c1aac609c2f3db01072544265d51959ba5d406f5c0689_prof);

    }

    // line 14
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d5bcbb3494bb4df07b1b709f819ef69ea19b8ce4089bf35813ce511058c13029 = $this->env->getExtension("native_profiler");
        $__internal_d5bcbb3494bb4df07b1b709f819ef69ea19b8ce4089bf35813ce511058c13029->enter($__internal_d5bcbb3494bb4df07b1b709f819ef69ea19b8ce4089bf35813ce511058c13029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_d5bcbb3494bb4df07b1b709f819ef69ea19b8ce4089bf35813ce511058c13029->leave($__internal_d5bcbb3494bb4df07b1b709f819ef69ea19b8ce4089bf35813ce511058c13029_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_7dd17ca2931d8eb246c6240278ead5d66070dbb678f2dfd8462186539b391c7e = $this->env->getExtension("native_profiler");
        $__internal_7dd17ca2931d8eb246c6240278ead5d66070dbb678f2dfd8462186539b391c7e->enter($__internal_7dd17ca2931d8eb246c6240278ead5d66070dbb678f2dfd8462186539b391c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_7dd17ca2931d8eb246c6240278ead5d66070dbb678f2dfd8462186539b391c7e->leave($__internal_7dd17ca2931d8eb246c6240278ead5d66070dbb678f2dfd8462186539b391c7e_prof);

    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2eefef2efff459ae51e3e27c8d57dd056b28202c6ce863d8d089d5f3c37988d = $this->env->getExtension("native_profiler");
        $__internal_a2eefef2efff459ae51e3e27c8d57dd056b28202c6ce863d8d089d5f3c37988d->enter($__internal_a2eefef2efff459ae51e3e27c8d57dd056b28202c6ce863d8d089d5f3c37988d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2eefef2efff459ae51e3e27c8d57dd056b28202c6ce863d8d089d5f3c37988d->leave($__internal_a2eefef2efff459ae51e3e27c8d57dd056b28202c6ce863d8d089d5f3c37988d_prof);

    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        $__internal_0b41461e2c2a1119905a473b8b6ded05c5f1dad7142bec6f471271ff913f365e = $this->env->getExtension("native_profiler");
        $__internal_0b41461e2c2a1119905a473b8b6ded05c5f1dad7142bec6f471271ff913f365e->enter($__internal_0b41461e2c2a1119905a473b8b6ded05c5f1dad7142bec6f471271ff913f365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 96
        echo "                        
                    ";
        
        $__internal_0b41461e2c2a1119905a473b8b6ded05c5f1dad7142bec6f471271ff913f365e->leave($__internal_0b41461e2c2a1119905a473b8b6ded05c5f1dad7142bec6f471271ff913f365e_prof);

    }

    // line 99
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_22277b482b1aea57b0c77c90e02a182508f07e6a47f6fa5fab2f033bcb9ef1e8 = $this->env->getExtension("native_profiler");
        $__internal_22277b482b1aea57b0c77c90e02a182508f07e6a47f6fa5fab2f033bcb9ef1e8->enter($__internal_22277b482b1aea57b0c77c90e02a182508f07e6a47f6fa5fab2f033bcb9ef1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 100
        echo "
                    ";
        
        $__internal_22277b482b1aea57b0c77c90e02a182508f07e6a47f6fa5fab2f033bcb9ef1e8->leave($__internal_22277b482b1aea57b0c77c90e02a182508f07e6a47f6fa5fab2f033bcb9ef1e8_prof);

    }

    // line 106
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f076c3d4e05e471b20cd7158c02fadce66d4868a5914220a99aa54ae3fdc080e = $this->env->getExtension("native_profiler");
        $__internal_f076c3d4e05e471b20cd7158c02fadce66d4868a5914220a99aa54ae3fdc080e->enter($__internal_f076c3d4e05e471b20cd7158c02fadce66d4868a5914220a99aa54ae3fdc080e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_f076c3d4e05e471b20cd7158c02fadce66d4868a5914220a99aa54ae3fdc080e->leave($__internal_f076c3d4e05e471b20cd7158c02fadce66d4868a5914220a99aa54ae3fdc080e_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5dbe334648d7318913ce88c5837b6dac4213f2652a6e0fc197c9172b7dbafb26 = $this->env->getExtension("native_profiler");
        $__internal_5dbe334648d7318913ce88c5837b6dac4213f2652a6e0fc197c9172b7dbafb26->enter($__internal_5dbe334648d7318913ce88c5837b6dac4213f2652a6e0fc197c9172b7dbafb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5dbe334648d7318913ce88c5837b6dac4213f2652a6e0fc197c9172b7dbafb26->leave($__internal_5dbe334648d7318913ce88c5837b6dac4213f2652a6e0fc197c9172b7dbafb26_prof);

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
