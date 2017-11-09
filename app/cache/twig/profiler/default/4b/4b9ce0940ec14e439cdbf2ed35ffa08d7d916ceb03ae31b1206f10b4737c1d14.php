<?php

/* Block/new_product.twig */
class __TwigTemplate_9e134118876faad467c78af7f7108732276886da75532d92f95347d97e70b31a extends Twig_Template
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
        $__internal_228ed216d25ad44bc94a7dfaeaee4b4c0f088d3aef5b2461a202c3be7bd8ea5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228ed216d25ad44bc94a7dfaeaee4b4c0f088d3aef5b2461a202c3be7bd8ea5d->enter($__internal_228ed216d25ad44bc94a7dfaeaee4b4c0f088d3aef5b2461a202c3be7bd8ea5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Block/new_product.twig"));

        // line 22
        echo "<div id=\"contents_top\">
<div id=\"item_list\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-xs-12\">
            <div class=\"row no-padding\">
                <div class=\"col-xs-6\">
                    <div class=\"img img_right\"><a href=\"#\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img01.jpg\"></a></div>
                </div>
                <div class=\"col-xs-6\">
                    <div class=\"img\"><a href=\"#\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img02.jpg\"></a></div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-xs-12 comment_area\">
            <div class=\"txt_center\">
                <h4>新入荷商品特集</h4>
                <h5>この季節にぴったりな商品をご用意しました</h5>
                <p>さわやかな日差しが過ごしやすい季節。心地よいくらしのための、お部屋のアクセントになるおすすめのファブリックやグッズをご紹介します。</p>
                <p><a class=\"btn btn-success\" href=\"";
        // line 40
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
        echo "\">商品一覧へ<svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></a></p>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img03.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">お気に入りのエスプレッソタイム</dt>
                        <dd class=\"item_comment\">コーヒータイムを上質な時間にしてくれる、口当たりのよさとデザイン性を兼ね備えたエスプレッソカップを集めました・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img04.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">アウトドアにおすすめのアイテム</dt>
                        <dd class=\"item_comment\">カジュアルすぎない感じがちょうどよい、大人のためのアウトドアマガジンから、バイヤーおすすめのアイテムをセレクト・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img05.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">フランス製のデッドストック</dt>
                        <dd class=\"item_comment\">60～70年代のフランス製のデッドストックの器を集めました。絶妙な色合いと、独特の優しい風合いをお楽しみいただけ・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img06.jpg\"></div>
                    <p class=\"item_comment text-warning\">木彫りのぬくもりがあたたかいアニマルオブジェ</p>
                    <dl>
                        <dt class=\"item_name\">オブジェ（ふくろう）</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img07.jpg\"></div>
                    <p class=\"item_comment text-warning\">青色が美しい職人が仕上げた吹きガラス</p>
                    <dl>
                        <dt class=\"item_name\">ガラス瓶</dt>
                        <dd class=\"item_price special_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img08.jpg\"></div>
                    <p class=\"item_comment text-warning\">いつかは持ちたい。一生モノの銀製カトラリー</p>
                    <dl>
                        <dt class=\"item_name\">シルバーカトラリー</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img09.jpg\"></div>
                    <p class=\"item_comment text-warning\">こだわりのシルクスクリーンプリントがポイント</p>
                    <dl>
                        <dt class=\"item_name\">フォトクッションカバー</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
    
</div>
</div>";
        
        $__internal_228ed216d25ad44bc94a7dfaeaee4b4c0f088d3aef5b2461a202c3be7bd8ea5d->leave($__internal_228ed216d25ad44bc94a7dfaeaee4b4c0f088d3aef5b2461a202c3be7bd8ea5d_prof);

    }

    public function getTemplateName()
    {
        return "Block/new_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 122,  136 => 110,  121 => 98,  106 => 86,  89 => 72,  74 => 60,  59 => 48,  48 => 40,  36 => 31,  30 => 28,  22 => 22,);
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
<div id=\"contents_top\">
<div id=\"item_list\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-xs-12\">
            <div class=\"row no-padding\">
                <div class=\"col-xs-6\">
                    <div class=\"img img_right\"><a href=\"#\"><img src=\"{{ app.config.front_urlpath }}/img/top/img01.jpg\"></a></div>
                </div>
                <div class=\"col-xs-6\">
                    <div class=\"img\"><a href=\"#\"><img src=\"{{ app.config.front_urlpath }}/img/top/img02.jpg\"></a></div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-xs-12 comment_area\">
            <div class=\"txt_center\">
                <h4>新入荷商品特集</h4>
                <h5>この季節にぴったりな商品をご用意しました</h5>
                <p>さわやかな日差しが過ごしやすい季節。心地よいくらしのための、お部屋のアクセントになるおすすめのファブリックやグッズをご紹介します。</p>
                <p><a class=\"btn btn-success\" href=\"{{ url('product_list') }}\">商品一覧へ<svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></a></p>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"{{ app.config.front_urlpath }}/img/top/img03.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">お気に入りのエスプレッソタイム</dt>
                        <dd class=\"item_comment\">コーヒータイムを上質な時間にしてくれる、口当たりのよさとデザイン性を兼ね備えたエスプレッソカップを集めました・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"{{ app.config.front_urlpath }}/img/top/img04.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">アウトドアにおすすめのアイテム</dt>
                        <dd class=\"item_comment\">カジュアルすぎない感じがちょうどよい、大人のためのアウトドアマガジンから、バイヤーおすすめのアイテムをセレクト・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"{{ app.config.front_urlpath }}/img/top/img05.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">フランス製のデッドストック</dt>
                        <dd class=\"item_comment\">60～70年代のフランス製のデッドストックの器を集めました。絶妙な色合いと、独特の優しい風合いをお楽しみいただけ・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"{{ app.config.front_urlpath }}/img/top/img06.jpg\"></div>
                    <p class=\"item_comment text-warning\">木彫りのぬくもりがあたたかいアニマルオブジェ</p>
                    <dl>
                        <dt class=\"item_name\">オブジェ（ふくろう）</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"{{ app.config.front_urlpath }}/img/top/img07.jpg\"></div>
                    <p class=\"item_comment text-warning\">青色が美しい職人が仕上げた吹きガラス</p>
                    <dl>
                        <dt class=\"item_name\">ガラス瓶</dt>
                        <dd class=\"item_price special_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"{{ app.config.front_urlpath }}/img/top/img08.jpg\"></div>
                    <p class=\"item_comment text-warning\">いつかは持ちたい。一生モノの銀製カトラリー</p>
                    <dl>
                        <dt class=\"item_name\">シルバーカトラリー</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"#\">
                    <div class=\"item_photo\"><img src=\"{{ app.config.front_urlpath }}/img/top/img09.jpg\"></div>
                    <p class=\"item_comment text-warning\">こだわりのシルクスクリーンプリントがポイント</p>
                    <dl>
                        <dt class=\"item_name\">フォトクッションカバー</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
    
</div>
</div>", "Block/new_product.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/default/Block/new_product.twig");
    }
}
