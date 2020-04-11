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

/* layout.html.twig */
class __TwigTemplate_1b365b7d335dc8f309da937fab07f1a311b9bc299867d79c41022e585276ac3d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
  <meta name=\"generator\" content=\"Jekyll v3.8.6\">
  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

<link rel=\"stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css\" />
  
        <!-- inclusion des libraries jQuery et jQuery UI (fichier principal et plugins) -->
<!--<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js\"></script>-->

    <!-- Font special for pages-->
<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css\" />
<link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.4/examples/offcanvas/\">
<link href=\"public/css/app.css\" rel=\"stylesheet\">
  <!-- Bootstrap core CSS -->
<link href=\"/docs/4.4/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .navbar {
      position: initial !important;
    }

    .nav-link {
      color: black;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href=\"offcanvas.css\" rel=\"stylesheet\">
</head>

<body>

  <nav class=\"navbar navbar-expand-lg fixed-top navbar-dark \">
     <i class=\"fa fa-address-card\"></i>
      <a class=\"navbar-brand ml-3\" href=\"index.php?action=listTickets\">HelpDesk</a>
      <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"navbar-collapse offcanvas-collapse\" id=\"navbarsExampleDefault\">
          <ul class=\"navbar-nav mr-auto\">
              
          </ul>
          <div class=\"form-inline my-2 my-lg-0\">
                
                ";
        // line 72
        $this->displayBlock('nav', $context, $blocks);
        // line 73
        echo "            </div>
          
      </div>
   
  </nav>

  <div class=\"nav-scroller bg-white shadow-sm\">
      <nav class=\"nav nav-underline\">
          <a class=\"nav-link\" href=\"index.php?action=addTicket\">Créer ticket</a>
          <a class=\"nav-link\" href=\"index.php?action=listTickets\">Vue BackLog</a>
          <!--Partie Admin -->
          ";
        // line 84
        if (($context["isAdmin"] ?? null)) {
            // line 85
            echo "          <a class=\"nav-link\" href=\"index.php?action=administration\">Administration</a>
          ";
        }
        // line 86
        echo "  
      </nav>
  </div>

  <div id=\"content\">";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

<script src=\"/docs/4.4/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm\" crossorigin=\"anonymous\"></script>
<!--<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>-->
<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
<script src=\"public/js/ajax.js\"></script>
<script>window.jQuery || document.write('<script src=\"/docs/4.4/assets/js/vendor/jquery.slim.min.js\"><\\/script>')</script>
<!-- inclusion des libraries jQuery et jQuery UI (fichier principal et plugins) -->
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js\"></script>
<script src=\"public/js/client.js\"></script>
<script src=\"public/js/confirmPass.js\"></script>
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "HelpDesk";
    }

    // line 72
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 90
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 90,  170 => 72,  163 => 9,  143 => 90,  137 => 86,  133 => 85,  131 => 84,  118 => 73,  116 => 72,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "/homepages/13/d793895954/htdocs/Projet5/templates/layout.html.twig");
    }
}
