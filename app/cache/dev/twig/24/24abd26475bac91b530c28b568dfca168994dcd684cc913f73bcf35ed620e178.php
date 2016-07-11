<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_da8907f9eed42bf26315d43cae13db34ea5eaeb5151b8485d22eecdf3adf9014 extends Twig_Template
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
        $__internal_123f4f7bebaaa79ddd77a409168e46e22ada11da244b892844d273bb4ef09724 = $this->env->getExtension("native_profiler");
        $__internal_123f4f7bebaaa79ddd77a409168e46e22ada11da244b892844d273bb4ef09724->enter($__internal_123f4f7bebaaa79ddd77a409168e46e22ada11da244b892844d273bb4ef09724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_123f4f7bebaaa79ddd77a409168e46e22ada11da244b892844d273bb4ef09724->leave($__internal_123f4f7bebaaa79ddd77a409168e46e22ada11da244b892844d273bb4ef09724_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
