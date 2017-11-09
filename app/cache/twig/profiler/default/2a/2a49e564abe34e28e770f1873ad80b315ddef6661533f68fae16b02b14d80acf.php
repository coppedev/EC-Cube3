<?php

/* Block/logo.twig */
class __TwigTemplate_311812faada941f92b45070a4cc18822f88c619a9ede46b7f077caf95adc4af1 extends Twig_Template
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
        $__internal_8ad777918d4682e89b940f9f0b0483dbb5fb2e43a86c98bd3a923b435620cfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad777918d4682e89b940f9f0b0483dbb5fb2e43a86c98bd3a923b435620cfd8->enter($__internal_8ad777918d4682e89b940f9f0b0483dbb5fb2e43a86c98bd3a923b435620cfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Block/logo.twig"));

        // line 22
        echo "             <div class=\"header_logo_area\">
                <p class=\"copy\">くらしを楽しむライフスタイルグッズ</p>
                <h1 class=\"header_logo\"><a href=\"";
        // line 24
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "shop_name", array()), "html", null, true);
        echo "</a></h1>
            </div>
";
        
        $__internal_8ad777918d4682e89b940f9f0b0483dbb5fb2e43a86c98bd3a923b435620cfd8->leave($__internal_8ad777918d4682e89b940f9f0b0483dbb5fb2e43a86c98bd3a923b435620cfd8_prof);

    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 24,  22 => 22,);
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
             <div class=\"header_logo_area\">
                <p class=\"copy\">くらしを楽しむライフスタイルグッズ</p>
                <h1 class=\"header_logo\"><a href=\"{{ url('homepage') }}\">{{ BaseInfo.shop_name }}</a></h1>
            </div>
", "Block/logo.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/default/Block/logo.twig");
    }
}
