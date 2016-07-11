<?php

/* :zabolevaniya:osugdenyi_card.html.twig */
class __TwigTemplate_992f067da292f6a6a87954cf25dc407cfab09f50ca02aaf657ca02b6ff2bbb39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":zabolevaniya:osugdenyi_card.html.twig", 1);
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
        $__internal_58da4d9d56cc14138866b30c32ca48c914e0fdae9088b3f67cb04e7fedf13422 = $this->env->getExtension("native_profiler");
        $__internal_58da4d9d56cc14138866b30c32ca48c914e0fdae9088b3f67cb04e7fedf13422->enter($__internal_58da4d9d56cc14138866b30c32ca48c914e0fdae9088b3f67cb04e7fedf13422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":zabolevaniya:osugdenyi_card.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58da4d9d56cc14138866b30c32ca48c914e0fdae9088b3f67cb04e7fedf13422->leave($__internal_58da4d9d56cc14138866b30c32ca48c914e0fdae9088b3f67cb04e7fedf13422_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_78ea63987cf3cfba552bd9c30e2fb3f22f696752be5417953bfd58cbd1c4be8f = $this->env->getExtension("native_profiler");
        $__internal_78ea63987cf3cfba552bd9c30e2fb3f22f696752be5417953bfd58cbd1c4be8f->enter($__internal_78ea63987cf3cfba552bd9c30e2fb3f22f696752be5417953bfd58cbd1c4be8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-md-6\">
        <h3>Заболевший осужденный</h3>
        <table class=\"table table-hover\">
            <tbody>
\t\t\t    <tr>
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "fio", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Дата рождения</td>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateBirthday", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Место работы</td>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "placeJob", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Место учебы</td>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "placeStudy", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Место проживания</td>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "placeProgivaniya", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Дата заболевания</td>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateViyavleniya", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                </tr>
               
                <tr>
                    <td>Дата госпитализации в МЧ</td>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateGospit", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Дата взятия на учет ЛИУ-9</td>
                    <td>
                        ";
        // line 46
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateVzyatiyaNaUchet", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateVzyatiyaNaUchet", array()), "d.m.Y"))), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>Дата перевода в ЛИУ-9</td>
                    <td>
                        ";
        // line 52
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "datePerevoda", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "datePerevoda", array()), "d.m.Y"))), "html", null, true);
        echo "     
                    </td>
                </tr>            
                <tr>
                    <td>МБТ</td>
                    <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "mbt", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Дата заключительной дезинфекции</td>
                    <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateZaklDezin", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Дата поступления в учреждение</td>
                    <td>
                        ";
        // line 66
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "datePostVOrg", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "datePostVOrg", array()), "d.m.Y"))), "html", null, true);
        echo " 
                    </td>
                </tr>
                <tr>
                    <td>Дата обращения в МЧ</td>
                    <td>
                        ";
        // line 72
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateObr", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateObr", array()), "d.m.Y"))), "html", null, true);
        echo "   
                    </td>
                </tr>
                <tr>
                    <td>Выявлен</td>
                    <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "viyavlen", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Заболеваемость</td>
                    <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "recidiv", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Поступил из</td>
                    <td>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "postupilIz", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Адрес общий</td>
                    <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "addressCommon", array()), "html", null, true);
        echo "</td>
                </tr>            
                <tr>
                    <td>Адрес по прописке</td>
                    <td>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "addressPropiska", array()), "html", null, true);
        echo "</td>
                </tr>   
                <tr>
                    <td>Очаг</td>
                    ";
        // line 97
        if ((null === $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "ochag", array()))) {
            // line 98
            echo "                        <td></td>
                    ";
        } else {
            // line 100
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "ochag", array()), "date", array()), "d.m.Y"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "ochag", array()), "place", array()), "html", null, true);
            echo "</td>
                    ";
        }
        // line 101
        echo " 
                </tr>
            </tbody>
        </table>
    </div>
   
    <div class=\"col-md-6\">
        <div class=\"row\"> 
            ";
        // line 109
        if (twig_test_empty((isset($context["kontakts"]) ? $context["kontakts"] : $this->getContext($context, "kontakts")))) {
            // line 110
            echo "                <div>Контактных нет</div>
            ";
        } else {
            // line 112
            echo "            <h3>Контактные</h3>
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <td>ФИО</td>
                        <td>Дата рождения</td>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kontakts"]) ? $context["kontakts"] : $this->getContext($context, "kontakts")));
            foreach ($context['_seq'] as $context["_key"] => $context["kontakt"]) {
                // line 122
                echo "                    <tr>
                        <td>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["kontakt"], "fio", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["kontakt"], "dateBirthday", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kontakt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                </tbody>
            </table>
            ";
        }
        // line 130
        echo "        </div> 
        
        <div class=\"row\"> 
            ";
        // line 133
        if (twig_test_empty((isset($context["datesFLG"]) ? $context["datesFLG"] : $this->getContext($context, "datesFLG")))) {
            // line 134
            echo "                <div>ФЛГ нет</div>
            ";
        } else {
            // line 136
            echo "            <h3>ФЛГ</h3>
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <td>Результат</td>
                        <td>Дата</td>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datesFLG"]) ? $context["datesFLG"] : $this->getContext($context, "datesFLG")));
            foreach ($context['_seq'] as $context["_key"] => $context["flg"]) {
                // line 146
                echo "                    <tr>
                        <td>";
                // line 147
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["flg"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["flg"], "result", array()), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                </tbody>
            </table>
            ";
        }
        // line 154
        echo "        </div>
        
        <div class=\"row\"> 
            ";
        // line 157
        if (twig_test_empty((isset($context["soputPatol"]) ? $context["soputPatol"] : $this->getContext($context, "soputPatol")))) {
            // line 158
            echo "                <div>Сопутствующих патологий нет</div>
            ";
        } else {
            // line 160
            echo "            <h3>Сопутствующие патологии</h3>
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <td>Наименование</td>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["soputPatol"]) ? $context["soputPatol"] : $this->getContext($context, "soputPatol")));
            foreach ($context['_seq'] as $context["_key"] => $context["patol"]) {
                // line 169
                echo "                    <tr>
                        <td>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["patol"], "name", array()), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                </tbody>
            </table>
            ";
        }
        // line 176
        echo "        </div>         
    </div> 
</div> 

<div class=\"row\">            
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"/zabolevaniya/editOsugdenyi/";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "id", array()), "html", null, true);
        echo "\">Редактировать заболевшего</a></li>
        <li><a href=\"/zabolevaniya/deleteOsugdenyi/";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "id", array()), "html", null, true);
        echo "\">Удалить заболевшего</a></li>
   </ul>
</div> 
   
";
        
        $__internal_78ea63987cf3cfba552bd9c30e2fb3f22f696752be5417953bfd58cbd1c4be8f->leave($__internal_78ea63987cf3cfba552bd9c30e2fb3f22f696752be5417953bfd58cbd1c4be8f_prof);

    }

    // line 189
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_578cd0e599286c7b4327b865a087dcfe0430a9e16825481c75d80b8f7f998814 = $this->env->getExtension("native_profiler");
        $__internal_578cd0e599286c7b4327b865a087dcfe0430a9e16825481c75d80b8f7f998814->enter($__internal_578cd0e599286c7b4327b865a087dcfe0430a9e16825481c75d80b8f7f998814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 190
        echo "
";
        
        $__internal_578cd0e599286c7b4327b865a087dcfe0430a9e16825481c75d80b8f7f998814->leave($__internal_578cd0e599286c7b4327b865a087dcfe0430a9e16825481c75d80b8f7f998814_prof);

    }

    public function getTemplateName()
    {
        return ":zabolevaniya:osugdenyi_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 190,  372 => 189,  360 => 183,  356 => 182,  348 => 176,  343 => 173,  334 => 170,  331 => 169,  327 => 168,  317 => 160,  313 => 158,  311 => 157,  306 => 154,  301 => 151,  292 => 148,  288 => 147,  285 => 146,  281 => 145,  270 => 136,  266 => 134,  264 => 133,  259 => 130,  254 => 127,  245 => 124,  241 => 123,  238 => 122,  234 => 121,  223 => 112,  219 => 110,  217 => 109,  207 => 101,  199 => 100,  195 => 98,  193 => 97,  186 => 93,  179 => 89,  172 => 85,  165 => 81,  158 => 77,  150 => 72,  141 => 66,  133 => 61,  126 => 57,  118 => 52,  109 => 46,  101 => 41,  93 => 36,  86 => 32,  79 => 28,  72 => 24,  65 => 20,  58 => 16,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-6">*/
/*         <h3>Заболевший осужденный</h3>*/
/*         <table class="table table-hover">*/
/*             <tbody>*/
/* 			    <tr>*/
/*                     <td>Учреждение</td>*/
/*                     <td>{{ organization_name }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>ФИО</td>*/
/*                     <td>{{ osugdenyi.fio }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата рождения</td>*/
/*                     <td>{{ osugdenyi.dateBirthday|date("d.m.Y") }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Место работы</td>*/
/*                     <td>{{ osugdenyi.placeJob }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Место учебы</td>*/
/*                     <td>{{ osugdenyi.placeStudy }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Место проживания</td>*/
/*                     <td>{{ osugdenyi.placeProgivaniya }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата заболевания</td>*/
/*                     <td>{{ osugdenyi.dateViyavleniya|date("d.m.Y") }}</td>*/
/*                 </tr>*/
/*                */
/*                 <tr>*/
/*                     <td>Дата госпитализации в МЧ</td>*/
/*                     <td>{{ osugdenyi.dateGospit|date("d.m.Y") }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата взятия на учет ЛИУ-9</td>*/
/*                     <td>*/
/*                         {{ osugdenyi.dateVzyatiyaNaUchet is empty ? "" : osugdenyi.dateVzyatiyaNaUchet|date("d.m.Y") }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата перевода в ЛИУ-9</td>*/
/*                     <td>*/
/*                         {{ osugdenyi.datePerevoda is empty ? "" : osugdenyi.datePerevoda|date("d.m.Y") }}     */
/*                     </td>*/
/*                 </tr>            */
/*                 <tr>*/
/*                     <td>МБТ</td>*/
/*                     <td>{{ osugdenyi.mbt }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата заключительной дезинфекции</td>*/
/*                     <td>{{ osugdenyi.dateZaklDezin|date("d.m.Y") }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата поступления в учреждение</td>*/
/*                     <td>*/
/*                         {{ osugdenyi.datePostVOrg is empty ? "" : osugdenyi.datePostVOrg|date("d.m.Y") }} */
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата обращения в МЧ</td>*/
/*                     <td>*/
/*                         {{ osugdenyi.dateObr is empty ? "" : osugdenyi.dateObr|date("d.m.Y") }}   */
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Выявлен</td>*/
/*                     <td>{{ osugdenyi.viyavlen }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Заболеваемость</td>*/
/*                     <td>{{ osugdenyi.recidiv }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Поступил из</td>*/
/*                     <td>{{ osugdenyi.postupilIz }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Адрес общий</td>*/
/*                     <td>{{ osugdenyi.addressCommon }}</td>*/
/*                 </tr>            */
/*                 <tr>*/
/*                     <td>Адрес по прописке</td>*/
/*                     <td>{{ osugdenyi.addressPropiska }}</td>*/
/*                 </tr>   */
/*                 <tr>*/
/*                     <td>Очаг</td>*/
/*                     {% if osugdenyi.ochag is null %}*/
/*                         <td></td>*/
/*                     {% else %}*/
/*                         <td>{{ osugdenyi.ochag.date|date("d.m.Y") }}, {{ osugdenyi.ochag.place }}</td>*/
/*                     {% endif %} */
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*    */
/*     <div class="col-md-6">*/
/*         <div class="row"> */
/*             {% if kontakts is empty %}*/
/*                 <div>Контактных нет</div>*/
/*             {% else %}*/
/*             <h3>Контактные</h3>*/
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <td>ФИО</td>*/
/*                         <td>Дата рождения</td>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for kontakt in kontakts %}*/
/*                     <tr>*/
/*                         <td>{{ kontakt.fio }}</td>*/
/*                         <td>{{ kontakt.dateBirthday|date("d.m.Y") }}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {% endif %}*/
/*         </div> */
/*         */
/*         <div class="row"> */
/*             {% if datesFLG is empty %}*/
/*                 <div>ФЛГ нет</div>*/
/*             {% else %}*/
/*             <h3>ФЛГ</h3>*/
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <td>Результат</td>*/
/*                         <td>Дата</td>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for flg in datesFLG %}*/
/*                     <tr>*/
/*                         <td>{{ flg.date|date("d.m.Y") }}</td>*/
/*                         <td>{{ flg.result }}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {% endif %}*/
/*         </div>*/
/*         */
/*         <div class="row"> */
/*             {% if soputPatol is empty %}*/
/*                 <div>Сопутствующих патологий нет</div>*/
/*             {% else %}*/
/*             <h3>Сопутствующие патологии</h3>*/
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <td>Наименование</td>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for patol in soputPatol %}*/
/*                     <tr>*/
/*                         <td>{{ patol.name }}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {% endif %}*/
/*         </div>         */
/*     </div> */
/* </div> */
/* */
/* <div class="row">            */
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="/zabolevaniya/editOsugdenyi/{{ osugdenyi.id }}">Редактировать заболевшего</a></li>*/
/*         <li><a href="/zabolevaniya/deleteOsugdenyi/{{ osugdenyi.id }}">Удалить заболевшего</a></li>*/
/*    </ul>*/
/* </div> */
/*    */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
