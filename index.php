<?php

try {
  $conection = new PDO('mysql:host=localhost;dbname=php_pagination', 'root', '');  

} catch (PDOException $e) {
  echo "Error: " . $e-getMessage>
  die();
}

$page = isset( $_GET['page'] ) ? (int)$_GET['page'] : 1;
$postPerPage = 5;

$start = ($page > 1) ? ($page * $postPerPage - $postPerPage) : 0;

$articles = $conection->prepare("
  SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $start, $postPerPage
");

$articles->execute();
$articles = $articles->fetchAll();

if (!$articles) {
  header('Location: index.php');
}

$totalArticles = $conection->query("SELECT FOUND_ROWS() as total");
$totalArticles = $totalArticles->fetch()['total'];

$numberPages = ceil($totalArticles / $postPerPage);

require 'index.view.php'

?>