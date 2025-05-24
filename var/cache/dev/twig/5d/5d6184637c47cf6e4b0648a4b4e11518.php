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

/* user/space.html.twig */
class __TwigTemplate_e921e3f8c9f6828100fb00d0a0e7b867 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/space.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/space.html.twig"));

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

        yield "Mon espace";
        
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
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Bienvenue dans votre espace, ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "pseudo", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

    <!-- Affichage des crédits -->
    <div class=\"text-center mb-4\">
        <h2 class=\"h5\" style=\"color: #155724;\">Vos crédits : <span class=\"badge bg-success\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "credits", [], "any", false, false, false, 11), "html", null, true);
        yield "</span></h2>
    </div>

    <!-- Section pour les covoiturages enregistrés en tant que chauffeur -->
    ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "isChauffeur", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Vos covoiturages enregistrés</h2>

        ";
            // line 19
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "covoituragesEnTantQueChauffeur", [], "any", false, false, false, 19)) > 0)) {
                // line 20
                yield "            <ul class=\"list-group mb-4\">
                ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "covoituragesEnTantQueChauffeur", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["covoiturage"]) {
                    // line 22
                    yield "                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <div>
                            <strong>Départ :</strong> ";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "adresseDepart", [], "any", false, false, false, 24), "html", null, true);
                    yield "<br>
                            <strong>Arrivée :</strong> ";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "adresseArrivee", [], "any", false, false, false, 25), "html", null, true);
                    yield "<br>
                            <strong>Date de départ :</strong> ";
                    // line 26
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "dateDepart", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true);
                    yield "<br>
                            <strong>Prix :</strong> ";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "prix", [], "any", false, false, false, 27), "html", null, true);
                    yield " crédits<br>
                            <strong>Places restantes :</strong> ";
                    // line 28
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "placesRestantes", [], "any", false, false, false, 28), "html", null, true);
                    yield "
                        </div>
                        <div>
                            <a href=\"";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                    yield "\" class=\"btn btn-success btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_annuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler ce covoiturage ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("annuler_covoiturage_" . CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "id", [], "any", false, false, false, 33))), "html", null, true);
                    yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                            </form>
                        </div>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['covoiturage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                yield "            </ul>
            <a href=\"";
                // line 40
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_add");
                yield "\" class=\"btn btn-success w-100\">Ajouter un covoiturage</a>
        ";
            } else {
                // line 42
                yield "            <p class=\"text-muted\">Vous n'avez pas encore enregistré de covoiturage.</p>
        ";
            }
            // line 44
            yield "    </div>
    ";
        }
        // line 46
        yield "
    <!-- Section pour les covoiturages auxquels l'utilisateur participe -->
    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Covoiturages auxquels vous participez</h2>

        ";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "covoiturages", [], "any", false, false, false, 51)) > 0)) {
            // line 52
            yield "            <ul class=\"list-group mb-4\">
                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "covoiturages", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["covoiturage"]) {
                // line 54
                yield "                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <div>
                            <strong>Départ :</strong> ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "adresseDepart", [], "any", false, false, false, 56), "html", null, true);
                yield "<br>
                            <strong>Arrivée :</strong> ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "adresseArrivee", [], "any", false, false, false, 57), "html", null, true);
                yield "<br>
                            <strong>Date de départ :</strong> ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "dateDepart", [], "any", false, false, false, 58), "d/m/Y H:i"), "html", null, true);
                yield "<br>
                            <strong>Prix :</strong> ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "prix", [], "any", false, false, false, 59), "html", null, true);
                yield " crédits
                        </div>
                        <div>
                            <form method=\"post\" action=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_annuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler votre participation à ce covoiturage ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("annuler_covoiturage_" . CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "id", [], "any", false, false, false, 63))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                            </form>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['covoiturage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "            </ul>
        ";
        } else {
            // line 71
            yield "            <p class=\"text-muted\">Vous ne participez à aucun covoiturage pour le moment.</p>
        ";
        }
        // line 73
        yield "
        <!-- Bouton pour accéder à l'historique des covoiturages -->
        <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_historique");
        yield "\" class=\"btn btn-success w-100\">
            Voir l'historique de vos covoiturages
        </a>
    </div>

    <!-- Section pour les véhicules enregistrés -->
    ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "isChauffeur", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Vos véhicules enregistrés</h2>

        ";
            // line 85
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "vehicules", [], "any", false, false, false, 85)) > 0)) {
                // line 86
                yield "            <ul class=\"list-group mb-4\">
                ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "vehicules", [], "any", false, false, false, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
                    // line 88
                    yield "                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <div>
                            <strong>Marque :</strong> ";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 90), "html", null, true);
                    yield "<br>
                            <strong>Modèle :</strong> ";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 91), "html", null, true);
                    yield "<br>
                            <strong>Couleur :</strong> ";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "couleur", [], "any", false, false, false, 92), "html", null, true);
                    yield "<br>
                            <strong>Immatriculation :</strong> ";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 93), "html", null, true);
                    yield "<br>
                            <strong>Énergie :</strong> ";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "energie", [], "any", false, false, false, 94), "html", null, true);
                    yield "<br>
                            <strong>Places disponibles :</strong> ";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "placesDispo", [], "any", false, false, false, 95), "html", null, true);
                    yield "
                        </div>
                        <div>
                            <a href=\"";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_vehicle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 98)]), "html", null, true);
                    yield "\" class=\"btn btn-success btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete_vehicle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_vehicle_" . CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 100))), "html", null, true);
                    yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['vehicule'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                yield "            </ul>
        ";
            } else {
                // line 108
                yield "            <p class=\"text-muted\">Vous n'avez pas encore enregistré de véhicule.</p>
        ";
            }
            // line 110
            yield "
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Ajouter un véhicule</h2>
        <form method=\"post\" action=\"";
            // line 112
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_add_vehicle");
            yield "\">
            <div class=\"mb-3\">
                <label for=\"immatriculation\" class=\"form-label\" style=\"color: #155724;\">Plaque d'immatriculation</label>
                <input type=\"text\" name=\"immatriculation\" id=\"immatriculation\" class=\"form-control\" placeholder=\"Ex : AB-123-CD\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"datePremiereImmatriculation\" class=\"form-label\" style=\"color: #155724;\">Date de première immatriculation</label>
                <input type=\"date\" name=\"datePremiereImmatriculation\" id=\"datePremiereImmatriculation\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"marque\" class=\"form-label\" style=\"color: #155724;\">Marque</label>
                <input type=\"text\" name=\"marque\" id=\"marque\" class=\"form-control\" placeholder=\"Ex : Renault\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"modele\" class=\"form-label\" style=\"color: #155724;\">Modèle</label>
                <input type=\"text\" name=\"modele\" id=\"modele\" class=\"form-control\" placeholder=\"Ex : Clio\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"couleur\" class=\"form-label\" style=\"color: #155724;\">Couleur</label>
                <input type=\"text\" name=\"couleur\" id=\"couleur\" class=\"form-control\" placeholder=\"Ex : Rouge\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"energie\" class=\"form-label\" style=\"color: #155724;\">Énergie</label>
                <select name=\"energie\" id=\"energie\" class=\"form-select\" required>
                    <option value=\"essence\">Essence</option>
                    <option value=\"diesel\">Diesel</option>
                    <option value=\"electrique\">Électrique</option>
                </select>
            </div>
            <div class=\"mb-3\">
                <label for=\"placesDispo\" class=\"form-label\" style=\"color: #155724;\">Nombre de places disponibles</label>
                <input type=\"number\" name=\"placesDispo\" id=\"placesDispo\" class=\"form-control\" min=\"1\" max=\"8\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter un véhicule</button>
        </form>
    </div>
    ";
        }
        // line 149
        yield "
    <!-- Section pour les préférences enregistrées -->
    ";
        // line 151
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "isChauffeur", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 152
            yield "    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Vos préférences enregistrées</h2>

        ";
            // line 155
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "preferences", [], "any", false, false, false, 155)) > 0)) {
                // line 156
                yield "            <ul class=\"list-group mb-4\">
                ";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "preferences", [], "any", false, false, false, 157));
                foreach ($context['_seq'] as $context["_key"] => $context["preference"]) {
                    // line 158
                    yield "                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <div>
                            <strong>Nom :</strong> ";
                    // line 160
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "name", [], "any", false, false, false, 160), "html", null, true);
                    yield "<br>
                        </div>
                        <div>
                            <a href=\"";
                    // line 163
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_preferences", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "id", [], "any", false, false, false, 163)]), "html", null, true);
                    yield "\" class=\"btn btn-success btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"";
                    // line 164
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete_preference", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "id", [], "any", false, false, false, 164)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette préférence ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_preference_" . CoreExtension::getAttribute($this->env, $this->source, $context["preference"], "id", [], "any", false, false, false, 165))), "html", null, true);
                    yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['preference'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                yield "            </ul>
        ";
            } else {
                // line 173
                yield "            <p class=\"text-muted\">Vous n'avez pas encore enregistré de préférences.</p>
        ";
            }
            // line 175
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_preferences");
            yield "\" class=\"btn btn-success w-100\">Ajouter une préférence</a>
    </div>
    ";
        }
        // line 178
        yield "
    <!-- Section pour gérer les rôles -->
    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Votre rôle</h2>
        <form method=\"post\" action=\"\">
            <div class=\"mb-3\">
                <label for=\"role\" class=\"form-label\" style=\"color: #155724;\">Sélectionnez votre rôle :</label>
                <select name=\"role\" id=\"role\" class=\"form-select\" required>
                    <option value=\"passager\" ";
        // line 186
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186), "isPassager", [], "any", false, false, false, 186) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186), "isChauffeur", [], "any", false, false, false, 186))) {
            yield "selected";
        }
        yield ">Passager</option>
                    <option value=\"chauffeur\" ";
        // line 187
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "user", [], "any", false, false, false, 187), "isChauffeur", [], "any", false, false, false, 187) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "user", [], "any", false, false, false, 187), "isPassager", [], "any", false, false, false, 187))) {
            yield "selected";
        }
        yield ">Chauffeur</option>
                    <option value=\"passager_chauffeur\" ";
        // line 188
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "isPassager", [], "any", false, false, false, 188) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "isChauffeur", [], "any", false, false, false, 188))) {
            yield "selected";
        }
        yield ">Passager & Chauffeur</option>
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Mettre à jour mon rôle</button>
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
        return "user/space.html.twig";
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
        return array (  475 => 188,  469 => 187,  463 => 186,  453 => 178,  446 => 175,  442 => 173,  438 => 171,  426 => 165,  422 => 164,  418 => 163,  412 => 160,  408 => 158,  404 => 157,  401 => 156,  399 => 155,  394 => 152,  392 => 151,  388 => 149,  348 => 112,  344 => 110,  340 => 108,  336 => 106,  324 => 100,  320 => 99,  316 => 98,  310 => 95,  306 => 94,  302 => 93,  298 => 92,  294 => 91,  290 => 90,  286 => 88,  282 => 87,  279 => 86,  277 => 85,  272 => 82,  270 => 81,  261 => 75,  257 => 73,  253 => 71,  249 => 69,  237 => 63,  233 => 62,  227 => 59,  223 => 58,  219 => 57,  215 => 56,  211 => 54,  207 => 53,  204 => 52,  202 => 51,  195 => 46,  191 => 44,  187 => 42,  182 => 40,  179 => 39,  167 => 33,  163 => 32,  159 => 31,  153 => 28,  149 => 27,  145 => 26,  141 => 25,  137 => 24,  133 => 22,  129 => 21,  126 => 20,  124 => 19,  119 => 16,  117 => 15,  110 => 11,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon espace{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h1 class=\"text-center mb-4\" style=\"color: #155724;\">Bienvenue dans votre espace, {{ app.user.pseudo }}</h1>

    <!-- Affichage des crédits -->
    <div class=\"text-center mb-4\">
        <h2 class=\"h5\" style=\"color: #155724;\">Vos crédits : <span class=\"badge bg-success\">{{ app.user.credits }}</span></h2>
    </div>

    <!-- Section pour les covoiturages enregistrés en tant que chauffeur -->
    {% if app.user.isChauffeur %}
    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Vos covoiturages enregistrés</h2>

        {% if app.user.covoituragesEnTantQueChauffeur|length > 0 %}
            <ul class=\"list-group mb-4\">
                {% for covoiturage in app.user.covoituragesEnTantQueChauffeur %}
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <div>
                            <strong>Départ :</strong> {{ covoiturage.adresseDepart }}<br>
                            <strong>Arrivée :</strong> {{ covoiturage.adresseArrivee }}<br>
                            <strong>Date de départ :</strong> {{ covoiturage.dateDepart|date('d/m/Y H:i') }}<br>
                            <strong>Prix :</strong> {{ covoiturage.prix }} crédits<br>
                            <strong>Places restantes :</strong> {{ covoiturage.placesRestantes }}
                        </div>
                        <div>
                            <a href=\"{{ path('app_covoiturage_edit', { id: covoiturage.id }) }}\" class=\"btn btn-success btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('app_covoiturage_annuler', { id: covoiturage.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler ce covoiturage ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('annuler_covoiturage_' ~ covoiturage.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                            </form>
                        </div>
                    </li>
                {% endfor %}
            </ul>
            <a href=\"{{ path('app_covoiturage_add') }}\" class=\"btn btn-success w-100\">Ajouter un covoiturage</a>
        {% else %}
            <p class=\"text-muted\">Vous n'avez pas encore enregistré de covoiturage.</p>
        {% endif %}
    </div>
    {% endif %}

    <!-- Section pour les covoiturages auxquels l'utilisateur participe -->
    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Covoiturages auxquels vous participez</h2>

        {% if app.user.covoiturages|length > 0 %}
            <ul class=\"list-group mb-4\">
                {% for covoiturage in app.user.covoiturages %}
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <div>
                            <strong>Départ :</strong> {{ covoiturage.adresseDepart }}<br>
                            <strong>Arrivée :</strong> {{ covoiturage.adresseArrivee }}<br>
                            <strong>Date de départ :</strong> {{ covoiturage.dateDepart|date('d/m/Y H:i') }}<br>
                            <strong>Prix :</strong> {{ covoiturage.prix }} crédits
                        </div>
                        <div>
                            <form method=\"post\" action=\"{{ path('app_covoiturage_annuler', { id: covoiturage.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler votre participation à ce covoiturage ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('annuler_covoiturage_' ~ covoiturage.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                            </form>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <p class=\"text-muted\">Vous ne participez à aucun covoiturage pour le moment.</p>
        {% endif %}

        <!-- Bouton pour accéder à l'historique des covoiturages -->
        <a href=\"{{ path('app_covoiturage_historique') }}\" class=\"btn btn-success w-100\">
            Voir l'historique de vos covoiturages
        </a>
    </div>

    <!-- Section pour les véhicules enregistrés -->
    {% if app.user.isChauffeur %}
    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Vos véhicules enregistrés</h2>

        {% if app.user.vehicules|length > 0 %}
            <ul class=\"list-group mb-4\">
                {% for vehicule in app.user.vehicules %}
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <div>
                            <strong>Marque :</strong> {{ vehicule.marque }}<br>
                            <strong>Modèle :</strong> {{ vehicule.modele }}<br>
                            <strong>Couleur :</strong> {{ vehicule.couleur }}<br>
                            <strong>Immatriculation :</strong> {{ vehicule.immatriculation }}<br>
                            <strong>Énergie :</strong> {{ vehicule.energie }}<br>
                            <strong>Places disponibles :</strong> {{ vehicule.placesDispo }}
                        </div>
                        <div>
                            <a href=\"{{ path('app_user_edit_vehicle', { id: vehicule.id }) }}\" class=\"btn btn-success btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('app_user_delete_vehicle', { id: vehicule.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_vehicle_' ~ vehicule.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <p class=\"text-muted\">Vous n'avez pas encore enregistré de véhicule.</p>
        {% endif %}

        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Ajouter un véhicule</h2>
        <form method=\"post\" action=\"{{ path('app_user_add_vehicle') }}\">
            <div class=\"mb-3\">
                <label for=\"immatriculation\" class=\"form-label\" style=\"color: #155724;\">Plaque d'immatriculation</label>
                <input type=\"text\" name=\"immatriculation\" id=\"immatriculation\" class=\"form-control\" placeholder=\"Ex : AB-123-CD\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"datePremiereImmatriculation\" class=\"form-label\" style=\"color: #155724;\">Date de première immatriculation</label>
                <input type=\"date\" name=\"datePremiereImmatriculation\" id=\"datePremiereImmatriculation\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"marque\" class=\"form-label\" style=\"color: #155724;\">Marque</label>
                <input type=\"text\" name=\"marque\" id=\"marque\" class=\"form-control\" placeholder=\"Ex : Renault\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"modele\" class=\"form-label\" style=\"color: #155724;\">Modèle</label>
                <input type=\"text\" name=\"modele\" id=\"modele\" class=\"form-control\" placeholder=\"Ex : Clio\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"couleur\" class=\"form-label\" style=\"color: #155724;\">Couleur</label>
                <input type=\"text\" name=\"couleur\" id=\"couleur\" class=\"form-control\" placeholder=\"Ex : Rouge\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"energie\" class=\"form-label\" style=\"color: #155724;\">Énergie</label>
                <select name=\"energie\" id=\"energie\" class=\"form-select\" required>
                    <option value=\"essence\">Essence</option>
                    <option value=\"diesel\">Diesel</option>
                    <option value=\"electrique\">Électrique</option>
                </select>
            </div>
            <div class=\"mb-3\">
                <label for=\"placesDispo\" class=\"form-label\" style=\"color: #155724;\">Nombre de places disponibles</label>
                <input type=\"number\" name=\"placesDispo\" id=\"placesDispo\" class=\"form-control\" min=\"1\" max=\"8\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter un véhicule</button>
        </form>
    </div>
    {% endif %}

    <!-- Section pour les préférences enregistrées -->
    {% if app.user.isChauffeur %}
    <div class=\"card p-4 shadow-sm border-0 mt-4\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Vos préférences enregistrées</h2>

        {% if app.user.preferences|length > 0 %}
            <ul class=\"list-group mb-4\">
                {% for preference in app.user.preferences %}
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <div>
                            <strong>Nom :</strong> {{ preference.name }}<br>
                        </div>
                        <div>
                            <a href=\"{{ path('app_user_preferences', { id: preference.id }) }}\" class=\"btn btn-success btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('app_user_delete_preference', { id: preference.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette préférence ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_preference_' ~ preference.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <p class=\"text-muted\">Vous n'avez pas encore enregistré de préférences.</p>
        {% endif %}
        <a href=\"{{ path('app_user_preferences') }}\" class=\"btn btn-success w-100\">Ajouter une préférence</a>
    </div>
    {% endif %}

    <!-- Section pour gérer les rôles -->
    <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\">
        <h2 class=\"h5 mb-4\" style=\"color: #155724;\">Votre rôle</h2>
        <form method=\"post\" action=\"\">
            <div class=\"mb-3\">
                <label for=\"role\" class=\"form-label\" style=\"color: #155724;\">Sélectionnez votre rôle :</label>
                <select name=\"role\" id=\"role\" class=\"form-select\" required>
                    <option value=\"passager\" {% if app.user.isPassager and not app.user.isChauffeur %}selected{% endif %}>Passager</option>
                    <option value=\"chauffeur\" {% if app.user.isChauffeur and not app.user.isPassager %}selected{% endif %}>Chauffeur</option>
                    <option value=\"passager_chauffeur\" {% if app.user.isPassager and app.user.isChauffeur %}selected{% endif %}>Passager & Chauffeur</option>
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-success w-100\">Mettre à jour mon rôle</button>
        </form>
    </div>
</div>
{% endblock %}", "user/space.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/user/space.html.twig");
    }
}
