<?php

/* Block/footer.twig */
class __TwigTemplate_fdaa313fda1cd64ff4221ede3a1d88f8e5530ba640baf753a725ad24b81bb9ef extends Twig_Template
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
        $__internal_fd549565021e2dfd5d333c9080447d18c1b86a49eb17bc310d15c238c79b753e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd549565021e2dfd5d333c9080447d18c1b86a49eb17bc310d15c238c79b753e->enter($__internal_fd549565021e2dfd5d333c9080447d18c1b86a49eb17bc310d15c238c79b753e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Block/footer.twig"));

        // line 22
        echo "<div class=\"container-fluid inner\">
    <ul>
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_about");
        echo "\">当サイトについて</a></li>
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_privacy");
        echo "\">プライバシーポリシー</a></li>
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_tradelaw");
        echo "\">特定商取引法に基づく表記</a></li>
        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("contact");
        echo "\">お問い合わせ</a></li>
    </ul>
    <div class=\"footer_logo_area\">
        <p class=\"logo\"><a href=\"";
        // line 30
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "shop_name", array()), "html", null, true);
        echo "</a></p>
        <p class=\"copyright\">
            <small>copyright (c) ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "shop_name", array()), "html", null, true);
        echo " all rights reserved.</small>
        </p>
    </div>
</div>

";
        
        $__internal_fd549565021e2dfd5d333c9080447d18c1b86a49eb17bc310d15c238c79b753e->leave($__internal_fd549565021e2dfd5d333c9080447d18c1b86a49eb17bc310d15c238c79b753e_prof);

    }

    public function getTemplateName()
    {
        return "Block/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 32,  44 => 30,  38 => 27,  34 => 26,  30 => 25,  26 => 24,  22 => 22,);
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
<div class=\"container-fluid inner\">
    <ul>
        <li><a href=\"{{ url('help_about') }}\">当サイトについて</a></li>
        <li><a href=\"{{ url('help_privacy') }}\">プライバシーポリシー</a></li>
        <li><a href=\"{{ url('help_tradelaw') }}\">特定商取引法に基づく表記</a></li>
        <li><a href=\"{{ url('contact') }}\">お問い合わせ</a></li>
    </ul>
    <div class=\"footer_logo_area\">
        <p class=\"logo\"><a href=\"{{ url('homepage') }}\">{{ BaseInfo.shop_name }}</a></p>
        <p class=\"copyright\">
            <small>copyright (c) {{ BaseInfo.shop_name }} all rights reserved.</small>
        </p>
    </div>
</div>

", "Block/footer.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/default/Block/footer.twig");
    }
}
