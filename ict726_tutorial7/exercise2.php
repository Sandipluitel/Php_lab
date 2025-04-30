<?php
class Car {
    public $name;
    public $year;

    // Constructor: initializes name and year
    public function __construct($name, $year) {
        $this->name = $name;
        $this->year = $year;
    }

    // Destructor: outputs name and year
    public function __destruct() {
        echo $this->name . " - " . $this->year;
    }
}

// Create an instance of Car
$ford = new Car("Ford", 2021);
?>
