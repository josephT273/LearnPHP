<?php

$heading = "Create Note";

$config = require('config.php');
$config = require('Validator.php');

$db = new Database($config['database'], 'root', 'password');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = $_POST['body'];
    $errors = [];

    if (!Validator::string($body, 1, 255)) {
        $errors['body'] = 'A body of no more than 255 characters is required.';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
            'body' => htmlspecialchars($body),
            'user_id' => 1
        ]);
        header('Location: /notes');
    }
}

require 'views/notes/create.view.php';
