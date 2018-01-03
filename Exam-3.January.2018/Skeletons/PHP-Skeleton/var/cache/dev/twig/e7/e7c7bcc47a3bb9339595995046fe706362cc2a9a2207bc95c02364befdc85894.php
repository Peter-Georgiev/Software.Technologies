<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f19207bdaa345ac6ca9e4eed27ef2e43bf0cde21d4a71567dbeed8fa538747ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c2bd0d85fa2ed7586f8e3b427cfa88dc4a604ba26e3c0713787ee8e048687f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2bd0d85fa2ed7586f8e3b427cfa88dc4a604ba26e3c0713787ee8e048687f1->enter($__internal_9c2bd0d85fa2ed7586f8e3b427cfa88dc4a604ba26e3c0713787ee8e048687f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bcdcc8add60134d5ffa3d48c7af9a714b2fcfa70ab60c81400d85d1c6242f5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdcc8add60134d5ffa3d48c7af9a714b2fcfa70ab60c81400d85d1c6242f5c3->enter($__internal_bcdcc8add60134d5ffa3d48c7af9a714b2fcfa70ab60c81400d85d1c6242f5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2bd0d85fa2ed7586f8e3b427cfa88dc4a604ba26e3c0713787ee8e048687f1->leave($__internal_9c2bd0d85fa2ed7586f8e3b427cfa88dc4a604ba26e3c0713787ee8e048687f1_prof);

        
        $__internal_bcdcc8add60134d5ffa3d48c7af9a714b2fcfa70ab60c81400d85d1c6242f5c3->leave($__internal_bcdcc8add60134d5ffa3d48c7af9a714b2fcfa70ab60c81400d85d1c6242f5c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a2cfc877ed89e9cc026c396133648ca8015288733c5e0abbef175a960b7ff4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2cfc877ed89e9cc026c396133648ca8015288733c5e0abbef175a960b7ff4e->enter($__internal_3a2cfc877ed89e9cc026c396133648ca8015288733c5e0abbef175a960b7ff4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96c94633a2d8742f2a50e9a58ccda75e4902cc8f65d65a41793486a84a34fd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c94633a2d8742f2a50e9a58ccda75e4902cc8f65d65a41793486a84a34fd2e->enter($__internal_96c94633a2d8742f2a50e9a58ccda75e4902cc8f65d65a41793486a84a34fd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_96c94633a2d8742f2a50e9a58ccda75e4902cc8f65d65a41793486a84a34fd2e->leave($__internal_96c94633a2d8742f2a50e9a58ccda75e4902cc8f65d65a41793486a84a34fd2e_prof);

        
        $__internal_3a2cfc877ed89e9cc026c396133648ca8015288733c5e0abbef175a960b7ff4e->leave($__internal_3a2cfc877ed89e9cc026c396133648ca8015288733c5e0abbef175a960b7ff4e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
