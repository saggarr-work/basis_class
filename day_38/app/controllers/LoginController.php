<?php
    namespace App\controllers;
    
    class LoginController{
        public $page = "views/login.php";

        public function index(){
            return $this->page;
        }
    }
?>