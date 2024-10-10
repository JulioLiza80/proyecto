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

/* gafas/index.html.twig */
class __TwigTemplate_a0469d7207fcf68a15d2f23e4a840f93 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gafas/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gafas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gafas/index.html.twig", 1);
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

        yield "Gafas index";
        
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
        yield "    <h1>Gafas index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Descripcion</th>
                <th>Tipo</th>
                <th>Aro</th>
                <th>Puente</th>
                <th>Talla</th>
                <th>Varilla</th>
                <th>ColorMontura</th>
                <th>ColorLentes</th>
                <th>MaterialMontura</th>
                <th>TipoMontura</th>
                <th>Precio</th>
                <th>Iva</th>
                <th>Descuento</th>
                <th>Stock</th>
                <th>Destacado</th>
                <th>Imagen1</th>
                <th>Imagen2</th>
                <th>Imagen3</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["gafas"]) || array_key_exists("gafas", $context) ? $context["gafas"] : (function () { throw new RuntimeError('Variable "gafas" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gafa"]) {
            // line 37
            yield "            <tr>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "marca", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "modelo", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "descripcion", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "tipo", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "aro", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "puente", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "talla", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "varilla", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "colorMontura", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "colorLentes", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "materialMontura", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "tipoMontura", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "precio", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "iva", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "descuento", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "stock", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "destacado", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 57
            if (CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "imageName", [], "any", false, false, false, 57)) {
                // line 58
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["gafa"], "imageFile"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "imageName", [], "any", false, false, false, 58), "html", null, true);
                yield "\" width=\"80px\">
                    ";
            }
            // line 60
            yield "                </td>
                <td>
                    ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "imageName2", [], "any", false, false, false, 62)) {
                // line 63
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["gafa"], "imageFile2"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "imageName2", [], "any", false, false, false, 63), "html", null, true);
                yield "\" width=\"80px\">
                    ";
            }
            // line 65
            yield "                </td>
                <td>
                    ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "imageName3", [], "any", false, false, false, 67)) {
                // line 68
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["gafa"], "imageFile3"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "imageName3", [], "any", false, false, false, 68), "html", null, true);
                yield "\" width=\"80px\">
                    ";
            }
            // line 70
            yield "                </td>
                <td>
                    <a href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gafas_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gafas_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["gafa"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            yield "            <tr>
                <td colspan=\"19\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gafa'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gafas_new");
        yield "\">Create new</a>
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
        return "gafas/index.html.twig";
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
        return array (  276 => 84,  271 => 81,  262 => 77,  253 => 73,  249 => 72,  245 => 70,  237 => 68,  235 => 67,  231 => 65,  223 => 63,  221 => 62,  217 => 60,  209 => 58,  207 => 57,  202 => 55,  198 => 54,  194 => 53,  190 => 52,  186 => 51,  182 => 50,  178 => 49,  174 => 48,  170 => 47,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  131 => 37,  126 => 36,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gafas index{% endblock %}

{% block body %}
    <h1>Gafas index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Descripcion</th>
                <th>Tipo</th>
                <th>Aro</th>
                <th>Puente</th>
                <th>Talla</th>
                <th>Varilla</th>
                <th>ColorMontura</th>
                <th>ColorLentes</th>
                <th>MaterialMontura</th>
                <th>TipoMontura</th>
                <th>Precio</th>
                <th>Iva</th>
                <th>Descuento</th>
                <th>Stock</th>
                <th>Destacado</th>
                <th>Imagen1</th>
                <th>Imagen2</th>
                <th>Imagen3</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for gafa in gafas %}
            <tr>
                <td>{{ gafa.id }}</td>
                <td>{{ gafa.marca }}</td>
                <td>{{ gafa.modelo }}</td>
                <td>{{ gafa.descripcion }}</td>
                <td>{{ gafa.tipo }}</td>
                <td>{{ gafa.aro }}</td>
                <td>{{ gafa.puente }}</td>
                <td>{{ gafa.talla }}</td>
                <td>{{ gafa.varilla }}</td>
                <td>{{ gafa.colorMontura }}</td>
                <td>{{ gafa.colorLentes }}</td>
                <td>{{ gafa.materialMontura }}</td>
                <td>{{ gafa.tipoMontura }}</td>
                <td>{{ gafa.precio }}</td>
                <td>{{ gafa.iva }}</td>
                <td>{{ gafa.descuento }}</td>
                <td>{{ gafa.stock }}</td>
                <td>{{ gafa.destacado }}</td>
                <td>
                    {% if gafa.imageName %}
                    <img src=\"{{ vich_uploader_asset(gafa, 'imageFile') }}\" alt=\"{{ gafa.imageName }}\" width=\"80px\">
                    {% endif %}
                </td>
                <td>
                    {% if gafa.imageName2 %}
                    <img src=\"{{ vich_uploader_asset(gafa, 'imageFile2') }}\" alt=\"{{ gafa.imageName2 }}\" width=\"80px\">
                    {% endif %}
                </td>
                <td>
                    {% if gafa.imageName3 %}
                    <img src=\"{{ vich_uploader_asset(gafa, 'imageFile3') }}\" alt=\"{{ gafa.imageName3 }}\" width=\"80px\">
                    {% endif %}
                </td>
                <td>
                    <a href=\"{{ path('app_gafas_show', {'id': gafa.id}) }}\">show</a>
                    <a href=\"{{ path('app_gafas_edit', {'id': gafa.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"19\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_gafas_new') }}\">Create new</a>
{% endblock %}
", "gafas/index.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\templates\\gafas\\index.html.twig");
    }
}
