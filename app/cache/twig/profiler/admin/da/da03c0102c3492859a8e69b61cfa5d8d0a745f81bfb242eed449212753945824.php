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
        $__internal_71f4309ee0f092ed1542f2ac582a34359044ed2f671df604b1feee4759aad988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f4309ee0f092ed1542f2ac582a34359044ed2f671df604b1feee4759aad988->enter($__internal_71f4309ee0f092ed1542f2ac582a34359044ed2f671df604b1feee4759aad988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/bootstrap_3_horizontal_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71f4309ee0f092ed1542f2ac582a34359044ed2f671df604b1feee4759aad988->leave($__internal_71f4309ee0f092ed1542f2ac582a34359044ed2f671df604b1feee4759aad988_prof);

    }

    // line 3
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_af12af82e620f8084ea0c4594f554f9bb05f9dd512778a18d7c8cd8b54b1f459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af12af82e620f8084ea0c4594f554f9bb05f9dd512778a18d7c8cd8b54b1f459->enter($__internal_af12af82e620f8084ea0c4594f554f9bb05f9dd512778a18d7c8cd8b54b1f459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_af12af82e620f8084ea0c4594f554f9bb05f9dd512778a18d7c8cd8b54b1f459->leave($__internal_af12af82e620f8084ea0c4594f554f9bb05f9dd512778a18d7c8cd8b54b1f459_prof);

    }

    // line 15
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_b91bf297aed5ec3a4a5dc2f86df4296fcf04a933b5d7c402d9c0d0b1a09a5c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91bf297aed5ec3a4a5dc2f86df4296fcf04a933b5d7c402d9c0d0b1a09a5c32->enter($__internal_b91bf297aed5ec3a4a5dc2f86df4296fcf04a933b5d7c402d9c0d0b1a09a5c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

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
        
        $__internal_b91bf297aed5ec3a4a5dc2f86df4296fcf04a933b5d7c402d9c0d0b1a09a5c32->leave($__internal_b91bf297aed5ec3a4a5dc2f86df4296fcf04a933b5d7c402d9c0d0b1a09a5c32_prof);

    }

    // line 24
    public function block_zip_widget($context, array $blocks = array())
    {
        $__internal_e796ebf8bc27e3809fdc6073aa0969302f0dc041c3e7c6c0be5eb124589a0e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e796ebf8bc27e3809fdc6073aa0969302f0dc041c3e7c6c0be5eb124589a0e04->enter($__internal_e796ebf8bc27e3809fdc6073aa0969302f0dc041c3e7c6c0be5eb124589a0e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zip_widget"));

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
        
        $__internal_e796ebf8bc27e3809fdc6073aa0969302f0dc041c3e7c6c0be5eb124589a0e04->leave($__internal_e796ebf8bc27e3809fdc6073aa0969302f0dc041c3e7c6c0be5eb124589a0e04_prof);

    }

    // line 33
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_213b51863a8f94a2ba736d507cb7ea075e9d5a86e0ef83db48451c7681379d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213b51863a8f94a2ba736d507cb7ea075e9d5a86e0ef83db48451c7681379d98->enter($__internal_213b51863a8f94a2ba736d507cb7ea075e9d5a86e0ef83db48451c7681379d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 34
        echo "<div class=\"radio-inline\">
        ";
        // line 35
        $this->displayParentBlock("radio_widget", $context, $blocks);
        echo "
    </div>";
        
        $__internal_213b51863a8f94a2ba736d507cb7ea075e9d5a86e0ef83db48451c7681379d98->leave($__internal_213b51863a8f94a2ba736d507cb7ea075e9d5a86e0ef83db48451c7681379d98_prof);

    }

    // line 39
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ac54987e5037bcff5fc688e150a7348bf5722fb13375ecfe6791fe1cfd76fb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac54987e5037bcff5fc688e150a7348bf5722fb13375ecfe6791fe1cfd76fb52->enter($__internal_ac54987e5037bcff5fc688e150a7348bf5722fb13375ecfe6791fe1cfd76fb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 40
        echo "<div class=\"checkbox-inline\">
        ";
        // line 41
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
        echo "
    </div>";
        
        $__internal_ac54987e5037bcff5fc688e150a7348bf5722fb13375ecfe6791fe1cfd76fb52->leave($__internal_ac54987e5037bcff5fc688e150a7348bf5722fb13375ecfe6791fe1cfd76fb52_prof);

    }

    // line 45
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_fc2f91604fd93d8291bf39feeec8a0c658dbc3d592f1411e814efedd2028105b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2f91604fd93d8291bf39feeec8a0c658dbc3d592f1411e814efedd2028105b->enter($__internal_fc2f91604fd93d8291bf39feeec8a0c658dbc3d592f1411e814efedd2028105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_fc2f91604fd93d8291bf39feeec8a0c658dbc3d592f1411e814efedd2028105b->leave($__internal_fc2f91604fd93d8291bf39feeec8a0c658dbc3d592f1411e814efedd2028105b_prof);

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
