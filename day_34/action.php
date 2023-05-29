<?php
    // echo $_GET["page"];

use App\classes\Blogs;

    if(isset($_GET["page"])){
        // if($_GET["page"] == "home"){
        //     echo "this is homepage";
        // }else{
        //     echo "this is not homepage";
        // }
        if("home" == $_GET["page"]){
            // $blog = new \App\classes\Blogs();
            $blog = new Blogs();
            include "pages/home.php";
        }
    }
?>