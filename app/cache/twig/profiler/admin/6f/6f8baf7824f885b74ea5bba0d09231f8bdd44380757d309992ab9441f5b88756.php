<?php

/* Store/plugin_table.twig */
class __TwigTemplate_70c34d2a4032f82234106643ccb9d1b10fde0daf5b10f9a63511440a2516b1a6 extends Twig_Template
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
        $__internal_c7f642e2e356b09c885994dce56dd270b88b68918b715b628c985f3a2cdecd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f642e2e356b09c885994dce56dd270b88b68918b715b628c985f3a2cdecd16->enter($__internal_c7f642e2e356b09c885994dce56dd270b88b68918b715b628c985f3a2cdecd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Store/plugin_table.twig"));

        // line 22
        if ((twig_length_filter($this->env, ($context["Plugins"] ?? $this->getContext($context, "Plugins"))) > 0)) {
            // line 23
            echo "    <div class=\"table_list plugin-table\">
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
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Plugins"] ?? $this->getContext($context, "Plugins")));
            foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
                // line 37
                echo "                    ";
                $context["form"] = $this->getAttribute(($context["plugin_forms"] ?? $this->getContext($context, "plugin_forms")), $this->getAttribute($context["Plugin"], "id", array()), array(), "array");
                // line 38
                echo "                    <form id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
                echo "\" method=\"post\" action=\"\" ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
                echo ">
                        <tr class=\"";
                // line 39
                if (($this->getAttribute($context["Plugin"], "enable", array()) == 0)) {
                    echo "active";
                }
                echo "\">
                            <td class=\"tp\">
                                <strong>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "name", array()), "html", null, true);
                echo "</strong>";
                if (($this->getAttribute($context["Plugin"], "enable", array()) == 0)) {
                    echo "<span class=\"text-danger\"> (停止中)</span>";
                }
                echo "<br>
                                ";
                // line 42
                if (($this->getAttribute($context["Plugin"], "enable", array()) == 1)) {
                    // line 43
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_disable", array("id" => $this->getAttribute($context["Plugin"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                    echo " data-method=\"put\" data-confirm=\"false\">
                                        無効にする
                                    </a>
                                ";
                } else {
                    // line 47
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_enable", array("id" => $this->getAttribute($context["Plugin"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                    echo " data-method=\"put\" data-confirm=\"false\">
                                        有効にする
                                    </a>
                                ";
                }
                // line 51
                echo "                                /
                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_uninstall", array("id" => $this->getAttribute($context["Plugin"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"このプラグインを削除してもよろしいですか？\">
                                    削除
                                </a>
                            </td>
                            <td class=\"tv text-center\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "version", array()), "html", null, true);
                echo "</td>
                            <td class=\"tc\"><p>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "code", array()), "html", null, true);
                echo "</p>
                                ";
                // line 58
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array(), "any", false, true), $this->getAttribute($context["Plugin"], "code", array()), array(), "array", false, true), "const", array(), "any", false, true), "readme", array(), "any", true, true)) {
                    // line 59
                    echo "                                    <a href=\"#\" class=\"view_readme\" data-toggle=\"modal\" data-target=\"#readmeModal\" data-name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "name", array()), "html", null, true);
                    echo "\" data-readme=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), $this->getAttribute($context["Plugin"], "code", array()), array(), "array"), "const", array()), "readme"), "html", null, true);
                    echo "\">詳細を表示</a>
                                ";
                }
                // line 61
                echo "                            </td>
                            <td class=\"tu\">
                            ";
                // line 63
                if (($this->getAttribute($context["Plugin"], "source", array()) == 0)) {
                    // line 64
                    echo "                                ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
                    echo "
                                ";
                    // line 65
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plugin_id", array()), 'widget');
                    echo "
                                ";
                    // line 66
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plugin_archive", array()), 'widget', array("attr" => array("accept" => "application/zip,application/x-tar,application/x-gzip")));
                    echo "
                                ";
                    // line 67
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plugin_archive", array()), 'errors');
                    echo "
                                <p></p>
                                <a class=\"btn btn-primary btn-xs\" href=\"#\" onclick=\"changeActionSubmit('";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_update", array("id" => $this->getAttribute($context["Plugin"], "id", array()))), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
                    echo "');\">
                                    アップロード
                                </a>
                            ";
                } else {
                    // line 73
                    echo "                                ";
                    if (($this->getAttribute($context["Plugin"], "updateStatus", array()) == 3)) {
                        // line 74
                        echo "                                    <p>新バージョンのプラグインが利用可能です。
                                        <a class=\"btn btn-default btn-xs\" href=\"";
                        // line 75
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_plugin_upgrade", array("action" => "update", "id" => $this->getAttribute($context["Plugin"], "source", array()), "version" => $this->getAttribute($context["Plugin"], "version", array()))), "html", null, true);
                        echo "\">今すぐ更新</a>
                                    </p>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">プラグインバージョン : ";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "newVersion", array()), "html", null, true);
                        echo "</li>
                                        <li class=\"plugin-version\">EC-CUBE対応バージョン : ";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "eccubeVersionAsString", array()), "html", null, true);
                        echo "</li>
                                        <li class=\"plugin-update\">更新日 : ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getTimeAgo($this->getAttribute($context["Plugin"], "lastUpdateDate", array())), "html", null, true);
                        echo "</li>
                                    </ul>
                                ";
                    } else {
                        // line 83
                        echo "                                    <p>アップデート対象プラグインはありません。</p>
                                ";
                    }
                    // line 85
                    echo "                                <p><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Plugin"], "productUrl", array()), "html", null, true);
                    echo "\" target=\"_blank\">詳細情報</a></p>
                            ";
                }
                // line 87
                echo "                            </td>
                            <td class=\"ta text-center\">
                                ";
                // line 89
                if ($this->getAttribute(($context["configPages"] ?? null), $this->getAttribute($context["Plugin"], "code", array()), array(), "array", true, true)) {
                    // line 90
                    echo "                                   <a href='";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["configPages"] ?? $this->getContext($context, "configPages")), $this->getAttribute($context["Plugin"], "code", array()), array(), "array"), "html", null, true);
                    echo "'>設定</a>
                                ";
                }
                // line 92
                echo "                            </td>
                        </tr>
                    </form>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                </tbody>
            </table>
        </div>
    </div>
";
        } else {
            // line 101
            echo "    <div class=\"text-danger\">
        インストールされているプラグインはありません。
    </div>
";
        }
        
        $__internal_c7f642e2e356b09c885994dce56dd270b88b68918b715b628c985f3a2cdecd16->leave($__internal_c7f642e2e356b09c885994dce56dd270b88b68918b715b628c985f3a2cdecd16_prof);

    }

    public function getTemplateName()
    {
        return "Store/plugin_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 101,  212 => 96,  203 => 92,  197 => 90,  195 => 89,  191 => 87,  185 => 85,  181 => 83,  175 => 80,  171 => 79,  167 => 78,  161 => 75,  158 => 74,  155 => 73,  146 => 69,  141 => 67,  137 => 66,  133 => 65,  128 => 64,  126 => 63,  122 => 61,  114 => 59,  112 => 58,  108 => 57,  104 => 56,  95 => 52,  92 => 51,  82 => 47,  72 => 43,  70 => 42,  62 => 41,  55 => 39,  46 => 38,  43 => 37,  39 => 36,  24 => 23,  22 => 22,);
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
{% if Plugins|length > 0 %}
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
                    {% set form = plugin_forms[Plugin.id] %}
                    <form id=\"{{ form.vars.name }}\" name=\"{{ form.vars.name }}\" method=\"post\" action=\"\" {{ form_enctype(form) }}>
                        <tr class=\"{% if Plugin.enable == 0 %}active{% endif %}\">
                            <td class=\"tp\">
                                <strong>{{ Plugin.name }}</strong>{% if Plugin.enable == 0 %}<span class=\"text-danger\"> (停止中)</span>{% endif %}<br>
                                {% if Plugin.enable == 1 %}
                                    <a href=\"{{ url('admin_store_plugin_disable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }} data-method=\"put\" data-confirm=\"false\">
                                        無効にする
                                    </a>
                                {% else %}
                                    <a href=\"{{ url('admin_store_plugin_enable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }} data-method=\"put\" data-confirm=\"false\">
                                        有効にする
                                    </a>
                                {% endif %}
                                /
                                <a href=\"{{ url('admin_store_plugin_uninstall', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }} data-method=\"delete\" data-message=\"このプラグインを削除してもよろしいですか？\">
                                    削除
                                </a>
                            </td>
                            <td class=\"tv text-center\">{{ Plugin.version }}</td>
                            <td class=\"tc\"><p>{{ Plugin.code }}</p>
                                {% if attribute(app.config[Plugin.code].const, 'readme') is defined %}
                                    <a href=\"#\" class=\"view_readme\" data-toggle=\"modal\" data-target=\"#readmeModal\" data-name=\"{{ Plugin.name }}\" data-readme=\"{{ attribute(app.config[Plugin.code].const, 'readme')  }}\">詳細を表示</a>
                                {% endif %}
                            </td>
                            <td class=\"tu\">
                            {% if Plugin.source == 0 %}
                                {{ form_widget(form._token) }}
                                {{ form_widget(form.plugin_id) }}
                                {{ form_widget(form.plugin_archive, {'attr': {'accept': 'application/zip,application/x-tar,application/x-gzip'}}) }}
                                {{ form_errors(form.plugin_archive) }}
                                <p></p>
                                <a class=\"btn btn-primary btn-xs\" href=\"#\" onclick=\"changeActionSubmit('{{ url('admin_store_plugin_update', { id : Plugin.id }) }}', '{{ form.vars.name }}');\">
                                    アップロード
                                </a>
                            {% else %}
                                {% if Plugin.updateStatus == 3 %}
                                    <p>新バージョンのプラグインが利用可能です。
                                        <a class=\"btn btn-default btn-xs\" href=\"{{ url('admin_store_plugin_upgrade', {'action': 'update', 'id': Plugin.source, 'version': Plugin.version}) }}\">今すぐ更新</a>
                                    </p>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">プラグインバージョン : {{ Plugin.newVersion }}</li>
                                        <li class=\"plugin-version\">EC-CUBE対応バージョン : {{ Plugin.eccubeVersionAsString }}</li>
                                        <li class=\"plugin-update\">更新日 : {{ Plugin.lastUpdateDate|time_ago }}</li>
                                    </ul>
                                {% else %}
                                    <p>アップデート対象プラグインはありません。</p>
                                {% endif %}
                                <p><a href=\"{{ Plugin.productUrl }}\" target=\"_blank\">詳細情報</a></p>
                            {% endif %}
                            </td>
                            <td class=\"ta text-center\">
                                {% if configPages[Plugin.code] is defined %}
                                   <a href='{{configPages[Plugin.code]}}'>設定</a>
                                {% endif %}
                            </td>
                        </tr>
                    </form>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% else %}
    <div class=\"text-danger\">
        インストールされているプラグインはありません。
    </div>
{% endif %}
", "Store/plugin_table.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/admin/Store/plugin_table.twig");
    }
}
