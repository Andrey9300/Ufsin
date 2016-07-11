<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e62be2d7d4a39fa36eb3dcf039e241ba9aa37ff19e6654fdab188294ee8cad28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17c60298465ed76f4bc2c164c933d835f917291909af55e6bce99480af8b0954 = $this->env->getExtension("native_profiler");
        $__internal_17c60298465ed76f4bc2c164c933d835f917291909af55e6bce99480af8b0954->enter($__internal_17c60298465ed76f4bc2c164c933d835f917291909af55e6bce99480af8b0954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c60298465ed76f4bc2c164c933d835f917291909af55e6bce99480af8b0954->leave($__internal_17c60298465ed76f4bc2c164c933d835f917291909af55e6bce99480af8b0954_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82eb7f9c0588e2461035d887c56ace791e1c503b49198d7fe50d31d7d6e7982a = $this->env->getExtension("native_profiler");
        $__internal_82eb7f9c0588e2461035d887c56ace791e1c503b49198d7fe50d31d7d6e7982a->enter($__internal_82eb7f9c0588e2461035d887c56ace791e1c503b49198d7fe50d31d7d6e7982a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_82eb7f9c0588e2461035d887c56ace791e1c503b49198d7fe50d31d7d6e7982a->leave($__internal_82eb7f9c0588e2461035d887c56ace791e1c503b49198d7fe50d31d7d6e7982a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6e093d8ca022bee573abfcfbde8d577210ab0b585b15a33f90adf15bd9498ff = $this->env->getExtension("native_profiler");
        $__internal_f6e093d8ca022bee573abfcfbde8d577210ab0b585b15a33f90adf15bd9498ff->enter($__internal_f6e093d8ca022bee573abfcfbde8d577210ab0b585b15a33f90adf15bd9498ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f6e093d8ca022bee573abfcfbde8d577210ab0b585b15a33f90adf15bd9498ff->leave($__internal_f6e093d8ca022bee573abfcfbde8d577210ab0b585b15a33f90adf15bd9498ff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78e501632d3728eb232362487500abc716c1d64430eff797e10c6b67bcc371fb = $this->env->getExtension("native_profiler");
        $__internal_78e501632d3728eb232362487500abc716c1d64430eff797e10c6b67bcc371fb->enter($__internal_78e501632d3728eb232362487500abc716c1d64430eff797e10c6b67bcc371fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_78e501632d3728eb232362487500abc716c1d64430eff797e10c6b67bcc371fb->leave($__internal_78e501632d3728eb232362487500abc716c1d64430eff797e10c6b67bcc371fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
