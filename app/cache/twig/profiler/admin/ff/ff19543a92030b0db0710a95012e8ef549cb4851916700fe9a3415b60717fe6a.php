<?php

/* default_frame.twig */
class __TwigTemplate_928fccf1b3ad8376f1793c1022491607d46b745e74c7c70b97164d74d103d277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'modal' => array($this, 'block_modal'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cee55d5b2fed3a8531921bb1fe9a692f8aec30fa7222b06bbd3dbd1ef8eb50b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee55d5b2fed3a8531921bb1fe9a692f8aec30fa7222b06bbd3dbd1ef8eb50b2->enter($__internal_cee55d5b2fed3a8531921bb1fe9a692f8aec30fa7222b06bbd3dbd1ef8eb50b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default_frame.twig"));

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
        echo " - EC-CUBE管理画面</title>
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/dashboard.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
";
        // line 34
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 35
        echo "<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>
</head>
<body id=\"page_";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\">
<div id=\"wrapper\" class=\"sidebar-open\">
    <!-- ▼ #header ▼ -->
    <header id=\"header\" role=\"navigation\">
        <div class=\"navbar navbar-static-top\">
            <div class=\"logo\" href=\"./\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/logo.png\" width=\"172\"></div>
            <!-- Sidebar toggle button-->

            <div class=\"bt_toggle\">
                <a role=\"button\" data-toggle=\"offcanvas\" class=\"bt_drawermenu\" href=\"#\"> <span class=\"sr-only\">Toggle navigation</span>
                    <svg class=\"cb cb-bars\">
                        <use xlink:href=\"#cb-bars\"/>
                    </svg>
                </a>
            </div>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\" id=\"sitename\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "shop_name", array()), "html", null, true);
        echo "<span class=\"cb cb-external-link\"></span></a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-menu\">
                <dl class=\"dropdown\">
                    ";
        // line 61
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 62
            echo "                        <dt class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <svg class=\"cb cb-user-circle\">
                                <use xlink:href=\"#cb-user-circle\" />
                            </svg>
                            <span class=\"hidden-xs\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " 様</span>
                            <svg class=\"cb cb-angle-down icon_down\">
                                <use xlink:href=\"#cb-angle-down\" />
                            </svg>
                        </dt>
                        <dd class=\"dropdown-menu\">
                            最終ログイン<br>
                            ";
            // line 73
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "login_date", array(), "any", false, true), "format", array(0 => "Y/m/d H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "login_date", array(), "any", false, true), "format", array(0 => "Y/m/d H:i"), "method"), "")) : ("")), "html", null, true);
            echo "
                            <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 74
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_change_password");
            echo "\">パスワード変更</a>
                            <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 75
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl(($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_route", array()) . "_logout"));
            echo "\">ログアウト</a>
                        </dd>
                    ";
        }
        // line 78
        echo "                </dl>
            </div>
        </div>
    </header>
    <!-- ▲ #header ▲ -->
    <!-- ▼ #side ▼ -->
    <aside id=\"side\">
        <ul class=\"nav nav-sidebar\">
            <li>
                <a href=\"";
        // line 87
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_homepage");
        echo "\">
                    <svg class=\"cb cb-home\"><use xlink:href=\"#cb-home\" /></svg>ホーム<svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg>
                </a>
            </li>
            ";
        // line 91
        echo twig_include($this->env, $context, "nav.twig");
        echo "
        </ul>
    </aside>
    <!-- ▲ #side ▲ -->
    <!-- ▼ #main ▼ -->
    <div id=\"main\">
        <h1 class=\"page-header\">";
        // line 97
        $this->displayBlock("title", $context, $blocks);
        echo "<span>";
        $this->displayBlock("sub_title", $context, $blocks);
        echo "</span></h1>

        <div class=\"container-fluid\">

            ";
        // line 101
        echo twig_include($this->env, $context, "alert.twig");
        echo "

            ";
        // line 103
        $this->displayBlock('main', $context, $blocks);
        // line 104
        echo "
        </div>
    </div>
    <!-- ▲ #main ▲ -->

    <!-- ▼ #modal ▼ -->
    ";
        // line 110
        $this->displayBlock('modal', $context, $blocks);
        // line 111
        echo "    <!-- ▲ #modal ▲ -->

</div>

<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/ie10-viewport-bug-workaround.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
    \$.ajax({
        url: '";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
";
        // line 130
        $this->displayBlock('javascript', $context, $blocks);
        // line 131
        echo "</body>
</html>
";
        
        $__internal_cee55d5b2fed3a8531921bb1fe9a692f8aec30fa7222b06bbd3dbd1ef8eb50b2->leave($__internal_cee55d5b2fed3a8531921bb1fe9a692f8aec30fa7222b06bbd3dbd1ef8eb50b2_prof);

    }

    // line 34
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_46b0bb6b3c35e9c9553211fafd661f736b2c98a45c031518ef57bbffb75e745e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b0bb6b3c35e9c9553211fafd661f736b2c98a45c031518ef57bbffb75e745e->enter($__internal_46b0bb6b3c35e9c9553211fafd661f736b2c98a45c031518ef57bbffb75e745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_46b0bb6b3c35e9c9553211fafd661f736b2c98a45c031518ef57bbffb75e745e->leave($__internal_46b0bb6b3c35e9c9553211fafd661f736b2c98a45c031518ef57bbffb75e745e_prof);

    }

    // line 103
    public function block_main($context, array $blocks = array())
    {
        $__internal_b8c972cff34027d065f5c28397e1e4223acacbda53d90247590fc63b76da964b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c972cff34027d065f5c28397e1e4223acacbda53d90247590fc63b76da964b->enter($__internal_b8c972cff34027d065f5c28397e1e4223acacbda53d90247590fc63b76da964b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b8c972cff34027d065f5c28397e1e4223acacbda53d90247590fc63b76da964b->leave($__internal_b8c972cff34027d065f5c28397e1e4223acacbda53d90247590fc63b76da964b_prof);

    }

    // line 110
    public function block_modal($context, array $blocks = array())
    {
        $__internal_725cd1d9569ce149f315b991fe0ece0be39ea270e1fff3f592e250ef8c63ea89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725cd1d9569ce149f315b991fe0ece0be39ea270e1fff3f592e250ef8c63ea89->enter($__internal_725cd1d9569ce149f315b991fe0ece0be39ea270e1fff3f592e250ef8c63ea89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_725cd1d9569ce149f315b991fe0ece0be39ea270e1fff3f592e250ef8c63ea89->leave($__internal_725cd1d9569ce149f315b991fe0ece0be39ea270e1fff3f592e250ef8c63ea89_prof);

    }

    // line 130
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d6260e4fb8450f1400a8e7ec91463a5b4fbc3759c57748d47ebf1b31e0ed9bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6260e4fb8450f1400a8e7ec91463a5b4fbc3759c57748d47ebf1b31e0ed9bda->enter($__internal_d6260e4fb8450f1400a8e7ec91463a5b4fbc3759c57748d47ebf1b31e0ed9bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_d6260e4fb8450f1400a8e7ec91463a5b4fbc3759c57748d47ebf1b31e0ed9bda->leave($__internal_d6260e4fb8450f1400a8e7ec91463a5b4fbc3759c57748d47ebf1b31e0ed9bda_prof);

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
        return array (  272 => 130,  261 => 110,  250 => 103,  239 => 34,  230 => 131,  228 => 130,  216 => 121,  207 => 117,  201 => 116,  195 => 115,  189 => 111,  187 => 110,  179 => 104,  177 => 103,  172 => 101,  163 => 97,  154 => 91,  147 => 87,  136 => 78,  130 => 75,  126 => 74,  122 => 73,  112 => 66,  106 => 62,  104 => 61,  95 => 57,  82 => 47,  74 => 42,  67 => 40,  60 => 35,  58 => 34,  52 => 33,  46 => 32,  42 => 31,  35 => 27,  29 => 23,  26 => 1,);
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
<title>{{ BaseInfo.shop_name }} - EC-CUBE管理画面</title>
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"icon\" href=\"{{ app.config.admin_urlpath }}/assets/img/favicon.ico\">
<link rel=\"stylesheet\" href=\"{{ app.config.admin_urlpath }}/assets/css/bootstrap.min.css?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\">
<link rel=\"stylesheet\" href=\"{{ app.config.admin_urlpath }}/assets/css/dashboard.css?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\">
{% block stylesheet %}{% endblock %}
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"{{ app.config.admin_urlpath }}/assets/js/vendor/jquery-1.11.3.min.js?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\"><\\/script>')</script>
</head>
<body id=\"page_{{ app.request.get('_route') }}\">
<div id=\"wrapper\" class=\"sidebar-open\">
    <!-- ▼ #header ▼ -->
    <header id=\"header\" role=\"navigation\">
        <div class=\"navbar navbar-static-top\">
            <div class=\"logo\" href=\"./\"><img src=\"{{ app.config.admin_urlpath }}/assets/img/logo.png\" width=\"172\"></div>
            <!-- Sidebar toggle button-->

            <div class=\"bt_toggle\">
                <a role=\"button\" data-toggle=\"offcanvas\" class=\"bt_drawermenu\" href=\"#\"> <span class=\"sr-only\">Toggle navigation</span>
                    <svg class=\"cb cb-bars\">
                        <use xlink:href=\"#cb-bars\"/>
                    </svg>
                </a>
            </div>
            <a href=\"{{ url('homepage') }}\" id=\"sitename\" target=\"_blank\">{{ BaseInfo.shop_name }}<span class=\"cb cb-external-link\"></span></a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-menu\">
                <dl class=\"dropdown\">
                    {% if is_granted('ROLE_ADMIN') %}
                        <dt class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <svg class=\"cb cb-user-circle\">
                                <use xlink:href=\"#cb-user-circle\" />
                            </svg>
                            <span class=\"hidden-xs\">{{ app.user.name }} 様</span>
                            <svg class=\"cb cb-angle-down icon_down\">
                                <use xlink:href=\"#cb-angle-down\" />
                            </svg>
                        </dt>
                        <dd class=\"dropdown-menu\">
                            最終ログイン<br>
                            {{ app.user.login_date.format('Y/m/d H:i')|default('') }}
                            <a class=\"btn btn-primary btn-xs\" href=\"{{ url('admin_change_password') }}\">パスワード変更</a>
                            <a class=\"btn btn-primary btn-xs\" href=\"{{ url(app.config.admin_route ~ '_logout') }}\">ログアウト</a>
                        </dd>
                    {% endif %}
                </dl>
            </div>
        </div>
    </header>
    <!-- ▲ #header ▲ -->
    <!-- ▼ #side ▼ -->
    <aside id=\"side\">
        <ul class=\"nav nav-sidebar\">
            <li>
                <a href=\"{{ url('admin_homepage') }}\">
                    <svg class=\"cb cb-home\"><use xlink:href=\"#cb-home\" /></svg>ホーム<svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg>
                </a>
            </li>
            {{ include('nav.twig') }}
        </ul>
    </aside>
    <!-- ▲ #side ▲ -->
    <!-- ▼ #main ▼ -->
    <div id=\"main\">
        <h1 class=\"page-header\">{{ block('title') }}<span>{{ block('sub_title') }}</span></h1>

        <div class=\"container-fluid\">

            {{ include('alert.twig') }}

            {% block main %}{% endblock %}

        </div>
    </div>
    <!-- ▲ #main ▲ -->

    <!-- ▼ #modal ▼ -->
    {% block modal %}{% endblock %}
    <!-- ▲ #modal ▲ -->

</div>

<script src=\"{{ app.config.admin_urlpath }}/assets/js/vendor/bootstrap.min.js?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\"></script>
<script src=\"{{ app.config.admin_urlpath }}/assets/js/vendor/ie10-viewport-bug-workaround.js?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\"></script>
<script src=\"{{ app.config.admin_urlpath }}/assets/js/function.js?v={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\"></script>
<script>
\$(function () {
    \$.ajax({
        url: '{{ app.config.admin_urlpath }}/assets/img/svg.html',
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
", "default_frame.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/admin/default_frame.twig");
    }
}
