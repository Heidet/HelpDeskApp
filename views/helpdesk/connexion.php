<?php $titre_page = 'Connexion'; ?>
<?php ob_start(); ?>

<div class="container pt-5">
	<div class="d-flex justify-content-center h-100">
		
    <form class="form-signin">
        <div class="text-center mb-4">
            <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">HelpDesk</h1>
        </div>

        <div class="form-label-group">
            <input type="username" name="username" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="username">Login</label>
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <label for="password">Password</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    </form>

</div>
</div>
<?php $contentPage = ob_get_clean(); ?>
<?php require('template.php'); ?>