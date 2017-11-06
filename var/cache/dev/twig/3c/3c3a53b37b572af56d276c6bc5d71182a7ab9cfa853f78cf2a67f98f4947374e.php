<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0169d12aed22b5a03ad2f7cf59aeec6ba2d0e01d893153497b18f13a72e67aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_4e1f9f2b550b9476fca2d5f7026d6036a7035d8ef253e73580471f3aad47fabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1f9f2b550b9476fca2d5f7026d6036a7035d8ef253e73580471f3aad47fabd->enter($__internal_4e1f9f2b550b9476fca2d5f7026d6036a7035d8ef253e73580471f3aad47fabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_389d73c3162b95bbe1a6b10750e002387a92221b389048e9ec3943774d69d7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389d73c3162b95bbe1a6b10750e002387a92221b389048e9ec3943774d69d7df->enter($__internal_389d73c3162b95bbe1a6b10750e002387a92221b389048e9ec3943774d69d7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e1f9f2b550b9476fca2d5f7026d6036a7035d8ef253e73580471f3aad47fabd->leave($__internal_4e1f9f2b550b9476fca2d5f7026d6036a7035d8ef253e73580471f3aad47fabd_prof);

        
        $__internal_389d73c3162b95bbe1a6b10750e002387a92221b389048e9ec3943774d69d7df->leave($__internal_389d73c3162b95bbe1a6b10750e002387a92221b389048e9ec3943774d69d7df_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0326477fc7bea6cf809357d79aeb2a729115d4351cf31818f39fdbcd5d87cc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0326477fc7bea6cf809357d79aeb2a729115d4351cf31818f39fdbcd5d87cc4f->enter($__internal_0326477fc7bea6cf809357d79aeb2a729115d4351cf31818f39fdbcd5d87cc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_32a3a46b35d3fed184972a4c4585389403aea62bedf6c50b1e8f2038e55bbe6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a3a46b35d3fed184972a4c4585389403aea62bedf6c50b1e8f2038e55bbe6f->enter($__internal_32a3a46b35d3fed184972a4c4585389403aea62bedf6c50b1e8f2038e55bbe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_32a3a46b35d3fed184972a4c4585389403aea62bedf6c50b1e8f2038e55bbe6f->leave($__internal_32a3a46b35d3fed184972a4c4585389403aea62bedf6c50b1e8f2038e55bbe6f_prof);

        
        $__internal_0326477fc7bea6cf809357d79aeb2a729115d4351cf31818f39fdbcd5d87cc4f->leave($__internal_0326477fc7bea6cf809357d79aeb2a729115d4351cf31818f39fdbcd5d87cc4f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\ProjetSymfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
