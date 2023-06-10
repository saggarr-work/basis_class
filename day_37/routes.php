
<?php

    // slider class required 
    // require_once "app/models/Slider.php";
    // controllers required by composer autoload
    require_once "vendor/autoload.php";

    use App\controllers\HomeController;
    use App\controllers\AboutController;
    use App\controllers\AllProductsController;
    use App\controllers\ContactController;
    use App\controllers\LoginController;
    use App\controllers\RegistrationController;
    use App\models\Slider;


    if(isset($_GET["page"])){

        include "views/includes/header.php";

        if($_GET["page"] == "home"){
            $homeC = new HomeController();
            $sliderArray = $homeC -> getSliders();
            print_r($sliderArray);
            include $homeC -> index();
        }
        elseif($_GET["page"] == "contact"){
            // include "views/contact.php";
            $contactC = new ContactController();
            include $contactC -> index();
        }
        elseif($_GET["page"] == "about"){
            // include "views/about.php";
            $aboutC = new AboutController();
            include $aboutC -> index();
        }
        elseif($_GET["page"] == "login"){
            // include "views/login.php";
            $loginC = new LoginController();
            include $loginC -> index();
        }
        elseif($_GET["page"] == "all-products"){
            // include "views/all-products.php";
            $allProducts = new AllProductsController();
            include $allProducts -> index();
        }
        elseif($_GET["page"] == "registration"){
            // include "views/registration.php";
            $registrationC = new RegistrationController();
            include $registrationC -> index();
        }
        else{
            include "views/includes/error.php";
        }

        include "views/includes/footer.php";
        
    }else{
        echo "<h1>error 404</h1>";
    }
?>

