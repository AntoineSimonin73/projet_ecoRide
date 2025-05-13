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

/* blocDeCode/header.html.twig */
class __TwigTemplate_b504c917f2b875766eb068096c6f8b07 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blocDeCode/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blocDeCode/header.html.twig"));

        // line 1
        yield "<header class=\"border-bottom\" style=\"background-color: #d4edda;\"> <!-- Fond vert léger -->
    <div class=\"container-fluid\">
        <div class=\"d-flex flex-wrap align-items-center justify-content-between py-3\">
            <div class=\"col-md-3 mb-2 mb-md-0\">
                <a href=\"/\" class=\"d-inline-flex link-body-emphasis text-decoration-none\">
                    <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.svg"), "html", null, true);
        yield "\" alt=\"Logo EcoRide\" width=\"80\" height=\"64\">
                </a>
            </div>
            <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fs-5\">
                <li><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link px-2 text-dark hover-highlight\">Accueil</a></li>
                <li><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturages");
        yield "\" class=\"nav-link px-2 text-dark hover-highlight\">Covoiturages</a></li>
                <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-link px-2 text-dark hover-highlight\">Contact</a></li>
                ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13) && (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13)) || CoreExtension::inFilter("ROLE_EMPLOYE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13))))) {
            // line 14
            yield "                    <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            yield "\" class=\"nav-link px-2 text-dark hover-highlight\">Tableau de bord</a></li>
                ";
        }
        // line 16
        yield "            </ul>
            <div class=\"col-md-3 text-end\">
                ";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_space");
            yield "\" class=\"btn btn-outline-dark me-2\">Mon espace</a>
                    <a href=\"";
            // line 20
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-dark\">Déconnexion</a>
                ";
        } else {
            // line 22
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-outline-dark me-2\">Connexion</a>
                    <a href=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-dark\">S'inscrire</a>
                ";
        }
        // line 25
        yield "            </div>
        </div>
    </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blocDeCode/header.html.twig";
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
        return array (  108 => 25,  103 => 23,  98 => 22,  93 => 20,  88 => 19,  86 => 18,  82 => 16,  76 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"border-bottom\" style=\"background-color: #d4edda;\"> <!-- Fond vert léger -->
    <div class=\"container-fluid\">
        <div class=\"d-flex flex-wrap align-items-center justify-content-between py-3\">
            <div class=\"col-md-3 mb-2 mb-md-0\">
                <a href=\"/\" class=\"d-inline-flex link-body-emphasis text-decoration-none\">
                    <img src=\"{{ asset('images/logo.svg') }}\" alt=\"Logo EcoRide\" width=\"80\" height=\"64\">
                </a>
            </div>
            <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fs-5\">
                <li><a href=\"{{ path('app_home') }}\" class=\"nav-link px-2 text-dark hover-highlight\">Accueil</a></li>
                <li><a href=\"{{ path('app_covoiturages') }}\" class=\"nav-link px-2 text-dark hover-highlight\">Covoiturages</a></li>
                <li><a href=\"{{ path('app_contact') }}\" class=\"nav-link px-2 text-dark hover-highlight\">Contact</a></li>
                {% if app.user and ('ROLE_ADMIN' in app.user.roles or 'ROLE_EMPLOYE' in app.user.roles) %}
                    <li><a href=\"{{ path('app_admin') }}\" class=\"nav-link px-2 text-dark hover-highlight\">Tableau de bord</a></li>
                {% endif %}
            </ul>
            <div class=\"col-md-3 text-end\">
                {% if app.user %}
                    <a href=\"{{ path('app_user_space') }}\" class=\"btn btn-outline-dark me-2\">Mon espace</a>
                    <a href=\"{{ path('app_logout') }}\" class=\"btn btn-dark\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-dark me-2\">Connexion</a>
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-dark\">S'inscrire</a>
                {% endif %}
            </div>
        </div>
    </div>
</header>", "blocDeCode/header.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/blocDeCode/header.html.twig");
    }
}
