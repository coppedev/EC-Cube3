<?php

/* Form/form_layout.twig */
class __TwigTemplate_49e33708fc90b73e8bfb0214d5cc1721b719c4427a77ffa99c3b8b9e81ad58a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("form_table_layout.html.twig", "Form/form_layout.twig", 22);
        $this->blocks = array(
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'name_widget' => array($this, 'block_name_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'fax_widget' => array($this, 'block_fax_widget'),
            'zip_widget' => array($this, 'block_zip_widget'),
            'address_widget' => array($this, 'block_address_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_table_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce3643fd06f67dca12f196a42530f839d04f3e8a78c1a98612b53032a63529e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3643fd06f67dca12f196a42530f839d04f3e8a78c1a98612b53032a63529e4->enter($__internal_ce3643fd06f67dca12f196a42530f839d04f3e8a78c1a98612b53032a63529e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/form_layout.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce3643fd06f67dca12f196a42530f839d04f3e8a78c1a98612b53032a63529e4->leave($__internal_ce3643fd06f67dca12f196a42530f839d04f3e8a78c1a98612b53032a63529e4_prof);

    }

    // line 24
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_5031b9295e96741fb4fad29f5d207a9c1c6005a9c8de2db9a1abdac8ff4a3038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5031b9295e96741fb4fad29f5d207a9c1c6005a9c8de2db9a1abdac8ff4a3038->enter($__internal_5031b9295e96741fb4fad29f5d207a9c1c6005a9c8de2db9a1abdac8ff4a3038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 25
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "freeze_display_text", array())) {
            // line 26
            echo "<table ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 27
            if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
                // line 28
                echo "<tr>
                <td colspan=\"2\">";
                // line 30
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
                // line 31
                echo "</td>
            </tr>";
            }
            // line 34
            $this->displayBlock("form_rows", $context, $blocks);
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            // line 36
            echo "</table>";
        } else {
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 39
            $this->displayBlock("form_rows", $context, $blocks);
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        
        $__internal_5031b9295e96741fb4fad29f5d207a9c1c6005a9c8de2db9a1abdac8ff4a3038->leave($__internal_5031b9295e96741fb4fad29f5d207a9c1c6005a9c8de2db9a1abdac8ff4a3038_prof);

    }

    // line 44
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2c630f9ca6330dc630bd7ee2924c899de6b2bd24e711f342645cf8a112998e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c630f9ca6330dc630bd7ee2924c899de6b2bd24e711f342645cf8a112998e8a->enter($__internal_2c630f9ca6330dc630bd7ee2924c899de6b2bd24e711f342645cf8a112998e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 45
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "freeze_display_text", array())) {
            // line 46
            echo "<tr>
            <th>";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 49
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "required", array())) {
                echo "<span class=\"attention\">※</span>";
            }
            // line 50
            echo "            </th>
            <td>";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 54
            echo "</td>
        </tr>";
        } else {
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        }
        
        $__internal_2c630f9ca6330dc630bd7ee2924c899de6b2bd24e711f342645cf8a112998e8a->leave($__internal_2c630f9ca6330dc630bd7ee2924c899de6b2bd24e711f342645cf8a112998e8a_prof);

    }

    // line 62
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_246a047fd06aecb03ee305ebc57ea9bed32fd9ac8af78095c54ba767e0ba20a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246a047fd06aecb03ee305ebc57ea9bed32fd9ac8af78095c54ba767e0ba20a3->enter($__internal_246a047fd06aecb03ee305ebc57ea9bed32fd9ac8af78095c54ba767e0ba20a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 63
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 65
                if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                    // line 66
                    echo "<span class=\"attention\">※ ";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), array("{{ field }}" => ($context["label"] ?? $this->getContext($context, "label")))), "html", null, true);
                    echo "<br /></span>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_246a047fd06aecb03ee305ebc57ea9bed32fd9ac8af78095c54ba767e0ba20a3->leave($__internal_246a047fd06aecb03ee305ebc57ea9bed32fd9ac8af78095c54ba767e0ba20a3_prof);

    }

    // line 74
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_874f652e1f9a510b720dd8bc909a1c0470330b3fb26fbaa350ce5329cfba01d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874f652e1f9a510b720dd8bc909a1c0470330b3fb26fbaa350ce5329cfba01d0->enter($__internal_874f652e1f9a510b720dd8bc909a1c0470330b3fb26fbaa350ce5329cfba01d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 75
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 76
        if ((($context["freeze"] ?? $this->getContext($context, "freeze")) == false)) {
            // line 77
            if ((array_key_exists("help", $context) &&  !twig_test_empty(($context["help"] ?? $this->getContext($context, "help"))))) {
                // line 78
                echo "<p class=\"mini\"><span class=\"attention\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help"] ?? $this->getContext($context, "help")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span></p>";
            }
        }
        
        $__internal_874f652e1f9a510b720dd8bc909a1c0470330b3fb26fbaa350ce5329cfba01d0->leave($__internal_874f652e1f9a510b720dd8bc909a1c0470330b3fb26fbaa350ce5329cfba01d0_prof);

    }

    // line 83
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_595e463aded8c53bebe2e38184ee8c5d4b3f9af63b38743839faec39e53d96f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595e463aded8c53bebe2e38184ee8c5d4b3f9af63b38743839faec39e53d96f0->enter($__internal_595e463aded8c53bebe2e38184ee8c5d4b3f9af63b38743839faec39e53d96f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 84
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 85
            $context["type"] = "hidden";
            // line 86
            if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                // line 87
                echo nl2br(twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter(($context["value"] ?? $this->getContext($context, "value")), "")) : ("")), "html", null, true));
            }
        }
        // line 90
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_595e463aded8c53bebe2e38184ee8c5d4b3f9af63b38743839faec39e53d96f0->leave($__internal_595e463aded8c53bebe2e38184ee8c5d4b3f9af63b38743839faec39e53d96f0_prof);

    }

    // line 93
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_bc943a9c5325ad3a0cbeb3e01c183a2556eb06ec29f4110e79547c971f0e1cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc943a9c5325ad3a0cbeb3e01c183a2556eb06ec29f4110e79547c971f0e1cf1->enter($__internal_bc943a9c5325ad3a0cbeb3e01c183a2556eb06ec29f4110e79547c971f0e1cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 94
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 95
            $context["style"] = "background-color:#ffe8e8;";
            // line 96
            if (($context["attr"] ?? $this->getContext($context, "attr"))) {
                // line 97
                if (($this->getAttribute(($context["attr"] ?? null), "style", array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array(), "array")) > 0))) {
                    // line 98
                    $context["style"] = ((($context["style"] ?? $this->getContext($context, "style")) . " ") . $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array(), "array"));
                }
                // line 100
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => ($context["style"] ?? $this->getContext($context, "style"))));
            } else {
                // line 102
                $context["attr"] = array("style" => ($context["style"] ?? $this->getContext($context, "style")));
            }
        }
        // line 105
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["read_only"] ?? $this->getContext($context, "read_only"))) {
            echo "disabled=\"disabled\"";
        }
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        if (($context["pattern"] ?? $this->getContext($context, "pattern"))) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, ($context["pattern"] ?? $this->getContext($context, "pattern")), "html", null, true);
            echo "\"";
        }
        // line 106
        if ((($context["freeze"] ?? $this->getContext($context, "freeze")) == false)) {
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_bc943a9c5325ad3a0cbeb3e01c183a2556eb06ec29f4110e79547c971f0e1cf1->leave($__internal_bc943a9c5325ad3a0cbeb3e01c183a2556eb06ec29f4110e79547c971f0e1cf1_prof);

    }

    // line 111
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_f3260ced3a0a8ab865e65803326d3fb102ed654d2d85bde5dd2cbb6e3b43e4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3260ced3a0a8ab865e65803326d3fb102ed654d2d85bde5dd2cbb6e3b43e4c2->enter($__internal_f3260ced3a0a8ab865e65803326d3fb102ed654d2d85bde5dd2cbb6e3b43e4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 112
        if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
            // line 113
            echo "<tr style=\"display: none\">
            <td colspan=\"2\">";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 116
            echo "</td>
        </tr>";
        } else {
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        }
        
        $__internal_f3260ced3a0a8ab865e65803326d3fb102ed654d2d85bde5dd2cbb6e3b43e4c2->leave($__internal_f3260ced3a0a8ab865e65803326d3fb102ed654d2d85bde5dd2cbb6e3b43e4c2_prof);

    }

    // line 123
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fc250d72382ff1e9b75bb6242d8a502d0bc63d375f621c077e42b6d8d43262a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc250d72382ff1e9b75bb6242d8a502d0bc63d375f621c077e42b6d8d43262a4->enter($__internal_fc250d72382ff1e9b75bb6242d8a502d0bc63d375f621c077e42b6d8d43262a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 124
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $this->displayParentBlock("textarea_widget", $context, $blocks);
            // line 128
            if ((array_key_exists("help", $context) &&  !twig_test_empty(($context["help"] ?? $this->getContext($context, "help"))))) {
                // line 129
                echo "<p class=\"mini\"><span class=\"attention\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help"] ?? $this->getContext($context, "help")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span></p>";
            }
        }
        
        $__internal_fc250d72382ff1e9b75bb6242d8a502d0bc63d375f621c077e42b6d8d43262a4->leave($__internal_fc250d72382ff1e9b75bb6242d8a502d0bc63d375f621c077e42b6d8d43262a4_prof);

    }

    // line 134
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_dbd47ec1b814eb0310533ec2fc2b76e4298dfb0aa7d7ea6de9308c18e21b549a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd47ec1b814eb0310533ec2fc2b76e4298dfb0aa7d7ea6de9308c18e21b549a->enter($__internal_dbd47ec1b814eb0310533ec2fc2b76e4298dfb0aa7d7ea6de9308c18e21b549a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 135
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 136
            echo "        ";
            $context["flag"] = false;
            // line 137
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 138
                echo "            ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    // line 139
                    if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                        // line 140
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                        echo "
                ";
                    }
                    // line 142
                    echo "                <input type=\"hidden\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                    echo "\" ";
                    $this->displayBlock("widget_attributes", $context, $blocks);
                    echo " />
                ";
                    // line 143
                    $context["flag"] = true;
                    // line 144
                    echo "            ";
                }
                // line 145
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "        ";
            if ((($context["flag"] ?? $this->getContext($context, "flag")) == false)) {
                echo "<input type=\"hidden\" value=\"\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo " />";
            }
        } else {
            // line 148
            $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_dbd47ec1b814eb0310533ec2fc2b76e4298dfb0aa7d7ea6de9308c18e21b549a->leave($__internal_dbd47ec1b814eb0310533ec2fc2b76e4298dfb0aa7d7ea6de9308c18e21b549a_prof);

    }

    // line 153
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a4bdeaebfaba5239124a485fbf7420a4278ff8781448b12f707a13006b767269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bdeaebfaba5239124a485fbf7420a4278ff8781448b12f707a13006b767269->enter($__internal_a4bdeaebfaba5239124a485fbf7420a4278ff8781448b12f707a13006b767269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 154
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 155
            if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                // line 156
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "data", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "data", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()))) : ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()))), "html", null, true);
            }
            // line 158
            echo "<input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array()), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()))) : ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()))), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " />";
        } else {
            // line 160
            $this->displayParentBlock("choice_widget_expanded", $context, $blocks);
        }
        
        $__internal_a4bdeaebfaba5239124a485fbf7420a4278ff8781448b12f707a13006b767269->leave($__internal_a4bdeaebfaba5239124a485fbf7420a4278ff8781448b12f707a13006b767269_prof);

    }

    // line 165
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_19c138ebc40775c4a5977c7dcd14886252aab2d819410af33f3048f5cb7bc576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c138ebc40775c4a5977c7dcd14886252aab2d819410af33f3048f5cb7bc576->enter($__internal_19c138ebc40775c4a5977c7dcd14886252aab2d819410af33f3048f5cb7bc576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 166
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 167
            if (($context["checked"] ?? $this->getContext($context, "checked"))) {
                // line 168
                if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                    // line 169
                    $this->displayBlock("form_label", $context, $blocks);
                }
                // line 171
                echo "<input type=\"hidden\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                if (array_key_exists("value", $context)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                    echo "\"";
                }
                echo " />";
            }
        } else {
            // line 174
            $this->displayParentBlock("checkbox_widget", $context, $blocks);
        }
        
        $__internal_19c138ebc40775c4a5977c7dcd14886252aab2d819410af33f3048f5cb7bc576->leave($__internal_19c138ebc40775c4a5977c7dcd14886252aab2d819410af33f3048f5cb7bc576_prof);

    }

    // line 178
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_cb09c53ca8762a70abdbf8d8beab14ef4b9b77552c30780124e0489ff66f8426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb09c53ca8762a70abdbf8d8beab14ef4b9b77552c30780124e0489ff66f8426->enter($__internal_cb09c53ca8762a70abdbf8d8beab14ef4b9b77552c30780124e0489ff66f8426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 179
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 180
            if (($context["checked"] ?? $this->getContext($context, "checked"))) {
                // line 181
                if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                    // line 182
                    $this->displayBlock("form_label", $context, $blocks);
                }
                // line 184
                echo "<input type=\"hidden\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                if (array_key_exists("value", $context)) {
                    echo " value=\"";
                    echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                    echo "\"";
                }
                echo " />";
            }
        } else {
            // line 187
            $this->displayParentBlock("radio_widget", $context, $blocks);
        }
        
        $__internal_cb09c53ca8762a70abdbf8d8beab14ef4b9b77552c30780124e0489ff66f8426->leave($__internal_cb09c53ca8762a70abdbf8d8beab14ef4b9b77552c30780124e0489ff66f8426_prof);

    }

    // line 192
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_df53f9fa4dcfb6ea72e93ee180b26322aef2a48114fa51a4a3c142995d7a4811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df53f9fa4dcfb6ea72e93ee180b26322aef2a48114fa51a4a3c142995d7a4811->enter($__internal_df53f9fa4dcfb6ea72e93ee180b26322aef2a48114fa51a4a3c142995d7a4811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 193
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 194
            echo "<input type=\"hidden\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "html", null, true);
            echo "\" />";
        } else {
            // line 196
            $this->displayParentBlock("password_widget", $context, $blocks);
        }
        
        $__internal_df53f9fa4dcfb6ea72e93ee180b26322aef2a48114fa51a4a3c142995d7a4811->leave($__internal_df53f9fa4dcfb6ea72e93ee180b26322aef2a48114fa51a4a3c142995d7a4811_prof);

    }

    // line 203
    public function block_name_widget($context, array $blocks = array())
    {
        $__internal_fb3223b4d45fbc148d797bff0924a20d9e470eab5fce929a31a3b087173ddb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3223b4d45fbc148d797bff0924a20d9e470eab5fce929a31a3b087173ddb46->enter($__internal_fb3223b4d45fbc148d797bff0924a20d9e470eab5fce929a31a3b087173ddb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name_widget"));

        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 205
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 208
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name01", array()), array(), "array"), 'widget');
            // line 209
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name02", array()), array(), "array"), 'widget');
        } else {
            // line 211
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name01", array()), array(), "array"), 'widget');
            // line 212
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name02", array()), array(), "array"), 'widget');
        }
        // line 215
        if (($this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "last", array()) == false)) {
            echo "　";
        }
        
        $__internal_fb3223b4d45fbc148d797bff0924a20d9e470eab5fce929a31a3b087173ddb46->leave($__internal_fb3223b4d45fbc148d797bff0924a20d9e470eab5fce929a31a3b087173ddb46_prof);

    }

    // line 218
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_f2bdf9113459fb232fe666b89c88a085d3370f5a2e7f805b960cf75f2117bf50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bdf9113459fb232fe666b89c88a085d3370f5a2e7f805b960cf75f2117bf50->enter($__internal_f2bdf9113459fb232fe666b89c88a085d3370f5a2e7f805b960cf75f2117bf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 220
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 223
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 224
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo "&nbsp;-&nbsp;";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f2bdf9113459fb232fe666b89c88a085d3370f5a2e7f805b960cf75f2117bf50->leave($__internal_f2bdf9113459fb232fe666b89c88a085d3370f5a2e7f805b960cf75f2117bf50_prof);

    }

    // line 228
    public function block_fax_widget($context, array $blocks = array())
    {
        $__internal_cfe0342813585e1f92c17769e660e6eb6466a4fbd333322195defcf58a7554b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe0342813585e1f92c17769e660e6eb6466a4fbd333322195defcf58a7554b5->enter($__internal_cfe0342813585e1f92c17769e660e6eb6466a4fbd333322195defcf58a7554b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fax_widget"));

        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 230
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 234
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo "&nbsp;-&nbsp;";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cfe0342813585e1f92c17769e660e6eb6466a4fbd333322195defcf58a7554b5->leave($__internal_cfe0342813585e1f92c17769e660e6eb6466a4fbd333322195defcf58a7554b5_prof);

    }

    // line 238
    public function block_zip_widget($context, array $blocks = array())
    {
        $__internal_cc01522814743a29f12a547a8cf969cccf8406a8a135f1713d039a0dac22b9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc01522814743a29f12a547a8cf969cccf8406a8a135f1713d039a0dac22b9cc->enter($__internal_cc01522814743a29f12a547a8cf969cccf8406a8a135f1713d039a0dac22b9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zip_widget"));

        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 240
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 243
            echo "〒&nbsp;";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "zip01_name", array()), array(), "array"), 'widget');
            echo "&nbsp;-&nbsp;";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "zip02_name", array()), array(), "array"), 'widget');
        } else {
            // line 245
            echo "〒&nbsp;";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "zip01_name", array()), array(), "array"), 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            echo "&nbsp;-&nbsp;";
            // line 246
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "zip02_name", array()), array(), "array"), 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            echo "
        <a class=\"btn-normal\" href=\"javascript:;\" name=\"address_input\" onclick=\"eccube.getAddress('";
            // line 247
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath("input_zip");
            echo "', 'zip01', 'zip02', 'pref', 'addr01'); return false;\">住所入力</a>";
        }
        
        $__internal_cc01522814743a29f12a547a8cf969cccf8406a8a135f1713d039a0dac22b9cc->leave($__internal_cc01522814743a29f12a547a8cf969cccf8406a8a135f1713d039a0dac22b9cc_prof);

    }

    // line 251
    public function block_address_widget($context, array $blocks = array())
    {
        $__internal_7aa5951eb6189d47bc9df06f9a77149c3526b1b0c551babdcede9391055631da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa5951eb6189d47bc9df06f9a77149c3526b1b0c551babdcede9391055631da->enter($__internal_7aa5951eb6189d47bc9df06f9a77149c3526b1b0c551babdcede9391055631da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "address_widget"));

        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 253
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 256
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "pref_name", array()), array(), "array"), 'widget');
            // line 257
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "addr01_name", array()), array(), "array"), 'widget');
            // line 258
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "addr02_name", array()), array(), "array"), 'widget');
        } else {
            // line 260
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "pref_name", array()), array(), "array"), 'widget');
            echo "<br />";
            // line 261
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "addr01_name", array()), array(), "array"), 'widget', array("attr" => array("style" => "ime-mode: active;")));
            echo "<br />";
            // line 262
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "addr02_name", array()), array(), "array"), 'widget', array("attr" => array("style" => "ime-mode: active;")));
            echo "<br />";
            // line 263
            if ((array_key_exists("help", $context) &&  !twig_test_empty(($context["help"] ?? $this->getContext($context, "help"))))) {
                // line 264
                echo "<span class=\"attention\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help"] ?? $this->getContext($context, "help")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>";
            }
        }
        
        $__internal_7aa5951eb6189d47bc9df06f9a77149c3526b1b0c551babdcede9391055631da->leave($__internal_7aa5951eb6189d47bc9df06f9a77149c3526b1b0c551babdcede9391055631da_prof);

    }

    public function getTemplateName()
    {
        return "Form/form_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 264,  743 => 263,  740 => 262,  737 => 261,  734 => 260,  731 => 258,  729 => 257,  727 => 256,  725 => 255,  719 => 253,  715 => 252,  709 => 251,  700 => 247,  696 => 246,  692 => 245,  686 => 243,  684 => 242,  678 => 240,  674 => 239,  668 => 238,  647 => 234,  645 => 233,  628 => 232,  622 => 230,  618 => 229,  612 => 228,  591 => 224,  589 => 223,  572 => 222,  566 => 220,  562 => 219,  556 => 218,  547 => 215,  544 => 212,  542 => 211,  539 => 209,  537 => 208,  535 => 207,  529 => 205,  525 => 204,  519 => 203,  511 => 196,  504 => 194,  502 => 193,  496 => 192,  488 => 187,  477 => 184,  474 => 182,  472 => 181,  470 => 180,  468 => 179,  462 => 178,  454 => 174,  443 => 171,  440 => 169,  438 => 168,  436 => 167,  434 => 166,  428 => 165,  420 => 160,  413 => 158,  410 => 156,  408 => 155,  406 => 154,  400 => 153,  392 => 148,  384 => 146,  370 => 145,  367 => 144,  365 => 143,  358 => 142,  353 => 140,  351 => 139,  348 => 138,  330 => 137,  327 => 136,  325 => 135,  319 => 134,  308 => 129,  306 => 128,  304 => 127,  301 => 125,  299 => 124,  293 => 123,  285 => 119,  281 => 116,  279 => 115,  276 => 113,  274 => 112,  268 => 111,  249 => 107,  247 => 106,  230 => 105,  226 => 102,  223 => 100,  220 => 98,  218 => 97,  216 => 96,  214 => 95,  212 => 94,  206 => 93,  199 => 90,  195 => 87,  193 => 86,  191 => 85,  189 => 84,  183 => 83,  172 => 78,  170 => 77,  168 => 76,  166 => 75,  160 => 74,  145 => 66,  143 => 65,  139 => 64,  137 => 63,  131 => 62,  123 => 58,  121 => 57,  117 => 54,  115 => 53,  113 => 52,  110 => 50,  106 => 49,  104 => 48,  101 => 46,  99 => 45,  93 => 44,  85 => 40,  83 => 39,  81 => 38,  78 => 36,  76 => 35,  74 => 34,  70 => 31,  68 => 30,  65 => 28,  63 => 27,  59 => 26,  57 => 25,  51 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
This file is part of EC-CUBE

Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.

http://www.lockon.co.jp/

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#}
{%- extends 'form_table_layout.html.twig' -%}

{%- block form_widget_compound -%}
    {%- if form.vars.freeze_display_text -%}
        <table {{ block('widget_container_attributes') }}>
            {%- if form.parent is empty and errors|length > 0 -%}
            <tr>
                <td colspan=\"2\">
                    {{- form_errors(form) -}}
                </td>
            </tr>
            {%- endif -%}
            {{- block('form_rows') -}}
            {{- form_rest(form) -}}
        </table>
    {%- else -%}
        {{- form_errors(form) -}}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    {%- endif -%}
{%- endblock form_widget_compound -%}

{%- block form_row -%}
    {%- if form.vars.freeze_display_text -%}
        <tr>
            <th>
                {{- form_label(form) -}}
                {% if form.vars.required %}<span class=\"attention\">※</span>{% endif %}
            </th>
            <td>
                {{- form_errors(form) -}}
                {{- form_widget(form) -}}
            </td>
        </tr>
    {%- else -%}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    {%- endif -%}
{%- endblock form_row -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        {%- for error in errors -%}
            {%- if freeze_display_text -%}
                <span class=\"attention\">※ {{ error.messageTemplate|trans(error.messageParameters, 'validators')|replace({'{{ field }}': label}) }}<br /></span>
            {%- endif %}
        {%- endfor -%}
    {%- endif -%}
{%- endblock form_errors -%}

{# Widgets #}

{%- block form_widget -%}
    {{- parent() -}}
    {%- if freeze == false -%}
        {%- if help is defined and help is not empty -%}
            <p class=\"mini\"><span class=\"attention\">{{ help|trans({}, translation_domain) }}</span></p>
        {%- endif -%}
    {%- endif -%}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- if freeze -%}
        {%- set type = 'hidden' -%}
        {%- if freeze_display_text -%}
            {{- value|default('')|nl2br -}}
        {%- endif -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_widget_simple -%}

{%- block widget_attributes -%}
    {%- if errors|length > 0 -%}
        {%- set style = 'background-color:#ffe8e8;' -%}
        {%- if attr -%}
            {%- if attr['style'] is defined and attr['style']|length > 0 -%}
                {%- set style = style~' '~attr['style'] -%}
            {%- endif -%}
            {%- set attr = attr|merge({'style': style}) -%}
        {%- else -%}
            {%- set attr = {'style': style} -%}
        {%- endif -%}
    {%- endif -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{%- if read_only -%} disabled=\"disabled\"{% endif %}{% if required %} required=\"required\"{% endif %}{% if pattern %} pattern=\"{{ pattern }}\"{% endif -%}
    {%- if freeze == false -%}
        {%- for attrname,attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\" {% endfor -%}
    {%- endif -%}
{%- endblock widget_attributes -%}

{%- block hidden_row -%}
    {%- if freeze_display_text -%}
        <tr style=\"display: none\">
            <td colspan=\"2\">
                {{- form_widget(form) -}}
            </td>
        </tr>
    {%- else -%}
        {{- form_widget(form) -}}
    {%- endif -%}
{%- endblock hidden_row -%}

{%- block textarea_widget -%}
    {%- if freeze -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {{- parent() -}}
        {%- if help is defined and help is not empty -%}
            <p class=\"mini\"><span class=\"attention\">{{ help|trans({}, translation_domain) }}</span></p>
        {%- endif -%}
    {%- endif -%}
{%- endblock textarea_widget -%}

{%- block choice_widget_collapsed -%}
    {% if freeze %}
        {% set flag = false %}
        {% for choice in choices %}
            {% if choice is selectedchoice(value) %}
                {%- if freeze_display_text -%}
                    {{ choice.label|trans({}, translation_domain) }}
                {% endif %}
                <input type=\"hidden\" value=\"{{ choice.value }}\" {{ block('widget_attributes') }} />
                {% set flag = true %}
            {% endif %}
        {% endfor %}
        {% if flag == false %}<input type=\"hidden\" value=\"\" {{ block('widget_attributes') }} />{% endif %}
    {%- else -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock choice_widget_collapsed -%}


{%- block choice_widget_expanded -%}
    {% if freeze %}
        {%- if freeze_display_text -%}
            {{ form.vars.data.name|default(form.vars.data) }}
        {%- endif -%}
        <input type=\"hidden\" value=\"{{ form.vars.data.id|default(form.vars.data) }}\" {{ block('widget_attributes') }} />
    {%- else -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock choice_widget_expanded -%}


{%- block checkbox_widget -%}
    {%- if freeze -%}
        {%- if checked -%}
            {%- if freeze_display_text -%}
                {{ block('form_label') }}
            {%- endif -%}
            <input type=\"hidden\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %} />
        {%- endif -%}
    {%- else -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    {%- if freeze -%}
        {%- if checked -%}
            {%- if freeze_display_text -%}
                {{ block('form_label') }}
            {%- endif -%}
            <input type=\"hidden\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %} />
        {%- endif -%}
    {%- else -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock radio_widget -%}


{%- block password_widget -%}
    {%- if freeze -%}
        <input type=\"hidden\" {{ block('widget_attributes') }} value=\"{{ form.vars.data }}\" />
    {%- else -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock password_widget -%}


{# EC-CUBE Widget #}

{%- block name_widget -%}
    {%- for child in form %}
        {{- form_errors(child) -}}
    {% endfor -%}
        {%- if freeze -%}
            {{- form_widget(form[form.vars.name01]) -}}
            {{- form_widget(form[form.vars.name02]) -}}
        {%- else -%}
            {{- form_widget(form[form.vars.name01]) -}}
            {{- form_widget(form[form.vars.name02]) -}}

        {%- endif -%}
        {%- if loop.last == false%}　{% endif -%}
{%- endblock name_widget -%}

{%- block tel_widget -%}
    {%- for child in form %}
        {{- form_errors(child) -}}
    {% endfor -%}
    {%- for child in form %}
        {{- form_widget(child, {'attr': {'style': 'ime-mode: disabled;'}}) -}}
        {%- if loop.last == false%}&nbsp;-&nbsp;{% endif -%}
    {% endfor -%}
{%- endblock tel_widget -%}

{%- block fax_widget -%}
    {%- for child in form %}
        {{- form_errors(child) -}}
    {% endfor -%}
    {%- for child in form %}
        {{- form_widget(child, {'attr': {'style': 'ime-mode: disabled;'}}) -}}
        {%- if loop.last == false%}&nbsp;-&nbsp;{% endif -%}
    {% endfor -%}
{%- endblock fax_widget -%}

{%- block zip_widget -%}
    {%- for child in form %}
        {{- form_errors(child) -}}
    {% endfor -%}
    {%- if freeze -%}
        〒&nbsp;{{ form_widget(form[form.vars.zip01_name]) }}&nbsp;-&nbsp;{{- form_widget(form[form.vars.zip02_name]) }}
    {%- else -%}
        〒&nbsp;{{ form_widget(form[form.vars.zip01_name], {'attr': {'style': 'ime-mode: disabled;'}}) }}&nbsp;-&nbsp;
        {{- form_widget(form[form.vars.zip02_name], {'attr': {'style': 'ime-mode: disabled;'}}) }}
        <a class=\"btn-normal\" href=\"javascript:;\" name=\"address_input\" onclick=\"eccube.getAddress('{{ path('input_zip') }}', 'zip01', 'zip02', 'pref', 'addr01'); return false;\">住所入力</a>
    {%- endif -%}
{%- endblock zip_widget -%}

{%- block address_widget -%}
    {%- for child in form %}
        {{- form_errors(child) -}}
    {% endfor -%}
    {%- if freeze -%}
        {{- form_widget(form[form.vars.pref_name]) -}}
        {{- form_widget(form[form.vars.addr01_name]) -}}
        {{- form_widget(form[form.vars.addr02_name]) -}}
    {%- else -%}
        {{- form_widget(form[form.vars.pref_name]) -}}<br />
        {{- form_widget(form[form.vars.addr01_name], {'attr': {'style': 'ime-mode: active;'}}) -}}<br />
        {{- form_widget(form[form.vars.addr02_name], {'attr': {'style': 'ime-mode: active;'}}) -}}<br />
        {%- if help is defined and help is not empty -%}
            <span class=\"attention\">{{ help|trans({}, translation_domain) }}</span>
        {%- endif -%}
    {%- endif -%}
{%- endblock address_widget -%}
", "Form/form_layout.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/admin/Form/form_layout.twig");
    }
}
