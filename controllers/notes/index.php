<?php
$heading = "Notes";

$config = require('config.php');
$db = new Database($config['database'], 'root', 'password');

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();



require 'views/notes/index.view.php';
