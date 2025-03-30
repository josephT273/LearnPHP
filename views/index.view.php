<?php require(base_path('views/partials/nav.php')); ?>
<main class="mx-auto py-6 px-6 sm:px-6 lg-8">
    <h1>Hello <?= $_SESSION['user']['email'] ?? 'Guest' ?>, Welcome to Index page</h1>
</main>