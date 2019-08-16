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

/* base.html.twig */
class __TwigTemplate_bba37f563a5e776d38bf009e5eb5758fe244c8d7e87958a2d3f9274361dbccac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

\t<title>NUMERIS</title>
\t<!-- Favicons -->
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/img/N.png")), "html", null, true);
        echo "\" rel=\"icon\">
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/img/N02.png")), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round\" rel=\"stylesheet\">
    <!--link rel=\"stylesheet\" href=\"https://bootswatch.com/3/flatly/bootstrap.min.css\"-->

\t<!-- Bootstrap -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/bootstrap.min.css")), "html", null, true);
        echo "\" />

\t<!-- Owl Carousel -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/owl.carousel.css")), "html", null, true);
        echo "\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/owl.theme.default.css")), "html", null, true);
        echo "\" />

\t<!-- Magnific Popup -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/magnific-popup.css")), "html", null, true);
        echo "\" />

\t<!-- Font Awesome Icon -->
\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/font-awesome.min.css")), "html", null, true);
        echo "\">

\t<!-- Custom stlylesheet -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/style.css")), "html", null, true);
        echo "\" />

\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->
</head>

<body>
\t<!-- Header -->
\t<header id=\"home\">
\t\t<!-- Background Image -->
\t\t<div class=\"bg-img\" style=\"background-image: url('./theme/img/5.jpg');\">
\t\t\t<div class=\"overlay\"></div>
\t\t</div>
\t\t<!-- /Background Image -->

\t\t<!-- Nav -->
\t\t<nav id=\"nav\" class=\"navbar nav-transparent\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t<div class=\"navbar-brand\">
\t\t\t\t\t\t<a href=\"index.php\">
\t\t\t\t\t\t\t<img class=\"logo\" src=\"./theme/img/numeris1.png\" alt=\"logo\">
\t\t\t\t\t\t\t<img class=\"logo-alt\" src=\"./theme/img/numeris1.png\" alt=\"logo\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Logo -->

\t\t\t\t\t<!-- Collapse nav button -->
\t\t\t\t\t<div class=\"nav-collapse\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Collapse nav button -->
\t\t\t\t</div>

\t\t\t\t<!--  Main navigation  -->
\t\t\t\t<ul class=\"main-nav nav navbar-nav navbar-right\">
\t\t\t\t\t<li><a href=\"#home\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"#about\">Qui sommes-nous</a></li>
\t\t\t\t\t<li class=\"has-dropdown\"><a href=\"#blog\">Produits & Services</a>
\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t<li><a href=\"#blog\">Messagerie collaborative</a></li>
\t\t\t\t\t\t\t<li><a href=#service>Nos Services</a></li>
<!--\t\t\t\t\t\t\t<li><a href=#features>blog post</a></li>-->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#features\">Pourquoi Numeris ?</a></li>
\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t\t<!-- /Main navigation -->

\t\t\t</div>
\t\t</nav>
\t\t<!-- /Nav -->

\t\t<!-- home wrapper -->
\t\t<div class=\"home-wrapper\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- home content -->
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t<div class=\"home-content\">
\t\t\t\t\t\t\t<h1 class=\"white-text\">Plus qu'un client, vous êtes un partenaire</h1>
\t\t\t\t\t\t\t<p class=\"white-text\">
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!--<button class=\"white-btn\">Get Started!</button>
\t\t\t\t\t\t\t<button class=\"main-btn\">Learn more</button>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /home content -->

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /home wrapper -->

\t</header>
\t<!-- /Header -->

\t<!-- About -->
\t<div id=\"about\" class=\"section md-padding\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Section header -->
\t\t\t\t<div class=\"section-header text-center\">
\t\t\t\t\t<h2 class=\"title\">NUMERIS</h2>
\t\t\t\t</div>
\t\t\t\t<!-- /Section header -->

\t\t\t\t<!-- about -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t<h3>NUMERIS SARL</h3>
\t\t\t\t\t\t<p>Capital de 2.000.000 FCFA <br/>Siège social : Carré n°1148 HOUEHOUN, Cotonou, Bénin<br/>
\t\t\t\t\t\t\tRCCM : RB/COT/19 B 23360 – IFU : 3201910583176
\t\t\t\t\t\t</p>
<!--\t\t\t\t\t\t<a href=\"#\">Read more</a>-->

\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /about -->

\t\t\t\t<!-- about -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t<i class=\"fa fa-desktop\"></i>
\t\t\t\t\t\t<h3>Domaines d'activités</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Messagerie collaborative Cloud
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Messagerie collaborative On Premise
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Intégration de solutions Open Source
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t  Réseau – Système – Sécurité
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Infogérance
\t\t\t\t\t\t\t</li> <li>
\t\t\t\t\t\t\t\t Conseil – Assistance – Formation
\t\t\t\t\t\t\t</li> <li>
\t\t\t\t\t\t\tCentre Pearson Vue (en cours)
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</p>
<!--\t\t\t\t\t\t<a href=\"#\">Read more</a>-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /about -->

\t\t\t\t<!-- about -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t<i class=\"fa fa-group\"></i>
\t\t\t\t\t\t<h3>Cibles</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t<ul >
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tParticuliers
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Petites et Moyennes Entreprises
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t  Universités – Ecoles – Lycées
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Administrations publiques
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Secteur privé
\t\t\t\t\t\t\t</li> <li>
\t\t\t\t\t\t\t\t Etc.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul></p>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /about -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /About -->

\t\t<!-- Container -->
\t\t\t\t<!-- Blog -->
\t\t\t\t<div id=\"blog\" class=\"section md-padding bg-grey\">

\t\t\t\t\t<!-- Container -->
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<!-- Row -->
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!-- Section header -->
\t\t\t\t\t\t\t<div class=\"section-header text-center\">
\t\t\t\t\t\t\t\t<h2 class=\"title\">Messagerie collaborative</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Section header -->

\t\t\t\t\t\t\t<!-- blog -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"blog\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/webmail35.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t<h3> Messagerie collaborative BlueMind</h3>
\t\t\t\t\t\t\t\t\t\t<p>

\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>Envoi - Réception de mails</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Boites de réception partagées</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Carnets d’adresses (partagé)</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Agenda (partagé)</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Calendrier d’entreprise</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /blog -->

\t\t\t\t\t\t\t<!-- blog -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"blog\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/bluemind.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t<h3>Couverture fonctionnelle</h3>
\t\t\t\t\t\t\t\t\t\t<p>

\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Agendas</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Messagerie</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Tâches</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Drive-Chat</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>VO-IP XIVO</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /blog -->

\t\t\t\t\t\t\t<!-- blog -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"blog\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\"  src=\"./theme/img/blue.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t<h3>Clients Mobiles</h3>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>IOS,Androïd</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Multi Agendas</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>ActiveSync natif</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Multi Agendas</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /blog -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /Row -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Container -->

\t\t\t\t</div>
\t\t\t\t<!-- /Blog -->


\t\t\t\t\t<!-- pricing -->
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"pricing\">
\t\t\t\t\t\t\t<div class=\"price-head\">
\t\t\t\t\t\t\t\t<span class=\"price-title\">Offre Basic</span>
\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t<h3>4.750<span class=\"duration\">frs CFA/mois</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"price-content\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>1 Go Stockage </p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>10 utilisateurs </p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Mails et Contacts</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Agendas et Tâches</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Pièces jointes détachées</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>WebMail</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Synchronisation Mobile</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Protection anti-virus et anti-spam</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Assistance 8x5 par mail</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Sans publicité</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"price-btn\">
\t\t\t\t\t\t\t\t<button class=\"outline-btn\">Voir <i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /pricing -->



\t\t\t\t<!-- <!-- /pricing -->
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"pricing\">
\t\t\t\t\t\t\t<div class=\"price-head\">
\t\t\t\t\t\t\t\t<span class=\"price-title\">Offre Pro </span>

\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t<h3>450<span class=\"duration\">frs CFA/mois</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"price-content\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>5 Go Stockage</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Messagerie Instantanée</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Mails - Contacts</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Agendas - Tâches</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Pièces jointes détachées</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>WebMail</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Synchronisation tout appareil</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Boîtes aux lettres partagées </p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Protection anti-virus et anti-spam</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Assistance 24/7 par mail et téléphone </p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Sans publicité</p>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"price-btn\">
\t\t\t\t\t\t\t\t<button class=\"outline-btn\">Voir <i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t<!-- <!-- /pricing -->
\t\t\t\t<!-- pricing -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"pricing\">
\t\t\t\t\t\t<div class=\"price-head\">
\t\t\t\t\t\t\t<span class=\"price-title\">Passerelle Mail</span>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<h3>5.500<span class=\"duration\">frs CFA/mois</span></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"price-content\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>Protection anti-virus</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>Protection anti-spam</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>Signature DKIM et DMARC</p>
\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t<p>SSL/TLS</p>
\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t<p>Assistance 8x5 par mail</p>
\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t<p>Sans publicité</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"price-btn\">
\t\t\t\t\t\t\t<button class=\"outline-btn\">Voir <i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /pricing -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /Portfolio -->

\t<!-- Service -->
\t<div id=\"service\" class=\"section md-padding\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Section header -->
\t\t\t\t<div class=\"section-header text-center\">
\t\t\t\t\t<h2 class=\"title\">Services</h2>
\t\t\t\t</div>
\t\t\t\t<!-- /Section header -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-diamond\"></i>
\t\t\t\t\t\t<h3>Ingénierie Web & Logicielle </h3>
\t\t\t\t\t\t<p>Réalisation et intégration de logiciel appliqué aux besoins des entreprises et des particuliers.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-rocket\"></i>
\t\t\t\t\t\t<h3>L'infogérance</h3>
\t\t\t\t\t\t<p>Gestion éfficace de l'informatique interne des entreprises (bureautique,reseaux, maintenance applicative...).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-hand-peace-o\"></i>
\t\t\t\t\t\t<h3>Conseil-Assistance</h3>
\t\t\t\t\t\t<p>Apport de notre expertise en matière d'aide à la décision et la mise en place de systèmes d'informations .</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-drivers-license\"></i>
\t\t\t\t\t\t<h3>Formation</h3>
\t\t\t\t\t\t<p>Des cours adaptés pour vos certifications dans le domaine informatique,ayez l'esprit tranquille en vous préparant aux examens.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-window-restore\"></i>
\t\t\t\t\t\t<h3>Reseau-Securité</h3>
\t\t\t\t\t\t<p>Installation et paramétrage des réseaux internes de l'entreprise ,mises à jour et contrôles réguliers de l'activité réseau.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-shopping-bag\"></i>
\t\t\t\t\t\t<h3>Materiel Informatique</h3>
\t\t\t\t\t\t<p>De nombreuses gammes de produits, toujours d’après les besoins de la clientèle (serveur, stockage, equipement reseau ...).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /Service -->


\t<!-- Why Choose Us -->
\t<div id=\"features\" class=\"section md-padding bg-grey\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- why choose us content -->
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"title\">Pourquoi NUMERIS ?</h2>
\t\t\t\t\t</div>
<!--\t\t\t\t\t<p>isque purus.</p>

-->\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Une équipe d'experts en informatique dynamique.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Des services sécurisés et de qualités.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Accompagnement des entreprises dans l'acquisition et la mise en œuvre de leurs outils.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Nos solutions sont efficaces et économiques à un prix concurrentiel.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Nos prix sont attractifs et bien étudiés.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Vous satisfaire est notre priorité.</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /why choose us content -->

\t\t\t\t<!-- About slider -->
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div id=\"about-slider\" class=\"owl-carousel owl-theme\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/développeur-logiciel.jpg\" alt=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/serv-resum.jpg\" alt=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/equipement-informatique-large.jpg\" alt=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/1.jpg\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /About slider -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /Why Choose Us -->


\t<!-- Contact -->
\t<div id=\"contact\" class=\"section md-padding\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Section-header -->
\t\t\t\t<div class=\"section-header text-center\">
\t\t\t\t\t<h2 class=\"title\">Contactez-Nous</h2>
\t\t\t\t</div>
\t\t\t\t<!-- /Section-header -->

\t\t\t\t<!-- contact -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t<h3>Telephone</h3>
\t\t\t\t\t\t<p>94 32 19 58</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /contact -->

\t\t\t\t<!-- contact -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t<h3>Email</h3>
\t\t\t\t\t\t<p>infos@numeris.bj</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /contact -->

\t\t\t\t<!-- contact -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t<h3>Adresse</h3>
\t\t\t\t\t\t<p>C/1148 HOUEHOUN, Cotonou, Bénin</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /contact -->

\t\t\t\t<!-- contact form -->
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<form id=\"contactForm\" action=\"contact-form.php\" method=\"POST\" class=\"contact-form\">
\t\t\t\t\t\t<input type=\"text\" class=\"input\" name=\"name\" id=\"name\" required=\"\" aria-required=\"true\" placeholder=\"Nom\">
\t\t\t\t\t\t<input type=\"email\" class=\"input\" name=\"email\" id=\"email\" required=\"\" aria-required=\"true\" placeholder=\"Email\">
\t\t\t\t\t\t<input type=\"text\" class=\"input\" name=\"subject\" id=\"subject\" required=\"\" aria-required=\"true\" placeholder=\"Objet\">
\t\t\t\t\t\t<textarea class=\"input\" name=\"message\" id=\"message\" required=\"\" aria-required=\"true\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t<button type=\"submit\" value=\"Send Message\" name=\"submit\" class=\"main-btn\">Envoyer</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- /contact form -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /Contact -->


\t<!-- Footer -->
\t<footer id=\"footer\" class=\"sm-padding bg-dark\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t<!-- footer logo -->
\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t<a href=\"index.php\"><img src=\"./theme/img/numeris1.png\" ></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /footer logo -->

\t\t\t\t\t<!-- footer follow -->
\t\t\t\t\t<ul class=\"footer-follow\">
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<!--<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>-->
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- /footer follow -->

\t\t\t\t\t<!-- footer copyright -->
\t\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t\t<p>COPYRIGHT © 2019. TOUS DROITS RÉSERVÉS. RÉALISÉ PAR <a href=\"http://www.numeris.bj\" target=\"_blank\">NUMERIS</a></p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /footer copyright -->

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</footer>
\t<!-- /Footer -->

\t<!-- Back to top -->
\t<div id=\"back-to-top\"></div>
\t<!-- /Back to top -->

\t<!-- Preloader -->
\t<div id=\"preloader\">
\t\t<div class=\"preloader\">
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t<span></span>
\t\t</div>
\t</div>
\t<!-- /Preloader -->

\t<!-- jQuery Plugins -->
\t<script type=\"text/javascript\" src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.min.js")), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/owl.carousel.min.js")), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.magnific-popup.js")), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/main.js")), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  837 => 757,  833 => 756,  829 => 755,  825 => 754,  821 => 753,  98 => 33,  92 => 30,  86 => 27,  80 => 24,  76 => 23,  70 => 20,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

\t<title>NUMERIS</title>
\t<!-- Favicons -->
\t<link href=\"{{ absolute_url(asset(\"theme/img/N.png\")) }}\" rel=\"icon\">
\t<link href=\"{{ absolute_url(asset(\"theme/img/N02.png\")) }}\" rel=\"apple-touch-icon\">

\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round\" rel=\"stylesheet\">
    <!--link rel=\"stylesheet\" href=\"https://bootswatch.com/3/flatly/bootstrap.min.css\"-->

\t<!-- Bootstrap -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ absolute_url(asset(\"theme/css/bootstrap.min.css\")) }}\" />

\t<!-- Owl Carousel -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ absolute_url(asset(\"theme/css/owl.carousel.css\")) }}\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ absolute_url(asset(\"theme/css/owl.theme.default.css\")) }}\" />

\t<!-- Magnific Popup -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ absolute_url(asset(\"theme/css/magnific-popup.css\")) }}\" />

\t<!-- Font Awesome Icon -->
\t<link rel=\"stylesheet\" href=\"{{ absolute_url(asset(\"theme/css/font-awesome.min.css\")) }}\">

\t<!-- Custom stlylesheet -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ absolute_url(asset(\"theme/css/style.css\")) }}\" />

\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->
</head>

<body>
\t<!-- Header -->
\t<header id=\"home\">
\t\t<!-- Background Image -->
\t\t<div class=\"bg-img\" style=\"background-image: url('./theme/img/5.jpg');\">
\t\t\t<div class=\"overlay\"></div>
\t\t</div>
\t\t<!-- /Background Image -->

\t\t<!-- Nav -->
\t\t<nav id=\"nav\" class=\"navbar nav-transparent\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t<div class=\"navbar-brand\">
\t\t\t\t\t\t<a href=\"index.php\">
\t\t\t\t\t\t\t<img class=\"logo\" src=\"./theme/img/numeris1.png\" alt=\"logo\">
\t\t\t\t\t\t\t<img class=\"logo-alt\" src=\"./theme/img/numeris1.png\" alt=\"logo\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Logo -->

\t\t\t\t\t<!-- Collapse nav button -->
\t\t\t\t\t<div class=\"nav-collapse\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Collapse nav button -->
\t\t\t\t</div>

\t\t\t\t<!--  Main navigation  -->
\t\t\t\t<ul class=\"main-nav nav navbar-nav navbar-right\">
\t\t\t\t\t<li><a href=\"#home\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"#about\">Qui sommes-nous</a></li>
\t\t\t\t\t<li class=\"has-dropdown\"><a href=\"#blog\">Produits & Services</a>
\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t<li><a href=\"#blog\">Messagerie collaborative</a></li>
\t\t\t\t\t\t\t<li><a href=#service>Nos Services</a></li>
<!--\t\t\t\t\t\t\t<li><a href=#features>blog post</a></li>-->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#features\">Pourquoi Numeris ?</a></li>
\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t\t<!-- /Main navigation -->

\t\t\t</div>
\t\t</nav>
\t\t<!-- /Nav -->

\t\t<!-- home wrapper -->
\t\t<div class=\"home-wrapper\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- home content -->
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t<div class=\"home-content\">
\t\t\t\t\t\t\t<h1 class=\"white-text\">Plus qu'un client, vous êtes un partenaire</h1>
\t\t\t\t\t\t\t<p class=\"white-text\">
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!--<button class=\"white-btn\">Get Started!</button>
\t\t\t\t\t\t\t<button class=\"main-btn\">Learn more</button>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /home content -->

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /home wrapper -->

\t</header>
\t<!-- /Header -->

\t<!-- About -->
\t<div id=\"about\" class=\"section md-padding\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Section header -->
\t\t\t\t<div class=\"section-header text-center\">
\t\t\t\t\t<h2 class=\"title\">NUMERIS</h2>
\t\t\t\t</div>
\t\t\t\t<!-- /Section header -->

\t\t\t\t<!-- about -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t<h3>NUMERIS SARL</h3>
\t\t\t\t\t\t<p>Capital de 2.000.000 FCFA <br/>Siège social : Carré n°1148 HOUEHOUN, Cotonou, Bénin<br/>
\t\t\t\t\t\t\tRCCM : RB/COT/19 B 23360 – IFU : 3201910583176
\t\t\t\t\t\t</p>
<!--\t\t\t\t\t\t<a href=\"#\">Read more</a>-->

\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /about -->

\t\t\t\t<!-- about -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t<i class=\"fa fa-desktop\"></i>
\t\t\t\t\t\t<h3>Domaines d'activités</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Messagerie collaborative Cloud
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Messagerie collaborative On Premise
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Intégration de solutions Open Source
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t  Réseau – Système – Sécurité
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Infogérance
\t\t\t\t\t\t\t</li> <li>
\t\t\t\t\t\t\t\t Conseil – Assistance – Formation
\t\t\t\t\t\t\t</li> <li>
\t\t\t\t\t\t\tCentre Pearson Vue (en cours)
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</p>
<!--\t\t\t\t\t\t<a href=\"#\">Read more</a>-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /about -->

\t\t\t\t<!-- about -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t<i class=\"fa fa-group\"></i>
\t\t\t\t\t\t<h3>Cibles</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t<ul >
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tParticuliers
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Petites et Moyennes Entreprises
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t  Universités – Ecoles – Lycées
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Administrations publiques
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t Secteur privé
\t\t\t\t\t\t\t</li> <li>
\t\t\t\t\t\t\t\t Etc.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul></p>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /about -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /About -->

\t\t<!-- Container -->
\t\t\t\t<!-- Blog -->
\t\t\t\t<div id=\"blog\" class=\"section md-padding bg-grey\">

\t\t\t\t\t<!-- Container -->
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<!-- Row -->
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!-- Section header -->
\t\t\t\t\t\t\t<div class=\"section-header text-center\">
\t\t\t\t\t\t\t\t<h2 class=\"title\">Messagerie collaborative</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Section header -->

\t\t\t\t\t\t\t<!-- blog -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"blog\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/webmail35.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t<h3> Messagerie collaborative BlueMind</h3>
\t\t\t\t\t\t\t\t\t\t<p>

\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>Envoi - Réception de mails</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Boites de réception partagées</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Carnets d’adresses (partagé)</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Agenda (partagé)</li>
\t\t\t\t\t\t\t\t\t\t\t<li>Calendrier d’entreprise</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /blog -->

\t\t\t\t\t\t\t<!-- blog -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"blog\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/bluemind.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t<h3>Couverture fonctionnelle</h3>
\t\t\t\t\t\t\t\t\t\t<p>

\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Agendas</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Messagerie</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Tâches</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Drive-Chat</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>VO-IP XIVO</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /blog -->

\t\t\t\t\t\t\t<!-- blog -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"blog\">
\t\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\"  src=\"./theme/img/blue.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t\t\t<h3>Clients Mobiles</h3>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>IOS,Androïd</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Multi Agendas</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>ActiveSync natif</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Multi Agendas</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /blog -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /Row -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Container -->

\t\t\t\t</div>
\t\t\t\t<!-- /Blog -->


\t\t\t\t\t<!-- pricing -->
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"pricing\">
\t\t\t\t\t\t\t<div class=\"price-head\">
\t\t\t\t\t\t\t\t<span class=\"price-title\">Offre Basic</span>
\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t<h3>4.750<span class=\"duration\">frs CFA/mois</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"price-content\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>1 Go Stockage </p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>10 utilisateurs </p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Mails et Contacts</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Agendas et Tâches</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Pièces jointes détachées</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>WebMail</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Synchronisation Mobile</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Protection anti-virus et anti-spam</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Assistance 8x5 par mail</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Sans publicité</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"price-btn\">
\t\t\t\t\t\t\t\t<button class=\"outline-btn\">Voir <i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /pricing -->



\t\t\t\t<!-- <!-- /pricing -->
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"pricing\">
\t\t\t\t\t\t\t<div class=\"price-head\">
\t\t\t\t\t\t\t\t<span class=\"price-title\">Offre Pro </span>

\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t<h3>450<span class=\"duration\">frs CFA/mois</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"price-content\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>5 Go Stockage</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Messagerie Instantanée</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Mails - Contacts</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Agendas - Tâches</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Pièces jointes détachées</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>WebMail</p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Synchronisation tout appareil</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Boîtes aux lettres partagées </p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Protection anti-virus et anti-spam</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p>Assistance 24/7 par mail et téléphone </p>
\t\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t\t<p>Sans publicité</p>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"price-btn\">
\t\t\t\t\t\t\t\t<button class=\"outline-btn\">Voir <i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t<!-- <!-- /pricing -->
\t\t\t\t<!-- pricing -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"pricing\">
\t\t\t\t\t\t<div class=\"price-head\">
\t\t\t\t\t\t\t<span class=\"price-title\">Passerelle Mail</span>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<h3>5.500<span class=\"duration\">frs CFA/mois</span></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"price-content\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>Protection anti-virus</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>Protection anti-spam</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>Signature DKIM et DMARC</p>
\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t<p>SSL/TLS</p>
\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t<p>Assistance 8x5 par mail</p>
\t\t\t\t\t\t\t</li><li>
\t\t\t\t\t\t\t\t<p>Sans publicité</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p><br/></p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"price-btn\">
\t\t\t\t\t\t\t<button class=\"outline-btn\">Voir <i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /pricing -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /Portfolio -->

\t<!-- Service -->
\t<div id=\"service\" class=\"section md-padding\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Section header -->
\t\t\t\t<div class=\"section-header text-center\">
\t\t\t\t\t<h2 class=\"title\">Services</h2>
\t\t\t\t</div>
\t\t\t\t<!-- /Section header -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-diamond\"></i>
\t\t\t\t\t\t<h3>Ingénierie Web & Logicielle </h3>
\t\t\t\t\t\t<p>Réalisation et intégration de logiciel appliqué aux besoins des entreprises et des particuliers.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-rocket\"></i>
\t\t\t\t\t\t<h3>L'infogérance</h3>
\t\t\t\t\t\t<p>Gestion éfficace de l'informatique interne des entreprises (bureautique,reseaux, maintenance applicative...).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-hand-peace-o\"></i>
\t\t\t\t\t\t<h3>Conseil-Assistance</h3>
\t\t\t\t\t\t<p>Apport de notre expertise en matière d'aide à la décision et la mise en place de systèmes d'informations .</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-drivers-license\"></i>
\t\t\t\t\t\t<h3>Formation</h3>
\t\t\t\t\t\t<p>Des cours adaptés pour vos certifications dans le domaine informatique,ayez l'esprit tranquille en vous préparant aux examens.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-window-restore\"></i>
\t\t\t\t\t\t<h3>Reseau-Securité</h3>
\t\t\t\t\t\t<p>Installation et paramétrage des réseaux internes de l'entreprise ,mises à jour et contrôles réguliers de l'activité réseau.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t\t<!-- service -->
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t<i class=\"fa fa-shopping-bag\"></i>
\t\t\t\t\t\t<h3>Materiel Informatique</h3>
\t\t\t\t\t\t<p>De nombreuses gammes de produits, toujours d’après les besoins de la clientèle (serveur, stockage, equipement reseau ...).</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /service -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /Service -->


\t<!-- Why Choose Us -->
\t<div id=\"features\" class=\"section md-padding bg-grey\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- why choose us content -->
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"title\">Pourquoi NUMERIS ?</h2>
\t\t\t\t\t</div>
<!--\t\t\t\t\t<p>isque purus.</p>

-->\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Une équipe d'experts en informatique dynamique.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Des services sécurisés et de qualités.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Accompagnement des entreprises dans l'acquisition et la mise en œuvre de leurs outils.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Nos solutions sont efficaces et économiques à un prix concurrentiel.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Nos prix sont attractifs et bien étudiés.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"feature\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t<p>Vous satisfaire est notre priorité.</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /why choose us content -->

\t\t\t\t<!-- About slider -->
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div id=\"about-slider\" class=\"owl-carousel owl-theme\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/développeur-logiciel.jpg\" alt=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/serv-resum.jpg\" alt=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/equipement-informatique-large.jpg\" alt=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"./theme/img/1.jpg\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /About slider -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /Why Choose Us -->


\t<!-- Contact -->
\t<div id=\"contact\" class=\"section md-padding\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Section-header -->
\t\t\t\t<div class=\"section-header text-center\">
\t\t\t\t\t<h2 class=\"title\">Contactez-Nous</h2>
\t\t\t\t</div>
\t\t\t\t<!-- /Section-header -->

\t\t\t\t<!-- contact -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t<h3>Telephone</h3>
\t\t\t\t\t\t<p>94 32 19 58</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /contact -->

\t\t\t\t<!-- contact -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t<h3>Email</h3>
\t\t\t\t\t\t<p>infos@numeris.bj</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /contact -->

\t\t\t\t<!-- contact -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t<h3>Adresse</h3>
\t\t\t\t\t\t<p>C/1148 HOUEHOUN, Cotonou, Bénin</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /contact -->

\t\t\t\t<!-- contact form -->
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<form id=\"contactForm\" action=\"contact-form.php\" method=\"POST\" class=\"contact-form\">
\t\t\t\t\t\t<input type=\"text\" class=\"input\" name=\"name\" id=\"name\" required=\"\" aria-required=\"true\" placeholder=\"Nom\">
\t\t\t\t\t\t<input type=\"email\" class=\"input\" name=\"email\" id=\"email\" required=\"\" aria-required=\"true\" placeholder=\"Email\">
\t\t\t\t\t\t<input type=\"text\" class=\"input\" name=\"subject\" id=\"subject\" required=\"\" aria-required=\"true\" placeholder=\"Objet\">
\t\t\t\t\t\t<textarea class=\"input\" name=\"message\" id=\"message\" required=\"\" aria-required=\"true\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t<button type=\"submit\" value=\"Send Message\" name=\"submit\" class=\"main-btn\">Envoyer</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- /contact form -->

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</div>
\t<!-- /Contact -->


\t<!-- Footer -->
\t<footer id=\"footer\" class=\"sm-padding bg-dark\">

\t\t<!-- Container -->
\t\t<div class=\"container\">

\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t<!-- footer logo -->
\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t<a href=\"index.php\"><img src=\"./theme/img/numeris1.png\" ></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /footer logo -->

\t\t\t\t\t<!-- footer follow -->
\t\t\t\t\t<ul class=\"footer-follow\">
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<!--<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>-->
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- /footer follow -->

\t\t\t\t\t<!-- footer copyright -->
\t\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t\t<p>COPYRIGHT © 2019. TOUS DROITS RÉSERVÉS. RÉALISÉ PAR <a href=\"http://www.numeris.bj\" target=\"_blank\">NUMERIS</a></p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /footer copyright -->

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- /Row -->

\t\t</div>
\t\t<!-- /Container -->

\t</footer>
\t<!-- /Footer -->

\t<!-- Back to top -->
\t<div id=\"back-to-top\"></div>
\t<!-- /Back to top -->

\t<!-- Preloader -->
\t<div id=\"preloader\">
\t\t<div class=\"preloader\">
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t<span></span>
\t\t</div>
\t</div>
\t<!-- /Preloader -->

\t<!-- jQuery Plugins -->
\t<script type=\"text/javascript\" src=\"{{ absolute_url(asset(\"theme/js/jquery.min.js\")) }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ absolute_url(asset(\"theme/js/bootstrap.min.js\")) }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ absolute_url(asset(\"theme/js/owl.carousel.min.js\")) }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ absolute_url(asset(\"theme/js/jquery.magnific-popup.js\")) }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ absolute_url(asset(\"theme/js/main.js\")) }}\"></script>

</body>

</html>
", "base.html.twig", "/home/numeris/Documents/Projets/site-numeris/dev/site-numeris/templates/base.html.twig");
    }
}
