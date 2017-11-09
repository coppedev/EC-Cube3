<?php

/* default_frame.twig */
class __TwigTemplate_800f371f5f2a0ecce148220c6cf0a105d6033e683a08758fc694ddd38c17b614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d00e8500437ac869a0d98c9197db2afae36fdcafb802d031ac05dd4bda3dc113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00e8500437ac869a0d98c9197db2afae36fdcafb802d031ac05dd4bda3dc113->enter($__internal_d00e8500437ac869a0d98c9197db2afae36fdcafb802d031ac05dd4bda3dc113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default_frame.twig"));

        // line 1
        echo "<!doctype html>
";
        // line 23
        echo "<html lang=\"ja\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "shop_name", array()), "html", null, true);
        if ((array_key_exists("subtitle", $context) &&  !twig_test_empty(($context["subtitle"] ?? $this->getContext($context, "subtitle"))))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? $this->getContext($context, "subtitle")), "html", null, true);
        } elseif ((array_key_exists("title", $context) &&  !twig_test_empty(($context["title"] ?? $this->getContext($context, "title"))))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        }
        echo "</title>
";
        // line 28
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "author", array()))) {
            // line 29
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "author", array()), "html", null, true);
            echo "\">
";
        }
        // line 31
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "description", array()))) {
            // line 32
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "description", array()), "html", null, true);
            echo "\">
";
        }
        // line 34
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "keyword", array()))) {
            // line 35
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "keyword", array()), "html", null, true);
            echo "\">
";
        }
        // line 37
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "meta_robots", array()))) {
            // line 38
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "meta_robots", array()), "html", null, true);
            echo "\">
";
        }
        // line 40
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 41
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "meta_tags", array()))) {
            // line 42
            echo "    ";
            echo $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "meta_tags", array());
            echo "
";
        }
        // line 44
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 45
        echo "<link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/slick.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/default.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<!-- for original theme CSS -->
";
        // line 50
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 51
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>

";
        // line 56
        if ($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "Head", array())) {
            // line 57
            echo "    ";
            // line 58
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "Head", array())));
            echo "
    ";
        }
        // line 62
        echo "
</head>
<body id=\"page_";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter(($context["body_class"] ?? $this->getContext($context, "body_class")), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
<div id=\"wrapper\">
    <header id=\"header\">
        <div class=\"container-fluid inner\">
            ";
        // line 69
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "Header", array())) {
            // line 70
            echo "                ";
            // line 71
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "Header", array())));
            echo "
                ";
            // line 73
            echo "            ";
        }
        // line 74
        echo "            ";
        // line 75
        echo "            <p id=\"btn_menu\"><a class=\"nav-trigger\" href=\"#nav\">Menu<span></span></a></p>
        </div>
    </header>

    <div id=\"contents\" class=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "theme", array()), "html", null, true);
        echo "\">

        <div id=\"contents_top\">
            ";
        // line 83
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "ContentsTop", array())) {
            // line 84
            echo "                ";
            // line 85
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "ContentsTop", array())));
            echo "
                ";
            // line 87
            echo "            ";
        }
        // line 88
        echo "            ";
        // line 89
        echo "        </div>

        <div class=\"container-fluid inner\">
            ";
        // line 93
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "SideLeft", array())) {
            // line 94
            echo "                <div id=\"side_left\" class=\"side\">
                    ";
            // line 96
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "SideLeft", array())));
            echo "
                    ";
            // line 98
            echo "                </div>
            ";
        }
        // line 100
        echo "            ";
        // line 101
        echo "
            <div id=\"main\">
                ";
        // line 104
        echo "                ";
        if ($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "MainTop", array())) {
            // line 105
            echo "                    <div id=\"main_top\">
                        ";
            // line 106
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "MainTop", array())));
            echo "
                    </div>
                ";
        }
        // line 109
        echo "                ";
        // line 110
        echo "
                <div id=\"main_middle\">
                    ";
        // line 112
        $this->displayBlock('main', $context, $blocks);
        // line 113
        echo "                </div>

                ";
        // line 116
        echo "                ";
        if ($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "MainBottom", array())) {
            // line 117
            echo "                    <div id=\"main_bottom\">
                        ";
            // line 118
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "MainBottom", array())));
            echo "
                    </div>
                ";
        }
        // line 121
        echo "                ";
        // line 122
        echo "            </div>

            ";
        // line 125
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "SideRight", array())) {
            // line 126
            echo "                <div id=\"side_right\" class=\"side\">
                    ";
            // line 128
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "SideRight", array())));
            echo "
                    ";
            // line 130
            echo "                </div>
            ";
        }
        // line 132
        echo "            ";
        // line 133
        echo "
            ";
        // line 135
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "ContentsBottom", array())) {
            // line 136
            echo "                <div id=\"contents_bottom\">
                    ";
            // line 138
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "ContentsBottom", array())));
            echo "
                    ";
            // line 140
            echo "                </div>
            ";
        }
        // line 142
        echo "            ";
        // line 143
        echo "
        </div>

        <footer id=\"footer\">
            ";
        // line 148
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "Footer", array())) {
            // line 149
            echo "                ";
            // line 150
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? $this->getContext($context, "PageLayout")), "Footer", array())));
            echo "
                ";
            // line 152
            echo "            ";
        }
        // line 153
        echo "            ";
        // line 154
        echo "
        </footer>

    </div>

    <div id=\"drawer\" class=\"drawer sp\">
    </div>

</div>

<div class=\"overlay\"></div>

<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/slick.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
    \$('#drawer').append(\$('.drawer_block').clone(true).children());
    \$.ajax({
        url: '";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
";
        // line 183
        $this->displayBlock('javascript', $context, $blocks);
        // line 184
        echo "</body>
</html>
";
        
        $__internal_d00e8500437ac869a0d98c9197db2afae36fdcafb802d031ac05dd4bda3dc113->leave($__internal_d00e8500437ac869a0d98c9197db2afae36fdcafb802d031ac05dd4bda3dc113_prof);

    }

    // line 44
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_2cf2578b9cdf9c33e91fbbed12a8a79790c09cb0f7ad0d4744afec0604f084c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf2578b9cdf9c33e91fbbed12a8a79790c09cb0f7ad0d4744afec0604f084c2->enter($__internal_2cf2578b9cdf9c33e91fbbed12a8a79790c09cb0f7ad0d4744afec0604f084c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        
        $__internal_2cf2578b9cdf9c33e91fbbed12a8a79790c09cb0f7ad0d4744afec0604f084c2->leave($__internal_2cf2578b9cdf9c33e91fbbed12a8a79790c09cb0f7ad0d4744afec0604f084c2_prof);

    }

    // line 50
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a591551cb78976736eb8f2c93b470b029a50399f2f4a67219cb4b7aa01da2502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a591551cb78976736eb8f2c93b470b029a50399f2f4a67219cb4b7aa01da2502->enter($__internal_a591551cb78976736eb8f2c93b470b029a50399f2f4a67219cb4b7aa01da2502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_a591551cb78976736eb8f2c93b470b029a50399f2f4a67219cb4b7aa01da2502->leave($__internal_a591551cb78976736eb8f2c93b470b029a50399f2f4a67219cb4b7aa01da2502_prof);

    }

    // line 112
    public function block_main($context, array $blocks = array())
    {
        $__internal_4028cd743d99f73493bebe9ec78c18e8f1d9fed78003c6c0647866a68a758f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4028cd743d99f73493bebe9ec78c18e8f1d9fed78003c6c0647866a68a758f86->enter($__internal_4028cd743d99f73493bebe9ec78c18e8f1d9fed78003c6c0647866a68a758f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_4028cd743d99f73493bebe9ec78c18e8f1d9fed78003c6c0647866a68a758f86->leave($__internal_4028cd743d99f73493bebe9ec78c18e8f1d9fed78003c6c0647866a68a758f86_prof);

    }

    // line 183
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8f76160a33b626b6e715312a8a71ffc901c5efb1795de738b5abf971ee9ce3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f76160a33b626b6e715312a8a71ffc901c5efb1795de738b5abf971ee9ce3c4->enter($__internal_8f76160a33b626b6e715312a8a71ffc901c5efb1795de738b5abf971ee9ce3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_8f76160a33b626b6e715312a8a71ffc901c5efb1795de738b5abf971ee9ce3c4->leave($__internal_8f76160a33b626b6e715312a8a71ffc901c5efb1795de738b5abf971ee9ce3c4_prof);

    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 183,  406 => 112,  395 => 50,  384 => 44,  375 => 184,  373 => 183,  361 => 174,  351 => 169,  345 => 168,  339 => 167,  333 => 166,  319 => 154,  317 => 153,  314 => 152,  309 => 150,  307 => 149,  304 => 148,  298 => 143,  296 => 142,  292 => 140,  287 => 138,  284 => 136,  281 => 135,  278 => 133,  276 => 132,  272 => 130,  267 => 128,  264 => 126,  261 => 125,  257 => 122,  255 => 121,  249 => 118,  246 => 117,  243 => 116,  239 => 113,  237 => 112,  233 => 110,  231 => 109,  225 => 106,  222 => 105,  219 => 104,  215 => 101,  213 => 100,  209 => 98,  204 => 96,  201 => 94,  198 => 93,  193 => 89,  191 => 88,  188 => 87,  183 => 85,  181 => 84,  178 => 83,  172 => 79,  166 => 75,  164 => 74,  161 => 73,  156 => 71,  154 => 70,  151 => 69,  142 => 64,  138 => 62,  132 => 58,  130 => 57,  128 => 56,  121 => 53,  117 => 51,  115 => 50,  108 => 48,  102 => 47,  96 => 46,  91 => 45,  89 => 44,  83 => 42,  81 => 41,  78 => 40,  72 => 38,  70 => 37,  64 => 35,  62 => 34,  56 => 32,  54 => 31,  48 => 29,  46 => 28,  35 => 27,  29 => 23,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
{#
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
<html lang=\"ja\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{{ BaseInfo.shop_name }}{% if subtitle is defined and subtitle is not empty %} / {{ subtitle }}{% elseif title is defined and title is not empty %} / {{ title }}{% endif %}</title>
{% if PageLayout.author is not empty %}
    <meta name=\"author\" content=\"{{ PageLayout.author }}\">
{% endif %}
{% if PageLayout.description is not empty %}
    <meta name=\"description\" content=\"{{ PageLayout.description }}\">
{% endif %}
{% if PageLayout.keyword is not empty %}
    <meta name=\"keywords\" content=\"{{ PageLayout.keyword }}\">
{% endif %}
{% if PageLayout.meta_robots is not empty %}
    <meta name=\"robots\" content=\"{{ PageLayout.meta_robots }}\">
{% endif %}
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
{% if PageLayout.meta_tags is not empty %}
    {{ PageLayout.meta_tags|raw }}
{% endif %}
{% block meta_tags %}{% endblock %}
<link rel=\"icon\" href=\"{{ app.config.front_urlpath }}/img/common/favicon.ico\">
<link rel=\"stylesheet\" href=\"{{ app.config.front_urlpath }}/css/style.css?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\">
<link rel=\"stylesheet\" href=\"{{ app.config.front_urlpath }}/css/slick.css?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\">
<link rel=\"stylesheet\" href=\"{{ app.config.front_urlpath }}/css/default.css?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\">
<!-- for original theme CSS -->
{% block stylesheet %}{% endblock %}

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"{{ app.config.front_urlpath }}/js/vendor/jquery-1.11.3.min.js?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\"><\\/script>')</script>

{# ▼Head COLUMN #}
{% if PageLayout.Head %}
    {# ▼上ナビ #}
    {{ include('block.twig', {'Blocks': PageLayout.Head}) }}
    {# ▲上ナビ #}
{% endif %}
{# ▲Head COLUMN #}

</head>
<body id=\"page_{{ app.request.get('_route') }}\" class=\"{{ body_class|default('other_page') }}\">
<div id=\"wrapper\">
    <header id=\"header\">
        <div class=\"container-fluid inner\">
            {# ▼HeaderInternal COLUMN #}
            {% if PageLayout.Header %}
                {# ▼上ナビ #}
                {{ include('block.twig', {'Blocks': PageLayout.Header}) }}
                {# ▲上ナビ #}
            {% endif %}
            {# ▲HeaderInternal COLUMN #}
            <p id=\"btn_menu\"><a class=\"nav-trigger\" href=\"#nav\">Menu<span></span></a></p>
        </div>
    </header>

    <div id=\"contents\" class=\"{{ PageLayout.theme }}\">

        <div id=\"contents_top\">
            {# ▼TOP COLUMN #}
            {% if PageLayout.ContentsTop %}
                {# ▼上ナビ #}
                {{ include('block.twig', {'Blocks': PageLayout.ContentsTop}) }}
                {# ▲上ナビ #}
            {% endif %}
            {# ▲TOP COLUMN #}
        </div>

        <div class=\"container-fluid inner\">
            {# ▼LEFT COLUMN #}
            {% if PageLayout.SideLeft %}
                <div id=\"side_left\" class=\"side\">
                    {# ▼左ナビ #}
                    {{ include('block.twig', {'Blocks': PageLayout.SideLeft}) }}
                    {# ▲左ナビ #}
                </div>
            {% endif %}
            {# ▲LEFT COLUMN #}

            <div id=\"main\">
                {# ▼メイン上部 #}
                {% if PageLayout.MainTop %}
                    <div id=\"main_top\">
                        {{ include('block.twig', {'Blocks': PageLayout.MainTop}) }}
                    </div>
                {% endif %}
                {# ▲メイン上部 #}

                <div id=\"main_middle\">
                    {% block main %}{% endblock %}
                </div>

                {# ▼メイン下部 #}
                {% if PageLayout.MainBottom %}
                    <div id=\"main_bottom\">
                        {{ include('block.twig', {'Blocks': PageLayout.MainBottom}) }}
                    </div>
                {% endif %}
                {# ▲メイン下部 #}
            </div>

            {# ▼RIGHT COLUMN #}
            {% if PageLayout.SideRight %}
                <div id=\"side_right\" class=\"side\">
                    {# ▼右ナビ #}
                    {{ include('block.twig', {'Blocks': PageLayout.SideRight}) }}
                    {# ▲右ナビ #}
                </div>
            {% endif %}
            {# ▲RIGHT COLUMN #}

            {# ▼BOTTOM COLUMN #}
            {% if PageLayout.ContentsBottom %}
                <div id=\"contents_bottom\">
                    {# ▼下ナビ #}
                    {{ include('block.twig', {'Blocks': PageLayout.ContentsBottom}) }}
                    {# ▲下ナビ #}
                </div>
            {% endif %}
            {# ▲BOTTOM COLUMN #}

        </div>

        <footer id=\"footer\">
            {# ▼Footer COLUMN#}
            {% if PageLayout.Footer %}
                {# ▼上ナビ #}
                {{ include('block.twig', {'Blocks': PageLayout.Footer}) }}
                {# ▲上ナビ #}
            {% endif %}
            {# ▲Footer COLUMN#}

        </footer>

    </div>

    <div id=\"drawer\" class=\"drawer sp\">
    </div>

</div>

<div class=\"overlay\"></div>

<script src=\"{{ app.config.front_urlpath }}/js/vendor/bootstrap.custom.min.js?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\"></script>
<script src=\"{{ app.config.front_urlpath }}/js/vendor/slick.min.js?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\"></script>
<script src=\"{{ app.config.front_urlpath }}/js/function.js?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\"></script>
<script src=\"{{ app.config.front_urlpath }}/js/eccube.js?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\"></script>
<script>
\$(function () {
    \$('#drawer').append(\$('.drawer_block').clone(true).children());
    \$.ajax({
        url: '{{ app.config.front_urlpath }}/img/common/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
{% block javascript %}{% endblock %}
</body>
</html>
", "default_frame.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/default/default_frame.twig");
    }
}
