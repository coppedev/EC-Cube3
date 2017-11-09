<?php

/* __string_template__61e1a1a62f38af8a4a2a1da081bea3a1457e00002eea5b3d7545a26401e13d9e */
class __TwigTemplate_05aa19fc4079770211f448c92e26102b0f865b277261a01beaf18ad5a35839d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__61e1a1a62f38af8a4a2a1da081bea3a1457e00002eea5b3d7545a26401e13d9e", 22);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d012a971b1cd3d45eca77089826dc9f853c574ee21a9e9c4524b5e70a3b245ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d012a971b1cd3d45eca77089826dc9f853c574ee21a9e9c4524b5e70a3b245ac->enter($__internal_d012a971b1cd3d45eca77089826dc9f853c574ee21a9e9c4524b5e70a3b245ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__61e1a1a62f38af8a4a2a1da081bea3a1457e00002eea5b3d7545a26401e13d9e"));

        // line 24
        $context["body_class"] = "front_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d012a971b1cd3d45eca77089826dc9f853c574ee21a9e9c4524b5e70a3b245ac->leave($__internal_d012a971b1cd3d45eca77089826dc9f853c574ee21a9e9c4524b5e70a3b245ac_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a6f266ac82a26c2f54ea410df24017d1f981d785db181e3c7fd43e7859f68d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f266ac82a26c2f54ea410df24017d1f981d785db181e3c7fd43e7859f68d73->enter($__internal_a6f266ac82a26c2f54ea410df24017d1f981d785db181e3c7fd43e7859f68d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "<script>
\$(function(){
    \$('.main_visual').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        speed: 300
    });
});
</script>
";
        
        $__internal_a6f266ac82a26c2f54ea410df24017d1f981d785db181e3c7fd43e7859f68d73->leave($__internal_a6f266ac82a26c2f54ea410df24017d1f981d785db181e3c7fd43e7859f68d73_prof);

    }

    // line 39
    public function block_main($context, array $blocks = array())
    {
        $__internal_f6b9c20094e88484547cd583be7d82b6b4d4ca3f5c2186da6a8a5ac6ce77bbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b9c20094e88484547cd583be7d82b6b4d4ca3f5c2186da6a8a5ac6ce77bbed->enter($__internal_f6b9c20094e88484547cd583be7d82b6b4d4ca3f5c2186da6a8a5ac6ce77bbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 40
        echo "    <div class=\"row\">
       <div class=\"col-sm-12\">
            <div class=\"main_visual\">
                <div class=\"item\">
                  <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv01.jpg\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv02.jpg\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv03.jpg\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f6b9c20094e88484547cd583be7d82b6b4d4ca3f5c2186da6a8a5ac6ce77bbed->leave($__internal_f6b9c20094e88484547cd583be7d82b6b4d4ca3f5c2186da6a8a5ac6ce77bbed_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__61e1a1a62f38af8a4a2a1da081bea3a1457e00002eea5b3d7545a26401e13d9e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 50,  79 => 47,  73 => 44,  67 => 40,  61 => 39,  44 => 27,  38 => 26,  31 => 22,  29 => 24,  11 => 22,);
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
{% extends 'default_frame.twig' %}

{% set body_class = 'front_page' %}

{% block javascript %}
<script>
\$(function(){
    \$('.main_visual').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        speed: 300
    });
});
</script>
{% endblock %}

{% block main %}
    <div class=\"row\">
       <div class=\"col-sm-12\">
            <div class=\"main_visual\">
                <div class=\"item\">
                  <img src=\"{{ app.config.front_urlpath }}/img/top/mv01.jpg\">
                </div>
                <div class=\"item\">
                  <img src=\"{{ app.config.front_urlpath }}/img/top/mv02.jpg\">
                </div>
                <div class=\"item\">
                  <img src=\"{{ app.config.front_urlpath }}/img/top/mv03.jpg\">
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "__string_template__61e1a1a62f38af8a4a2a1da081bea3a1457e00002eea5b3d7545a26401e13d9e", "");
    }
}
