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

/* covoiturages.html.twig */
class __TwigTemplate_b1121b0dc393f569a611025ee47702e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "covoiturages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "covoiturages.html.twig"));

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

        yield "Covoiturages disponibles - EcoRide";
        
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
    <h1 class=\"text-center mb-5\" style=\"color: #155724;\">Rechercher un covoiturage</h1>

    <!-- Formulaire de recherche obligatoire -->
    <form method=\"get\" class=\"mb-4\">
        <div class=\"row\">
            <div class=\"col-md-4 mb-3\">
                <label for=\"adresseDepart\" class=\"form-label\" style=\"color: #155724;\">Ville de départ</label>
                <input type=\"text\" name=\"adresseDepart\" id=\"adresseDepart\" class=\"form-control\" placeholder=\"Ex : Paris\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", ["adresseDepart"], "method", false, false, false, 14), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label for=\"adresseArrivee\" class=\"form-label\" style=\"color: #155724;\">Ville d'arrivée</label>
                <input type=\"text\" name=\"adresseArrivee\" id=\"adresseArrivee\" class=\"form-control\" placeholder=\"Ex : Lyon\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "get", ["adresseArrivee"], "method", false, false, false, 18), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label for=\"dateDepart\" class=\"form-label\" style=\"color: #155724;\">Date de départ</label>
                <input type=\"date\" name=\"dateDepart\" id=\"dateDepart\" class=\"form-control\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "query", [], "any", false, false, false, 22), "get", ["dateDepart"], "method", false, false, false, 22), "html", null, true);
        yield "\" required>
            </div>
        </div>

        <!-- Filtres avancés : affichés uniquement si une recherche est effectuée -->
        ";
        // line 27
        if ((($tmp = (isset($context["hasFilter"]) || array_key_exists("hasFilter", $context) ? $context["hasFilter"] : (function () { throw new RuntimeError('Variable "hasFilter" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "        <div class=\"row\">
            <div class=\"col-md-3 mb-3\">
                <label class=\"form-label\" style=\"color: #155724;\">Voyage écologique</label>
                <select name=\"ecologique\" class=\"form-select\">
                    <option value=\"\">Indifférent</option>
                    <option value=\"1\" ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "query", [], "any", false, false, false, 33), "get", ["ecologique"], "method", false, false, false, 33) == "1")) {
                yield "selected";
            }
            yield ">Oui</option>
                    <option value=\"0\" ";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "query", [], "any", false, false, false, 34), "get", ["ecologique"], "method", false, false, false, 34) == "0")) {
                yield "selected";
            }
            yield ">Non</option>
                </select>
            </div>
            <div class=\"col-md-3 mb-3\">
                <label for=\"prixMax\" class=\"form-label\" style=\"color: #155724;\">Prix maximum (Crédits)</label>
                <input type=\"number\" min=\"0\" name=\"prixMax\" id=\"prixMax\" class=\"form-control\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "query", [], "any", false, false, false, 39), "get", ["prixMax"], "method", false, false, false, 39), "html", null, true);
            yield "\">
            </div>
            <div class=\"col-md-3 mb-3\">
                <label for=\"dureeMax\" class=\"form-label\" style=\"color: #155724;\">Durée max (heures)</label>
                <input type=\"number\" min=\"0\" name=\"dureeMax\" id=\"dureeMax\" class=\"form-control\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "query", [], "any", false, false, false, 43), "get", ["dureeMax"], "method", false, false, false, 43), "html", null, true);
            yield "\">
            </div>
            <div class=\"col-md-3 mb-3\">
                <label for=\"noteMin\" class=\"form-label\" style=\"color: #155724;\">Note minimale</label>
                <select name=\"noteMin\" id=\"noteMin\" class=\"form-select\">
                    <option value=\"\">Indifférent</option>
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "query", [], "any", false, false, false, 50), "get", ["noteMin"], "method", false, false, false, 50) == $context["i"])) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "+</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                </select>
            </div>
        </div>
        ";
        }
        // line 56
        yield "
        <button type=\"submit\" class=\"btn btn-success w-100\">Rechercher</button>
    </form>

    <div class=\"row\">
        ";
        // line 61
        $context["hasFilter"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "query", [], "any", false, false, false, 61), "get", ["adresseDepart"], "method", false, false, false, 61) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "query", [], "any", false, false, false, 61), "get", ["adresseArrivee"], "method", false, false, false, 61)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "query", [], "any", false, false, false, 61), "get", ["dateDepart"], "method", false, false, false, 61));
        // line 62
        yield "        ";
        if ((($tmp = (isset($context["hasFilter"]) || array_key_exists("hasFilter", $context) ? $context["hasFilter"] : (function () { throw new RuntimeError('Variable "hasFilter" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["covoiturages"]) || array_key_exists("covoiturages", $context) ? $context["covoiturages"] : (function () { throw new RuntimeError('Variable "covoiturages" does not exist.', 63, $this->source); })()))) {
                // line 64
                yield "                <div class=\"text-center\" style=\"color: #155724;\">
                    Aucun covoiturage disponible pour les critères sélectionnés.<br>
                    ";
                // line 66
                if ((($tmp = (isset($context["prochaineDate"]) || array_key_exists("prochaineDate", $context) ? $context["prochaineDate"] : (function () { throw new RuntimeError('Variable "prochaineDate" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                        Prochain covoiturage disponible le <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["prochaineDate"]) || array_key_exists("prochaineDate", $context) ? $context["prochaineDate"] : (function () { throw new RuntimeError('Variable "prochaineDate" does not exist.', 67, $this->source); })()), "d/m/Y"), "html", null, true);
                    yield "</strong>.
                        <form method=\"get\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"adresseDepart\" value=\"";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "query", [], "any", false, false, false, 69), "get", ["adresseDepart"], "method", false, false, false, 69), "html", null, true);
                    yield "\">
                            <input type=\"hidden\" name=\"adresseArrivee\" value=\"";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "query", [], "any", false, false, false, 70), "get", ["adresseArrivee"], "method", false, false, false, 70), "html", null, true);
                    yield "\">
                            <input type=\"hidden\" name=\"dateDepart\" value=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["prochaineDate"]) || array_key_exists("prochaineDate", $context) ? $context["prochaineDate"] : (function () { throw new RuntimeError('Variable "prochaineDate" does not exist.', 71, $this->source); })()), "Y-m-d"), "html", null, true);
                    yield "\">
                            <button type=\"submit\" class=\"btn btn-link p-0 align-baseline\">Voir cette date</button>
                        </form>
                    ";
                }
                // line 75
                yield "                </div>
            ";
            } else {
                // line 77
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["covoiturages"]) || array_key_exists("covoiturages", $context) ? $context["covoiturages"] : (function () { throw new RuntimeError('Variable "covoiturages" does not exist.', 77, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["covoiturage"]) {
                    // line 78
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "placesRestantes", [], "any", false, false, false, 78) > 0)) {
                        // line 79
                        yield "                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card shadow-lg border-0 h-100\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <img src=\"";
                        // line 83
                        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "chauffeur", [], "any", false, true, false, 83), "photo", [], "any", true, true, false, 83) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "chauffeur", [], "any", false, false, false, 83), "photo", [], "any", false, false, false, 83))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "chauffeur", [], "any", false, false, false, 83), "photo", [], "any", false, false, false, 83))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-user.svg"), "html", null, true)));
                        yield "\" alt=\"Photo du chauffeur\" class=\"rounded-circle me-3\" width=\"56\" height=\"56\">
                                        <div>
                                            <strong>";
                        // line 85
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "chauffeur", [], "any", false, false, false, 85), "pseudo", [], "any", false, false, false, 85), "html", null, true);
                        yield "</strong><br>
                                            <span class=\"text-warning\">
                                                ";
                        // line 87
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 88
                            yield "                                                    ";
                            if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "chauffeur", [], "any", false, false, false, 88), "noteMoyenne", [], "any", false, false, false, 88))) {
                                // line 89
                                yield "                                                        ★
                                                    ";
                            } else {
                                // line 91
                                yield "                                                        ☆
                                                    ";
                            }
                            // line 93
                            yield "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 94
                        yield "                                            </span>
                                            <small>(";
                        // line 95
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "chauffeur", [], "any", false, true, false, 95), "noteMoyenne", [], "any", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "chauffeur", [], "any", false, false, false, 95), "noteMoyenne", [], "any", false, false, false, 95), 0)) : (0)), "html", null, true);
                        yield "/5)</small>
                                        </div>
                                    </div>
                                    <p class=\"mb-2\">
                                        <strong>Places restantes :</strong> ";
                        // line 99
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "placesRestantes", [], "any", false, false, false, 99), "html", null, true);
                        yield "<br>
                                        <strong>Prix :</strong> ";
                        // line 100
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "prix", [], "any", false, false, false, 100), "html", null, true);
                        yield " Crédits<br>
                                        <strong>Départ :</strong> ";
                        // line 101
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "dateDepart", [], "any", false, false, false, 101), "d/m/Y"), "html", null, true);
                        yield " à ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "heureDepart", [], "any", false, false, false, 101), "html", null, true);
                        yield "<br>
                                        <strong>Arrivée :</strong> ";
                        // line 102
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "dateArrivee", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
                        yield " à ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "heureArrivee", [], "any", false, false, false, 102), "html", null, true);
                        yield "<br>
                                        <strong>Écologique :</strong>
                                        ";
                        // line 104
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "vehicule", [], "any", false, false, false, 104), "energie", [], "any", false, false, false, 104) == "électrique")) {
                            // line 105
                            yield "                                            <span class=\"badge bg-success\">Oui</span>
                                        ";
                        } else {
                            // line 107
                            yield "                                            <span class=\"badge bg-secondary\">Non</span>
                                        ";
                        }
                        // line 109
                        yield "                                    </p>
                                    <a href=\"";
                        // line 110
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["covoiturage"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                        yield "\" class=\"btn btn-success w-100\">Détails</a>
                                </div>
                            </div>
                        </div>
                    ";
                    }
                    // line 115
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['covoiturage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                yield "            ";
            }
            // line 117
            yield "        ";
        }
        // line 118
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
        return "covoiturages.html.twig";
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
        return array (  353 => 118,  350 => 117,  347 => 116,  341 => 115,  333 => 110,  330 => 109,  326 => 107,  322 => 105,  320 => 104,  313 => 102,  307 => 101,  303 => 100,  299 => 99,  292 => 95,  289 => 94,  283 => 93,  279 => 91,  275 => 89,  272 => 88,  268 => 87,  263 => 85,  258 => 83,  252 => 79,  249 => 78,  244 => 77,  240 => 75,  233 => 71,  229 => 70,  225 => 69,  219 => 67,  217 => 66,  213 => 64,  210 => 63,  207 => 62,  205 => 61,  198 => 56,  192 => 52,  177 => 50,  173 => 49,  164 => 43,  157 => 39,  147 => 34,  141 => 33,  134 => 28,  132 => 27,  124 => 22,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Covoiturages disponibles - EcoRide{% endblock %}

{% block body %}
<div class=\"container py-5 main-content\">
    <h1 class=\"text-center mb-5\" style=\"color: #155724;\">Rechercher un covoiturage</h1>

    <!-- Formulaire de recherche obligatoire -->
    <form method=\"get\" class=\"mb-4\">
        <div class=\"row\">
            <div class=\"col-md-4 mb-3\">
                <label for=\"adresseDepart\" class=\"form-label\" style=\"color: #155724;\">Ville de départ</label>
                <input type=\"text\" name=\"adresseDepart\" id=\"adresseDepart\" class=\"form-control\" placeholder=\"Ex : Paris\" value=\"{{ app.request.query.get('adresseDepart') }}\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label for=\"adresseArrivee\" class=\"form-label\" style=\"color: #155724;\">Ville d'arrivée</label>
                <input type=\"text\" name=\"adresseArrivee\" id=\"adresseArrivee\" class=\"form-control\" placeholder=\"Ex : Lyon\" value=\"{{ app.request.query.get('adresseArrivee') }}\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label for=\"dateDepart\" class=\"form-label\" style=\"color: #155724;\">Date de départ</label>
                <input type=\"date\" name=\"dateDepart\" id=\"dateDepart\" class=\"form-control\" value=\"{{ app.request.query.get('dateDepart') }}\" required>
            </div>
        </div>

        <!-- Filtres avancés : affichés uniquement si une recherche est effectuée -->
        {% if hasFilter %}
        <div class=\"row\">
            <div class=\"col-md-3 mb-3\">
                <label class=\"form-label\" style=\"color: #155724;\">Voyage écologique</label>
                <select name=\"ecologique\" class=\"form-select\">
                    <option value=\"\">Indifférent</option>
                    <option value=\"1\" {% if app.request.query.get('ecologique') == '1' %}selected{% endif %}>Oui</option>
                    <option value=\"0\" {% if app.request.query.get('ecologique') == '0' %}selected{% endif %}>Non</option>
                </select>
            </div>
            <div class=\"col-md-3 mb-3\">
                <label for=\"prixMax\" class=\"form-label\" style=\"color: #155724;\">Prix maximum (Crédits)</label>
                <input type=\"number\" min=\"0\" name=\"prixMax\" id=\"prixMax\" class=\"form-control\" value=\"{{ app.request.query.get('prixMax') }}\">
            </div>
            <div class=\"col-md-3 mb-3\">
                <label for=\"dureeMax\" class=\"form-label\" style=\"color: #155724;\">Durée max (heures)</label>
                <input type=\"number\" min=\"0\" name=\"dureeMax\" id=\"dureeMax\" class=\"form-control\" value=\"{{ app.request.query.get('dureeMax') }}\">
            </div>
            <div class=\"col-md-3 mb-3\">
                <label for=\"noteMin\" class=\"form-label\" style=\"color: #155724;\">Note minimale</label>
                <select name=\"noteMin\" id=\"noteMin\" class=\"form-select\">
                    <option value=\"\">Indifférent</option>
                    {% for i in 1..5 %}
                        <option value=\"{{ i }}\" {% if app.request.query.get('noteMin') == i %}selected{% endif %}>{{ i }}+</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        {% endif %}

        <button type=\"submit\" class=\"btn btn-success w-100\">Rechercher</button>
    </form>

    <div class=\"row\">
        {% set hasFilter = app.request.query.get('adresseDepart') and app.request.query.get('adresseArrivee') and app.request.query.get('dateDepart') %}
        {% if hasFilter %}
            {% if covoiturages is empty %}
                <div class=\"text-center\" style=\"color: #155724;\">
                    Aucun covoiturage disponible pour les critères sélectionnés.<br>
                    {% if prochaineDate %}
                        Prochain covoiturage disponible le <strong>{{ prochaineDate|date('d/m/Y') }}</strong>.
                        <form method=\"get\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"adresseDepart\" value=\"{{ app.request.query.get('adresseDepart') }}\">
                            <input type=\"hidden\" name=\"adresseArrivee\" value=\"{{ app.request.query.get('adresseArrivee') }}\">
                            <input type=\"hidden\" name=\"dateDepart\" value=\"{{ prochaineDate|date('Y-m-d') }}\">
                            <button type=\"submit\" class=\"btn btn-link p-0 align-baseline\">Voir cette date</button>
                        </form>
                    {% endif %}
                </div>
            {% else %}
                {% for covoiturage in covoiturages %}
                    {% if covoiturage.placesRestantes > 0 %}
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card shadow-lg border-0 h-100\">
                                <div class=\"card-body\">
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
                                    <p class=\"mb-2\">
                                        <strong>Places restantes :</strong> {{ covoiturage.placesRestantes }}<br>
                                        <strong>Prix :</strong> {{ covoiturage.prix }} Crédits<br>
                                        <strong>Départ :</strong> {{ covoiturage.dateDepart|date('d/m/Y') }} à {{ covoiturage.heureDepart }}<br>
                                        <strong>Arrivée :</strong> {{ covoiturage.dateArrivee|date('d/m/Y') }} à {{ covoiturage.heureArrivee }}<br>
                                        <strong>Écologique :</strong>
                                        {% if covoiturage.vehicule.energie == 'électrique' %}
                                            <span class=\"badge bg-success\">Oui</span>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">Non</span>
                                        {% endif %}
                                    </p>
                                    <a href=\"{{ path('app_covoiturage_details', { id: covoiturage.id }) }}\" class=\"btn btn-success w-100\">Détails</a>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endif %}
    </div>
</div>
{% endblock %}", "covoiturages.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/covoiturages.html.twig");
    }
}
