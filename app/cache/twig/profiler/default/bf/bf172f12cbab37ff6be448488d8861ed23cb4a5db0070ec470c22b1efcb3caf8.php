<?php

/* __string_template__dc7d5d39e0e79147f5d86265f9ab389e687068f47e4fb805809a658826c0e356 */
class __TwigTemplate_51ddb57a1c5bdbea11174dd15d79ad00f20412307e6db62e5b9ce46c0f05eab8 extends Twig_Template
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
        $__internal_a0ee0cb4f3b052d664e855519d0c9c3635299880e6d3f8c515ab3b90acdf12b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ee0cb4f3b052d664e855519d0c9c3635299880e6d3f8c515ab3b90acdf12b6->enter($__internal_a0ee0cb4f3b052d664e855519d0c9c3635299880e6d3f8c515ab3b90acdf12b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__dc7d5d39e0e79147f5d86265f9ab389e687068f47e4fb805809a658826c0e356"));

        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 23
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 26
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage");
            echo "\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>マイページ
                </a>
            </li>
            ";
            // line 30
            if (($this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "option_favorite_product", array()) == 1)) {
                // line 31
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_favorite");
                echo "\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 33
            echo "            <li>
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("logout");
            echo "\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログアウト
                </a>
            </li>
        </ul>
    </div>
";
        } else {
            // line 41
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 44
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("entry");
            echo "\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>新規会員登録
                </a>
            </li>
            ";
            // line 48
            if (($this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "option_favorite_product", array()) == 1)) {
                // line 49
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_favorite");
                echo "\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 51
            echo "            <li>
                <a href=\"";
            // line 52
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_login");
            echo "\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログイン
                </a>
            </li>
        </ul>
    </div>
";
        }
        
        $__internal_a0ee0cb4f3b052d664e855519d0c9c3635299880e6d3f8c515ab3b90acdf12b6->leave($__internal_a0ee0cb4f3b052d664e855519d0c9c3635299880e6d3f8c515ab3b90acdf12b6_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__dc7d5d39e0e79147f5d86265f9ab389e687068f47e4fb805809a658826c0e356";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 52,  77 => 51,  71 => 49,  69 => 48,  62 => 44,  57 => 41,  47 => 34,  44 => 33,  38 => 31,  36 => 30,  29 => 26,  24 => 23,  22 => 22,);
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
{% if is_granted('ROLE_USER') %}
    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"{{ url('mypage') }}\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>マイページ
                </a>
            </li>
            {% if BaseInfo.option_favorite_product == 1 %}
                <li><a href=\"{{ url('mypage_favorite') }}\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            {% endif %}
            <li>
                <a href=\"{{ url('logout') }}\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログアウト
                </a>
            </li>
        </ul>
    </div>
{% else %}
    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"{{ url('entry') }}\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>新規会員登録
                </a>
            </li>
            {% if BaseInfo.option_favorite_product == 1 %}
                <li><a href=\"{{ url('mypage_favorite') }}\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            {% endif %}
            <li>
                <a href=\"{{ url('mypage_login') }}\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログイン
                </a>
            </li>
        </ul>
    </div>
{% endif %}", "__string_template__dc7d5d39e0e79147f5d86265f9ab389e687068f47e4fb805809a658826c0e356", "");
    }
}
