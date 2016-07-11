<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0a37f5262a9ef30736c37e03de989685e22840e08c681f50fb762d08d650188e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8db3bf4ef2d9efcdfcc2a9202d5fd6ddb399c1edea93debaffc74418c42e1bd8 = $this->env->getExtension("native_profiler");
        $__internal_8db3bf4ef2d9efcdfcc2a9202d5fd6ddb399c1edea93debaffc74418c42e1bd8->enter($__internal_8db3bf4ef2d9efcdfcc2a9202d5fd6ddb399c1edea93debaffc74418c42e1bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8db3bf4ef2d9efcdfcc2a9202d5fd6ddb399c1edea93debaffc74418c42e1bd8->leave($__internal_8db3bf4ef2d9efcdfcc2a9202d5fd6ddb399c1edea93debaffc74418c42e1bd8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
