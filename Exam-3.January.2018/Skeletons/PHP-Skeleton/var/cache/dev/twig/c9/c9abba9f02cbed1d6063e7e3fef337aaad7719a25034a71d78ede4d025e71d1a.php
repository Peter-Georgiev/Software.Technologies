<?php

/* project/index.html.twig */
class __TwigTemplate_9dd928d8e8464e06dc542ea53f6838e6a8896e0ce25a52ee4992d67c2de7888c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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
        $__internal_f82f5ed73327ab39fe087f08747cd1b44803bb6b626e13425cec9b2603ae227f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82f5ed73327ab39fe087f08747cd1b44803bb6b626e13425cec9b2603ae227f->enter($__internal_f82f5ed73327ab39fe087f08747cd1b44803bb6b626e13425cec9b2603ae227f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_d604a55ed338967894302cf3aa76e749a8d09266d51dc7329702bdc1c571ce49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d604a55ed338967894302cf3aa76e749a8d09266d51dc7329702bdc1c571ce49->enter($__internal_d604a55ed338967894302cf3aa76e749a8d09266d51dc7329702bdc1c571ce49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82f5ed73327ab39fe087f08747cd1b44803bb6b626e13425cec9b2603ae227f->leave($__internal_f82f5ed73327ab39fe087f08747cd1b44803bb6b626e13425cec9b2603ae227f_prof);

        
        $__internal_d604a55ed338967894302cf3aa76e749a8d09266d51dc7329702bdc1c571ce49->leave($__internal_d604a55ed338967894302cf3aa76e749a8d09266d51dc7329702bdc1c571ce49_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_25564b2436458e43e0a86f6ba28155c7a44c6c15c704482432e6abc9fa4484ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25564b2436458e43e0a86f6ba28155c7a44c6c15c704482432e6abc9fa4484ed->enter($__internal_25564b2436458e43e0a86f6ba28155c7a44c6c15c704482432e6abc9fa4484ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9ce26cfa126376e25cd1046211500e6eca8b491e709bc41fa5561124e886fbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce26cfa126376e25cd1046211500e6eca8b491e709bc41fa5561124e886fbe5->enter($__internal_9ce26cfa126376e25cd1046211500e6eca8b491e709bc41fa5561124e886fbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 16
            echo "                <div class=\"project\">
                    <div class=\"project-title\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-budget\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "budget", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
</div>
";
        
        $__internal_9ce26cfa126376e25cd1046211500e6eca8b491e709bc41fa5561124e886fbe5->leave($__internal_9ce26cfa126376e25cd1046211500e6eca8b491e709bc41fa5561124e886fbe5_prof);

        
        $__internal_25564b2436458e43e0a86f6ba28155c7a44c6c15c704482432e6abc9fa4484ed->leave($__internal_25564b2436458e43e0a86f6ba28155c7a44c6c15c704482432e6abc9fa4484ed_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  86 => 25,  82 => 24,  76 => 21,  70 => 18,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            {% for project in projects %}
                <div class=\"project\">
                    <div class=\"project-title\">
                        {{ project.title }}
                    </div>
                    <div class=\"project-budget\">
                        {{ project.budget }}
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"{{ path('edit', {id: project.id}) }}\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"{{ path('delete', {id: project.id}) }}\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "project/index.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\project\\index.html.twig");
    }
}