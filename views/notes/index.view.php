<?php require(__DIR__ . '/../partials/nav.php'); ?>
<main class="mx-auto py-6 px-6 sm:px-6 lg-8">
    <?php foreach ($notes as $note) : ?>
        <li class="list-none text-blue-500 text-bold"><a href="/note?id=<?= $note['id'] ?>"><?= $note['body'] ?></a></li>
    <?php endforeach; ?>

    <a href="/note/create" class="text-blue-500">Create Note</a>
</main>