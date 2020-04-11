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

/* annuaire.html.twig */
class __TwigTemplate_b86ed038ef3d0fa5e84da1dc919d83012860950b8c30cfc81f71a408cba7fce6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "annuaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Annuaire Client";
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 9
            echo "<div class=\"container mt-4\">
    <!-- contacts card -->

    <div class=\"card card-default\" id=\"card_contacts\">
        <div id=\"contacts\" class=\"panel-collapse collapse show\" aria-expanded=\"true\" style=\"\">
            <ul class=\"list-group pull-down\" id=\"contact-list\">
                <li class=\"list-group-item\">
                    <div class=\"row w-100\">
                        <div class=\"col-12 col-sm-6 col-md-3 px-0\">
                            <img src=\"http://demos.themes.guide/bodeo/assets/images/users/m101.jpg\" alt=\"Mike Anamendolla\" class=\"rounded-circle mx-auto d-block img-fluid\">
                        </div>
                        <div class=\"col-12 col-sm-6 col-md-9 text-center text-sm-left\">
                     
                            <a href=\"/?action=deleteClient&amp;id=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"delete\" 
                                    onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce contact?');\" ><span class=\"fa fa-trash fa-2x text-success float-right pulse\" color=\"red\" title=\"online now\"></span></a>
                            
                            <span class=\"text-muted small text-truncate\"><strong>Nom:</strong> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
                            <br>
                            <span class=\"text-muted small text-truncate\"><strong>Prenom:</strong> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 27), "html", null, true);
            echo "</span>
                            <br>
                            <span class=\"fa fa-map-marker fa-fw text-muted\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"5842 Hillcrest Rd\"></span>
                            <span class=\"text-muted\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "zip", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>
                            <br>
                            <span class=\"fa fa-phone fa-fw text-muted\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"(870) 288-4149\"></span>
                            <span class=\"text-muted small\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "contact", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
                            <br>
                            <span class=\"fa fa-envelope fa-fw text-muted\" data-toggle=\"tooltip\" data-original-title=\"\" title=\"\"></span>
                            <span class=\"text-muted small text-truncate\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "mail", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                </li>
            </ul>
            <!--/contacts list-->
        </div>
    </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "annuaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  111 => 33,  105 => 30,  99 => 27,  94 => 25,  88 => 22,  73 => 9,  69 => 8,  65 => 7,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "annuaire.html.twig", "/homepages/13/d793895954/htdocs/Projet5/templates/annuaire.html.twig");
    }
}
