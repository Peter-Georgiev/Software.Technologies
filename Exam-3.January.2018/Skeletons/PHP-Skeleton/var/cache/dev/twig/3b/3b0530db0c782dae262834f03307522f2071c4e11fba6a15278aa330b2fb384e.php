<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_15cdaedf273b24312be698acad21760a9839a1e6af267bacf697cae1798e4018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15cdaedf273b24312be698acad21760a9839a1e6af267bacf697cae1798e4018->enter($__internal_15cdaedf273b24312be698acad21760a9839a1e6af267bacf697cae1798e4018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1b43c919cade04606fd44517d2fed07c047119d9a9dbfac47dada630f8f36c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b43c919cade04606fd44517d2fed07c047119d9a9dbfac47dada630f8f36c95->enter($__internal_1b43c919cade04606fd44517d2fed07c047119d9a9dbfac47dada630f8f36c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15cdaedf273b24312be698acad21760a9839a1e6af267bacf697cae1798e4018->leave($__internal_15cdaedf273b24312be698acad21760a9839a1e6af267bacf697cae1798e4018_prof);

        
        $__internal_1b43c919cade04606fd44517d2fed07c047119d9a9dbfac47dada630f8f36c95->leave($__internal_1b43c919cade04606fd44517d2fed07c047119d9a9dbfac47dada630f8f36c95_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bcaba774337cc9e3f16778ba61bb1452b6409d56dac9081c5348c8e9d650ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcaba774337cc9e3f16778ba61bb1452b6409d56dac9081c5348c8e9d650ec9->enter($__internal_3bcaba774337cc9e3f16778ba61bb1452b6409d56dac9081c5348c8e9d650ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ed1f707476d7d6798d5a137fbcf5b3ed3e8a87d42fa150178f465489404e980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed1f707476d7d6798d5a137fbcf5b3ed3e8a87d42fa150178f465489404e980->enter($__internal_9ed1f707476d7d6798d5a137fbcf5b3ed3e8a87d42fa150178f465489404e980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9ed1f707476d7d6798d5a137fbcf5b3ed3e8a87d42fa150178f465489404e980->leave($__internal_9ed1f707476d7d6798d5a137fbcf5b3ed3e8a87d42fa150178f465489404e980_prof);

        
        $__internal_3bcaba774337cc9e3f16778ba61bb1452b6409d56dac9081c5348c8e9d650ec9->leave($__internal_3bcaba774337cc9e3f16778ba61bb1452b6409d56dac9081c5348c8e9d650ec9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67c77f1770e9d284103a722ed070585145ff1530a38364747e16ce51baad7788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c77f1770e9d284103a722ed070585145ff1530a38364747e16ce51baad7788->enter($__internal_67c77f1770e9d284103a722ed070585145ff1530a38364747e16ce51baad7788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6885bab603ce0e85b4283d117477e718e50560a047e3c113e7bf8571386bfb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6885bab603ce0e85b4283d117477e718e50560a047e3c113e7bf8571386bfb8d->enter($__internal_6885bab603ce0e85b4283d117477e718e50560a047e3c113e7bf8571386bfb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6885bab603ce0e85b4283d117477e718e50560a047e3c113e7bf8571386bfb8d->leave($__internal_6885bab603ce0e85b4283d117477e718e50560a047e3c113e7bf8571386bfb8d_prof);

        
        $__internal_67c77f1770e9d284103a722ed070585145ff1530a38364747e16ce51baad7788->leave($__internal_67c77f1770e9d284103a722ed070585145ff1530a38364747e16ce51baad7788_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ba3e7683b4acb4864f0b46695be8de518b4dd3c6dd6fdf836db8c96500f27ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba3e7683b4acb4864f0b46695be8de518b4dd3c6dd6fdf836db8c96500f27ce->enter($__internal_9ba3e7683b4acb4864f0b46695be8de518b4dd3c6dd6fdf836db8c96500f27ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e968a14c91d3cd945eed11533cd95ec58a5d082edae3c39c56a847985c6f525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e968a14c91d3cd945eed11533cd95ec58a5d082edae3c39c56a847985c6f525->enter($__internal_3e968a14c91d3cd945eed11533cd95ec58a5d082edae3c39c56a847985c6f525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3e968a14c91d3cd945eed11533cd95ec58a5d082edae3c39c56a847985c6f525->leave($__internal_3e968a14c91d3cd945eed11533cd95ec58a5d082edae3c39c56a847985c6f525_prof);

        
        $__internal_9ba3e7683b4acb4864f0b46695be8de518b4dd3c6dd6fdf836db8c96500f27ce->leave($__internal_9ba3e7683b4acb4864f0b46695be8de518b4dd3c6dd6fdf836db8c96500f27ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
