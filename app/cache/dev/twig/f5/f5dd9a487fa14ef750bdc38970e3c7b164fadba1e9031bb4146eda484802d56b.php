<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cf6b68ff32171e28ec1085fa3672580011e8677eecca94b64b61798304bc2139 extends Twig_Template
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
        $__internal_c286c856ed00a84c0cc7c157090f680dd3257a7dcaf518c117c403dc0511ade0 = $this->env->getExtension("native_profiler");
        $__internal_c286c856ed00a84c0cc7c157090f680dd3257a7dcaf518c117c403dc0511ade0->enter($__internal_c286c856ed00a84c0cc7c157090f680dd3257a7dcaf518c117c403dc0511ade0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c286c856ed00a84c0cc7c157090f680dd3257a7dcaf518c117c403dc0511ade0->leave($__internal_c286c856ed00a84c0cc7c157090f680dd3257a7dcaf518c117c403dc0511ade0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
