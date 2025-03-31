<?php

view('registration/create.view.php', [
    'errors' => $_SESSION['_flash']['errors'] ?? []
]);