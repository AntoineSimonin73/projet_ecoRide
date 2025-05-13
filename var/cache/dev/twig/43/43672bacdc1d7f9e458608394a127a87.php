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

/* user/edit_vehicle.html.twig */
class __TwigTemplate_394dd8897378ca583022e2545bd1fee0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_vehicle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_vehicle.html.twig"));

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

        yield "Modifier un véhicule";
        
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
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Modifier un véhicule</h1>

    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\">
        <form method=\"post\" action=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_vehicle", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\">
            <div class=\"mb-3\">
                <label for=\"plate\" class=\"form-label\" style=\"color: #155724;\">Plaque d'immatriculation</label>
                <input type=\"text\" name=\"plate\" id=\"plate\" class=\"form-control\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 13, $this->source); })()), "immatriculation", [], "any", false, false, false, 13), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"registration_date\" class=\"form-label\" style=\"color: #155724;\">Date de première immatriculation</label>
                <input type=\"date\" name=\"registration_date\" id=\"registration_date\" class=\"form-control\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 17, $this->source); })()), "datePremiereImmatriculation", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"brand\" class=\"form-label\" style=\"color: #155724;\">Marque</label>
                <input type=\"text\" name=\"brand\" id=\"brand\" class=\"form-control\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 21, $this->source); })()), "marque", [], "any", false, false, false, 21), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"model\" class=\"form-label\" style=\"color: #155724;\">Modèle</label>
                <input type=\"text\" name=\"model\" id=\"model\" class=\"form-control\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 25, $this->source); })()), "modele", [], "any", false, false, false, 25), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"color\" class=\"form-label\" style=\"color: #155724;\">Couleur</label>
                <input type=\"text\" name=\"color\" id=\"color\" class=\"form-control\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 29, $this->source); })()), "couleur", [], "any", false, false, false, 29), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"energy\" class=\"form-label\" style=\"color: #155724;\">Énergie</label>
                <select name=\"energy\" id=\"energy\" class=\"form-select\" required>
                    <option value=\"essence\" ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 34, $this->source); })()), "energie", [], "any", false, false, false, 34) == "essence")) {
            yield "selected";
        }
        yield ">Essence</option>
                    <option value=\"diesel\" ";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 35, $this->source); })()), "energie", [], "any", false, false, false, 35) == "diesel")) {
            yield "selected";
        }
        yield ">Diesel</option>
                    <option value=\"electrique\" ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 36, $this->source); })()), "energie", [], "any", false, false, false, 36) == "electrique")) {
            yield "selected";
        }
        yield ">Électrique</option>
                </select>
            </div>
            <div class=\"mb-3\">
                <label for=\"seats\" class=\"form-label\" style=\"color: #155724;\">Nombre de places disponibles</label>
                <input type=\"number\" name=\"seats\" id=\"seats\" class=\"form-control\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 41, $this->source); })()), "placesDispo", [], "any", false, false, false, 41), "html", null, true);
        yield "\" min=\"1\" max=\"8\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Modifier</button>
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
        return "user/edit_vehicle.html.twig";
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
        return array (  170 => 41,  160 => 36,  154 => 35,  148 => 34,  140 => 29,  133 => 25,  126 => 21,  119 => 17,  112 => 13,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un véhicule{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Modifier un véhicule</h1>

    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\">
        <form method=\"post\" action=\"{{ path('app_user_edit_vehicle', { id: vehicule.id }) }}\">
            <div class=\"mb-3\">
                <label for=\"plate\" class=\"form-label\" style=\"color: #155724;\">Plaque d'immatriculation</label>
                <input type=\"text\" name=\"plate\" id=\"plate\" class=\"form-control\" value=\"{{ vehicule.immatriculation }}\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"registration_date\" class=\"form-label\" style=\"color: #155724;\">Date de première immatriculation</label>
                <input type=\"date\" name=\"registration_date\" id=\"registration_date\" class=\"form-control\" value=\"{{ vehicule.datePremiereImmatriculation|date('Y-m-d') }}\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"brand\" class=\"form-label\" style=\"color: #155724;\">Marque</label>
                <input type=\"text\" name=\"brand\" id=\"brand\" class=\"form-control\" value=\"{{ vehicule.marque }}\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"model\" class=\"form-label\" style=\"color: #155724;\">Modèle</label>
                <input type=\"text\" name=\"model\" id=\"model\" class=\"form-control\" value=\"{{ vehicule.modele }}\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"color\" class=\"form-label\" style=\"color: #155724;\">Couleur</label>
                <input type=\"text\" name=\"color\" id=\"color\" class=\"form-control\" value=\"{{ vehicule.couleur }}\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"energy\" class=\"form-label\" style=\"color: #155724;\">Énergie</label>
                <select name=\"energy\" id=\"energy\" class=\"form-select\" required>
                    <option value=\"essence\" {% if vehicule.energie == 'essence' %}selected{% endif %}>Essence</option>
                    <option value=\"diesel\" {% if vehicule.energie == 'diesel' %}selected{% endif %}>Diesel</option>
                    <option value=\"electrique\" {% if vehicule.energie == 'electrique' %}selected{% endif %}>Électrique</option>
                </select>
            </div>
            <div class=\"mb-3\">
                <label for=\"seats\" class=\"form-label\" style=\"color: #155724;\">Nombre de places disponibles</label>
                <input type=\"number\" name=\"seats\" id=\"seats\" class=\"form-control\" value=\"{{ vehicule.placesDispo }}\" min=\"1\" max=\"8\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Modifier</button>
        </form>
    </div>
</div>
{% endblock %}", "user/edit_vehicle.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/user/edit_vehicle.html.twig");
    }
}
