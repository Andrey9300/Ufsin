<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4690f40a9025d3217c6306343630576ac972b03c4fc133baad2b4798b7c61b5c extends Twig_Template
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
        $__internal_5d1f655d77699e42cd8867e693590d7e2602752ab801c6a4fae93cd2e5d93484 = $this->env->getExtension("native_profiler");
        $__internal_5d1f655d77699e42cd8867e693590d7e2602752ab801c6a4fae93cd2e5d93484->enter($__internal_5d1f655d77699e42cd8867e693590d7e2602752ab801c6a4fae93cd2e5d93484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5d1f655d77699e42cd8867e693590d7e2602752ab801c6a4fae93cd2e5d93484->leave($__internal_5d1f655d77699e42cd8867e693590d7e2602752ab801c6a4fae93cd2e5d93484_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
