<?php
    namespace App\classes;
    class PersonalInfo{
        public $age;
        public function __construct(){
            $this->age = 29;
        }
        public function getAge(){
            echo "My age is: " . $this->age;
        }
    }
?>