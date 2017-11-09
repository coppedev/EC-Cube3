<?php

/* __string_template__dc952df92ebfad1a63c3a0b224215324c6aeec64c1fbe66de2752d10445e7973 */
class __TwigTemplate_42c5d6f8c184125b92790a55069a067f99ab0e6c2d6a999ef4bb1f0f25e4caac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__dc952df92ebfad1a63c3a0b224215324c6aeec64c1fbe66de2752d10445e7973", 23);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5c018e331a4a949c4fda4a990e6c9e81ef9f7751d433fc6701f48f7a252caa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c018e331a4a949c4fda4a990e6c9e81ef9f7751d433fc6701f48f7a252caa6->enter($__internal_d5c018e331a4a949c4fda4a990e6c9e81ef9f7751d433fc6701f48f7a252caa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__dc952df92ebfad1a63c3a0b224215324c6aeec64c1fbe66de2752d10445e7973"));

        // line 25
        $context["menus"] = array(0 => "store", 1 => "plugin", 2 => "plugin_list");
        // line 23
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5c018e331a4a949c4fda4a990e6c9e81ef9f7751d433fc6701f48f7a252caa6->leave($__internal_d5c018e331a4a949c4fda4a990e6c9e81ef9f7751d433fc6701f48f7a252caa6_prof);

    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        $__internal_48c0f0cfeed859daf173f358f3cb4086f01ff9d7bd5dc07855fee6e8974298eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c0f0cfeed859daf173f358f3cb4086f01ff9d7bd5dc07855fee6e8974298eb->enter($__internal_48c0f0cfeed859daf173f358f3cb4086f01ff9d7bd5dc07855fee6e8974298eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "オーナーズストア";
        
        $__internal_48c0f0cfeed859daf173f358f3cb4086f01ff9d7bd5dc07855fee6e8974298eb->leave($__internal_48c0f0cfeed859daf173f358f3cb4086f01ff9d7bd5dc07855fee6e8974298eb_prof);

    }

    // line 28
    public function block_sub_title($context, array $blocks = array())
    {
        $__internal_5b3d31ca87acd94500aac1846ab64d17938a7415bc1aa74207a7997d775409b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3d31ca87acd94500aac1846ab64d17938a7415bc1aa74207a7997d775409b4->enter($__internal_5b3d31ca87acd94500aac1846ab64d17938a7415bc1aa74207a7997d775409b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_title"));

        echo "プラグイン一覧";
        
        $__internal_5b3d31ca87acd94500aac1846ab64d17938a7415bc1aa74207a7997d775409b4->leave($__internal_5b3d31ca87acd94500aac1846ab64d17938a7415bc1aa74207a7997d775409b4_prof);

    }

    // line 30
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_bbae7c2cece12abe1c6623f7b0a8ddc5cf2bc33f2ed434cd3604f4410c3eddb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbae7c2cece12abe1c6623f7b0a8ddc5cf2bc33f2ed434cd3604f4410c3eddb7->enter($__internal_bbae7c2cece12abe1c6623f7b0a8ddc5cf2bc33f2ed434cd3604f4410c3eddb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 31
        echo "<script>
    function changeActionSubmit(action, form_name) {
        document.forms[form_name].action = action;
        document.forms[form_name].submit();
        return false;
    }
    \$(function(){
        \$('#readmeModal').on('show.bs.modal', function(event) {
            var target = \$(event.relatedTarget);
            var modal = \$(this)
            modal.find('#readmeModalLabel').text(target.data('name'));
            modal.find('#readmeContent').html(target.data('readme'));
        });
    });
</script>
";
        
        $__internal_bbae7c2cece12abe1c6623f7b0a8ddc5cf2bc33f2ed434cd3604f4410c3eddb7->leave($__internal_bbae7c2cece12abe1c6623f7b0a8ddc5cf2bc33f2ed434cd3604f4410c3eddb7_prof);

    }

    // line 48
    public function block_main($context, array $blocks = array())
    {
        $__internal_1d99f34cf53a13185f8f7f1eecfb1a83d5afbc8d4dade5bf83177ef270f42d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d99f34cf53a13185f8f7f1eecfb1a83d5afbc8d4dade5bf83177ef270f42d06->enter($__internal_1d99f34cf53a13185f8f7f1eecfb1a83d5afbc8d4dade5bf83177ef270f42d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 49
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_owners_install");
        echo "\" class=\"btn btn-info btn-xs pull-right\">プラグインの新規追加はこちら</a>
                    <h3 class=\"box-title\">オーナーズストアプラグイン</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    ";
        // line 57
        echo twig_include($this->env, $context, "Store/plugin_table.twig", array("Plugins" => ($context["officialPlugins"] ?? $this->getContext($context, "officialPlugins"))));
        echo "
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class=\"box\">
                <div class=\"box-header\">
                    <a href=\"";
        // line 63
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_install");
        echo "\" class=\"btn btn-info btn-xs pull-right\">プラグインのアップロードはこちら</a>
                    <h3 class=\"box-title\">独自プラグイン</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    ";
        // line 67
        echo twig_include($this->env, $context, "Store/plugin_table.twig", array("Plugins" => ($context["unofficialPlugins"] ?? $this->getContext($context, "unofficialPlugins"))));
        echo "
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            ";
        // line 70
        if ( !twig_test_empty(($context["unregisterdPlugins"] ?? $this->getContext($context, "unregisterdPlugins")))) {
            // line 71
            echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">未登録プラグイン</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    ";
            // line 76
            echo twig_include($this->env, $context, "Store/unregisterd_plugin_table.twig", array("Plugins" => ($context["unregisterdPlugins"] ?? $this->getContext($context, "unregisterdPlugins"))));
            echo "
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            ";
        }
        // line 80
        echo "        </div><!-- /.col -->
    </div>
";
        
        $__internal_1d99f34cf53a13185f8f7f1eecfb1a83d5afbc8d4dade5bf83177ef270f42d06->leave($__internal_1d99f34cf53a13185f8f7f1eecfb1a83d5afbc8d4dade5bf83177ef270f42d06_prof);

    }

    // line 83
    public function block_modal($context, array $blocks = array())
    {
        $__internal_583c8cf4057f4cf0fb5b9c9e540ec5e38426890388f777c277f2ce8f7d0b9bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583c8cf4057f4cf0fb5b9c9e540ec5e38426890388f777c277f2ce8f7d0b9bf0->enter($__internal_583c8cf4057f4cf0fb5b9c9e540ec5e38426890388f777c277f2ce8f7d0b9bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 84
        echo "<div class=\"modal fade\" id=\"readmeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"readmeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><svg class=\"cb cb-close\" aria-hidden=\"true\"><use xlink:href=\"#cb-close\"></svg></button>
                <h4 class=\"modal-title\" id=\"readmeModalLabel\">";
        // line 89
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\" id=\"readmeContent\">
                    ";
        // line 94
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_583c8cf4057f4cf0fb5b9c9e540ec5e38426890388f777c277f2ce8f7d0b9bf0->leave($__internal_583c8cf4057f4cf0fb5b9c9e540ec5e38426890388f777c277f2ce8f7d0b9bf0_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__dc952df92ebfad1a63c3a0b224215324c6aeec64c1fbe66de2752d10445e7973";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 94,  172 => 89,  165 => 84,  159 => 83,  150 => 80,  143 => 76,  136 => 71,  134 => 70,  128 => 67,  121 => 63,  112 => 57,  105 => 53,  99 => 49,  93 => 48,  71 => 31,  65 => 30,  53 => 28,  41 => 27,  34 => 23,  32 => 25,  11 => 23,);
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

{% extends 'default_frame.twig' %}

{% set menus = ['store', 'plugin', 'plugin_list'] %}

{% block title %}オーナーズストア{% endblock %}
{% block sub_title %}プラグイン一覧{% endblock %}

{% block javascript %}
<script>
    function changeActionSubmit(action, form_name) {
        document.forms[form_name].action = action;
        document.forms[form_name].submit();
        return false;
    }
    \$(function(){
        \$('#readmeModal').on('show.bs.modal', function(event) {
            var target = \$(event.relatedTarget);
            var modal = \$(this)
            modal.find('#readmeModalLabel').text(target.data('name'));
            modal.find('#readmeContent').html(target.data('readme'));
        });
    });
</script>
{% endblock javascript %}

{% block main %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <a href=\"{{ url('admin_store_plugin_owners_install') }}\" class=\"btn btn-info btn-xs pull-right\">プラグインの新規追加はこちら</a>
                    <h3 class=\"box-title\">オーナーズストアプラグイン</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    {{ include('Store/plugin_table.twig', {'Plugins': officialPlugins}) }}
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class=\"box\">
                <div class=\"box-header\">
                    <a href=\"{{ url('admin_store_plugin_install') }}\" class=\"btn btn-info btn-xs pull-right\">プラグインのアップロードはこちら</a>
                    <h3 class=\"box-title\">独自プラグイン</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    {{ include('Store/plugin_table.twig', {'Plugins': unofficialPlugins}) }}
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            {% if unregisterdPlugins is not empty %}
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">未登録プラグイン</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    {{ include('Store/unregisterd_plugin_table.twig', {'Plugins': unregisterdPlugins}) }}
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            {% endif %}
        </div><!-- /.col -->
    </div>
{% endblock %}
{% block modal %}
<div class=\"modal fade\" id=\"readmeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"readmeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><svg class=\"cb cb-close\" aria-hidden=\"true\"><use xlink:href=\"#cb-close\"></svg></button>
                <h4 class=\"modal-title\" id=\"readmeModalLabel\">{# プラグイン名 #}</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\" id=\"readmeContent\">
                    {# README #}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "__string_template__dc952df92ebfad1a63c3a0b224215324c6aeec64c1fbe66de2752d10445e7973", "");
    }
}
