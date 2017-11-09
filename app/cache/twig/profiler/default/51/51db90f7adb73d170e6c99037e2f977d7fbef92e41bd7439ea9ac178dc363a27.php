<?php

/* __string_template__1df57c13e48a53ead2e31b0815d7821781728a1aa45400b3c585e0f2a0e66476 */
class __TwigTemplate_221278ff142bb49bcfdf3f8b09478b2dfe8f8a33bc218bd51cc746ee2956a981 extends Twig_Template
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
        $__internal_2e4e385882b7c43c0ab7fa5d3004ffc19aedf91a010c6bd6ac921f325138f88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4e385882b7c43c0ab7fa5d3004ffc19aedf91a010c6bd6ac921f325138f88f->enter($__internal_2e4e385882b7c43c0ab7fa5d3004ffc19aedf91a010c6bd6ac921f325138f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__1df57c13e48a53ead2e31b0815d7821781728a1aa45400b3c585e0f2a0e66476"));

        // line 22
        echo "<script type=\"text/javascript\">
\$(function(){
    \$(\".newslist\").each(function(){
        var listLenght = \$(this).find(\"dl\").length;
        if(listLenght>5){
            \$(this).find(\"dl:gt(4)\").each(function(){\$(this).hide();});
            \$(this).append('<a id=\"news_readmore\">» もっと見る</a>');
            var dispNum = 5;
            \$(this).find(\"#news_readmore\").click(function(){
                dispNum +=5;
                \$(this).parent().find(\"dl:lt(\"+dispNum+\")\").show(400);
                if (dispNum>=listLenght) {
                    \$(this).hide();
                }
            })
        }
    });
});
</script>
<div class=\"col-sm-9 news_contents\">
    <div id=\"news_area\">
        <h2 class=\"heading01\">新着情報</h2>
        <div class=\"accordion\">
            <div class=\"newslist\">

                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["NewsList"] ?? $this->getContext($context, "NewsList")));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 48
            echo "                <dl>
                    <dt>
                        <span class=\"date\">";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["News"], "date", array()), "Y/m/d"), "html", null, true);
            echo "</span>
                        <span class=\"news_title\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "title", array()), "html", null, true);
            echo "
                        </span>
                        ";
            // line 54
            if (($this->getAttribute($context["News"], "comment", array()) || $this->getAttribute($context["News"], "url", array()))) {
                // line 55
                echo "                        <span class=\"angle-circle\"><svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg></span>
                        ";
            }
            // line 57
            echo "                    </dt>
                    ";
            // line 58
            if (($this->getAttribute($context["News"], "comment", array()) || $this->getAttribute($context["News"], "url", array()))) {
                // line 59
                echo "                    <dd>";
                echo nl2br($this->getAttribute($context["News"], "comment", array()));
                echo "
                        ";
                // line 60
                if ($this->getAttribute($context["News"], "url", array())) {
                    echo "<br>
                        <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "url", array()), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute($context["News"], "link_method", array()) == "1")) {
                        echo "target=\"_blank\"";
                    }
                    echo ">
                        詳しくはこちら
                        </a>";
                }
                // line 64
                echo "                    </dd>
                    ";
            }
            // line 66
            echo "                </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_2e4e385882b7c43c0ab7fa5d3004ffc19aedf91a010c6bd6ac921f325138f88f->leave($__internal_2e4e385882b7c43c0ab7fa5d3004ffc19aedf91a010c6bd6ac921f325138f88f_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__1df57c13e48a53ead2e31b0815d7821781728a1aa45400b3c585e0f2a0e66476";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 68,  101 => 66,  97 => 64,  87 => 61,  83 => 60,  78 => 59,  76 => 58,  73 => 57,  69 => 55,  67 => 54,  62 => 52,  57 => 50,  53 => 48,  49 => 47,  22 => 22,);
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
<script type=\"text/javascript\">
\$(function(){
    \$(\".newslist\").each(function(){
        var listLenght = \$(this).find(\"dl\").length;
        if(listLenght>5){
            \$(this).find(\"dl:gt(4)\").each(function(){\$(this).hide();});
            \$(this).append('<a id=\"news_readmore\">» もっと見る</a>');
            var dispNum = 5;
            \$(this).find(\"#news_readmore\").click(function(){
                dispNum +=5;
                \$(this).parent().find(\"dl:lt(\"+dispNum+\")\").show(400);
                if (dispNum>=listLenght) {
                    \$(this).hide();
                }
            })
        }
    });
});
</script>
<div class=\"col-sm-9 news_contents\">
    <div id=\"news_area\">
        <h2 class=\"heading01\">新着情報</h2>
        <div class=\"accordion\">
            <div class=\"newslist\">

                {% for News in NewsList %}
                <dl>
                    <dt>
                        <span class=\"date\">{{ News.date|date(\"Y/m/d\") }}</span>
                        <span class=\"news_title\">
                            {{ News.title }}
                        </span>
                        {% if News.comment or News.url %}
                        <span class=\"angle-circle\"><svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg></span>
                        {% endif %}
                    </dt>
                    {% if News.comment or News.url %}
                    <dd>{{ News.comment|raw|nl2br}}
                        {% if News.url %}<br>
                        <a href=\"{{ News.url }}\" {% if News.link_method == '1' %}target=\"_blank\"{% endif %}>
                        詳しくはこちら
                        </a>{% endif %}
                    </dd>
                    {% endif %}
                </dl>
                {% endfor %}

            </div>
        </div>
    </div>
</div>
", "__string_template__1df57c13e48a53ead2e31b0815d7821781728a1aa45400b3c585e0f2a0e66476", "");
    }
}
