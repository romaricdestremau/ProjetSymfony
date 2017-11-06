<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5caf870af6987cf730c25a82c89614b48742d9982a69f9ee90ea7b25b58485bd extends Twig_Template
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
        $__internal_1e267aee0c2dc8c593199b3e13a60e20cc6f7bb2e9e27e5e564a5902797eae68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e267aee0c2dc8c593199b3e13a60e20cc6f7bb2e9e27e5e564a5902797eae68->enter($__internal_1e267aee0c2dc8c593199b3e13a60e20cc6f7bb2e9e27e5e564a5902797eae68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d264d87e52160facbc269651d68e8d27b4427cc76ded28380bc2753f3499469e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d264d87e52160facbc269651d68e8d27b4427cc76ded28380bc2753f3499469e->enter($__internal_d264d87e52160facbc269651d68e8d27b4427cc76ded28380bc2753f3499469e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1e267aee0c2dc8c593199b3e13a60e20cc6f7bb2e9e27e5e564a5902797eae68->leave($__internal_1e267aee0c2dc8c593199b3e13a60e20cc6f7bb2e9e27e5e564a5902797eae68_prof);

        
        $__internal_d264d87e52160facbc269651d68e8d27b4427cc76ded28380bc2753f3499469e->leave($__internal_d264d87e52160facbc269651d68e8d27b4427cc76ded28380bc2753f3499469e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e968255b46d8f1989cbe7cb91aa1e5da38c62e2ed1ef61452fec79bd992136c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e968255b46d8f1989cbe7cb91aa1e5da38c62e2ed1ef61452fec79bd992136c3->enter($__internal_e968255b46d8f1989cbe7cb91aa1e5da38c62e2ed1ef61452fec79bd992136c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_111eace27f68652a63e7b5764aea13e61171c27dce4aab9e461bb3a6c3c4b6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111eace27f68652a63e7b5764aea13e61171c27dce4aab9e461bb3a6c3c4b6a2->enter($__internal_111eace27f68652a63e7b5764aea13e61171c27dce4aab9e461bb3a6c3c4b6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_111eace27f68652a63e7b5764aea13e61171c27dce4aab9e461bb3a6c3c4b6a2->leave($__internal_111eace27f68652a63e7b5764aea13e61171c27dce4aab9e461bb3a6c3c4b6a2_prof);

        
        $__internal_e968255b46d8f1989cbe7cb91aa1e5da38c62e2ed1ef61452fec79bd992136c3->leave($__internal_e968255b46d8f1989cbe7cb91aa1e5da38c62e2ed1ef61452fec79bd992136c3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_51e87524b681697f16cb5782388bfbf437b5f83ad1a0cc1fbe8655607c7e48f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e87524b681697f16cb5782388bfbf437b5f83ad1a0cc1fbe8655607c7e48f6->enter($__internal_51e87524b681697f16cb5782388bfbf437b5f83ad1a0cc1fbe8655607c7e48f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e654aa162d478a251374cfb6c2b3c41d949b0070c1fb5f720aab510125296687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e654aa162d478a251374cfb6c2b3c41d949b0070c1fb5f720aab510125296687->enter($__internal_e654aa162d478a251374cfb6c2b3c41d949b0070c1fb5f720aab510125296687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e654aa162d478a251374cfb6c2b3c41d949b0070c1fb5f720aab510125296687->leave($__internal_e654aa162d478a251374cfb6c2b3c41d949b0070c1fb5f720aab510125296687_prof);

        
        $__internal_51e87524b681697f16cb5782388bfbf437b5f83ad1a0cc1fbe8655607c7e48f6->leave($__internal_51e87524b681697f16cb5782388bfbf437b5f83ad1a0cc1fbe8655607c7e48f6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ebf8ee1de30d26dff4c156eb97bc63574f086c3396d3e20eacda98e7cc5d95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebf8ee1de30d26dff4c156eb97bc63574f086c3396d3e20eacda98e7cc5d95c->enter($__internal_3ebf8ee1de30d26dff4c156eb97bc63574f086c3396d3e20eacda98e7cc5d95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f96f01fccc1e4171ccaa9564af1d2ce534717775e7291a67fcc173cbd3bb8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f96f01fccc1e4171ccaa9564af1d2ce534717775e7291a67fcc173cbd3bb8fb->enter($__internal_2f96f01fccc1e4171ccaa9564af1d2ce534717775e7291a67fcc173cbd3bb8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f96f01fccc1e4171ccaa9564af1d2ce534717775e7291a67fcc173cbd3bb8fb->leave($__internal_2f96f01fccc1e4171ccaa9564af1d2ce534717775e7291a67fcc173cbd3bb8fb_prof);

        
        $__internal_3ebf8ee1de30d26dff4c156eb97bc63574f086c3396d3e20eacda98e7cc5d95c->leave($__internal_3ebf8ee1de30d26dff4c156eb97bc63574f086c3396d3e20eacda98e7cc5d95c_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\ProjetSymfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
