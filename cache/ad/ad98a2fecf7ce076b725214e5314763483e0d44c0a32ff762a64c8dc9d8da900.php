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

/* addTicket.html.twig */
class __TwigTemplate_6bea50954e188b34a4ae48d80489b53cb8bc2b004da3c5855f39aa01deb13b1f extends \Twig\Template
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
            'contentClient' => [$this, 'block_contentClient'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "addTicket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Nouveau Ticket";
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
<div class=\"container-fluid \">
  <div class=\"row\">     
    <div class=\"col-lg-2\" id=\"bandeau\">
      <div id=\"list-example\" class=\"list-group mt-5\">
          <a class=\"list-group-item list-group-item-action\" href=\"#list-item-1\">Dossier</a>
          <a class=\"list-group-item list-group-item-action\" href=\"#list-item-2\">Contact</a>
          
           <a class=\"list-group-item list-group-item-action\" href=\"#listClients.html.twig\" data-toggle=\"modal\" data-target=\".bd-example-modal-xl\">Liste clients</a>
            <div class=\"modal fade bd-example-modal-xl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myExtraLargeModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-xl\" role=\"document\">
                <div class=\"modal-content\">
                  ";
        // line 20
        $this->displayBlock('contentClient', $context, $blocks);
        // line 21
        echo "                </div>
              </div>
            </div>
          <a class=\"list-group-item list-group-item-action\" href=\"#sectionNote\">Notes</a>
      </div>
    </div>

    
      <div class=\"col-lg-9 mt-5\">
        <div class=\"col-md-4 mb-3\">
            Numéro d'incident : <strong>Nouveau";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "</strong>
        </div>
          <form class=\"needs-validation\" action=\"\" method=\"post\" enctype=\"multipart/form-data\" novalidate>
            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                
                    <label for=\"numeroClient\">Numéro Client</label>
                    <input type=\"text\" class=\"form-control\" id=\"numeroClient\"   name=\"numeroClient\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\" required>
                      <div class=\"invalid-tooltip\">
                        Saisir le numéro de client.
                      </div>
             
                </div>

              <div class=\"col-md-4 mb-3\">
              
                <label for=\"nom\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"nom\"  name=\"nom\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "nom", [], "any", false, false, false, 48), "html", null, true);
        echo "\" required>
           
                  <div class=\"invalid-tooltip\">
                    Saisir l'utilisateur.
                  </div>
              </div>

              <div class=\"col-md-4 mb-3\">
              
                <label for=\"validationTooltip02\">Prenom</label>
                <input type=\"text\" class=\"form-control\" id=\"prenom\"  name=\"prenom\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "prenom", [], "any", false, false, false, 58), "html", null, true);
        echo "\" required>
              
                  <div class=\"invalid-tooltip\">
                    Saisir le Prenom.
                  </div>
              </div>

              <div class=\"col-md-4 mb-3\">
                <label for=\"validationTooltipUsername\">Mail</label>
                  <div class=\"input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"validationTooltipUsernamePrepend\">@</span>
                      </div>
                    <input type=\"text\" class=\"form-control\" id=\"mail\"
                      aria-describedby=\"validationTooltipUsernamePrepend\"  name=\"mail\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "mail", [], "any", false, false, false, 72), "html", null, true);
        echo "\" required>
                      <div class=\"invalid-tooltip\">
                        Saisir l'adresse mail utilisateur.
                      </div>
                  </div>
              </div>

              <div class=\"col-md-4 mb-3\">
                    <label for=\"validationTooltip03\">Ville</label>
                    <input type=\"text\" class=\"form-control\" id=\"ville\"  name=\"ville\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "ville", [], "any", false, false, false, 81), "html", null, true);
        echo "\" required>
                      <div class=\"invalid-tooltip\">
                        Saisir une Ville.
                      </div>
              </div>

              <div class=\"col-md-3 mb-3\">
                  <label for=\"validationTooltip05\">Zip</label>
                  <input type=\"text\" class=\"form-control\" id=\"zip\"  name=\"zip\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "zip", [], "any", false, false, false, 89), "html", null, true);
        echo "\" required>
                    <div class=\"invalid-tooltip\">
                      Saisir code postal.
                    </div>
              </div>

              <div class=\"col-md-3 mb-3\">
                  <label for=\"validationTooltip05\">Contact</label>
                  <input type=\"text\" class=\"form-control\" id=\"contact\"  name=\"contact\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "contact", [], "any", false, false, false, 97), "html", null, true);
        echo "\" required>
                    <div class=\"invalid-tooltip\">
                      Saisir le contact.
                    </div>
                </div>

                <div class=\"form-group col-md-3 mb-3\">
                  <label for=\"exampleFormControlSelect1\">Priorité</label>
                    <select class=\"form-control\" id=\"priorite\"  name=\"priorite\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "priorite", [], "any", false, false, false, 105), "html", null, true);
        echo "\" >
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>

                <div class=\"form-group col-md-3 mb-3 ml-5\">
                  <label for=\"exampleFormControlSelect1\">Catégorie</label>
                  <select class=\"form-control\" id=\"categorie\"  name=\"categorie\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "categorie", [], "any", false, false, false, 116), "html", null, true);
        echo "\">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

            </div>

            

            <div class=\"form-row\">
              <div class=\"col-md-4 mb-3\">
                <label for=\"validationTooltip01\">Titre</label>
                  <input type=\"text\" class=\"form-control\" id=\"titre\"  name=\"titre\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "titre", [], "any", false, false, false, 132), "html", null, true);
        echo "\" required>
                    <div class=\"invalid-tooltip\">
                      Saisir le titre.
                    </div>
              </div>
            </div> 

            <div class=\"form-row\">
                <div class=\"col-md-10  mb-0\">
                  <label for=\"validationTextarea\"></label>
                  <textarea class=\"form-control\" id=\"contenu\"  name=\"contenu\" rows=\"6\" value=\"\" placeholder=\"\"
                    required>";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "contenu", [], "any", false, false, false, 143), "html", null, true);
        echo "</textarea>
                    <div class=\"invalid-feedback\">
                      Saisir l'incident.
                    </div>
                </div>
                <div class=\"form-group col-md-5 mb-4 \">
                  <label for=\"exampleFormControlFile1\">Pièce jointe</label>
                  <input type=\"file\" class=\"form-control-file\" id=\"document\"  name=\"document\" value=\"\">
                </div>
            </div> 

            <div class=\"form-row\">
                <div class=\"col-md-4  mb-0\">
                  <p><button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">Enregistrer</button></p>
                </div>

                <div class=\"col-md-4  mb-0\">
                  <div for=\"dateOuv\">Date d'ouverture : ";
        // line 160
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "</div>
                </div>
            </div> 

          <div class=\"form-row\" id=\"sectionNote\">
                <div class=\"col-md-10  mb-0\">
                <h3>Note</h3>
                  <label for=\"note\">Note</label>
                  <textarea class=\"form-control\" id=\"note\"  name=\"note\" rows=\"6\" value=\"\" placeholder=\"\"
                    required>";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "contenu", [], "any", false, false, false, 169), "html", null, true);
        echo "</textarea>
                    <div class=\"invalid-feedback\">
                      Note.
                    </div>
                </div>
      </form>
    </div>
  </div>
";
    }

    // line 20
    public function block_contentClient($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->loadTemplate("listClients.html.twig", "addTicket.html.twig", 20)->display($context);
    }

    public function getTemplateName()
    {
        return "addTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 20,  275 => 169,  263 => 160,  243 => 143,  229 => 132,  210 => 116,  196 => 105,  185 => 97,  174 => 89,  163 => 81,  151 => 72,  134 => 58,  121 => 48,  108 => 38,  98 => 31,  86 => 21,  84 => 20,  70 => 8,  66 => 7,  61 => 5,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "addTicket.html.twig", "/Users/admin/Desktop/Projet en cours/Projet5/templates/addTicket.html.twig");
    }
}
