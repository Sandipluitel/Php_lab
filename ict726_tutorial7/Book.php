<?php
class Book {
    public $title;
    public $author;

    function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    function getInfo() {
        return "$this->title by $this->author";
    }
}
?>
