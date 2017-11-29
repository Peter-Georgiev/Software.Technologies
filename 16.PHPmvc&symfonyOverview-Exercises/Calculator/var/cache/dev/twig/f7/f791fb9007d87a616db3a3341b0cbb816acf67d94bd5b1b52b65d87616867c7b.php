<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_de9d2fc38c1f24455a4b3412e6dcc6214e0ff1c81498d606407fcb21ea1892ef extends Twig_Template
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
        $__internal_b6e8985a0a5047578c74895a9c1427afbc155581784d15580c284cc7981cbe86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e8985a0a5047578c74895a9c1427afbc155581784d15580c284cc7981cbe86->enter($__internal_b6e8985a0a5047578c74895a9c1427afbc155581784d15580c284cc7981cbe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6e8985a0a5047578c74895a9c1427afbc155581784d15580c284cc7981cbe86->leave($__internal_b6e8985a0a5047578c74895a9c1427afbc155581784d15580c284cc7981cbe86_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5920ca0c9e76632e2c3f5e3361ff7251d405de6e55a4984dd5e5349ed2e2dd41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5920ca0c9e76632e2c3f5e3361ff7251d405de6e55a4984dd5e5349ed2e2dd41->enter($__internal_5920ca0c9e76632e2c3f5e3361ff7251d405de6e55a4984dd5e5349ed2e2dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5920ca0c9e76632e2c3f5e3361ff7251d405de6e55a4984dd5e5349ed2e2dd41->leave($__internal_5920ca0c9e76632e2c3f5e3361ff7251d405de6e55a4984dd5e5349ed2e2dd41_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ceb5739df063a5ecf0a64c5ad434ffa904eca9caf4792029fe3a8e97caa3679f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb5739df063a5ecf0a64c5ad434ffa904eca9caf4792029fe3a8e97caa3679f->enter($__internal_ceb5739df063a5ecf0a64c5ad434ffa904eca9caf4792029fe3a8e97caa3679f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ceb5739df063a5ecf0a64c5ad434ffa904eca9caf4792029fe3a8e97caa3679f->leave($__internal_ceb5739df063a5ecf0a64c5ad434ffa904eca9caf4792029fe3a8e97caa3679f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66f8c6b3f4e3d1b264f761223da52535343abc3e77c04f6ce7e40853aaffb49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f8c6b3f4e3d1b264f761223da52535343abc3e77c04f6ce7e40853aaffb49c->enter($__internal_66f8c6b3f4e3d1b264f761223da52535343abc3e77c04f6ce7e40853aaffb49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66f8c6b3f4e3d1b264f761223da52535343abc3e77c04f6ce7e40853aaffb49c->leave($__internal_66f8c6b3f4e3d1b264f761223da52535343abc3e77c04f6ce7e40853aaffb49c_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
