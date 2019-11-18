<?php
require('models/author.php');

function listAuthor() {
  $authorId = $_GET['author'];
  $author = selectAuthors($authorId);

  $bookAuthor = booksAuthor($authorId);
  require('views/author.php');
}

?>
