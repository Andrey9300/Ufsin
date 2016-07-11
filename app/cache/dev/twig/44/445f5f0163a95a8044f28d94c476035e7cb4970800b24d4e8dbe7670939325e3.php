<?php

/* :otchet:organization.html.twig */
class __TwigTemplate_8d2c7b1870edbabb72122295c92a69afcd1b4ac8095028fa0dde343d3e34f868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":otchet:organization.html.twig", 1);
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
        $__internal_d688bdec993072cfb83d0ab08eca77ae312fb658888e119ce73fc4fb5d627c47 = $this->env->getExtension("native_profiler");
        $__internal_d688bdec993072cfb83d0ab08eca77ae312fb658888e119ce73fc4fb5d627c47->enter($__internal_d688bdec993072cfb83d0ab08eca77ae312fb658888e119ce73fc4fb5d627c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet:organization.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d688bdec993072cfb83d0ab08eca77ae312fb658888e119ce73fc4fb5d627c47->leave($__internal_d688bdec993072cfb83d0ab08eca77ae312fb658888e119ce73fc4fb5d627c47_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_bcdb9705c611ac120b34e58ca913766cee572fc17d47b94ef34bb3cd1c3d3970 = $this->env->getExtension("native_profiler");
        $__internal_bcdb9705c611ac120b34e58ca913766cee572fc17d47b94ef34bb3cd1c3d3970->enter($__internal_bcdb9705c611ac120b34e58ca913766cee572fc17d47b94ef34bb3cd1c3d3970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <div id=\"main\" class=\"col-sm-9\">
            <h1>Список учреждений</h1>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Юридический адрес</th>
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
        foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
            // line 14
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["organization"], "rukovoditel", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ruk"]) {
                // line 15
                echo "                                <td>ФИО руководителя</td>
                                ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ruk"], "rukovoditelZamestitel", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["zam"]) {
                    // line 17
                    echo "                                    <td>ФИО зам руководителя</td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zam'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                            
                            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["organization"], "organizationObject", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 22
                echo "                                <td>Объекты учреждения</td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
                    </tr>
                </thead>
                <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
            // line 29
            echo "                    <tr>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "urAddress", array()), "html", null, true);
            echo "</td>
                        
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["organization"], "rukovoditel", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ruk"]) {
                // line 34
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ruk"], "fio", array()), "html", null, true);
                echo "</td>
                            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ruk"], "rukovoditelZamestitel", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["zam"]) {
                    // line 36
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zam"], "fio", array()), "html", null, true);
                    echo "</td>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zam'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        
                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["organization"], "organizationObject", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 41
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "name", array()), "html", null, true);
                echo "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                            
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "                
                    <tr>
                        <td colspan=\"4\" align=\"center\">Организаций не найдено</td>
                   </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_bcdb9705c611ac120b34e58ca913766cee572fc17d47b94ef34bb3cd1c3d3970->leave($__internal_bcdb9705c611ac120b34e58ca913766cee572fc17d47b94ef34bb3cd1c3d3970_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f5b2343eeba808374b73ce2e779b536340b8bb7ea1c02c8e84c1b60f9f745a05 = $this->env->getExtension("native_profiler");
        $__internal_f5b2343eeba808374b73ce2e779b536340b8bb7ea1c02c8e84c1b60f9f745a05->enter($__internal_f5b2343eeba808374b73ce2e779b536340b8bb7ea1c02c8e84c1b60f9f745a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 58
        echo "
";
        
        $__internal_f5b2343eeba808374b73ce2e779b536340b8bb7ea1c02c8e84c1b60f9f745a05->leave($__internal_f5b2343eeba808374b73ce2e779b536340b8bb7ea1c02c8e84c1b60f9f745a05_prof);

    }

    public function getTemplateName()
    {
        return ":otchet:organization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 58,  195 => 57,  184 => 51,  174 => 46,  167 => 43,  158 => 41,  154 => 40,  151 => 39,  145 => 38,  136 => 36,  132 => 35,  127 => 34,  123 => 33,  118 => 31,  114 => 30,  111 => 29,  106 => 28,  95 => 24,  88 => 22,  84 => 21,  81 => 20,  75 => 19,  68 => 17,  64 => 16,  61 => 15,  56 => 14,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <div id="main" class="col-sm-9">*/
/*             <h1>Список учреждений</h1>*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Название</th>*/
/*                         <th>Юридический адрес</th>*/
/*                         {% for organization in organizations %}*/
/*                             {% for ruk in organization.rukovoditel %}*/
/*                                 <td>ФИО руководителя</td>*/
/*                                 {% for zam in ruk.rukovoditelZamestitel %}*/
/*                                     <td>ФИО зам руководителя</td>*/
/*                                 {% endfor %}*/
/*                             {% endfor %}*/
/*                             */
/*                             {% for org in organization.organizationObject %}*/
/*                                 <td>Объекты учреждения</td>*/
/*                             {% endfor %}*/
/*                         {% endfor %}  */
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for organization in organizations %}*/
/*                     <tr>*/
/*                         <td>{{ organization.name }}</td>*/
/*                         <td>{{ organization.urAddress }}</td>*/
/*                         */
/*                         {% for ruk in organization.rukovoditel %}*/
/*                             <td>{{ruk.fio}}</td>*/
/*                             {% for zam in ruk.rukovoditelZamestitel %}*/
/*                                 <td>{{zam.fio}}</td>*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                         */
/*                         {% for org in organization.organizationObject %}*/
/*                             <td>{{org.name}}</td>*/
/*                         {% endfor %}*/
/*                             */
/*                     </tr>*/
/*                 {% else %}*/
/*                 */
/*                     <tr>*/
/*                         <td colspan="4" align="center">Организаций не найдено</td>*/
/*                    </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
