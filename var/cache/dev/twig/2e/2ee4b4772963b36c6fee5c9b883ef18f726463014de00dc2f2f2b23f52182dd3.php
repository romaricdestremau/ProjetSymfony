<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_638af14ff4006958c8fa4c585e5a6963b8a07d2e05a8624ffd1ebb0274d5af23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fedb2d9bd76a06adf934bfa0f5dcc47778e22556ff3c46a76c1f339e2f34cadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedb2d9bd76a06adf934bfa0f5dcc47778e22556ff3c46a76c1f339e2f34cadb->enter($__internal_fedb2d9bd76a06adf934bfa0f5dcc47778e22556ff3c46a76c1f339e2f34cadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_af529f4494a88746b8c910a3bf642fdf7049c9f8a5548027247bfbd88bd1ea05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af529f4494a88746b8c910a3bf642fdf7049c9f8a5548027247bfbd88bd1ea05->enter($__internal_af529f4494a88746b8c910a3bf642fdf7049c9f8a5548027247bfbd88bd1ea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "file", array()), "")) : (""))) &&  !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "line", array()), "")) : (""))))) {
            // line 5
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array()), $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array()))), array((" at line " . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array())) => ""));
            echo ":";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) ? (")") : (""));
        }
        
        $__internal_fedb2d9bd76a06adf934bfa0f5dcc47778e22556ff3c46a76c1f339e2f34cadb->leave($__internal_fedb2d9bd76a06adf934bfa0f5dcc47778e22556ff3c46a76c1f339e2f34cadb_prof);

        
        $__internal_af529f4494a88746b8c910a3bf642fdf7049c9f8a5548027247bfbd88bd1ea05->leave($__internal_af529f4494a88746b8c910a3bf642fdf7049c9f8a5548027247bfbd88bd1ea05_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\wamp64\\www\\ProjetSymfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
