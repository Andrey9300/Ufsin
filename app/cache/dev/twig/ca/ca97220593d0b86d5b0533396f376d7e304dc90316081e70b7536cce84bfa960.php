<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f0bc404aa5eef6c8e3adb2b8a4fb383b1119bdbec640c2b3fff5bd31b86e4ac6 extends Twig_Template
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
        $__internal_366e1251536a418cf10214e00cca294be519fd584ffe9a1a187c9f8139810bdd = $this->env->getExtension("native_profiler");
        $__internal_366e1251536a418cf10214e00cca294be519fd584ffe9a1a187c9f8139810bdd->enter($__internal_366e1251536a418cf10214e00cca294be519fd584ffe9a1a187c9f8139810bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_366e1251536a418cf10214e00cca294be519fd584ffe9a1a187c9f8139810bdd->leave($__internal_366e1251536a418cf10214e00cca294be519fd584ffe9a1a187c9f8139810bdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
