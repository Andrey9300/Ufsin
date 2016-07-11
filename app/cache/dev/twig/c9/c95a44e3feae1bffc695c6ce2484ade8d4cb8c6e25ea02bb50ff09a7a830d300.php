<?php

/* main/addSuccessIsOsugdenyi.html.twig */
class __TwigTemplate_e330cf345d5c85fe98d0b816d36fae7024240941dcca23fd61ee23380e598ddf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/addSuccessIsOsugdenyi.html.twig", 1);
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
        $__internal_fbb5982d380005bc1c5240f5cbbc954df04e285f78f31dc9e1ae232d955d4372 = $this->env->getExtension("native_profiler");
        $__internal_fbb5982d380005bc1c5240f5cbbc954df04e285f78f31dc9e1ae232d955d4372->enter($__internal_fbb5982d380005bc1c5240f5cbbc954df04e285f78f31dc9e1ae232d955d4372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/addSuccessIsOsugdenyi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbb5982d380005bc1c5240f5cbbc954df04e285f78f31dc9e1ae232d955d4372->leave($__internal_fbb5982d380005bc1c5240f5cbbc954df04e285f78f31dc9e1ae232d955d4372_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_308e8531ebc2120b8de7fb25a98830e8b3756a6a948e2bf354a6be4b58d105e6 = $this->env->getExtension("native_profiler");
        $__internal_308e8531ebc2120b8de7fb25a98830e8b3756a6a948e2bf354a6be4b58d105e6->enter($__internal_308e8531ebc2120b8de7fb25a98830e8b3756a6a948e2bf354a6be4b58d105e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Добавление прошло успешно</h1>

    ";
        // line 8
        if (twig_test_empty((isset($context["is_kontakt"]) ? $context["is_kontakt"] : $this->getContext($context, "is_kontakt")))) {
            // line 9
            echo "
    ";
        } else {
            // line 11
            echo "        <p style=\"color:red\">Добавленный осужденный был контактным с:</p>
        <ul>
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["is_kontakt"]) ? $context["is_kontakt"] : $this->getContext($context, "is_kontakt")));
            foreach ($context['_seq'] as $context["_key"] => $context["kontakt"]) {
                // line 14
                echo "            <li><a href=\"/otchetZabolevaniya/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kontakt"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kontakt"], "fio", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kontakt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </ul>
    ";
        }
        // line 18
        echo "    
    ";
        // line 19
        if (twig_test_empty((isset($context["is_ochag"]) ? $context["is_ochag"] : $this->getContext($context, "is_ochag")))) {
            // line 20
            echo "
    ";
        } else {
            // line 22
            echo "        <p style=\"color:red\">Добавленный осужденный был в очаге:</p>
        <ul>
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["is_ochag"]) ? $context["is_ochag"] : $this->getContext($context, "is_ochag")));
            foreach ($context['_seq'] as $context["_key"] => $context["ochag"]) {
                // line 25
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ochag"], "name", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ochag"], "date", array()), "d.m.Y"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ochag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </ul>
    ";
        }
        // line 29
        echo "    
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kontakts"]) ? $context["kontakts"] : $this->getContext($context, "kontakts")));
        foreach ($context['_seq'] as $context["_key"] => $context["kontakt"]) {
            // line 31
            echo "    
        ";
            // line 32
            if (twig_test_empty($context["kontakt"])) {
                // line 33
                echo "
        ";
            } else {
                // line 35
                echo "        <p style=\"color:red\">Добавленный контактный контактный с:</p>
        <ul>   
            ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["kontakt"]);
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 38
                    echo "                 <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "fio", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["k"], "date_birthday", array()), "d.m.Y"), "html", null, true);
                    echo " контактный с <a href=\"/otchetZabolevaniya/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "fio", array()), "html", null, true);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        </ul>
        ";
            }
            // line 42
            echo "        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kontakt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["in_ochag"]) ? $context["in_ochag"] : $this->getContext($context, "in_ochag")));
        foreach ($context['_seq'] as $context["_key"] => $context["ochag"]) {
            // line 46
            echo "    
        ";
            // line 47
            if (twig_test_empty($context["ochag"])) {
                // line 48
                echo "
        ";
            } else {
                // line 50
                echo "        <p style=\"color:red\">Добавленный контактный был в очаге:</p>
        <ul>   
            ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["ochag"]);
                foreach ($context['_seq'] as $context["_key"] => $context["och"]) {
                    // line 53
                    echo "                 <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["och"], "fio", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["och"], "date_birthday", array()), "d.m.Y"), "html", null, true);
                    echo ", очаг: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["och"], "name", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["och"], "date", array()), "d.m.Y"), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['och'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "        </ul>
        ";
            }
            // line 57
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ochag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        
</div>

";
        
        $__internal_308e8531ebc2120b8de7fb25a98830e8b3756a6a948e2bf354a6be4b58d105e6->leave($__internal_308e8531ebc2120b8de7fb25a98830e8b3756a6a948e2bf354a6be4b58d105e6_prof);

    }

    // line 64
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fc1c029ec29c7c11da686698ae6131cc43363844d6be277831c29fc5fe4b1134 = $this->env->getExtension("native_profiler");
        $__internal_fc1c029ec29c7c11da686698ae6131cc43363844d6be277831c29fc5fe4b1134->enter($__internal_fc1c029ec29c7c11da686698ae6131cc43363844d6be277831c29fc5fe4b1134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 65
        echo "
";
        
        $__internal_fc1c029ec29c7c11da686698ae6131cc43363844d6be277831c29fc5fe4b1134->leave($__internal_fc1c029ec29c7c11da686698ae6131cc43363844d6be277831c29fc5fe4b1134_prof);

    }

    public function getTemplateName()
    {
        return "main/addSuccessIsOsugdenyi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 65,  218 => 64,  208 => 59,  201 => 57,  197 => 55,  182 => 53,  178 => 52,  174 => 50,  170 => 48,  168 => 47,  165 => 46,  161 => 45,  158 => 44,  151 => 42,  147 => 40,  132 => 38,  128 => 37,  124 => 35,  120 => 33,  118 => 32,  115 => 31,  111 => 30,  108 => 29,  104 => 27,  93 => 25,  89 => 24,  85 => 22,  81 => 20,  79 => 19,  76 => 18,  72 => 16,  61 => 14,  57 => 13,  53 => 11,  49 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Добавление прошло успешно</h1>*/
/* */
/*     {% if is_kontakt is empty  %}*/
/* */
/*     {% else %}*/
/*         <p style="color:red">Добавленный осужденный был контактным с:</p>*/
/*         <ul>*/
/*         {% for kontakt in is_kontakt %}*/
/*             <li><a href="/otchetZabolevaniya/{{kontakt.id}}">{{ kontakt.fio }}</a></li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/*     */
/*     {% if is_ochag is empty  %}*/
/* */
/*     {% else %}*/
/*         <p style="color:red">Добавленный осужденный был в очаге:</p>*/
/*         <ul>*/
/*         {% for ochag in is_ochag %}*/
/*             <li>{{ochag.name}}, {{ ochag.date|date("d.m.Y") }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/*     */
/*     {% for kontakt in kontakts %}*/
/*     */
/*         {% if kontakt is empty  %}*/
/* */
/*         {% else %}*/
/*         <p style="color:red">Добавленный контактный контактный с:</p>*/
/*         <ul>   */
/*             {% for k in kontakt %}*/
/*                  <li>{{ k.fio }}, {{ k.date_birthday|date("d.m.Y") }} контактный с <a href="/otchetZabolevaniya/{{k.id}}">{{ k.fio }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         {% endif %}*/
/*         */
/*     {% endfor %}*/
/* */
/*     {% for ochag in in_ochag %}*/
/*     */
/*         {% if ochag is empty  %}*/
/* */
/*         {% else %}*/
/*         <p style="color:red">Добавленный контактный был в очаге:</p>*/
/*         <ul>   */
/*             {% for och in ochag %}*/
/*                  <li>{{ och.fio }}, {{ och.date_birthday|date("d.m.Y") }}, очаг: {{ och.name }}, {{ och.date|date("d.m.Y") }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         {% endif %}*/
/* */
/*     {% endfor %}*/
/*         */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
