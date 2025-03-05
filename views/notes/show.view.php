<?php require(__DIR__ . '/../partials/nav.php'); ?>
<main class="mx-auto py-6 px-6 sm:px-6 lg-8">
    <a href="/notes" class="text-blue-600">Go back</a>
    <p><?= htmlspecialchars($note['body']) ?></p>
    <a href="/note/edit?id=<?= $note['id'] ?>" class="text-blue-600 mt-4">Edit Note</a>
    <form method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button class="text-red-500">DELETE</button>
    </form>
</main>