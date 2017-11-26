<?php

/* base.html.twig */
class __TwigTemplate_5a7f7dc85a5f0854eab610fa2674c47fe4b86972c3c5a558b7e8dbaecb01d9b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef543ddb5e4e0ad92c370c33c2a0f90ef88e69313e456e761b0dcfc6634dadfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef543ddb5e4e0ad92c370c33c2a0f90ef88e69313e456e761b0dcfc6634dadfb->enter($__internal_ef543ddb5e4e0ad92c370c33c2a0f90ef88e69313e456e761b0dcfc6634dadfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_ef543ddb5e4e0ad92c370c33c2a0f90ef88e69313e456e761b0dcfc6634dadfb->leave($__internal_ef543ddb5e4e0ad92c370c33c2a0f90ef88e69313e456e761b0dcfc6634dadfb_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c489d3192296cb3756bb1a6690d2395ddfcfc2bf72e7b925079d1910fd0ec43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c489d3192296cb3756bb1a6690d2395ddfcfc2bf72e7b925079d1910fd0ec43->enter($__internal_9c489d3192296cb3756bb1a6690d2395ddfcfc2bf72e7b925079d1910fd0ec43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_9c489d3192296cb3756bb1a6690d2395ddfcfc2bf72e7b925079d1910fd0ec43->leave($__internal_9c489d3192296cb3756bb1a6690d2395ddfcfc2bf72e7b925079d1910fd0ec43_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_854acccded74b05a5aac1bd9293fd7b267b0326c249ca8ae80e2c36b154c4ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854acccded74b05a5aac1bd9293fd7b267b0326c249ca8ae80e2c36b154c4ae3->enter($__internal_854acccded74b05a5aac1bd9293fd7b267b0326c249ca8ae80e2c36b154c4ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_854acccded74b05a5aac1bd9293fd7b267b0326c249ca8ae80e2c36b154c4ae3->leave($__internal_854acccded74b05a5aac1bd9293fd7b267b0326c249ca8ae80e2c36b154c4ae3_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7c3c7d37f8dd439feb16a2530682193180bd6f144cf7f26c68a3893b7d8a3418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3c7d37f8dd439feb16a2530682193180bd6f144cf7f26c68a3893b7d8a3418->enter($__internal_7c3c7d37f8dd439feb16a2530682193180bd6f144cf7f26c68a3893b7d8a3418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_7c3c7d37f8dd439feb16a2530682193180bd6f144cf7f26c68a3893b7d8a3418->leave($__internal_7c3c7d37f8dd439feb16a2530682193180bd6f144cf7f26c68a3893b7d8a3418_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_a5cc39a87ae52098c2ff10fa41f03cb89ab9b6fb5af2249ccb12686968213814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cc39a87ae52098c2ff10fa41f03cb89ab9b6fb5af2249ccb12686968213814->enter($__internal_a5cc39a87ae52098c2ff10fa41f03cb89ab9b6fb5af2249ccb12686968213814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_a5cc39a87ae52098c2ff10fa41f03cb89ab9b6fb5af2249ccb12686968213814->leave($__internal_a5cc39a87ae52098c2ff10fa41f03cb89ab9b6fb5af2249ccb12686968213814_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_2305c4984c7832eb3e2c570f12570b709c1f24f28084184004fab2351d38de60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2305c4984c7832eb3e2c570f12570b709c1f24f28084184004fab2351d38de60->enter($__internal_2305c4984c7832eb3e2c570f12570b709c1f24f28084184004fab2351d38de60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_2305c4984c7832eb3e2c570f12570b709c1f24f28084184004fab2351d38de60->leave($__internal_2305c4984c7832eb3e2c570f12570b709c1f24f28084184004fab2351d38de60_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_d9c5eeec2c45628285b789e94c2ca9fe0c3207f5633c48ed64f351f653a244a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c5eeec2c45628285b789e94c2ca9fe0c3207f5633c48ed64f351f653a244a9->enter($__internal_d9c5eeec2c45628285b789e94c2ca9fe0c3207f5633c48ed64f351f653a244a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d9c5eeec2c45628285b789e94c2ca9fe0c3207f5633c48ed64f351f653a244a9->leave($__internal_d9c5eeec2c45628285b789e94c2ca9fe0c3207f5633c48ed64f351f653a244a9_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2bb0dbe7b02fd97554ce367cd3bdd36e0f0a3aaebf6296ad395722599a046a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bb0dbe7b02fd97554ce367cd3bdd36e0f0a3aaebf6296ad395722599a046a6->enter($__internal_b2bb0dbe7b02fd97554ce367cd3bdd36e0f0a3aaebf6296ad395722599a046a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b2bb0dbe7b02fd97554ce367cd3bdd36e0f0a3aaebf6296ad395722599a046a6->leave($__internal_b2bb0dbe7b02fd97554ce367cd3bdd36e0f0a3aaebf6296ad395722599a046a6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
