<?php
    namespace App\classes;

    class Home{

        public function home(){
            echo "This is a Home Function <br>";
        }
        public function index(){
            return header("location: route.php?day=33");
        }
    }
?>