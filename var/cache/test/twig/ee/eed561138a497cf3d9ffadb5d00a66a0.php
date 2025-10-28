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

/* @templates_path/header.html.twig */
class __TwigTemplate_4b13f5ebcdf17be9978a4bcc5c175e54 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@templates_path/header.html.twig"));

        // line 1
        yield "<html lang=\"en\">
<head>
    <style>body {
            transition: opacity ease-in 0.2s;
        }

        body[unresolved] {
            opacity: 0;
            display: block;
            overflow: hidden;
            position: relative;
        }
    </style>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/sign-in/\">

    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template -->
    ";
        // line 28
        yield "</head>
<div class=\"container py-3\">
<header>
        <div class=\"d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom\">
            <a href=\"/\" class=\"d-flex align-items-center text-dark text-decoration-none\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"32\" class=\"me-2\" viewBox=\"0 0 118 94\" role=\"img\"><title>Bootstrap</title><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z\" fill=\"currentColor\"></path></svg>
                <span class=\"fs-4\">Teacher selector</span>
            </a>

            <nav class=\"d-inline-flex mt-2 mt-md-0 ms-md-auto\">
                <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">Homepage</a>
                <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teachers_get_all");
        yield "\">Teachers</a>

                ";
        // line 41
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                    ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STUDENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                        <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("select_teachers");
                yield "\">Select teachers</a>
                    ";
            }
            // line 45
            yield "                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">Profile</a>
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                ";
        } else {
            // line 48
            yield "                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>
                    <a class=\"py-2 text-dark text-decoration-none\" href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Registration</a>
                ";
        }
        // line 51
        yield "            </nav>
        </div>
    </header>

<body class=\"text-center\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
        crossorigin=\"anonymous\"></script>
<main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@templates_path/header.html.twig";
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
        return array (  125 => 51,  120 => 49,  115 => 48,  110 => 46,  105 => 45,  99 => 43,  96 => 42,  94 => 41,  89 => 39,  85 => 38,  73 => 28,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html lang=\"en\">
<head>
    <style>body {
            transition: opacity ease-in 0.2s;
        }

        body[unresolved] {
            opacity: 0;
            display: block;
            overflow: hidden;
            position: relative;
        }
    </style>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/sign-in/\">

    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template -->
    {#    <link href=\"signin.css\" rel=\"stylesheet\"> #}
</head>
<div class=\"container py-3\">
<header>
        <div class=\"d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom\">
            <a href=\"/\" class=\"d-flex align-items-center text-dark text-decoration-none\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"32\" class=\"me-2\" viewBox=\"0 0 118 94\" role=\"img\"><title>Bootstrap</title><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z\" fill=\"currentColor\"></path></svg>
                <span class=\"fs-4\">Teacher selector</span>
            </a>

            <nav class=\"d-inline-flex mt-2 mt-md-0 ms-md-auto\">
                <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"{{ path('homepage') }}\">Homepage</a>
                <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"{{ path('teachers_get_all') }}\">Teachers</a>

                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% if is_granted('ROLE_STUDENT') %}
                        <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"{{ path('select_teachers') }}\">Select teachers</a>
                    {% endif %}
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"{{ path('app_profile') }}\">Profile</a>
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"{{ path('app_logout') }}\">Logout</a>
                {% else %}
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=\"{{ path('app_login') }}\">Login</a>
                    <a class=\"py-2 text-dark text-decoration-none\" href=\"{{ path('app_register') }}\">Registration</a>
                {% endif %}
            </nav>
        </div>
    </header>

<body class=\"text-center\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
        crossorigin=\"anonymous\"></script>
<main>", "@templates_path/header.html.twig", "/var/www/app/templates/header.html.twig");
    }
}
