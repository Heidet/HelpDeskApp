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

/* connexion.html.twig */
class __TwigTemplate_7c5db3bc095028f3fe9bd407b994fd0b79f9c64cab17031f0635eb9864b21462 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "connexion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container pt-5\">
\t<div class=\"d-flex justify-content-center h-100\">
\t\t
        <form method=\"post\" class=\"form-signin\">
            <div class=\"text-center mb-4\">
                <img class=\"mb-4\" src=\"public/img/help.png\" alt=\"\" width=\"72\" height=\"72\">
                <h1 class=\"h3 mb-3 font-weight-normal\">HelpDesk</h1>
            </div>

            <div class=\"form-label-group\">
                <input type=\"username\" name=\"username\" id=\"username\" class=\"form-control\" placeholder=\"Identifiant\" required=\"\" autofocus=\"\">
                <label for=\"username\">Login</label>
            </div>

            <div class=\"form-label-group\">
                <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" required=\"\">
                <label for=\"password\">Password</label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
        </form>

    </div>
</div>
<body> 
\t

";
    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  55 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "connexion.html.twig", "/homepages/13/d793895954/htdocs/Projet5/templates/connexion.html.twig");
    }
}
