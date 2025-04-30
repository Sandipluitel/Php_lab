<?php
require_once 'Fruit.php';

class Orange extends Fruit {
    function color() {
        echo "{$this->name} is orange";
    }
}
?>
