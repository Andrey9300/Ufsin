<?php

/* :zabolevaniya:editOsugdenyi.html.twig */
class __TwigTemplate_24dab04fe06bf7dc8739f3376ee9e4e6de607ac9cd950d1d7bc1f179fd7b38b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":zabolevaniya:editOsugdenyi.html.twig", 1);
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
        $__internal_91709855db8fe44a101d06215007283fc9266901b9185f201a0d14fc20bd821a = $this->env->getExtension("native_profiler");
        $__internal_91709855db8fe44a101d06215007283fc9266901b9185f201a0d14fc20bd821a->enter($__internal_91709855db8fe44a101d06215007283fc9266901b9185f201a0d14fc20bd821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":zabolevaniya:editOsugdenyi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91709855db8fe44a101d06215007283fc9266901b9185f201a0d14fc20bd821a->leave($__internal_91709855db8fe44a101d06215007283fc9266901b9185f201a0d14fc20bd821a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1d9670bd4d5ee561ac6e057657e6e6d5698054c2ce381d942f18c2205b8d0954 = $this->env->getExtension("native_profiler");
        $__internal_1d9670bd4d5ee561ac6e057657e6e6d5698054c2ce381d942f18c2205b8d0954->enter($__internal_1d9670bd4d5ee561ac6e057657e6e6d5698054c2ce381d942f18c2205b8d0954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Редактирование осужденного «";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "fio", array()), "html", null, true);
        echo "»</h1>
    </div>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-md-12\">
            <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'label', array("label" => "Учреждение"));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label" => "Пол"));
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'label', array("label" => "ФИО"));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_birthday", array()), 'label', array("label" => "Дата рождения (дд.мм.гггг)"));
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_birthday", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_job", array()), 'label', array("label" => "Место работы"));
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_job", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_study", array()), 'label', array("label" => "Место учебы"));
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_study", array()), 'widget', array("attr" => array("class" => "form-control", "spellcheck" => "true")));
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_progivaniya", array()), 'label', array("label" => "Место проживания"));
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place_progivaniya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_viyavleniya", array()), 'label', array("label" => "Дата заболевания (дд.мм.гггг)"));
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_viyavleniya", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_gospit", array()), 'label', array("label" => "Дата госпитализации в МЧ (дд.мм.гггг)"));
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_gospit", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_vzyatiya_na_uchet", array()), 'label', array("label" => "Дата взятия на учет ЛИУ-9 (дд.мм.гггг)"));
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_vzyatiya_na_uchet", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_perevoda", array()), 'label', array("label" => "Дата перевода в ЛИУ-9 (дд.мм.гггг)"));
        echo "
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_perevoda", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mbt", array()), 'label', array("label" => "МБТ"));
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mbt", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_zakl_dezin", array()), 'label', array("label" => "Дата заключительной дезинфекции (дд.мм.гггг)"));
        echo "
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_zakl_dezin", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_post_v_org", array()), 'label', array("label" => "Дата поступления в учреждение (дд.мм.гггг)"));
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_post_v_org", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_obr", array()), 'label', array("label" => "Дата обращения в МЧ (дд.мм.гггг)"));
        echo "
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_obr", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viyavlen", array()), 'label', array("label" => "Выявлен"));
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viyavlen", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recidiv", array()), 'label', array("label" => "Заболеваемость"));
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recidiv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postupil_iz", array()), 'label', array("label" => "Поступил из"));
        echo "
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postupil_iz", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_common", array()), 'label', array("label" => "Адрес общий"));
        echo "
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_common", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_propiska", array()), 'label', array("label" => "Адрес по прописке"));
        echo "
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address_propiska", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ochag", array()), 'label', array("label" => "Очаг"));
        echo "
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ochag", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <hr/>

    <div class=\"dobavlenie row\">

        <div class=\"col-md-4\">
            <div class=\"datesFLG\" data-prototype=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datesFLG", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
        </div>
        <div class=\"col-md-4 list_add\"></div>
        <div class=\"col-md-4 list_now\">
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "getDatesFLG", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["flg"]) {
            // line 74
            echo "                <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["flg"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</strong>, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["flg"], "result", array()), "html", null, true);
            echo "
                    <button style=\"float:none\" id=\"/zabolevaniya/deleteOsugdenyiFlg/";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["flg"], "id", array()), "html", null, true);
            echo "\"
                            class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </div>
    </div>

    <hr/>

    <div class=\"dobavlenie row\">

        <div class=\"col-md-4\">
            <div class=\"patologiya\" data-prototype=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "soput_patol", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
        </div>
        <div class=\"col-md-4 list_add\"></div>
        <div class=\"col-md-4 list_now\">
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "getSoputPatol", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["patol"]) {
            // line 92
            echo "                <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patol"], "name", array()), "html", null, true);
            echo "</strong>
                    <button style=\"float:none\" id=\"/zabolevaniya/deleteOsugdenyiSoputPatol/";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["patol"], "id", array()), "html", null, true);
            echo "\"
                            class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        </div>
    </div>

    <hr/>

    <div class=\"dobavlenie row\">

        <div class=\"col-md-4\">
            <div class=\"kontaktnyi\" data-prototype=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kontaktnyi", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"></div>
        </div>
        <div class=\"col-md-4 list_add\"></div>
        <div class=\"col-md-4 list_now\">
            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "getKontaktnyi", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["kon"]) {
            // line 110
            echo "                <div>Добавленные <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["kon"], "fio", array()), "html", null, true);
            echo "</strong>, ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["kon"], "dateBirthday", array()), "d.m.Y"), "html", null, true);
            echo "
                    <button style=\"float:none\" id=\"/zabolevaniya/deleteOsugdenyiKontaktnyi/";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["kon"], "id", array()), "html", null, true);
            echo "\"
                            class=\"close delete_after_save\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right;\"/>
        </div>
    </div>

    <hr/>

    <div class=\"row\">
        <ul class=\"nav navbar-nav add\">
            <li><a href=\"/zabolevaniya/deleteOsugdenyi/";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["osugdenyi"]) ? $context["osugdenyi"] : $this->getContext($context, "osugdenyi")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить заболевшего</a></li>
        </ul>
    </div>

";
        
        $__internal_1d9670bd4d5ee561ac6e057657e6e6d5698054c2ce381d942f18c2205b8d0954->leave($__internal_1d9670bd4d5ee561ac6e057657e6e6d5698054c2ce381d942f18c2205b8d0954_prof);

    }

    // line 134
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b8f6645c7f6beb8b40d9a0455fec594491711b9c53e5b2b8ff6ca389cfb584da = $this->env->getExtension("native_profiler");
        $__internal_b8f6645c7f6beb8b40d9a0455fec594491711b9c53e5b2b8ff6ca389cfb584da->enter($__internal_b8f6645c7f6beb8b40d9a0455fec594491711b9c53e5b2b8ff6ca389cfb584da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 135
        echo "
";
        
        $__internal_b8f6645c7f6beb8b40d9a0455fec594491711b9c53e5b2b8ff6ca389cfb584da->leave($__internal_b8f6645c7f6beb8b40d9a0455fec594491711b9c53e5b2b8ff6ca389cfb584da_prof);

    }

    public function getTemplateName()
    {
        return ":zabolevaniya:editOsugdenyi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 135,  369 => 134,  357 => 128,  342 => 115,  332 => 111,  325 => 110,  321 => 109,  314 => 105,  304 => 97,  294 => 93,  289 => 92,  285 => 91,  278 => 87,  268 => 79,  258 => 75,  251 => 74,  247 => 73,  240 => 69,  228 => 60,  224 => 59,  220 => 58,  216 => 57,  212 => 56,  208 => 55,  204 => 54,  200 => 53,  196 => 52,  192 => 51,  188 => 50,  184 => 49,  180 => 48,  176 => 47,  172 => 46,  168 => 45,  164 => 44,  160 => 43,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Редактирование осужденного «{{ osugdenyi.fio }}»</h1>*/
/*     </div>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             {{ form_label(form.organization, 'Учреждение') }}*/
/*             {{ form_widget(form.organization, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.gender, 'Пол') }}*/
/*             {{ form_widget(form.gender, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.fio, 'ФИО') }}*/
/*             {{ form_widget(form.fio, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.date_birthday, 'Дата рождения (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_birthday, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.place_job, 'Место работы') }}*/
/*             {{ form_widget(form.place_job, { 'attr': {'class': 'form-control', 'spellcheck': 'true'} }) }}*/
/*             {{ form_label(form.place_study, 'Место учебы') }}*/
/*             {{ form_widget(form.place_study, { 'attr': {'class': 'form-control', 'spellcheck': 'true'} }) }}*/
/*             {{ form_label(form.place_progivaniya, 'Место проживания') }}*/
/*             {{ form_widget(form.place_progivaniya, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.date_viyavleniya, 'Дата заболевания (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_viyavleniya, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.date_gospit, 'Дата госпитализации в МЧ (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_gospit, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.date_vzyatiya_na_uchet, 'Дата взятия на учет ЛИУ-9 (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_vzyatiya_na_uchet, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.date_perevoda, 'Дата перевода в ЛИУ-9 (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_perevoda, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.mbt, 'МБТ') }}*/
/*             {{ form_widget(form.mbt, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.date_zakl_dezin, 'Дата заключительной дезинфекции (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_zakl_dezin, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.date_post_v_org, 'Дата поступления в учреждение (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_post_v_org, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.date_obr, 'Дата обращения в МЧ (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date_obr, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*             {{ form_label(form.viyavlen, 'Выявлен') }}*/
/*             {{ form_widget(form.viyavlen, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.recidiv, 'Заболеваемость') }}*/
/*             {{ form_widget(form.recidiv, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.postupil_iz, 'Поступил из') }}*/
/*             {{ form_widget(form.postupil_iz, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.address_common, 'Адрес общий') }}*/
/*             {{ form_widget(form.address_common, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.address_propiska, 'Адрес по прописке') }}*/
/*             {{ form_widget(form.address_propiska, { 'attr': {'class': 'form-control'} }) }}*/
/*             {{ form_label(form.ochag, 'Очаг') }}*/
/*             {{ form_widget(form.ochag, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="dobavlenie row">*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="datesFLG" data-prototype="{{ form_widget(form.datesFLG.vars.prototype)|e }}"></div>*/
/*         </div>*/
/*         <div class="col-md-4 list_add"></div>*/
/*         <div class="col-md-4 list_now">*/
/*             {% for flg in osugdenyi.getDatesFLG %}*/
/*                 <div>Добавленные <strong>{{ flg.date|date("d.m.Y") }}</strong>, {{ flg.result }}*/
/*                     <button style="float:none" id="/zabolevaniya/deleteOsugdenyiFlg/{{ flg.id }}"*/
/*                             class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="dobavlenie row">*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="patologiya" data-prototype="{{ form_widget(form.soput_patol.vars.prototype)|e }}"></div>*/
/*         </div>*/
/*         <div class="col-md-4 list_add"></div>*/
/*         <div class="col-md-4 list_now">*/
/*             {% for patol in osugdenyi.getSoputPatol %}*/
/*                 <div>Добавленные <strong>{{ patol.name }}</strong>*/
/*                     <button style="float:none" id="/zabolevaniya/deleteOsugdenyiSoputPatol/{{ patol.id }}"*/
/*                             class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="dobavlenie row">*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="kontaktnyi" data-prototype="{{ form_widget(form.kontaktnyi.vars.prototype)|e }}"></div>*/
/*         </div>*/
/*         <div class="col-md-4 list_add"></div>*/
/*         <div class="col-md-4 list_now">*/
/*             {% for kon in osugdenyi.getKontaktnyi %}*/
/*                 <div>Добавленные <strong>{{ kon.fio }}</strong>, {{ kon.dateBirthday|date("d.m.Y") }}*/
/*                     <button style="float:none" id="/zabolevaniya/deleteOsugdenyiKontaktnyi/{{ kon.id }}"*/
/*                             class="close delete_after_save" type="button"><span aria-hidden="true">×</span></button>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right;"/>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr/>*/
/* */
/*     <div class="row">*/
/*         <ul class="nav navbar-nav add">*/
/*             <li><a href="/zabolevaniya/deleteOsugdenyi/{{ osugdenyi.id }}" class="delete_entity">Удалить заболевшего</a></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
