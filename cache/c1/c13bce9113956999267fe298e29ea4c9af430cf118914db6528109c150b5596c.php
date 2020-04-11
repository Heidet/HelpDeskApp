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

/* administration.html.twig */
class __TwigTemplate_4fad13a5bb44ef6f4f427381e984671f3c76f0cacacdbc680f1b6e667473d08f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "administration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Administration ";
    }

    // line 3
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <a href=\"index.php?action=deconnexion\"><i class=\"fa fa-power-off\"></i></a>
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
  <div class=\"container\">
    <div class=\"row text-center\" id=\"commande\">
          <div class=\"col-lg-4\">
            <i class=\"fa fa-user-plus\"></i>
            <h2>Client</h2>
            <p><a class=\"btn btn-danger\" href=\"index.php?action=addClient\" role=\"button\">Création Client &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class=\"col-lg-4\">
             <i class=\"fa fa-users\"></i>
            <h2>User</h2>         
            <p><a class=\"btn btn-danger\" href=\"index.php?action=addUser\" role=\"button\">Création User &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class=\"col-lg-4\">
            <i class=\"fa fa-server\"></i>
            <h2>HelpDesk</h2>          
            <p><a class=\"btn btn-danger\" href=\"index.php?action=listTicket\" role=\"button\">Production &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

      <div class=\"row text-center pt-5\" id=\"command2\">
          <div class=\"col-lg-4\">
            <i class=\"fa fa-user-plus\"></i>
            <h2>Client</h2>
            <p><a class=\"btn btn-danger\" href=\"index.php?action=annuaire\" role=\"button\">Liste Client &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class=\"col-lg-4\">
             <i class=\"fa fa-users\"></i>
            <h2>User</h2>         
            <p><a class=\"btn btn-danger\" href=\"index.php?action=listUser\" role=\"button\">liste User &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  </div>


";
    }

    public function getTemplateName()
    {
        return "administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 7,  65 => 6,  60 => 4,  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration.html.twig", "/Users/admin/Desktop/Projet en cours/Projet5/templates/administration.html.twig");
    }
}
