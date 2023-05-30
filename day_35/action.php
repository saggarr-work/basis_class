<?php
    require_once "vendor/autoload.php";
    //isset function diye value check kora hoy
    if(isset($_GET["page"])){
        if("home" == $_GET["page"]){
            $blogs = new \App\classes\Blog();
            include "pages/template-parts/home.php";
        }
        elseif("about" == $_GET["page"]){
            include "pages/template-parts/about.php";
        }
        elseif("contact" == $_GET["page"]){
            include "pages/template-parts/contact.php";
        }
        elseif("blog-details" == $_GET["page"]){
            include "pages/template-parts/details.php";
        }
    }
?>