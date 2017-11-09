<?php

/* Form/form_layout.twig */
class __TwigTemplate_f090297cd377faeee39a9717a80552d5641752126407002389b406b6c3f71506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "Form/form_layout.twig", 22);
        $this->blocks = array(
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'name_widget' => array($this, 'block_name_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'fax_widget' => array($this, 'block_fax_widget'),
            'zip_widget' => array($this, 'block_zip_widget'),
            'address_widget' => array($this, 'block_address_widget'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_301fe8016e2f11696c5d5e1c480cd35355f8fe10c8042959b2fc58ab68d15308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301fe8016e2f11696c5d5e1c480cd35355f8fe10c8042959b2fc58ab68d15308->enter($__internal_301fe8016e2f11696c5d5e1c480cd35355f8fe10c8042959b2fc58ab68d15308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/form_layout.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_301fe8016e2f11696c5d5e1c480cd35355f8fe10c8042959b2fc58ab68d15308->leave($__internal_301fe8016e2f11696c5d5e1c480cd35355f8fe10c8042959b2fc58ab68d15308_prof);

    }

    // line 24
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_93e1778b6c2ce5b89914282bafc1f8184ddab6f899212f6a25c2c8824bb895e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e1778b6c2ce5b89914282bafc1f8184ddab6f899212f6a25c2c8824bb895e8->enter($__internal_93e1778b6c2ce5b89914282bafc1f8184ddab6f899212f6a25c2c8824bb895e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 25
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "freeze_display_text", array())) {
            // line 26
            echo "<div class=\"dl_table\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 27
            if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
                // line 28
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            }
            // line 30
            $this->displayBlock("form_rows", $context, $blocks);
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            // line 32
            echo "</div>";
        } else {
            // line 34
            $this->displayBlock("form_rows", $context, $blocks);
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        
        $__internal_93e1778b6c2ce5b89914282bafc1f8184ddab6f899212f6a25c2c8824bb895e8->leave($__internal_93e1778b6c2ce5b89914282bafc1f8184ddab6f899212f6a25c2c8824bb895e8_prof);

    }

    // line 39
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6f7f00f41d87faf989adea4901e2820b6a7df17564b4da715633341ea82a4bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7f00f41d87faf989adea4901e2820b6a7df17564b4da715633341ea82a4bf0->enter($__internal_6f7f00f41d87faf989adea4901e2820b6a7df17564b4da715633341ea82a4bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 40
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "freeze_display_text", array())) {
            // line 41
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 42
            echo "    <dl>
        <dt>";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "</dt>
        <dd class=\"form-group";
            // line 44
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                echo " has-error";
            }
            if (twig_in_filter("middle", $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()))) {
                echo " input_name";
            }
            if (twig_in_filter("short", $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()))) {
                echo " input_tel";
            }
            if (twig_in_filter("zip", $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()))) {
                echo " input_zip";
            }
            echo "\">
            ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </dd>
    </dl>";
        } else {
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        }
        
        $__internal_6f7f00f41d87faf989adea4901e2820b6a7df17564b4da715633341ea82a4bf0->leave($__internal_6f7f00f41d87faf989adea4901e2820b6a7df17564b4da715633341ea82a4bf0_prof);

    }

    // line 55
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8d1fa8ad00756bee016be4aa1108599864747f39040081e5d54db02fafd901b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1fa8ad00756bee016be4aa1108599864747f39040081e5d54db02fafd901b8->enter($__internal_8d1fa8ad00756bee016be4aa1108599864747f39040081e5d54db02fafd901b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 56
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 57
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 59
                    if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                        // line 60
                        echo "<p class=\"errormsg text-danger\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "message", array())), "html", null, true);
                        echo "</p>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        
        $__internal_8d1fa8ad00756bee016be4aa1108599864747f39040081e5d54db02fafd901b8->leave($__internal_8d1fa8ad00756bee016be4aa1108599864747f39040081e5d54db02fafd901b8_prof);

    }

    // line 69
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_1ae3be00b1d6d916b8e7613fb499c3670c72c23728e1996d8d06ee80a38b6a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae3be00b1d6d916b8e7613fb499c3670c72c23728e1996d8d06ee80a38b6a24->enter($__internal_1ae3be00b1d6d916b8e7613fb499c3670c72c23728e1996d8d06ee80a38b6a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 70
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 71
        if ((($context["freeze"] ?? $this->getContext($context, "freeze")) == false)) {
            // line 72
            if ((array_key_exists("help", $context) &&  !twig_test_empty(($context["help"] ?? $this->getContext($context, "help"))))) {
                // line 73
                echo "<p class=\"mini\"><span class=\"attention\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help"] ?? $this->getContext($context, "help")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span></p>";
            }
        }
        
        $__internal_1ae3be00b1d6d916b8e7613fb499c3670c72c23728e1996d8d06ee80a38b6a24->leave($__internal_1ae3be00b1d6d916b8e7613fb499c3670c72c23728e1996d8d06ee80a38b6a24_prof);

    }

    // line 78
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4f8dd51c0acd0e309e0fa9ae063a7fa1087648f424c698b7542be46199ddbae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8dd51c0acd0e309e0fa9ae063a7fa1087648f424c698b7542be46199ddbae0->enter($__internal_4f8dd51c0acd0e309e0fa9ae063a7fa1087648f424c698b7542be46199ddbae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 79
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 80
            $context["type"] = "hidden";
            // line 81
            if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                // line 82
                echo nl2br(twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter(($context["value"] ?? $this->getContext($context, "value")), "")) : ("")), "html", null, true));
            }
        }
        // line 85
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4f8dd51c0acd0e309e0fa9ae063a7fa1087648f424c698b7542be46199ddbae0->leave($__internal_4f8dd51c0acd0e309e0fa9ae063a7fa1087648f424c698b7542be46199ddbae0_prof);

    }

    // line 88
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_14f6ebc999fa9542273ec0e574dd1fd7c0094737789d412c16cf235134a844c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f6ebc999fa9542273ec0e574dd1fd7c0094737789d412c16cf235134a844c2->enter($__internal_14f6ebc999fa9542273ec0e574dd1fd7c0094737789d412c16cf235134a844c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 89
        if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
            // line 90
            echo "<div style=\"display: none\">";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 92
            echo "</div>";
        } else {
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        }
        
        $__internal_14f6ebc999fa9542273ec0e574dd1fd7c0094737789d412c16cf235134a844c2->leave($__internal_14f6ebc999fa9542273ec0e574dd1fd7c0094737789d412c16cf235134a844c2_prof);

    }

    // line 98
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fa8597d55520623d441b20e424fcc6d43eadd388013299075e190b8e85079f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8597d55520623d441b20e424fcc6d43eadd388013299075e190b8e85079f91->enter($__internal_fa8597d55520623d441b20e424fcc6d43eadd388013299075e190b8e85079f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 99
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 100
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 102
            $this->displayParentBlock("textarea_widget", $context, $blocks);
            // line 103
            if ((array_key_exists("help", $context) &&  !twig_test_empty(($context["help"] ?? $this->getContext($context, "help"))))) {
                // line 104
                echo "<p class=\"mini\"><span class=\"attention\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help"] ?? $this->getContext($context, "help")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span></p>";
            }
        }
        
        $__internal_fa8597d55520623d441b20e424fcc6d43eadd388013299075e190b8e85079f91->leave($__internal_fa8597d55520623d441b20e424fcc6d43eadd388013299075e190b8e85079f91_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_de36a03871246b392feefe61bae9062105b25bc4e0fbf37a9448113b42369f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de36a03871246b392feefe61bae9062105b25bc4e0fbf37a9448113b42369f55->enter($__internal_de36a03871246b392feefe61bae9062105b25bc4e0fbf37a9448113b42369f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 111
            echo "        ";
            $context["flag"] = false;
            // line 112
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
                // line 113
                echo "            ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    // line 114
                    if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                        // line 115
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                        echo "
                ";
                    }
                    // line 117
                    echo "                <input type=\"hidden\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                    echo "\" ";
                    $this->displayBlock("widget_attributes", $context, $blocks);
                    echo " />
                ";
                    // line 118
                    $context["flag"] = true;
                    // line 119
                    echo "            ";
                }
                // line 120
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
            // line 121
            echo "        ";
            if ((($context["flag"] ?? $this->getContext($context, "flag")) == false)) {
                echo "<input type=\"hidden\" value=\"\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo " />";
            }
        } else {
            // line 123
            $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_de36a03871246b392feefe61bae9062105b25bc4e0fbf37a9448113b42369f55->leave($__internal_de36a03871246b392feefe61bae9062105b25bc4e0fbf37a9448113b42369f55_prof);

    }

    // line 128
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_247602117afa8efbd447ac85d3f960496fdbe3ba527b4ba366f359b25480464f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247602117afa8efbd447ac85d3f960496fdbe3ba527b4ba366f359b25480464f->enter($__internal_247602117afa8efbd447ac85d3f960496fdbe3ba527b4ba366f359b25480464f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 129
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 130
            if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                // line 131
                if ($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->isObject($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()))) {
                    // line 132
                    echo "                ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "data", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "data", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()))) : ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()))), "html", null, true);
                    echo "
            ";
                } else {
                    // line 134
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
                    foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                        // line 135
                        echo "                    ";
                        if ((sprintf($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array())) === sprintf($this->getAttribute($context["choice"], "value", array())))) {
                            // line 136
                            echo "                        ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "label", array()), "html", null, true);
                            echo "
                    ";
                        }
                        // line 138
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "            ";
                }
            }
            // line 141
            echo "<input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array()), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()))) : ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()))), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " />";
        } else {
            // line 143
            $this->displayParentBlock("choice_widget_expanded", $context, $blocks);
        }
        
        $__internal_247602117afa8efbd447ac85d3f960496fdbe3ba527b4ba366f359b25480464f->leave($__internal_247602117afa8efbd447ac85d3f960496fdbe3ba527b4ba366f359b25480464f_prof);

    }

    // line 148
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2eb072d179ef1f4b43b1b3b58a1201916bb1d135448ce2265c8c4451786ab5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb072d179ef1f4b43b1b3b58a1201916bb1d135448ce2265c8c4451786ab5f3->enter($__internal_2eb072d179ef1f4b43b1b3b58a1201916bb1d135448ce2265c8c4451786ab5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 149
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 150
            if (($context["checked"] ?? $this->getContext($context, "checked"))) {
                // line 151
                if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                    // line 152
                    $this->displayBlock("form_label", $context, $blocks);
                }
                // line 154
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
            // line 157
            $this->displayParentBlock("checkbox_widget", $context, $blocks);
        }
        
        $__internal_2eb072d179ef1f4b43b1b3b58a1201916bb1d135448ce2265c8c4451786ab5f3->leave($__internal_2eb072d179ef1f4b43b1b3b58a1201916bb1d135448ce2265c8c4451786ab5f3_prof);

    }

    // line 161
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_be2f6ba9d5ec89be4b55db47c628150a0929d4e9d7578ad19d60beb762f3e8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2f6ba9d5ec89be4b55db47c628150a0929d4e9d7578ad19d60beb762f3e8f1->enter($__internal_be2f6ba9d5ec89be4b55db47c628150a0929d4e9d7578ad19d60beb762f3e8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 162
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 163
            if (($context["checked"] ?? $this->getContext($context, "checked"))) {
                // line 164
                if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                    // line 165
                    $this->displayBlock("form_label", $context, $blocks);
                }
                // line 167
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
            // line 170
            $this->displayParentBlock("radio_widget", $context, $blocks);
        }
        
        $__internal_be2f6ba9d5ec89be4b55db47c628150a0929d4e9d7578ad19d60beb762f3e8f1->leave($__internal_be2f6ba9d5ec89be4b55db47c628150a0929d4e9d7578ad19d60beb762f3e8f1_prof);

    }

    // line 175
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_083ab01cde91262afaae908126b0d085d50b461b5e2382818d4be6c1e3c2b7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083ab01cde91262afaae908126b0d085d50b461b5e2382818d4be6c1e3c2b7c4->enter($__internal_083ab01cde91262afaae908126b0d085d50b461b5e2382818d4be6c1e3c2b7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 176
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 177
            echo "<input type=\"hidden\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "html", null, true);
            echo "\" />";
        } else {
            // line 179
            $this->displayParentBlock("password_widget", $context, $blocks);
        }
        
        $__internal_083ab01cde91262afaae908126b0d085d50b461b5e2382818d4be6c1e3c2b7c4->leave($__internal_083ab01cde91262afaae908126b0d085d50b461b5e2382818d4be6c1e3c2b7c4_prof);

    }

    // line 184
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7424cc489f6ca2704aca7dcc17df3bc552ed14261f79b1b6b69ea3651d2e92ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7424cc489f6ca2704aca7dcc17df3bc552ed14261f79b1b6b69ea3651d2e92ee->enter($__internal_7424cc489f6ca2704aca7dcc17df3bc552ed14261f79b1b6b69ea3651d2e92ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 185
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 186
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
                // line 187
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()))) {
                    // line 188
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                    // line 189
                    if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                        echo "/";
                    }
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
        } else {
            // line 193
            $this->displayParentBlock("date_widget", $context, $blocks);
        }
        
        $__internal_7424cc489f6ca2704aca7dcc17df3bc552ed14261f79b1b6b69ea3651d2e92ee->leave($__internal_7424cc489f6ca2704aca7dcc17df3bc552ed14261f79b1b6b69ea3651d2e92ee_prof);

    }

    // line 202
    public function block_name_widget($context, array $blocks = array())
    {
        $__internal_490b7550f914223034cd6112c3269df468e3cecd73169e33b5fd6af8abca9407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490b7550f914223034cd6112c3269df468e3cecd73169e33b5fd6af8abca9407->enter($__internal_490b7550f914223034cd6112c3269df468e3cecd73169e33b5fd6af8abca9407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name_widget"));

        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 204
            if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
                // line 205
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            } else {
                // line 207
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 211
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_490b7550f914223034cd6112c3269df468e3cecd73169e33b5fd6af8abca9407->leave($__internal_490b7550f914223034cd6112c3269df468e3cecd73169e33b5fd6af8abca9407_prof);

    }

    // line 215
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_55bbc72fafe3169cf10da62e1ddfca1579cfd4e19013add1cae9b4f211125176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bbc72fafe3169cf10da62e1ddfca1579cfd4e19013add1cae9b4f211125176->enter($__internal_55bbc72fafe3169cf10da62e1ddfca1579cfd4e19013add1cae9b4f211125176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 216
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
            // line 217
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("type" => "tel", "attr" => array("style" => "ime-mode: disabled;")));
            // line 218
            if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
                // line 219
                if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                    // line 220
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()))) {
                        // line 221
                        if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                            echo "&nbsp;-&nbsp;";
                        }
                    }
                }
            } else {
                // line 225
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    echo "&nbsp;-&nbsp;";
                }
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
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 229
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_55bbc72fafe3169cf10da62e1ddfca1579cfd4e19013add1cae9b4f211125176->leave($__internal_55bbc72fafe3169cf10da62e1ddfca1579cfd4e19013add1cae9b4f211125176_prof);

    }

    // line 233
    public function block_fax_widget($context, array $blocks = array())
    {
        $__internal_d8cbee3378fb61188897c42af943b47f1a328fa2b025e367b6f2b5487cea968f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cbee3378fb61188897c42af943b47f1a328fa2b025e367b6f2b5487cea968f->enter($__internal_d8cbee3378fb61188897c42af943b47f1a328fa2b025e367b6f2b5487cea968f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fax_widget"));

        // line 234
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
            // line 235
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 236
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
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 239
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d8cbee3378fb61188897c42af943b47f1a328fa2b025e367b6f2b5487cea968f->leave($__internal_d8cbee3378fb61188897c42af943b47f1a328fa2b025e367b6f2b5487cea968f_prof);

    }

    // line 243
    public function block_zip_widget($context, array $blocks = array())
    {
        $__internal_fc552f102965d20a08f8310559000e74d7e86a4e8ffbff0ce4c5130ec9eb8d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc552f102965d20a08f8310559000e74d7e86a4e8ffbff0ce4c5130ec9eb8d1b->enter($__internal_fc552f102965d20a08f8310559000e74d7e86a4e8ffbff0ce4c5130ec9eb8d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zip_widget"));

        // line 244
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 245
            if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                echo "〒&nbsp;";
            }
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "zip01_name", array()), array(), "array"), 'widget');
            if (($context["freeze_display_text"] ?? $this->getContext($context, "freeze_display_text"))) {
                echo "&nbsp;-&nbsp;";
            }
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "zip02_name", array()), array(), "array"), 'widget');
        } else {
            // line 247
            echo "〒";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "zip01_name", array()), array(), "array"), 'widget', array("id" => "zip01", "attr" => array("style" => "ime-mode: disabled;", "pattern" => "\\d*")));
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "zip02_name", array()), array(), "array"), 'widget', array("id" => "zip02", "attr" => array("style" => "ime-mode: disabled;", "pattern" => "\\d*")));
            echo " <span class=\"question-circle\"><svg class=\"cb cb-question\"><use xlink:href=\"#cb-question\" /></svg></span> <a href=\"http://www.post.japanpost.jp/zipcode/\" target=\"_blank\">郵便番号検索</a>";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 249
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "<div class=\"zip-search\"><button type=\"button\" id=\"zip-search\" class=\"btn btn-default btn-sm\">郵便番号から自動入力</button></div>";
        }
        
        $__internal_fc552f102965d20a08f8310559000e74d7e86a4e8ffbff0ce4c5130ec9eb8d1b->leave($__internal_fc552f102965d20a08f8310559000e74d7e86a4e8ffbff0ce4c5130ec9eb8d1b_prof);

    }

    // line 255
    public function block_address_widget($context, array $blocks = array())
    {
        $__internal_9c6cdab35ac3d7ec73cb25f539462f7dbf3e092170b58b8bf285a70716599471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6cdab35ac3d7ec73cb25f539462f7dbf3e092170b58b8bf285a70716599471->enter($__internal_9c6cdab35ac3d7ec73cb25f539462f7dbf3e092170b58b8bf285a70716599471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "address_widget"));

        // line 256
        echo "<div class=\"form-inline form-group input_zip\">";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "pref_name", array()), array(), "array"), 'widget', array("id" => "pref"));
        // line 258
        echo "</div>";
        // line 259
        if (($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 260
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "addr01_name", array()), array(), "array"), 'widget');
            // line 261
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "addr02_name", array()), array(), "array"), 'widget');
        } else {
            // line 263
            echo "<div class=\"form-group\">";
            // line 264
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "addr01_name", array()), array(), "array"), 'widget', array("id" => "addr01", "attr" => array("style" => "ime-mode: active;", "placeholder" => "form.address1.help")));
            echo "<br />
        </div>
        <div class=\"form-group\">";
            // line 267
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "addr02_name", array()), array(), "array"), 'widget', array("id" => "addr02", "attr" => array("style" => "ime-mode: active;", "placeholder" => "form.address2.help")));
            echo "<br />
        </div>";
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 270
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_9c6cdab35ac3d7ec73cb25f539462f7dbf3e092170b58b8bf285a70716599471->leave($__internal_9c6cdab35ac3d7ec73cb25f539462f7dbf3e092170b58b8bf285a70716599471_prof);

    }

    // line 275
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0e77921b4ae47c57a8f22600e6e972d321b800689a7621f014af4d1d860f82f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e77921b4ae47c57a8f22600e6e972d321b800689a7621f014af4d1d860f82f0->enter($__internal_0e77921b4ae47c57a8f22600e6e972d321b800689a7621f014af4d1d860f82f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 276
        $this->displayParentBlock("form_label", $context, $blocks);
        // line 277
        if ( !($context["freeze"] ?? $this->getContext($context, "freeze"))) {
            // line 278
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                echo "<span class=\"required\">必須</span>";
            }
        }
        
        $__internal_0e77921b4ae47c57a8f22600e6e972d321b800689a7621f014af4d1d860f82f0->leave($__internal_0e77921b4ae47c57a8f22600e6e972d321b800689a7621f014af4d1d860f82f0_prof);

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
        return array (  810 => 278,  808 => 277,  806 => 276,  800 => 275,  788 => 270,  784 => 269,  780 => 267,  775 => 264,  773 => 263,  770 => 261,  768 => 260,  766 => 259,  764 => 258,  762 => 257,  760 => 256,  754 => 255,  746 => 251,  740 => 249,  736 => 248,  730 => 247,  720 => 245,  718 => 244,  712 => 243,  701 => 239,  697 => 238,  681 => 236,  679 => 235,  662 => 234,  656 => 233,  645 => 229,  641 => 228,  624 => 225,  617 => 221,  615 => 220,  613 => 219,  611 => 218,  609 => 217,  592 => 216,  586 => 215,  575 => 211,  571 => 210,  564 => 207,  561 => 205,  559 => 204,  555 => 203,  549 => 202,  541 => 193,  523 => 189,  521 => 188,  519 => 187,  502 => 186,  500 => 185,  494 => 184,  486 => 179,  479 => 177,  477 => 176,  471 => 175,  463 => 170,  452 => 167,  449 => 165,  447 => 164,  445 => 163,  443 => 162,  437 => 161,  429 => 157,  418 => 154,  415 => 152,  413 => 151,  411 => 150,  409 => 149,  403 => 148,  395 => 143,  388 => 141,  384 => 139,  378 => 138,  372 => 136,  369 => 135,  364 => 134,  358 => 132,  356 => 131,  354 => 130,  352 => 129,  346 => 128,  338 => 123,  330 => 121,  316 => 120,  313 => 119,  311 => 118,  304 => 117,  299 => 115,  297 => 114,  294 => 113,  276 => 112,  273 => 111,  271 => 110,  265 => 109,  254 => 104,  252 => 103,  250 => 102,  247 => 100,  245 => 99,  239 => 98,  231 => 94,  228 => 92,  226 => 91,  224 => 90,  222 => 89,  216 => 88,  209 => 85,  205 => 82,  203 => 81,  201 => 80,  199 => 79,  193 => 78,  182 => 73,  180 => 72,  178 => 71,  176 => 70,  170 => 69,  154 => 60,  152 => 59,  148 => 58,  146 => 57,  144 => 56,  138 => 55,  130 => 51,  128 => 50,  122 => 46,  118 => 45,  103 => 44,  99 => 43,  96 => 42,  94 => 41,  92 => 40,  86 => 39,  78 => 35,  76 => 34,  73 => 32,  71 => 31,  69 => 30,  66 => 28,  64 => 27,  60 => 26,  58 => 25,  52 => 24,  11 => 22,);
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
{%- extends 'bootstrap_3_layout.html.twig' -%}

{%- block form_widget_compound -%}
    {%- if form.vars.freeze_display_text -%}
        <div class=\"dl_table\" {{ block('widget_container_attributes') }}>
            {%- if form.parent is empty and errors|length > 0 -%}
                    {{- form_errors(form) -}}
            {%- endif -%}
            {{- block('form_rows') -}}
            {{- form_rest(form) -}}
        </div>
    {%- else -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    {%- endif -%}
{%- endblock form_widget_compound -%}

{% block form_row -%}
    {%- if form.vars.freeze_display_text -%}
    {% set attr = attr|merge({class: attr.class|default('')}) %}
    <dl>
        <dt>{{ form_label(form) }}</dt>
        <dd class=\"form-group{% if not valid %} has-error{% endif %}{% if 'middle' in attr.class %} input_name{% endif %}{% if 'short' in attr.class %} input_tel{% endif %}{% if 'zip' in attr.class %} input_zip{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </dd>
    </dl>
    {%- else -%}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    {%- endif -%}
{%- endblock form_row %}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}
            {%- for error in errors -%}
                {%- if freeze_display_text -%}
                    <p class=\"errormsg text-danger\">{{ error.message |trans }}</p>
                {%- endif %}
            {%- endfor -%}
        {%- endif %}
    {%- endif %}
{%- endblock form_errors %}

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

{%- block hidden_row -%}
    {%- if freeze_display_text -%}
        <div style=\"display: none\">
            {{- form_widget(form) -}}
        </div>
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
            {% if is_object(form.vars.data) %}
                {{ form.vars.data.name|default(form.vars.data) }}
            {% else %}
                {% for choice in choices %}
                    {% if form.vars.data|format is same as (choice.value|format) %}
                        {{ choice.label }}
                    {% endif %}
                {% endfor %}
            {% endif %}
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


{%- block date_widget -%}
    {%- if freeze -%}
    {%- for child in form %}
            {%- if child.vars.value is not empty -%}
            {{ form_widget(child) }}
            {%- if loop.last == false%}/{% endif -%}
            {%- endif -%}
    {% endfor -%}
    {%- else -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock date_widget -%}


{# EC-CUBE Widget #}



{%- block name_widget -%}
    {%- for child in form %}
        {%- if freeze -%}
            {{ form_widget(child) }}
        {%- else -%}
            {{ form_widget(child) -}}
        {%- endif -%}
    {% endfor -%}
    {%- for child in form %}
        {{- form_errors(child) -}}
    {% endfor -%}
{%- endblock name_widget -%}

{%- block tel_widget -%}
    {%- for child in form %}
        {{- form_widget(child, {'type': 'tel', 'attr': {'style': 'ime-mode: disabled;'}}) -}}
        {%- if freeze -%}
            {%- if freeze_display_text -%}
                {%- if child.vars.value is not empty -%}
                    {%- if loop.last == false%}&nbsp;-&nbsp;{% endif -%}
                {%- endif -%}
            {%- endif -%}
        {%- else -%}
            {%- if loop.last == false%}&nbsp;-&nbsp;{% endif -%}
        {%- endif -%}
    {% endfor -%}
    {%- for child in form %}
        {{- form_errors(child) -}}
    {% endfor -%}
{%- endblock tel_widget -%}

{%- block fax_widget -%}
    {%- for child in form %}
        {{- form_widget(child, {'attr': {'style': 'ime-mode: disabled;'}}) -}}
        {%- if loop.last == false%}&nbsp;-&nbsp;{% endif -%}
    {% endfor -%}
    {%- for child in form %}
        {{- form_errors(child) -}}
    {% endfor -%}
{%- endblock fax_widget -%}

{%- block zip_widget -%}
    {%- if freeze -%}
        {%- if freeze_display_text -%}〒&nbsp;{%- endif -%}{{ form_widget(form[form.vars.zip01_name]) }}{%- if freeze_display_text -%}&nbsp;-&nbsp;{%- endif -%}{{- form_widget(form[form.vars.zip02_name]) }}
    {%- else -%}
        〒{{- form_widget(form[form.vars.zip01_name], {'id': 'zip01', 'attr': {'style': 'ime-mode: disabled;', 'pattern': '\\\\d*'}}) }}-{{- form_widget(form[form.vars.zip02_name], {'id': 'zip02', 'attr': {'style': 'ime-mode: disabled;', 'pattern': '\\\\d*'}}) }} <span class=\"question-circle\"><svg class=\"cb cb-question\"><use xlink:href=\"#cb-question\" /></svg></span> <a href=\"http://www.post.japanpost.jp/zipcode/\" target=\"_blank\">郵便番号検索</a>
        {%- for child in form %}
            {{- form_errors(child) -}}
        {% endfor -%}
        <div class=\"zip-search\"><button type=\"button\" id=\"zip-search\" class=\"btn btn-default btn-sm\">郵便番号から自動入力</button></div>
    {%- endif -%}
{%- endblock zip_widget -%}

{%- block address_widget -%}
    <div class=\"form-inline form-group input_zip\">
    {{- form_widget(form[form.vars.pref_name], {'id': 'pref'}) -}}
    </div>
    {%- if freeze -%}
        {{- form_widget(form[form.vars.addr01_name]) -}}
        {{- form_widget(form[form.vars.addr02_name]) -}}
    {%- else -%}
        <div class=\"form-group\">
            {{- form_widget(form[form.vars.addr01_name], {'id': 'addr01', 'attr': {'style': 'ime-mode: active;', 'placeholder': 'form.address1.help' }}) -}}<br />
        </div>
        <div class=\"form-group\">
            {{- form_widget(form[form.vars.addr02_name], {'id': 'addr02', 'attr': {'style': 'ime-mode: active;', 'placeholder': 'form.address2.help'}}) -}}<br />
        </div>
        {%- for child in form %}
            {{- form_errors(child) -}}
        {% endfor -%}
    {%- endif -%}
{%- endblock address_widget -%}

{%- block form_label -%}
    {{- parent() -}}
    {%- if not freeze -%}
        {%- if required -%}<span class=\"required\">必須</span>{%- endif -%}
    {%- endif -%}
{%- endblock -%}", "Form/form_layout.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/default/Form/form_layout.twig");
    }
}
