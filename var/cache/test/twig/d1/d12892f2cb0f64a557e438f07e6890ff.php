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

/* student/select_teachers.html.twig */
class __TwigTemplate_c83c970492cadb22988ab0093277a8c2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/select_teachers.html.twig"));

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

        yield "Select the teacher";
        
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
         <div class=\"container py-2\">
             <div class=\"container mt-4\">
                 <div class=\"col-md-6\">
                     <div class=\"row justify-content-center\">
                         <h2>Select the teacher</h2>
                         ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                         <div class=\"mb-3\">
                             ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 16, $this->source); })()), "rating", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                             ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 17, $this->source); })()), "rating", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
        yield "
                             ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 18, $this->source); })()), "rating", [], "any", false, false, false, 18), 'errors');
        yield "
                         </div>

                         <div class=\"mb-3\">
                             ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 22, $this->source); })()), "yearsExperience", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                             ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 23, $this->source); })()), "yearsExperience", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
        yield "
                             ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 24, $this->source); })()), "yearsExperience", [], "any", false, false, false, 24), 'errors');
        yield "
                         </div>

                         <div class=\"mb-3\">
                             ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 28, $this->source); })()), "maxHourRate", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                             ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 29, $this->source); })()), "maxHourRate", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
        yield "
                             ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 30, $this->source); })()), "maxHourRate", [], "any", false, false, false, 30), 'errors');
        yield "
                         </div>

                         <div class=\"mb-3\">
                             ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 34, $this->source); })()), "expertises", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                             ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 35, $this->source); })()), "expertises", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-select", "multiple" => "multiple"]]);
        yield "
                             ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 36, $this->source); })()), "expertises", [], "any", false, false, false, 36), 'errors');
        yield "
                         </div>

                         <div class=\"mb-3\">
                             ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 40, $this->source); })()), "studyingModes", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                             ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 41, $this->source); })()), "studyingModes", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                             ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 42, $this->source); })()), "studyingModes", [], "any", false, false, false, 42), 'errors');
        yield "
                         </div>

                         <button type=\"submit\" class=\"btn btn-primary\">Find teachers</button>
                         ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["selectTeachersForm"]) || array_key_exists("selectTeachersForm", $context) ? $context["selectTeachersForm"] : (function () { throw new RuntimeError('Variable "selectTeachersForm" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
                     </div>
                 </div>
             </div>
         </div>

     ";
        // line 52
        yield from $this->load("@templates_path/footer.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "student/select_teachers.html.twig";
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
        return array (  188 => 53,  186 => 52,  177 => 46,  170 => 42,  166 => 41,  162 => 40,  155 => 36,  151 => 35,  147 => 34,  140 => 30,  136 => 29,  132 => 28,  125 => 24,  121 => 23,  117 => 22,  110 => 18,  106 => 17,  102 => 16,  96 => 13,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@templates_path/base.html.twig' %}

 {% block title %}Select the teacher{% endblock %}

 {% block body %}
     {% include '@templates_path/header.html.twig' %}

         <div class=\"container py-2\">
             <div class=\"container mt-4\">
                 <div class=\"col-md-6\">
                     <div class=\"row justify-content-center\">
                         <h2>Select the teacher</h2>
                         {{ form_start(selectTeachersForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                         <div class=\"mb-3\">
                             {{ form_label(selectTeachersForm.rating, null, {'label_attr': {'class': 'form-label'}}) }}
                             {{ form_widget(selectTeachersForm.rating, {'attr': {'class': 'form-control', 'type': 'number'}}) }}
                             {{ form_errors(selectTeachersForm.rating) }}
                         </div>

                         <div class=\"mb-3\">
                             {{ form_label(selectTeachersForm.yearsExperience, null, {'label_attr': {'class': 'form-label'}}) }}
                             {{ form_widget(selectTeachersForm.yearsExperience, {'attr': {'class': 'form-control', 'type': 'number'}}) }}
                             {{ form_errors(selectTeachersForm.yearsExperience) }}
                         </div>

                         <div class=\"mb-3\">
                             {{ form_label(selectTeachersForm.maxHourRate, null, {'label_attr': {'class': 'form-label'}}) }}
                             {{ form_widget(selectTeachersForm.maxHourRate, {'attr': {'class': 'form-control', 'type': 'number'}}) }}
                             {{ form_errors(selectTeachersForm.maxHourRate) }}
                         </div>

                         <div class=\"mb-3\">
                             {{ form_label(selectTeachersForm.expertises, null, {'label_attr': {'class': 'form-label'}}) }}
                             {{ form_widget(selectTeachersForm.expertises, {'attr': {'class': 'form-select', 'multiple': 'multiple'}}) }}
                             {{ form_errors(selectTeachersForm.expertises) }}
                         </div>

                         <div class=\"mb-3\">
                             {{ form_label(selectTeachersForm.studyingModes, null, {'label_attr': {'class': 'form-label'}}) }}
                             {{ form_widget(selectTeachersForm.studyingModes, {'attr': {'class': 'form-select'}}) }}
                             {{ form_errors(selectTeachersForm.studyingModes) }}
                         </div>

                         <button type=\"submit\" class=\"btn btn-primary\">Find teachers</button>
                         {{ form_end(selectTeachersForm) }}
                     </div>
                 </div>
             </div>
         </div>

     {% include '@templates_path/footer.html.twig' %}
 {% endblock %}", "student/select_teachers.html.twig", "/var/www/app/templates/student/select_teachers.html.twig");
    }
}
