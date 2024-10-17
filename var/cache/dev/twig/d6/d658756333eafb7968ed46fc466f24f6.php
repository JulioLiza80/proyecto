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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_e60875bd5d390ca9aba21c00cd068ff7 extends Template
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
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/menu.html.twig"));

        // line 2
        yield "<nav id=\"main-menu\">
    ";
        // line 3
        yield from $this->unwrap()->yieldBlock('main_menu_before', $context, $blocks);
        // line 4
        yield "
    <ul class=\"menu\">
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('main_menu', $context, $blocks);
        // line 33
        yield "    </ul>

    ";
        // line 35
        yield from $this->unwrap()->yieldBlock('main_menu_after', $context, $blocks);
        // line 36
        yield "</nav>

";
        // line 43
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 3
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu"));

        // line 7
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 7, $this->source); })()), "mainMenu", [], "any", false, false, false, 7), "items", [], "any", false, false, false, 7));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 8
            yield "                ";
            yield from $this->unwrap()->yieldBlock('menu_item', $context, $blocks);
            // line 31
            yield "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_item"));

        // line 9
        yield "                    ";
        $context["is_submenu_item_with_no_items"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9) == Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto::TYPE_SUBMENU")) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 9, $this->source); })()), "hasSubItems", [], "any", false, false, false, 9));
        // line 10
        yield "                    ";
        if ((isset($context["is_submenu_item_with_no_items"]) || array_key_exists("is_submenu_item_with_no_items", $context) ? $context["is_submenu_item_with_no_items"] : (function () { throw new RuntimeError('Variable "is_submenu_item_with_no_items" does not exist.', 10, $this->source); })())) {
            // line 11
            yield "                        ";
            // line 13
            yield "                    ";
        } else {
            // line 14
            yield "                        <li class=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 14, $this->source); })()), "isMenuSection", [], "any", false, false, false, 14)) ? ("menu-header") : ("menu-item"));
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 14, $this->source); })()), "hasSubItems", [], "any", false, false, false, 14)) ? ("has-submenu") : (""));
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 14, $this->source); })()), "isSelected", [], "any", false, false, false, 14)) ? ("active") : (""));
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 14, $this->source); })()), "isExpanded", [], "any", false, false, false, 14)) ? ("expanded") : (""));
            yield "\">
                            ";
            // line 15
            yield CoreExtension::callMacro($macros["_self"], "macro_render_menu_item", [(isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 15, $this->source); })())], 15, $context, $this->getSourceContext());
            yield "

                            ";
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 17, $this->source); })()), "hasSubItems", [], "any", false, false, false, 17)) {
                // line 18
                yield "                                <ul class=\"submenu\">
                                    ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 19, $this->source); })()), "subItems", [], "any", false, false, false, 19));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                    // line 20
                    yield "                                        ";
                    yield from $this->unwrap()->yieldBlock('menu_subitem', $context, $blocks);
                    // line 25
                    yield "                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "                                </ul>
                            ";
            }
            // line 28
            yield "                        </li>
                    ";
        }
        // line 30
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 20
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 21
        yield "                                            <li class=\"";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuSubItem"]) || array_key_exists("menuSubItem", $context) ? $context["menuSubItem"] : (function () { throw new RuntimeError('Variable "menuSubItem" does not exist.', 21, $this->source); })()), "isMenuSection", [], "any", false, false, false, 21)) ? ("menu-header") : ("menu-item"));
        yield " ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuSubItem"]) || array_key_exists("menuSubItem", $context) ? $context["menuSubItem"] : (function () { throw new RuntimeError('Variable "menuSubItem" does not exist.', 21, $this->source); })()), "isSelected", [], "any", false, false, false, 21)) ? ("active") : (""));
        yield "\">
                                                ";
        // line 22
        yield CoreExtension::callMacro($macros["_self"], "macro_render_menu_item", [(isset($context["menuSubItem"]) || array_key_exists("menuSubItem", $context) ? $context["menuSubItem"] : (function () { throw new RuntimeError('Variable "menuSubItem" does not exist.', 22, $this->source); })())], 22, $context, $this->getSourceContext());
        yield "
                                            </li>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 35
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 38
    public function macro_render_html_attributes($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_html_attributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_html_attributes"));

            // line 39
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                // line 40
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_value"], "html_attr");
                yield "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute_name'], $context['attribute_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 45
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "isMenuSection", [], "any", false, false, false, 45)) {
                // line 46
                yield "        <span class=\"menu-header-contents\" ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_html_attributes", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })())], 46, $context, $this->getSourceContext());
                yield ">
            ";
                // line 47
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "icon", [], "any", false, false, false, 47))) {
                    yield "<i class=\"menu-icon fa-fw ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "icon", [], "any", false, false, false, 47), "html", null, true);
                    yield "\"></i>";
                }
                // line 48
                yield "            <span class=\"menu-item-label position-relative ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "cssClass", [], "any", false, false, false, 48), "html", null, true);
                yield "\">
                ";
                // line 49
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "label", [], "any", false, false, false, 49));
                yield "
            </span>
            ";
                // line 51
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "badge", [], "any", false, false, false, 51)) {
                    // line 52
                    yield "                <span class=\"menu-item-badge rounded-pill badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "badge", [], "any", false, false, false, 52), "cssClass", [], "any", false, false, false, 52), "html", null, true);
                    yield "\" ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_html_attributes", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "badge", [], "any", false, false, false, 52)], 52, $context, $this->getSourceContext());
                    yield " style=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "badge", [], "any", false, false, false, 52), "htmlStyle", [], "any", false, false, false, 52), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "badge", [], "any", false, false, false, 52), "content", [], "any", false, false, false, 52), "html", null, true);
                    yield "</span>
            ";
                }
                // line 54
                yield "        </span>
    ";
            } else {
                // line 56
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "linkUrl", [], "any", false, false, false, 56), "html", null, true);
                yield "\" class=\"menu-item-contents ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "hasSubItems", [], "any", false, false, false, 56)) ? ("submenu-toggle") : (""));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "cssClass", [], "any", false, false, false, 56), "html", null, true);
                yield "\" target=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "linkTarget", [], "any", false, false, false, 56), "html", null, true);
                yield "\" rel=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "linkRel", [], "any", false, false, false, 56), "html", null, true);
                yield "\" referrerpolicy=\"origin-when-cross-origin\" ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_html_attributes", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })())], 56, $context, $this->getSourceContext());
                yield ">
            ";
                // line 57
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "icon", [], "any", false, false, false, 57))) {
                    yield "<i class=\"menu-icon fa-fw ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "icon", [], "any", false, false, false, 57), "html", null, true);
                    yield "\"></i>";
                }
                // line 58
                yield "            <span class=\"menu-item-label position-relative\">
                ";
                // line 59
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "label", [], "any", false, false, false, 59));
                yield "
            </span>
            ";
                // line 61
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })()), "hasSubItems", [], "any", false, false, false, 61)) {
                    yield "<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>";
                }
                // line 62
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "badge", [], "any", false, false, false, 62)) {
                    // line 63
                    yield "                <span class=\"menu-item-badge rounded-pill badge ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "badge", [], "any", false, false, false, 63), "cssClass", [], "any", false, false, false, 63), "html", null, true);
                    yield "\" ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_html_attributes", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "badge", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
                    yield " style=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "badge", [], "any", false, false, false, 63), "htmlStyle", [], "any", false, false, false, 63), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "badge", [], "any", false, false, false, 63), "content", [], "any", false, false, false, 63), "html", null, true);
                    yield "</span>
            ";
                }
                // line 65
                yield "        </a>
    ";
            }
            
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
        return "@EasyAdmin/menu.html.twig";
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
        return array (  459 => 65,  447 => 63,  444 => 62,  440 => 61,  435 => 59,  432 => 58,  426 => 57,  411 => 56,  407 => 54,  395 => 52,  393 => 51,  388 => 49,  383 => 48,  377 => 47,  372 => 46,  369 => 45,  351 => 44,  330 => 40,  325 => 39,  307 => 38,  288 => 35,  274 => 22,  267 => 21,  257 => 20,  246 => 30,  242 => 28,  238 => 26,  224 => 25,  221 => 20,  204 => 19,  201 => 18,  199 => 17,  194 => 15,  183 => 14,  180 => 13,  178 => 11,  175 => 10,  172 => 9,  162 => 8,  151 => 32,  137 => 31,  134 => 8,  116 => 7,  106 => 6,  87 => 3,  75 => 43,  71 => 36,  69 => 35,  65 => 33,  63 => 6,  59 => 4,  57 => 3,  54 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
<nav id=\"main-menu\">
    {% block main_menu_before %}{% endblock %}

    <ul class=\"menu\">
        {% block main_menu %}
            {% for menuItem in ea.mainMenu.items %}
                {% block menu_item %}
                    {% set is_submenu_item_with_no_items = menuItem.type == constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Dto\\\\MenuItemDto::TYPE_SUBMENU') and not menuItem.hasSubItems %}
                    {% if is_submenu_item_with_no_items %}
                        {# this can happen when submenu items define permissions and the current user can't see any
                           of the subitems; instead of only displaying the label of the empty submenu, don't display anything #}
                    {% else %}
                        <li class=\"{{ menuItem.isMenuSection ? 'menu-header' : 'menu-item' }} {{ menuItem.hasSubItems ? 'has-submenu' }} {{ menuItem.isSelected ? 'active' }} {{ menuItem.isExpanded ? 'expanded' }}\">
                            {{ _self.render_menu_item(menuItem) }}

                            {% if menuItem.hasSubItems %}
                                <ul class=\"submenu\">
                                    {% for menuSubItem in menuItem.subItems %}
                                        {% block menu_subitem %}
                                            <li class=\"{{ menuSubItem.isMenuSection ? 'menu-header' : 'menu-item' }} {{ menuSubItem.isSelected ? 'active' }}\">
                                                {{ _self.render_menu_item(menuSubItem) }}
                                            </li>
                                        {% endblock menu_subitem %}
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </li>
                    {% endif %}
                {% endblock menu_item %}
            {% endfor %}
        {% endblock main_menu %}
    </ul>

    {% block main_menu_after %}{% endblock %}
</nav>

{% macro render_html_attributes(item) %}
    {% for attribute_name, attribute_value in item.htmlAttributes %}
        {{ attribute_name }}=\"{{ attribute_value|e('html_attr') }}\"
    {% endfor %}
{% endmacro %}

{% macro render_menu_item(item) %}
    {% if item.isMenuSection %}
        <span class=\"menu-header-contents\" {{ _self.render_html_attributes(item) }}>
            {% if item.icon is not empty %}<i class=\"menu-icon fa-fw {{ item.icon }}\"></i>{% endif %}
            <span class=\"menu-item-label position-relative {{ item.cssClass }}\">
                {{ item.label|trans|raw }}
            </span>
            {% if item.badge %}
                <span class=\"menu-item-badge rounded-pill badge {{ item.badge.cssClass }}\" {{ _self.render_html_attributes(item.badge) }} style=\"{{ item.badge.htmlStyle }}\">{{ item.badge.content }}</span>
            {% endif %}
        </span>
    {% else %}
        <a href=\"{{ item.linkUrl }}\" class=\"menu-item-contents {{ item.hasSubItems ? 'submenu-toggle' }} {{ item.cssClass }}\" target=\"{{ item.linkTarget }}\" rel=\"{{ item.linkRel }}\" referrerpolicy=\"origin-when-cross-origin\" {{ _self.render_html_attributes(item) }}>
            {% if item.icon is not empty %}<i class=\"menu-icon fa-fw {{ item.icon }}\"></i>{% endif %}
            <span class=\"menu-item-label position-relative\">
                {{ item.label|trans|raw }}
            </span>
            {% if item.hasSubItems %}<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>{% endif %}
            {% if item.badge %}
                <span class=\"menu-item-badge rounded-pill badge {{ item.badge.cssClass }}\" {{ _self.render_html_attributes(item.badge) }} style=\"{{ item.badge.htmlStyle }}\">{{ item.badge.content }}</span>
            {% endif %}
        </a>
    {% endif %}
{% endmacro %}
", "@EasyAdmin/menu.html.twig", "C:\\Users\\stark\\Desktop\\proyecto\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\menu.html.twig");
    }
}
