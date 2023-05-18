<?php
    namespace App\classes;
    class HelloWorld{
        public $name;  //property
        public function __construct()  //method
        {
            $this->name = "Sagar Biswas";
        }
        public function index(){   //method
            echo $this->name;
        }
        public function camera(){
            echo "Camera is on";
        }
    }
?>
