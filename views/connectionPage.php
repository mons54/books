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
  if(isset($_POST['username'], $_POST['password']))
  {
    //On echappe les variables pour pouvoir les mettre dans des requetes SQL
    if(get_magic_quotes_gpc())
    {
      $ousername = stripslashes($_POST['username']);
      $username = mysql_real_escape_string(stripslashes($_POST['username']));
      $password = stripslashes($_POST['password']);
    }
    else
    {
      $username = mysql_real_escape_string($_POST['username']);
      $password = $_POST['password'];
    }
    //On recupere le mot de passe de lutilisateur
    $req = mysql_query('select password,id from users where username="'.$username.'"');
    $dn = mysql_fetch_array($req);
    //On le compare a celui quil a entre et on verifie si le membre existe
    if($dn['password']==$password and mysql_num_rows($req)>0)
    {
      //Si le mot de passe es bon, on ne vas pas afficher le formulaire
      $form = false;
      //On enregistre son pseudo dans la session username et son identifiant dans la session userid
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['userid'] = $dn['id'];
    }
    else
    {
      //Sinon, on indique que la combinaison nest pas bonne
      $form = true;
      $message = 'La combinaison que vous avez entr&eacute; n\'est pas bonne.';
    }
  }
  else
  {
    $form = true;
  }
  if($form)
  {
    //On affiche un message sil y a lieu
    if(isset($message))
    {
      echo '<div class="message">'.$message.'</div>';
    }
  }
}



?>




<?php $title = "Connection/inscription"; ?>
<?php ob_start(); ?>


<div class="bg-dark container text-white" style="padding-bottom: 1rem;">
  <div class="row">
    <div class="col">
      <form class="" action="./" method="post">
        <h2>connection</h2>
        <div class="form-group">
          <label for="inputEmail1">address mail</label>
          <input name="" type="email" class="form-control" id="inputEmail1"  placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="inputPassword1">mot de passe</label>
          <input type="password" class="form-control" id="inputPassword1" aria-describedby="passHelp" placeholder="Password" required>
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
