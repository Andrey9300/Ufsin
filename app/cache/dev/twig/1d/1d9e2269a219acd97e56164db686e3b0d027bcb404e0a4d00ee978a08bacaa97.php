<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_99c353d6ba324cc0dca34585fa9f7ce5b929997e1678f99795776a34a41d603a extends Twig_Template
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
        $__internal_6ea9fbb8e58a4612814af97a18036ceb03356e19731cd660a2766da9d53999cd = $this->env->getExtension("native_profiler");
        $__internal_6ea9fbb8e58a4612814af97a18036ceb03356e19731cd660a2766da9d53999cd->enter($__internal_6ea9fbb8e58a4612814af97a18036ceb03356e19731cd660a2766da9d53999cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6ea9fbb8e58a4612814af97a18036ceb03356e19731cd660a2766da9d53999cd->leave($__internal_6ea9fbb8e58a4612814af97a18036ceb03356e19731cd660a2766da9d53999cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
