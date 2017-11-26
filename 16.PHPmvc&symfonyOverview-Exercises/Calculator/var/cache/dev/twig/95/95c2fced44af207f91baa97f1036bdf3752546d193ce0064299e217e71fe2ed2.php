<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e84696d99e3fd11916be9f9d31a9814dad45961e40c303e3633088ff4b60a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f78551011c9f1232c9f620d6c5f1fb815c3f4fc294bd928917fb7a7cee3cbeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78551011c9f1232c9f620d6c5f1fb815c3f4fc294bd928917fb7a7cee3cbeac->enter($__internal_f78551011c9f1232c9f620d6c5f1fb815c3f4fc294bd928917fb7a7cee3cbeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f78551011c9f1232c9f620d6c5f1fb815c3f4fc294bd928917fb7a7cee3cbeac->leave($__internal_f78551011c9f1232c9f620d6c5f1fb815c3f4fc294bd928917fb7a7cee3cbeac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c339c4c4d817efb54c7b8dd8c073a2b718b9d5130505f97cbdf7530d8135d603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c339c4c4d817efb54c7b8dd8c073a2b718b9d5130505f97cbdf7530d8135d603->enter($__internal_c339c4c4d817efb54c7b8dd8c073a2b718b9d5130505f97cbdf7530d8135d603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c339c4c4d817efb54c7b8dd8c073a2b718b9d5130505f97cbdf7530d8135d603->leave($__internal_c339c4c4d817efb54c7b8dd8c073a2b718b9d5130505f97cbdf7530d8135d603_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b89b3cbb6efc455ce9f84e79a96ae257245c7f3b4dc8b84847aed6a1a3a5fbf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89b3cbb6efc455ce9f84e79a96ae257245c7f3b4dc8b84847aed6a1a3a5fbf9->enter($__internal_b89b3cbb6efc455ce9f84e79a96ae257245c7f3b4dc8b84847aed6a1a3a5fbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b89b3cbb6efc455ce9f84e79a96ae257245c7f3b4dc8b84847aed6a1a3a5fbf9->leave($__internal_b89b3cbb6efc455ce9f84e79a96ae257245c7f3b4dc8b84847aed6a1a3a5fbf9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b40462f05c4c8d33063f29dd5846d85fca0872d6c0fe883b8a3f56b635878738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40462f05c4c8d33063f29dd5846d85fca0872d6c0fe883b8a3f56b635878738->enter($__internal_b40462f05c4c8d33063f29dd5846d85fca0872d6c0fe883b8a3f56b635878738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b40462f05c4c8d33063f29dd5846d85fca0872d6c0fe883b8a3f56b635878738->leave($__internal_b40462f05c4c8d33063f29dd5846d85fca0872d6c0fe883b8a3f56b635878738_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
