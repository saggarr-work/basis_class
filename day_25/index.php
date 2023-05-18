<?php
    require_once "app/classes/HelloWorld.php";
    require_once "app/classes/PersonalInfo.php";

    use App\classes\HelloWorld;
    use App\classes\PersonalInfo;

    $phone = new HelloWorld();
    // echo gettype($p_name);
    $age = new PersonalInfo();
    
    $phone->index();
    echo"<br>";
    $phone->camera();
    echo"<br>";
    $age->getAge();
?>
