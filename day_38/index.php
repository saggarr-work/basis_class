<?php
    // header("location: routes.php?page=home");

    

    class GrandFather{
        public $gfName = "Jhinku dadu";
        private $gfMobile = "Citycell";
        protected $gfCar = "phonix";


        public function getGFName(){
            return $this -> gfName;
        }
        
        private function getGFMobile(){
            return $this -> gfMobile;
        }

        protected function getGFCar(){
            return $this -> gfCar;
        }

    }

    class Father extends GrandFather{
        public $fName = "Kalim Uddin";
        private $fMobile = "Nokia 1100";
        protected $fCar = "Honda cd-80";


        public function getFName(){
            return $this -> fName;
        }
        
        private function getFMobile(){
            return $this -> fMobile;
        }

        protected function getFCar(){
            return $this -> fCar;
        }

    }

    $father = new Father();
    // echo $father -> getFCar();

    class Son extends Father{
        public $sName = "Rohim";
        private $sMobile = "Motorola";
        protected $sPc = "Acer";


        public function getSName(){
            return $this -> gfCar;
        }
        
        private function getSMobile(){
            return $this -> sMobile;
        }

        protected function getSPc(){
            return $this -> sPc;
        }

    }

    $son = new Son();
    // echo $son -> fName;
    // echo $son -> getSName();
    echo $son -> getGFName();
    echo $son -> getSName();
    // echo $son -> fCar;

    // echo $son -> sName;
    // echo $son -> sMobile;
    // echo $son -> sPc;

    // echo $son -> getSName();
    // echo $son -> getSMobile();
    // echo $son -> getSPc();



    
?>