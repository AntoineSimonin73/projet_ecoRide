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

/* home.html.twig */
class __TwigTemplate_6567be168f2cb5ea4c110d1b2ada8577 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

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

        yield "Accueil - EcoRide";
        
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
        yield "    <header class=\"py-5\">
        <div class=\"container\">
            <h1 class=\"text-center mb-5\" style=\"color: #155724;\">Partageons la route, préservons la planète !</h1> <!-- Texte vert foncé -->
            <div class=\"row align-items-center\">
                <!-- Formulaire -->
                <div class=\"col-md-6\">
                    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\"> <!-- Fond gris clair -->
                        <h2 class=\"h5 mb-4 text-center\" style=\"color: #155724;\">Rechercher un covoiturage</h2>
                        <form action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturages");
        yield "\" method=\"get\">
                            <div class=\"mb-3\">
                                <label for=\"adresseDepart\" class=\"form-label\">De</label>
                                <input type=\"text\" id=\"adresseDepart\" name=\"adresseDepart\" class=\"form-control\" placeholder=\"Ville de départ\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"adresseArrivee\" class=\"form-label\">À</label>
                                <input type=\"text\" id=\"adresseArrivee\" name=\"adresseArrivee\" class=\"form-control\" placeholder=\"Ville d'arrivée\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"dateDepart\" class=\"form-label\">Date</label>
                                <input type=\"date\" id=\"dateDepart\" name=\"dateDepart\" class=\"form-control\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success w-100\">Rechercher</button> <!-- Bouton vert -->
                        </form>
                    </div>
                </div>
                <!-- Image -->
                <div class=\"col-md-6\">
                    <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/accueilCovoit.png"), "html", null, true);
        yield "\" alt=\"EcoRide\" class=\"img-fluid rounded shadow-sm\">
                </div>
            </div>
        </div>
    </header>
    <main class=\"py-5\">
        <div class=\"container\">
            <h2 class=\"text-center mb-4\" style=\"color: #155724; font-size: 2.3rem;\">L'entreprise EcoRide</h2> <!-- Titre centré -->
            <div class=\"row align-items-center\">
                <!-- Image à gauche -->
                <div class=\"col-md-6\">
                    <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/accueilEntreprise.png"), "html", null, true);
        yield "\" alt=\"EcoRide\" class=\"img-fluid rounded shadow-sm\">
                </div>
                <!-- Paragraphe à droite -->
                <div class=\"col-md-6 d-flex align-items-center\">
                    <p class=\"card p-4 shadow-sm border-0\" style=\"color: #155724; line-height: 1.8; font-size: 1.3rem; background-color: #f8f9fa;\">
                        EcoRide est une jeune startup française engagée dans la transition écologique créée en 2020.<br><br>
                        Notre mission : réduire l’empreinte carbone des déplacements quotidiens tout en facilitant le covoiturage entre particuliers.<br><br>
                        En mettant en relation des conducteurs et des passagers à la recherche de trajets partagés,
                        EcoRide offre une alternative économique, conviviale et respectueuse de l’environnement.
                    </p>
                </div>
            </div>
        </div>
    </main>
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
        return "home.html.twig";
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
        return array (  146 => 44,  132 => 33,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - EcoRide{% endblock %}

{% block body %}
    <header class=\"py-5\">
        <div class=\"container\">
            <h1 class=\"text-center mb-5\" style=\"color: #155724;\">Partageons la route, préservons la planète !</h1> <!-- Texte vert foncé -->
            <div class=\"row align-items-center\">
                <!-- Formulaire -->
                <div class=\"col-md-6\">
                    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\"> <!-- Fond gris clair -->
                        <h2 class=\"h5 mb-4 text-center\" style=\"color: #155724;\">Rechercher un covoiturage</h2>
                        <form action=\"{{ path('app_covoiturages') }}\" method=\"get\">
                            <div class=\"mb-3\">
                                <label for=\"adresseDepart\" class=\"form-label\">De</label>
                                <input type=\"text\" id=\"adresseDepart\" name=\"adresseDepart\" class=\"form-control\" placeholder=\"Ville de départ\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"adresseArrivee\" class=\"form-label\">À</label>
                                <input type=\"text\" id=\"adresseArrivee\" name=\"adresseArrivee\" class=\"form-control\" placeholder=\"Ville d'arrivée\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"dateDepart\" class=\"form-label\">Date</label>
                                <input type=\"date\" id=\"dateDepart\" name=\"dateDepart\" class=\"form-control\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success w-100\">Rechercher</button> <!-- Bouton vert -->
                        </form>
                    </div>
                </div>
                <!-- Image -->
                <div class=\"col-md-6\">
                    <img src=\"{{ asset('images/accueilCovoit.png') }}\" alt=\"EcoRide\" class=\"img-fluid rounded shadow-sm\">
                </div>
            </div>
        </div>
    </header>
    <main class=\"py-5\">
        <div class=\"container\">
            <h2 class=\"text-center mb-4\" style=\"color: #155724; font-size: 2.3rem;\">L'entreprise EcoRide</h2> <!-- Titre centré -->
            <div class=\"row align-items-center\">
                <!-- Image à gauche -->
                <div class=\"col-md-6\">
                    <img src=\"{{ asset('images/accueilEntreprise.png') }}\" alt=\"EcoRide\" class=\"img-fluid rounded shadow-sm\">
                </div>
                <!-- Paragraphe à droite -->
                <div class=\"col-md-6 d-flex align-items-center\">
                    <p class=\"card p-4 shadow-sm border-0\" style=\"color: #155724; line-height: 1.8; font-size: 1.3rem; background-color: #f8f9fa;\">
                        EcoRide est une jeune startup française engagée dans la transition écologique créée en 2020.<br><br>
                        Notre mission : réduire l’empreinte carbone des déplacements quotidiens tout en facilitant le covoiturage entre particuliers.<br><br>
                        En mettant en relation des conducteurs et des passagers à la recherche de trajets partagés,
                        EcoRide offre une alternative économique, conviviale et respectueuse de l’environnement.
                    </p>
                </div>
            </div>
        </div>
    </main>
{% endblock %}", "home.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/home.html.twig");
    }
}
