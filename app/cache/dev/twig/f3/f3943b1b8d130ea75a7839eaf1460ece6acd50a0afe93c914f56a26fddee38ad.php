<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_91c333dab6cf8ae93e636df3b196122e415beda934916f4470dfce7084ec23c3 extends Twig_Template
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
        $__internal_c3ff0d8df849e1d028f0447da5b4cc1f887b07a1696f029bf40ce136c6c3829c = $this->env->getExtension("native_profiler");
        $__internal_c3ff0d8df849e1d028f0447da5b4cc1f887b07a1696f029bf40ce136c6c3829c->enter($__internal_c3ff0d8df849e1d028f0447da5b4cc1f887b07a1696f029bf40ce136c6c3829c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c3ff0d8df849e1d028f0447da5b4cc1f887b07a1696f029bf40ce136c6c3829c->leave($__internal_c3ff0d8df849e1d028f0447da5b4cc1f887b07a1696f029bf40ce136c6c3829c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
