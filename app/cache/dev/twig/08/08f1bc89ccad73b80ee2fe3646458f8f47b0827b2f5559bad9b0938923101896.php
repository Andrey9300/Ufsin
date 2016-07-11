<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_65e07a73b0c5c75d4a54255ded7ca75069377c62c3c2e05a9ec6f8b2929b6390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b16c94a8f5f6957b71ce8326f98f2e511a5a02b53ddfe38103434eeee152e6ae = $this->env->getExtension("native_profiler");
        $__internal_b16c94a8f5f6957b71ce8326f98f2e511a5a02b53ddfe38103434eeee152e6ae->enter($__internal_b16c94a8f5f6957b71ce8326f98f2e511a5a02b53ddfe38103434eeee152e6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b16c94a8f5f6957b71ce8326f98f2e511a5a02b53ddfe38103434eeee152e6ae->leave($__internal_b16c94a8f5f6957b71ce8326f98f2e511a5a02b53ddfe38103434eeee152e6ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec7d58bc616f609180a8ab55c0dcd60db5740120ef9958cc8fba9e27a720a510 = $this->env->getExtension("native_profiler");
        $__internal_ec7d58bc616f609180a8ab55c0dcd60db5740120ef9958cc8fba9e27a720a510->enter($__internal_ec7d58bc616f609180a8ab55c0dcd60db5740120ef9958cc8fba9e27a720a510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec7d58bc616f609180a8ab55c0dcd60db5740120ef9958cc8fba9e27a720a510->leave($__internal_ec7d58bc616f609180a8ab55c0dcd60db5740120ef9958cc8fba9e27a720a510_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0891c750ea2f210c0c8deb10db828326f4caed9c6a1e989ef110d2dce9915f0a = $this->env->getExtension("native_profiler");
        $__internal_0891c750ea2f210c0c8deb10db828326f4caed9c6a1e989ef110d2dce9915f0a->enter($__internal_0891c750ea2f210c0c8deb10db828326f4caed9c6a1e989ef110d2dce9915f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0891c750ea2f210c0c8deb10db828326f4caed9c6a1e989ef110d2dce9915f0a->leave($__internal_0891c750ea2f210c0c8deb10db828326f4caed9c6a1e989ef110d2dce9915f0a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70dae4deeb68f9ed4f645c00b45656b5288f395c76ecac2bdbe90ad40f88aea2 = $this->env->getExtension("native_profiler");
        $__internal_70dae4deeb68f9ed4f645c00b45656b5288f395c76ecac2bdbe90ad40f88aea2->enter($__internal_70dae4deeb68f9ed4f645c00b45656b5288f395c76ecac2bdbe90ad40f88aea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_70dae4deeb68f9ed4f645c00b45656b5288f395c76ecac2bdbe90ad40f88aea2->leave($__internal_70dae4deeb68f9ed4f645c00b45656b5288f395c76ecac2bdbe90ad40f88aea2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
