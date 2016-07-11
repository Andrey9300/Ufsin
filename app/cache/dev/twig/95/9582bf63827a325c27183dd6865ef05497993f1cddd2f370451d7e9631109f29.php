<?php

/* main/addSuccess.html.twig */
class __TwigTemplate_dd4a96091e50aa81d7ea58d7c9c99bbaff2b027883693d5b0ed878b4632510ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/addSuccess.html.twig", 1);
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
        $__internal_63225a0bfdaa9a7af457b75373e8e07367a583a6bad5efd24d170389165a429c = $this->env->getExtension("native_profiler");
        $__internal_63225a0bfdaa9a7af457b75373e8e07367a583a6bad5efd24d170389165a429c->enter($__internal_63225a0bfdaa9a7af457b75373e8e07367a583a6bad5efd24d170389165a429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/addSuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63225a0bfdaa9a7af457b75373e8e07367a583a6bad5efd24d170389165a429c->leave($__internal_63225a0bfdaa9a7af457b75373e8e07367a583a6bad5efd24d170389165a429c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_96d42015d6dda0eb1a50c4ab03c85533b10428044633a7ce18b23c379f64f4c6 = $this->env->getExtension("native_profiler");
        $__internal_96d42015d6dda0eb1a50c4ab03c85533b10428044633a7ce18b23c379f64f4c6->enter($__internal_96d42015d6dda0eb1a50c4ab03c85533b10428044633a7ce18b23c379f64f4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Работа с данными прошла успешно</h1>
    <p><a href=\"#\" id=\"back_page\">Работать еще</a></p>

    ";
        // line 9
        if (array_key_exists("is_ill", $context)) {
            // line 10
            echo "        ";
            if (twig_test_empty((isset($context["is_ill"]) ? $context["is_ill"] : $this->getContext($context, "is_ill")))) {
                // line 11
                echo "        ";
            } else {
                // line 12
                echo "            <p style=\"color:red\">Добавленный заболевший осужденный был ранее заболевшим:</p>
            <ul>
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["is_ill"]) ? $context["is_ill"] : $this->getContext($context, "is_ill")));
                foreach ($context['_seq'] as $context["_key"] => $context["ill"]) {
                    // line 15
                    echo "                <li>Дата предыдущего выявления: ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ill"], "date_viyavleniya", array()), "d.m.Y"), "html", null, true);
                    echo ". <a href=\"/zabolevaniya/osugdenyi/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ill"], "id", array()), "html", null, true);
                    echo "\" target=\"_blank\">Карточка</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            </ul>
        ";
            }
            // line 19
            echo "    ";
        }
        // line 20
        echo "    
    ";
        // line 21
        if (array_key_exists("is_kontakt", $context)) {
            // line 22
            echo "        ";
            if (twig_test_empty((isset($context["is_kontakt"]) ? $context["is_kontakt"] : $this->getContext($context, "is_kontakt")))) {
                // line 23
                echo "        ";
            } else {
                // line 24
                echo "            <p style=\"color:red\">Добавленный осужденный был контактным с:</p>
            <ul>
            ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["is_kontakt"]) ? $context["is_kontakt"] : $this->getContext($context, "is_kontakt")));
                foreach ($context['_seq'] as $context["_key"] => $context["kontakt"]) {
                    // line 27
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["kontakt"], "fio", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["kontakt"], "date_birthday", array()), "d.m.Y"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["kontakt"], "place_progivaniya", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["kontakt"], "date_viyavleniya", array()), "d.m.Y"), "html", null, true);
                    echo ". <a href=\"/zabolevaniya/osugdenyi/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["kontakt"], "id", array()), "html", null, true);
                    echo "\" target=\"_blank\">Карточка</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kontakt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </ul>
        ";
            }
            // line 31
            echo "    ";
        }
        // line 32
        echo "    
    ";
        // line 33
        if (array_key_exists("is_ochag", $context)) {
            // line 34
            echo "        ";
            if (twig_test_empty((isset($context["is_ochag"]) ? $context["is_ochag"] : $this->getContext($context, "is_ochag")))) {
                // line 35
                echo "
        ";
            } else {
                // line 37
                echo "            <p style=\"color:red\">Добавленный осужденный был в очаге:</p>
            <ul>
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["is_ochag"]) ? $context["is_ochag"] : $this->getContext($context, "is_ochag")));
                foreach ($context['_seq'] as $context["_key"] => $context["ochag"]) {
                    // line 40
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ochag"], "name", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ochag"], "place", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ochag"], "date", array()), "d.m.Y"), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ochag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "            </ul>
        ";
            }
            // line 44
            echo "    ";
        }
        // line 45
        echo "    
    ";
        // line 46
        if (array_key_exists("kontakts", $context)) {
            // line 47
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kontakts"]) ? $context["kontakts"] : $this->getContext($context, "kontakts")));
            foreach ($context['_seq'] as $context["_key"] => $context["kontakt"]) {
                // line 48
                echo "        
            ";
                // line 49
                if (twig_test_empty($context["kontakt"])) {
                    // line 50
                    echo "
            ";
                } else {
                    // line 52
                    echo "            <p style=\"color:red\">Добавленный контактный контактный с:</p>
            <ul>   
                ";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["kontakt"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                        // line 55
                        echo "                     <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "kfio", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["k"], "kdate_birthday", array()), "d.m.Y"), "html", null, true);
                        echo " контактный с ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "fio", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["k"], "date_birthday", array()), "d.m.Y"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "place_progivaniya", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["k"], "date_viyavleniya", array()), "d.m.Y"), "html", null, true);
                        echo ". <a href=\"/zabolevaniya/osugdenyi/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
                        echo "\" target=\"_blank\">Карточка</a></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "            </ul>
            ";
                }
                // line 59
                echo "            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kontakt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
        }
        // line 62
        echo "
    ";
        // line 63
        if (array_key_exists("in_ochag", $context)) {
            // line 64
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["in_ochag"]) ? $context["in_ochag"] : $this->getContext($context, "in_ochag")));
            foreach ($context['_seq'] as $context["_key"] => $context["ochag"]) {
                // line 65
                echo "        
            ";
                // line 66
                if (twig_test_empty($context["ochag"])) {
                    // line 67
                    echo "
            ";
                } else {
                    // line 69
                    echo "            <p style=\"color:red\">Добавленный контактный был в очаге:</p>
            <ul>   
                ";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["ochag"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["och"]) {
                        // line 72
                        echo "                     <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["och"], "fio", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["och"], "date_birthday", array()), "d.m.Y"), "html", null, true);
                        echo ", очаг: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["och"], "name", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["och"], "place", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["och"], "date", array()), "d.m.Y"), "html", null, true);
                        echo "</li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['och'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "            </ul>
            ";
                }
                // line 76
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ochag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    ";
        }
        // line 79
        echo "    
</div>
    
";
        
        $__internal_96d42015d6dda0eb1a50c4ab03c85533b10428044633a7ce18b23c379f64f4c6->leave($__internal_96d42015d6dda0eb1a50c4ab03c85533b10428044633a7ce18b23c379f64f4c6_prof);

    }

    // line 84
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a3b32ef15e9629cab3033c001ca4e46c636ea037f49a7df47b5e54e9b54e1800 = $this->env->getExtension("native_profiler");
        $__internal_a3b32ef15e9629cab3033c001ca4e46c636ea037f49a7df47b5e54e9b54e1800->enter($__internal_a3b32ef15e9629cab3033c001ca4e46c636ea037f49a7df47b5e54e9b54e1800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 85
        echo "
";
        
        $__internal_a3b32ef15e9629cab3033c001ca4e46c636ea037f49a7df47b5e54e9b54e1800->leave($__internal_a3b32ef15e9629cab3033c001ca4e46c636ea037f49a7df47b5e54e9b54e1800_prof);

    }

    public function getTemplateName()
    {
        return "main/addSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 85,  295 => 84,  285 => 79,  282 => 78,  275 => 76,  271 => 74,  254 => 72,  250 => 71,  246 => 69,  242 => 67,  240 => 66,  237 => 65,  232 => 64,  230 => 63,  227 => 62,  224 => 61,  217 => 59,  213 => 57,  192 => 55,  188 => 54,  184 => 52,  180 => 50,  178 => 49,  175 => 48,  170 => 47,  168 => 46,  165 => 45,  162 => 44,  158 => 42,  145 => 40,  141 => 39,  137 => 37,  133 => 35,  130 => 34,  128 => 33,  125 => 32,  122 => 31,  118 => 29,  101 => 27,  97 => 26,  93 => 24,  90 => 23,  87 => 22,  85 => 21,  82 => 20,  79 => 19,  75 => 17,  64 => 15,  60 => 14,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Работа с данными прошла успешно</h1>*/
/*     <p><a href="#" id="back_page">Работать еще</a></p>*/
/* */
/*     {% if is_ill is defined %}*/
/*         {% if is_ill is empty %}*/
/*         {% else %}*/
/*             <p style="color:red">Добавленный заболевший осужденный был ранее заболевшим:</p>*/
/*             <ul>*/
/*             {% for ill in is_ill %}*/
/*                 <li>Дата предыдущего выявления: {{ ill.date_viyavleniya|date("d.m.Y") }}. <a href="/zabolevaniya/osugdenyi/{{ill.id}}" target="_blank">Карточка</a></li>*/
/*             {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     */
/*     {% if is_kontakt is defined %}*/
/*         {% if is_kontakt is empty %}*/
/*         {% else %}*/
/*             <p style="color:red">Добавленный осужденный был контактным с:</p>*/
/*             <ul>*/
/*             {% for kontakt in is_kontakt %}*/
/*                 <li>{{ kontakt.fio }}, {{ kontakt.date_birthday|date("d.m.Y") }}, {{ kontakt.place_progivaniya }}, {{ kontakt.date_viyavleniya|date("d.m.Y") }}. <a href="/zabolevaniya/osugdenyi/{{kontakt.id}}" target="_blank">Карточка</a></li>*/
/*             {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     */
/*     {% if is_ochag is defined %}*/
/*         {% if is_ochag is empty  %}*/
/* */
/*         {% else %}*/
/*             <p style="color:red">Добавленный осужденный был в очаге:</p>*/
/*             <ul>*/
/*             {% for ochag in is_ochag %}*/
/*                 <li>{{ochag.name}}, {{ochag.place}}, {{ ochag.date|date("d.m.Y") }}</li>*/
/*             {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     */
/*     {% if kontakts is defined %}*/
/*         {% for kontakt in kontakts %}*/
/*         */
/*             {% if kontakt is empty  %}*/
/* */
/*             {% else %}*/
/*             <p style="color:red">Добавленный контактный контактный с:</p>*/
/*             <ul>   */
/*                 {% for k in kontakt %}*/
/*                      <li>{{ k.kfio }}, {{ k.kdate_birthday|date("d.m.Y") }} контактный с {{ k.fio }}, {{ k.date_birthday|date("d.m.Y") }}, {{ k.place_progivaniya }}, {{ k.date_viyavleniya|date("d.m.Y") }}. <a href="/zabolevaniya/osugdenyi/{{k.id}}" target="_blank">Карточка</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             {% endif %}*/
/*             */
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     {% if in_ochag is defined %}*/
/*         {% for ochag in in_ochag %}*/
/*         */
/*             {% if ochag is empty  %}*/
/* */
/*             {% else %}*/
/*             <p style="color:red">Добавленный контактный был в очаге:</p>*/
/*             <ul>   */
/*                 {% for och in ochag %}*/
/*                      <li>{{ och.fio }}, {{ och.date_birthday|date("d.m.Y") }}, очаг: {{ och.name }}, {{och.place}}, {{ och.date|date("d.m.Y") }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             {% endif %}*/
/* */
/*         {% endfor %}*/
/*     {% endif %}*/
/*     */
/* </div>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
