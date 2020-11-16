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

/* layouts/partials/_nav.html.twig */
class __TwigTemplate_04a17891291d0d1e79b23932d7383498c926b7ceca2d2f971889129737d6e076 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg\">

  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">

        <li class=\"nav-item active\">
                <a class=\"navbar-brand\" href=\"https://www.carologameshow.com/\">
    <img src='";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-cgs.webp"), "html", null, true);
        echo "' alt='logo carolo game show' class='logo-cgs-nav'>
    </a>
        </li>

";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "        <li class=\"nav-item ml-auto\">
            <a class=\"nav-link\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"far fa-user mr-1\"></i>Connexion</a>
        </li>

";
        } else {
            // line 26
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">Inscription</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_app_user_account");
            echo "\">Mon compte</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        </li>
";
        }
        // line 36
        echo "    </ul>


  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 36,  97 => 33,  91 => 30,  85 => 27,  82 => 26,  75 => 22,  68 => 18,  65 => 17,  63 => 16,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg\">

  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">

        <li class=\"nav-item active\">
                <a class=\"navbar-brand\" href=\"https://www.carologameshow.com/\">
    <img src='{{ asset('img/logo-cgs.webp') }}' alt='logo carolo game show' class='logo-cgs-nav'>
    </a>
        </li>

{% if not app.user %}
        <li class=\"nav-item ml-auto\">
            <a class=\"nav-link\" href=\"{{path(\"register\")}}\">Inscription</a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path(\"app_login\")}}\"><i class=\"far fa-user mr-1\"></i>Connexion</a>
        </li>

{% else %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('accueil')}}\">Inscription</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('_app_user_account')}}\">Mon compte</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_logout')}}\">Déconnexion</a>
        </li>
{% endif %}
    </ul>


  </div>
</nav>", "layouts/partials/_nav.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\layouts\\partials\\_nav.html.twig");
    }
}
