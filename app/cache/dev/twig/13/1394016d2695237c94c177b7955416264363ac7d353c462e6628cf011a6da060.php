<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_21dd3eda5c28901ab6f5868c9ec963b65eb14859407c982950dbcbfea07adef7 extends Twig_Template
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
        $__internal_eca82f519808d65bc506201b8b6955aefbecbd1244225b65e50dd39c834a310c = $this->env->getExtension("native_profiler");
        $__internal_eca82f519808d65bc506201b8b6955aefbecbd1244225b65e50dd39c834a310c->enter($__internal_eca82f519808d65bc506201b8b6955aefbecbd1244225b65e50dd39c834a310c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eca82f519808d65bc506201b8b6955aefbecbd1244225b65e50dd39c834a310c->leave($__internal_eca82f519808d65bc506201b8b6955aefbecbd1244225b65e50dd39c834a310c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
