<?php
// Load the XML file
$xml = simplexml_load_file("BOOK.xml") or die("Error: Cannot load XML file");

// Loop through each category
foreach ($xml as $category => $books) {
    echo "<h2>Category: $category</h2>";
    // Loop through each book
    foreach ($books->BOOK as $book) {
        echo "Publication Year: " . $book->BOOK_PUB_YEAR . "<br>";
        echo "Title: " . $book->BOOK_TITLE . "<br>";
        echo "Author: " . $book->BOOK_AUTHOR . "<br><br>";
    }
}
?>