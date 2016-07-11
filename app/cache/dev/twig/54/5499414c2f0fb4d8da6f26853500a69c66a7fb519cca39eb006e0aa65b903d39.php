<?php

/* :fkuz:showIssledovanieObject.html.twig */
class __TwigTemplate_69b3c62b90af26591fa9d3621fbdc4023bc593b69810e94704add0a220f5706b extends Twig_Template
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
        $__internal_e46fd1cd2ab23197172dc1e4e946b24a3e15d9c8d6f056c0fcfcba61d7eac101 = $this->env->getExtension("native_profiler");
        $__internal_e46fd1cd2ab23197172dc1e4e946b24a3e15d9c8d6f056c0fcfcba61d7eac101->enter($__internal_e46fd1cd2ab23197172dc1e4e946b24a3e15d9c8d6f056c0fcfcba61d7eac101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:showIssledovanieObject.html.twig"));

        // line 1
        if (twig_test_empty((isset($context["issledovanieObjectFkuz"]) ? $context["issledovanieObjectFkuz"] : $this->getContext($context, "issledovanieObjectFkuz")))) {
            // line 2
            echo "    <div>Нет исследований</div>
";
        } else {
            // line 4
            echo "    <select class=\"form-control\" id=\"labIssl\">

        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["issledovanieObjectFkuz"]) ? $context["issledovanieObjectFkuz"] : $this->getContext($context, "issledovanieObjectFkuz")));
            foreach ($context['_seq'] as $context["_key"] => $context["issl"]) {
                // line 7
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "result", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["issl"], "issledovaniePokazatelFkuz", array()), "name", array()), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
    </select>
";
        }
        // line 11
        echo "    
";
        
        $__internal_e46fd1cd2ab23197172dc1e4e946b24a3e15d9c8d6f056c0fcfcba61d7eac101->leave($__internal_e46fd1cd2ab23197172dc1e4e946b24a3e15d9c8d6f056c0fcfcba61d7eac101_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:showIssledovanieObject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  49 => 9,  36 => 7,  32 => 6,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if issledovanieObjectFkuz is empty %}*/
/*     <div>Нет исследований</div>*/
/* {% else %}*/
/*     <select class="form-control" id="labIssl">*/
/* */
/*         {% for issl in issledovanieObjectFkuz %}*/
/*             <option value="{{ issl.id }}">{{issl.result }}, {{issl.issledovaniePokazatelFkuz.name }}</option>*/
/*         {% endfor %}*/
/* */
/*     </select>*/
/* {% endif %}    */
/* */
