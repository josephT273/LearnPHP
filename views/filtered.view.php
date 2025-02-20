<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associated Array</title>
</head>
<body>
    <h1>Books</h1>
    <ul>
        <?php foreach($filteredBooks as $book) : ?>
            <a href="<?= $book['purchaseUrl']; ?>">
                <li><?= $book['name'] ?> by <?= $book['author'] ?></li>
            </a>
        <?php endforeach; ?>
    </ul>
</body>
</html>
