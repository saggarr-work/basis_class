<?php
    namespace App\controllers;
    
    class RegistrationController{
        public $page = "views/registration.php";

        public function index(){
            return $this->page;
        }
    }
?>