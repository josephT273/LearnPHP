<?php


$config = require(base_path('config.php'));
require(base_path('Core/Validator.php'));
$errors = [];

$db = new Database($config['database'], 'root', 'password');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = $_POST['body'];

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

view('notes/create.view.php', [
    'heading' => "Create Note",
    'errors' => $errors
]);
