<?php
require_once __DIR__ . '/Gym.php';

class Flexotor extends GymProducts {
    //override
    public $price = 31.43;

    public function __construct($_brand, $_weight, $_color,$_price) {
        parent::__construct($_brand, $_weight, $_color);
        $this->$price = $_price;
    }
}
?>