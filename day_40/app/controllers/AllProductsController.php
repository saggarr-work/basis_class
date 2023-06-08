<?php
    namespace App\controllers;
    
    class AllProductsController{
        public $page = "views/all-products.php";

        public function index(){
            return $this->page;
        }
    }
?>