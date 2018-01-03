<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
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
        $__internal_a24008fde5404c3a20af8471d1a0a9a68fb46d2198e66e3ae497300e0d610a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24008fde5404c3a20af8471d1a0a9a68fb46d2198e66e3ae497300e0d610a3e->enter($__internal_a24008fde5404c3a20af8471d1a0a9a68fb46d2198e66e3ae497300e0d610a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_55e7ccb727a07a087078e708f0376c673e326d198bbe9afa1745e9be2a93e9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e7ccb727a07a087078e708f0376c673e326d198bbe9afa1745e9be2a93e9bf->enter($__internal_55e7ccb727a07a087078e708f0376c673e326d198bbe9afa1745e9be2a93e9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24008fde5404c3a20af8471d1a0a9a68fb46d2198e66e3ae497300e0d610a3e->leave($__internal_a24008fde5404c3a20af8471d1a0a9a68fb46d2198e66e3ae497300e0d610a3e_prof);

        
        $__internal_55e7ccb727a07a087078e708f0376c673e326d198bbe9afa1745e9be2a93e9bf->leave($__internal_55e7ccb727a07a087078e708f0376c673e326d198bbe9afa1745e9be2a93e9bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c18ca261170fe85d339f4ae6f8dc607b051352941475c13023ff1e4852cfca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c18ca261170fe85d339f4ae6f8dc607b051352941475c13023ff1e4852cfca9->enter($__internal_9c18ca261170fe85d339f4ae6f8dc607b051352941475c13023ff1e4852cfca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_908d86f4ffc8cfb2b8e2b4e2b8970836d903a606e1c2266b8400957bf46d8df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908d86f4ffc8cfb2b8e2b4e2b8970836d903a606e1c2266b8400957bf46d8df9->enter($__internal_908d86f4ffc8cfb2b8e2b4e2b8970836d903a606e1c2266b8400957bf46d8df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_908d86f4ffc8cfb2b8e2b4e2b8970836d903a606e1c2266b8400957bf46d8df9->leave($__internal_908d86f4ffc8cfb2b8e2b4e2b8970836d903a606e1c2266b8400957bf46d8df9_prof);

        
        $__internal_9c18ca261170fe85d339f4ae6f8dc607b051352941475c13023ff1e4852cfca9->leave($__internal_9c18ca261170fe85d339f4ae6f8dc607b051352941475c13023ff1e4852cfca9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2d297ca239cc96c1ce7af05aae368b46ded88b0318b6fa60659bc198c47f149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d297ca239cc96c1ce7af05aae368b46ded88b0318b6fa60659bc198c47f149->enter($__internal_d2d297ca239cc96c1ce7af05aae368b46ded88b0318b6fa60659bc198c47f149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c3a9dbe000333d16f706a8b7786153c164a6b07b642f481a1946460026ce4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3a9dbe000333d16f706a8b7786153c164a6b07b642f481a1946460026ce4ac->enter($__internal_8c3a9dbe000333d16f706a8b7786153c164a6b07b642f481a1946460026ce4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c3a9dbe000333d16f706a8b7786153c164a6b07b642f481a1946460026ce4ac->leave($__internal_8c3a9dbe000333d16f706a8b7786153c164a6b07b642f481a1946460026ce4ac_prof);

        
        $__internal_d2d297ca239cc96c1ce7af05aae368b46ded88b0318b6fa60659bc198c47f149->leave($__internal_d2d297ca239cc96c1ce7af05aae368b46ded88b0318b6fa60659bc198c47f149_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6d761344c40889922d8fbd0b39e9b408a3fa0a3ef4a4a8266f8a986ffee1e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d761344c40889922d8fbd0b39e9b408a3fa0a3ef4a4a8266f8a986ffee1e24->enter($__internal_c6d761344c40889922d8fbd0b39e9b408a3fa0a3ef4a4a8266f8a986ffee1e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4fbd63ad9a1f0a03273578e75aa239ad13bfd8dac180e9c3d8b510d7b4d3674f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbd63ad9a1f0a03273578e75aa239ad13bfd8dac180e9c3d8b510d7b4d3674f->enter($__internal_4fbd63ad9a1f0a03273578e75aa239ad13bfd8dac180e9c3d8b510d7b4d3674f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4fbd63ad9a1f0a03273578e75aa239ad13bfd8dac180e9c3d8b510d7b4d3674f->leave($__internal_4fbd63ad9a1f0a03273578e75aa239ad13bfd8dac180e9c3d8b510d7b4d3674f_prof);

        
        $__internal_c6d761344c40889922d8fbd0b39e9b408a3fa0a3ef4a4a8266f8a986ffee1e24->leave($__internal_c6d761344c40889922d8fbd0b39e9b408a3fa0a3ef4a4a8266f8a986ffee1e24_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
