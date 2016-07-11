<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4954abb7ed747a0f0e9b4a52cb28a722d20c47b265da617189d12143e33135e3 extends Twig_Template
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
        $__internal_fbda6f4954f3d42f0b23dfccf9b44a00b14166cfbd82cd7a68512b5d59be767f = $this->env->getExtension("native_profiler");
        $__internal_fbda6f4954f3d42f0b23dfccf9b44a00b14166cfbd82cd7a68512b5d59be767f->enter($__internal_fbda6f4954f3d42f0b23dfccf9b44a00b14166cfbd82cd7a68512b5d59be767f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fbda6f4954f3d42f0b23dfccf9b44a00b14166cfbd82cd7a68512b5d59be767f->leave($__internal_fbda6f4954f3d42f0b23dfccf9b44a00b14166cfbd82cd7a68512b5d59be767f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
