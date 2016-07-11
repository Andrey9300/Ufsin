<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f11f2becce4510cd52469aa964deb9427fb30e9c8c93d16fc91825bd12a994cb extends Twig_Template
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
        $__internal_3452ff80a022a6454c06966483556edcec325bc8ee3426b83c7d57bad98d4b9e = $this->env->getExtension("native_profiler");
        $__internal_3452ff80a022a6454c06966483556edcec325bc8ee3426b83c7d57bad98d4b9e->enter($__internal_3452ff80a022a6454c06966483556edcec325bc8ee3426b83c7d57bad98d4b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3452ff80a022a6454c06966483556edcec325bc8ee3426b83c7d57bad98d4b9e->leave($__internal_3452ff80a022a6454c06966483556edcec325bc8ee3426b83c7d57bad98d4b9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
