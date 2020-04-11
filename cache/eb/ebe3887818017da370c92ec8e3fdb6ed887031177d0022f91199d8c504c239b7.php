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

/* listTicket.html.twig */
class __TwigTemplate_02618ae7161b39a888c37ab8e1405d0349dbb110822fd7edcdf13da45334df16 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "listTicket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Liste Tickets";
    }

    // line 4
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <a href=\"index.php?action=deconnexion\"><i class=\"fa fa-power-off\"></i></a>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
            <div class=\"container mt-4\">
            <h6 class=\"border-bottom border-gray pb-2 mb-0\">Ticket</h6>
            </div>
                    
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 14
            echo "                        <main role=\"main\" class=\"container\">
                    
                        
                        <div class=\"my-3 p-3 bg-white rounded shadow-sm\">
                            <div class=\"media text-muted pt-1\">
                            <svg class=\"bd-placeholder-img mr-2 rounded\" width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 32x32\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#007bff\"/><text x=\"50%\" y=\"50%\" fill=\"#007bff\" dy=\".3em\">32x32</text></svg>
                            <p class=\"media-body pb-1 mb-0 small lh-125 border-bottom border-gray\">
                                <strong class=\"d-block text-gray-dark\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</strong>
                                <strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 22), "html", null, true);
            echo "</strong>
                            </p>

                            <a href=\"index.php?action=editTicket&amp;id=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"btn btn-primary\">...</a>
                            ";
            // line 26
            if (($context["isAdmin"] ?? null)) {
                // line 27
                echo "                            <a href=\"/?action=deleteTicket&amp;id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"delete\" 
                                    onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet article?');\" ><i class=\"fa fa-trash ml-3\"></i></a>
                            ";
            }
            // line 30
            echo "
                          
                            </div>
                        </main>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "listTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  112 => 30,  105 => 27,  103 => 26,  99 => 25,  93 => 22,  89 => 21,  80 => 14,  76 => 13,  69 => 8,  65 => 7,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "listTicket.html.twig", "/homepages/13/d793895954/htdocs/Projet5/templates/listTicket.html.twig");
    }
}
