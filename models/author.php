<?php

require('utils/db.php');

function selectAuthors ($authorId)
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM authors WHERE id = :author_id');

  $stmt->bindParam(':author_id', $authorId, PDO::PARAM_INT);

  $stmt->execute();

  return $stmt->fetch();

}

function booksAuthor ($authorId)
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM books WHERE author_id = :author_id');

  $stmt->bindParam(':author_id', $authorId, PDO::PARAM_INT);

  $stmt->execute();

  return $stmt->fetchAll();

}
