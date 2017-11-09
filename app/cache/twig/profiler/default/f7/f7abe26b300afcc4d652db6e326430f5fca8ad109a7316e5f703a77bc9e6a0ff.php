<?php

/* pagination.twig */
class __TwigTemplate_335473d2254e1e41601a3fc0395077b40a1d19a8d7446e574aad4ca84a40bddc extends Twig_Template
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
        $__internal_2b3d15203d3a1db620b1c163639d57d3a6dc16cc062220b1739c28a491f87aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3d15203d3a1db620b1c163639d57d3a6dc16cc062220b1739c28a491f87aa9->enter($__internal_2b3d15203d3a1db620b1c163639d57d3a6dc16cc062220b1739c28a491f87aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagination.twig"));

        // line 22
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array(), "any", false, true), "pageinrange", array(), "any", true, true)) {
            // line 23
            echo "    ";
            $context["pageinrange"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "pageinrange", array());
        } else {
            // line 25
            echo "    ";
            $context["pageinrange"] = false;
        }
        // line 27
        echo "
";
        // line 28
        if (($this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "pageCount", array()) > 1)) {
            // line 29
            echo "<div id=\"pagination_wrap\" class=\"pagination\">
    <ul>

        ";
            // line 32
            if ((($context["pageinrange"] ?? $this->getContext($context, "pageinrange")) && ($this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "firstPageInRange", array()) != 1))) {
                // line 33
                echo "            ";
                // line 34
                echo "            <li class=\"pagenation__item-first\">
                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "first", array())))), "html", null, true);
                echo "\"
                   aria-label=\"First\"><span aria-hidden=\"true\">最初へ</span></a>
            </li>
        ";
            }
            // line 39
            echo "
        ";
            // line 40
            if ($this->getAttribute(($context["pages"] ?? null), "previous", array(), "any", true, true)) {
                // line 41
                echo "            <li class=\"pagenation__item-previous\">
                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "previous", array())))), "html", null, true);
                echo "\"
                   aria-label=\"Previous\"><span aria-hidden=\"true\">前へ</span></a>
            </li>
        ";
            }
            // line 46
            echo "
        ";
            // line 47
            if ((($context["pageinrange"] ?? $this->getContext($context, "pageinrange")) && ($this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "firstPageInRange", array()) != 1))) {
                // line 48
                echo "            ";
                // line 49
                echo "            <li>...</li>
        ";
            }
            // line 51
            echo "
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "pagesInRange", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 53
                echo "            ";
                if (($context["page"] == $this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "current", array()))) {
                    // line 54
                    echo "                <li class=\"pagenation__item active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $context["page"]))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                } else {
                    // line 56
                    echo "                <li class=\"pagenation__item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $context["page"]))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                }
                // line 58
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
        ";
            // line 60
            if ((($context["pageinrange"] ?? $this->getContext($context, "pageinrange")) && ($this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "last", array()) != $this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "lastPageInRange", array())))) {
                // line 61
                echo "            ";
                // line 62
                echo "            <li>...</li>
        ";
            }
            // line 64
            echo "
        ";
            // line 65
            if ($this->getAttribute(($context["pages"] ?? null), "next", array(), "any", true, true)) {
                // line 66
                echo "            <li class=\"pagenation__item-next\">
                <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "next", array())))), "html", null, true);
                echo "\"
                   aria-label=\"Next\"><span aria-hidden=\"true\">次へ</span></a>
            </li>
        ";
            }
            // line 71
            echo "
        ";
            // line 72
            if ((($context["pageinrange"] ?? $this->getContext($context, "pageinrange")) && ($this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "last", array()) != $this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "lastPageInRange", array())))) {
                // line 73
                echo "            ";
                // line 74
                echo "            <li class=\"pagenation__item-last\">
                <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("pageno" => $this->getAttribute(($context["pages"] ?? $this->getContext($context, "pages")), "last", array())))), "html", null, true);
                echo "\"
                   aria-label=\"Last\"><span aria-hidden=\"true\">最後へ</span></a>
            </li>
        ";
            }
            // line 79
            echo "    </ul>
</div>
";
        }
        
        $__internal_2b3d15203d3a1db620b1c163639d57d3a6dc16cc062220b1739c28a491f87aa9->leave($__internal_2b3d15203d3a1db620b1c163639d57d3a6dc16cc062220b1739c28a491f87aa9_prof);

    }

    public function getTemplateName()
    {
        return "pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 79,  150 => 75,  147 => 74,  145 => 73,  143 => 72,  140 => 71,  133 => 67,  130 => 66,  128 => 65,  125 => 64,  121 => 62,  119 => 61,  117 => 60,  114 => 59,  108 => 58,  100 => 56,  92 => 54,  89 => 53,  85 => 52,  82 => 51,  78 => 49,  76 => 48,  74 => 47,  71 => 46,  64 => 42,  61 => 41,  59 => 40,  56 => 39,  49 => 35,  46 => 34,  44 => 33,  42 => 32,  37 => 29,  35 => 28,  32 => 27,  28 => 25,  24 => 23,  22 => 22,);
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
{% if app.config.pageinrange  is defined %}
    {% set pageinrange  = app.config.pageinrange %}
{% else  %}
    {% set pageinrange  = false %}
{% endif %}

{% if pages.pageCount > 1 %}
<div id=\"pagination_wrap\" class=\"pagination\">
    <ul>

        {% if pageinrange and pages.firstPageInRange != 1 %}
            {# 最初へリンクを表示 #}
            <li class=\"pagenation__item-first\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': pages.first})) }}\"
                   aria-label=\"First\"><span aria-hidden=\"true\">最初へ</span></a>
            </li>
        {% endif %}

        {% if pages.previous is defined %}
            <li class=\"pagenation__item-previous\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': pages.previous})) }}\"
                   aria-label=\"Previous\"><span aria-hidden=\"true\">前へ</span></a>
            </li>
        {% endif %}

        {% if pageinrange and pages.firstPageInRange != 1 %}
            {# 1ページリンクが表示されない場合、「...」を表示 #}
            <li>...</li>
        {% endif %}

        {% for page in pages.pagesInRange %}
            {% if page == pages.current %}
                <li class=\"pagenation__item active\"><a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': page})) }}\"> {{ page }} </a></li>
            {% else %}
                <li class=\"pagenation__item\"><a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': page})) }}\"> {{ page }} </a></li>
            {% endif %}
        {% endfor %}

        {% if pageinrange and pages.last != pages.lastPageInRange %}
            {# 最終ページリンクが表示されない場合、「...」を表示 #}
            <li>...</li>
        {% endif %}

        {% if pages.next is defined %}
            <li class=\"pagenation__item-next\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': pages.next})) }}\"
                   aria-label=\"Next\"><span aria-hidden=\"true\">次へ</span></a>
            </li>
        {% endif %}

        {% if pageinrange and pages.last != pages.lastPageInRange %}
            {# 最後へリンクを表示 #}
            <li class=\"pagenation__item-last\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': pages.last})) }}\"
                   aria-label=\"Last\"><span aria-hidden=\"true\">最後へ</span></a>
            </li>
        {% endif %}
    </ul>
</div>
{% endif %}
", "pagination.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/default/pagination.twig");
    }
}
