<?php


use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$note = $db->query(
    'SELECT * FROM notes WHERE id = :id',
    [
        'id' => $_GET['id']
    ]
)->findOrFail();

authorize($note['user_id'] === 1);


$errors = [];

view('notes/edit.view.php', [
    'heading' => "Edit Note",
    'errors' => $errors,
    'note' => $note
]);
