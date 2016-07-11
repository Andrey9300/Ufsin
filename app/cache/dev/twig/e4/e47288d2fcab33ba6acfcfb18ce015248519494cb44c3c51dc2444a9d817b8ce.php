<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_af7279592359dcf87ecb65f25e732cfba7757507c3bbb728cb4dda5b92578666 extends Twig_Template
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
        $__internal_0b25e4ec6bb60f217a2705b19976a0fce7fbb4925c72c6d50a71743f4baf92d7 = $this->env->getExtension("native_profiler");
        $__internal_0b25e4ec6bb60f217a2705b19976a0fce7fbb4925c72c6d50a71743f4baf92d7->enter($__internal_0b25e4ec6bb60f217a2705b19976a0fce7fbb4925c72c6d50a71743f4baf92d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0b25e4ec6bb60f217a2705b19976a0fce7fbb4925c72c6d50a71743f4baf92d7->leave($__internal_0b25e4ec6bb60f217a2705b19976a0fce7fbb4925c72c6d50a71743f4baf92d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
