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

/* user/preferences.html.twig */
class __TwigTemplate_095fa6c99bcfa15eeed5282a667e732e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/preferences.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/preferences.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Gérer mes préférences";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container py-5\">
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Gérer mes préférences</h1>

    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Ajouter une nouvelle préférence</h2>
        <form method=\"post\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_preferences");
        yield "\">
            <div class=\"mb-3\">
                <label for=\"preference_name\" class=\"form-label\" style=\"color: #155724;\">Nom de la préférence</label>
                <input type=\"text\" name=\"preference_name\" id=\"preference_name\" class=\"form-control\" placeholder=\"Ex : Fumeur accepté\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter</button>
        </form>
    </div>

    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Mes préférences</h2>
        ";
        // line 22
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preferences"]) || array_key_exists("preferences", $context) ? $context["preferences"] : (function () { throw new RuntimeError('Variable "preferences" does not exist.', 22, $this->source); })())) > 0)) {
            // line 23
            yield "            <ul class=\"list-group\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preferences"]) || array_key_exists("preferences", $context) ? $context["preferences"] : (function () { throw new RuntimeError('Variable "preferences" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["preference"]) {
                // line 25
                yield "                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "name", [], "any", false, false, false, 26), "html", null, true);
                yield "
                        <form method=\"post\" action=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete_preference", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette préférence ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_preference_" . CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "id", [], "any", false, false, false, 28))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                        </form>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['preference'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "            </ul>
        ";
        } else {
            // line 35
            yield "            <p class=\"text-muted\">Vous n'avez pas encore ajouté de préférences.</p>
        ";
        }
        // line 37
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/preferences.html.twig";
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
        return array (  160 => 37,  156 => 35,  152 => 33,  141 => 28,  137 => 27,  133 => 26,  130 => 25,  126 => 24,  123 => 23,  121 => 22,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer mes préférences{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Gérer mes préférences</h1>

    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Ajouter une nouvelle préférence</h2>
        <form method=\"post\" action=\"{{ path('app_user_preferences') }}\">
            <div class=\"mb-3\">
                <label for=\"preference_name\" class=\"form-label\" style=\"color: #155724;\">Nom de la préférence</label>
                <input type=\"text\" name=\"preference_name\" id=\"preference_name\" class=\"form-control\" placeholder=\"Ex : Fumeur accepté\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter</button>
        </form>
    </div>

    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Mes préférences</h2>
        {% if preferences|length > 0 %}
            <ul class=\"list-group\">
                {% for preference in preferences %}
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        {{ preference.name }}
                        <form method=\"post\" action=\"{{ path('app_user_delete_preference', { id: preference.id }) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette préférence ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_preference_' ~ preference.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                        </form>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <p class=\"text-muted\">Vous n'avez pas encore ajouté de préférences.</p>
        {% endif %}
    </div>
</div>
{% endblock %}", "user/preferences.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/user/preferences.html.twig");
    }
}
