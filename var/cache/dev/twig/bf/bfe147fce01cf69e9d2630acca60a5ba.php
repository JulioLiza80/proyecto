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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_6aa6502ddb0eb08d8c2e77744e43de90 extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return $this->loadTemplate(((array_key_exists("ea", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "templatePath", ["layout"], "method", false, false, false, 5)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        // line 6
        $context["__internal_a2f5e9bf49d731d610c1f49b03a52580"] = ((array_key_exists("ea", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield "page-login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield ((array_key_exists("page_title", $context)) ? ((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 9, $this->source); })())) : (((array_key_exists("ea", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 9, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 9)) : (""))));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 12
        yield "    ";
        if (((array_key_exists("favicon_path", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["favicon_path"]) || array_key_exists("favicon_path", $context) ? $context["favicon_path"] : (function () { throw new RuntimeError('Variable "favicon_path" does not exist.', 12, $this->source); })()), false)) : (false))) {
            // line 13
            yield "        <link rel=\"shortcut icon\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["favicon_path"]) || array_key_exists("favicon_path", $context) ? $context["favicon_path"] : (function () { throw new RuntimeError('Variable "favicon_path" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "\">
    ";
        } else {
            // line 15
            yield "        ";
            yield from $this->yieldParentBlock("head_favicon", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 19
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 20
        yield "    ";
        $context["page_title"] =         $this->unwrap()->renderBlock("page_title", $context, $blocks);
        // line 21
        yield "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["username_label"]) || array_key_exists("username_label", $context) ? $context["username_label"] : (function () { throw new RuntimeError('Variable "username_label" does not exist.', 21, $this->source); })()), [],         // line 6
(isset($context["__internal_a2f5e9bf49d731d610c1f49b03a52580"]) || array_key_exists("__internal_a2f5e9bf49d731d610c1f49b03a52580", $context) ? $context["__internal_a2f5e9bf49d731d610c1f49b03a52580"] : (function () { throw new RuntimeError('Variable "__internal_a2f5e9bf49d731d610c1f49b03a52580" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 22
        yield "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["password_label"]) || array_key_exists("password_label", $context) ? $context["password_label"] : (function () { throw new RuntimeError('Variable "password_label" does not exist.', 22, $this->source); })()), [],         // line 6
(isset($context["__internal_a2f5e9bf49d731d610c1f49b03a52580"]) || array_key_exists("__internal_a2f5e9bf49d731d610c1f49b03a52580", $context) ? $context["__internal_a2f5e9bf49d731d610c1f49b03a52580"] : (function () { throw new RuntimeError('Variable "__internal_a2f5e9bf49d731d610c1f49b03a52580" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 23
        yield "    ";
        $context["_forgot_password_label"] = ((array_key_exists("forgot_password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["forgot_password_label"]) || array_key_exists("forgot_password_label", $context) ? $context["forgot_password_label"] : (function () { throw new RuntimeError('Variable "forgot_password_label" does not exist.', 23, $this->source); })()), [],         // line 6
(isset($context["__internal_a2f5e9bf49d731d610c1f49b03a52580"]) || array_key_exists("__internal_a2f5e9bf49d731d610c1f49b03a52580", $context) ? $context["__internal_a2f5e9bf49d731d610c1f49b03a52580"] : (function () { throw new RuntimeError('Variable "__internal_a2f5e9bf49d731d610c1f49b03a52580" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", [], "EasyAdminBundle")));
        // line 24
        yield "    ";
        $context["_remember_me_label"] = ((array_key_exists("remember_me_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["remember_me_label"]) || array_key_exists("remember_me_label", $context) ? $context["remember_me_label"] : (function () { throw new RuntimeError('Variable "remember_me_label" does not exist.', 24, $this->source); })()), [],         // line 6
(isset($context["__internal_a2f5e9bf49d731d610c1f49b03a52580"]) || array_key_exists("__internal_a2f5e9bf49d731d610c1f49b03a52580", $context) ? $context["__internal_a2f5e9bf49d731d610c1f49b03a52580"] : (function () { throw new RuntimeError('Variable "__internal_a2f5e9bf49d731d610c1f49b03a52580" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.remember_me", [], "EasyAdminBundle")));
        // line 25
        yield "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["sign_in_label"]) || array_key_exists("sign_in_label", $context) ? $context["sign_in_label"] : (function () { throw new RuntimeError('Variable "sign_in_label" does not exist.', 25, $this->source); })()), [],         // line 6
(isset($context["__internal_a2f5e9bf49d731d610c1f49b03a52580"]) || array_key_exists("__internal_a2f5e9bf49d731d610c1f49b03a52580", $context) ? $context["__internal_a2f5e9bf49d731d610c1f49b03a52580"] : (function () { throw new RuntimeError('Variable "__internal_a2f5e9bf49d731d610c1f49b03a52580" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 26
        yield "
    ";
        // line 27
        yield from         $this->loadTemplate("@EasyAdmin/flash_messages.html.twig", "@EasyAdmin/page/login.html.twig", 27)->unwrap()->yield($context);
        // line 28
        yield "
    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                ";
        // line 32
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 45
        yield "            </div>
        </header>

        <section class=\"content\">

            ";
        // line 50
        if (((array_key_exists("error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 50, $this->source); })()), false)) : (false))) {
            // line 51
            yield "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    <i class=\"fas fa-times-circle mr-1\"></i>
                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageKey", [], "any", false, false, false, 53), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageData", [], "any", false, false, false, 53), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 56
        yield "
            <form method=\"post\" action=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 57, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                ";
        // line 58
        if (((array_key_exists("csrf_token_intention", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 58, $this->source); })()), false)) : (false))) {
            // line 59
            yield "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 59, $this->source); })())), "html", null, true);
            yield "\">
                ";
        }
        // line 61
        yield "
                <input type=\"hidden\" name=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path_parameter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target_path_parameter"]) || array_key_exists("target_path_parameter", $context) ? $context["target_path_parameter"] : (function () { throw new RuntimeError('Variable "target_path_parameter" does not exist.', 62, $this->source); })()), "_target_path")) : ("_target_path")), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target_path"]) || array_key_exists("target_path", $context) ? $context["target_path"] : (function () { throw new RuntimeError('Variable "target_path" does not exist.', 62, $this->source); })()), ((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 62, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 62))) : ("/")))) : (((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 62, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 62))) : ("/")))), "html", null, true);
        yield "\" />

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"username\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_username_label"]) || array_key_exists("_username_label", $context) ? $context["_username_label"] : (function () { throw new RuntimeError('Variable "_username_label" does not exist.', 65, $this->source); })()), "html", null, true);
        yield "</label>
                    <div class=\"form-widget\">
                        <input type=\"text\" id=\"username\" name=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("username_parameter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["username_parameter"]) || array_key_exists("username_parameter", $context) ? $context["username_parameter"] : (function () { throw new RuntimeError('Variable "username_parameter" does not exist.', 67, $this->source); })()), "_username")) : ("_username")), "html", null, true);
        yield "\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 67, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" required autofocus autocomplete=\"username\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"password\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_password_label"]) || array_key_exists("_password_label", $context) ? $context["_password_label"] : (function () { throw new RuntimeError('Variable "_password_label" does not exist.', 72, $this->source); })()), "html", null, true);
        yield "</label>
                    <div class=\"form-widget\">
                        <input type=\"password\" id=\"password\" name=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("password_parameter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["password_parameter"]) || array_key_exists("password_parameter", $context) ? $context["password_parameter"] : (function () { throw new RuntimeError('Variable "password_parameter" does not exist.', 74, $this->source); })()), "_password")) : ("_password")), "html", null, true);
        yield "\" class=\"form-control\" required autocomplete=\"current-password\">
                    </div>

                    ";
        // line 77
        if (((array_key_exists("forgot_password_enabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["forgot_password_enabled"]) || array_key_exists("forgot_password_enabled", $context) ? $context["forgot_password_enabled"] : (function () { throw new RuntimeError('Variable "forgot_password_enabled" does not exist.', 77, $this->source); })()), false)) : (false))) {
            // line 78
            yield "                        <div class=\"form-text\">
                            <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("forgot_password_path", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["forgot_password_path"]) || array_key_exists("forgot_password_path", $context) ? $context["forgot_password_path"] : (function () { throw new RuntimeError('Variable "forgot_password_path" does not exist.', 79, $this->source); })()), "#")) : ("#")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_forgot_password_label"]) || array_key_exists("_forgot_password_label", $context) ? $context["_forgot_password_label"] : (function () { throw new RuntimeError('Variable "_forgot_password_label" does not exist.', 79, $this->source); })()), "html", null, true);
            yield "</a>
                        </div>
                    ";
        }
        // line 82
        yield "                </div>

                ";
        // line 84
        if (((array_key_exists("remember_me_enabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["remember_me_enabled"]) || array_key_exists("remember_me_enabled", $context) ? $context["remember_me_enabled"] : (function () { throw new RuntimeError('Variable "remember_me_enabled" does not exist.', 84, $this->source); })()), false)) : (false))) {
            // line 85
            yield "                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("remember_me_parameter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["remember_me_parameter"]) || array_key_exists("remember_me_parameter", $context) ? $context["remember_me_parameter"] : (function () { throw new RuntimeError('Variable "remember_me_parameter" does not exist.', 86, $this->source); })()), "_remember_me")) : ("_remember_me")), "html", null, true);
            yield "\" ";
            yield ((((array_key_exists("remember_me_checked", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["remember_me_checked"]) || array_key_exists("remember_me_checked", $context) ? $context["remember_me_checked"] : (function () { throw new RuntimeError('Variable "remember_me_checked" does not exist.', 86, $this->source); })()), false)) : (false))) ? ("checked") : (""));
            yield ">
                        <label class=\"form-check-label\" for=\"remember_me\">
                            ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_remember_me_label"]) || array_key_exists("_remember_me_label", $context) ? $context["_remember_me_label"] : (function () { throw new RuntimeError('Variable "_remember_me_label" does not exist.', 88, $this->source); })()), "html", null, true);
            yield "
                        </label>
                    </div>
                ";
        }
        // line 92
        yield "
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_sign_in_label"]) || array_key_exists("_sign_in_label", $context) ? $context["_sign_in_label"] : (function () { throw new RuntimeError('Variable "_sign_in_label" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "</button>
            </form>

            <script src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.js", Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        yield "\"></script>
        </section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 32
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 33
        yield "                    ";
        if ((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 33, $this->source); })())) {
            // line 34
            yield "                        ";
            if (array_key_exists("ea", $context)) {
                // line 35
                yield "                            <a class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 35, $this->source); })())) > 14)) ? ("logo-long") : (""));
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 35, $this->source); })())), "html", null, true);
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 35, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 35));
                yield "\">
                                ";
                // line 36
                yield (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 36, $this->source); })());
                yield "
                            </a>
                        ";
            } else {
                // line 39
                yield "                            <div class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 39, $this->source); })())) > 14)) ? ("logo-long") : (""));
                yield "\">
                                ";
                // line 40
                yield (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 40, $this->source); })());
                yield "
                            </div>
                        ";
            }
            // line 43
            yield "                    ";
        }
        // line 44
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/page/login.html.twig";
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
        return array (  365 => 44,  362 => 43,  356 => 40,  351 => 39,  345 => 36,  336 => 35,  333 => 34,  330 => 33,  320 => 32,  305 => 96,  299 => 93,  296 => 92,  289 => 88,  282 => 86,  279 => 85,  277 => 84,  273 => 82,  265 => 79,  262 => 78,  260 => 77,  254 => 74,  249 => 72,  239 => 67,  234 => 65,  226 => 62,  223 => 61,  217 => 59,  215 => 58,  211 => 57,  208 => 56,  202 => 53,  198 => 51,  196 => 50,  189 => 45,  187 => 32,  181 => 28,  179 => 27,  176 => 26,  174 => 6,  172 => 25,  170 => 6,  168 => 24,  166 => 6,  164 => 23,  162 => 6,  160 => 22,  158 => 6,  156 => 21,  153 => 20,  143 => 19,  128 => 15,  122 => 13,  119 => 12,  109 => 11,  89 => 9,  69 => 8,  59 => 5,  57 => 6,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# This template checks for 'ea' variable existence because it can
   be used in a EasyAdmin Dashboard controller, where 'ea' is defined
   or from any other Symfony controller, where 'ea' is not defined #}
{% extends ea is defined ? ea.templatePath('layout') : '@EasyAdmin/page/login_minimal.html.twig' %}
{% trans_default_domain ea is defined ? ea.i18n.translationDomain : (translation_domain is defined ? translation_domain ?? 'messages') %}

{% block body_class 'page-login' %}
{% block page_title %}{{ page_title is defined ? page_title|raw : (ea is defined ? ea.dashboardTitle|raw : '') }}{% endblock %}

{% block head_favicon %}
    {% if favicon_path|default(false) %}
        <link rel=\"shortcut icon\" href=\"{{ favicon_path }}\">
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block wrapper_wrapper %}
    {% set page_title = block('page_title') %}
    {% set _username_label = username_label is defined ? username_label|trans : 'login_page.username'|trans({}, 'EasyAdminBundle') %}
    {% set _password_label = password_label is defined ? password_label|trans : 'login_page.password'|trans({}, 'EasyAdminBundle') %}
    {% set _forgot_password_label = forgot_password_label is defined ? forgot_password_label|trans : 'login_page.forgot_password'|trans({}, 'EasyAdminBundle') %}
    {% set _remember_me_label = remember_me_label is defined ? remember_me_label|trans : 'login_page.remember_me'|trans({}, 'EasyAdminBundle') %}
    {% set _sign_in_label = sign_in_label is defined ? sign_in_label|trans : 'login_page.sign_in'|trans({}, 'EasyAdminBundle') %}

    {% include '@EasyAdmin/flash_messages.html.twig' %}

    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                {% block header_logo %}
                    {% if page_title %}
                        {% if ea is defined %}
                            <a class=\"logo {{ page_title|length > 14 ? 'logo-long' }}\" title=\"{{ page_title|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                {{ page_title|raw }}
                            </a>
                        {% else %}
                            <div class=\"logo {{ page_title|length > 14 ? 'logo-long' }}\">
                                {{ page_title|raw }}
                            </div>
                        {% endif %}
                    {% endif %}
                {% endblock header_logo %}
            </div>
        </header>

        <section class=\"content\">

            {% if error|default(false) %}
                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    <i class=\"fas fa-times-circle mr-1\"></i>
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            <form method=\"post\" action=\"{{ action|default('') }}\">
                {% if csrf_token_intention|default(false) %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(csrf_token_intention) }}\">
                {% endif %}

                <input type=\"hidden\" name=\"{{ target_path_parameter|default('_target_path') }}\" value=\"{{ target_path|default(ea is defined ? path(ea.dashboardRouteName) : '/') }}\" />

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"username\">{{ _username_label }}</label>
                    <div class=\"form-widget\">
                        <input type=\"text\" id=\"username\" name=\"{{ username_parameter|default('_username') }}\" class=\"form-control\" value=\"{{ last_username|default('') }}\" required autofocus autocomplete=\"username\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"password\">{{ _password_label }}</label>
                    <div class=\"form-widget\">
                        <input type=\"password\" id=\"password\" name=\"{{ password_parameter|default('_password') }}\" class=\"form-control\" required autocomplete=\"current-password\">
                    </div>

                    {% if forgot_password_enabled|default(false) %}
                        <div class=\"form-text\">
                            <a href=\"{{ forgot_password_path|default('#') }}\">{{ _forgot_password_label }}</a>
                        </div>
                    {% endif %}
                </div>

                {% if remember_me_enabled|default(false) %}
                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"{{ remember_me_parameter|default('_remember_me') }}\" {{ remember_me_checked|default(false) ? 'checked' }}>
                        <label class=\"form-check-label\" for=\"remember_me\">
                            {{ _remember_me_label }}
                        </label>
                    </div>
                {% endif %}

                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">{{ _sign_in_label }}</button>
            </form>

            <script src=\"{{ asset('login.js', constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Asset\\\\AssetPackage::PACKAGE_NAME')) }}\"></script>
        </section>
    </div>
{% endblock %}
", "@EasyAdmin/page/login.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\login.html.twig");
    }
}
