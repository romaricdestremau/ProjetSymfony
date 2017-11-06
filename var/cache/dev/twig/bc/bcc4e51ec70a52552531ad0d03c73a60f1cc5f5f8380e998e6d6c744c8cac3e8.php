<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67e50d0b360fc7144657c2b48ca27ccc70d3a2ede92ad21bad697ddc637f6724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8e8ff134ccdd6c6ef3e52e3574e7466a027185e222ae095d24ac2e2054cddd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e8ff134ccdd6c6ef3e52e3574e7466a027185e222ae095d24ac2e2054cddd5->enter($__internal_f8e8ff134ccdd6c6ef3e52e3574e7466a027185e222ae095d24ac2e2054cddd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a0c4049457d43b4e368292a02eb0008c8c771e0f23d9d62b99a446fe9c2f43fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c4049457d43b4e368292a02eb0008c8c771e0f23d9d62b99a446fe9c2f43fd->enter($__internal_a0c4049457d43b4e368292a02eb0008c8c771e0f23d9d62b99a446fe9c2f43fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e8ff134ccdd6c6ef3e52e3574e7466a027185e222ae095d24ac2e2054cddd5->leave($__internal_f8e8ff134ccdd6c6ef3e52e3574e7466a027185e222ae095d24ac2e2054cddd5_prof);

        
        $__internal_a0c4049457d43b4e368292a02eb0008c8c771e0f23d9d62b99a446fe9c2f43fd->leave($__internal_a0c4049457d43b4e368292a02eb0008c8c771e0f23d9d62b99a446fe9c2f43fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c18962b8e921ca3eaee2ea4901671e19aad14b4f5fbd0a3e82c3134c9114f1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18962b8e921ca3eaee2ea4901671e19aad14b4f5fbd0a3e82c3134c9114f1da->enter($__internal_c18962b8e921ca3eaee2ea4901671e19aad14b4f5fbd0a3e82c3134c9114f1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_52808b6ad8a1d093322ddda6c526fdbe6c85add975f0744a9e90e8bb703b09c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52808b6ad8a1d093322ddda6c526fdbe6c85add975f0744a9e90e8bb703b09c6->enter($__internal_52808b6ad8a1d093322ddda6c526fdbe6c85add975f0744a9e90e8bb703b09c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_52808b6ad8a1d093322ddda6c526fdbe6c85add975f0744a9e90e8bb703b09c6->leave($__internal_52808b6ad8a1d093322ddda6c526fdbe6c85add975f0744a9e90e8bb703b09c6_prof);

        
        $__internal_c18962b8e921ca3eaee2ea4901671e19aad14b4f5fbd0a3e82c3134c9114f1da->leave($__internal_c18962b8e921ca3eaee2ea4901671e19aad14b4f5fbd0a3e82c3134c9114f1da_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3eb34ead32ccac004698e8124dcab2fcb0865e02c7295030f712325c6131f544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb34ead32ccac004698e8124dcab2fcb0865e02c7295030f712325c6131f544->enter($__internal_3eb34ead32ccac004698e8124dcab2fcb0865e02c7295030f712325c6131f544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a03867e1c256cedf05afc3bf46cdbcb20b62627dfef501047cc5b81b179c5ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03867e1c256cedf05afc3bf46cdbcb20b62627dfef501047cc5b81b179c5ce7->enter($__internal_a03867e1c256cedf05afc3bf46cdbcb20b62627dfef501047cc5b81b179c5ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a03867e1c256cedf05afc3bf46cdbcb20b62627dfef501047cc5b81b179c5ce7->leave($__internal_a03867e1c256cedf05afc3bf46cdbcb20b62627dfef501047cc5b81b179c5ce7_prof);

        
        $__internal_3eb34ead32ccac004698e8124dcab2fcb0865e02c7295030f712325c6131f544->leave($__internal_3eb34ead32ccac004698e8124dcab2fcb0865e02c7295030f712325c6131f544_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_995e9766d2680af3a4df4b5436225e18290d61ca07e37f702f2c445eea370a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995e9766d2680af3a4df4b5436225e18290d61ca07e37f702f2c445eea370a60->enter($__internal_995e9766d2680af3a4df4b5436225e18290d61ca07e37f702f2c445eea370a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f3d57d0ae262e2439de2741f8577cf1f30c376f01a31175914ba3534c0bea8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d57d0ae262e2439de2741f8577cf1f30c376f01a31175914ba3534c0bea8e4->enter($__internal_f3d57d0ae262e2439de2741f8577cf1f30c376f01a31175914ba3534c0bea8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f3d57d0ae262e2439de2741f8577cf1f30c376f01a31175914ba3534c0bea8e4->leave($__internal_f3d57d0ae262e2439de2741f8577cf1f30c376f01a31175914ba3534c0bea8e4_prof);

        
        $__internal_995e9766d2680af3a4df4b5436225e18290d61ca07e37f702f2c445eea370a60->leave($__internal_995e9766d2680af3a4df4b5436225e18290d61ca07e37f702f2c445eea370a60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ProjetSymfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
