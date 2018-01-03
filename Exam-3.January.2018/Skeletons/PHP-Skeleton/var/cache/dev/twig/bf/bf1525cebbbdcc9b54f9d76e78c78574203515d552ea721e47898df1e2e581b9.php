<?php

/* project/create.html.twig */
class __TwigTemplate_2a1b5d707aa72104692b6ffa1a05c4fb1e74d1bf350d67ef9d0e176233c33cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/create.html.twig", 1);
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
        $__internal_d932498cb02378a9e4e79ea008f3a6411c6055cb83629c50e33a368f903a765b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d932498cb02378a9e4e79ea008f3a6411c6055cb83629c50e33a368f903a765b->enter($__internal_d932498cb02378a9e4e79ea008f3a6411c6055cb83629c50e33a368f903a765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $__internal_bcef10ba64274bdc11b40a8fddc17b2b7295dda0506087da5ac98b887934d561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcef10ba64274bdc11b40a8fddc17b2b7295dda0506087da5ac98b887934d561->enter($__internal_bcef10ba64274bdc11b40a8fddc17b2b7295dda0506087da5ac98b887934d561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d932498cb02378a9e4e79ea008f3a6411c6055cb83629c50e33a368f903a765b->leave($__internal_d932498cb02378a9e4e79ea008f3a6411c6055cb83629c50e33a368f903a765b_prof);

        
        $__internal_bcef10ba64274bdc11b40a8fddc17b2b7295dda0506087da5ac98b887934d561->leave($__internal_bcef10ba64274bdc11b40a8fddc17b2b7295dda0506087da5ac98b887934d561_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d28395dce4cf207486bcc5a0cb105720d690fc19764c6c1087c2ac9f5a3b7042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28395dce4cf207486bcc5a0cb105720d690fc19764c6c1087c2ac9f5a3b7042->enter($__internal_d28395dce4cf207486bcc5a0cb105720d690fc19764c6c1087c2ac9f5a3b7042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_dc9d8373710c83d4c052b9ab46191f2bed8c212986047ed425b0732c4ca2d598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9d8373710c83d4c052b9ab46191f2bed8c212986047ed425b0732c4ca2d598->enter($__internal_dc9d8373710c83d4c052b9ab46191f2bed8c212986047ed425b0732c4ca2d598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_dc9d8373710c83d4c052b9ab46191f2bed8c212986047ed425b0732c4ca2d598->leave($__internal_dc9d8373710c83d4c052b9ab46191f2bed8c212986047ed425b0732c4ca2d598_prof);

        
        $__internal_d28395dce4cf207486bcc5a0cb105720d690fc19764c6c1087c2ac9f5a3b7042->leave($__internal_d28395dce4cf207486bcc5a0cb105720d690fc19764c6c1087c2ac9f5a3b7042_prof);

    }

    public function getTemplateName()
    {
        return "project/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", "project/create.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\project\\create.html.twig");
    }
}
