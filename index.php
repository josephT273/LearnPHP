<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = :id";

$db = new Database($config["database"], 'root', '');
$post = $db->query($query, [':id' => $id])->fetch();

dd($post);