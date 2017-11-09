<?php

/* __string_template__f223ba74159cf55f75344546d641bae61b346bdc542925a971561aa76291cc5d */
class __TwigTemplate_59865ea54c96b1be73b5345c5efb5b4cf4ecd8bf94864773f86a2cfe4a46dbec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__f223ba74159cf55f75344546d641bae61b346bdc542925a971561aa76291cc5d", 22);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_725ab3288c5ea01fd9518f35689848a3cc69959be79ba5a95461c76b1326e2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725ab3288c5ea01fd9518f35689848a3cc69959be79ba5a95461c76b1326e2fe->enter($__internal_725ab3288c5ea01fd9518f35689848a3cc69959be79ba5a95461c76b1326e2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__f223ba74159cf55f75344546d641bae61b346bdc542925a971561aa76291cc5d"));

        // line 24
        $context["body_class"] = "cart_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725ab3288c5ea01fd9518f35689848a3cc69959be79ba5a95461c76b1326e2fe->leave($__internal_725ab3288c5ea01fd9518f35689848a3cc69959be79ba5a95461c76b1326e2fe_prof);

    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        $__internal_bcbc63afa5de9d86c3ace4b2d44995c7b873244a7371c41a02fb15c13e9f4b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbc63afa5de9d86c3ace4b2d44995c7b873244a7371c41a02fb15c13e9f4b2a->enter($__internal_bcbc63afa5de9d86c3ace4b2d44995c7b873244a7371c41a02fb15c13e9f4b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 27
        echo "    <h1 class=\"page-heading\">ご注文完了</h1>
    <div id=\"complete_wrap\" class=\"container-fluid\">
        <div id=\"complete_flow_box\" class=\"row\">
            <div id=\"complete_flow_box__body\" class=\"col-md-12\">
                ";
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 32
            echo "                <div id=\"complete_flow_box__flow_state\" class=\"flowline step3\">
                ";
        } else {
            // line 34
            echo "                <div id=\"complete_flow_box__flow_state\" class=\"flowline step4\">
                ";
        }
        // line 36
        echo "                    <ul id=\"complete_flow_box__flow_state_list\" class=\"clearfix\">
                        <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 39
            echo "                        <li><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li class=\"active\"><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 42
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li class=\"active\"><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 46
        echo "                    </ul>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->


        <div id=\"deliveradd_input\" class=\"row\">
            <div id=\"deliveradd_input_box\" class=\"col-sm-10 col-sm-offset-1\">
                <div id=\"deliveradd_input_box__message\" class=\"complete_message\">
                    <h2 class=\"heading01\">ご注文ありがとうございました</h2>
                    <p>ただいま、ご注文の確認メールをお送りさせていただきました。<br />
                        万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがもう一度お問い合わせいただくか、お電話にてお問い合わせくださいませ。<br />
                        今後ともご愛顧賜りますようよろしくお願い申し上げます。";
        // line 58
        if (($context["orderId"] ?? $this->getContext($context, "orderId"))) {
            echo "<br /><br /><strong>ご注文番号：";
            echo twig_escape_filter($this->env, ($context["orderId"] ?? $this->getContext($context, "orderId")), "html", null, true);
            echo "</strong>";
        }
        echo "</p>
                </div>
                <div id=\"deliveradd_input_box__top_button\" class=\"row no-padding\">
                    <div class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p>
                            <a href=\"";
        // line 63
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\" class=\"btn btn-info btn-block\">トップページへ</a>
                        </p>
                    </div>
                </div>

            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
";
        
        $__internal_bcbc63afa5de9d86c3ace4b2d44995c7b873244a7371c41a02fb15c13e9f4b2a->leave($__internal_bcbc63afa5de9d86c3ace4b2d44995c7b873244a7371c41a02fb15c13e9f4b2a_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__f223ba74159cf55f75344546d641bae61b346bdc542925a971561aa76291cc5d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 63,  90 => 58,  76 => 46,  70 => 42,  65 => 39,  63 => 38,  59 => 36,  55 => 34,  51 => 32,  49 => 31,  43 => 27,  37 => 26,  30 => 22,  28 => 24,  11 => 22,);
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

{% set body_class = 'cart_page' %}

{% block main %}
    <h1 class=\"page-heading\">ご注文完了</h1>
    <div id=\"complete_wrap\" class=\"container-fluid\">
        <div id=\"complete_flow_box\" class=\"row\">
            <div id=\"complete_flow_box__body\" class=\"col-md-12\">
                {% if is_granted('ROLE_USER') %}
                <div id=\"complete_flow_box__flow_state\" class=\"flowline step3\">
                {% else %}
                <div id=\"complete_flow_box__flow_state\" class=\"flowline step4\">
                {% endif %}
                    <ul id=\"complete_flow_box__flow_state_list\" class=\"clearfix\">
                        <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    {% if is_granted('ROLE_USER') %}
                        <li><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li class=\"active\"><span class=\"flow_number\">3</span><br>完了</li>
                    {% else %}
                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li class=\"active\"><span class=\"flow_number\">4</span><br>完了</li>
                    {% endif %}
                    </ul>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->


        <div id=\"deliveradd_input\" class=\"row\">
            <div id=\"deliveradd_input_box\" class=\"col-sm-10 col-sm-offset-1\">
                <div id=\"deliveradd_input_box__message\" class=\"complete_message\">
                    <h2 class=\"heading01\">ご注文ありがとうございました</h2>
                    <p>ただいま、ご注文の確認メールをお送りさせていただきました。<br />
                        万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがもう一度お問い合わせいただくか、お電話にてお問い合わせくださいませ。<br />
                        今後ともご愛顧賜りますようよろしくお願い申し上げます。{% if orderId %}<br /><br /><strong>ご注文番号：{{ orderId }}</strong>{% endif %}</p>
                </div>
                <div id=\"deliveradd_input_box__top_button\" class=\"row no-padding\">
                    <div class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p>
                            <a href=\"{{ url('homepage') }}\" class=\"btn btn-info btn-block\">トップページへ</a>
                        </p>
                    </div>
                </div>

            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
{% endblock %}
", "__string_template__f223ba74159cf55f75344546d641bae61b346bdc542925a971561aa76291cc5d", "");
    }
}
