<?php
define("PI", 3.14);

class CircleArea {
    public $radius;

    function __construct($radius) {
        $this->radius = $radius;
        $area = PI * $radius * $radius;
        echo "Area of circle: $area";
    }

    function __destruct() {
        echo " (radius: $this->radius)";
    }
}

$r = new CircleArea(5);
?>
