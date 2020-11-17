<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/inscriptionSolo.html.twig */
class __TwigTemplate_22610257ff63a06e372896118796f94708aed9e97e7bee24b22d2a1807368067 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscriptionSolo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscriptionSolo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/inscriptionSolo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Insciption solo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Inscriptions au concours solo</h1>

<section class='row p-auto'>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptionsSolo"]) || array_key_exists("inscriptionsSolo", $context) ? $context["inscriptionsSolo"] : (function () { throw new RuntimeError('Variable "inscriptionsSolo" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 10
            echo "
    <div class=\"col-sm-12 col-md-3 affUser m-1 p-2\">
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Pseudo : ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "user", [], "any", false, false, false, 13), "pseudo", [], "any", false, false, false, 13), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Email : ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "user", [], "any", false, false, false, 16), "email", [], "any", false, false, false, 16), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-6\">Nom : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "user", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
            <div class=\"col-sm-12 col-md-6\">Prénom : ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "user", [], "any", false, false, false, 20), "prenom", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Téléphone : ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "user", [], "any", false, false, false, 23), "telephone", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Inscription effectuée le ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "createdAt", [], "any", false, false, false, 26), "d M Y", "Europe/Paris"), "html", null, true);
            echo "</div>
        </div>
        <hr></hr>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Nom du personnage : ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "NomPersoSolo", [], "any", false, false, false, 30), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Email : ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "user", [], "any", false, false, false, 33), "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/inscriptionSolo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 38,  143 => 33,  137 => 30,  130 => 26,  124 => 23,  118 => 20,  114 => 19,  108 => 16,  102 => 13,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Insciption solo{% endblock %}

{% block body %}
<h1>Inscriptions au concours solo</h1>

<section class='row p-auto'>
{% for inscription in inscriptionsSolo %}

    <div class=\"col-sm-12 col-md-3 affUser m-1 p-2\">
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Pseudo : {{ inscription.user.pseudo }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Email : {{ inscription.user.email }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-6\">Nom : {{ inscription.user.nom }}</div>
            <div class=\"col-sm-12 col-md-6\">Prénom : {{ inscription.user.prenom }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Téléphone : {{ inscription.user.telephone }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Inscription effectuée le {{ inscription.createdAt | date('d M Y',\"Europe/Paris\")}}</div>
        </div>
        <hr></hr>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Nom du personnage : {{ inscription.NomPersoSolo }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Email : {{ inscription.user.email }}</div>
        </div>
    </div>

{% endfor %}
</section>

{% endblock %}", "admin/inscriptionSolo.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\admin\\inscriptionSolo.html.twig");
    }
}
