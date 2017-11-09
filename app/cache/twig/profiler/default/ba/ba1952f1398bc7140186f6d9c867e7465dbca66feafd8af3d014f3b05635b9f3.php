<?php

/* __string_template__d3be3d713578a2cbab1ae7de5f2ac2fbbe4bad3ba662973d72c999f3a1b7edad */
class __TwigTemplate_71c17d7f02cdfa17551a31882e19360874b17a76e140916c7ad1a2bf51de0009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__d3be3d713578a2cbab1ae7de5f2ac2fbbe4bad3ba662973d72c999f3a1b7edad", 22);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49321139cf92fcb2bcdc0d7f6309485b1415649dd61ecf9e6cab5009e4ebed46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49321139cf92fcb2bcdc0d7f6309485b1415649dd61ecf9e6cab5009e4ebed46->enter($__internal_49321139cf92fcb2bcdc0d7f6309485b1415649dd61ecf9e6cab5009e4ebed46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__d3be3d713578a2cbab1ae7de5f2ac2fbbe4bad3ba662973d72c999f3a1b7edad"));

        // line 24
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49321139cf92fcb2bcdc0d7f6309485b1415649dd61ecf9e6cab5009e4ebed46->leave($__internal_49321139cf92fcb2bcdc0d7f6309485b1415649dd61ecf9e6cab5009e4ebed46_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f1cd9acff6930a6a1082c6533afefe601896dc024fa10666fd8a19e0c8c17558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cd9acff6930a6a1082c6533afefe601896dc024fa10666fd8a19e0c8c17558->enter($__internal_f1cd9acff6930a6a1082c6533afefe601896dc024fa10666fd8a19e0c8c17558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "    <script>
        // 並び順を変更
        function fnChangeOrderBy(orderby) {
            eccube.setValue('orderby', orderby);
            eccube.setValue('pageno', 1);
            eccube.submitForm();
        }

        // 表示件数を変更
        function fnChangeDispNumber(dispNumber) {
            eccube.setValue('disp_number', dispNumber);
            eccube.setValue('pageno', 1);
            eccube.submitForm();
        }
        // 商品表示BOXの高さを揃える
        \$(window).load(function() {
            \$('.product_item').matchHeight();
        });
    </script>
";
        
        $__internal_f1cd9acff6930a6a1082c6533afefe601896dc024fa10666fd8a19e0c8c17558->leave($__internal_f1cd9acff6930a6a1082c6533afefe601896dc024fa10666fd8a19e0c8c17558_prof);

    }

    // line 48
    public function block_main($context, array $blocks = array())
    {
        $__internal_da0fbb19ed54d909db98d2f4528c76a367598fef5d171a94675fb8c8cd5e6441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0fbb19ed54d909db98d2f4528c76a367598fef5d171a94675fb8c8cd5e6441->enter($__internal_da0fbb19ed54d909db98d2f4528c76a367598fef5d171a94675fb8c8cd5e6441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 49
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? $this->getContext($context, "search_form")), "category_id", array()), "vars", array()), "errors", array())) == 0)) {
            // line 50
            echo "    <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
        ";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["search_form"] ?? $this->getContext($context, "search_form")), 'widget');
            echo "
    </form>
    <!-- ▼topicpath▼ -->
    <div id=\"topicpath\" class=\"row\">
        <ol id=\"list_header_menu\">
            <li><a href=\"";
            // line 56
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
            echo "\">全商品</a></li>
            ";
            // line 57
            if ( !(null === ($context["Category"] ?? $this->getContext($context, "Category")))) {
                // line 58
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "path", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["Path"]) {
                    // line 59
                    echo "                    <li><a href=\"";
                    echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "name", array()), "html", null, true);
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Path'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "            ";
            }
            // line 62
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? $this->getContext($context, "search_form")), "vars", array()), "value", array()), "name", array())) {
                // line 63
                echo "            <li>「";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? $this->getContext($context, "search_form")), "vars", array()), "value", array()), "name", array()), "html", null, true);
                echo "」の検索結果</li>
            ";
            }
            // line 65
            echo "        </ol>
    </div>
    <!-- ▲topicpath▲ -->
    <div class=\"row\">";
            // line 68
            echo $this->getAttribute(($context["CategoryContent"] ?? $this->getContext($context, "CategoryContent")), "content", array());
            echo "</div><br />
<div id=\"result_info_box\" class=\"row\">
        <form name=\"page_navi_top\" id=\"page_navi_top\" action=\"?\">
            ";
            // line 71
            if (($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "totalItemCount", array()) > 0)) {
                // line 72
                echo "                <p id=\"result_info_box__item_count\" class=\"intro col-sm-6\"><strong><span id=\"productscount\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "totalItemCount", array()), "html", null, true);
                echo "</span>件</strong>の商品がみつかりました。
                </p>

                <div id=\"result_info_box__menu_box\" class=\"col-sm-6 no-padding\">
                    <ul id=\"result_info_box__menu\" class=\"pagenumberarea clearfix\">
                        <li id=\"result_info_box__disp_menu\">
                            ";
                // line 78
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["disp_number_form"] ?? $this->getContext($context, "disp_number_form")), 'widget', array("id" => "", "attr" => array("onchange" => "javascript:fnChangeDispNumber(this.value);")));
                echo "
                        </li>
                        <li id=\"result_info_box__order_menu\">
                            ";
                // line 81
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["order_by_form"] ?? $this->getContext($context, "order_by_form")), 'widget', array("id" => "", "attr" => array("onchange" => "javascript:fnChangeOrderBy(this.value);")));
                echo "
                        </li>
                    </ul>
                </div>

                ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["disp_number_form"] ?? $this->getContext($context, "disp_number_form")), "getIterator", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    // line 87
                    echo "                    ";
                    if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                        // line 88
                        echo "                        ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                        echo "
                        ";
                        // line 89
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                        ";
                        // line 90
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                    ";
                    }
                    // line 92
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "
                ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order_by_form"] ?? $this->getContext($context, "order_by_form")), "getIterator", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    // line 95
                    echo "                    ";
                    if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                        // line 96
                        echo "                        ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                        echo "
                        ";
                        // line 97
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                        ";
                        // line 98
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                    ";
                    }
                    // line 100
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "            ";
            } else {
                // line 102
                echo "                <p id=\"result_info_box__item_count\" class=\"intro col-sm-6\"><strong style=\"display: none;\"><span id=\"productscount\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "totalItemCount", array()), "html", null, true);
                echo "</span>件</strong>お探しの商品は見つかりませんでした。</p>
            ";
            }
            // line 104
            echo "        </form>
    </div>

    <!-- ▼item_list▼ -->
    <div id=\"item_list\">
        <div class=\"row no-padding\">
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 111
                echo "                <div id=\"result_list_box--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"col-sm-3 col-xs-6\">
                    <div id=\"result_list__item--";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"product_item\">
                        <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                echo "\">
                            <div id=\"result_list__image--";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"item_photo\">
                                <img src=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["Product"], "main_list_image", array())), "html", null, true);
                echo "\">
                            </div>
                            <dl id=\"result_list__detail--";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\">
                                <dt id=\"result_list__name--";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"item_name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
                echo "</dt>
                                ";
                // line 119
                if ($this->getAttribute($context["Product"], "description_list", array())) {
                    // line 120
                    echo "                                    <dd id=\"result_list__description_list--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"item_comment\">";
                    echo nl2br($this->getAttribute($context["Product"], "description_list", array()));
                    echo "</dd>
                                ";
                }
                // line 122
                echo "                                ";
                if ($this->getAttribute($context["Product"], "hasProductClass", array())) {
                    // line 123
                    echo "                                    ";
                    if (($this->getAttribute($context["Product"], "getPrice02Min", array()) == $this->getAttribute($context["Product"], "getPrice02Max", array()))) {
                        // line 124
                        echo "                                    <dd id=\"result_list__price02_inc_tax--";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                        echo "\" class=\"item_price\">
                                        ";
                        // line 125
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo "
                                    </dd>
                                    ";
                    } else {
                        // line 128
                        echo "                                    <dd id=\"result_list__price02_inc_tax--";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                        echo "\" class=\"item_price\">
                                        ";
                        // line 129
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMax", array())), "html", null, true);
                        echo "
                                    </dd>
                                    ";
                    }
                    // line 132
                    echo "                                ";
                } else {
                    // line 133
                    echo "                                    <dd id=\"result_list__price02_inc_tax--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"item_price\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "</dd>
                                ";
                }
                // line 135
                echo "                            </dl>
                        </a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "        </div>

    </div>
    <!-- ▲item_list▲ -->
    ";
            // line 144
            if (($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "totalItemCount", array()) > 0)) {
                // line 145
                echo "        ";
                $this->loadTemplate("pagination.twig", "__string_template__d3be3d713578a2cbab1ae7de5f2ac2fbbe4bad3ba662973d72c999f3a1b7edad", 145)->display(array_merge($context, array("pages" => $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "paginationData", array()))));
                // line 146
                echo "    ";
            }
            // line 147
            echo "    ";
        } else {
            // line 148
            echo "        <p class=\"errormsg text-danger\">ご指定のカテゴリは存在しません。</p>
    ";
        }
        
        $__internal_da0fbb19ed54d909db98d2f4528c76a367598fef5d171a94675fb8c8cd5e6441->leave($__internal_da0fbb19ed54d909db98d2f4528c76a367598fef5d171a94675fb8c8cd5e6441_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__d3be3d713578a2cbab1ae7de5f2ac2fbbe4bad3ba662973d72c999f3a1b7edad";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 148,  350 => 147,  347 => 146,  344 => 145,  342 => 144,  336 => 140,  326 => 135,  318 => 133,  315 => 132,  307 => 129,  302 => 128,  296 => 125,  291 => 124,  288 => 123,  285 => 122,  277 => 120,  275 => 119,  269 => 118,  265 => 117,  258 => 115,  254 => 114,  250 => 113,  246 => 112,  241 => 111,  237 => 110,  229 => 104,  223 => 102,  220 => 101,  214 => 100,  209 => 98,  205 => 97,  200 => 96,  197 => 95,  193 => 94,  190 => 93,  184 => 92,  179 => 90,  175 => 89,  170 => 88,  167 => 87,  163 => 86,  155 => 81,  149 => 78,  139 => 72,  137 => 71,  131 => 68,  126 => 65,  120 => 63,  117 => 62,  114 => 61,  101 => 59,  96 => 58,  94 => 57,  90 => 56,  82 => 51,  79 => 50,  76 => 49,  70 => 48,  44 => 27,  38 => 26,  31 => 22,  29 => 24,  11 => 22,);
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

{% set body_class = 'product_page' %}

{% block javascript %}
    <script>
        // 並び順を変更
        function fnChangeOrderBy(orderby) {
            eccube.setValue('orderby', orderby);
            eccube.setValue('pageno', 1);
            eccube.submitForm();
        }

        // 表示件数を変更
        function fnChangeDispNumber(dispNumber) {
            eccube.setValue('disp_number', dispNumber);
            eccube.setValue('pageno', 1);
            eccube.submitForm();
        }
        // 商品表示BOXの高さを揃える
        \$(window).load(function() {
            \$('.product_item').matchHeight();
        });
    </script>
{% endblock %}

{% block main %}
    {% if search_form.category_id.vars.errors|length == 0 %}
    <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
        {{ form_widget(search_form) }}
    </form>
    <!-- ▼topicpath▼ -->
    <div id=\"topicpath\" class=\"row\">
        <ol id=\"list_header_menu\">
            <li><a href=\"{{ url('product_list') }}\">全商品</a></li>
            {% if Category is not null %}
                {% for Path in Category.path %}
                    <li><a href=\"{{ url('product_list') }}?category_id={{ Path.id }}\">{{ Path.name }}</a></li>
                {% endfor %}
            {% endif %}
            {% if search_form.vars.value.name %}
            <li>「{{ search_form.vars.value.name }}」の検索結果</li>
            {% endif %}
        </ol>
    </div>
    <!-- ▲topicpath▲ -->
    <div class=\"row\">{{ CategoryContent.content | raw }}</div><br />
<div id=\"result_info_box\" class=\"row\">
        <form name=\"page_navi_top\" id=\"page_navi_top\" action=\"?\">
            {% if pagination.totalItemCount > 0 %}
                <p id=\"result_info_box__item_count\" class=\"intro col-sm-6\"><strong><span id=\"productscount\">{{ pagination.totalItemCount }}</span>件</strong>の商品がみつかりました。
                </p>

                <div id=\"result_info_box__menu_box\" class=\"col-sm-6 no-padding\">
                    <ul id=\"result_info_box__menu\" class=\"pagenumberarea clearfix\">
                        <li id=\"result_info_box__disp_menu\">
                            {{ form_widget(disp_number_form, {'id': '', 'attr': {'onchange': \"javascript:fnChangeDispNumber(this.value);\"}}) }}
                        </li>
                        <li id=\"result_info_box__order_menu\">
                            {{ form_widget(order_by_form, {'id': '', 'attr': {'onchange': \"javascript:fnChangeOrderBy(this.value);\"}}) }}
                        </li>
                    </ul>
                </div>

                {% for f in disp_number_form.getIterator %}
                    {% if f.vars.name matches '[^plg*]' %}
                        {{ form_label(f) }}
                        {{ form_widget(f) }}
                        {{ form_errors(f) }}
                    {% endif %}
                {% endfor %}

                {% for f in order_by_form.getIterator %}
                    {% if f.vars.name matches '[^plg*]' %}
                        {{ form_label(f) }}
                        {{ form_widget(f) }}
                        {{ form_errors(f) }}
                    {% endif %}
                {% endfor %}
            {% else %}
                <p id=\"result_info_box__item_count\" class=\"intro col-sm-6\"><strong style=\"display: none;\"><span id=\"productscount\">{{ pagination.totalItemCount }}</span>件</strong>お探しの商品は見つかりませんでした。</p>
            {% endif %}
        </form>
    </div>

    <!-- ▼item_list▼ -->
    <div id=\"item_list\">
        <div class=\"row no-padding\">
            {% for Product in pagination %}
                <div id=\"result_list_box--{{ Product.id }}\" class=\"col-sm-3 col-xs-6\">
                    <div id=\"result_list__item--{{ Product.id }}\" class=\"product_item\">
                        <a href=\"{{ url('product_detail', {'id': Product.id}) }}\">
                            <div id=\"result_list__image--{{ Product.id }}\" class=\"item_photo\">
                                <img src=\"{{ app.config.image_save_urlpath }}/{{ Product.main_list_image|no_image_product }}\">
                            </div>
                            <dl id=\"result_list__detail--{{ Product.id }}\">
                                <dt id=\"result_list__name--{{ Product.id }}\" class=\"item_name\">{{ Product.name }}</dt>
                                {% if Product.description_list %}
                                    <dd id=\"result_list__description_list--{{ Product.id }}\" class=\"item_comment\">{{ Product.description_list|raw|nl2br }}</dd>
                                {% endif %}
                                {% if Product.hasProductClass %}
                                    {% if Product.getPrice02Min == Product.getPrice02Max %}
                                    <dd id=\"result_list__price02_inc_tax--{{ Product.id }}\" class=\"item_price\">
                                        {{ Product.getPrice02IncTaxMin|price }}
                                    </dd>
                                    {% else %}
                                    <dd id=\"result_list__price02_inc_tax--{{ Product.id }}\" class=\"item_price\">
                                        {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                                    </dd>
                                    {% endif %}
                                {% else %}
                                    <dd id=\"result_list__price02_inc_tax--{{ Product.id }}\" class=\"item_price\">{{ Product.getPrice02IncTaxMin|price }}</dd>
                                {% endif %}
                            </dl>
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>

    </div>
    <!-- ▲item_list▲ -->
    {% if pagination.totalItemCount > 0 %}
        {% include \"pagination.twig\" with { 'pages' : pagination.paginationData } %}
    {% endif %}
    {% else %}
        <p class=\"errormsg text-danger\">ご指定のカテゴリは存在しません。</p>
    {% endif %}
{% endblock %}
", "__string_template__d3be3d713578a2cbab1ae7de5f2ac2fbbe4bad3ba662973d72c999f3a1b7edad", "");
    }
}
