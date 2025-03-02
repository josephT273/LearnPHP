<?php

use Core\Database;


$config = require(base_path('config.php'));
$db = new Database($config['database'], 'root', 'password');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query(
        'SELECT * FROM notes WHERE id = :id',
        [
            'id' => $_GET['id']
        ]
    )->findOrFail();

    authorize($note['user_id'] == 100);


    $db->query('DELETE FROM notes WHERE id = :id', [
        'id' => $_POST['id']
    ]);

    redirect('/notes');
    exit();
} else {

    $id = $_GET['id'];


    $note = $db->query(
        'SELECT * FROM notes WHERE id = :id',
        [
            'id' => $_GET['id']
        ]
    )->findOrFail();

    authorize($note['user_id'] == 1);

    view('/notes/show.view.php', [
        'heading' => "Note " . htmlspecialchars($id),
        'note' => $note
    ]);
}
