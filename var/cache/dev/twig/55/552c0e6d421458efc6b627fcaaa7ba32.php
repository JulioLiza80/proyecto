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

/* carrito.html.twig */
class __TwigTemplate_88b0b423b9b2b9305481beddec542e14 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrito.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrito.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 6
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 15
        yield "      
   
</head>
<body>
    ";
        // line 19
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 134
        yield "
</html>









   
     
    





";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"               integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        <script defer src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js\"></script>
        <script src=\"https://www.paypal.com/sdk/js?client-id=";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idcliente"]) || array_key_exists("idcliente", $context) ? $context["idcliente"] : (function () { throw new RuntimeError('Variable "idcliente" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "&currency=EUR&components=buttons&enable-funding=venmo,paylater,card\" data-sdk-integration-source=\"developer-studio\"></script>
        <script defer src=\"/js/paypal.js\"></script>
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 15
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 14
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        yield "  
     ";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "comun/header.html.twig");
        yield "
    <section class=\"h-100 mt-5\">
        <div class=\"container py-5 mt-5\">
            <div class=\"row d-flex justify-content-center my-4\">
                <div class=\"col-md-8 border-0\">
                    <div class=\"card mb-4 border-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"h5\">Carrito Compra</th>
                                        <th scope=\"col\">ID</th>
                                        <th scope=\"col\">Unidades</th>
                                        <th scope=\"col\">Precio</th>
                                        <th scope=\"col\">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 39
        $context["total"] = 0;
        // line 40
        yield "                                    ";
        $context["contador"] = 0;
        // line 41
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "session", [], "any", false, false, false, 41), "get", ["carrito"], "method", false, false, false, 41));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 42
            yield "
                                    <tr id=\"\">
                                        <th scope=\"row\">
                                            <div class=\"d-flex align-items-center\">
                                                <img src=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "array", false, false, false, 46), "imageFile"), "html", null, true);
            yield "\"
                                                    alt=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "array", false, false, false, 47), "imageName", [], "any", false, false, false, 47), "html", null, true);
            yield "\" width=\"80px\"
                                                    class=\"img-fluid rounded-3\">
                                                <div class=\"flex-column ms-4\">
                                                    <p class=\"mb-2\" id=\"nombre_producto\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "array", false, false, false, 50), "marca", [], "any", false, false, false, 50), "html", null, true);
            yield "
                                                    </p>
                                                </div>
                                            </div>
                                        </th>
                                        <td class=\"align-middle\">
                                            <p class=\"mb-0\" id=\"id_producto\" style=\"font-weight: 500\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 57
$context["producto"], "producto", [], "array", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
            yield "</p>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"d-flex flex-row\">
                                                <input id=\"form1\" min=\"1\" max=\"20\" name=\"quantity\"
                                                    value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "cantidad", [], "array", false, false, false, 62), "html", null, true);
            yield "\" type=\"number\" readonly
                                                    class=\"form-control form-control-sm\" style=\"width: 50px\" />
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <p class=\"mb-0\" id=\"precio_producto\" style=\"font-weight: 500\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 68
$context["producto"], "producto", [], "array", false, false, false, 68), "precio", [], "any", false, false, false, 68), "html", null, true);
            yield "</p>
                                        </td>
                                        <td class=\"align-middle\">
                                            <a class=\"prueba\"
                                                href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carrito_eliminarProducto", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "array", false, false, false, 72), "id", [], "any", false, false, false, 72), "cat" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "array", false, false, false, 72), "categoria", [], "any", false, false, false, 72)]), "html", null, true);
            yield " \">
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"recargar\" data-id=";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 73, $this->source); })()), "html", null, true);
            yield ">
                                                    Eliminar
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    ";
            // line 79
            $context["contador"] = ((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 79, $this->source); })()) + 1);
            // line 80
            yield "                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            yield "                                    <tr>
                                        <td colspan=\"9\" class=\"text-center py-4 fst-italic\">No hay productos en el
                                            carrito</td>
                                    </tr>
                                   
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                                    ";
        $context["total"] = 0;
        // line 88
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "session", [], "any", false, false, false, 88), "get", ["carrito"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 89
            yield "                                    ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 89, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "producto", [], "array", false, false, false, 89), "precio", [], "any", false, false, false, 89));
            // line 90
            yield "                                    
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "
                                    <tr>
                                        <td colspan=\"3\">
                                             <input id=\"total\" type='hidden' value=";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 95, $this->source); })()), "html", null, true);
        yield " />
                                            <p class=\"h3\">Total</p>
                                        </td>
                                        <td>
                                            ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 99, $this->source); })()), 2, ".", ","), "html", null, true);
        yield "
                                        </td>
                                        ";
        // line 101
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 101, $this->source); })()) > 0)) {
            yield " 
                                        <td>
                                         <div id=\"paypal-button-container\">
                                            <form id=\"paypal-form\" action=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compra");
            yield "\" method=\"post\">
                                                <input type=\"hidden\" name=\"detalles\" id=\"detalles-input\">
                                                <input type=\"hidden\" name=\"total\" id=\"total-input\" value=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 106, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "\">
                                            </form>
                                         </div>
                                        </td>
                                        ";
        }
        // line 111
        yield "                                    </tr>

                                </tbody>
                            </table>
                               
                        </div>
                      
                      </div>
                </div>

            </div>
              
        </div>
        </div>
        </div>
        </div>
     
    </section>
    
  
</body>
    
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
        return "carrito.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  356 => 111,  348 => 106,  343 => 104,  337 => 101,  332 => 99,  325 => 95,  320 => 92,  313 => 90,  310 => 89,  305 => 88,  302 => 87,  291 => 81,  286 => 80,  284 => 79,  275 => 73,  271 => 72,  264 => 68,  263 => 67,  255 => 62,  247 => 57,  246 => 56,  237 => 50,  231 => 47,  227 => 46,  221 => 42,  215 => 41,  212 => 40,  210 => 39,  189 => 21,  186 => 20,  176 => 19,  156 => 14,  145 => 15,  143 => 14,  138 => 12,  134 => 10,  124 => 9,  112 => 7,  102 => 6,  72 => 134,  70 => 19,  64 => 15,  61 => 9,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    {% endblock %}
    {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"               integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        <script defer src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js\"></script>
        <script src=\"https://www.paypal.com/sdk/js?client-id={{idcliente}}&currency=EUR&components=buttons&enable-funding=venmo,paylater,card\" data-sdk-integration-source=\"developer-studio\"></script>
        <script defer src=\"/js/paypal.js\"></script>
        {% block importmap %}{{ importmap('app') }}{% endblock %}
    {% endblock %}      
   
</head>
<body>
    {% block body %}
  
     {{include('comun/header.html.twig')}}
    <section class=\"h-100 mt-5\">
        <div class=\"container py-5 mt-5\">
            <div class=\"row d-flex justify-content-center my-4\">
                <div class=\"col-md-8 border-0\">
                    <div class=\"card mb-4 border-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"h5\">Carrito Compra</th>
                                        <th scope=\"col\">ID</th>
                                        <th scope=\"col\">Unidades</th>
                                        <th scope=\"col\">Precio</th>
                                        <th scope=\"col\">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% set total = 0 %}
                                    {% set contador= 0%}
                                    {% for producto in app.session.get('carrito') %}

                                    <tr id=\"\">
                                        <th scope=\"row\">
                                            <div class=\"d-flex align-items-center\">
                                                <img src=\"{{ vich_uploader_asset(producto['producto'], 'imageFile') }}\"
                                                    alt=\"{{ producto['producto'].imageName }}\" width=\"80px\"
                                                    class=\"img-fluid rounded-3\">
                                                <div class=\"flex-column ms-4\">
                                                    <p class=\"mb-2\" id=\"nombre_producto\">{{producto['producto'].marca}}
                                                    </p>
                                                </div>
                                            </div>
                                        </th>
                                        <td class=\"align-middle\">
                                            <p class=\"mb-0\" id=\"id_producto\" style=\"font-weight: 500\">{{
                                                producto['producto'].id }}</p>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"d-flex flex-row\">
                                                <input id=\"form1\" min=\"1\" max=\"20\" name=\"quantity\"
                                                    value=\"{{ producto['cantidad'] }}\" type=\"number\" readonly
                                                    class=\"form-control form-control-sm\" style=\"width: 50px\" />
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <p class=\"mb-0\" id=\"precio_producto\" style=\"font-weight: 500\">{{
                                                producto['producto'].precio }}</p>
                                        </td>
                                        <td class=\"align-middle\">
                                            <a class=\"prueba\"
                                                href=\"{{ path('app_carrito_eliminarProducto',{'id':producto['producto'].id,'cat':producto['producto'].categoria}) }} \">
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"recargar\" data-id={{contador}}>
                                                    Eliminar
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    {% set contador = contador + 1%}
                                    {% else %}
                                    <tr>
                                        <td colspan=\"9\" class=\"text-center py-4 fst-italic\">No hay productos en el
                                            carrito</td>
                                    </tr>
                                   
                                    {% endfor %}
                                    {% set total = 0%}
                                    {% for producto in app.session.get('carrito') %}
                                    {% set total = total+producto['producto'].precio%}
                                    
                                    {% endfor %}

                                    <tr>
                                        <td colspan=\"3\">
                                             <input id=\"total\" type='hidden' value={{total}} />
                                            <p class=\"h3\">Total</p>
                                        </td>
                                        <td>
                                            {{total|number_format(2, '.', ',') }}
                                        </td>
                                        {% if total >0 %} 
                                        <td>
                                         <div id=\"paypal-button-container\">
                                            <form id=\"paypal-form\" action=\"{{path('app_compra')}}\" method=\"post\">
                                                <input type=\"hidden\" name=\"detalles\" id=\"detalles-input\">
                                                <input type=\"hidden\" name=\"total\" id=\"total-input\" value=\"{{total|number_format(2, '.', ',')}}\">
                                            </form>
                                         </div>
                                        </td>
                                        {% endif %}
                                    </tr>

                                </tbody>
                            </table>
                               
                        </div>
                      
                      </div>
                </div>

            </div>
              
        </div>
        </div>
        </div>
        </div>
     
    </section>
    
  
</body>
    
    {% endblock %}

</html>









   
     
    





", "carrito.html.twig", "C:\\Users\\stark\\Desktop\\optica\\kraken\\proyecto\\templates\\carrito.html.twig");
    }
}
