<?php

/* __string_template__96301ab036ac58dc1d7beb6881200605c865e3224ad0b81dfb5b59139f9bf597 */
class __TwigTemplate_881bcd3656fb01ed684230d4fc199ab29354447e98eb573123c8d98566a29417 extends Twig_Template
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
        $__internal_292a0a5c6295cdd7bf0460e2cf35fe298179790128c7dbeb8325f3f9252a840c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292a0a5c6295cdd7bf0460e2cf35fe298179790128c7dbeb8325f3f9252a840c->enter($__internal_292a0a5c6295cdd7bf0460e2cf35fe298179790128c7dbeb8325f3f9252a840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__96301ab036ac58dc1d7beb6881200605c865e3224ad0b81dfb5b59139f9bf597"));

        // line 36
        echo "
<nav id=\"category\" class=\"drawer_block pc\">
    <ul class=\"category-nav\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? $this->getContext($context, "Categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 40
            echo "        ";
            echo $this->getAttribute($this, "tree", array(0 => $context["Category"]), "method");
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul> <!-- category-nav -->
</nav>
";
        
        $__internal_292a0a5c6295cdd7bf0460e2cf35fe298179790128c7dbeb8325f3f9252a840c->leave($__internal_292a0a5c6295cdd7bf0460e2cf35fe298179790128c7dbeb8325f3f9252a840c_prof);

    }

    // line 22
    public function gettree($__Category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b1365bddb8fadd842551cbd28138cb8fe3564544a636bba0ba7b9de4f9f00ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b1365bddb8fadd842551cbd28138cb8fe3564544a636bba0ba7b9de4f9f00ec4->enter($__internal_b1365bddb8fadd842551cbd28138cb8fe3564544a636bba0ba7b9de4f9f00ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tree"));

            // line 23
            echo "    <li>
        <a href=\"";
            // line 24
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "id", array()), "html", null, true);
            echo "\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "name", array()), "html", null, true);
            echo "
        </a>
        ";
            // line 27
            if ((twig_length_filter($this->env, $this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "children", array())) > 0)) {
                // line 28
                echo "            <ul>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 30
                    echo "                    ";
                    echo $this->getAttribute($this, "tree", array(0 => $context["ChildCategory"]), "method");
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </ul>
        ";
            }
            // line 34
            echo "    </li>
";
            
            $__internal_b1365bddb8fadd842551cbd28138cb8fe3564544a636bba0ba7b9de4f9f00ec4->leave($__internal_b1365bddb8fadd842551cbd28138cb8fe3564544a636bba0ba7b9de4f9f00ec4_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "__string_template__96301ab036ac58dc1d7beb6881200605c865e3224ad0b81dfb5b59139f9bf597";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  96 => 32,  87 => 30,  83 => 29,  80 => 28,  78 => 27,  73 => 25,  67 => 24,  64 => 23,  49 => 22,  40 => 42,  31 => 40,  27 => 39,  22 => 36,);
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
{% macro tree(Category) %}
    <li>
        <a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">
            {{ Category.name }}
        </a>
        {% if Category.children|length > 0 %}
            <ul>
            {% for ChildCategory in Category.children %}
                    {{ _self.tree(ChildCategory) }}
            {% endfor %}
            </ul>
        {% endif %}
    </li>
{% endmacro %}

<nav id=\"category\" class=\"drawer_block pc\">
    <ul class=\"category-nav\">
    {% for Category in Categories %}
        {{ _self.tree(Category) }}
    {% endfor %}
    </ul> <!-- category-nav -->
</nav>
", "__string_template__96301ab036ac58dc1d7beb6881200605c865e3224ad0b81dfb5b59139f9bf597", "");
    }
}
