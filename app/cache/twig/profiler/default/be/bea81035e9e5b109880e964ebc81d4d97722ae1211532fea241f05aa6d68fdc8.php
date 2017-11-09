<?php

/* Mail/order.twig */
class __TwigTemplate_c8f55e54512daf0dbd6233e91b2bba3312746c8e2f2108da3dda97ef719a5eef extends Twig_Template
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
        $__internal_7f7712992e52b0149c1f0d210ba708aeb067a8e34aab04178fdeb20f7063b087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7712992e52b0149c1f0d210ba708aeb067a8e34aab04178fdeb20f7063b087->enter($__internal_7f7712992e52b0149c1f0d210ba708aeb067a8e34aab04178fdeb20f7063b087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Mail/order.twig"));

        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "name02", array()), "html", null, true);
        echo " 様

";
        // line 24
        echo twig_escape_filter($this->env, ($context["header"] ?? $this->getContext($context, "header")), "html", null, true);
        echo "

************************************************
　ご請求金額
************************************************

ご注文番号：";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "id", array()), "html", null, true);
        echo "
お支払い合計：";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "payment_total", array())), "html", null, true);
        echo "
お支払い方法：";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "payment_method", array()), "html", null, true);
        echo "
メッセージ：";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "message", array()), "html", null, true);
        echo "


************************************************
　ご注文商品明細
************************************************

";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "OrderDetails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderDetail"]) {
            // line 41
            echo "商品コード: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_code", array()), "html", null, true);
            echo "
商品名: ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_name", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "classcategory_name1", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "classcategory_name2", array()), "html", null, true);
            echo "
単価： ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCalcIncTax($this->getAttribute($context["OrderDetail"], "price", array()), $this->getAttribute($context["OrderDetail"], "tax_rate", array()), $this->getAttribute($context["OrderDetail"], "tax_rule", array()))), "html", null, true);
            echo "
数量： ";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["OrderDetail"], "quantity", array())), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
-------------------------------------------------
小　計 ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "subtotal", array())), "html", null, true);
        if (($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tax", array()) > 0)) {
            echo "(うち消費税 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tax", array())), "html", null, true);
            echo ")";
        }
        // line 50
        echo "
手数料 ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "charge", array())), "html", null, true);
        echo "
送　料 ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "delivery_fee_total", array())), "html", null, true);
        echo "
";
        // line 53
        if (($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "discount", array()) > 0)) {
            // line 54
            echo "値引き ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter((0 - $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "discount", array()))), "html", null, true);
            echo "
";
        }
        // line 56
        echo "============================================
合　計 ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "payment_total", array())), "html", null, true);
        echo "

************************************************
　ご注文者情報
************************************************
お名前　：";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "name02", array()), "html", null, true);
        echo " 様
フリガナ：";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "kana01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "kana02", array()), "html", null, true);
        echo " 様
";
        // line 64
        if ($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "company_name", array())) {
            // line 65
            echo "会社名　：";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "company_name", array()), "html", null, true);
            echo "
";
        }
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "form_country_enable", array())) {
            // line 68
            echo "国　　　：";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "Country", array()), "html", null, true);
            echo "
ZIPCODE ：";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "zip_code", array()), "html", null, true);
            echo "
";
        }
        // line 71
        echo "郵便番号：〒";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "zip01", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "zip02", array()), "html", null, true);
        echo "
住所　　：";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "Pref", array()), "name", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "addr01", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "addr02", array()), "html", null, true);
        echo "
電話番号：";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tel01", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tel02", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tel03", array()), "html", null, true);
        echo "
FAX番号 ：";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "fax01", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "fax02", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "fax03", array()), "html", null, true);
        echo "

メールアドレス：";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "email", array()), "html", null, true);
        echo "

************************************************
　配送情報
************************************************

";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "Shippings", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 83
            echo "◎お届け先";
            if ($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "multiple", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            }
            // line 84
            echo "
お名前　：";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "name01", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "name02", array()), "html", null, true);
            echo " 様
フリガナ：";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "kana01", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "kana02", array()), "html", null, true);
            echo " 様
";
            // line 87
            if ($this->getAttribute($context["Shipping"], "company_name", array())) {
                // line 88
                echo "会社名　：";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "company_name", array()), "html", null, true);
                echo "
";
            }
            // line 90
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "form_country_enable", array())) {
                // line 91
                echo "    　国　　　：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Shipping"], "Country", array()), "name", array()), "html", null, true);
                echo "
    　ZIPCODE ：";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip_code", array()), "html", null, true);
                echo "
";
            }
            // line 94
            echo "郵便番号：〒";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip02", array()), "html", null, true);
            echo "
住所　　：";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Shipping"], "Pref", array()), "name", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "addr02", array()), "html", null, true);
            echo "
電話番号：";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel03", array()), "html", null, true);
            echo "
FAX番号 ：";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "fax01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "fax02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "fax03", array()), "html", null, true);
            echo "

お届け日：";
            // line 99
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($context["Shipping"], "shipping_delivery_date", array()))) ? ("指定なし") : ($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute($context["Shipping"], "shipping_delivery_date", array())))), "html", null, true);
            echo "
お届け時間：";
            // line 100
            echo twig_escape_filter($this->env, (($this->getAttribute($context["Shipping"], "shipping_delivery_time", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["Shipping"], "shipping_delivery_time", array()), "指定なし")) : ("指定なし")), "html", null, true);
            echo "

";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Shipping"], "ShipmentItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ShipmentItem"]) {
                // line 103
                echo "商品コード: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "product_code", array()), "html", null, true);
                echo "
商品名: ";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "product_name", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "classcategory_name1", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "classcategory_name2", array()), "html", null, true);
                echo "
数量：";
                // line 105
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["ShipmentItem"], "quantity", array())), "html", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ShipmentItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
";
        // line 110
        echo twig_escape_filter($this->env, ($context["footer"] ?? $this->getContext($context, "footer")), "html", null, true);
        
        $__internal_7f7712992e52b0149c1f0d210ba708aeb067a8e34aab04178fdeb20f7063b087->leave($__internal_7f7712992e52b0149c1f0d210ba708aeb067a8e34aab04178fdeb20f7063b087_prof);

    }

    public function getTemplateName()
    {
        return "Mail/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 110,  336 => 109,  315 => 105,  307 => 104,  302 => 103,  298 => 102,  293 => 100,  289 => 99,  280 => 97,  272 => 96,  266 => 95,  259 => 94,  254 => 92,  249 => 91,  247 => 90,  241 => 88,  239 => 87,  233 => 86,  227 => 85,  224 => 84,  219 => 83,  202 => 82,  193 => 76,  184 => 74,  176 => 73,  170 => 72,  163 => 71,  158 => 69,  153 => 68,  151 => 67,  145 => 65,  143 => 64,  137 => 63,  131 => 62,  123 => 57,  120 => 56,  114 => 54,  112 => 53,  108 => 52,  104 => 51,  101 => 50,  94 => 49,  90 => 47,  81 => 44,  77 => 43,  69 => 42,  64 => 41,  60 => 40,  50 => 33,  46 => 32,  42 => 31,  38 => 30,  29 => 24,  22 => 22,);
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
{{ Order.name01 }} {{ Order.name02 }} 様

{{ header }}

************************************************
　ご請求金額
************************************************

ご注文番号：{{ Order.id }}
お支払い合計：{{ Order.payment_total|price}}
お支払い方法：{{ Order.payment_method }}
メッセージ：{{ Order.message }}


************************************************
　ご注文商品明細
************************************************

{% for OrderDetail in Order.OrderDetails %}
商品コード: {{ OrderDetail.product_code }}
商品名: {{ OrderDetail.product_name }}  {{ OrderDetail.classcategory_name1 }}  {{ OrderDetail.classcategory_name2 }}
単価： {{ calc_inc_tax(OrderDetail.price, OrderDetail.tax_rate, OrderDetail.tax_rule)|price }}
数量： {{ OrderDetail.quantity|number_format }}

{% endfor %}

-------------------------------------------------
小　計 {{ Order.subtotal|price }}{% if Order.tax > 0 %}(うち消費税 {{ Order.tax|price }}){% endif %}

手数料 {{ Order.charge|price }}
送　料 {{ Order.delivery_fee_total|price}}
{% if Order.discount > 0 %}
値引き {{ (0 - Order.discount)|price}}
{% endif %}
============================================
合　計 {{ Order.payment_total|price }}

************************************************
　ご注文者情報
************************************************
お名前　：{{ Order.name01 }} {{ Order.name02 }} 様
フリガナ：{{ Order.kana01 }} {{ Order.kana02 }} 様
{% if Order.company_name %}
会社名　：{{ Order.company_name }}
{% endif %}
{% if app.config.form_country_enable %}
国　　　：{{ Order.Country }}
ZIPCODE ：{{ Order.zip_code }}
{% endif %}
郵便番号：〒{{ Order.zip01 }}-{{ Order.zip02 }}
住所　　：{{ Order.Pref.name }}{{ Order.addr01 }}{{ Order.addr02 }}
電話番号：{{ Order.tel01 }}-{{ Order.tel02 }}-{{ Order.tel03 }}
FAX番号 ：{{ Order.fax01 }}-{{ Order.fax02 }}-{{ Order.fax03 }}

メールアドレス：{{ Order.email }}

************************************************
　配送情報
************************************************

{%  for Shipping in Order.Shippings %}
◎お届け先{% if Order.multiple %}{{ loop.index }}{% endif %}

お名前　：{{ Shipping.name01 }} {{ Shipping.name02 }} 様
フリガナ：{{ Shipping.kana01 }} {{ Shipping.kana02 }} 様
{% if Shipping.company_name %}
会社名　：{{ Shipping.company_name }}
{% endif %}
{% if app.config.form_country_enable %}
    　国　　　：{{ Shipping.Country.name }}
    　ZIPCODE ：{{ Shipping.zip_code }}
{% endif %}
郵便番号：〒{{ Shipping.zip01 }}-{{ Shipping.zip02 }}
住所　　：{{ Shipping.Pref.name }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}
電話番号：{{ Shipping.tel01 }}-{{ Shipping.tel02 }}-{{ Shipping.tel03 }}
FAX番号 ：{{ Shipping.fax01 }}-{{ Shipping.fax02 }}-{{ Shipping.fax03 }}

お届け日：{{ Shipping.shipping_delivery_date is empty ? '指定なし' : Shipping.shipping_delivery_date|date_format }}
お届け時間：{{ Shipping.shipping_delivery_time|default('指定なし') }}

{%  for ShipmentItem in Shipping.ShipmentItems %}
商品コード: {{ ShipmentItem.product_code }}
商品名: {{ ShipmentItem.product_name }}  {{ ShipmentItem.classcategory_name1 }}  {{ ShipmentItem.classcategory_name2 }}
数量：{{ ShipmentItem.quantity|number_format }}

{% endfor %}
{% endfor %}

{{ footer }}", "Mail/order.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/default/Mail/order.twig");
    }
}
