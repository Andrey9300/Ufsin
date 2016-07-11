<?php

/* :zabolevaniya:ochag_card.html.twig */
class __TwigTemplate_ca4291ca54ad53009b2d2dcfff5d38ce0557169cff33e59f9b442ffe26e62153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":zabolevaniya:ochag_card.html.twig", 1);
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
        $__internal_b0dd0d1069ba34331bfe7051b03e82ad6988f3e1eee98104080732ce34c0bcf0 = $this->env->getExtension("native_profiler");
        $__internal_b0dd0d1069ba34331bfe7051b03e82ad6988f3e1eee98104080732ce34c0bcf0->enter($__internal_b0dd0d1069ba34331bfe7051b03e82ad6988f3e1eee98104080732ce34c0bcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":zabolevaniya:ochag_card.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0dd0d1069ba34331bfe7051b03e82ad6988f3e1eee98104080732ce34c0bcf0->leave($__internal_b0dd0d1069ba34331bfe7051b03e82ad6988f3e1eee98104080732ce34c0bcf0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5ff032b7de9328de885bfb902419442b7c123dcb1e49fdb88cf1990ea0a3c0ac = $this->env->getExtension("native_profiler");
        $__internal_5ff032b7de9328de885bfb902419442b7c123dcb1e49fdb88cf1990ea0a3c0ac->enter($__internal_5ff032b7de9328de885bfb902419442b7c123dcb1e49fdb88cf1990ea0a3c0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-md-6\">
        <h3>Очаг</h3>
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
                    <td>Наименование</td>
                    <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ochag"]) ? $context["ochag"] : $this->getContext($context, "ochag")), "name", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Дата</td>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ochag"]) ? $context["ochag"] : $this->getContext($context, "ochag")), "date", array()), "d.m.Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Место</td>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ochag"]) ? $context["ochag"] : $this->getContext($context, "ochag")), "place", array()), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div> 
    
    <div class=\"col-md-6\">
        <div class=\"row\"> 
            ";
        // line 32
        if (twig_test_empty((isset($context["ochag_osugdenye"]) ? $context["ochag_osugdenye"] : $this->getContext($context, "ochag_osugdenye")))) {
            // line 33
            echo "                <div>Заболевших нет</div>
            ";
        } else {
            // line 35
            echo "            <h3>Заболевшие</h3>
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <td>ФИО</td>
                        <td>Дата рождения</td>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ochag_osugdenye"]) ? $context["ochag_osugdenye"] : $this->getContext($context, "ochag_osugdenye")));
            foreach ($context['_seq'] as $context["_key"] => $context["osugdenye"]) {
                // line 45
                echo "                    <tr>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["osugdenye"], "fio", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["osugdenye"], "dateBirthday", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osugdenye'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </tbody>
            </table>
            ";
        }
        // line 53
        echo "        </div> 
        
        <div class=\"row\"> 
            ";
        // line 56
        if (twig_test_empty((isset($context["ochag_kontaktnye"]) ? $context["ochag_kontaktnye"] : $this->getContext($context, "ochag_kontaktnye")))) {
            // line 57
            echo "                <div>Контактных нет</div>
            ";
        } else {
            // line 59
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
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ochag_kontaktnye"]) ? $context["ochag_kontaktnye"] : $this->getContext($context, "ochag_kontaktnye")));
            foreach ($context['_seq'] as $context["_key"] => $context["kontaktnye"]) {
                // line 69
                echo "                    <tr>
                        <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["kontaktnye"], "fio", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["kontaktnye"], "dateBirthday", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kontaktnye'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                </tbody>
            </table>
            ";
        }
        // line 77
        echo "        </div> 
    </div> 
</div> 

<div class=\"row\">            
    <ul class=\"nav navbar-nav add\">
        <li><a href=\"/zabolevaniya/editOchag/";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ochag"]) ? $context["ochag"] : $this->getContext($context, "ochag")), "id", array()), "html", null, true);
        echo "\">Редактировать очаг</a></li>
        <li><a href=\"/zabolevaniya/deleteOchag/";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ochag"]) ? $context["ochag"] : $this->getContext($context, "ochag")), "id", array()), "html", null, true);
        echo "\">Удалить очаг</a></li>
   </ul>
</div> 

";
        
        $__internal_5ff032b7de9328de885bfb902419442b7c123dcb1e49fdb88cf1990ea0a3c0ac->leave($__internal_5ff032b7de9328de885bfb902419442b7c123dcb1e49fdb88cf1990ea0a3c0ac_prof);

    }

    // line 90
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_88353d92cf5f95d5bb7b98b22c95d518786262b22cc5f270b73a91e3f20f52b1 = $this->env->getExtension("native_profiler");
        $__internal_88353d92cf5f95d5bb7b98b22c95d518786262b22cc5f270b73a91e3f20f52b1->enter($__internal_88353d92cf5f95d5bb7b98b22c95d518786262b22cc5f270b73a91e3f20f52b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 91
        echo "
";
        
        $__internal_88353d92cf5f95d5bb7b98b22c95d518786262b22cc5f270b73a91e3f20f52b1->leave($__internal_88353d92cf5f95d5bb7b98b22c95d518786262b22cc5f270b73a91e3f20f52b1_prof);

    }

    public function getTemplateName()
    {
        return ":zabolevaniya:ochag_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 91,  196 => 90,  184 => 84,  180 => 83,  172 => 77,  167 => 74,  158 => 71,  154 => 70,  151 => 69,  147 => 68,  136 => 59,  132 => 57,  130 => 56,  125 => 53,  120 => 50,  111 => 47,  107 => 46,  104 => 45,  100 => 44,  89 => 35,  85 => 33,  83 => 32,  72 => 24,  65 => 20,  58 => 16,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-6">*/
/*         <h3>Очаг</h3>*/
/*         <table class="table table-hover">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td>Учреждение</td>*/
/*                     <td>{{ organization_name }}</td>*/
/*                 </tr>            */
/*                 <tr>*/
/*                     <td>Наименование</td>*/
/*                     <td>{{ ochag.name }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Дата</td>*/
/*                     <td>{{ ochag.date|date("d.m.Y") }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Место</td>*/
/*                     <td>{{ ochag.place }}</td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div> */
/*     */
/*     <div class="col-md-6">*/
/*         <div class="row"> */
/*             {% if ochag_osugdenye is empty %}*/
/*                 <div>Заболевших нет</div>*/
/*             {% else %}*/
/*             <h3>Заболевшие</h3>*/
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <td>ФИО</td>*/
/*                         <td>Дата рождения</td>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for osugdenye in ochag_osugdenye %}*/
/*                     <tr>*/
/*                         <td>{{ osugdenye.fio }}</td>*/
/*                         <td>{{ osugdenye.dateBirthday|date("d.m.Y") }}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {% endif %}*/
/*         </div> */
/*         */
/*         <div class="row"> */
/*             {% if ochag_kontaktnye is empty %}*/
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
/*                     {% for kontaktnye in ochag_kontaktnye %}*/
/*                     <tr>*/
/*                         <td>{{ kontaktnye.fio }}</td>*/
/*                         <td>{{ kontaktnye.dateBirthday|date("d.m.Y") }}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {% endif %}*/
/*         </div> */
/*     </div> */
/* </div> */
/* */
/* <div class="row">            */
/*     <ul class="nav navbar-nav add">*/
/*         <li><a href="/zabolevaniya/editOchag/{{ ochag.id }}">Редактировать очаг</a></li>*/
/*         <li><a href="/zabolevaniya/deleteOchag/{{ ochag.id }}">Удалить очаг</a></li>*/
/*    </ul>*/
/* </div> */
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
