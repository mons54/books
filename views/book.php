<?php $title = $book['title']; ?>
<?php ob_start(); ?>
<?php $author = $book['author'] ? $book['author'] : 'Inconnu'; ?>

<div class="container">
    <?php if (isset($searchResult)) { ?>
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo $searchResult; ?>">
                    < Retour aux résultats
                </a>
            </div>
        </div>
    <?php } ?>
  <div class="row">
    <div class="col-md-4 mt-3">
      <img
        src="<?php echo $book['image']; ?>"
        class="card-img-top"
        alt="Image du livre <?php echo $book['title']; ?>"
        style="max-height: 500px;">
    </div>
    <div class="col-md-8 mt-3">
      <h1><?php echo $book['title']; ?></h1>
      <div class="info">
        <?php echo $author; ?> (Auteur) - Paru en <?php echo $book['year']; ?>
      </div>
      <table class="table table-striped mt-4">
        <tbody>
          <tr>
            <td>Auteur</td>
            <th><a href="?path=author&author=<?php echo $book['author_id'] ?>"> <?php echo $author; ?></a></th>
          </tr>
          <tr>
            <td>Date de parution</td>
            <th><?php echo $book['year']; ?></th>
          </tr>
          <tr>
            <td>Pays</td>
            <th><?php echo $book['country']; ?></th>
          </tr>
          <tr>
            <td>Langue</td>
            <th><?php echo $book['language']; ?></th>
          </tr>
          <tr>
            <td>Pages</td>
            <th><?php echo $book['pages']; ?></th>
          </tr>
          <tr>
            <td>Wikipedia</td>
            <th><a href="<?php echo $book['wikipedia']; ?>">Voir</a></th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <?php if ($booksAuthor ) { ?>
      <div class="row">
          <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark">
                    <li class="breadcrumb-item active text-center text-white" aria-current="page">Du même auteur :</li>
                </ol>
            </nav>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 mt-3">
              <div class="text-center">
                  <?php echo $author; ?> vous présente :
              </div>
          </div>
      </div>
      <div class="row">
          <?php foreach ($booksAuthor as $book) { ?>
              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                      <img src="<?php echo $book['image']; ?>" class="card-img-top">
                      <div class="card-body">
                          <h5 class="card-title text-center"><?php echo $book['title']; ?></h5>
                      </div>
                </div>
              </div>
          <?php } ?>
      </div>
  <?php } else { ?>
      <div class="row">
          <div class="col-md-12 mt-3">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-dark">
                      <li class="breadcrumb-item active text-white" aria-current="page">Du même auteur : pour le moment aucun ouvrage.</li>
                  </ol>
                  <img src="https://previews.123rf.com/images/arcady31/arcady311705/arcady31170500048/77956942-d%C3%A9sol%C3%A9-signe-vecteur.jpg"
                  width=250px height=250px>
              </nav>
          </div>
      </div>
  <?php } ?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
