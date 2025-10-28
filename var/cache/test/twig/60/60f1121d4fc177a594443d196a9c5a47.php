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

/* homepage.html.twig */
class __TwigTemplate_499b826f101e16b84c315b3068cc5a71 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

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
        yield "     ";
        yield from $this->load("@templates_path/header.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

     <div class=\"container py-4\">
         <div class=\"p-5 mb-4 bg-light rounded-3\">
             <h4>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["html_data"]) || array_key_exists("html_data", $context) ? $context["html_data"] : (function () { throw new RuntimeError('Variable "html_data" does not exist.', 11, $this->source); })()), "main_title", [], "any", false, false, false, 11), "content", [], "any", false, false, false, 11), "html", null, true);
        yield "</h4>
                 ";
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["expertises"]) || array_key_exists("expertises", $context) ? $context["expertises"] : (function () { throw new RuntimeError('Variable "expertises" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            yield "                         ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["expertises"]) || array_key_exists("expertises", $context) ? $context["expertises"] : (function () { throw new RuntimeError('Variable "expertises" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
                // line 14
                yield "                            <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["expertise"], "name", [], "any", false, false, false, 14), "html", null, true);
                yield "</b>,
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['expertise'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "                 ";
        }
        // line 17
        yield "         </div>

         <div class=\"p-5 mb-4 bg-light rounded-3\">
            <h5> - More than ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["students_amount"]) || array_key_exists("students_amount", $context) ? $context["students_amount"] : (function () { throw new RuntimeError('Variable "students_amount" does not exist.', 20, $this->source); })()), "html", null, true);
        yield " students from ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cities_amount"]) || array_key_exists("cities_amount", $context) ? $context["cities_amount"] : (function () { throw new RuntimeError('Variable "cities_amount" does not exist.', 20, $this->source); })()), "html", null, true);
        yield " cities.</h5>
         </div>

         ";
        // line 23
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payment_types"]) || array_key_exists("payment_types", $context) ? $context["payment_types"] : (function () { throw new RuntimeError('Variable "payment_types" does not exist.', 23, $this->source); })())) > 0)) {
            // line 24
            yield "             <h5 class=\"p-5 mb-4 bg-light rounded-3\">Available platform payment types:</h5>
             <ol class=\"list-group\" style=\"text-align: start; margin:3%\">
                 ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payment_types"]) || array_key_exists("payment_types", $context) ? $context["payment_types"] : (function () { throw new RuntimeError('Variable "payment_types" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 27
                yield "                     <li class=\"list-group-item\">
                         <p><b>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 28), "html", null, true);
                yield "</b></p>
                     </li>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "             </ol>
         ";
        }
        // line 33
        yield "     </div>

     ";
        // line 35
        yield from $this->load("@templates_path/footer.html.twig", 35)->unwrap()->yield($context);
        // line 36
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "homepage.html.twig";
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
        return array (  162 => 36,  160 => 35,  156 => 33,  152 => 31,  143 => 28,  140 => 27,  136 => 26,  132 => 24,  130 => 23,  122 => 20,  117 => 17,  114 => 16,  105 => 14,  100 => 13,  98 => 12,  94 => 11,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@templates_path/base.html.twig' %}

 {% block title %}{{ title }}{% endblock %}

 {% block body %}
     {% include '@templates_path/header.html.twig' %}


     <div class=\"container py-4\">
         <div class=\"p-5 mb-4 bg-light rounded-3\">
             <h4>{{ html_data.main_title.content }}</h4>
                 {% if expertises|length > 0 %}
                         {% for expertise in expertises %}
                            <b>{{ expertise.name }}</b>,
                         {% endfor %}
                 {% endif %}
         </div>

         <div class=\"p-5 mb-4 bg-light rounded-3\">
            <h5> - More than {{ students_amount }} students from {{ cities_amount }} cities.</h5>
         </div>

         {% if payment_types|length > 0 %}
             <h5 class=\"p-5 mb-4 bg-light rounded-3\">Available platform payment types:</h5>
             <ol class=\"list-group\" style=\"text-align: start; margin:3%\">
                 {% for type in payment_types %}
                     <li class=\"list-group-item\">
                         <p><b>{{ type.name }}</b></p>
                     </li>
                 {% endfor %}
             </ol>
         {% endif %}
     </div>

     {% include '@templates_path/footer.html.twig' %}
 {% endblock %}", "homepage.html.twig", "/var/www/app/templates/homepage.html.twig");
    }
}
