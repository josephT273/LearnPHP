<?php require(__DIR__ . '/../partials/nav.php'); ?>
<main class="mx-auto py-6 px-6 sm:px-6 lg-8">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-md">
        <form method="POST">
            <div class="mb-4">
                <label for="body" class="block text-gray-700 text-sm font-bold mb-2">
                    Description
                </label>
                <textarea id="body" name="body" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <?= htmlspecialchars($_POST['body'] ?? '') ?>
                </textarea>
            </div>
            <?php if (isset($errors['body'])) : ?>
                <p class="text-red-500 text-2xs mb-3"><?= $errors['body'] ?></p>
            <?php endif; ?>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>
    </div>
</main>