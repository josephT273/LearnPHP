<?php require(__DIR__ . '/../partials/nav.php'); ?>
<main class="mx-auto py-6 px-6 sm:px-6 lg-8">
    <p><?= htmlspecialchars($note['body']) ?></p>
    <form method="POST">
        <button class="text-red-500">DELETE</button>
    </form>
</main>