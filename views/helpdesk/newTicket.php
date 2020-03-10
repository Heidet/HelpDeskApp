<?php $titre_page = 'Créer Ticket'; ?>
<?php ob_start(); ?>

<div class="container-fluid mt-3">
  <form class="needs-validation" method="post" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationTooltip01">Numéro Client</label>
            <input type="text" class="form-control" id="numeroClient"  name="numeroClient" value="" required>
              <div class="invalid-tooltip">
                Saisir le numéro de client.
              </div>
        </div>

      <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Nom</label>
        <input type="text" class="form-control" id="nom" value="" required>
          <div class="invalid-tooltip">
            Saisir l'utilisateur.
          </div>
      </div>

      <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Prenom</label>
        <input type="text" class="form-control" id="prenom"  name="prenom" value="" required>
          <div class="invalid-tooltip">
            Saisir le Prenom.
          </div>
      </div>

      <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername">Mail</label>
          <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
              </div>
            <input type="text" class="form-control" id="mail"
              aria-describedby="validationTooltipUsernamePrepend"  name="mail" required>
              <div class="invalid-tooltip">
                Saisir l'adresse mail utilisateur.
              </div>
          </div>
      </div>

      <div class="col-md-4 mb-3">
            <label for="validationTooltip03">Ville</label>
            <input type="text" class="form-control" id="ville"  name="ville" required>
              <div class="invalid-tooltip">
                Saisir une Ville.
              </div>
      </div>

      <div class="col-md-3 mb-3">
          <label for="validationTooltip05">Zip</label>
          <input type="text" class="form-control" id="zip"  name="zip" required>
            <div class="invalid-tooltip">
              Saisir code postal.
            </div>
      </div>

      <div class="col-md-3 mb-3">
          <label for="validationTooltip05">Contact</label>
          <input type="text" class="form-control" id="contact"  name="contact" required>
            <div class="invalid-tooltip">
              Saisir le contact.
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3 mb-3">
          <label for="exampleFormControlSelect1">Priorité</label>
            <select class="form-control" id="priorite"  name="priorite">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
        </div>

        <div class="form-group col-md-3 mb-3 ml-5">
          <label for="exampleFormControlSelect1">Catégorie</label>
          <select class="form-control" id="categorie"  name="categorie">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>

        <div class="form-group col-md-3 mb-3 ml-5">
          <label for="exampleFormControlFile1">Pièce jointe</label>
          <input type="file" class="form-control-file" id="document"  name="document">
        </div>
    </div> 

    <div class="form-row">
        <div class="col-md-10  mb-5">
          <label for="validationTextarea">Textarea</label>
          <textarea class="form-control is-invalid" id="contenu"  name="contenu" rows="6" placeholder="Required example textarea"
            required></textarea>
            <div class="invalid-feedback">
              Saisir l'incident.
            </div>
        </div>
    </div>    

    <button class="btn btn-primary" type="submit">Enregistrer</button>

  </form>
</div>

<?php $contentPage = ob_get_clean(); ?>
<?php require('template.php'); ?>