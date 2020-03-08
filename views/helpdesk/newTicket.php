<?php $titre_page = 'Créer ticket'; ?>
<?php ob_start(); ?>

<div class="container-fluid mt-3">
  <form class="needs-validation" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationTooltip01">Numéro de contrat</label>
            <input type="text" class="form-control" id="validationTooltip01" value="" required>
              <div class="invalid-tooltip">
                Entrer le numéro de contrat.
              </div>
        </div>

      <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Client</label>
        <input type="text" class="form-control" id="validationTooltip02" value="" required>
          <div class="invalid-tooltip">
            Entrer l'utilisateur.
          </div>
      </div>

      <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername">Mail</label>
          <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
              </div>
            <input type="text" class="form-control" id="validationTooltipUsername"
              aria-describedby="validationTooltipUsernamePrepend" required>
              <div class="invalid-tooltip">
                Entrer l'adresse mail utilisateur.
              </div>
          </div>
      </div>
    </div>

    <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationTooltip03">Ville</label>
            <input type="text" class="form-control" id="validationTooltip03" required>
              <div class="invalid-tooltip">
                Entrer une Ville.
              </div>
          </div>

        <div class="col-md-3 mb-3">
          <label for="validationTooltip05">Zip</label>
          <input type="text" class="form-control" id="validationTooltip05" required>
            <div class="invalid-tooltip">
              Entrer code postal.
            </div>
        </div>

        <div class="col-md-3 mb-3">
          <label for="validationTooltip05">Contact</label>
          <input type="text" class="form-control" id="validationTooltip05" required>
            <div class="invalid-tooltip">
              Entrer le contact.
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-10  mb-5">
          <label for="validationTextarea">Textarea</label>
          <textarea class="form-control is-invalid" id="validationTextarea" rows="6" placeholder="Required example textarea"
            required></textarea>
            <div class="invalid-feedback">
              Entrer l'incident.
            </div>
        </div>
    </div>    

    <button class="btn btn-primary" type="submit">Enregistrer</button>

  </form>
</div>

<?php $contentPage = ob_get_clean(); ?>
<?php require('template.php'); ?>