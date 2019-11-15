<?php $title= 'Listes des pays';?>
<?php ob_start(); ?>
<?php require_once('utils/db.php'); ?>
<style>

.book .image {
  display: flex;
  justify-content: center;
  align-items: center;
}


.book .image img {
  height: 100%;
  width: 100%;
}


</style>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1> Listes des livres pour : <?php echo $country['name']; ?></h1>
        </div>
      </div>
      <div class="row">
        <?php foreach ($bookCountry as $book) { ?>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="card country h-100" data-book>
              <div class="image">
                <img
                  src="<?php echo $book['image']; ?>"
                  class="card-img-top"
                  alt="Image du livre <?php echo $book['title']; ?>">
              </div>
              <div class="card-body">
                <h5 class="card-title title" data-title>
                  <?php echo $book['title']; ?>
                </h5>
                <p class="card-text text-muted">
                  <?php echo $book['author'] . ' (Auteur)'; ?>
                </p>
                <p class="card-text text-muted">
                  <?php echo $book['pages'] . ' (pages)'; ?>
                </p>
                <p class="card-text text-muted">
                  <?php echo $book['language'] . ' (language)'; ?>
                </p>
              </div>
              <div class="card-footer text-center">
                <a href="./?id=<?php echo $book['id'] ?>;" class="btn btn-primary">Lien vers le livre</a>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>



  </body>
</html>












<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
