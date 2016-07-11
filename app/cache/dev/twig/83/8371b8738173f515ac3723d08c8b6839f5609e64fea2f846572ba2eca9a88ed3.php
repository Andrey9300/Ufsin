<?php

/* :otchet:zabolevaniya.html.twig */
class __TwigTemplate_58d4dbcdbbbf5a708cadaf3ed16e69ea68ddeec6424f043fa51526f4274feb6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet:zabolevaniya.html.twig", 1);
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
        $__internal_96fdf26a0abb2c241ef32223c7ad1717013f4d6921e50e676dd312ef143bb9f6 = $this->env->getExtension("native_profiler");
        $__internal_96fdf26a0abb2c241ef32223c7ad1717013f4d6921e50e676dd312ef143bb9f6->enter($__internal_96fdf26a0abb2c241ef32223c7ad1717013f4d6921e50e676dd312ef143bb9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet:zabolevaniya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96fdf26a0abb2c241ef32223c7ad1717013f4d6921e50e676dd312ef143bb9f6->leave($__internal_96fdf26a0abb2c241ef32223c7ad1717013f4d6921e50e676dd312ef143bb9f6_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2240950acea3a644e9920fbab3fbf0587cbedadb84c07ab8cfef4e86a387841c = $this->env->getExtension("native_profiler");
        $__internal_2240950acea3a644e9920fbab3fbf0587cbedadb84c07ab8cfef4e86a387841c->enter($__internal_2240950acea3a644e9920fbab3fbf0587cbedadb84c07ab8cfef4e86a387841c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("views/otchet/ajax/zabolevanie_menu.html", ":otchet:zabolevaniya.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"row\">
    
    <h3>Общая статистика заболеваний</h3>
            
    <div class=\"row\" style=\"margin-bottom:50px\">
        <form class=\"has-validation-callback\" method=\"post\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("zabolevaniya");
        echo "\" >
            <div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата от (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateOt\" id=\"proverka_date\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["dateOt"]) ? $context["dateOt"] : $this->getContext($context, "dateOt")), "html", null, true);
        echo "\">
            </div><div class=\"col-md-3\">
                <label class=\"required\" for=\"proverka_date\">Дата до (дд.мм.гггг)</label>
                <input type=\"text\" data-validation-format=\"dd.mm.yyyy\" data-validation-optional=\"true\" data-validation=\"date\" class=\"form-control\" required=\"required\" name=\"dateDo\" id=\"proverka_date\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["dateDo"]) ? $context["dateDo"] : $this->getContext($context, "dateDo")), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-3\" style=\"margin-top:25px\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Выбрать\">
            </div>
        </form>    
    </div>
    
    <div class=\"col-md-2\">
        <p>Личный состав</p>
        ";
        // line 28
        $this->loadTemplate("otchet/ajax/zabolevaniya_common.html.twig", ":otchet:zabolevaniya.html.twig", 28)->display(array_merge($context, array("organizations" => (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")), "onOrganization" => (isset($context["lichnyiSostav"]) ? $context["lichnyiSostav"] : $this->getContext($context, "lichnyiSostav")))));
        // line 29
        echo "    </div>
    
    <div class=\"col-md-4\">
        <p style=\"margin-left:75px\">Осужденные</p>
        ";
        // line 33
        $this->loadTemplate("otchet/ajax/zabolevaniya_common.html.twig", ":otchet:zabolevaniya.html.twig", 33)->display(array_merge($context, array("organizations" => (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")), "onOrganization" => (isset($context["osugdeniy"]) ? $context["osugdeniy"] : $this->getContext($context, "osugdeniy")))));
        // line 34
        echo "    </div>
    
</div>
    
";
        
        $__internal_2240950acea3a644e9920fbab3fbf0587cbedadb84c07ab8cfef4e86a387841c->leave($__internal_2240950acea3a644e9920fbab3fbf0587cbedadb84c07ab8cfef4e86a387841c_prof);

    }

    // line 40
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_013dada5731d6b9227444302ad6f70c161b37035d887400436f56d28b51cdcb3 = $this->env->getExtension("native_profiler");
        $__internal_013dada5731d6b9227444302ad6f70c161b37035d887400436f56d28b51cdcb3->enter($__internal_013dada5731d6b9227444302ad6f70c161b37035d887400436f56d28b51cdcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 41
        echo "
";
        
        $__internal_013dada5731d6b9227444302ad6f70c161b37035d887400436f56d28b51cdcb3->leave($__internal_013dada5731d6b9227444302ad6f70c161b37035d887400436f56d28b51cdcb3_prof);

    }

    public function getTemplateName()
    {
        return ":otchet:zabolevaniya.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  100 => 40,  89 => 34,  87 => 33,  81 => 29,  79 => 28,  66 => 18,  60 => 15,  54 => 12,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* {% include 'views/otchet/ajax/zabolevanie_menu.html' %}*/
/* */
/* <div class="row">*/
/*     */
/*     <h3>Общая статистика заболеваний</h3>*/
/*             */
/*     <div class="row" style="margin-bottom:50px">*/
/*         <form class="has-validation-callback" method="post" action="{{ path('zabolevaniya') }}" >*/
/*             <div class="col-md-3">*/
/*                 <label class="required" for="proverka_date">Дата от (дд.мм.гггг)</label>*/
/*                 <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateOt" id="proverka_date" value="{{ dateOt }}">*/
/*             </div><div class="col-md-3">*/
/*                 <label class="required" for="proverka_date">Дата до (дд.мм.гггг)</label>*/
/*                 <input type="text" data-validation-format="dd.mm.yyyy" data-validation-optional="true" data-validation="date" class="form-control" required="required" name="dateDo" id="proverka_date" value="{{ dateDo }}">*/
/*             </div>*/
/*             <div class="col-md-3" style="margin-top:25px">*/
/*                 <input type="submit" class="btn btn-success" value="Выбрать">*/
/*             </div>*/
/*         </form>    */
/*     </div>*/
/*     */
/*     <div class="col-md-2">*/
/*         <p>Личный состав</p>*/
/*         {% include 'otchet/ajax/zabolevaniya_common.html.twig' with {'organizations' : organizations, 'onOrganization' : lichnyiSostav} %}*/
/*     </div>*/
/*     */
/*     <div class="col-md-4">*/
/*         <p style="margin-left:75px">Осужденные</p>*/
/*         {% include 'otchet/ajax/zabolevaniya_common.html.twig' with {'organizations' : organizations, 'onOrganization' : osugdeniy} %}*/
/*     </div>*/
/*     */
/* </div>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
