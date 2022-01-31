<?php
require_once __DIR__ . '/Gym.php';

class Glycobol extends GymProducts {
    //override
    public $price = 20.69;
    public $iva = 12;

    public function __construct($_brand, $_weight, $_color,$_price) {
        parent::__construct($_brand, $_weight, $_color);
        $this->$price = $_price;
    }
}
?>