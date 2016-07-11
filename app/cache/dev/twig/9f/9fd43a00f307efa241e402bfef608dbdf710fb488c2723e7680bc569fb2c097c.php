<?php

/* otchet/ajax/zabolevanie_menu.html */
class __TwigTemplate_8a7bc23675cb8fdd3e3c651db7b1286346815647e78dc81eda16a3a874c739b0 extends Twig_Template
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
        $__internal_d5544e400d914873ceb576a16e828829fe91ccb2cf61eefd309650d7395945bc = $this->env->getExtension("native_profiler");
        $__internal_d5544e400d914873ceb576a16e828829fe91ccb2cf61eefd309650d7395945bc->enter($__internal_d5544e400d914873ceb576a16e828829fe91ccb2cf61eefd309650d7395945bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otchet/ajax/zabolevanie_menu.html"));

        // line 1
        echo "<div  class=\"row\">
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("zabolevaniya");
        echo "\">Общее</a></li>
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("kontaktnye");
        echo "\">Общее (Контактные)</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("otryad");
        echo "\">Отряды</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("otryad_kontakt");
        echo "\">Отряды (Контактные)</a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("mbt");
        echo "\">МБТ</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("viyavlenie");
        echo "\">Выявление</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("recidiv");
        echo "\">Заболеваемость</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("postupil_is");
        echo "\">Поступление</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("address_common");
        echo "\">Адрес общий</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ochag");
        echo "\">Очаг</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("patologiya");
        echo "\">Сопутствующая патология</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("povtorno");
        echo "\">Повторно заболевшие</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("iz_kontaktnyh");
        echo "\">Заболевшие из IV ГДУ</a></li>
    </ul>
</div>";
        
        $__internal_d5544e400d914873ceb576a16e828829fe91ccb2cf61eefd309650d7395945bc->leave($__internal_d5544e400d914873ceb576a16e828829fe91ccb2cf61eefd309650d7395945bc_prof);

    }

    public function getTemplateName()
    {
        return "otchet/ajax/zabolevanie_menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div  class="row">*/
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="{{ path('zabolevaniya') }}">Общее</a></li>*/
/*         <li><a href="{{ path('kontaktnye') }}">Общее (Контактные)</a></li>*/
/*         <li><a href="{{ path('otryad') }}">Отряды</a></li>*/
/*         <li><a href="{{ path('otryad_kontakt') }}">Отряды (Контактные)</a></li>*/
/*         <li><a href="{{ path('mbt') }}">МБТ</a></li>*/
/*         <li><a href="{{ path('viyavlenie') }}">Выявление</a></li>*/
/*         <li><a href="{{ path('recidiv') }}">Заболеваемость</a></li>*/
/*         <li><a href="{{ path('postupil_is') }}">Поступление</a></li>*/
/*         <li><a href="{{ path('address_common') }}">Адрес общий</a></li>*/
/*         <li><a href="{{ path('ochag') }}">Очаг</a></li>*/
/*         <li><a href="{{ path('patologiya') }}">Сопутствующая патология</a></li>*/
/*         <li><a href="{{ path('povtorno') }}">Повторно заболевшие</a></li>*/
/*         <li><a href="{{ path('iz_kontaktnyh') }}">Заболевшие из IV ГДУ</a></li>*/
/*     </ul>*/
/* </div>*/
