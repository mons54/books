<?php

function addComment(string $id): array
{
  $db = new PDO('mysql:host=localhost;dbname=books', 'root', '');

  $stmt = $db->prepare('SELECT  FROM comments WHERE livre = :id');

  $stmt->bindParam(':id', $id);

  $stmt->execute();

  return $stmt->fetch();
}

?>
