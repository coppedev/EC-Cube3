<?php

/* __string_template__eacc36ee09d612a12a42d99fe357bd240462442e8ab0776499943adf13a2bc24 */
class __TwigTemplate_50abe0574cb2eb254fa997de78e93c188581260020117dbae2d0608a5c38b7a6 extends Twig_Template
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
        $__internal_ded500f67a4a52398843c141ab0dfe2d94a1f9d197e7c5c407a24c3ab562ed4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded500f67a4a52398843c141ab0dfe2d94a1f9d197e7c5c407a24c3ab562ed4c->enter($__internal_ded500f67a4a52398843c141ab0dfe2d94a1f9d197e7c5c407a24c3ab562ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__eacc36ee09d612a12a42d99fe357bd240462442e8ab0776499943adf13a2bc24"));

        // line 22
        echo "<div class=\"drawer_block pc header_bottom_area\">
    <div id=\"search\" class=\"search\">
        <form method=\"get\" id=\"searchform\" action=\"";
        // line 24
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath("product_list");
        echo "\">
            <div class=\"search_inner\">
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_id", array()), 'widget');
        echo "
                <div class=\"input_search clearfix\">
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "キーワードを入力")));
        echo "
                    <button type=\"submit\" class=\"bt_search\"><svg class=\"cb cb-search\"><use xlink:href=\"#cb-search\" /></svg></button>
                </div>
            </div>
            <div class=\"extra-form\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 34
            echo "                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 35
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                        ";
                // line 36
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                        ";
                // line 37
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                    ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </form>
    </div>
</div>";
        
        $__internal_ded500f67a4a52398843c141ab0dfe2d94a1f9d197e7c5c407a24c3ab562ed4c->leave($__internal_ded500f67a4a52398843c141ab0dfe2d94a1f9d197e7c5c407a24c3ab562ed4c_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__eacc36ee09d612a12a42d99fe357bd240462442e8ab0776499943adf13a2bc24";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 40,  65 => 39,  60 => 37,  56 => 36,  51 => 35,  48 => 34,  44 => 33,  36 => 28,  31 => 26,  26 => 24,  22 => 22,);
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
<div class=\"drawer_block pc header_bottom_area\">
    <div id=\"search\" class=\"search\">
        <form method=\"get\" id=\"searchform\" action=\"{{ path('product_list') }}\">
            <div class=\"search_inner\">
                {{ form_widget(form.category_id) }}
                <div class=\"input_search clearfix\">
                    {{ form_widget(form.name, {'attr': { 'placeholder' : \"キーワードを入力\" }} ) }}
                    <button type=\"submit\" class=\"bt_search\"><svg class=\"cb cb-search\"><use xlink:href=\"#cb-search\" /></svg></button>
                </div>
            </div>
            <div class=\"extra-form\">
                {% for f in form.getIterator %}
                    {% if f.vars.name matches '[^plg*]' %}
                        {{ form_label(f) }}
                        {{ form_widget(f) }}
                        {{ form_errors(f) }}
                    {% endif %}
                {% endfor %}
            </div>
        </form>
    </div>
</div>", "__string_template__eacc36ee09d612a12a42d99fe357bd240462442e8ab0776499943adf13a2bc24", "");
    }
}
