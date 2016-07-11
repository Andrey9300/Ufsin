<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7d96e0e466df252f2321b8956e281981c3fb53731d4fb79bab5569911dddf94e extends Twig_Template
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
        $__internal_f90bfe15935179a745b091af7af2cb835a24deb157271b5979402f202ab0cf73 = $this->env->getExtension("native_profiler");
        $__internal_f90bfe15935179a745b091af7af2cb835a24deb157271b5979402f202ab0cf73->enter($__internal_f90bfe15935179a745b091af7af2cb835a24deb157271b5979402f202ab0cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f90bfe15935179a745b091af7af2cb835a24deb157271b5979402f202ab0cf73->leave($__internal_f90bfe15935179a745b091af7af2cb835a24deb157271b5979402f202ab0cf73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
