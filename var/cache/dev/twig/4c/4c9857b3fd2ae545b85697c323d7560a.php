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

/* @EasyAdmin/crud/field/code_editor.html.twig */
class __TwigTemplate_e80c3ba0a02c79970f8f9b18a9b8e8f3 extends Template
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
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/code_editor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/code_editor.html.twig"));

        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4) == "detail")) {
            // line 5
            yield "    ";
            yield CoreExtension::callMacro($macros["_self"], "macro_render_code_editor", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })())], 5, $context, $this->getSourceContext());
            yield "
";
        } else {
            // line 7
            yield "    ";
            $context["html_id"] = ("ea-code-editor-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "uniqueId", [], "any", false, false, false, 7));
            // line 8
            yield "    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "\">
        <i class=\"fa fa-code\"></i> ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.code_editor.view_code", [], "EasyAdminBundle"), "html", null, true);
            yield "
    </a>

    <div class=\"modal fade\" id=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 16, $this->source); })()), "label", [], "any", false, false, false, 16)), "html", null, true);
            yield "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close", [], "EasyAdminBundle"), "html", null, true);
            yield "\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 21
            yield CoreExtension::callMacro($macros["_self"], "macro_render_code_editor", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })())], 21, $context, $this->getSourceContext());
            yield "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 27
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 28
    public function macro_render_code_editor($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_code_editor"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_code_editor"));

            // line 29
            yield "    ";
            $context["configuredHeight"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 29, $this->source); })()), "customOptions", [], "any", false, false, false, 29), "get", ["height"], "method", false, false, false, 29);
            // line 30
            yield "    <textarea
            readonly
            style=\"";
            // line 32
            (((null === (isset($context["configuredHeight"]) || array_key_exists("configuredHeight", $context) ? $context["configuredHeight"] : (function () { throw new RuntimeError('Variable "configuredHeight" does not exist.', 32, $this->source); })()))) ? (yield "max-height: 500px;") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("max-height: unset; height: " . (isset($context["configuredHeight"]) || array_key_exists("configuredHeight", $context) ? $context["configuredHeight"] : (function () { throw new RuntimeError('Variable "configuredHeight" does not exist.', 32, $this->source); })())) . "px"), "html", null, true)));
            yield "\"
            data-ea-code-editor-field=\"true\"
            data-language=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 34, $this->source); })()), "customOptions", [], "any", false, false, false, 34), "get", ["language"], "method", false, false, false, 34), "html_attr");
            yield "\"
            data-tab-size=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 35, $this->source); })()), "customOptions", [], "any", false, false, false, 35), "get", ["tabSize"], "method", false, false, false, 35), "html_attr");
            yield "\"
            data-indent-with-tabs=\"";
            // line 36
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 36, $this->source); })()), "customOptions", [], "any", false, false, false, 36), "get", ["indentWithTabs"], "method", false, false, false, 36)) ? ("true") : ("false"));
            yield "\"
            data-show-line-numbers=\"";
            // line 37
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 37, $this->source); })()), "customOptions", [], "any", false, false, false, 37), "get", ["showLineNumbers"], "method", false, false, false, 37)) ? ("true") : ("false"));
            yield "\"
            data-number-of-rows=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 38, $this->source); })()), "customOptions", [], "any", false, false, false, 38), "get", ["numOfRows"], "method", false, false, false, 38), "html_attr");
            yield "\"
    >";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 40, $this->source); })()), "formattedValue", [], "any", false, false, false, 40));
            // line 41
            yield "</textarea>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/field/code_editor.html.twig";
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
        return array (  162 => 41,  160 => 40,  156 => 38,  152 => 37,  148 => 36,  144 => 35,  140 => 34,  135 => 32,  131 => 30,  128 => 29,  110 => 28,  98 => 27,  89 => 21,  82 => 17,  78 => 16,  71 => 12,  65 => 9,  60 => 8,  57 => 7,  51 => 5,  49 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% if ea.crud.currentAction == 'detail' %}
    {{ _self.render_code_editor(field) }}
{% else %}
    {% set html_id = 'ea-code-editor-' ~ field.uniqueId %}
    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#{{ html_id }}\">
        <i class=\"fa fa-code\"></i> {{ 'field.code_editor.view_code'|trans([], domain = 'EasyAdminBundle') }}
    </a>

    <div class=\"modal fade\" id=\"{{ html_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ field.label|trans }}</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ 'action.close'|trans([], domain = 'EasyAdminBundle') }}\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ _self.render_code_editor(field) }}
                </div>
            </div>
        </div>
    </div>
{% endif %}

{% macro render_code_editor(field) %}
    {% set configuredHeight = field.customOptions.get('height') %}
    <textarea
            readonly
            style=\"{{ configuredHeight is null ? 'max-height: 500px;' : 'max-height: unset; height: ' ~ configuredHeight ~ 'px' }}\"
            data-ea-code-editor-field=\"true\"
            data-language=\"{{ field.customOptions.get('language')|e('html_attr') }}\"
            data-tab-size=\"{{ field.customOptions.get('tabSize')|e('html_attr') }}\"
            data-indent-with-tabs=\"{{ field.customOptions.get('indentWithTabs') ? 'true' : 'false' }}\"
            data-show-line-numbers=\"{{ field.customOptions.get('showLineNumbers') ? 'true' : 'false' }}\"
            data-number-of-rows=\"{{ field.customOptions.get('numOfRows')|e('html_attr') }}\"
    >
        {{- field.formattedValue|escape -}}
    </textarea>
{% endmacro %}
", "@EasyAdmin/crud/field/code_editor.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\code_editor.html.twig");
    }
}
