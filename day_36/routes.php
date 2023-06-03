
<?php

    // slider class required 
    require_once "app/models/Slider.php";

    if(isset($_GET["page"])){

        include "views/includes/header.php";

        if($_GET["page"] == "home"){
            $s = new Slider();
            print_r($s -> sliders);
            include "views/home.php";
        }
        elseif($_GET["page"] == "contact"){
            include "views/contact.php";
        }
        elseif($_GET["page"] == "about"){
            include "views/about.php";
        }
        elseif($_GET["page"] == "login"){
            include "views/login.php";
        }
        elseif($_GET["page"] == "all-products"){
            include "views/all-products.php";
        }
        elseif($_GET["page"] == "registration"){
            include "views/registration.php";
        }
        else{
            include "views/includes/error.php";
        }

        include "views/includes/footer.php";
        
    }else{
        echo "<h1>error 404</h1>";
    }
?>

