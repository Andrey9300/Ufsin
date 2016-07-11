<?php

/* main/index.html.twig */
class __TwigTemplate_aa0ae52d1d923692949679dee66c92bcf24c2cf0bd846a0fb17a7bbf7c3feb21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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
        $__internal_73f185c51fb4648cf00227344efe8d534e47d41bed1099529104f6333cc8e7f5 = $this->env->getExtension("native_profiler");
        $__internal_73f185c51fb4648cf00227344efe8d534e47d41bed1099529104f6333cc8e7f5->enter($__internal_73f185c51fb4648cf00227344efe8d534e47d41bed1099529104f6333cc8e7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f185c51fb4648cf00227344efe8d534e47d41bed1099529104f6333cc8e7f5->leave($__internal_73f185c51fb4648cf00227344efe8d534e47d41bed1099529104f6333cc8e7f5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1c4452df65899234a9016334d5590caeed4ffb6d0e8c024da9cc82c1b18f1ca8 = $this->env->getExtension("native_profiler");
        $__internal_1c4452df65899234a9016334d5590caeed4ffb6d0e8c024da9cc82c1b18f1ca8->enter($__internal_1c4452df65899234a9016334d5590caeed4ffb6d0e8c024da9cc82c1b18f1ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Главная</h1>
</div>

";
        
        $__internal_1c4452df65899234a9016334d5590caeed4ffb6d0e8c024da9cc82c1b18f1ca8->leave($__internal_1c4452df65899234a9016334d5590caeed4ffb6d0e8c024da9cc82c1b18f1ca8_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ac56d2c10e53dc22518b0e9e11b4323a0fc87e046549589df5c1a93a95d42407 = $this->env->getExtension("native_profiler");
        $__internal_ac56d2c10e53dc22518b0e9e11b4323a0fc87e046549589df5c1a93a95d42407->enter($__internal_ac56d2c10e53dc22518b0e9e11b4323a0fc87e046549589df5c1a93a95d42407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "
";
        
        $__internal_ac56d2c10e53dc22518b0e9e11b4323a0fc87e046549589df5c1a93a95d42407->leave($__internal_ac56d2c10e53dc22518b0e9e11b4323a0fc87e046549589df5c1a93a95d42407_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Главная</h1>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
