<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* detalle_compra/show.html.twig */
class __TwigTemplate_72c6ffba9c3f034987ac0e42ba4b9fec extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detalle_compra/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detalle_compra/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detalle_compra/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "DetalleCompra";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>DetalleCompra</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detalle_compra"]) || array_key_exists("detalle_compra", $context) ? $context["detalle_compra"] : (function () { throw new RuntimeError('Variable "detalle_compra" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>IdTransaccion</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detalle_compra"]) || array_key_exists("detalle_compra", $context) ? $context["detalle_compra"] : (function () { throw new RuntimeError('Variable "detalle_compra" does not exist.', 16, $this->source); })()), "IdTransaccion", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 20
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["detalle_compra"]) || array_key_exists("detalle_compra", $context) ? $context["detalle_compra"] : (function () { throw new RuntimeError('Variable "detalle_compra" does not exist.', 20, $this->source); })()), "fecha", [], "any", false, false, false, 20)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detalle_compra"]) || array_key_exists("detalle_compra", $context) ? $context["detalle_compra"] : (function () { throw new RuntimeError('Variable "detalle_compra" does not exist.', 20, $this->source); })()), "fecha", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detalle_compra"]) || array_key_exists("detalle_compra", $context) ? $context["detalle_compra"] : (function () { throw new RuntimeError('Variable "detalle_compra" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detalle_compra"]) || array_key_exists("detalle_compra", $context) ? $context["detalle_compra"] : (function () { throw new RuntimeError('Variable "detalle_compra" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>IdCliente</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detalle_compra"]) || array_key_exists("detalle_compra", $context) ? $context["detalle_compra"] : (function () { throw new RuntimeError('Variable "detalle_compra" does not exist.', 32, $this->source); })()), "idCliente", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detalle_compra"]) || array_key_exists("detalle_compra", $context) ? $context["detalle_compra"] : (function () { throw new RuntimeError('Variable "detalle_compra" does not exist.', 36, $this->source); })()), "total", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detalle_compra_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detalle_compra_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["detalle_compra"]) || array_key_exists("detalle_compra", $context) ? $context["detalle_compra"] : (function () { throw new RuntimeError('Variable "detalle_compra" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "detalle_compra/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "detalle_compra/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  162 => 45,  157 => 43,  152 => 41,  144 => 36,  137 => 32,  130 => 28,  123 => 24,  116 => 20,  109 => 16,  102 => 12,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DetalleCompra{% endblock %}

{% block body %}
    <h1>DetalleCompra</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ detalle_compra.id }}</td>
            </tr>
            <tr>
                <th>IdTransaccion</th>
                <td>{{ detalle_compra.IdTransaccion }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ detalle_compra.fecha ? detalle_compra.fecha|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ detalle_compra.status }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ detalle_compra.email }}</td>
            </tr>
            <tr>
                <th>IdCliente</th>
                <td>{{ detalle_compra.idCliente }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>{{ detalle_compra.total }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_detalle_compra_index') }}\">back to list</a>

    <a href=\"{{ path('app_detalle_compra_edit', {'id': detalle_compra.id}) }}\">edit</a>

    {{ include('detalle_compra/_delete_form.html.twig') }}
{% endblock %}
", "detalle_compra/show.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\templates\\detalle_compra\\show.html.twig");
    }
}
