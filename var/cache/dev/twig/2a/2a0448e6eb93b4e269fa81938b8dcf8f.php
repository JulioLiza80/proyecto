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

/* lentillas/show.html.twig */
class __TwigTemplate_06947790f3039cacffed938615d5a94c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lentillas/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lentillas/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lentillas/show.html.twig", 1);
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

        yield "Lentillas";
        
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
        yield "    <h1>Lentillas</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Marca</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 16, $this->source); })()), "marca", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 20, $this->source); })()), "descripcion", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>TipoProducto</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 24, $this->source); })()), "tipoProducto", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Frecuencia</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 28, $this->source); })()), "frecuencia", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 32, $this->source); })()), "tipo", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Material</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 36, $this->source); })()), "material", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 40, $this->source); })()), "precio", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Iva</th>
                <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 44, $this->source); })()), "iva", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Descuento</th>
                <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 48, $this->source); })()), "descuento", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 52, $this->source); })()), "stock", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Destacado</th>
                <td>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 56, $this->source); })()), "destacado", [], "any", false, false, false, 56), "html", null, true);
        yield "</td>
            </tr>
             <tr>
                <th>Imagen1</th>
                <td> 
                    <img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 61, $this->source); })()), "imageFile"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 61, $this->source); })()), "imageName", [], "any", false, false, false, 61), "html", null, true);
        yield "\" width=\"80px\">
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lentillas_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lentillas_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lentilla"]) || array_key_exists("lentilla", $context) ? $context["lentilla"] : (function () { throw new RuntimeError('Variable "lentilla" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "lentillas/_delete_form.html.twig");
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
        return "lentillas/show.html.twig";
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
        return array (  208 => 71,  203 => 69,  198 => 67,  187 => 61,  179 => 56,  172 => 52,  165 => 48,  158 => 44,  151 => 40,  144 => 36,  137 => 32,  130 => 28,  123 => 24,  116 => 20,  109 => 16,  102 => 12,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lentillas{% endblock %}

{% block body %}
    <h1>Lentillas</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ lentilla.id }}</td>
            </tr>
            <tr>
                <th>Marca</th>
                <td>{{ lentilla.marca }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ lentilla.descripcion }}</td>
            </tr>
            <tr>
                <th>TipoProducto</th>
                <td>{{ lentilla.tipoProducto }}</td>
            </tr>
            <tr>
                <th>Frecuencia</th>
                <td>{{ lentilla.frecuencia }}</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>{{ lentilla.tipo }}</td>
            </tr>
            <tr>
                <th>Material</th>
                <td>{{ lentilla.material }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ lentilla.precio }}</td>
            </tr>
            <tr>
                <th>Iva</th>
                <td>{{ lentilla.iva }}</td>
            </tr>
            <tr>
                <th>Descuento</th>
                <td>{{ lentilla.descuento }}</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>{{ lentilla.stock }}</td>
            </tr>
            <tr>
                <th>Destacado</th>
                <td>{{ lentilla.destacado }}</td>
            </tr>
             <tr>
                <th>Imagen1</th>
                <td> 
                    <img src=\"{{ vich_uploader_asset(lentilla, 'imageFile') }}\" alt=\"{{ lentilla.imageName }}\" width=\"80px\">
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_lentillas_index') }}\">back to list</a>

    <a href=\"{{ path('app_lentillas_edit', {'id': lentilla.id}) }}\">edit</a>

    {{ include('lentillas/_delete_form.html.twig') }}
{% endblock %}
", "lentillas/show.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\templates\\lentillas\\show.html.twig");
    }
}
