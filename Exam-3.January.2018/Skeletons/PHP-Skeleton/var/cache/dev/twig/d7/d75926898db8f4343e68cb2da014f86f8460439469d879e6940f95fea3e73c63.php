<?php

/* project/edit.html.twig */
class __TwigTemplate_f87bd5160ece83d12b7f4659cc2b9f9000fb392b743a79100d9e32743f557ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/edit.html.twig", 1);
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
        $__internal_4c25061e8ef216132c255abc07f300e5a080b8a0016360e9612c6a0103972cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c25061e8ef216132c255abc07f300e5a080b8a0016360e9612c6a0103972cd0->enter($__internal_4c25061e8ef216132c255abc07f300e5a080b8a0016360e9612c6a0103972cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

        $__internal_54317adcdfb4bbbafd9275c658100e4fff3b38b70cef628a3482a1f7bb31bcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54317adcdfb4bbbafd9275c658100e4fff3b38b70cef628a3482a1f7bb31bcbf->enter($__internal_54317adcdfb4bbbafd9275c658100e4fff3b38b70cef628a3482a1f7bb31bcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c25061e8ef216132c255abc07f300e5a080b8a0016360e9612c6a0103972cd0->leave($__internal_4c25061e8ef216132c255abc07f300e5a080b8a0016360e9612c6a0103972cd0_prof);

        
        $__internal_54317adcdfb4bbbafd9275c658100e4fff3b38b70cef628a3482a1f7bb31bcbf->leave($__internal_54317adcdfb4bbbafd9275c658100e4fff3b38b70cef628a3482a1f7bb31bcbf_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f79532beba5b263e23780f21417cc4cbe875b6e00488dd690386b39b3ba46202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79532beba5b263e23780f21417cc4cbe875b6e00488dd690386b39b3ba46202->enter($__internal_f79532beba5b263e23780f21417cc4cbe875b6e00488dd690386b39b3ba46202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_00aac84f1f17320adfdf0b5687c584f807ac6c0f52fc5e7acb3451e936de1bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00aac84f1f17320adfdf0b5687c584f807ac6c0f52fc5e7acb3451e936de1bcf->enter($__internal_00aac84f1f17320adfdf0b5687c584f807ac6c0f52fc5e7acb3451e936de1bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo "\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_00aac84f1f17320adfdf0b5687c584f807ac6c0f52fc5e7acb3451e936de1bcf->leave($__internal_00aac84f1f17320adfdf0b5687c584f807ac6c0f52fc5e7acb3451e936de1bcf_prof);

        
        $__internal_f79532beba5b263e23780f21417cc4cbe875b6e00488dd690386b39b3ba46202->leave($__internal_f79532beba5b263e23780f21417cc4cbe875b6e00488dd690386b39b3ba46202_prof);

    }

    public function getTemplateName()
    {
        return "project/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}

", "project/edit.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\project\\edit.html.twig");
    }
}
