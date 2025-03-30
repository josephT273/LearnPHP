<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

$login_form = $form->validate($email, $password);

if (!$login_form) {
    return view('sessions/create.view.php', [
        'errors' => $form->errors(),
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
