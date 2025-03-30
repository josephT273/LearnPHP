<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
// validate the form inputs

if(!Validator::email($email)){
    $errors['email'] = 'Plesase provide a valid email address';
}

if(!Validator::string($password, 8, 255)){
    $errors['password'] = 'Password must be at least 8 character long';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors,
    ]);
}

$db = App::resolve(Database::class);

//check if the account already exists
$result = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

// If user exists, redirect to the login page
if ($user) {
    header("location: /");
    exit();
}else{
    // If user does not exist, create a new user
    $db->query('INSERT INTO users (email, password) VALUES (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
    ]);

    $_SESSION['user'] = [
        'email' => $email,
    ];
    header("location: /");
    exit();
}
