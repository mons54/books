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

    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="comment">Commentaire :</label>
                <input type="text" class="form-control" id="comment"  name="commentaire"  required>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" onsubmit="return addComment();">Envoyer</button>
    </form>

    <div class="row"style="text-align:center">
        <div class="col-md-12">
            <h2 class="ml-12">Commentaires: </h2>
            <?php foreach ($comments as $comment => $value): ?>
                <h6 style="color:blue;">________________________________________</h6>
                <h6 style="color:blue;">Date de création du commentaire : <?php echo $value['date_creation']; ?></h6>
                <h6 style="color:green;">Commentaire de l'utilisateur n° <?php echo $value['user_id']; ?></h6>
                <h6 style="color:orange;">Contenu du commentaire : "<?php echo $value['commentaire']; ?>"</h6>
            <?php endforeach; ?>
        </div>
    </div>



</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
