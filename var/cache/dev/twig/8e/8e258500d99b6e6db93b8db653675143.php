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

/* edit_covoiturage.html.twig */
class __TwigTemplate_7acdd8fb4561984ace417a3b98501940 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_covoiturage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_covoiturage.html.twig"));

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

        yield "Modifier le covoiturage";
        
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
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Modifier le covoiturage</h1>

    <form method=\"post\">
        <div class=\"mb-3\">
            <label for=\"adresseDepart\" class=\"form-label\">Adresse de départ</label>
            <input type=\"text\" name=\"adresseDepart\" id=\"adresseDepart\" class=\"form-control\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 12, $this->source); })()), "adresseDepart", [], "any", false, false, false, 12), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"adresseArrivee\" class=\"form-label\">Adresse d'arrivée</label>
            <input type=\"text\" name=\"adresseArrivee\" id=\"adresseArrivee\" class=\"form-control\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 16, $this->source); })()), "adresseArrivee", [], "any", false, false, false, 16), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"dateDepart\" class=\"form-label\">Date de départ</label>
            <input type=\"datetime-local\" name=\"dateDepart\" id=\"dateDepart\" class=\"form-control\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 20, $this->source); })()), "dateDepart", [], "any", false, false, false, 20), "Y-m-dTH:i"), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"dateArrivee\" class=\"form-label\">Date d'arrivée</label>
            <input type=\"datetime-local\" name=\"dateArrivee\" id=\"dateArrivee\" class=\"form-control\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 24, $this->source); })()), "dateArrivee", [], "any", false, false, false, 24), "Y-m-dTH:i"), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"prix\" class=\"form-label\">Prix</label>
            <input type=\"number\" name=\"prix\" id=\"prix\" class=\"form-control\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"placesRestantes\" class=\"form-label\">Places restantes</label>
            <input type=\"number\" name=\"placesRestantes\" id=\"placesRestantes\" class=\"form-control\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 32, $this->source); })()), "placesRestantes", [], "any", false, false, false, 32), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"preferences\" class=\"form-label\">Préférences</label>
            <select name=\"preferences[]\" id=\"preferences\" class=\"form-select\" multiple>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preferences"]) || array_key_exists("preferences", $context) ? $context["preferences"] : (function () { throw new RuntimeError('Variable "preferences" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["preference"]) {
            // line 38
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 38, $this->source); })()), "preferences", [], "any", false, false, false, 38), "contains", [$context["preference"]], "method", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "selected";
            }
            yield ">
                        ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "name", [], "any", false, false, false, 39), "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['preference'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </select>
            <small class=\"form-text text-muted\">Maintenez la touche Ctrl (ou Cmd sur Mac) pour sélectionner plusieurs préférences.</small>
        </div>
        <button type=\"submit\" class=\"btn btn-success w-100\">Modifier</button>
    </form>
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
        return "edit_covoiturage.html.twig";
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
        return array (  173 => 42,  164 => 39,  155 => 38,  151 => 37,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le covoiturage{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Modifier le covoiturage</h1>

    <form method=\"post\">
        <div class=\"mb-3\">
            <label for=\"adresseDepart\" class=\"form-label\">Adresse de départ</label>
            <input type=\"text\" name=\"adresseDepart\" id=\"adresseDepart\" class=\"form-control\" value=\"{{ covoiturage.adresseDepart }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"adresseArrivee\" class=\"form-label\">Adresse d'arrivée</label>
            <input type=\"text\" name=\"adresseArrivee\" id=\"adresseArrivee\" class=\"form-control\" value=\"{{ covoiturage.adresseArrivee }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"dateDepart\" class=\"form-label\">Date de départ</label>
            <input type=\"datetime-local\" name=\"dateDepart\" id=\"dateDepart\" class=\"form-control\" value=\"{{ covoiturage.dateDepart|date('Y-m-d\\TH:i') }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"dateArrivee\" class=\"form-label\">Date d'arrivée</label>
            <input type=\"datetime-local\" name=\"dateArrivee\" id=\"dateArrivee\" class=\"form-control\" value=\"{{ covoiturage.dateArrivee|date('Y-m-d\\TH:i') }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"prix\" class=\"form-label\">Prix</label>
            <input type=\"number\" name=\"prix\" id=\"prix\" class=\"form-control\" value=\"{{ covoiturage.prix }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"placesRestantes\" class=\"form-label\">Places restantes</label>
            <input type=\"number\" name=\"placesRestantes\" id=\"placesRestantes\" class=\"form-control\" value=\"{{ covoiturage.placesRestantes }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"preferences\" class=\"form-label\">Préférences</label>
            <select name=\"preferences[]\" id=\"preferences\" class=\"form-select\" multiple>
                {% for preference in preferences %}
                    <option value=\"{{ preference.id }}\" {% if covoiturage.preferences.contains(preference) %}selected{% endif %}>
                        {{ preference.name }}
                    </option>
                {% endfor %}
            </select>
            <small class=\"form-text text-muted\">Maintenez la touche Ctrl (ou Cmd sur Mac) pour sélectionner plusieurs préférences.</small>
        </div>
        <button type=\"submit\" class=\"btn btn-success w-100\">Modifier</button>
    </form>
</div>
{% endblock %}", "edit_covoiturage.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/edit_covoiturage.html.twig");
    }
}
