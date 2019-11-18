<?php $title = 'Page de connexion'; ?>
<?php ob_start(); ?>
<div class="container mt-5 text-center">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <h1>Login</h1>
      <form action="?path=login" method="post">
        <div class="form-group">
          <input required name="login" type="text" class="form-control" id="pseudo" placeholder="Pseudo ou email">
        </div>
        <div class="form-group">
          <input required name="password" type="password" class="form-control" id="password" placeholder="Mot de passe">
        </div>
        <div class="form-group form-check">
          <input name="rememberme" type="checkbox" class="form-check-input" id="rememberme">
          <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
      </form>
      <a href="?path=signup">S'inscrire</a>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
