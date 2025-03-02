<?php

use Core\Database;


$config = require(base_path('config.php'));
$errors = [];

$db = new Database($config['database'], 'root', 'password');

view('notes/create.view.php', [
    'heading' => "Create Note",
    'errors' => $errors
]);
