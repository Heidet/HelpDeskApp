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

/* listClients.html.twig */
class __TwigTemplate_3c933abbd7b6a51116c2e269c85ad4d891bc1c12c4df48a84d99ff5ea28d2fc0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'contentClient' => [$this, 'block_contentClient'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('contentClient', $context, $blocks);
    }

    public function block_contentClient($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 3
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
                            <span class=\"fa fa-mobile fa-2x text-success float-right pulse\" title=\"online now\"></span>
                            <label class=\"name lead\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</label>
                            <br> 
                            <span class=\"fa fa-map-marker fa-fw text-muted\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"5842 Hillcrest Rd\"></span>
                            <span class=\"text-muted\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "zip", [], "any", false, false, false, 19), "html", null, true);
            echo "</span>
                            <br>
                            <span class=\"fa fa-phone fa-fw text-muted\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"(870) 288-4149\"></span>
                            <span class=\"text-muted small\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "contact", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                            <br>
                            <span class=\"fa fa-envelope fa-fw text-muted\" data-toggle=\"tooltip\" data-original-title=\"\" title=\"\"></span>
                            <span class=\"text-muted small text-truncate\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "mail", [], "any", false, false, false, 25), "html", null, true);
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
        return "listClients.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  76 => 22,  70 => 19,  64 => 16,  49 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "listClients.html.twig", "/Users/admin/Desktop/Projet en cours/Projet5/templates/listClients.html.twig");
    }
}
