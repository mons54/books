<?php
require_once('utils/db.php');

function getCountry($id)
{
  $db = dbConnect();
  $stmt = $db->prepare('SELECT * FROM countries WHERE id = :id');
  $stmt->bindParam(':id', $id);

  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
  require('views/countries.php');


}

function getBookByCountry($idCountry)
{
  $db = dbConnect();
  $stmt = $db->prepare('SELECT
    books.id,
    books.title,
    books.image,
    books.year,
    books.pages,
    books.country_id,
    books.wikipedia_link as wikipedia,
    authors.name as author,
    countries.name as country,
    languages.name as language
    FROM books
    LEFT JOIN authors
    ON books.author_id = authors.id
    LEFT JOIN countries
    ON books.country_id = countries.id
    LEFT JOIN languages
    ON books.language_id = languages.id
    WHERE country_id = :id
  ');

  $stmt->bindParam(':id', $idCountry);



  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
