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

/* add_covoiturage.html.twig */
class __TwigTemplate_3e71ce8ade5896a8ca0ae801a7f2c986 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_covoiturage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_covoiturage.html.twig"));

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

        yield "Ajouter un covoiturage";
        
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
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Ajouter un covoiturage</h1>

    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\">
        <form method=\"post\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_add");
        yield "\">
            <div class=\"mb-3\">
                <label for=\"departure\" class=\"form-label\" style=\"color: #155724;\">Adresse de départ</label>
                <input type=\"text\" name=\"departure\" id=\"departure\" class=\"form-control\" placeholder=\"Ex : 10 rue de Paris, 75000 Paris\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"arrival\" class=\"form-label\" style=\"color: #155724;\">Adresse d'arrivée</label>
                <input type=\"text\" name=\"arrival\" id=\"arrival\" class=\"form-control\" placeholder=\"Ex : 20 avenue de Lyon, 69000 Lyon\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"departure_time\" class=\"form-label\" style=\"color: #155724;\">Date et heure de départ</label>
                <input type=\"datetime-local\" name=\"departure_time\" id=\"departure_time\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"arrival_time\" class=\"form-label\" style=\"color: #155724;\">Date et heure d'arrivée</label>
                <input type=\"datetime-local\" name=\"arrival_time\" id=\"arrival_time\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"price\" class=\"form-label\" style=\"color: #155724;\">Prix (en crédits)</label>
                <input type=\"number\" name=\"price\" id=\"price\" class=\"form-control\" min=\"3\" placeholder=\"Ex : 10\" required>
                <small class=\"text-muted\">2 crédits seront déduits pour la plateforme.</small>
            </div>
            <div class=\"mb-3\">
                <label for=\"vehicle\" class=\"form-label\" style=\"color: #155724;\">Sélectionnez un véhicule</label>
                <select name=\"vehicle\" id=\"vehicle\" class=\"form-select\" required>
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 36
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 36), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 36), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 36), "html", null, true);
            yield ")</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['vehicule'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                </select>
            </div>
            <div class=\"mb-3\">
                <label for=\"preferences\" class=\"form-label\" style=\"color: #155724;\">Préférences pour le covoiturage</label>
                <select name=\"preferences[]\" id=\"preferences\" class=\"form-select\" multiple>
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preferences"]) || array_key_exists("preferences", $context) ? $context["preferences"] : (function () { throw new RuntimeError('Variable "preferences" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["preference"]) {
            // line 44
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "name", [], "any", false, false, false, 44), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['preference'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                </select>
                <small class=\"text-muted\">Maintenez la touche Ctrl (ou Cmd sur Mac) pour sélectionner plusieurs préférences.</small>
            </div>
            <div class=\"mb-3\">
                <label for=\"places_dispo\" class=\"form-label\" style=\"color: #155724;\">Nombre de places disponibles</label>
                <input type=\"number\" name=\"places_dispo\" id=\"places_dispo\" class=\"form-control\" min=\"1\" placeholder=\"Ex : 4\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter le covoiturage</button>
        </form>
    </div>
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
        return "add_covoiturage.html.twig";
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
        return array (  175 => 46,  164 => 44,  160 => 43,  153 => 38,  138 => 36,  134 => 35,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un covoiturage{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Ajouter un covoiturage</h1>

    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\">
        <form method=\"post\" action=\"{{ path('app_covoiturage_add') }}\">
            <div class=\"mb-3\">
                <label for=\"departure\" class=\"form-label\" style=\"color: #155724;\">Adresse de départ</label>
                <input type=\"text\" name=\"departure\" id=\"departure\" class=\"form-control\" placeholder=\"Ex : 10 rue de Paris, 75000 Paris\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"arrival\" class=\"form-label\" style=\"color: #155724;\">Adresse d'arrivée</label>
                <input type=\"text\" name=\"arrival\" id=\"arrival\" class=\"form-control\" placeholder=\"Ex : 20 avenue de Lyon, 69000 Lyon\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"departure_time\" class=\"form-label\" style=\"color: #155724;\">Date et heure de départ</label>
                <input type=\"datetime-local\" name=\"departure_time\" id=\"departure_time\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"arrival_time\" class=\"form-label\" style=\"color: #155724;\">Date et heure d'arrivée</label>
                <input type=\"datetime-local\" name=\"arrival_time\" id=\"arrival_time\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"price\" class=\"form-label\" style=\"color: #155724;\">Prix (en crédits)</label>
                <input type=\"number\" name=\"price\" id=\"price\" class=\"form-control\" min=\"3\" placeholder=\"Ex : 10\" required>
                <small class=\"text-muted\">2 crédits seront déduits pour la plateforme.</small>
            </div>
            <div class=\"mb-3\">
                <label for=\"vehicle\" class=\"form-label\" style=\"color: #155724;\">Sélectionnez un véhicule</label>
                <select name=\"vehicle\" id=\"vehicle\" class=\"form-select\" required>
                    {% for vehicule in vehicules %}
                        <option value=\"{{ vehicule.id }}\">{{ vehicule.marque }} {{ vehicule.modele }} ({{ vehicule.immatriculation }})</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"mb-3\">
                <label for=\"preferences\" class=\"form-label\" style=\"color: #155724;\">Préférences pour le covoiturage</label>
                <select name=\"preferences[]\" id=\"preferences\" class=\"form-select\" multiple>
                    {% for preference in preferences %}
                        <option value=\"{{ preference.id }}\">{{ preference.name }}</option>
                    {% endfor %}
                </select>
                <small class=\"text-muted\">Maintenez la touche Ctrl (ou Cmd sur Mac) pour sélectionner plusieurs préférences.</small>
            </div>
            <div class=\"mb-3\">
                <label for=\"places_dispo\" class=\"form-label\" style=\"color: #155724;\">Nombre de places disponibles</label>
                <input type=\"number\" name=\"places_dispo\" id=\"places_dispo\" class=\"form-control\" min=\"1\" placeholder=\"Ex : 4\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter le covoiturage</button>
        </form>
    </div>
</div>
{% endblock %}", "add_covoiturage.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/add_covoiturage.html.twig");
    }
}
