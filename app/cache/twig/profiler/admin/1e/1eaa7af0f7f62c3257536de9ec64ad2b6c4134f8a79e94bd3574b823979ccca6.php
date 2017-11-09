<?php

/* Store/unregisterd_plugin_table.twig */
class __TwigTemplate_2c160fb239d5fda733c9b62c9651c4c80e62a277005a4f4246a33d79d60e3491 extends Twig_Template
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
        $__internal_0d9b2f74ed22a8cfafe810cb9304c1ed799a9d1e672aebabdc346fb7336f1b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9b2f74ed22a8cfafe810cb9304c1ed799a9d1e672aebabdc346fb7336f1b34->enter($__internal_0d9b2f74ed22a8cfafe810cb9304c1ed799a9d1e672aebabdc346fb7336f1b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Store/unregisterd_plugin_table.twig"));

        // line 17
        echo "<div class=\"table_list plugin-table\">
    <div class=\"table-responsive with-border\">
        <table class=\"table table-hover table-condensed\">
            <thead>
            <tr>
                <th>プラグイン</th>
                <th>バージョン</th>
                <th>コード</th>
                <th>アップデート</th>
                <th>設定</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Plugins"] ?? $this->getContext($context, "Plugins")));
        foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
            // line 31
            echo "                <form id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "name", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "name", array()), "html", null, true);
            echo "\" method=\"post\" action=\"\">
                    <tr class=\"";
            // line 32
            if (($this->getAttribute($context["Plugin"], "enable", array()) == 0)) {
                echo "active";
            }
            echo "\">
                        ";
            // line 33
            if ($this->getAttribute($context["Plugin"], "name", array(), "any", true, true)) {
                // line 34
                echo "                            <td class=\"tp\">
                                <strong>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "name", array()), "html", null, true);
                echo "</strong>
                            </td>
                        ";
            } else {
                // line 38
                echo "                            <td class=\"tp\">
                                <strong>不明</strong>
                            </td>
                        ";
            }
            // line 42
            echo "                        ";
            if ($this->getAttribute($context["Plugin"], "version", array(), "any", true, true)) {
                // line 43
                echo "                            <td class=\"tv text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "version", array()), "html", null, true);
                echo "</td>
                        ";
            } else {
                // line 45
                echo "                            <td class=\"tv text-center\">不明</td>
                        ";
            }
            // line 47
            echo "                        ";
            if ($this->getAttribute($context["Plugin"], "code", array(), "any", true, true)) {
                // line 48
                echo "                            <td class=\"tc\"><p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "code", array()), "html", null, true);
                echo "</p>
                                ";
                // line 49
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array(), "any", false, true), $this->getAttribute($context["Plugin"], "code", array()), array(), "array", false, true), "const", array(), "any", false, true), "readme", array(), "any", true, true)) {
                    // line 50
                    echo "                                    <a href=\"#\" class=\"view_readme\" data-toggle=\"modal\" data-target=\"#readmeModal\" data-name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "name", array()), "html", null, true);
                    echo "\" data-readme=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), $this->getAttribute($context["Plugin"], "code", array()), array(), "array"), "const", array()), "readme"), "html", null, true);
                    echo "\">詳細を表示</a>
                                ";
                }
                // line 52
                echo "                            </td>
                        ";
            } else {
                // line 54
                echo "                            <td class=\"tc\">不明</td>
                        ";
            }
            // line 56
            echo "                        <td class=\"tu\">
                            &nbsp;-&nbsp;
                        </td>
                        <td class=\"ta text-center\">
                            ";
            // line 60
            if ($this->getAttribute(($context["unregisterdPluginsConfigPages"] ?? null), $this->getAttribute($context["Plugin"], "code", array()), array(), "array", true, true)) {
                // line 61
                echo "                                <a href='";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["unregisterdPluginsConfigPages"] ?? $this->getContext($context, "unregisterdPluginsConfigPages")), $this->getAttribute($context["Plugin"], "code", array()), array(), "array"), "html", null, true);
                echo "'>設定</a>
                            ";
            } else {
                // line 63
                echo "                                &nbsp;-&nbsp;
                            ";
            }
            // line 65
            echo "                        </td>
                    </tr>
                </form>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_0d9b2f74ed22a8cfafe810cb9304c1ed799a9d1e672aebabdc346fb7336f1b34->leave($__internal_0d9b2f74ed22a8cfafe810cb9304c1ed799a9d1e672aebabdc346fb7336f1b34_prof);

    }

    public function getTemplateName()
    {
        return "Store/unregisterd_plugin_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 69,  128 => 65,  124 => 63,  118 => 61,  116 => 60,  110 => 56,  106 => 54,  102 => 52,  94 => 50,  92 => 49,  87 => 48,  84 => 47,  80 => 45,  74 => 43,  71 => 42,  65 => 38,  59 => 35,  56 => 34,  54 => 33,  48 => 32,  41 => 31,  37 => 30,  22 => 17,);
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
<div class=\"table_list plugin-table\">
    <div class=\"table-responsive with-border\">
        <table class=\"table table-hover table-condensed\">
            <thead>
            <tr>
                <th>プラグイン</th>
                <th>バージョン</th>
                <th>コード</th>
                <th>アップデート</th>
                <th>設定</th>
            </tr>
            </thead>
            <tbody>
            {% for Plugin in Plugins %}
                <form id=\"{{ Plugin.name }}\" name=\"{{ Plugin.name }}\" method=\"post\" action=\"\">
                    <tr class=\"{% if Plugin.enable == 0 %}active{% endif %}\">
                        {% if Plugin.name is defined %}
                            <td class=\"tp\">
                                <strong>{{ Plugin.name }}</strong>
                            </td>
                        {% else %}
                            <td class=\"tp\">
                                <strong>不明</strong>
                            </td>
                        {% endif %}
                        {% if Plugin.version is defined %}
                            <td class=\"tv text-center\">{{ Plugin.version }}</td>
                        {% else %}
                            <td class=\"tv text-center\">不明</td>
                        {% endif %}
                        {% if Plugin.code is defined %}
                            <td class=\"tc\"><p>{{ Plugin.code }}</p>
                                {% if attribute(app.config[Plugin.code].const, 'readme') is defined %}
                                    <a href=\"#\" class=\"view_readme\" data-toggle=\"modal\" data-target=\"#readmeModal\" data-name=\"{{ Plugin.name }}\" data-readme=\"{{ attribute(app.config[Plugin.code].const, 'readme')  }}\">詳細を表示</a>
                                {% endif %}
                            </td>
                        {% else %}
                            <td class=\"tc\">不明</td>
                        {% endif %}
                        <td class=\"tu\">
                            &nbsp;-&nbsp;
                        </td>
                        <td class=\"ta text-center\">
                            {% if unregisterdPluginsConfigPages[Plugin.code] is defined %}
                                <a href='{{ unregisterdPluginsConfigPages[Plugin.code]}}'>設定</a>
                            {% else %}
                                &nbsp;-&nbsp;
                            {% endif %}
                        </td>
                    </tr>
                </form>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
", "Store/unregisterd_plugin_table.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/admin/Store/unregisterd_plugin_table.twig");
    }
}
