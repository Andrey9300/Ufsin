<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_05ea7aaadbf87a417859c62e57f6a7aa223205636e4387c161530a766f74bb3d extends Twig_Template
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
        $__internal_573d9e3b4e789f67c7454bf66c6c5fd8f17544c6dc484656495a318780feb659 = $this->env->getExtension("native_profiler");
        $__internal_573d9e3b4e789f67c7454bf66c6c5fd8f17544c6dc484656495a318780feb659->enter($__internal_573d9e3b4e789f67c7454bf66c6c5fd8f17544c6dc484656495a318780feb659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_573d9e3b4e789f67c7454bf66c6c5fd8f17544c6dc484656495a318780feb659->leave($__internal_573d9e3b4e789f67c7454bf66c6c5fd8f17544c6dc484656495a318780feb659_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
