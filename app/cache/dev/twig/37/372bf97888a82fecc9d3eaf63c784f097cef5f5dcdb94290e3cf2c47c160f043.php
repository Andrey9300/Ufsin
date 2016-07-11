<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_3adb157ef4d841beeef65031f69dbd0247fc49340beebc7e8a4ecf49189d3675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error500.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
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
        $__internal_df977af0800b53a9cb455534490fa29d9d57ee0b0c620c35534d2885c7ed1492 = $this->env->getExtension("native_profiler");
        $__internal_df977af0800b53a9cb455534490fa29d9d57ee0b0c620c35534d2885c7ed1492->enter($__internal_df977af0800b53a9cb455534490fa29d9d57ee0b0c620c35534d2885c7ed1492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df977af0800b53a9cb455534490fa29d9d57ee0b0c620c35534d2885c7ed1492->leave($__internal_df977af0800b53a9cb455534490fa29d9d57ee0b0c620c35534d2885c7ed1492_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e933cd5cab5b04ae82b45fc2598bb9d943e90c40038acc1004a48e2aed8ebf52 = $this->env->getExtension("native_profiler");
        $__internal_e933cd5cab5b04ae82b45fc2598bb9d943e90c40038acc1004a48e2aed8ebf52->enter($__internal_e933cd5cab5b04ae82b45fc2598bb9d943e90c40038acc1004a48e2aed8ebf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_e933cd5cab5b04ae82b45fc2598bb9d943e90c40038acc1004a48e2aed8ebf52->leave($__internal_e933cd5cab5b04ae82b45fc2598bb9d943e90c40038acc1004a48e2aed8ebf52_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a932a553a7b18d7fce34c3f1f2746611b9945c4995978a96d0d474c258645e87 = $this->env->getExtension("native_profiler");
        $__internal_a932a553a7b18d7fce34c3f1f2746611b9945c4995978a96d0d474c258645e87->enter($__internal_a932a553a7b18d7fce34c3f1f2746611b9945c4995978a96d0d474c258645e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1 class=\"text-danger\">Произошла ошибка</h1>

    <p class=\"lead\">
        Скорее всего вы не верно ввели данные или произошла техническая ошибка.
    </p>
    
    <p>
        Пожалуйста, проверьте вводимые данные <a href=\"#\" id=\"back_page\">на предыдущей странице</a> и/или повторите снова.
    </p>
";
        
        $__internal_a932a553a7b18d7fce34c3f1f2746611b9945c4995978a96d0d474c258645e87->leave($__internal_a932a553a7b18d7fce34c3f1f2746611b9945c4995978a96d0d474c258645e87_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1a6efa58390f020febba3d2e26a261cdb57305b5185e23858c74b3a2c0fdd35a = $this->env->getExtension("native_profiler");
        $__internal_1a6efa58390f020febba3d2e26a261cdb57305b5185e23858c74b3a2c0fdd35a->enter($__internal_1a6efa58390f020febba3d2e26a261cdb57305b5185e23858c74b3a2c0fdd35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "
";
        
        $__internal_1a6efa58390f020febba3d2e26a261cdb57305b5185e23858c74b3a2c0fdd35a->leave($__internal_1a6efa58390f020febba3d2e26a261cdb57305b5185e23858c74b3a2c0fdd35a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  70 => 17,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'error' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-danger">Произошла ошибка</h1>*/
/* */
/*     <p class="lead">*/
/*         Скорее всего вы не верно ввели данные или произошла техническая ошибка.*/
/*     </p>*/
/*     */
/*     <p>*/
/*         Пожалуйста, проверьте вводимые данные <a href="#" id="back_page">на предыдущей странице</a> и/или повторите снова.*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
/* */
