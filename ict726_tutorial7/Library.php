<?php
require_once 'Book.php';

class Library {
    public $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function displayBooks() {
        echo "<h3>Library Books:</h3>";
        foreach ($this->books as $book) {
            echo $book->getInfo() . "<br>";
        }
    }
}
?>
