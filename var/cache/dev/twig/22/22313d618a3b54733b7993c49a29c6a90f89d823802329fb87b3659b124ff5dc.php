<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_ac44a849fff3b1ce3bd00b358db70c8a960fba54f152331c72cb70e43f090a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cb793c505a13cbb3a3e585d80ad4aac2d1e4c45910e64db485956692cf8adc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb793c505a13cbb3a3e585d80ad4aac2d1e4c45910e64db485956692cf8adc6->enter($__internal_5cb793c505a13cbb3a3e585d80ad4aac2d1e4c45910e64db485956692cf8adc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $__internal_a3672698c4070a4655bf54f03ed696df33e9add0bffd100c5bfdcf2eeb2d7af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3672698c4070a4655bf54f03ed696df33e9add0bffd100c5bfdcf2eeb2d7af6->enter($__internal_a3672698c4070a4655bf54f03ed696df33e9add0bffd100c5bfdcf2eeb2d7af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb793c505a13cbb3a3e585d80ad4aac2d1e4c45910e64db485956692cf8adc6->leave($__internal_5cb793c505a13cbb3a3e585d80ad4aac2d1e4c45910e64db485956692cf8adc6_prof);

        
        $__internal_a3672698c4070a4655bf54f03ed696df33e9add0bffd100c5bfdcf2eeb2d7af6->leave($__internal_a3672698c4070a4655bf54f03ed696df33e9add0bffd100c5bfdcf2eeb2d7af6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d7422f91f09091b22b32bd1ad3c254a0c24247f07c63ac8a3325aeadb265453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7422f91f09091b22b32bd1ad3c254a0c24247f07c63ac8a3325aeadb265453->enter($__internal_6d7422f91f09091b22b32bd1ad3c254a0c24247f07c63ac8a3325aeadb265453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7e20d9e5bc943c14af12f7170f023b9d91d8f8baafaefdbf9b9561448c6f5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e20d9e5bc943c14af12f7170f023b9d91d8f8baafaefdbf9b9561448c6f5a8->enter($__internal_b7e20d9e5bc943c14af12f7170f023b9d91d8f8baafaefdbf9b9561448c6f5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = ((((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "name" => "time", "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_b7e20d9e5bc943c14af12f7170f023b9d91d8f8baafaefdbf9b9561448c6f5a8->leave($__internal_b7e20d9e5bc943c14af12f7170f023b9d91d8f8baafaefdbf9b9561448c6f5a8_prof);

        
        $__internal_6d7422f91f09091b22b32bd1ad3c254a0c24247f07c63ac8a3325aeadb265453->leave($__internal_6d7422f91f09091b22b32bd1ad3c254a0c24247f07c63ac8a3325aeadb265453_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "@WebProfiler/Collector/memory.html.twig", "C:\\wamp64\\www\\ProjetSymfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\memory.html.twig");
    }
}
