<?php

    namespace App\controllers;

    use App\models\Product;
    use App\models\Slider;

    class HomeController{
        public $page = "views/home.php";

        public function index(){
            return $this->page;
        }
        public function getSliders(){
            $slider = new Slider();
            return $slider -> sliders;
        }
        public function getProducts(){
            $product = new Product();
            return $product -> products;
        }
    }
?>