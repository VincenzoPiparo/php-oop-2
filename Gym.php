<?php 
    class GymProducts{
        public $brand;
        public $weight;
        protected $price = 25;
        public $color;

        public function __construct ($brand, $weight, $color) {
            $this->brand = $brand;
            $this->weight = $weight;
            $this->color = $color;
        }
    }

?>