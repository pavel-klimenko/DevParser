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

/* teachers/detail.html.twig */
class __TwigTemplate_d729aa896a4241c2f834e916285797da extends Template
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

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teachers/detail.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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
        yield from $this->load("header.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
     <div class=\"container py-4\">
         <div class=\"p-5 mb-4 bg-light rounded-3\">
             <div class=\"container-fluid py-5\">
                 <h1 class=\"display-5 fw-bold\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "</h1>

                 <ul class=\"list-group\" style=\"text-align: start; margin:3%;\">
                     <li class=\"list-group-item\"><b>RATE PER HOUR:</b> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 14, $this->source); })()), "cv", [], "any", false, false, false, 14), "RatePerHour", [], "any", false, false, false, 14), "html", null, true);
        yield "\$</li>
                     <li class=\"list-group-item\"><b>CITY:</b> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 15, $this->source); })()), "related_user", [], "any", false, false, false, 15), "city", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "</li>
                     <li class=\"list-group-item\"><b>GENDER:</b> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 16, $this->source); })()), "related_user", [], "any", false, false, false, 16), "gender", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</li>
                     <li class=\"list-group-item\"><b>AGE:</b> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 17, $this->source); })()), "related_user", [], "any", false, false, false, 17), "age", [], "any", false, false, false, 17), "html", null, true);
        yield "</li>
                     <li class=\"list-group-item\"><b>YEARS EXPERIENCE:</b> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 18, $this->source); })()), "cv", [], "any", false, false, false, 18), "YearsOfExperience", [], "any", false, false, false, 18), "html", null, true);
        yield "</li>
                     <li class=\"list-group-item\"><b>RATING:</b> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 19, $this->source); })()), "rating", [], "any", false, false, false, 19), "html", null, true);
        yield "</li>
                 </ul>


                 ";
        // line 23
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["expertises"]) || array_key_exists("expertises", $context) ? $context["expertises"] : (function () { throw new RuntimeError('Variable "expertises" does not exist.', 23, $this->source); })())) > 0)) {
            // line 24
            yield "                     <h4 class=\"display-5 fw-bold\">Teacher`s expertises:</h4>
                     <ol class=\"list-group\" style=\"text-align: start; margin:3%\">
                         ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["expertises"]) || array_key_exists("expertises", $context) ? $context["expertises"] : (function () { throw new RuntimeError('Variable "expertises" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["expertise"] => $context["rating"]) {
                // line 27
                yield "                             <li class=\"list-group-item\">
                                 <p><b>Expertise:</b> ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["expertise"], "html", null, true);
                yield "</p>
                                 <p><b>Rating:</b> ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rating"], "html", null, true);
                yield " from ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_teacher_expertise_rating"]) || array_key_exists("max_teacher_expertise_rating", $context) ? $context["max_teacher_expertise_rating"] : (function () { throw new RuntimeError('Variable "max_teacher_expertise_rating" does not exist.', 29, $this->source); })()), "html", null, true);
                yield "</p>
                             </li>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['expertise'], $context['rating'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "                     </ol>
                 ";
        }
        // line 34
        yield "


                 ";
        // line 37
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["studying_modes"]) || array_key_exists("studying_modes", $context) ? $context["studying_modes"] : (function () { throw new RuntimeError('Variable "studying_modes" does not exist.', 37, $this->source); })())) > 0)) {
            // line 38
            yield "                     <h7 class=\"display-5 fw-bold\">Studying modes:</h7>
                     <ol class=\"list-group\" style=\"text-align: start; margin:3%\">
                         ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["studying_modes"]) || array_key_exists("studying_modes", $context) ? $context["studying_modes"] : (function () { throw new RuntimeError('Variable "studying_modes" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                // line 41
                yield "                             <li class=\"list-group-item\">
                                 <p><b>";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mode"], "html", null, true);
                yield "</b></p>
                             </li>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mode'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                     </ol>
                 ";
        }
        // line 47
        yield "

                 ";
        // line 49
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payment_types"]) || array_key_exists("payment_types", $context) ? $context["payment_types"] : (function () { throw new RuntimeError('Variable "payment_types" does not exist.', 49, $this->source); })())) > 0)) {
            // line 50
            yield "                     <h7 class=\"display-5 fw-bold\">Payment types:</h7>
                     <ol class=\"list-group\" style=\"text-align: start; margin:3%\">
                         ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payment_types"]) || array_key_exists("payment_types", $context) ? $context["payment_types"] : (function () { throw new RuntimeError('Variable "payment_types" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 53
                yield "                             <li class=\"list-group-item\">
                                 <p><b>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "</b></p>
                             </li>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                     </ol>
                 ";
        }
        // line 59
        yield "
                 <div class=\"row align-items-md-stretch\" style=\"margin: 3%\">
                     <div class=\"col-md-6\">
                         <div class=\"h-100 p-5 text-white bg-dark rounded-3\">
                             <h2>Personal characteristics</h2>
                             <p>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 64, $this->source); })()), "cv", [], "any", false, false, false, 64), "PersonalCharacteristics", [], "any", false, false, false, 64), "html", null, true);
        yield "</p>
                         </div>
                     </div>
                     <div class=\"col-md-6\">
                         <div class=\"h-100 p-5 bg-light border rounded-3\">
                             <h2>Experience</h2>
                             <p>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 70, $this->source); })()), "cv", [], "any", false, false, false, 70), "experience", [], "any", false, false, false, 70), "html", null, true);
        yield "</p>
                         </div>
                     </div>
                 </div>

                 <p><a href=\"mailto:";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new RuntimeError('Variable "teacher" does not exist.', 75, $this->source); })()), "related_user", [], "any", false, false, false, 75), "email", [], "any", false, false, false, 75), "html", null, true);
        yield "\">Contact the teacher via Email</a></p>
             </div>
         </div>


     </div>

     ";
        // line 82
        yield from $this->load("footer.html.twig", 82)->unwrap()->yield($context);
        // line 83
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "teachers/detail.html.twig";
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
        return array (  256 => 83,  254 => 82,  244 => 75,  236 => 70,  227 => 64,  220 => 59,  216 => 57,  207 => 54,  204 => 53,  200 => 52,  196 => 50,  194 => 49,  190 => 47,  186 => 45,  177 => 42,  174 => 41,  170 => 40,  166 => 38,  164 => 37,  159 => 34,  155 => 32,  144 => 29,  140 => 28,  137 => 27,  133 => 26,  129 => 24,  127 => 23,  120 => 19,  116 => 18,  112 => 17,  108 => 16,  104 => 15,  100 => 14,  94 => 11,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

 {% block title %}{{ title }}{% endblock %}

 {% block body %}
     {% include 'header.html.twig' %}

     <div class=\"container py-4\">
         <div class=\"p-5 mb-4 bg-light rounded-3\">
             <div class=\"container-fluid py-5\">
                 <h1 class=\"display-5 fw-bold\">{{ title }}</h1>

                 <ul class=\"list-group\" style=\"text-align: start; margin:3%;\">
                     <li class=\"list-group-item\"><b>RATE PER HOUR:</b> {{ teacher.cv.RatePerHour }}\$</li>
                     <li class=\"list-group-item\"><b>CITY:</b> {{ teacher.related_user.city.name }}</li>
                     <li class=\"list-group-item\"><b>GENDER:</b> {{ teacher.related_user.gender.name }}</li>
                     <li class=\"list-group-item\"><b>AGE:</b> {{ teacher.related_user.age }}</li>
                     <li class=\"list-group-item\"><b>YEARS EXPERIENCE:</b> {{ teacher.cv.YearsOfExperience }}</li>
                     <li class=\"list-group-item\"><b>RATING:</b> {{ teacher.rating }}</li>
                 </ul>


                 {% if expertises|length > 0 %}
                     <h4 class=\"display-5 fw-bold\">Teacher`s expertises:</h4>
                     <ol class=\"list-group\" style=\"text-align: start; margin:3%\">
                         {% for expertise, rating in expertises %}
                             <li class=\"list-group-item\">
                                 <p><b>Expertise:</b> {{ expertise }}</p>
                                 <p><b>Rating:</b> {{ rating }} from {{ max_teacher_expertise_rating }}</p>
                             </li>
                         {% endfor %}
                     </ol>
                 {% endif %}



                 {% if studying_modes|length > 0 %}
                     <h7 class=\"display-5 fw-bold\">Studying modes:</h7>
                     <ol class=\"list-group\" style=\"text-align: start; margin:3%\">
                         {% for mode in studying_modes %}
                             <li class=\"list-group-item\">
                                 <p><b>{{ mode }}</b></p>
                             </li>
                         {% endfor %}
                     </ol>
                 {% endif %}


                 {% if payment_types|length > 0 %}
                     <h7 class=\"display-5 fw-bold\">Payment types:</h7>
                     <ol class=\"list-group\" style=\"text-align: start; margin:3%\">
                         {% for type in payment_types %}
                             <li class=\"list-group-item\">
                                 <p><b>{{ type }}</b></p>
                             </li>
                         {% endfor %}
                     </ol>
                 {% endif %}

                 <div class=\"row align-items-md-stretch\" style=\"margin: 3%\">
                     <div class=\"col-md-6\">
                         <div class=\"h-100 p-5 text-white bg-dark rounded-3\">
                             <h2>Personal characteristics</h2>
                             <p>{{ teacher.cv.PersonalCharacteristics }}</p>
                         </div>
                     </div>
                     <div class=\"col-md-6\">
                         <div class=\"h-100 p-5 bg-light border rounded-3\">
                             <h2>Experience</h2>
                             <p>{{ teacher.cv.experience }}</p>
                         </div>
                     </div>
                 </div>

                 <p><a href=\"mailto:{{ teacher.related_user.email }}\">Contact the teacher via Email</a></p>
             </div>
         </div>


     </div>

     {% include 'footer.html.twig' %}
 {% endblock %}", "teachers/detail.html.twig", "/var/www/app/templates/teachers/detail.html.twig");
    }
}
