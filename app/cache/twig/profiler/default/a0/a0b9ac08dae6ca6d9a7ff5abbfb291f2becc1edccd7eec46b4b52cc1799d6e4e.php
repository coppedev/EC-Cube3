<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8b5f128a129b876496b5551d86e5f4d8b216de92cac969743146c4537d92b0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54f8cfe0cf280913d875c0df62ae93bdcb53e9576603e15d772cd6f6ef6fcd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f8cfe0cf280913d875c0df62ae93bdcb53e9576603e15d772cd6f6ef6fcd0d->enter($__internal_54f8cfe0cf280913d875c0df62ae93bdcb53e9576603e15d772cd6f6ef6fcd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f8cfe0cf280913d875c0df62ae93bdcb53e9576603e15d772cd6f6ef6fcd0d->leave($__internal_54f8cfe0cf280913d875c0df62ae93bdcb53e9576603e15d772cd6f6ef6fcd0d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8546dc87a48136bb32cc2c71911bc8bf43af207be36369e205627383cc06515e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8546dc87a48136bb32cc2c71911bc8bf43af207be36369e205627383cc06515e->enter($__internal_8546dc87a48136bb32cc2c71911bc8bf43af207be36369e205627383cc06515e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8546dc87a48136bb32cc2c71911bc8bf43af207be36369e205627383cc06515e->leave($__internal_8546dc87a48136bb32cc2c71911bc8bf43af207be36369e205627383cc06515e_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a0cfde6ec52473af4cba89ea5b7b030324a2469e9f768fd5355eb0dd1ee0ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0cfde6ec52473af4cba89ea5b7b030324a2469e9f768fd5355eb0dd1ee0ecf->enter($__internal_0a0cfde6ec52473af4cba89ea5b7b030324a2469e9f768fd5355eb0dd1ee0ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a0cfde6ec52473af4cba89ea5b7b030324a2469e9f768fd5355eb0dd1ee0ecf->leave($__internal_0a0cfde6ec52473af4cba89ea5b7b030324a2469e9f768fd5355eb0dd1ee0ecf_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff6ee76d755af8aad2910120e433b19b7f51a7b397c95ab3deb8aafc8f0be6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6ee76d755af8aad2910120e433b19b7f51a7b397c95ab3deb8aafc8f0be6a6->enter($__internal_ff6ee76d755af8aad2910120e433b19b7f51a7b397c95ab3deb8aafc8f0be6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff6ee76d755af8aad2910120e433b19b7f51a7b397c95ab3deb8aafc8f0be6a6->leave($__internal_ff6ee76d755af8aad2910120e433b19b7f51a7b397c95ab3deb8aafc8f0be6a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', {'token': token})) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/taccaisaka/Dropbox/WWW/CPD/ecc3.dev/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
