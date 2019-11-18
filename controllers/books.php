<?php

require('models/books.php');

$breadcrumb = array(array(
  'name' => "Livres",
  'link' => './'
));

/**
 * @param int $page
 * @param string $sort
 * @param string (optional) $query
 */
function listBooks(int $page = 1, string $sort, ?string $query): void
{
  global $breadcrumb;
  global $limit;
  $sortValues = array(
    array('value' => 'title', 'name' => "Titre"),
    array('value' => 'author', 'name' => "Auteur"),
    array('value' => 'year', 'name' => "Date de parution"),
    array('value' => 'language', 'name' => "Langue"),
  );
  $breadcrumb[0]['active'] = true;
  $pages = (int) ceil(countBooks($query) / $limit);
  $books = getBooks($page, $sort, $query);
  require ('views/books.php');
}

/**
 * @param string $id Book id
 */
function showBook (string $id): void
{
  try {
    $book = getBook($id);
    $booksAuthor = selectAuthors($book['author_id'], $id);

    

    global $breadcrumb;
    $breadcrumb[] = array(
      'active' => true,
      'name' => $book['title'],
      'link' => './?id=' . $id
    );
    if (isset($_SERVER['HTTP_REFERER'])) {
      parse_str(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_QUERY), $queries);
      if ((!isset($queries['path']) || !$queries['path']) && !isset($queries['id'])) {
        $searchResult = $_SERVER['HTTP_REFERER'];
      }
    }

    require ('views/book.php');
  } catch (Exception $e) {
    require('views/404.php');
  }
}
