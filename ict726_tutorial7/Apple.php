<?php
require_once 'Fruit.php';

class Apple extends Fruit {
    function color() {
        echo "{$this->name} is red";
    }
}
?>
