<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config["database"], 'root', '');
$post = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

dd($post);