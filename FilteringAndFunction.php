<?php
$books = [
    [
        'name' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'purchaseUrl' => 'https://example.com/the-great-gatsby',
        'releaseYear' => 1925,
    ],
    [
        'name' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'purchaseUrl' => 'https://example.com/to-kill-a-mockingbird',
        'releaseYear' => 1960,
    ],
    [
        'name' => '1984',
        'author' => 'George Orwell',
        'purchaseUrl' => 'https://example.com/1984',
        'releaseYear' => 1949,
    ],
    [
        'name' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'purchaseUrl' => 'https://example.com/pride-and-prejudice',
        'releaseYear' => 1813,
    ],
];

// User generated function
function filter($items, $function){
    $filteredItems = [];
    foreach($items as $item){
        if($function($item)){
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

$filteredBooks = array_filter($books,  function ($book) {
    return $book['releaseYear'] < 1950;
});

require 'views/filtered.view.php';
