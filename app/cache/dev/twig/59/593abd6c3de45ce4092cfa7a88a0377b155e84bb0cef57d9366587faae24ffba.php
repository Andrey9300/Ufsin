<?php

/* :otchet:osugdenyi_card.html.twig */
class __TwigTemplate_746faca2148a3e7df3220b82b822ebf6286904266f463176f629b0e70c9c3cbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet:osugdenyi_card.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1b07f7d466a78856c1ae54c7afbe562bfe1e3d05de094f1f63c5542c43d68a4 = $this->env->getExtension("native_profiler");
        $__internal_f1b07f7d466a78856c1ae54c7afbe562bfe1e3d05de094f1f63c5542c43d68a4->enter($__internal_f1b07f7d466a78856c1ae54c7afbe562bfe1e3d05de094f1f63c5542c43d68a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet:osugdenyi_card.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b07f7d466a78856c1ae54c7afbe562bfe1e3d05de094f1f63c5542c43d68a4->leave($__internal_f1b07f7d466a78856c1ae54c7afbe562bfe1e3d05de094f1f63c5542c43d68a4_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_93bd911bf5bbb8b803af08f5dc2fd2124c85711745899a0409699435c3b5dceb = $this->env->getExtension("native_profiler");
        $__internal_93bd911bf5bbb8b803af08f5dc2fd2124c85711745899a0409699435c3b5dceb->enter($__internal_93bd911bf5bbb8b803af08f5dc2fd2124c85711745899a0409699435c3b5dceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h3>Карточка осужденного «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "fio", array()), "html", null, true);
        echo "»</h3>
</div>

<div class=\"row\">
    <table class=\"table table-hover table-bordered\">
        <tbody>
            <tr>
                <td>ФИО</td>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "fio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Дата рождения</td>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateBirthday", array()), "d.m.Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Место работы</td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "placeJob", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Место учебы</td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "placeStudy", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Место проживания</td>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "placeProgivaniya", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Дата заболевания</td>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateViyavleniya", array()), "d.m.Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Дата госпитализации в МЧ</td>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateGospit", array()), "d.m.Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Дата взятия на учет ЛИУ-9</td>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateVzyatiyaNaUchet", array()), "d.m.Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Дата перевода в ЛИУ-9</td>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "datePerevoda", array()), "d.m.Y"), "html", null, true);
        echo "</td>
            </tr>            
            <tr>
                <td>МБТ</td>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "mbt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Дата заключительной дезинфекции</td>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "dateZaklDezin", array()), "d.m.Y"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>            

";
        
        $__internal_93bd911bf5bbb8b803af08f5dc2fd2124c85711745899a0409699435c3b5dceb->leave($__internal_93bd911bf5bbb8b803af08f5dc2fd2124c85711745899a0409699435c3b5dceb_prof);

    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_131d496bf53364fedebbe33d74018cd97a357b6a4083f821f3aab2d6b30deeb1 = $this->env->getExtension("native_profiler");
        $__internal_131d496bf53364fedebbe33d74018cd97a357b6a4083f821f3aab2d6b30deeb1->enter($__internal_131d496bf53364fedebbe33d74018cd97a357b6a4083f821f3aab2d6b30deeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 63
        echo "
";
        
        $__internal_131d496bf53364fedebbe33d74018cd97a357b6a4083f821f3aab2d6b30deeb1->leave($__internal_131d496bf53364fedebbe33d74018cd97a357b6a4083f821f3aab2d6b30deeb1_prof);

    }

    public function getTemplateName()
    {
        return ":otchet:osugdenyi_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 63,  140 => 62,  126 => 54,  119 => 50,  112 => 46,  105 => 42,  98 => 38,  91 => 34,  84 => 30,  77 => 26,  70 => 22,  63 => 18,  56 => 14,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h3>Карточка осужденного «{{ osugdenyi.fio }}»</h3>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <table class="table table-hover table-bordered">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>ФИО</td>*/
/*                 <td>{{ osugdenyi.fio }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Дата рождения</td>*/
/*                 <td>{{ osugdenyi.dateBirthday|date("d.m.Y") }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Место работы</td>*/
/*                 <td>{{ osugdenyi.placeJob }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Место учебы</td>*/
/*                 <td>{{ osugdenyi.placeStudy }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Место проживания</td>*/
/*                 <td>{{ osugdenyi.placeProgivaniya }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Дата заболевания</td>*/
/*                 <td>{{ osugdenyi.dateViyavleniya|date("d.m.Y") }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Дата госпитализации в МЧ</td>*/
/*                 <td>{{ osugdenyi.dateGospit|date("d.m.Y") }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Дата взятия на учет ЛИУ-9</td>*/
/*                 <td>{{ osugdenyi.dateVzyatiyaNaUchet|date("d.m.Y") }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Дата перевода в ЛИУ-9</td>*/
/*                 <td>{{ osugdenyi.datePerevoda|date("d.m.Y") }}</td>*/
/*             </tr>            */
/*             <tr>*/
/*                 <td>МБТ</td>*/
/*                 <td>{{ osugdenyi.mbt }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Дата заключительной дезинфекции</td>*/
/*                 <td>{{ osugdenyi.dateZaklDezin|date("d.m.Y") }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>            */
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
