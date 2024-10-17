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

/* campanias/index.html.twig */
class __TwigTemplate_9236f22cdeedc2779465dcac11e1a5d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campanias/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campanias/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "campanias/index.html.twig", 1);
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

        yield "Campanias index";
        
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
        yield "    <h1>Campanias index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagen1</th>
                <th>Imagen2</th>
                <th>Imagen3</th>
                <th>Imagen4</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campanias"]) || array_key_exists("campanias", $context) ? $context["campanias"] : (function () { throw new RuntimeError('Variable "campanias" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["campania"]) {
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "imageName", [], "any", false, false, false, 24)) {
                // line 25
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["campania"], "imageFile"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "imageName", [], "any", false, false, false, 25), "html", null, true);
                yield "\" width=\"80px\">
                    ";
            }
            // line 27
            yield "                </td>
                <td>
                    ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "imageName2", [], "any", false, false, false, 29)) {
                // line 30
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["campania"], "imageFile2"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "imageName2", [], "any", false, false, false, 30), "html", null, true);
                yield "\" width=\"80px\">
                    ";
            }
            // line 32
            yield "                </td>
                <td>
                    ";
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "imageName3", [], "any", false, false, false, 34)) {
                // line 35
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["campania"], "imageFile3"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "imageName3", [], "any", false, false, false, 35), "html", null, true);
                yield "\" width=\"80px\">
                    ";
            }
            // line 37
            yield "                </td>
                <td>
                    ";
            // line 39
            if (CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "imageName4", [], "any", false, false, false, 39)) {
                // line 40
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["campania"], "imageFile4"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "imageName4", [], "any", false, false, false, 40), "html", null, true);
                yield "\" width=\"80px\">
                    ";
            }
            // line 42
            yield "                </td>
                <td>
                    <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campanias_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campanias_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["campania"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            yield "            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campania'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "        </tbody>
    </table>

    

    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campanias_new");
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
        return "campanias/index.html.twig";
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
        return array (  208 => 58,  201 => 53,  192 => 49,  183 => 45,  179 => 44,  175 => 42,  167 => 40,  165 => 39,  161 => 37,  153 => 35,  151 => 34,  147 => 32,  139 => 30,  137 => 29,  133 => 27,  125 => 25,  123 => 24,  118 => 22,  115 => 21,  110 => 20,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Campanias index{% endblock %}

{% block body %}
    <h1>Campanias index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagen1</th>
                <th>Imagen2</th>
                <th>Imagen3</th>
                <th>Imagen4</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for campania in campanias %}
            <tr>
                <td>{{ campania.id }}</td>
                <td>
                    {% if campania.imageName %}
                    <img src=\"{{ vich_uploader_asset(campania, 'imageFile') }}\" alt=\"{{ campania.imageName }}\" width=\"80px\">
                    {% endif %}
                </td>
                <td>
                    {% if campania.imageName2 %}
                    <img src=\"{{ vich_uploader_asset(campania, 'imageFile2') }}\" alt=\"{{ campania.imageName2 }}\" width=\"80px\">
                    {% endif %}
                </td>
                <td>
                    {% if campania.imageName3 %}
                    <img src=\"{{ vich_uploader_asset(campania, 'imageFile3') }}\" alt=\"{{ campania.imageName3 }}\" width=\"80px\">
                    {% endif %}
                </td>
                <td>
                    {% if campania.imageName4 %}
                    <img src=\"{{ vich_uploader_asset(campania, 'imageFile4') }}\" alt=\"{{ campania.imageName4 }}\" width=\"80px\">
                    {% endif %}
                </td>
                <td>
                    <a href=\"{{ path('app_campanias_show', {'id': campania.id}) }}\">show</a>
                    <a href=\"{{ path('app_campanias_edit', {'id': campania.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    

    <a href=\"{{ path('app_campanias_new') }}\">Create new</a>
{% endblock %}
", "campanias/index.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\templates\\campanias\\index.html.twig");
    }
}
