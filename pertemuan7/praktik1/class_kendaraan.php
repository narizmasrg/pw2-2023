<?php

    class Kendaraan {
        protected $type;
        protected $fuel;
        
        protected function __construct ($type, $fuel)
    {
        $this->type = $type;
        $this->fuel = $fuel;
     }

    protected function getInfo()
    {
        echo "Jenis kendaraan" . $this->type . "<br>";
        echo "Bahan Bakar" . $this->fuel . "<br>";
    }
}

    class Motor extends Kendaraan {
        public $roda;

        public function __construct($type,$fuel,$roda)
        {
            parent::__construct($type,$fuel);
            $this->roda = $roda;
        }

        public function getInfo()
        {
            parent::getInfo();
            echo "jumlah Roda: " . $this->roda . "<br>";
        }
    }

    class Submarine extends Kendaraan {
        protected $max_depth;

        public function __construct($type,$fuel,$max_depth)
        {
            parent::__construct($type,$fuel);
            $this->max_depth = $max_depth;
        }

        public function getInfo()
        {
            parent::getInfo();
            echo "jumlah max_depth: " . $this->max_depth . "<br>";
        }
    }

?>