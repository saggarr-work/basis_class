<?php
    require "vendor/autoload.php";
    // require_once "vendor/autoload.php";

     use App\Controllers\HomeController;

    if(isset($_GET["page"])){
        if("home" == ($_GET["page"])){
            // $homeC = new HomeController();
            $homeC = new HomeController();
            include $homeC->index();
        }
    }
?>