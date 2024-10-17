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

/* comun/header.html.twig */
class __TwigTemplate_4995318066494cf6c75d7494561a4557 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comun/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comun/header.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "
<header data-bs-theme=\"dark\">
  
  <div class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
      <a href=\"#\" class=\"navbar-brand\">
        <strong>Optica Nova</strong>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarHeader\" aria-controls=\"navbarHeader\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarHeader\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            yield "            <li class=\"nav-item\">
                <a href=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-link active\">logout</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">Contacto</a>
           </li>
           
           ";
            // line 25
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 26
                yield "            <li class=\"nav-item\">
                <a href=\"";
                // line 27
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield "\" class=\"nav-link\">Editar Usuarios</a>
           </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">Editar Categorias</a>
           </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">Editar Productos</a>
           </li>
           ";
            }
            // line 36
            yield "           <li class=\"nav-item\">
                <h2 class=\"nav-link\">Bienvenido ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "nombre", [], "any", false, false, false, 37), "html", null, true);
            yield "</h2>
           </li>
        </ul>
        <a href=\"#checkout.php\" class=\"btn btn-primary\">Carrito
          <span id=\"nun_cart\" class=\"badge bg-secondary\"></span>
        </a>
         ";
        } else {
            // line 44
            yield "        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#loginmodal\" data-bs-whatever=\"@mdo\">Login</button>
        <button type=\"button\" class=\"btn btn-primary\"><a style=\"color:white; text-decoration: none;\" href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Registro</a></button>
        <button type=\"button\" class=\"btn btn-primary\"><a style=\"color:white; text-decoration: none;\" href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
            yield "\">He olvidado mi contraseña</a></button>
        ";
        }
        // line 48
        yield "          
      </div>
    </div>
  </div>
</header>



<div class=\"modal fade\" id=\"loginmodal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">       
          <form class=\"mb-3 mt-md-2\" action=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
              <h2 class=\"fw-bold mb-4\">Inicia Sesión</h2>
              <div class=\"mb-3\">
                <label for=\"username\" class=\"form-label\">Email:</label>
                <input type=\"email\" id=\"username\" name=\"_username\"
                  class=\"form-control\"
                  id=\"emailLogin\"
                  placeholder=\"name@example.com\"
                  >
              </div>
              <div class=\"mb-3\">
                    <label for=\"password\" class=\"form-label\">Password:</label>
                    <input type=\"password\" name=\"_password\" 
                        class=\"form-control\"
                        id=\"passwordLogin\"
                        placeholder=\"*******\">
              </div>

              ";
        // line 78
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "query", [], "any", false, false, false, 78), "get", ["error"], "method", false, false, false, 78))) {
            // line 79
            yield "                <div class=\"alert alert-danger\">El usuario, contraseña o ambos no son correctos.</div>
              ";
        }
        // line 80
        yield "                
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"> 
              <div class=\"d-grid\">
              <button type=\"submit\" class=\"btn btn-outline-dark mt-4\">Login</button>
              </div> 


          </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

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
        return "comun/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  188 => 81,  185 => 80,  181 => 79,  179 => 78,  158 => 60,  144 => 48,  139 => 46,  135 => 45,  132 => 44,  122 => 37,  119 => 36,  107 => 27,  104 => 26,  102 => 25,  93 => 19,  90 => 18,  88 => 17,  72 => 3,  52 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% block body%}

<header data-bs-theme=\"dark\">
  
  <div class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
      <a href=\"#\" class=\"navbar-brand\">
        <strong>Optica Nova</strong>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarHeader\" aria-controls=\"navbarHeader\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarHeader\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li class=\"nav-item\">
                <a href=\"{{ path('app_logout') }}\" class=\"nav-link active\">logout</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">Contacto</a>
           </li>
           
           {% if is_granted('ROLE_ADMIN') %}
            <li class=\"nav-item\">
                <a href=\"{{ path('app_user_index') }}\" class=\"nav-link\">Editar Usuarios</a>
           </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">Editar Categorias</a>
           </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">Editar Productos</a>
           </li>
           {% endif%}
           <li class=\"nav-item\">
                <h2 class=\"nav-link\">Bienvenido {{ app.user.nombre }}</h2>
           </li>
        </ul>
        <a href=\"#checkout.php\" class=\"btn btn-primary\">Carrito
          <span id=\"nun_cart\" class=\"badge bg-secondary\"></span>
        </a>
         {% else %}
        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#loginmodal\" data-bs-whatever=\"@mdo\">Login</button>
        <button type=\"button\" class=\"btn btn-primary\"><a style=\"color:white; text-decoration: none;\" href=\"{{ path('app_register') }}\">Registro</a></button>
        <button type=\"button\" class=\"btn btn-primary\"><a style=\"color:white; text-decoration: none;\" href=\"{{ path('app_forgot_password_request') }}\">He olvidado mi contraseña</a></button>
        {% endif%}
          
      </div>
    </div>
  </div>
</header>



<div class=\"modal fade\" id=\"loginmodal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">       
          <form class=\"mb-3 mt-md-2\" action=\"{{ path('app_login') }}\" method=\"post\">
              <h2 class=\"fw-bold mb-4\">Inicia Sesión</h2>
              <div class=\"mb-3\">
                <label for=\"username\" class=\"form-label\">Email:</label>
                <input type=\"email\" id=\"username\" name=\"_username\"
                  class=\"form-control\"
                  id=\"emailLogin\"
                  placeholder=\"name@example.com\"
                  >
              </div>
              <div class=\"mb-3\">
                    <label for=\"password\" class=\"form-label\">Password:</label>
                    <input type=\"password\" name=\"_password\" 
                        class=\"form-control\"
                        id=\"passwordLogin\"
                        placeholder=\"*******\">
              </div>

              {% if app.request.query.get('error') is not null %}
                <div class=\"alert alert-danger\">El usuario, contraseña o ambos no son correctos.</div>
              {% endif %}                
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"> 
              <div class=\"d-grid\">
              <button type=\"submit\" class=\"btn btn-outline-dark mt-4\">Login</button>
              </div> 


          </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

{%endblock%}", "comun/header.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\templates\\comun\\header.html.twig");
    }
}
