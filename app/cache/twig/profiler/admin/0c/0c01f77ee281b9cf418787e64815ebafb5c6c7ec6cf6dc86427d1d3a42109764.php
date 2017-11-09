<?php

/* alert.twig */
class __TwigTemplate_bf78e32032b61c2d3ea9503a69b271ff56fe0dc2d30a5a4d0325e559c04b8c8e extends Twig_Template
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
        $__internal_cc7606dfb340410438ec394dfd60f43cc9dec044d9db2b29a397b46fd82e0ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7606dfb340410438ec394dfd60f43cc9dec044d9db2b29a397b46fd82e0ee2->enter($__internal_cc7606dfb340410438ec394dfd60f43cc9dec044d9db2b29a397b46fd82e0ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alert.twig"));

        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.success"), "method")) {
            // line 23
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "        <div class=\"row\">
            <div class=\"alert alert-success alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 32
        echo "
";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.info"), "method")) {
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                echo "        <div class=\"row\">
            <div class=\"alert alert-info alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.warning"), "method")) {
            // line 44
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 45
                echo "        <div class=\"row\">
            <div class=\"alert alert-warning alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.danger"), "method")) {
            // line 54
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.danger"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 55
                echo "        <div class=\"row\">
            <div class=\"alert alert-danger alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 63
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.error"), "method")) {
            // line 64
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 65
                echo "        <div class=\"row\">
            <div class=\"alert alert-danger alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cc7606dfb340410438ec394dfd60f43cc9dec044d9db2b29a397b46fd82e0ee2->leave($__internal_cc7606dfb340410438ec394dfd60f43cc9dec044d9db2b29a397b46fd82e0ee2_prof);

    }

    public function getTemplateName()
    {
        return "alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 68,  124 => 65,  119 => 64,  117 => 63,  106 => 58,  101 => 55,  96 => 54,  94 => 53,  83 => 48,  78 => 45,  73 => 44,  71 => 43,  60 => 38,  55 => 35,  50 => 34,  48 => 33,  45 => 32,  34 => 27,  29 => 24,  24 => 23,  22 => 22,);
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
{% if app.session.flashBag.has('eccube.admin.success') %}
    {% for message in app.session.flashBag.get('eccube.admin.success') %}
        <div class=\"row\">
            <div class=\"alert alert-success alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> {{ message|trans }}
            </div>
        </div>
    {% endfor %}
{% endif %}

{% if app.session.flashBag.has('eccube.admin.info') %}
    {% for message in app.session.flashBag.get('eccube.admin.info') %}
        <div class=\"row\">
            <div class=\"alert alert-info alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> {{ message|trans }}
            </div>
        </div>
    {% endfor %}
{% endif %}
{% if app.session.flashBag.has('eccube.admin.warning') %}
    {% for message in app.session.flashBag.get('eccube.admin.warning') %}
        <div class=\"row\">
            <div class=\"alert alert-warning alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> {{ message|trans }}
            </div>
        </div>
    {% endfor %}
{% endif %}
{% if app.session.flashBag.has('eccube.admin.danger') %}
    {% for message in app.session.flashBag.get('eccube.admin.danger') %}
        <div class=\"row\">
            <div class=\"alert alert-danger alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> {{ message|trans }}
            </div>
        </div>
    {% endfor %}
{% endif %}
{% if app.session.flashBag.has('eccube.admin.error') %}
    {% for message in app.session.flashBag.get('eccube.admin.error') %}
        <div class=\"row\">
            <div class=\"alert alert-danger alert-dismissable alert-section\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> {{ message|trans }}
            </div>
        </div>
    {% endfor %}
{% endif %}
", "alert.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/admin/alert.twig");
    }
}
