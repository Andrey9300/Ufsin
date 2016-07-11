<?php

/* otchet/ajax/proverka_menu.html */
class __TwigTemplate_768de611be225a169830705c2d264b416614282ddb15462f9d1c03874020f494 extends Twig_Template
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
        $__internal_eb159e6a9d24be06edf00eb93df81faf1a976c418acc5d8ce64150b98e08ddff = $this->env->getExtension("native_profiler");
        $__internal_eb159e6a9d24be06edf00eb93df81faf1a976c418acc5d8ce64150b98e08ddff->enter($__internal_eb159e6a9d24be06edf00eb93df81faf1a976c418acc5d8ce64150b98e08ddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/proverka_menu.html"));

        // line 1
        echo "<div  class=\"row\">
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("common_proverka");
        echo "\">Общее число проверок</a></li>
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("narusheniya");
        echo "\">Нарушения по проверкам</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("narusheniya_obj");
        echo "\">Нарушения по объектам</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("nakazaniya");
        echo "\">Наказаниям</a></li>      
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("narusheniya_all");
        echo "\">Нарушения по всем учреждениям</a></li>      
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("proverka_nakazaniya");
        echo "\">Сотрудники привлеченные к назазанию</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("proverka_nevyp");
        echo "\">Невыполненные нарушения</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("proverka_narusheniya_vnimanie");
        echo "\">Нарушения требующие особого внимания</a></li>
    </ul>
</div>";
        
        $__internal_eb159e6a9d24be06edf00eb93df81faf1a976c418acc5d8ce64150b98e08ddff->leave($__internal_eb159e6a9d24be06edf00eb93df81faf1a976c418acc5d8ce64150b98e08ddff_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/proverka_menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div  class="row">*/
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="{{ path('common_proverka') }}">Общее число проверок</a></li>*/
/*         <li><a href="{{ path('narusheniya') }}">Нарушения по проверкам</a></li>*/
/*         <li><a href="{{ path('narusheniya_obj') }}">Нарушения по объектам</a></li>*/
/*         <li><a href="{{ path('nakazaniya') }}">Наказаниям</a></li>      */
/*         <li><a href="{{ path('narusheniya_all') }}">Нарушения по всем учреждениям</a></li>      */
/*         <li><a href="{{ path('proverka_nakazaniya') }}">Сотрудники привлеченные к назазанию</a></li>*/
/*         <li><a href="{{ path('proverka_nevyp') }}">Невыполненные нарушения</a></li>*/
/*         <li><a href="{{ path('proverka_narusheniya_vnimanie') }}">Нарушения требующие особого внимания</a></li>*/
/*     </ul>*/
/* </div>*/
