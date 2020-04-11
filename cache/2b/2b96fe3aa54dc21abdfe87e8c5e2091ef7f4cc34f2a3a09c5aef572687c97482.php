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

/* detailTicket.html.twig */
class __TwigTemplate_50ccc9275b69dc5ed09bf2dc4d92b6d30e0c67f667112544efec610faa556027 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "detailTicket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - détail-Ticket";
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
        echo "     
<div class=\"container-fluid\">
  <div class=\"row\">   
  <div class=\"col-lg-2\" id=\"bandeau\">
      <div id=\"list-example\" class=\"list-group mt-5\">
          <a class=\"list-group-item list-group-item-action\" href=\"#list-item-1\">dossier</a>
          <a class=\"list-group-item list-group-item-action\" href=\"#list-item-2\">Contact</a>
          
           <a class=\"list-group-item list-group-item-action\" href=\"#listClients.html.twig\" data-toggle=\"modal\" data-target=\".bd-example-modal-xl\">Liste clients</a>
            <div class=\"modal fade bd-example-modal-xl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myExtraLargeModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-xl\" role=\"document\">
                <div class=\"modal-content\">
                  ";
        // line 19
        $this->displayBlock('contentClient', $context, $blocks);
        // line 20
        echo "                </div>
              </div>
            </div>
          <a class=\"list-group-item list-group-item-action\" href=\"#sectionNote\">Notes</a>
          <a class=\"list-group-item list-group-item-action\" href=\"#list-item-5\">Résolution</a>
      </div>
    </div>  



      <div class=\"col-lg-9 mt-5\">
     <div class=\"form-row\">
        <div class=\"col-md-4 mb-3\">
            Numéro d'incident : <strong>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "</strong>
        </div>
    </div>
          <form class=\"needs-validation\" method=\"post\" enctype=\"multipart/form-data\" novalidate>
            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                    <label for=\"validationTooltip01\">Numéro Client</label>
                    <input type=\"text\" class=\"form-control\" id=\"numeroClient\"  name=\"numeroClient\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "titre", [], "any", false, false, false, 40), "html", null, true);
        echo "\" required>
                      <div class=\"invalid-tooltip\">
                        Saisir le numéro de client.
                      </div>
                </div>

              <div class=\"col-md-4 mb-3\">
                <label for=\"validationTooltip02\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "nom", [], "any", false, false, false, 48), "html", null, true);
        echo "\" required>
                  <div class=\"invalid-tooltip\">
                    Saisir l'utilisateur.
                  </div>
              </div>

              <div class=\"col-md-4 mb-3\">
                <label for=\"validationTooltip02\">Prenom</label>
                <input type=\"text\" class=\"form-control\" id=\"prenom\"  name=\"prenom\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "prenom", [], "any", false, false, false, 56), "html", null, true);
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
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "mail", [], "any", false, false, false, 69), "html", null, true);
        echo "\" required>
                      <div class=\"invalid-tooltip\">
                        Saisir l'adresse mail utilisateur.
                      </div>
                  </div>
              </div>

              <div class=\"col-md-4 mb-3\">
                    <label for=\"validationTooltip03\">Ville</label>
                    <input type=\"text\" class=\"form-control\" id=\"ville\"  name=\"ville\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "ville", [], "any", false, false, false, 78), "html", null, true);
        echo "\" required>
                      <div class=\"invalid-tooltip\">
                        Saisir une Ville.
                      </div>
              </div>

              <div class=\"col-md-3 mb-3\">
                  <label for=\"validationTooltip05\">Zip</label>
                  <input type=\"text\" class=\"form-control\" id=\"zip\"  name=\"zip\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "zip", [], "any", false, false, false, 86), "html", null, true);
        echo "\" required>
                    <div class=\"invalid-tooltip\">
                      Saisir code postal.
                    </div>
              </div>

              <div class=\"col-md-3 mb-3\">
                  <label for=\"validationTooltip05\">Contact</label>
                  <input type=\"text\" class=\"form-control\" id=\"contact\"  name=\"contact\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "contact", [], "any", false, false, false, 94), "html", null, true);
        echo "\" required>
                    <div class=\"invalid-tooltip\">
                      Saisir le contact.
                    </div>
                </div>

                <div class=\"form-group col-md-3 mb-3\">
                  <label for=\"exampleFormControlSelect1\">Priorité</label>
                    <select class=\"form-control\" id=\"priorite\"  name=\"priorite\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "priorite", [], "any", false, false, false, 102), "html", null, true);
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
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "categorie", [], "any", false, false, false, 113), "html", null, true);
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
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "titre", [], "any", false, false, false, 129), "html", null, true);
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
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "contenu", [], "any", false, false, false, 140), "html", null, true);
        echo "</textarea>
                    <div class=\"invalid-feedback\">
                      Saisir l'incident.
                    </div>
                </div>
                
                <div class=\"form-group col-md-5 mb-4 \">
                  <label for=\"exampleFormControlFile1\">Pièce jointe</label>
                  ";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "document", [], "any", false, false, false, 148)) {
            // line 149
            echo "                  <a target=\"_blank\" href=\"./uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "document", [], "any", false, false, false, 149), "html", null, true);
            echo "\" title=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "document", [], "any", false, false, false, 149), "html", null, true);
            echo "</a>
                  ";
        }
        // line 151
        echo "                  <input type=\"file\" class=\"form-control-file\" id=\"document\"  name=\"document\" value=\"\">
                </div>

            </div> 
            
            <div class=\"form-row\">
                <div class=\"col-md-2  mb-0\">
                    <p><button class=\"btn btn-primary\" type=\"submit\">Enregistrer</button></p>
                </div>
                <div class=\"col-md-2  mb-0\">
                  <div for=\"proprietaire\">Propriétaire : ";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), "username", [], "any", false, false, false, 161), "html", null, true);
        echo " </div>
                </div>

                <div class=\"col-md-2  mb-0\">
                  <div for=\"dateOuv\">Date d'ouverture : ";
        // line 165
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
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "note", [], "any", false, false, false, 174), "html", null, true);
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

    // line 19
    public function block_contentClient($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->loadTemplate("listClients.html.twig", "detailTicket.html.twig", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "detailTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 19,  292 => 174,  280 => 165,  273 => 161,  261 => 151,  253 => 149,  251 => 148,  240 => 140,  226 => 129,  207 => 113,  193 => 102,  182 => 94,  171 => 86,  160 => 78,  148 => 69,  132 => 56,  121 => 48,  110 => 40,  100 => 33,  85 => 20,  83 => 19,  66 => 7,  61 => 5,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "detailTicket.html.twig", "/Users/admin/Desktop/Projet en cours/Projet5/templates/detailTicket.html.twig");
    }
}
