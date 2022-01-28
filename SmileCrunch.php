<?php
require_once __DIR__ . '/Gym.php';

class SmileCrunch extends GymProducts {
    //override
    public $price = 0.72;

    public function __construct($_brand, $_weight, $_color,$_price) {
        parent::__construct($_brand, $_weight, $_color);
        $this->$price = $_price;
    }
}
?>