<?php
require_once 'Fruit.php';

class Grape extends Fruit {
    function color() {
        echo "{$this->name} is purple";
    }
}
?>
