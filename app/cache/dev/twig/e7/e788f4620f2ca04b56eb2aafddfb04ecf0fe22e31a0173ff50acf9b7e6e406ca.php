<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ac2a3265a9a2b2b938d22428131c0a933d1bc2b7d524d312fe6f8c9450999f5c extends Twig_Template
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
        $__internal_e422c7f7aa6e4cb8170babd7f0b705d6702e3e3c6e56ca8fc72f6c19988d3d71 = $this->env->getExtension("native_profiler");
        $__internal_e422c7f7aa6e4cb8170babd7f0b705d6702e3e3c6e56ca8fc72f6c19988d3d71->enter($__internal_e422c7f7aa6e4cb8170babd7f0b705d6702e3e3c6e56ca8fc72f6c19988d3d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e422c7f7aa6e4cb8170babd7f0b705d6702e3e3c6e56ca8fc72f6c19988d3d71->leave($__internal_e422c7f7aa6e4cb8170babd7f0b705d6702e3e3c6e56ca8fc72f6c19988d3d71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
