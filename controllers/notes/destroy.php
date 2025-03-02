<?php

use Core\Database;


$config = require(base_path('config.php'));
$db = new Database($config['database'], 'root', 'password');

$note = $db->query(
    'SELECT * FROM notes WHERE id = :id',
    [
        'id' => $_POST['id']
    ]
)->findOrFail();

authorize($note['user_id'] == 1);


$db->query('DELETE FROM notes WHERE id = :id', [
    'id' => $_POST['id']
]);

redirect('/notes');
exit();
