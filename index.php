<?php

try {
  $connection  = new PDO('mysql:host=localhost;dbname=php_pagination', 'root', '');
} catch (PDOException $e) {
  echo 'Error' . $e -> getMessage();
  die();
}

$page = isset( $_GET['page'] ) ? (int)$_GET['pagina'] : 1;

$postsPerPage = 5
require 'index.view.php';

?>