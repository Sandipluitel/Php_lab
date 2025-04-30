<?php
class Car {
    public $name;
    public $year;

    // Set the name of the car
    public function set_name($name) {
        $this->name = $name;
    }

    // Get the name of the car
    public function get_name() {
        return $this->name;
    }

    // Set the year of the car
    public function set_year($year) {
        $this->year = $year;
    }

    // Get the year of the car
    public function get_year() {
        return $this->year;
    }
}

// Create an instance of Car
$ford = new Car();
$ford->set_name("Ford");
$ford->set_year(2021);

// Output the car's details
echo $ford->get_name() . " - " . $ford->get_year();
?>
