<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ae5df3779b33a7a4f50a9629e0cae03ad1f653bef193b1908659190e553dba8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa4f5cb790516501562e662a1bfad017053159ca5d04fbc8eb98ad262d9106b1 = $this->env->getExtension("native_profiler");
        $__internal_aa4f5cb790516501562e662a1bfad017053159ca5d04fbc8eb98ad262d9106b1->enter($__internal_aa4f5cb790516501562e662a1bfad017053159ca5d04fbc8eb98ad262d9106b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_aa4f5cb790516501562e662a1bfad017053159ca5d04fbc8eb98ad262d9106b1->leave($__internal_aa4f5cb790516501562e662a1bfad017053159ca5d04fbc8eb98ad262d9106b1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ad0f42e835c8e2feb9c5d10ae33580b4c3b50283d261db1dcb2b70610c6357e = $this->env->getExtension("native_profiler");
        $__internal_8ad0f42e835c8e2feb9c5d10ae33580b4c3b50283d261db1dcb2b70610c6357e->enter($__internal_8ad0f42e835c8e2feb9c5d10ae33580b4c3b50283d261db1dcb2b70610c6357e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8ad0f42e835c8e2feb9c5d10ae33580b4c3b50283d261db1dcb2b70610c6357e->leave($__internal_8ad0f42e835c8e2feb9c5d10ae33580b4c3b50283d261db1dcb2b70610c6357e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
