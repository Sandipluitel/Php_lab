<?php
require_once 'Book.php';

class Member {
    public $name;
    public $membershipType;
    public $borrowedBooks = [];

    public function __construct($name, $membershipType) {
        $this->name = $name;
        $this->membershipType = $membershipType;
    }

    public function borrowBook(Book $book) {
        $this->borrowedBooks[] = $book;
    }

    public function displayBorrowedBooks() {
        echo "<h4>Borrowed Books of {$this->name} ({$this->membershipType} Member):</h4>";
        if (empty($this->borrowedBooks)) {
            echo "No books borrowed.<br>";
        } else {
            foreach ($this->borrowedBooks as $book) {
                echo $book->getInfo() . "<br>";
            }
        }
    }
}
?>
