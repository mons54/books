<?php

require_once('utils/db.php');
$db = dbConnect();

//inscription



if (isset($_POST['submitI']))
{
  //$id = isset($_POST['id']) ? (int) $_POST['id']: null;


  $firstNameI = (string) $_POST['firstNameI'];
  $lastNameI = (string) $_POST['lastNameI'];
  $emailI = (string) $_POST['emailI'];
  $passwordI = (string) $_POST['passwordI'];


  $stmt = $db->prepare(' INSERT INTO
    users (
      `firstName`,
      `lastName`,
      `email`,
      `password`
    )
    VALUES (
      :firstNameI,
      :lastNameI,
      :emailIemailI,
      :passwordI
    )
  ');

  //$options = '$P11r06o9!david88b2M11';

  $hatchPass = password_hash($passwordI, PASSWORD_DEFAULT);

  $stmt->bindParam(':firstNameI', $firstNameI, PDO::PARAM_STR);
  $stmt->bindParam(':lastNameI', $lastNameI, PDO::PARAM_STR);
  $stmt->bindParam(':emailIemailI', $emailI, PDO::PARAM_STR);
  $stmt->bindParam(':passwordI', $hatchPass, PDO::PARAM_STR);

  $stmt->execute();

}


if (isset($_SESSION['submitC']))
{
  $emailI = (string) $_POST['emailI'];
  $passwordI = (string) $_POST['passwordI'];

  echo "string";

  if(isset($_POST['email'], $_POST['password']))
  {
    echo "YES";
  }
  else
  {
    echo "NO";
  }
}



?>




<?php $title = "Connection/inscription"; ?>
<?php ob_start(); ?>

<div class="bg-dark container text-white" style="padding-bottom: 1rem;">
  <div class="row">
    <div class="col">
      <form class="" action="" method="post">
        <h2>connection</h2>
        <div class="form-group">
          <label for="inputEmail1">address mail</label>
          <input name="username" type="email" class="form-control" id="inputEmail1"  placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="inputPassword1">mot de passe</label>
          <input name="password" type="password" class="form-control" id="inputPassword1" aria-describedby="passHelp" placeholder="Password" required>
          <small id="passHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
        </div>
        <button class="sticky-bottom btn btn-primary btn-lg btn-block" type="submit" name="submitC">Connection</button>
      </form>
    </div>
    <div class="col">
      <form class="" action="" method="post">
        <h2>inscription</h2>
        <div class="row">
          <div class="col">
            <p>Prénom</p>
            <input name="firstNameI" type="text" class="form-control" placeholder="Prénom" required>
          </div>
          <div class="col">
            <p>NOM</p>
            <input name="lastNameI" type="text" class="form-control" placeholder="NOM" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail2">address mail</label>
          <input name="emailI" type="email" class="form-control" id="inputEmail2"  placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="inputPassword2">mot de passe</label>
          <input name="passwordI" type="password" class="form-control" id="inputPassword2" aria-describedby="passHelp" placeholder="Password" required>
          <small id="passHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submitI">S'inscrire</button>
      </form>
    </div>
  </div>
</div>


<style media="screen">
  body {
    background-image: url('https://media.giphy.com/media/tqb6aAtrMl1fy/giphy.gif');
  }
</style>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
