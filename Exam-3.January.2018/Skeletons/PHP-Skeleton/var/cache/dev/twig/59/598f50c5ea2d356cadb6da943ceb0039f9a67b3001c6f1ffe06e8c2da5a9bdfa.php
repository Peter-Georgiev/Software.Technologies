<?php

/* project/delete.html.twig */
class __TwigTemplate_e96ae7270a11341b1876afd5543a20b46b73c0030e5df66a9382e05bce8babd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/delete.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0fc0812953ce097ca0949806370826dc88211acb769b658e6b50817f7b3b704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0fc0812953ce097ca0949806370826dc88211acb769b658e6b50817f7b3b704->enter($__internal_a0fc0812953ce097ca0949806370826dc88211acb769b658e6b50817f7b3b704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/delete.html.twig"));

        $__internal_ad14942819d426aa9651162e875e7f4b50cc48bea5d0c2769fc602ae4830f0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad14942819d426aa9651162e875e7f4b50cc48bea5d0c2769fc602ae4830f0b6->enter($__internal_ad14942819d426aa9651162e875e7f4b50cc48bea5d0c2769fc602ae4830f0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0fc0812953ce097ca0949806370826dc88211acb769b658e6b50817f7b3b704->leave($__internal_a0fc0812953ce097ca0949806370826dc88211acb769b658e6b50817f7b3b704_prof);

        
        $__internal_ad14942819d426aa9651162e875e7f4b50cc48bea5d0c2769fc602ae4830f0b6->leave($__internal_ad14942819d426aa9651162e875e7f4b50cc48bea5d0c2769fc602ae4830f0b6_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_40f02aa81618858f5c1e9468483a72ee0fd185e043051f0bb4642eb70d662f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f02aa81618858f5c1e9468483a72ee0fd185e043051f0bb4642eb70d662f03->enter($__internal_40f02aa81618858f5c1e9468483a72ee0fd185e043051f0bb4642eb70d662f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c5c0cab3395963c94a6e9ee8863653d5bd0364fa80f77366d5a03659bbd09d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c0cab3395963c94a6e9ee8863653d5bd0364fa80f77366d5a03659bbd09d99->enter($__internal_c5c0cab3395963c94a6e9ee8863653d5bd0364fa80f77366d5a03659bbd09d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_c5c0cab3395963c94a6e9ee8863653d5bd0364fa80f77366d5a03659bbd09d99->leave($__internal_c5c0cab3395963c94a6e9ee8863653d5bd0364fa80f77366d5a03659bbd09d99_prof);

        
        $__internal_40f02aa81618858f5c1e9468483a72ee0fd185e043051f0bb4642eb70d662f03->leave($__internal_40f02aa81618858f5c1e9468483a72ee0fd185e043051f0bb4642eb70d662f03_prof);

    }

    public function getTemplateName()
    {
        return "project/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  73 => 20,  66 => 16,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", "project/delete.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\project\\delete.html.twig");
    }
}
