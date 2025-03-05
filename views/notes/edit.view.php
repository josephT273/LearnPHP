<?php require(__DIR__ . '/../partials/nav.php'); ?>
<main class="mx-auto py-6 px-6 sm:px-6 lg-8">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-md">
        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <div class="mb-4">
                <label for="body" class="block text-gray-700 text-sm font-bold mb-2">
                    Description
                </label>
                <textarea id="body" name="body" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><?= $note['body'] ?></textarea>
            </div>
            <?php if (isset($errors['body'])) : ?>
                <p class="text-red-500 text-2xs mb-3"><?= $errors['body'] ?></p>
            <?php endif; ?>
            <div class="flex items-center justify-end gap-x-4">
                <a href="/notes" type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cancel
                </a>
                <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update
                </button>
            </div>
        </form>
    </div>
</main>