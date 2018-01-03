<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ebe1d62c81ec48b5cfece72c19744302e8aa5cf5ac0a226128f9fa08aac343d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebe1d62c81ec48b5cfece72c19744302e8aa5cf5ac0a226128f9fa08aac343d->enter($__internal_2ebe1d62c81ec48b5cfece72c19744302e8aa5cf5ac0a226128f9fa08aac343d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_19511cac20a27ec76097aa53bca69b7fd657de446b0d4718ed325a7504e85867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19511cac20a27ec76097aa53bca69b7fd657de446b0d4718ed325a7504e85867->enter($__internal_19511cac20a27ec76097aa53bca69b7fd657de446b0d4718ed325a7504e85867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2ebe1d62c81ec48b5cfece72c19744302e8aa5cf5ac0a226128f9fa08aac343d->leave($__internal_2ebe1d62c81ec48b5cfece72c19744302e8aa5cf5ac0a226128f9fa08aac343d_prof);

        
        $__internal_19511cac20a27ec76097aa53bca69b7fd657de446b0d4718ed325a7504e85867->leave($__internal_19511cac20a27ec76097aa53bca69b7fd657de446b0d4718ed325a7504e85867_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d933a494d4879f242eec4829accacfd4b0a2f1ac48d5a37ba2f48cfda935f18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d933a494d4879f242eec4829accacfd4b0a2f1ac48d5a37ba2f48cfda935f18b->enter($__internal_d933a494d4879f242eec4829accacfd4b0a2f1ac48d5a37ba2f48cfda935f18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43942e571e30fd52ee92da868ea9efa17f60d64fcaaeb8ae38c6c2fd0a8aac04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43942e571e30fd52ee92da868ea9efa17f60d64fcaaeb8ae38c6c2fd0a8aac04->enter($__internal_43942e571e30fd52ee92da868ea9efa17f60d64fcaaeb8ae38c6c2fd0a8aac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_43942e571e30fd52ee92da868ea9efa17f60d64fcaaeb8ae38c6c2fd0a8aac04->leave($__internal_43942e571e30fd52ee92da868ea9efa17f60d64fcaaeb8ae38c6c2fd0a8aac04_prof);

        
        $__internal_d933a494d4879f242eec4829accacfd4b0a2f1ac48d5a37ba2f48cfda935f18b->leave($__internal_d933a494d4879f242eec4829accacfd4b0a2f1ac48d5a37ba2f48cfda935f18b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7eb18cff9f78e818ad9bb2bce4ec20aa43c37cf6766d04aa3b3c02667fe716c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb18cff9f78e818ad9bb2bce4ec20aa43c37cf6766d04aa3b3c02667fe716c1->enter($__internal_7eb18cff9f78e818ad9bb2bce4ec20aa43c37cf6766d04aa3b3c02667fe716c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b41b6c98f3d742380dfa5460d45145afb19c41065e80cc659569ac0b9d5c742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b41b6c98f3d742380dfa5460d45145afb19c41065e80cc659569ac0b9d5c742->enter($__internal_8b41b6c98f3d742380dfa5460d45145afb19c41065e80cc659569ac0b9d5c742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8b41b6c98f3d742380dfa5460d45145afb19c41065e80cc659569ac0b9d5c742->leave($__internal_8b41b6c98f3d742380dfa5460d45145afb19c41065e80cc659569ac0b9d5c742_prof);

        
        $__internal_7eb18cff9f78e818ad9bb2bce4ec20aa43c37cf6766d04aa3b3c02667fe716c1->leave($__internal_7eb18cff9f78e818ad9bb2bce4ec20aa43c37cf6766d04aa3b3c02667fe716c1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b88f3156f10212a45a86ee3f1963f870227976645edae8abf538c483bec181ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88f3156f10212a45a86ee3f1963f870227976645edae8abf538c483bec181ab->enter($__internal_b88f3156f10212a45a86ee3f1963f870227976645edae8abf538c483bec181ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd54e440f02a82c0a00eacb221bc468360dad64de3018cf5eb59e4538f21942b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd54e440f02a82c0a00eacb221bc468360dad64de3018cf5eb59e4538f21942b->enter($__internal_dd54e440f02a82c0a00eacb221bc468360dad64de3018cf5eb59e4538f21942b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd54e440f02a82c0a00eacb221bc468360dad64de3018cf5eb59e4538f21942b->leave($__internal_dd54e440f02a82c0a00eacb221bc468360dad64de3018cf5eb59e4538f21942b_prof);

        
        $__internal_b88f3156f10212a45a86ee3f1963f870227976645edae8abf538c483bec181ab->leave($__internal_b88f3156f10212a45a86ee3f1963f870227976645edae8abf538c483bec181ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
