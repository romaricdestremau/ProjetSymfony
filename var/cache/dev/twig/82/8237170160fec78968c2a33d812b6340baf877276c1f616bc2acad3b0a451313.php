<?php

/* ::front.html.twig */
class __TwigTemplate_0b0938646da99d57b37c4ab17af238bd2d81e51377904b21ed97499f570258e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5f66c65fecd7d7bf9edd57792488aa7f20d53b350f520bc175a3e4833ca42da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f66c65fecd7d7bf9edd57792488aa7f20d53b350f520bc175a3e4833ca42da->enter($__internal_e5f66c65fecd7d7bf9edd57792488aa7f20d53b350f520bc175a3e4833ca42da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        $__internal_5d027800dc49f4be2b4e5c51c66d19d17aa90857cc64fac0a3a7dca33c269c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d027800dc49f4be2b4e5c51c66d19d17aa90857cc64fac0a3a7dca33c269c7d->enter($__internal_5d027800dc49f4be2b4e5c51c66d19d17aa90857cc64fac0a3a7dca33c269c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        // line 1
        $context["__PAGE__"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_template_stylesheets");
        echo "\" />

        ";
        // line 11
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "header", ($context["__PAGE__"] ?? $this->getContext($context, "__PAGE__")));
        echo "

        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body class=\"page_";
        // line 15
        echo twig_escape_filter($this->env, ($context["__PAGE__"] ?? $this->getContext($context, "__PAGE__")), "html", null, true);
        echo "\">
        <!-- BEGIN PAGE HEADER -->
        ";
        // line 17
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayHeader", ($context["__PAGE__"] ?? $this->getContext($context, "__PAGE__")));
        echo "
        <!-- END PAGE HEADER -->

        <!-- BEGIN PAGE CONTENT -->
        <section class=\"container\">
            <!-- BEGIN PAGE CONTENT TOP -->
            ";
        // line 23
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayContentTop", ($context["__PAGE__"] ?? $this->getContext($context, "__PAGE__")));
        echo "
            <!-- END PAGE CONTENT TOP -->

            <section class=\"row\">
                <!-- BEGIN PAGE CONTENT MAIN -->
                <section class=\"col-sm-8 col-md-9 col-lg-9 col-xs-12\">
                    ";
        // line 29
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayContentMain", ($context["__PAGE__"] ?? $this->getContext($context, "__PAGE__")));
        echo "
                </section>
                <!-- END PAGE CONTENT MAIN -->

                <!-- BEGIN PAGE CONTENT SIDEBAR -->
                <section class=\"col-sm-4 col-md-3 col-lg-3 col-xs-12\">
                    ";
        // line 35
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayContentSidebar", ($context["__PAGE__"] ?? $this->getContext($context, "__PAGE__")));
        echo "
                </section>
                <!-- END PAGE CONTENT SIDEBAR -->
            </section>

            <!-- BEGIN PAGE CONTENT BOTTOM -->
            ";
        // line 41
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayContentBottom", ($context["__PAGE__"] ?? $this->getContext($context, "__PAGE__")));
        echo "
            <!-- END PAGE CONTENT BOTTOM -->
        </section>
        <!-- END PAGE CONTENT -->

        <footer>
            ";
        // line 47
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayFooter", ($context["__PAGE__"] ?? $this->getContext($context, "__PAGE__")));
        echo "
        </footer>
    </body>

    <script type=\"text/javascript\" src=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_template_javascripts");
        echo "\"></script>

    <!-- BEGIN CUSTOM JAVASCRIPTS -->
    ";
        // line 54
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "javascripts", ($context["__PAGE__"] ?? $this->getContext($context, "__PAGE__")));
        echo "
    <!-- END CUSTOM JAVASCRIPTS -->
</html>
";
        
        $__internal_e5f66c65fecd7d7bf9edd57792488aa7f20d53b350f520bc175a3e4833ca42da->leave($__internal_e5f66c65fecd7d7bf9edd57792488aa7f20d53b350f520bc175a3e4833ca42da_prof);

        
        $__internal_5d027800dc49f4be2b4e5c51c66d19d17aa90857cc64fac0a3a7dca33c269c7d->leave($__internal_5d027800dc49f4be2b4e5c51c66d19d17aa90857cc64fac0a3a7dca33c269c7d_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_61466416462ce58b2aa80601b25f3b262a53a8a669db75983de2cb658f03ce59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61466416462ce58b2aa80601b25f3b262a53a8a669db75983de2cb658f03ce59->enter($__internal_61466416462ce58b2aa80601b25f3b262a53a8a669db75983de2cb658f03ce59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87d24456dd18db60612b9c0e1721a933691e73fcbdeca346cf58246f98157d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d24456dd18db60612b9c0e1721a933691e73fcbdeca346cf58246f98157d16->enter($__internal_87d24456dd18db60612b9c0e1721a933691e73fcbdeca346cf58246f98157d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_87d24456dd18db60612b9c0e1721a933691e73fcbdeca346cf58246f98157d16->leave($__internal_87d24456dd18db60612b9c0e1721a933691e73fcbdeca346cf58246f98157d16_prof);

        
        $__internal_61466416462ce58b2aa80601b25f3b262a53a8a669db75983de2cb658f03ce59->leave($__internal_61466416462ce58b2aa80601b25f3b262a53a8a669db75983de2cb658f03ce59_prof);

    }

    public function getTemplateName()
    {
        return "::front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 13,  118 => 54,  112 => 51,  105 => 47,  96 => 41,  87 => 35,  78 => 29,  69 => 23,  60 => 17,  55 => 15,  50 => 13,  45 => 11,  40 => 9,  32 => 4,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set __PAGE__ = app.request.attributes.get('_route') %}

<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link rel=\"stylesheet\" href=\"{{ path('front_template_stylesheets') }}\" />

        {{ hook(\"header\", __PAGE__) }}

        <title>{% block title %}{% endblock %}</title>
    </head>
    <body class=\"page_{{ __PAGE__ }}\">
        <!-- BEGIN PAGE HEADER -->
        {{ hook(\"displayHeader\", __PAGE__) }}
        <!-- END PAGE HEADER -->

        <!-- BEGIN PAGE CONTENT -->
        <section class=\"container\">
            <!-- BEGIN PAGE CONTENT TOP -->
            {{ hook(\"displayContentTop\", __PAGE__) }}
            <!-- END PAGE CONTENT TOP -->

            <section class=\"row\">
                <!-- BEGIN PAGE CONTENT MAIN -->
                <section class=\"col-sm-8 col-md-9 col-lg-9 col-xs-12\">
                    {{ hook(\"displayContentMain\", __PAGE__) }}
                </section>
                <!-- END PAGE CONTENT MAIN -->

                <!-- BEGIN PAGE CONTENT SIDEBAR -->
                <section class=\"col-sm-4 col-md-3 col-lg-3 col-xs-12\">
                    {{ hook(\"displayContentSidebar\", __PAGE__) }}
                </section>
                <!-- END PAGE CONTENT SIDEBAR -->
            </section>

            <!-- BEGIN PAGE CONTENT BOTTOM -->
            {{ hook(\"displayContentBottom\", __PAGE__) }}
            <!-- END PAGE CONTENT BOTTOM -->
        </section>
        <!-- END PAGE CONTENT -->

        <footer>
            {{ hook(\"displayFooter\", __PAGE__) }}
        </footer>
    </body>

    <script type=\"text/javascript\" src=\"{{ path('front_template_javascripts')}}\"></script>

    <!-- BEGIN CUSTOM JAVASCRIPTS -->
    {{ hook(\"javascripts\", __PAGE__) }}
    <!-- END CUSTOM JAVASCRIPTS -->
</html>
", "::front.html.twig", "C:\\wamp64\\www\\ProjetSymfony\\app/Resources\\views/front.html.twig");
    }
}
