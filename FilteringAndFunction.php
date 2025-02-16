<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associated Array</title>
</head>
<body>
<?php
$books = [
    [
        'name' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'purchaseUrl' => 'https://example.com/the-great-gatsby',
    ],
    [
        'name' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'purchaseUrl' => 'https://example.com/to-kill-a-mockingbird',
    ],
    [
        'name' => '1984',
        'author' => 'George Orwell',
        'purchaseUrl' => 'https://example.com/1984',
    ],
    [
        'name' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'purchaseUrl' => 'https://example.com/pride-and-prejudice',
    ],
];

function filterByAuthor($books, $author){
    $filteredBooks = [];
    foreach($books as $book){
        if($book['author'] === $author){
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}

?>
<h1>Books</h1>
<ul>
    <?php foreach(filterByAuthor($books, "Jane Austen") as $book) : ?>
            <a href="<?= $book['purchaseUrl']; ?>">
                <li><?= $book['name'] ?> by <?= $book['author'] ?></li>
            </a>
    <?php endforeach; ?>
</ul>
</body>
</html>
