<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e376c751e330419d3f9a1a4b0a70adfbd1d2211ad6355062ee234a1596327f48 extends Twig_Template
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
        $__internal_eba14888dffe1bc4c11ed80f9e005affafeeb618f7ab78bf3b7dd9007efdf05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba14888dffe1bc4c11ed80f9e005affafeeb618f7ab78bf3b7dd9007efdf05f->enter($__internal_eba14888dffe1bc4c11ed80f9e005affafeeb618f7ab78bf3b7dd9007efdf05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e7111ca8b4d195b610d3ed462c61010ebec4aa31e9958ed7aaa6df7b6d41c2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7111ca8b4d195b610d3ed462c61010ebec4aa31e9958ed7aaa6df7b6d41c2f0->enter($__internal_e7111ca8b4d195b610d3ed462c61010ebec4aa31e9958ed7aaa6df7b6d41c2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eba14888dffe1bc4c11ed80f9e005affafeeb618f7ab78bf3b7dd9007efdf05f->leave($__internal_eba14888dffe1bc4c11ed80f9e005affafeeb618f7ab78bf3b7dd9007efdf05f_prof);

        
        $__internal_e7111ca8b4d195b610d3ed462c61010ebec4aa31e9958ed7aaa6df7b6d41c2f0->leave($__internal_e7111ca8b4d195b610d3ed462c61010ebec4aa31e9958ed7aaa6df7b6d41c2f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e712282facc6da71ebdff3d4f9a02db17536fa39165e3ac6a46ce338c5c51c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e712282facc6da71ebdff3d4f9a02db17536fa39165e3ac6a46ce338c5c51c67->enter($__internal_e712282facc6da71ebdff3d4f9a02db17536fa39165e3ac6a46ce338c5c51c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7563f4a2ccaa6aa4ab5977bebd415e1e2eef979a4755b818c536b51d3d5f5bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7563f4a2ccaa6aa4ab5977bebd415e1e2eef979a4755b818c536b51d3d5f5bcf->enter($__internal_7563f4a2ccaa6aa4ab5977bebd415e1e2eef979a4755b818c536b51d3d5f5bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7563f4a2ccaa6aa4ab5977bebd415e1e2eef979a4755b818c536b51d3d5f5bcf->leave($__internal_7563f4a2ccaa6aa4ab5977bebd415e1e2eef979a4755b818c536b51d3d5f5bcf_prof);

        
        $__internal_e712282facc6da71ebdff3d4f9a02db17536fa39165e3ac6a46ce338c5c51c67->leave($__internal_e712282facc6da71ebdff3d4f9a02db17536fa39165e3ac6a46ce338c5c51c67_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fca64b35f1a7398837419f7ddcdb81d274bdaa67bf3a4224857a06b7bb2fb0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fca64b35f1a7398837419f7ddcdb81d274bdaa67bf3a4224857a06b7bb2fb0c->enter($__internal_5fca64b35f1a7398837419f7ddcdb81d274bdaa67bf3a4224857a06b7bb2fb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d63eff2fc2cf50d61588d1e0433a451548b2f4a76bde92b06159cee5433438c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63eff2fc2cf50d61588d1e0433a451548b2f4a76bde92b06159cee5433438c2->enter($__internal_d63eff2fc2cf50d61588d1e0433a451548b2f4a76bde92b06159cee5433438c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d63eff2fc2cf50d61588d1e0433a451548b2f4a76bde92b06159cee5433438c2->leave($__internal_d63eff2fc2cf50d61588d1e0433a451548b2f4a76bde92b06159cee5433438c2_prof);

        
        $__internal_5fca64b35f1a7398837419f7ddcdb81d274bdaa67bf3a4224857a06b7bb2fb0c->leave($__internal_5fca64b35f1a7398837419f7ddcdb81d274bdaa67bf3a4224857a06b7bb2fb0c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_acbb9a4a9613775c9f55a80bc8624431ca0e096b3bd2df745e1d07908c07ff4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbb9a4a9613775c9f55a80bc8624431ca0e096b3bd2df745e1d07908c07ff4b->enter($__internal_acbb9a4a9613775c9f55a80bc8624431ca0e096b3bd2df745e1d07908c07ff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22965b68acce81014d8c4dc0261215b448e7b2c96324917a9ee0278922c6feb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22965b68acce81014d8c4dc0261215b448e7b2c96324917a9ee0278922c6feb8->enter($__internal_22965b68acce81014d8c4dc0261215b448e7b2c96324917a9ee0278922c6feb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_22965b68acce81014d8c4dc0261215b448e7b2c96324917a9ee0278922c6feb8->leave($__internal_22965b68acce81014d8c4dc0261215b448e7b2c96324917a9ee0278922c6feb8_prof);

        
        $__internal_acbb9a4a9613775c9f55a80bc8624431ca0e096b3bd2df745e1d07908c07ff4b->leave($__internal_acbb9a4a9613775c9f55a80bc8624431ca0e096b3bd2df745e1d07908c07ff4b_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
