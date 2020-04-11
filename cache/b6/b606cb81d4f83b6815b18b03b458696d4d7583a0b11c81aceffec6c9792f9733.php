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

/* addUser.html.twig */
class __TwigTemplate_14ce858086808faa97974f78efb6621ee231a97d071bbbecb692c67732a5c5a7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "addUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajouter Utilisateur";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<script>

</script>
        <div class=\"text-center pt-5\">
            <i class=\"fa fa-users\"></i>
            <h2>Création Utilisateur</h2>
        </div><!-- /.col-lg-4 -->

    <div class=\"container pt-2\">
            <form class=\"text-center\" method=\"post\" action=\"\" onSubmit=\"return validate()\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" placeholder=\"utilisateur\" value=\"\"/>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Mot de passe\" value=\"\"/>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" placeholder=\"Confirmation Mot de passe\" value=\"\"/>
                            </div>
                   <button class=\"btn btn-primary\" type=\"submit\">Enregistrer</button>
            </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  55 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "addUser.html.twig", "/homepages/13/d793895954/htdocs/Projet5/templates/addUser.html.twig");
    }
}
