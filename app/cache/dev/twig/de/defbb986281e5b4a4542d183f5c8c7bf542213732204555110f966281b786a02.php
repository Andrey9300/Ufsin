<?php

/* :issledovanie:showIssledovanieObject.html.twig */
class __TwigTemplate_19941e5c0d73000ff1a3373c415568bcf805666d8181eba9f096baeb0b45ed47 extends Twig_Template
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
        $__internal_be7ee9237675375ad436b285536e25717c284b705470b9d472f42deaba0587e5 = $this->env->getExtension("native_profiler");
        $__internal_be7ee9237675375ad436b285536e25717c284b705470b9d472f42deaba0587e5->enter($__internal_be7ee9237675375ad436b285536e25717c284b705470b9d472f42deaba0587e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":issledovanie:showIssledovanieObject.html.twig"));

        // line 1
        if (twig_test_empty((isset($context["issledovanieObject"]) ? $context["issledovanieObject"] : $this->getContext($context, "issledovanieObject")))) {
            // line 2
            echo "    <div>Нет исследований</div>
";
        } else {
            // line 4
            echo "    <select class=\"form-control\" id=\"labIssl\">

        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["issledovanieObject"]) ? $context["issledovanieObject"] : $this->getContext($context, "issledovanieObject")));
            foreach ($context['_seq'] as $context["_key"] => $context["issl"]) {
                // line 7
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["issl"], "result", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["issl"], "objects", array()), "name", array()), "html", null, true);
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
        
        $__internal_be7ee9237675375ad436b285536e25717c284b705470b9d472f42deaba0587e5->leave($__internal_be7ee9237675375ad436b285536e25717c284b705470b9d472f42deaba0587e5_prof);

    }

    public function getTemplateName()
    {
        return ":issledovanie:showIssledovanieObject.html.twig";
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
/* {% if issledovanieObject is empty %}*/
/*     <div>Нет исследований</div>*/
/* {% else %}*/
/*     <select class="form-control" id="labIssl">*/
/* */
/*         {% for issl in issledovanieObject %}*/
/*             <option value="{{ issl.id }}">{{issl.result }}, {{issl.objects.name }}</option>*/
/*         {% endfor %}*/
/* */
/*     </select>*/
/* {% endif %}    */
/* */
