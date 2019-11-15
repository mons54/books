<?php $title = "Auteur et ses livres"; ?>
<?php ob_start(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-8">
      <h1>Liste de l'auteur</h1>
    </div>


  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
