<?php
class Car {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    function printDetails() {
        echo "Car Name: $this->name";
    }
}

class Ford extends Car {
    public $country;

    function __construct($name, $country) {
        parent::__construct($name);
        $this->country = $country;
    }

    function printDetails() {
        echo "Car Name: $this->name - Country: $this->country";
    }
}

$ford = new Ford("Ford", "USA");
$ford->printDetails();
?>
