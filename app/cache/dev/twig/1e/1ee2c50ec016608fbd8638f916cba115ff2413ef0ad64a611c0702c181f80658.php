<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_87da5b7994726e3ab3cc179b420ec7dc6962e2efb59211154ce424e46839584e extends Twig_Template
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
        $__internal_bc0bccb605ac99300e90a2762e07336d2dccd445ea2c3e4bac6c8c2710f4d9d7 = $this->env->getExtension("native_profiler");
        $__internal_bc0bccb605ac99300e90a2762e07336d2dccd445ea2c3e4bac6c8c2710f4d9d7->enter($__internal_bc0bccb605ac99300e90a2762e07336d2dccd445ea2c3e4bac6c8c2710f4d9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bc0bccb605ac99300e90a2762e07336d2dccd445ea2c3e4bac6c8c2710f4d9d7->leave($__internal_bc0bccb605ac99300e90a2762e07336d2dccd445ea2c3e4bac6c8c2710f4d9d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
