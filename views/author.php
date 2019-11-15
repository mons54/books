<?php $title = "Auteur et ses livres"; ?>
<?php ob_start(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12 text-center">
      <h4> <?php echo $author['name'];?> </h4>

        <div class="row justify-content-center">
          <?php foreach ($books as $book) { ?>
          <div class="col-lg-3 col-md-4 mt-4 ">
            <div class="card book h-100">
              <div class="image">
                  <img
                    src="<?php echo $book['image']; ?>"
                    class="card-img-top"
                    alt="Image du livre <?php echo $book['title']; ?>"
                  >
              </div>
              <div class="card-body d-flex align-items-end" >
                <h5 class="card-title title" ><a href="<?php echo $link; ?>"><?php echo $book['title']; ?></a></h5>

              </div>

            </div>
          </div>


        <?php } ?>
        </div>


    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
