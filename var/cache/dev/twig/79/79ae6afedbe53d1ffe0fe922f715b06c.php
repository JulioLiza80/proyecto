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

/* gafas/show.html.twig */
class __TwigTemplate_a2a38786b308f180bdf83d89a743eea6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gafas/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gafas/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gafas/show.html.twig", 1);
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

        yield "Gafas";
        
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
        yield "    <h1>Gafas</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Marca</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 16, $this->source); })()), "marca", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Modelo</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 20, $this->source); })()), "modelo", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 24, $this->source); })()), "descripcion", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 28, $this->source); })()), "tipo", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Aro</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 32, $this->source); })()), "aro", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Puente</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 36, $this->source); })()), "puente", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Talla</th>
                <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 40, $this->source); })()), "talla", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Varilla</th>
                <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 44, $this->source); })()), "varilla", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>ColorMontura</th>
                <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 48, $this->source); })()), "colorMontura", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>ColorLentes</th>
                <td>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 52, $this->source); })()), "colorLentes", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>MaterialMontura</th>
                <td>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 56, $this->source); })()), "materialMontura", [], "any", false, false, false, 56), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>TipoMontura</th>
                <td>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 60, $this->source); })()), "tipoMontura", [], "any", false, false, false, 60), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 64, $this->source); })()), "precio", [], "any", false, false, false, 64), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Iva</th>
                <td>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 68, $this->source); })()), "iva", [], "any", false, false, false, 68), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Descuento</th>
                <td>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 72, $this->source); })()), "descuento", [], "any", false, false, false, 72), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 76, $this->source); })()), "stock", [], "any", false, false, false, 76), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Destacado</th>
                <td>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 80, $this->source); })()), "destacado", [], "any", false, false, false, 80), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Imagen1</th>
                <td> 
                    <img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 85, $this->source); })()), "imageFile"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 85, $this->source); })()), "imageName", [], "any", false, false, false, 85), "html", null, true);
        yield "\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen2</th>
                <td> 
                    <img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 91, $this->source); })()), "imageFile2"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 91, $this->source); })()), "imageName2", [], "any", false, false, false, 91), "html", null, true);
        yield "\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen3</th>
                <td> 
                    <img src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 97, $this->source); })()), "imageFile3"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 97, $this->source); })()), "imageName3", [], "any", false, false, false, 97), "html", null, true);
        yield "\" width=\"80px\">
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gafas_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gafas_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["gafa"]) || array_key_exists("gafa", $context) ? $context["gafa"] : (function () { throw new RuntimeError('Variable "gafa" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 107
        yield Twig\Extension\CoreExtension::include($this->env, $context, "gafas/_delete_form.html.twig");
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
        return "gafas/show.html.twig";
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
        return array (  272 => 107,  267 => 105,  262 => 103,  251 => 97,  240 => 91,  229 => 85,  221 => 80,  214 => 76,  207 => 72,  200 => 68,  193 => 64,  186 => 60,  179 => 56,  172 => 52,  165 => 48,  158 => 44,  151 => 40,  144 => 36,  137 => 32,  130 => 28,  123 => 24,  116 => 20,  109 => 16,  102 => 12,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gafas{% endblock %}

{% block body %}
    <h1>Gafas</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ gafa.id }}</td>
            </tr>
            <tr>
                <th>Marca</th>
                <td>{{ gafa.marca }}</td>
            </tr>
            <tr>
                <th>Modelo</th>
                <td>{{ gafa.modelo }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ gafa.descripcion }}</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>{{ gafa.tipo }}</td>
            </tr>
            <tr>
                <th>Aro</th>
                <td>{{ gafa.aro }}</td>
            </tr>
            <tr>
                <th>Puente</th>
                <td>{{ gafa.puente }}</td>
            </tr>
            <tr>
                <th>Talla</th>
                <td>{{ gafa.talla }}</td>
            </tr>
            <tr>
                <th>Varilla</th>
                <td>{{ gafa.varilla }}</td>
            </tr>
            <tr>
                <th>ColorMontura</th>
                <td>{{ gafa.colorMontura }}</td>
            </tr>
            <tr>
                <th>ColorLentes</th>
                <td>{{ gafa.colorLentes }}</td>
            </tr>
            <tr>
                <th>MaterialMontura</th>
                <td>{{ gafa.materialMontura }}</td>
            </tr>
            <tr>
                <th>TipoMontura</th>
                <td>{{ gafa.tipoMontura }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ gafa.precio }}</td>
            </tr>
            <tr>
                <th>Iva</th>
                <td>{{ gafa.iva }}</td>
            </tr>
            <tr>
                <th>Descuento</th>
                <td>{{ gafa.descuento }}</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>{{ gafa.stock }}</td>
            </tr>
            <tr>
                <th>Destacado</th>
                <td>{{ gafa.destacado }}</td>
            </tr>
            <tr>
                <th>Imagen1</th>
                <td> 
                    <img src=\"{{ vich_uploader_asset(gafa, 'imageFile') }}\" alt=\"{{ gafa.imageName }}\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen2</th>
                <td> 
                    <img src=\"{{ vich_uploader_asset(gafa, 'imageFile2') }}\" alt=\"{{ gafa.imageName2 }}\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen3</th>
                <td> 
                    <img src=\"{{ vich_uploader_asset(gafa, 'imageFile3') }}\" alt=\"{{ gafa.imageName3 }}\" width=\"80px\">
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_gafas_index') }}\">back to list</a>

    <a href=\"{{ path('app_gafas_edit', {'id': gafa.id}) }}\">edit</a>

    {{ include('gafas/_delete_form.html.twig') }}
{% endblock %}
", "gafas/show.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\templates\\gafas\\show.html.twig");
    }
}
