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

/* security/register.html.twig */
class __TwigTemplate_950ac7b9827b7eb287325e138d625ddb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

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

        yield "Inscription - EcoRide";
        
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
        yield "    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\"> <!-- Fond gris clair -->
                    <h2 class=\"h5 mb-4 text-center\" style=\"color: #155724;\">Créer un compte sur EcoRide</h2>

                    ";
        // line 12
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 17
        yield "
                    <form method=\"post\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                        <div class=\"mb-3\">
                            <label for=\"inputPseudo\" class=\"form-label\" style=\"color: #155724;\">Pseudo</label>
                            <input type=\"text\" name=\"pseudo\" id=\"inputPseudo\" required class=\"form-control\" placeholder=\"Entrez votre pseudo\">
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputEmail\" class=\"form-label\" style=\"color: #155724;\">Email</label>
                            <input type=\"email\" name=\"email\" id=\"inputEmail\" required class=\"form-control\" placeholder=\"Entrez votre email\">
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputPassword\" class=\"form-label\" style=\"color: #155724;\">Mot de passe</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" required class=\"form-control\" placeholder=\"Entrez un mot de passe sécurisé\">
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("register"), "html", null, true);
        yield "\">

                        <button class=\"btn btn-success w-100\" type=\"submit\">Créer un compte</button> <!-- Bouton vert -->
                    </form>
                </div>
            </div>
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
        return "security/register.html.twig";
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
        return array (  141 => 34,  122 => 18,  119 => 17,  113 => 14,  110 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription - EcoRide{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card p-4 shadow-sm border-0\" style=\"background-color: #f8f9fa;\"> <!-- Fond gris clair -->
                    <h2 class=\"h5 mb-4 text-center\" style=\"color: #155724;\">Créer un compte sur EcoRide</h2>

                    {% if error %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ error }}
                        </div>
                    {% endif %}

                    <form method=\"post\" action=\"{{ path('app_register') }}\">
                        <div class=\"mb-3\">
                            <label for=\"inputPseudo\" class=\"form-label\" style=\"color: #155724;\">Pseudo</label>
                            <input type=\"text\" name=\"pseudo\" id=\"inputPseudo\" required class=\"form-control\" placeholder=\"Entrez votre pseudo\">
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputEmail\" class=\"form-label\" style=\"color: #155724;\">Email</label>
                            <input type=\"email\" name=\"email\" id=\"inputEmail\" required class=\"form-control\" placeholder=\"Entrez votre email\">
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputPassword\" class=\"form-label\" style=\"color: #155724;\">Mot de passe</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" required class=\"form-control\" placeholder=\"Entrez un mot de passe sécurisé\">
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('register') }}\">

                        <button class=\"btn btn-success w-100\" type=\"submit\">Créer un compte</button> <!-- Bouton vert -->
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "security/register.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/security/register.html.twig");
    }
}
