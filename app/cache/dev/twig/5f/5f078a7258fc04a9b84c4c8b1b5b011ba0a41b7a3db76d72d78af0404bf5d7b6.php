<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3c6212dbfa9d1cff8aa7a45863319593994879dc752ea4e340bfaabcded3486d extends Twig_Template
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
        $__internal_1c6a97b7a6f4c0d130f49e172041ead38b65212dc15d400764d5d3685cb00df3 = $this->env->getExtension("native_profiler");
        $__internal_1c6a97b7a6f4c0d130f49e172041ead38b65212dc15d400764d5d3685cb00df3->enter($__internal_1c6a97b7a6f4c0d130f49e172041ead38b65212dc15d400764d5d3685cb00df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1c6a97b7a6f4c0d130f49e172041ead38b65212dc15d400764d5d3685cb00df3->leave($__internal_1c6a97b7a6f4c0d130f49e172041ead38b65212dc15d400764d5d3685cb00df3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
