<?php
    namespace App;
    require_once "vendor/autoload.php";
   
    // use App\About;
    use App\classes\Home;

    $homeObj = new Home();
    $homeObj->home();

    $aboutObj = new About();
    $aboutObj->about();

    $homeObj->index();

    // $a = 20; //global scope
    // function one(){
    //     global $a;
    //     echo $a; //local scope
    // }
    // one();
?>