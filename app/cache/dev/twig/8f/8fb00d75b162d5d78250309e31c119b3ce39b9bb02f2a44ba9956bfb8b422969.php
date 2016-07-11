<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e0f9131381e65709ed1c80e93e7c8594dca58e44d328ca8124fed6aa6ec774df extends Twig_Template
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
        $__internal_ff2ee45eaab3d4353f395b04a82564f69afcc36b0ddf30df53c0a6590799afa1 = $this->env->getExtension("native_profiler");
        $__internal_ff2ee45eaab3d4353f395b04a82564f69afcc36b0ddf30df53c0a6590799afa1->enter($__internal_ff2ee45eaab3d4353f395b04a82564f69afcc36b0ddf30df53c0a6590799afa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ff2ee45eaab3d4353f395b04a82564f69afcc36b0ddf30df53c0a6590799afa1->leave($__internal_ff2ee45eaab3d4353f395b04a82564f69afcc36b0ddf30df53c0a6590799afa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
