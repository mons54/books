<?php $title = $book['title']; ?>
<?php ob_start(); ?>
<?php $author = $book['author'] ? $book['author'] : 'Inconnu'; ?>


<div class="container">
  <?php if (isset($searchResult)) { ?>
    <div class="row">
      <div class="col-md-12">
        <a href="<?php echo $searchResult; ?>">< Retour aux résultats</a>
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
            <th><?php echo $author; ?></th>
          </tr>
          <tr>
            <td>Date de parution</td>
            <th><?php echo $book['year']; ?></th>
          </tr>
          <tr>
            <td>Pays</td>
            <th><a href="?path=countries&country=<?php echo $book['country_id']; ?>" ><?php echo $book['country']; ?><a></th>
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
</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
