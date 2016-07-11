<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6328bcc5d8e207eb02ea2c07bbe48ff4b608c889972513b73cd6f8683b99b8ec extends Twig_Template
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
        $__internal_d439776a26c3a66f534d45e47f88f3276b3f5bfd45532c07b7b8aae80211dfe3 = $this->env->getExtension("native_profiler");
        $__internal_d439776a26c3a66f534d45e47f88f3276b3f5bfd45532c07b7b8aae80211dfe3->enter($__internal_d439776a26c3a66f534d45e47f88f3276b3f5bfd45532c07b7b8aae80211dfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d439776a26c3a66f534d45e47f88f3276b3f5bfd45532c07b7b8aae80211dfe3->leave($__internal_d439776a26c3a66f534d45e47f88f3276b3f5bfd45532c07b7b8aae80211dfe3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
