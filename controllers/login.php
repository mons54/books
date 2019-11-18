<?php
require('models/users.php');

function login()
{
  if (isset($_SESSION['id'])) {
    session_destroy();
  }

  if (isset($_POST['login'])) {
    $login = isset($_POST['login']) ? (string) $_POST['login'] : null;
    $password = isset($_POST['password']) ? (string) $_POST['password'] : null;

    $error = false;

    if (!$login || !$password) {
      $error = true;
    } else {
      $user = getUserByLogin($login);
      if (!$user) {
        $error = true;
      } else {
        if (!password_verify($password, $user['password'])) {
          $error = true;
        } else {
          $_SESSION['id'] = $user['id'];
          $_SESSION['pseudo'] = $user['pseudo'];
          $_SESSION['email'] = $user['email'];
          $_SESSION['firstName'] = $user['firstName'];
          $_SESSION['lastName'] = $user['lastName'];
          header('Location: ./');
        }
      }
    }

  }

  require('views/login.php');
}

?>
