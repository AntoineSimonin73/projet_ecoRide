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

/* blocDeCode/footer.html.twig */
class __TwigTemplate_971ad406ded7eea86e663a62f5e21dbd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blocDeCode/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blocDeCode/footer.html.twig"));

        // line 1
        yield "<footer class=\"border-top py-3\" style=\"background-color: #d4edda;\"> <!-- Fond vert léger -->
    <div class=\"container-fluid\">
        <div class=\"d-flex flex-wrap align-items-center justify-content-between\">
            <div class=\"col-md-3 mb-2 mb-md-0\">
                <p class=\"mb-0\">EcoRide. Tous droits réservés.</p>
            </div>
            <div class=\"col-md-auto mb-2 justify-content-center mb-md-0\">
                <p class=\"mb-0\"><a href=\"mailto:ecoride@exemple.com\" class=\"text-decoration-none\">ecoride@exemple.com</a></p>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blocDeCode/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"border-top py-3\" style=\"background-color: #d4edda;\"> <!-- Fond vert léger -->
    <div class=\"container-fluid\">
        <div class=\"d-flex flex-wrap align-items-center justify-content-between\">
            <div class=\"col-md-3 mb-2 mb-md-0\">
                <p class=\"mb-0\">EcoRide. Tous droits réservés.</p>
            </div>
            <div class=\"col-md-auto mb-2 justify-content-center mb-md-0\">
                <p class=\"mb-0\"><a href=\"mailto:ecoride@exemple.com\" class=\"text-decoration-none\">ecoride@exemple.com</a></p>
            </div>
        </div>
    </div>
</footer>", "blocDeCode/footer.html.twig", "/Users/antoine/Desktop/Projet EcoRide/ecoRide/projet_ecoRide/templates/blocDeCode/footer.html.twig");
    }
}
