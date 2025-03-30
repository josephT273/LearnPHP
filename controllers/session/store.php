<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
// validate the form inputs

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = 'Please provide a valid password';
}

if (!empty($errors)) {
    return view('sessions/create.view.php', [
        'errors' => $errors,
    ]);
}

$db = App::resolve(Database::class);

//check if the account already exists
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);
    }
}


$errors['email'] = 'No account found with that email address and pasword';
return view('sessions/create.view.php', [
    'errors' => $errors,
]);
