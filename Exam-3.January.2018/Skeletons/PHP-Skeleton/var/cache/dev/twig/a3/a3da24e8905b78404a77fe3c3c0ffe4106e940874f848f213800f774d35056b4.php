<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47b20edf84031b103a761fa4aaa156df27cc1a9a626872e6432758890ac1ef2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b20edf84031b103a761fa4aaa156df27cc1a9a626872e6432758890ac1ef2a->enter($__internal_47b20edf84031b103a761fa4aaa156df27cc1a9a626872e6432758890ac1ef2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c4a18455878ada53cc12c3cb62f72bf2081d2df0eae30be12f9a08a576238a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a18455878ada53cc12c3cb62f72bf2081d2df0eae30be12f9a08a576238a1e->enter($__internal_c4a18455878ada53cc12c3cb62f72bf2081d2df0eae30be12f9a08a576238a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
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
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_47b20edf84031b103a761fa4aaa156df27cc1a9a626872e6432758890ac1ef2a->leave($__internal_47b20edf84031b103a761fa4aaa156df27cc1a9a626872e6432758890ac1ef2a_prof);

        
        $__internal_c4a18455878ada53cc12c3cb62f72bf2081d2df0eae30be12f9a08a576238a1e->leave($__internal_c4a18455878ada53cc12c3cb62f72bf2081d2df0eae30be12f9a08a576238a1e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf233140044befc095b06c744b41cca09575be92e6504b531ebdeeb581abac33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf233140044befc095b06c744b41cca09575be92e6504b531ebdeeb581abac33->enter($__internal_bf233140044befc095b06c744b41cca09575be92e6504b531ebdeeb581abac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f64370d3cd8bfe98a0a962a1b97c626ee8dc31868c157e94d70bc4f27a45c124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64370d3cd8bfe98a0a962a1b97c626ee8dc31868c157e94d70bc4f27a45c124->enter($__internal_f64370d3cd8bfe98a0a962a1b97c626ee8dc31868c157e94d70bc4f27a45c124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Rider";
        
        $__internal_f64370d3cd8bfe98a0a962a1b97c626ee8dc31868c157e94d70bc4f27a45c124->leave($__internal_f64370d3cd8bfe98a0a962a1b97c626ee8dc31868c157e94d70bc4f27a45c124_prof);

        
        $__internal_bf233140044befc095b06c744b41cca09575be92e6504b531ebdeeb581abac33->leave($__internal_bf233140044befc095b06c744b41cca09575be92e6504b531ebdeeb581abac33_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c375e22ae9d353d47c25461baf6bcf7eeed8e35c570abc86528189dab60eb5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c375e22ae9d353d47c25461baf6bcf7eeed8e35c570abc86528189dab60eb5d->enter($__internal_7c375e22ae9d353d47c25461baf6bcf7eeed8e35c570abc86528189dab60eb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_061db42d92c92fcecfe6cfcb9e223879b17cc50ab285e0e43647a854bf3e61e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061db42d92c92fcecfe6cfcb9e223879b17cc50ab285e0e43647a854bf3e61e7->enter($__internal_061db42d92c92fcecfe6cfcb9e223879b17cc50ab285e0e43647a854bf3e61e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/create-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_061db42d92c92fcecfe6cfcb9e223879b17cc50ab285e0e43647a854bf3e61e7->leave($__internal_061db42d92c92fcecfe6cfcb9e223879b17cc50ab285e0e43647a854bf3e61e7_prof);

        
        $__internal_7c375e22ae9d353d47c25461baf6bcf7eeed8e35c570abc86528189dab60eb5d->leave($__internal_7c375e22ae9d353d47c25461baf6bcf7eeed8e35c570abc86528189dab60eb5d_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4b18245f3b6ffc2a583c4646c0886c69bc849b6b9550d0a42269b3d816d4046c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b18245f3b6ffc2a583c4646c0886c69bc849b6b9550d0a42269b3d816d4046c->enter($__internal_4b18245f3b6ffc2a583c4646c0886c69bc849b6b9550d0a42269b3d816d4046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_de85a68448a143f60ab5d0718a04ac881cbe91baa5a421a5b5db9c58cd4cb2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de85a68448a143f60ab5d0718a04ac881cbe91baa5a421a5b5db9c58cd4cb2a8->enter($__internal_de85a68448a143f60ab5d0718a04ac881cbe91baa5a421a5b5db9c58cd4cb2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_de85a68448a143f60ab5d0718a04ac881cbe91baa5a421a5b5db9c58cd4cb2a8->leave($__internal_de85a68448a143f60ab5d0718a04ac881cbe91baa5a421a5b5db9c58cd4cb2a8_prof);

        
        $__internal_4b18245f3b6ffc2a583c4646c0886c69bc849b6b9550d0a42269b3d816d4046c->leave($__internal_4b18245f3b6ffc2a583c4646c0886c69bc849b6b9550d0a42269b3d816d4046c_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_19ecb36926336abd22b3f440ebff6166e3f5ab669fd680bad24b6f938545c8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ecb36926336abd22b3f440ebff6166e3f5ab669fd680bad24b6f938545c8fa->enter($__internal_19ecb36926336abd22b3f440ebff6166e3f5ab669fd680bad24b6f938545c8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05d4a9a2a8e2c438173a97171d9fc4d7fb2512d33fa6e764c4618d3f2989c5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d4a9a2a8e2c438173a97171d9fc4d7fb2512d33fa6e764c4618d3f2989c5d3->enter($__internal_05d4a9a2a8e2c438173a97171d9fc4d7fb2512d33fa6e764c4618d3f2989c5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_05d4a9a2a8e2c438173a97171d9fc4d7fb2512d33fa6e764c4618d3f2989c5d3->leave($__internal_05d4a9a2a8e2c438173a97171d9fc4d7fb2512d33fa6e764c4618d3f2989c5d3_prof);

        
        $__internal_19ecb36926336abd22b3f440ebff6166e3f5ab669fd680bad24b6f938545c8fa->leave($__internal_19ecb36926336abd22b3f440ebff6166e3f5ab669fd680bad24b6f938545c8fa_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_46bb45632880733ee984c836d685b7cc5cc09f47a97cc593ca656324a8bdc87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bb45632880733ee984c836d685b7cc5cc09f47a97cc593ca656324a8bdc87d->enter($__internal_46bb45632880733ee984c836d685b7cc5cc09f47a97cc593ca656324a8bdc87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e84104aa385a7a967a9905682c6b7bfd6f762e2da0af2f0fe960f9094fd7e3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84104aa385a7a967a9905682c6b7bfd6f762e2da0af2f0fe960f9094fd7e3e3->enter($__internal_e84104aa385a7a967a9905682c6b7bfd6f762e2da0af2f0fe960f9094fd7e3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e84104aa385a7a967a9905682c6b7bfd6f762e2da0af2f0fe960f9094fd7e3e3->leave($__internal_e84104aa385a7a967a9905682c6b7bfd6f762e2da0af2f0fe960f9094fd7e3e3_prof);

        
        $__internal_46bb45632880733ee984c836d685b7cc5cc09f47a97cc593ca656324a8bdc87d->leave($__internal_46bb45632880733ee984c836d685b7cc5cc09f47a97cc593ca656324a8bdc87d_prof);

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
        return array (  141 => 21,  132 => 20,  115 => 19,  103 => 14,  99 => 13,  94 => 12,  85 => 11,  67 => 10,  55 => 23,  53 => 20,  49 => 19,  42 => 16,  40 => 11,  36 => 10,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Project Rider{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/create-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Projects\\Exam\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\base.html.twig");
    }
}
