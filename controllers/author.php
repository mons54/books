<?php
require('models/author.php');

function listAuthor() {
  $authorId = $_GET['author'];
  $author = selectAuthors($authorId);

  $books = booksAuthor($authorId);
  require('views/author.php');
}

?>
