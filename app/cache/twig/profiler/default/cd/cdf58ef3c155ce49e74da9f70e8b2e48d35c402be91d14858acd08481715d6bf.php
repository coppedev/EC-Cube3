<?php

/* Block/free.twig */
class __TwigTemplate_868cd19b45adc40d1c7434b2fe31159e6c578ad9a7aaafb112a2e019b44cce20 extends Twig_Template
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
        $__internal_b44205e60457a3f6fb39e9c4b843191d8e791bdf23760cd0f4d82b623208136f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44205e60457a3f6fb39e9c4b843191d8e791bdf23760cd0f4d82b623208136f->enter($__internal_b44205e60457a3f6fb39e9c4b843191d8e791bdf23760cd0f4d82b623208136f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Block/free.twig"));

        // line 22
        echo "<div class=\"col-sm-3 txt_bnr_area\">
    <div class=\"txt_bnr\">";
        // line 24
        if ($this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "delivery_free_amount", array())) {
            // line 25
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "delivery_free_amount", array())), "html", null, true);
            echo "円以上の購入で<br><strong>配送料無料</strong></strong><br>一部地域は除く";
        } else {
            // line 27
            echo "<strong>0円以上の購入で<br><strong>配送料無料</strong></strong><br>一部地域は除く";
        }
        // line 29
        echo "</div>
</div>
";
        
        $__internal_b44205e60457a3f6fb39e9c4b843191d8e791bdf23760cd0f4d82b623208136f->leave($__internal_b44205e60457a3f6fb39e9c4b843191d8e791bdf23760cd0f4d82b623208136f_prof);

    }

    public function getTemplateName()
    {
        return "Block/free.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 29,  32 => 27,  27 => 25,  25 => 24,  22 => 22,);
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
<div class=\"col-sm-3 txt_bnr_area\">
    <div class=\"txt_bnr\">
        {%- if BaseInfo.delivery_free_amount -%}
            <strong>{{ BaseInfo.delivery_free_amount|number_format }}円以上の購入で<br><strong>配送料無料</strong></strong><br>一部地域は除く
        {%- else -%}
            <strong>0円以上の購入で<br><strong>配送料無料</strong></strong><br>一部地域は除く
        {%- endif -%}
    </div>
</div>
", "Block/free.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/default/Block/free.twig");
    }
}
