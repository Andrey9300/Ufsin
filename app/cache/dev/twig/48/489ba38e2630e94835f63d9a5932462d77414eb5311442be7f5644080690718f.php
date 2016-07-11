<?php

/* fkuz/showIssledovanieObject.html.twig */
class __TwigTemplate_e010522454d7f6b70635b10c3dcaa6769b150eb3f68b767036e62b9ffa94bcb3 extends Twig_Template
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
        $__internal_97aae32c61355e3e7ad04222a83829f5402b9e0569256ab807ded999b6db9a5c = $this->env->getExtension("native_profiler");
        $__internal_97aae32c61355e3e7ad04222a83829f5402b9e0569256ab807ded999b6db9a5c->enter($__internal_97aae32c61355e3e7ad04222a83829f5402b9e0569256ab807ded999b6db9a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fkuz/showIssledovanieObject.html.twig"));

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
        
        $__internal_97aae32c61355e3e7ad04222a83829f5402b9e0569256ab807ded999b6db9a5c->leave($__internal_97aae32c61355e3e7ad04222a83829f5402b9e0569256ab807ded999b6db9a5c_prof);

    }

    public function getTemplateName()
    {
        return "fkuz/showIssledovanieObject.html.twig";
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
