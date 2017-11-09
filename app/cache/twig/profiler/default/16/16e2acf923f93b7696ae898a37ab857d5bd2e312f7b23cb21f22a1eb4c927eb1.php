<?php

/* block.twig */
class __TwigTemplate_0444a109025788d3461cbc28c88a6fee79db6f19c6ae9deb46d56801783fd0c3 extends Twig_Template
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
        $__internal_e87315834b8ef13a13292b6b3a8a54fd8d9b33e50b102f036f82d4f041eebd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87315834b8ef13a13292b6b3a8a54fd8d9b33e50b102f036f82d4f041eebd8f->enter($__internal_e87315834b8ef13a13292b6b3a8a54fd8d9b33e50b102f036f82d4f041eebd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "block.twig"));

        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blocks"] ?? $this->getContext($context, "Blocks")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Block"]) {
            // line 23
            echo "    <!-- ▼";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Block"], "name", array()), "html", null, true);
            echo " -->
    ";
            // line 24
            if ($this->getAttribute($context["Block"], "logic_flg", array())) {
                // line 25
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "http_cache", array()), "enabled", array())) {
                    // line 26
                    echo "            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragmentStrategy("esi", $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath(("block_" . $this->getAttribute($context["Block"], "file_name", array()))));
                    echo "
        ";
                } else {
                    // line 28
                    echo "            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath(("block_" . $this->getAttribute($context["Block"], "file_name", array()))));
                    echo "
        ";
                }
                // line 30
                echo "    ";
            } else {
                // line 31
                echo "        ";
                echo twig_include($this->env, $context, (("Block/" . $this->getAttribute($context["Block"], "file_name", array())) . ".twig"), array(), true, true);
                echo "
    ";
            }
            // line 33
            echo "    <!-- ▲";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Block"], "name", array()), "html", null, true);
            echo " -->
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e87315834b8ef13a13292b6b3a8a54fd8d9b33e50b102f036f82d4f041eebd8f->leave($__internal_e87315834b8ef13a13292b6b3a8a54fd8d9b33e50b102f036f82d4f041eebd8f_prof);

    }

    public function getTemplateName()
    {
        return "block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  64 => 31,  61 => 30,  55 => 28,  49 => 26,  46 => 25,  44 => 24,  39 => 23,  22 => 22,);
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
{% for Block in Blocks %}
    <!-- ▼{{ Block.name }} -->
    {% if Block.logic_flg %}
        {% if app.config.http_cache.enabled %}
            {{ render_esi(path('block_' ~ Block.file_name)) }}
        {% else %}
            {{ render(path('block_' ~ Block.file_name)) }}
        {% endif %}
    {% else %}
        {{ include('Block/' ~ Block.file_name~ '.twig', ignore_missing = true) }}
    {% endif %}
    <!-- ▲{{ Block.name }} -->
{% endfor %}
", "block.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/app/template/default/block.twig");
    }
}
