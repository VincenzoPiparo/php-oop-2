<?php 

require_once __DIR__ . '/ProductDocuments.php';

    class GymProducts{
     // Includiamo i trait
        use Documents;

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