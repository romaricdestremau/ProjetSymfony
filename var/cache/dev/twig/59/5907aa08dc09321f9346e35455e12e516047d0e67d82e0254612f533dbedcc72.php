<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_62a12d3e0578e8930a32edb19e64b11f5d1e05a6e2f5285f9caace25f03e3cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d8d854aa3b2325d4cf12355c183cf798338492d9367251d8ccf3f7f6d4d74836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d854aa3b2325d4cf12355c183cf798338492d9367251d8ccf3f7f6d4d74836->enter($__internal_d8d854aa3b2325d4cf12355c183cf798338492d9367251d8ccf3f7f6d4d74836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2bed47364578461e4c16ef764d805d10dc71a768044d3da917e7a4558737050d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bed47364578461e4c16ef764d805d10dc71a768044d3da917e7a4558737050d->enter($__internal_2bed47364578461e4c16ef764d805d10dc71a768044d3da917e7a4558737050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d854aa3b2325d4cf12355c183cf798338492d9367251d8ccf3f7f6d4d74836->leave($__internal_d8d854aa3b2325d4cf12355c183cf798338492d9367251d8ccf3f7f6d4d74836_prof);

        
        $__internal_2bed47364578461e4c16ef764d805d10dc71a768044d3da917e7a4558737050d->leave($__internal_2bed47364578461e4c16ef764d805d10dc71a768044d3da917e7a4558737050d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8ef1d0c09dc09fc28c62f1288ee29646095aab7eb915d42e70cf39f801cf92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ef1d0c09dc09fc28c62f1288ee29646095aab7eb915d42e70cf39f801cf92b->enter($__internal_b8ef1d0c09dc09fc28c62f1288ee29646095aab7eb915d42e70cf39f801cf92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9e205a2f2277a07f21cee2c5f32a53ae93015ddefcefc002955768240be1dcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e205a2f2277a07f21cee2c5f32a53ae93015ddefcefc002955768240be1dcd9->enter($__internal_9e205a2f2277a07f21cee2c5f32a53ae93015ddefcefc002955768240be1dcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9e205a2f2277a07f21cee2c5f32a53ae93015ddefcefc002955768240be1dcd9->leave($__internal_9e205a2f2277a07f21cee2c5f32a53ae93015ddefcefc002955768240be1dcd9_prof);

        
        $__internal_b8ef1d0c09dc09fc28c62f1288ee29646095aab7eb915d42e70cf39f801cf92b->leave($__internal_b8ef1d0c09dc09fc28c62f1288ee29646095aab7eb915d42e70cf39f801cf92b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c17c6b36a4a31cf43bfd44974d0fe782670a6285956c46f2d6b6218fcad78aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17c6b36a4a31cf43bfd44974d0fe782670a6285956c46f2d6b6218fcad78aa3->enter($__internal_c17c6b36a4a31cf43bfd44974d0fe782670a6285956c46f2d6b6218fcad78aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1198ebfaee4d0f7666c287f4b30fc986ce23cb65fd7b61215eaa98bfc599849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1198ebfaee4d0f7666c287f4b30fc986ce23cb65fd7b61215eaa98bfc599849->enter($__internal_a1198ebfaee4d0f7666c287f4b30fc986ce23cb65fd7b61215eaa98bfc599849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1198ebfaee4d0f7666c287f4b30fc986ce23cb65fd7b61215eaa98bfc599849->leave($__internal_a1198ebfaee4d0f7666c287f4b30fc986ce23cb65fd7b61215eaa98bfc599849_prof);

        
        $__internal_c17c6b36a4a31cf43bfd44974d0fe782670a6285956c46f2d6b6218fcad78aa3->leave($__internal_c17c6b36a4a31cf43bfd44974d0fe782670a6285956c46f2d6b6218fcad78aa3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb293b5b77c290709e794ad17a9861622f762c920504bcb1bce57b744963a657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb293b5b77c290709e794ad17a9861622f762c920504bcb1bce57b744963a657->enter($__internal_eb293b5b77c290709e794ad17a9861622f762c920504bcb1bce57b744963a657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9af24f4ec906c8712751ff27c521b5d097b85aa8696fb1f07422b14aa7e0a8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af24f4ec906c8712751ff27c521b5d097b85aa8696fb1f07422b14aa7e0a8dd->enter($__internal_9af24f4ec906c8712751ff27c521b5d097b85aa8696fb1f07422b14aa7e0a8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9af24f4ec906c8712751ff27c521b5d097b85aa8696fb1f07422b14aa7e0a8dd->leave($__internal_9af24f4ec906c8712751ff27c521b5d097b85aa8696fb1f07422b14aa7e0a8dd_prof);

        
        $__internal_eb293b5b77c290709e794ad17a9861622f762c920504bcb1bce57b744963a657->leave($__internal_eb293b5b77c290709e794ad17a9861622f762c920504bcb1bce57b744963a657_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ProjetSymfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
