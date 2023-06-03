<?php
    if(isset($_GET["page"])){

        // header included 
        include "views/includes/header.php";

        if("home" == ($_GET["page"])){
            include "views/home.php";
        }
        elseif("about-us" == ($_GET["page"])){
            include "views/about-us.php";
        }
        elseif("contact-us" == ($_GET["page"])){
            include "views/contact-us.php";
        }
        else{
            echo "<h1>error 404</h1>";
        }

        // footer included 
        include "views/includes/footer.php";
    }
    else{
        // include "views/home.php";
        header("location: routes.php?page=home");
    }
?>