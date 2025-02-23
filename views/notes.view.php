<?php require('partials/nav.php'); ?>
<main class="mx-auto py-6 px-6 sm:px-6 lg-8">
    <?php foreach ($notes as $note) : ?>
        <li><a href="/note?id=<?= $note['id'] ?>"><?= $note['body'] ?></a></li>
    <?php endforeach; ?>

    <a href="/note/create">Create Note</a>
</main>