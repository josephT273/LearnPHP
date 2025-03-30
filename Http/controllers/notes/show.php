<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id = $_GET['id'];


$note = $db->query(
    'SELECT * FROM notes WHERE id = :id',
    [
        'id' => $_GET['id']
    ]
)->findOrFail();

authorize($note['user_id'] === 1);

view('/notes/show.view.php', [
    'heading' => "Note " . htmlspecialchars($id),
    'note' => $note
]);
