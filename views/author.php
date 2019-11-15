<?php $title = "Auteur et ses livres"; ?>
<?php ob_start(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-8">
      <?php
      echo $author['name'];
      ?>
      
      <?php
      foreach ($books as $book) {
        echo $book['title'];
      }

       ?>



    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
