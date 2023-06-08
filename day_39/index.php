<?php
    // header("location: routes.php?page=home");

    class Cat{
        public $name = "sagar";
        public function myMethod(){
            return $this -> name;
        }
        
        public function __construct(int $a, int $b)
        {
            $c = $a + $b;
            echo "addition of " . $a . " and " . $b . " is " . $c; 
        }
    }

    new Cat(5, 8);
    // echo $cat -> myMethod();
    
?>