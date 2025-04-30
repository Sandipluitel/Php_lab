<?php
// Abstract class Fruit
abstract class Fruit {
    public $name;

    // Constructor to set the name of the fruit
    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method that must be defined in child classes
    abstract public function color();
}

// Apple class extends Fruit
class Apple extends Fruit {
    public function color() {
        echo $this->name . " is red.<br>";
    }
}

// Orange class extends Fruit
class Orange extends Fruit {
    public function color() {
        echo $this->name . " is orange.<br>";
    }
}

// Grape class extends Fruit
class Grape extends Fruit {
    public function color() {
        echo $this->name . " is purple.<br>";
    }
}

// Create instances and call the color method
$apple = new Apple("Apple");
$orange = new Orange("Orange");
$grape = new Grape("Grape");

$apple->color();
$orange->color();
$grape->color();
?>
