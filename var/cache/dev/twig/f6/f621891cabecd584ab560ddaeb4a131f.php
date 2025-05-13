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

/* detailsCovoiturage.html.twig */
class __TwigTemplate_e1ac9e53347336a218266b648cbc2632 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detailsCovoiturage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detailsCovoiturage.html.twig"));

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

        yield "Détails du covoiturage - EcoRide";
        
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
        yield "<div class=\"container py-5 main-content\">
    <h1 class=\"text-center mb-5\" style=\"color: #155724;\">Détails du covoiturage</h1>

    <div class=\"card shadow-lg border-0\">
        <div class=\"card-body\">
            <!-- Informations principales -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Informations sur le voyage</h2>
            <p>
                <strong>Départ :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 14, $this->source); })()), "dateDepart", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 14, $this->source); })()), "heureDepart", [], "any", false, false, false, 14), "html", null, true);
        yield "<br>
                <strong>Arrivée :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 15, $this->source); })()), "dateArrivee", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 15, $this->source); })()), "heureArrivee", [], "any", false, false, false, 15), "html", null, true);
        yield "<br>
                <strong>Adresse de départ :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 16, $this->source); })()), "adresseDepart", [], "any", false, false, false, 16), "html", null, true);
        yield "<br>
                <strong>Adresse d'arrivée :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 17, $this->source); })()), "adresseArrivee", [], "any", false, false, false, 17), "html", null, true);
        yield "<br>
                <strong>Prix :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), "html", null, true);
        yield " Crédits<br>
                <strong>Places restantes :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 19, $this->source); })()), "placesRestantes", [], "any", false, false, false, 19), "html", null, true);
        yield "<br>
                <strong>Voyage écologique :</strong>
                ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 21, $this->source); })()), "vehicule", [], "any", false, false, false, 21), "energie", [], "any", false, false, false, 21) == "électrique")) {
            // line 22
            yield "                    <span class=\"badge bg-success\">Oui</span>
                ";
        } else {
            // line 24
            yield "                    <span class=\"badge bg-secondary\">Non</span>
                ";
        }
        // line 26
        yield "            </p>

            <!-- Informations sur le conducteur -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Informations sur le conducteur</h2>
            <div class=\"d-flex align-items-center mb-3\">
                <img src=\"";
        // line 31
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["covoiturage"] ?? null), "chauffeur", [], "any", false, true, false, 31), "photo", [], "any", true, true, false, 31) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 31, $this->source); })()), "chauffeur", [], "any", false, false, false, 31), "photo", [], "any", false, false, false, 31))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 31, $this->source); })()), "chauffeur", [], "any", false, false, false, 31), "photo", [], "any", false, false, false, 31))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-user.svg"), "html", null, true)));
        yield "\" alt=\"Photo du chauffeur\" class=\"rounded-circle me-3\" width=\"56\" height=\"56\">
                <div>
                    <strong>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 33, $this->source); })()), "chauffeur", [], "any", false, false, false, 33), "pseudo", [], "any", false, false, false, 33), "html", null, true);
        yield "</strong><br>
                    <span class=\"text-warning\">
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            yield "                            ";
            if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 36, $this->source); })()), "chauffeur", [], "any", false, false, false, 36), "noteMoyenne", [], "any", false, false, false, 36))) {
                // line 37
                yield "                                ★
                            ";
            } else {
                // line 39
                yield "                                ☆
                            ";
            }
            // line 41
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                    </span>
                    <small>(";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["covoiturage"] ?? null), "chauffeur", [], "any", false, true, false, 43), "noteMoyenne", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 43, $this->source); })()), "chauffeur", [], "any", false, false, false, 43), "noteMoyenne", [], "any", false, false, false, 43), 0)) : (0)), "html", null, true);
        yield "/5)</small>
                </div>
            </div>

            <!-- Avis du conducteur -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Avis sur le conducteur</h2>
            ";
        // line 49
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 49, $this->source); })()), "chauffeur", [], "any", false, false, false, 49), "avis", [], "any", false, false, false, 49))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                <ul class=\"list-group\">
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 51, $this->source); })()), "chauffeur", [], "any", false, false, false, 51), "avis", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 52
                yield "                        <li class=\"list-group-item\">
                            <strong>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "auteur", [], "any", false, false, false, 53), "pseudo", [], "any", false, false, false, 53), "html", null, true);
                yield "</strong> (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "note", [], "any", false, false, false, 53), "html", null, true);
                yield "/5) : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "commentaire", [], "any", false, false, false, 53), "html", null, true);
                yield "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                </ul>
            ";
        } else {
            // line 58
            yield "                <p>Aucun avis pour ce conducteur.</p>
            ";
        }
        // line 60
        yield "
            <!-- Informations sur le véhicule -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Informations sur le véhicule</h2>
            <p>
                <strong>Marque :</strong> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 64, $this->source); })()), "vehicule", [], "any", false, false, false, 64), "marque", [], "any", false, false, false, 64), "html", null, true);
        yield "<br>
                <strong>Modèle :</strong> ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 65, $this->source); })()), "vehicule", [], "any", false, false, false, 65), "modele", [], "any", false, false, false, 65), "html", null, true);
        yield "<br>
                <strong>Énergie :</strong> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 66, $this->source); })()), "vehicule", [], "any", false, false, false, 66), "energie", [], "any", false, false, false, 66), "html", null, true);
        yield "
            </p>

            <!-- Préférences du covoiturage -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Préférences du covoiturage</h2>
            ";
        // line 71
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 71, $this->source); })()), "preferences", [], "any", false, false, false, 71)) > 0)) {
            // line 72
            yield "                <ul class=\"list-group\">
                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 73, $this->source); })()), "preferences", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["preference"]) {
                // line 74
                yield "                        <li class=\"list-group-item d-flex align-items-center\">
                            <i class=\"bi bi-check-circle-fill text-success me-2\"></i> <!-- Icône pour rendre l'affichage plus visuel -->
                            ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "name", [], "any", false, false, false, 76), "html", null, true);
                yield "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['preference'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                </ul>
            ";
        } else {
            // line 81
            yield "                <p class=\"text-muted\">Aucune préférence spécifiée pour ce covoiturage.</p>
            ";
        }
        // line 83
        yield "
            <!-- Bouton Participer -->
            ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 86, $this->source); })()), "placesRestantes", [], "any", false, false, false, 86) > 0) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "credits", [], "any", false, false, false, 86) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 86, $this->source); })()), "prix", [], "any", false, false, false, 86)))) {
                // line 87
                yield "                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_participer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("participer" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88))), "html", null, true);
                yield "\">
                        <button type=\"submit\" class=\"btn btn-success w-100\" onclick=\"return confirm('Êtes-vous sûr de vouloir participer à ce covoiturage ? Cela coûtera ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["covoiturage"]) || array_key_exists("covoiturage", $context) ? $context["covoiturage"] : (function () { throw new RuntimeError('Variable "covoiturage" does not exist.', 89, $this->source); })()), "prix", [], "any", false, false, false, 89), "html", null, true);
                yield " crédits.')\">
                            Participer
                        </button>
                    </form>
                ";
            } else {
                // line 94
                yield "                    <p class=\"text-danger mt-4\">Vous n'avez pas assez de crédits ou il n'y a plus de places disponibles.</p>
                ";
            }
            // line 96
            yield "            ";
        } else {
            // line 97
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-success w-100 mt-4\" style=\"background-color: #155724; border-color: #155724; color: white;\">Connectez-vous pour participer</a>
                <a href=\"";
            // line 98
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-secondary w-100 mt-2\" style=\"background-color: #6c757d; border-color: #6c757d; color: white;\">Créer un compte</a>
            ";
        }
        // line 100
        yield "        </div>
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
        return "detailsCovoiturage.html.twig";
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
        return array (  327 => 100,  322 => 98,  317 => 97,  314 => 96,  310 => 94,  302 => 89,  298 => 88,  293 => 87,  290 => 86,  288 => 85,  284 => 83,  280 => 81,  276 => 79,  267 => 76,  263 => 74,  259 => 73,  256 => 72,  254 => 71,  246 => 66,  242 => 65,  238 => 64,  232 => 60,  228 => 58,  224 => 56,  211 => 53,  208 => 52,  204 => 51,  201 => 50,  199 => 49,  190 => 43,  187 => 42,  181 => 41,  177 => 39,  173 => 37,  170 => 36,  166 => 35,  161 => 33,  156 => 31,  149 => 26,  145 => 24,  141 => 22,  139 => 21,  134 => 19,  130 => 18,  126 => 17,  122 => 16,  116 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du covoiturage - EcoRide{% endblock %}

{% block body %}
<div class=\"container py-5 main-content\">
    <h1 class=\"text-center mb-5\" style=\"color: #155724;\">Détails du covoiturage</h1>

    <div class=\"card shadow-lg border-0\">
        <div class=\"card-body\">
            <!-- Informations principales -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Informations sur le voyage</h2>
            <p>
                <strong>Départ :</strong> {{ covoiturage.dateDepart|date('d/m/Y') }} à {{ covoiturage.heureDepart }}<br>
                <strong>Arrivée :</strong> {{ covoiturage.dateArrivee|date('d/m/Y') }} à {{ covoiturage.heureArrivee }}<br>
                <strong>Adresse de départ :</strong> {{ covoiturage.adresseDepart }}<br>
                <strong>Adresse d'arrivée :</strong> {{ covoiturage.adresseArrivee }}<br>
                <strong>Prix :</strong> {{ covoiturage.prix }} Crédits<br>
                <strong>Places restantes :</strong> {{ covoiturage.placesRestantes }}<br>
                <strong>Voyage écologique :</strong>
                {% if covoiturage.vehicule.energie == 'électrique' %}
                    <span class=\"badge bg-success\">Oui</span>
                {% else %}
                    <span class=\"badge bg-secondary\">Non</span>
                {% endif %}
            </p>

            <!-- Informations sur le conducteur -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Informations sur le conducteur</h2>
            <div class=\"d-flex align-items-center mb-3\">
                <img src=\"{{ covoiturage.chauffeur.photo is defined and covoiturage.chauffeur.photo ? asset('uploads/photos/' ~ covoiturage.chauffeur.photo) : asset('images/default-user.svg') }}\" alt=\"Photo du chauffeur\" class=\"rounded-circle me-3\" width=\"56\" height=\"56\">
                <div>
                    <strong>{{ covoiturage.chauffeur.pseudo }}</strong><br>
                    <span class=\"text-warning\">
                        {% for i in 1..5 %}
                            {% if i <= covoiturage.chauffeur.noteMoyenne %}
                                ★
                            {% else %}
                                ☆
                            {% endif %}
                        {% endfor %}
                    </span>
                    <small>({{ covoiturage.chauffeur.noteMoyenne|default(0) }}/5)</small>
                </div>
            </div>

            <!-- Avis du conducteur -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Avis sur le conducteur</h2>
            {% if covoiturage.chauffeur.avis is not empty %}
                <ul class=\"list-group\">
                    {% for avis in covoiturage.chauffeur.avis %}
                        <li class=\"list-group-item\">
                            <strong>{{ avis.auteur.pseudo }}</strong> ({{ avis.note }}/5) : {{ avis.commentaire }}
                        </li>
                    {% endfor %}
                </ul>
            {% else %}
                <p>Aucun avis pour ce conducteur.</p>
            {% endif %}

            <!-- Informations sur le véhicule -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Informations sur le véhicule</h2>
            <p>
                <strong>Marque :</strong> {{ covoiturage.vehicule.marque }}<br>
                <strong>Modèle :</strong> {{ covoiturage.vehicule.modele }}<br>
                <strong>Énergie :</strong> {{ covoiturage.vehicule.energie }}
            </p>

            <!-- Préférences du covoiturage -->
            <h2 class=\"mb-4\" style=\"color: #155724; font-size: 1.8rem;\">Préférences du covoiturage</h2>
            {% if covoiturage.preferences|length > 0 %}
                <ul class=\"list-group\">
                    {% for preference in covoiturage.preferences %}
                        <li class=\"list-group-item d-flex align-items-center\">
                            <i class=\"bi bi-check-circle-fill text-success me-2\"></i> <!-- Icône pour rendre l'affichage plus visuel -->
                            {{ preference.name }}
                        </li>
                    {% endfor %}
                </ul>
            {% else %}
                <p class=\"text-muted\">Aucune préférence spécifiée pour ce covoiturage.</p>
            {% endif %}

            <!-- Bouton Participer -->
            {% if app.user %}
                {% if covoiturage.placesRestantes > 0 and app.user.credits >= covoiturage.prix %}
                    <form method=\"post\" action=\"{{ path('app_covoiturage_participer', { id: covoiturage.id }) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('participer' ~ covoiturage.id) }}\">
                        <button type=\"submit\" class=\"btn btn-success w-100\" onclick=\"return confirm('Êtes-vous sûr de vouloir participer à ce covoiturage ? Cela coûtera {{ covoiturage.prix }} crédits.')\">
                            Participer
                        </button>
                    </form>
                {% else %}
                    <p class=\"text-danger mt-4\">Vous n'avez pas assez de crédits ou il n'y a plus de places disponibles.</p>
                {% endif %}
            {% else %}
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-success w-100 mt-4\" style=\"background-color: #155724; border-color: #155724; color: white;\">Connectez-vous pour participer</a>
                <a href=\"{{ path('app_register') }}\" class=\"btn btn-secondary w-100 mt-2\" style=\"background-color: #6c757d; border-color: #6c757d; color: white;\">Créer un compte</a>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "detailsCovoiturage.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/detailsCovoiturage.html.twig");
    }
}
