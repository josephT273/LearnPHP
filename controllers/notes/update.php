<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$note = $db->query(
    'SELECT * FROM notes WHERE id = :id',
    [
        'id' => $_POST['id']
    ]
)->findOrFail();

authorize($note['user_id'] === 1);

$errors = [];
$body = $_POST['body'];

if (!Validator::string($body, 1, 255)) {
    $errors['body'] = 'A body of no more than 255 characters is required.';
}

if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => "Edit Note",
        'errors' => $errors,
        'note' => $note
    ]);
    exit();
}

$db->query("UPDATE notes set body = :body WHERE id = :id", [
    'id' => $_POST['id'],
    'body' => htmlspecialchars($body),
]);
header('Location: /notes');
