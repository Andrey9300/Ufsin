<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_52c3cf0bfa9d66aa60696fad94e9bc3ba529fc93e2dad074bcad8bc304d83bb7 extends Twig_Template
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
        $__internal_444f8ca569070e3e2194407d596f6572a5e1ef74f1e3ca57932462428b0e213a = $this->env->getExtension("native_profiler");
        $__internal_444f8ca569070e3e2194407d596f6572a5e1ef74f1e3ca57932462428b0e213a->enter($__internal_444f8ca569070e3e2194407d596f6572a5e1ef74f1e3ca57932462428b0e213a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_444f8ca569070e3e2194407d596f6572a5e1ef74f1e3ca57932462428b0e213a->leave($__internal_444f8ca569070e3e2194407d596f6572a5e1ef74f1e3ca57932462428b0e213a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
