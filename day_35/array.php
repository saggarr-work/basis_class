<?php
    // $person = [
    //     "Kuril" => [
    //         "name" => "Rahim Uddin",
    //         "age" => 30,
    //         "profession" => "Web Developer"
    //     ],
    //     "Dhanmondi" => [
    //         "name" => "Karim uddin",
    //         "age" => 25,
    //         "profession" => "App Developer"
    //     ],
    //     "Shankar" => [
    //         "name" => "Karim uddin",
    //         "age" => 25,
    //         "profession" => "App Developer"
    //     ]
    // ];

    $person = [
        "name"          => "Sagar",
        "age"           => 30,
        "profession"    => "developer",
        "bloodGroup"    => "A+",
        "mobile"        => "01306472108"
    ];
    // $keys = array_keys($person);
    // $values = array_values($person);
    // for($x = 0; $x < count($keys); $x++){
    //     echo $keys[$x] . " " . $person[$keys[$x]] . "<br>";
    // }

    $keys = array_keys($person);
    echo "<pre>";
    // echo gettype($keys);
    print_r($keys);
    $limit = count($person);
    
    for($i = 0; $i < $limit; $i++){
        echo $keys[$i] . ": " . $person[$keys[$i]] . "<br>";
    }








    $a = 10;
    // if($a != 5){
    //     echo $a = 6;
    // }else{
    //     echo $a;
    // }

    //ternary operator
    // $b = $a ? $a : 6;
    // echo $b;

    //nullpolation operator
    $b = $a ?? 6;
    echo $b;
?>