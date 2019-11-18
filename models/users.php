<?php
require_once('utils/db.php');

function getUserByLogin(string $login)
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM users WHERE email = :login OR pseudo = :login');

  $stmt->bindParam(':login', $login);

  $stmt->execute();

  return $stmt->fetch();
}
