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

/* teachers/list.html.twig */
class __TwigTemplate_291329d925f249d80f3d683a2a2631d2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teachers/list.html.twig"));

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
        yield "         <div class=\"list-title\">
             <h1>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</h1>
         </div>


         <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
             ";
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teachers"]) || array_key_exists("teachers", $context) ? $context["teachers"] : (function () { throw new RuntimeError('Variable "teachers" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            yield "                 ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teachers"]) || array_key_exists("teachers", $context) ? $context["teachers"] : (function () { throw new RuntimeError('Variable "teachers" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 15
                yield "                     <div class=\"col\">
                         <div class=\"card mb-4 rounded-3 shadow-sm\">
                             <div class=\"card-header py-3\">
                                 <h4 class=\"my-0 fw-normal\">";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "related_user", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
                yield "</h4>
                             </div>
                             <div class=\"card-body\">
                                 <h1 class=\"card-title pricing-card-title\">\$";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "cv", [], "any", false, false, false, 21), "RatePerHour", [], "any", false, false, false, 21), "html", null, true);
                yield "<small class=\"text-muted fw-light\">/hour</small></h1>
                                 <ul class=\"list-unstyled mt-3 mb-4\" style=\"text-align: start;\">
                                     <li><b>City:</b> ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "related_user", [], "any", false, false, false, 23), "city", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
                yield "</li>
                                     <li><b>Gender:</b> ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "related_user", [], "any", false, false, false, 24), "gender", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                yield "</li>
                                     <li><b>Teacher`s common Rating:</b> ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "rating", [], "any", false, false, false, 25), "html", null, true);
                yield " from ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_teacher_common_rating"]) || array_key_exists("max_teacher_common_rating", $context) ? $context["max_teacher_common_rating"] : (function () { throw new RuntimeError('Variable "max_teacher_common_rating" does not exist.', 25, $this->source); })()), "html", null, true);
                yield "</li>
                                 </ul>

                                 <p>EXPERTISES:</p>
                                 <ol class=\"list-unstyled mt-3 mb-4\" style=\"text-align: start; margin-top: 3%\">
                                     ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "hasTeacherExpertises", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
                    // line 31
                    yield "                                         <li> - <b>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["expertise"], "expertise", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                    yield "</b></li>
                                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['expertise'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "                                 </ol>

                                 <a href=\"/teachers/";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "id", [], "any", false, false, false, 35), "html", null, true);
                yield "\" class=\"w-100 btn btn-lg btn-outline-primary\">Open CV</a>
                             </div>
                         </div>
                     </div>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['teacher'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "             ";
        } else {
            // line 41
            yield "                 <div class=\"col\">
                     <div class=\"card mb-4 rounded-3 shadow-sm\">
                         <h4>Teacher not found</h4>
                     </div>
                 </div>
             ";
        }
        // line 47
        yield "

         </div>


";
        // line 77
        yield "
";
        // line 106
        yield "
     ";
        // line 107
        yield from $this->load("footer.html.twig", 107)->unwrap()->yield($context);
        // line 108
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "teachers/list.html.twig";
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
        return array (  194 => 108,  192 => 107,  189 => 106,  186 => 77,  179 => 47,  171 => 41,  168 => 40,  157 => 35,  153 => 33,  144 => 31,  140 => 30,  130 => 25,  126 => 24,  122 => 23,  117 => 21,  111 => 18,  106 => 15,  101 => 14,  99 => 13,  91 => 8,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

 {% block title %}{{ title }}{% endblock %}

 {% block body %}
     {% include 'header.html.twig' %}
         <div class=\"list-title\">
             <h1>{{ title }}</h1>
         </div>


         <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
             {% if teachers|length > 0 %}
                 {% for teacher in teachers %}
                     <div class=\"col\">
                         <div class=\"card mb-4 rounded-3 shadow-sm\">
                             <div class=\"card-header py-3\">
                                 <h4 class=\"my-0 fw-normal\">{{ teacher.related_user.name }}</h4>
                             </div>
                             <div class=\"card-body\">
                                 <h1 class=\"card-title pricing-card-title\">\${{ teacher.cv.RatePerHour }}<small class=\"text-muted fw-light\">/hour</small></h1>
                                 <ul class=\"list-unstyled mt-3 mb-4\" style=\"text-align: start;\">
                                     <li><b>City:</b> {{ teacher.related_user.city.name  }}</li>
                                     <li><b>Gender:</b> {{ teacher.related_user.gender.name }}</li>
                                     <li><b>Teacher`s common Rating:</b> {{ teacher.rating }} from {{ max_teacher_common_rating }}</li>
                                 </ul>

                                 <p>EXPERTISES:</p>
                                 <ol class=\"list-unstyled mt-3 mb-4\" style=\"text-align: start; margin-top: 3%\">
                                     {% for expertise in teacher.hasTeacherExpertises %}
                                         <li> - <b>{{ expertise.expertise.name }}</b></li>
                                     {% endfor %}
                                 </ol>

                                 <a href=\"/teachers/{{ teacher.id }}\" class=\"w-100 btn btn-lg btn-outline-primary\">Open CV</a>
                             </div>
                         </div>
                     </div>
                 {% endfor %}
             {% else %}
                 <div class=\"col\">
                     <div class=\"card mb-4 rounded-3 shadow-sm\">
                         <h4>Teacher not found</h4>
                     </div>
                 </div>
             {% endif %}


         </div>


{#         <h2 class=\"display-6 text-center mb-4\">Compare plans</h2>#}
{#         <div class=\"table-responsive\">#}
{#             <table class=\"table text-center\">#}
{#                 <thead>#}
{#                 <tr>#}
{#                     <th style=\"width: 34%;\"></th>#}
{#                     <th style=\"width: 22%;\">Free</th>#}
{#                     <th style=\"width: 22%;\">Pro</th>#}
{#                     <th style=\"width: 22%;\">Enterprise</th>#}
{#                 </tr>#}
{#                 </thead>#}
{#                 <tbody>#}
{#                 <tr>#}
{#                     <th scope=\"row\" class=\"text-start\">Public</th>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                 </tr>#}
{#                 <tr>#}
{#                     <th scope=\"row\" class=\"text-start\">Private</th>#}
{#                     <td></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                 </tr>#}
{#                 </tbody>#}

{#                 <tbody>#}
{#                 <tr>#}
{#                     <th scope=\"row\" class=\"text-start\">Permissions</th>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                 </tr>#}
{#                 <tr>#}
{#                     <th scope=\"row\" class=\"text-start\">Sharing</th>#}
{#                     <td></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                 </tr>#}
{#                 <tr>#}
{#                     <th scope=\"row\" class=\"text-start\">Unlimited members</th>#}
{#                     <td></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                 </tr>#}
{#                 <tr>#}
{#                     <th scope=\"row\" class=\"text-start\">Extra security</th>#}
{#                     <td></td>#}
{#                     <td></td>#}
{#                     <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"></use></svg></td>#}
{#                 </tr>#}
{#                 </tbody>#}
{#             </table>#}
{#         </div>#}

     {% include 'footer.html.twig' %}
 {% endblock %}", "teachers/list.html.twig", "/var/www/app/templates/teachers/list.html.twig");
    }
}
