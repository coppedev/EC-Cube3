<?php

/* Form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_6d86a741fe2e54efbaa2874ca205337a111dddd8445edeed21898c3147ff3b8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "Form/bootstrap_3_horizontal_layout.html.twig", 1);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'zip_widget' => array($this, 'block_zip_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'money_widget' => array($this, 'block_money_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e720f2d8b2a14bce71a3a3dac223f368a4508d96cb894cffccea5096d8f60a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e720f2d8b2a14bce71a3a3dac223f368a4508d96cb894cffccea5096d8f60a1c->enter($__internal_e720f2d8b2a14bce71a3a3dac223f368a4508d96cb894cffccea5096d8f60a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/bootstrap_3_horizontal_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e720f2d8b2a14bce71a3a3dac223f368a4508d96cb894cffccea5096d8f60a1c->leave($__internal_e720f2d8b2a14bce71a3a3dac223f368a4508d96cb894cffccea5096d8f60a1c_prof);

    }

    // line 3
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_98188a40a8096dbdffa025cf316f8de313afcb8c1d253e45acde45c8656f1432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98188a40a8096dbdffa025cf316f8de313afcb8c1d253e45acde45c8656f1432->enter($__internal_98188a40a8096dbdffa025cf316f8de313afcb8c1d253e45acde45c8656f1432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 4
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 5
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert\">";
            }
            // line 6
            echo "    <ul class=\"list-unstyled\">";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "<p class=\"errormsg text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "message", array())), "html", null, true);
                echo "</p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</ul>
    ";
            // line 11
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_98188a40a8096dbdffa025cf316f8de313afcb8c1d253e45acde45c8656f1432->leave($__internal_98188a40a8096dbdffa025cf316f8de313afcb8c1d253e45acde45c8656f1432_prof);

    }

    // line 15
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_16d2620de21955a75bc043225088602629e40e14cbde67c0514f37563fbb9b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d2620de21955a75bc043225088602629e40e14cbde67c0514f37563fbb9b9d->enter($__internal_16d2620de21955a75bc043225088602629e40e14cbde67c0514f37563fbb9b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 16
        echo "<div class=\"form-group range\">";
        // line 17
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
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 19
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
        // line 21
        echo "</div>";
        
        $__internal_16d2620de21955a75bc043225088602629e40e14cbde67c0514f37563fbb9b9d->leave($__internal_16d2620de21955a75bc043225088602629e40e14cbde67c0514f37563fbb9b9d_prof);

    }

    // line 24
    public function block_zip_widget($context, array $blocks = array())
    {
        $__internal_a193697677ebde262f72453d8493aff2a8562b99d149f2de73a3b72d8d96b4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a193697677ebde262f72453d8493aff2a8562b99d149f2de73a3b72d8d96b4c1->enter($__internal_a193697677ebde262f72453d8493aff2a8562b99d149f2de73a3b72d8d96b4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zip_widget"));

        // line 25
        echo "<div class=\"form-group range\">";
        // line 26
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
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 28
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
        // line 30
        echo "</div>";
        
        $__internal_a193697677ebde262f72453d8493aff2a8562b99d149f2de73a3b72d8d96b4c1->leave($__internal_a193697677ebde262f72453d8493aff2a8562b99d149f2de73a3b72d8d96b4c1_prof);

    }

    // line 33
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_93678f972bf8030a622f076eafc5fa62a049f9c13af7ff0c9f9313b6964aace0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93678f972bf8030a622f076eafc5fa62a049f9c13af7ff0c9f9313b6964aace0->enter($__internal_93678f972bf8030a622f076eafc5fa62a049f9c13af7ff0c9f9313b6964aace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 34
        echo "<div class=\"radio-inline\">
        ";
        // line 35
        $this->displayParentBlock("radio_widget", $context, $blocks);
        echo "
    </div>";
        
        $__internal_93678f972bf8030a622f076eafc5fa62a049f9c13af7ff0c9f9313b6964aace0->leave($__internal_93678f972bf8030a622f076eafc5fa62a049f9c13af7ff0c9f9313b6964aace0_prof);

    }

    // line 39
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d159a279c2db17133a592b1aeb5821ec131663676f8c73b4231eebfbf9f21468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d159a279c2db17133a592b1aeb5821ec131663676f8c73b4231eebfbf9f21468->enter($__internal_d159a279c2db17133a592b1aeb5821ec131663676f8c73b4231eebfbf9f21468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 40
        echo "<div class=\"checkbox-inline\">
        ";
        // line 41
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
        echo "
    </div>";
        
        $__internal_d159a279c2db17133a592b1aeb5821ec131663676f8c73b4231eebfbf9f21468->leave($__internal_d159a279c2db17133a592b1aeb5821ec131663676f8c73b4231eebfbf9f21468_prof);

    }

    // line 45
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c98d41feaec72a36960a44c4a6d6058eea14f6d49c44f72b9f93006dc249e069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98d41feaec72a36960a44c4a6d6058eea14f6d49c44f72b9f93006dc249e069->enter($__internal_c98d41feaec72a36960a44c4a6d6058eea14f6d49c44f72b9f93006dc249e069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 46
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))));
        // line 47
        echo "    ";
        if (($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()) == "notmoney")) {
            // line 48
            echo "    <div class=\"input-group\">";
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 50
            echo "</div>
    ";
        } else {
            // line 52
            echo "        ";
            $this->displayParentBlock("money_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_c98d41feaec72a36960a44c4a6d6058eea14f6d49c44f72b9f93006dc249e069->leave($__internal_c98d41feaec72a36960a44c4a6d6058eea14f6d49c44f72b9f93006dc249e069_prof);

    }

    public function getTemplateName()
    {
        return "Form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 52,  233 => 50,  231 => 49,  229 => 48,  226 => 47,  224 => 46,  218 => 45,  209 => 41,  206 => 40,  200 => 39,  191 => 35,  188 => 34,  182 => 33,  175 => 30,  159 => 28,  157 => 27,  140 => 26,  138 => 25,  132 => 24,  125 => 21,  109 => 19,  107 => 18,  90 => 17,  88 => 16,  82 => 15,  70 => 11,  67 => 10,  59 => 8,  55 => 7,  53 => 6,  47 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- extends 'bootstrap_3_horizontal_layout.html.twig' -%}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <p class=\"errormsg text-danger\">{{ error.message |trans }}</p>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}

{%- block tel_widget -%}
    <div class=\"form-group range\">
        {%- for child in form %}
            {{- form_widget(child, {'attr': {'style': 'ime-mode: disabled;'}} ) -}}
            {%- if loop.last == false%}&nbsp;-&nbsp;{% endif -%}
        {% endfor -%}
    </div>
{%- endblock tel_widget -%}

{%- block zip_widget -%}
    <div class=\"form-group range\">
        {%- for child in form %}
            {{- form_widget(child, {'attr': {'style': 'ime-mode: disabled;'}} ) -}}
            {%- if loop.last == false%}&nbsp;-&nbsp;{% endif -%}
        {% endfor -%}
    </div>
{%- endblock zip_widget -%}

{% block radio_widget -%}
    <div class=\"radio-inline\">
        {{ parent() }}
    </div>
{%- endblock radio_widget %}

{% block checkbox_widget -%}
    <div class=\"checkbox-inline\">
        {{ parent() }}
    </div>
{%- endblock checkbox_widget %}

{% block money_widget -%}
    {% set attr = attr|merge({class: attr.class|default('')}) %}
    {% if attr.class == 'notmoney' %}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
    </div>
    {% else %}
        {{ parent() }}
    {% endif %}
{%- endblock money_widget %}

", "Form/bootstrap_3_horizontal_layout.html.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/admin/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
