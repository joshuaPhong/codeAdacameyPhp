<?php

// Database setup:
$hostname = '/tmp';
$dbname = 'ccuser';
$username = 'ccuser';
$password = 'pass';
$dsn = "pgsql:host=$hostname;dbname=$dbname";
$db = new PDO($dsn, $username, $password);

// Create a query to get the id, title, and author, and assign it to $booksQuery
$bookQuery = $db->query('SELECT id, title, author FROM books');
// Fetch one book using the fetch() method and assign it to the $book variable.
$book = $bookQuery->fetch();

// Fetch all books using the fetchAll() method and assign the result to the $books variable.
$books = $bookQuery->fetchAll();

// Loop over the $books array and echo the title of each book, followed by a line break.
// $books = $bookQuery->fetch(PDO::FETCH_ASSOC);
foreach ($books as $row) {
    echo $row['title'] . "\n";
}