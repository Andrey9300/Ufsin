<?php

/* :zabolevaniya:lichnyi_sostav_card.html.twig */
class __TwigTemplate_2924356fe04fc528c1629faa7dd34feb8aef7fccc946bb0f7ff7f65e520b2133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":zabolevaniya:lichnyi_sostav_card.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9e40db359e1cc14d2549b14477c123f914cdaaf1e567d47157ef7df78c199491 = $this->env->getExtension("native_profiler");
        $__internal_9e40db359e1cc14d2549b14477c123f914cdaaf1e567d47157ef7df78c199491->enter($__internal_9e40db359e1cc14d2549b14477c123f914cdaaf1e567d47157ef7df78c199491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":zabolevaniya:lichnyi_sostav_card.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e40db359e1cc14d2549b14477c123f914cdaaf1e567d47157ef7df78c199491->leave($__internal_9e40db359e1cc14d2549b14477c123f914cdaaf1e567d47157ef7df78c199491_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e829c46686a33933dfd1d9845e176e0e501aea02d78ceddde5269ffdcce7d413 = $this->env->getExtension("native_profiler");
        $__internal_e829c46686a33933dfd1d9845e176e0e501aea02d78ceddde5269ffdcce7d413->enter($__internal_e829c46686a33933dfd1d9845e176e0e501aea02d78ceddde5269ffdcce7d413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-md-6\">
        <h3>Заболевший личного состава</h3>
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <td>Учреждение</td>
                    <td>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
        echo "</td>
                </tr>            
                <tr>
                    <td>ФИО</td>
                    <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "fio", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Дата рождения</td>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "dateBirthday", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "address", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Профессия</td>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "profession", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Дата заболевания</td>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "dataZabolevaniya", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Дата обращения</td>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "dataObracheniya", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                </tr>            
                <tr>
                    <td>Дата извещения</td>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "dataExtrIzv", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div> 
</div> 

<div class=\"row\">            
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"/zabolevaniya/editLichnyiSostav/";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "id", array()), "html", null, true);
        echo "\">Редактировать заболевшего</a></li>
        <li><a href=\"/zabolevaniya/deleteLichnyiSostav/";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")), "id", array()), "html", null, true);
        echo "\">Удалить заболевшего</a></li>
   </ul>
</div> 

";
        
        $__internal_e829c46686a33933dfd1d9845e176e0e501aea02d78ceddde5269ffdcce7d413->leave($__internal_e829c46686a33933dfd1d9845e176e0e501aea02d78ceddde5269ffdcce7d413_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_154de7ad26c61a6bc6d45bad8ddb32dafcb75076cc6168c088bd5420d86c6500 = $this->env->getExtension("native_profiler");
        $__internal_154de7ad26c61a6bc6d45bad8ddb32dafcb75076cc6168c088bd5420d86c6500->enter($__internal_154de7ad26c61a6bc6d45bad8ddb32dafcb75076cc6168c088bd5420d86c6500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "
";
        
        $__internal_154de7ad26c61a6bc6d45bad8ddb32dafcb75076cc6168c088bd5420d86c6500->leave($__internal_154de7ad26c61a6bc6d45bad8ddb32dafcb75076cc6168c088bd5420d86c6500_prof);

    }

    public function getTemplateName()
    {
        return ":zabolevaniya:lichnyi_sostav_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  128 => 56,  116 => 50,  112 => 49,  100 => 40,  93 => 36,  86 => 32,  79 => 28,  72 => 24,  65 => 20,  58 => 16,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-6">*/
/*         <h3>Заболевший личного состава</h3>*/
/*         <table class="table table-hover">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td>Учреждение</td>*/
/*                     <td>{{ organization_name }}</td>*/
/*                 </tr>            */
/*                 <tr>*/
/*                     <td>ФИО</td>*/
/*                     <td>{{ lichnyiSostav.fio }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата рождения</td>*/
/*                     <td>{{ lichnyiSostav.dateBirthday|date("d.m.Y") }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Адрес</td>*/
/*                     <td>{{ lichnyiSostav.address }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Профессия</td>*/
/*                     <td>{{ lichnyiSostav.profession }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата заболевания</td>*/
/*                     <td>{{ lichnyiSostav.dataZabolevaniya|date("d.m.Y") }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата обращения</td>*/
/*                     <td>{{ lichnyiSostav.dataObracheniya|date("d.m.Y") }}</td>*/
/*                 </tr>            */
/*                 <tr>*/
/*                     <td>Дата извещения</td>*/
/*                     <td>{{ lichnyiSostav.dataExtrIzv|date("d.m.Y") }}</td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div> */
/* </div> */
/* */
/* <div class="row">            */
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="/zabolevaniya/editLichnyiSostav/{{ lichnyiSostav.id }}">Редактировать заболевшего</a></li>*/
/*         <li><a href="/zabolevaniya/deleteLichnyiSostav/{{ lichnyiSostav.id }}">Удалить заболевшего</a></li>*/
/*    </ul>*/
/* </div> */
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/