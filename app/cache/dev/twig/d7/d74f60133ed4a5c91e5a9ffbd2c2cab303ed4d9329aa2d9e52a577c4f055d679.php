<?php

/* :otchet/ajax:dogovor_on_objects.html.twig */
class __TwigTemplate_99a4b7663ee5b716688865a23ec974149b8a91b3c5037cd826a36efa80f381e4 extends Twig_Template
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
        $__internal_bfd14412b68824d64faaf0a7b41d44b75a0a9e4f3aa6ce7ad2cf855ce1dd39b9 = $this->env->getExtension("native_profiler");
        $__internal_bfd14412b68824d64faaf0a7b41d44b75a0a9e4f3aa6ce7ad2cf855ce1dd39b9->enter($__internal_bfd14412b68824d64faaf0a7b41d44b75a0a9e4f3aa6ce7ad2cf855ce1dd39b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:dogovor_on_objects.html.twig"));

        // line 1
        if ((isset($context["onObjects"]) ? $context["onObjects"] : $this->getContext($context, "onObjects"))) {
            // line 2
            echo "
<div class=\"col-md-6\">

    <div>Договор есть у следующих организаций:</div>
    
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["onObjects"]) ? $context["onObjects"] : $this->getContext($context, "onObjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                // line 8
                echo "    
        <div>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "name_short", array()), "html", null, true);
                echo "</div>
        
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    
</div>

";
        } else {
            // line 16
            echo "
<div class=\"col-md-6\">

    <div>По запросу учреждений не найдено.</div>
    
</div>    

";
        }
        
        $__internal_bfd14412b68824d64faaf0a7b41d44b75a0a9e4f3aa6ce7ad2cf855ce1dd39b9->leave($__internal_bfd14412b68824d64faaf0a7b41d44b75a0a9e4f3aa6ce7ad2cf855ce1dd39b9_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:dogovor_on_objects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  47 => 12,  38 => 9,  35 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% if onObjects %}*/
/* */
/* <div class="col-md-6">*/
/* */
/*     <div>Договор есть у следующих организаций:</div>*/
/*     */
/*     {% for organization in onObjects %}*/
/*     */
/*         <div>{{organization.name_short}}</div>*/
/*         */
/*     {% endfor %}*/
/*     */
/* </div>*/
/* */
/* {% else %}*/
/* */
/* <div class="col-md-6">*/
/* */
/*     <div>По запросу учреждений не найдено.</div>*/
/*     */
/* </div>    */
/* */
/* {% endif %}*/
