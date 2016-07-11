<?php

/* organization/showPokazatelsIssledovaniya.html.twig */
class __TwigTemplate_1df5764758e6046472c79284122c000a3db444cff10b2409883a7a8e601c293f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "organization/showPokazatelsIssledovaniya.html.twig", 1);
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
        $__internal_115953149d605f2ace6f30d73d8c19af1ec0114e4c607998b254cc6289ed6442 = $this->env->getExtension("native_profiler");
        $__internal_115953149d605f2ace6f30d73d8c19af1ec0114e4c607998b254cc6289ed6442->enter($__internal_115953149d605f2ace6f30d73d8c19af1ec0114e4c607998b254cc6289ed6442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "organization/showPokazatelsIssledovaniya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_115953149d605f2ace6f30d73d8c19af1ec0114e4c607998b254cc6289ed6442->leave($__internal_115953149d605f2ace6f30d73d8c19af1ec0114e4c607998b254cc6289ed6442_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8ae9a0421db0d0e49a22b65d078034315252e15ffcd221c1826b5f89bb24a30f = $this->env->getExtension("native_profiler");
        $__internal_8ae9a0421db0d0e49a22b65d078034315252e15ffcd221c1826b5f89bb24a30f->enter($__internal_8ae9a0421db0d0e49a22b65d078034315252e15ffcd221c1826b5f89bb24a30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Выберите показатель:</h1>
    </div>

    <div class=\"row\">
        <table class=\"table table-hover main table-bordered\">
            <thead>
            <tr>
                <td>Показатель</td>
                <td>Не соответствие</td>
                <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokazatelsIssledovaniya"]) ? $context["pokazatelsIssledovaniya"] : $this->getContext($context, "pokazatelsIssledovaniya")));
        foreach ($context['_seq'] as $context["_key"] => $context["pokazatel"]) {
            // line 21
            echo "                <tr>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "pokazatel", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"/issledovanie/editPokazatel/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                    <td><a href=\"/issledovanie/deletePokazatel/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["pokazatel"], "id", array()), "html", null, true);
            echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokazatel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_8ae9a0421db0d0e49a22b65d078034315252e15ffcd221c1826b5f89bb24a30f->leave($__internal_8ae9a0421db0d0e49a22b65d078034315252e15ffcd221c1826b5f89bb24a30f_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_73f06c05ea726eb2a93f85a5d2a0348bdde80c3c80026e0dc1c6df28b438b528 = $this->env->getExtension("native_profiler");
        $__internal_73f06c05ea726eb2a93f85a5d2a0348bdde80c3c80026e0dc1c6df28b438b528->enter($__internal_73f06c05ea726eb2a93f85a5d2a0348bdde80c3c80026e0dc1c6df28b438b528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "
";
        
        $__internal_73f06c05ea726eb2a93f85a5d2a0348bdde80c3c80026e0dc1c6df28b438b528->leave($__internal_73f06c05ea726eb2a93f85a5d2a0348bdde80c3c80026e0dc1c6df28b438b528_prof);

    }

    public function getTemplateName()
    {
        return "organization/showPokazatelsIssledovaniya.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  98 => 34,  87 => 28,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  63 => 21,  59 => 20,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Выберите показатель:</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <table class="table table-hover main table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <td>Показатель</td>*/
/*                 <td>Не соответствие</td>*/
/*                 <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for pokazatel in pokazatelsIssledovaniya %}*/
/*                 <tr>*/
/*                     <td>{{ pokazatel.description }}</td>*/
/*                     <td>{{ pokazatel.pokazatel }}</td>*/
/*                     <td><a href="/issledovanie/editPokazatel/{{ pokazatel.id }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/*                     <td><a href="/issledovanie/deletePokazatel/{{ pokazatel.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
