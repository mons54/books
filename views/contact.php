<?php $title = 'Nous contacter' ?>
<?php ob_start(); ?>

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading"><?php echo $title ?></h1>
    <p class="lead text-muted mb-0">Un problème ? On est là !</p>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> CONTACTEZ-NOUS !
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="name">Nom / prénom</label>
              <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
            </div>
            <div class="form-group">
              <label for="email">Adresse e-mail</label>
              <input name="mail" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" class="form-control" id="message" rows="6" required></textarea>
            </div>
            <div class="mx-auto">
              <button type="submit" class="btn btn-primary text-right">Envoyer</button></div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-4">
      <div class="card bg-light mb-3">
        <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> ADRESSE POSTALE</div>
        <div class="card-body">
          <p>3 rue de la bibliothèque</p>
          <p>75297 Book-villers</p>
          <p>France</p>

        </div>

      </div>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>