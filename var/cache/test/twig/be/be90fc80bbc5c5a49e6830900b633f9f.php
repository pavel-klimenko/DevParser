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

/* security/login.html.twig */
class __TwigTemplate_405bc5002fc96da3f8e7103c759dd42c extends Template
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
        return "@templates_path/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("@templates_path/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        yield from $this->load("@templates_path/header.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 col-lg-5\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-body p-4\">
                        <h1 class=\"h4 mb-4 text-center\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</h1>
                        ";
        // line 15
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                            <div class=\"alert alert-danger\" role=\"alert\">
                                ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageKey", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageData", [], "any", false, false, false, 17), "security"), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 20
        yield "                        <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
                            <div class=\"mb-3\">
                                <label for=\"inputEmail\" class=\"form-label\">Email</label>
                                <input type=\"email\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\" name=\"_username\" id=\"inputEmail\"
                                       class=\"form-control\" required autofocus>
                            </div>

                            <div class=\"mb-3\">
                                <label for=\"inputPassword\" class=\"form-label\">Password</label>
                                <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\"
                                       required>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                            >

                            <div class=\"d-grid\">
                                <button class=\"btn btn-primary\" type=\"submit\">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"text-center mt-3\">
                    <small class=\"text-muted\">
                        Don`t you have an account? <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Registration</a>
                    </small>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 55
        yield from $this->load("@templates_path/footer.html.twig", 55)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  160 => 55,  149 => 47,  133 => 34,  119 => 23,  112 => 20,  106 => 17,  103 => 16,  101 => 15,  97 => 14,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@templates_path/base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    {% include '@templates_path/header.html.twig' %}


    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 col-lg-5\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-body p-4\">
                        <h1 class=\"h4 mb-4 text-center\">{{ title }}</h1>
                        {% if error %}
                            <div class=\"alert alert-danger\" role=\"alert\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}
                        <form action=\"{{ path('app_login') }}\" method=\"post\">
                            <div class=\"mb-3\">
                                <label for=\"inputEmail\" class=\"form-label\">Email</label>
                                <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"inputEmail\"
                                       class=\"form-control\" required autofocus>
                            </div>

                            <div class=\"mb-3\">
                                <label for=\"inputPassword\" class=\"form-label\">Password</label>
                                <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\"
                                       required>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"{{ csrf_token('authenticate') }}\"
                            >

                            <div class=\"d-grid\">
                                <button class=\"btn btn-primary\" type=\"submit\">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"text-center mt-3\">
                    <small class=\"text-muted\">
                        Don`t you have an account? <a href=\"{{ path('app_register') }}\">Registration</a>
                    </small>
                </div>
            </div>
        </div>
    </div>


    {% include '@templates_path/footer.html.twig' %}
{% endblock %}
", "security/login.html.twig", "/var/www/app/templates/security/login.html.twig");
    }
}
