<?php

/* form/fields.html.twig */
class __TwigTemplate_a2cb853cf8cd4cf7870e4fe0a6621e72d56976eeeae04e8f8321677800c8bf57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfc89f9c95c1ff906b77634f54f39a3ad9d4d33316e4496fb1a685b103d3a1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc89f9c95c1ff906b77634f54f39a3ad9d4d33316e4496fb1a685b103d3a1d9->enter($__internal_bfc89f9c95c1ff906b77634f54f39a3ad9d4d33316e4496fb1a685b103d3a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_bfc89f9c95c1ff906b77634f54f39a3ad9d4d33316e4496fb1a685b103d3a1d9->leave($__internal_bfc89f9c95c1ff906b77634f54f39a3ad9d4d33316e4496fb1a685b103d3a1d9_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_1b894723c571a959030f307d147b0ea8eaa75c7a7ad261d6cfde50890a5c7556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b894723c571a959030f307d147b0ea8eaa75c7a7ad261d6cfde50890a5c7556->enter($__internal_1b894723c571a959030f307d147b0ea8eaa75c7a7ad261d6cfde50890a5c7556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1b894723c571a959030f307d147b0ea8eaa75c7a7ad261d6cfde50890a5c7556->leave($__internal_1b894723c571a959030f307d147b0ea8eaa75c7a7ad261d6cfde50890a5c7556_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
