<?php
    function fullName($firstName, $lastName){
        echo $firstName . " " . $lastName;
    }
    function age($age){
        echo $age;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Profine Name: <?php fullName("Sagar", "Biswas"); ?></h1>
    <h4>Age: <?php age(30); ?></h4>
</body>
</html>