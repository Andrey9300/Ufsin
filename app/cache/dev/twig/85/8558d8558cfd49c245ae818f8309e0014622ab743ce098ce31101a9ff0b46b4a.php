<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_023ddaa85b644241d950fe726ae889206f468912ee98ea95f3e39ffc79778c14 extends Twig_Template
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
        $__internal_e22c463bfc878fdf738ec1cbed85729ae1dd3a4229374563100883acc753d544 = $this->env->getExtension("native_profiler");
        $__internal_e22c463bfc878fdf738ec1cbed85729ae1dd3a4229374563100883acc753d544->enter($__internal_e22c463bfc878fdf738ec1cbed85729ae1dd3a4229374563100883acc753d544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e22c463bfc878fdf738ec1cbed85729ae1dd3a4229374563100883acc753d544->leave($__internal_e22c463bfc878fdf738ec1cbed85729ae1dd3a4229374563100883acc753d544_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
