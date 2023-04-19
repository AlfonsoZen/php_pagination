<?php

try {
  $connection  = new PDO('mysql:host=localhost;dbname=php_pagination', 'root', '');
} catch (PDOException $e) {
  echo 'Error' . $e -> getMessage();
  die();
}

$page = isset( $_GET['page'] ) ? (int)$_GET['page'] : 1;

$postsPerPage = 5;

$start = ($page > 1) ? ($page * $postsPerPage - $postsPerPage) : 0;

$articles = $connection -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $start, $postsPerPage");

$articles -> execute();
$articles = $articles -> fetchAll();

if ( !$articles ) {
  header( 'Location: index.php');
}

$totalArticles = $connection -> query('SELECT FOUND_ROWS() as total');
$totalArticles = $totalArticles -> fetch()['total'];

$pagesNumber = ceil( $totalArticles / $postsPerPage );
require 'index.view.php';

?>