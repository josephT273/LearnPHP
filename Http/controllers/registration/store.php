<?php

use Core\Authenticator;
use Http\Forms\RegistrationForm;

$form = RegistrationForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$registered = (new Authenticator())->register($attributes);

if (!$registered) {
    $form->error(
        'email', 'Email already taken'
    )->throw();
}

redirect("/");
