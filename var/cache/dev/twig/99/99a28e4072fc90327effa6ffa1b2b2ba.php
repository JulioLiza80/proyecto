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

/* campanias/show.html.twig */
class __TwigTemplate_88c9a4e1850de570004631a7e21ed284 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campanias/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campanias/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "campanias/show.html.twig", 1);
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

        yield "Campanias";
        
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
        yield "    <h1>Campanias</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Imagen1</th>
                <td> 
                    <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 17, $this->source); })()), "imageFile"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 17, $this->source); })()), "imageName", [], "any", false, false, false, 17), "html", null, true);
        yield "\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen2</th>
                <td> 
                    <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 23, $this->source); })()), "imageFile2"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 23, $this->source); })()), "imageName2", [], "any", false, false, false, 23), "html", null, true);
        yield "\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen3</th>
                <td> 
                    <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 29, $this->source); })()), "imageFile3"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 29, $this->source); })()), "imageName3", [], "any", false, false, false, 29), "html", null, true);
        yield "\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen4</th>
                <td> 
                    <img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 35, $this->source); })()), "imageFile4"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 35, $this->source); })()), "imageName4", [], "any", false, false, false, 35), "html", null, true);
        yield "\" width=\"80px\">
                </td>
            </tr>
            
        </tbody>
    </table>

    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campanias_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campanias_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["campania"]) || array_key_exists("campania", $context) ? $context["campania"] : (function () { throw new RuntimeError('Variable "campania" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "campanias/_delete_form.html.twig");
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
        return "campanias/show.html.twig";
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
        return array (  165 => 46,  160 => 44,  155 => 42,  143 => 35,  132 => 29,  121 => 23,  110 => 17,  102 => 12,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Campanias{% endblock %}

{% block body %}
    <h1>Campanias</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ campania.id }}</td>
            </tr>
            <tr>
                <th>Imagen1</th>
                <td> 
                    <img src=\"{{ vich_uploader_asset(campania, 'imageFile') }}\" alt=\"{{ campania.imageName }}\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen2</th>
                <td> 
                    <img src=\"{{ vich_uploader_asset(campania, 'imageFile2') }}\" alt=\"{{ campania.imageName2 }}\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen3</th>
                <td> 
                    <img src=\"{{ vich_uploader_asset(campania, 'imageFile3') }}\" alt=\"{{ campania.imageName3 }}\" width=\"80px\">
                </td>
            </tr>
            <tr>
                <th>Imagen4</th>
                <td> 
                    <img src=\"{{ vich_uploader_asset(campania, 'imageFile4') }}\" alt=\"{{ campania.imageName4 }}\" width=\"80px\">
                </td>
            </tr>
            
        </tbody>
    </table>

    <a href=\"{{ path('app_campanias_index') }}\">back to list</a>

    <a href=\"{{ path('app_campanias_edit', {'id': campania.id}) }}\">edit</a>

    {{ include('campanias/_delete_form.html.twig') }}
{% endblock %}
", "campanias/show.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\templates\\campanias\\show.html.twig");
    }
}
