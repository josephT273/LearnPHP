<?php

require 'functions.php';
// require 'router.php';

$dsn = "mysql:host=localhost;dbname=learn_php;user=root;pass=''charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post) {
    echo $post['title'] . '<br>';
}