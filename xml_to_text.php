<?php
// Load the XML file
$xml = simplexml_load_file('BOOK.xml') ;

// Display the data
foreach ($xml as $category => $books) {
    echo "<h2>Category: $category</h2>";
    foreach ($books->BOOK as $book) {
        echo "<b>Title:</b> " . $book->BOOK_TITLE . "<br>";
        echo "<b>Author:</b> " . $book->BOOK_AUTHOR . "<br>";
        echo "<b>Year:</b> " . $book->BOOK_PUB_YEAR . "<br><br>";
    }
}

$txtContent = "";
foreach ($xml as $category => $books) {
    $txtContent .= "Category: $category\n\n";
    foreach ($books->BOOK as $book) {
        $txtContent .= "Title: " . $book->BOOK_TITLE . "\n";
        $txtContent .= "Author: " . $book->BOOK_AUTHOR . "\n";
        $txtContent .= "Year: " . $book->BOOK_PUB_YEAR . "\n\n";
    }
}

file_put_contents('BOOK.txt', $txtContent);

echo "File saved as BOOK.txt";

echo "<h2>Book Titles:</h2>";
foreach ($xml as $category => $books) {
    foreach ($books->BOOK as $book) {
        echo $book->BOOK_TITLE . "<br>";
    }
}
?>
