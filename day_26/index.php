<?php
    // notes 
    // 1. variables: ja vary kore tai e variable 

    // rules of variable 
    // Do's:
    //     1. sobsomoy $ sign diye start korte hobe
    //     2. a-z or A-Z or 0-9 use kora jabe
    //     3. sobsomoy lowercase letter diye suru korte hobe
    //     4. variable name obossoi readble hote hobe(duita word er majhe undescore deoa jabe na camel case a likhte hobe jemon first_name na likhe firstName likhte hobe)
    //     5. variable name obossoi meaningful hote hobe

    // Dont's: 
    //     1. $sign na dire suru kora jabe na
    //     2. special keyword use kora jabe na jemon function class new etc
    //     3. special caracter use kora jabe na jemon # % & etc
    //     4. number diye variable name suru kora jabe na

    // DATA TYPES IN PHP 
?>

<?php
    $str = "bangladesh";
    $int = 10;
    $float = 10.22;
    $true = true;
    $false = false;
    $null = null;
    $arr = array();
    $arr2 = [];
    // $obj = object;
    // $obj2 = resource;


    echo gettype($str) . "<br>";
    echo gettype($int) . "<br>";
    echo gettype($float) . "<br>";
    echo gettype($true) . "<br>";
    echo gettype($false) . "<br>";
    echo gettype($null) . "<br>";
    echo gettype($arr) . "<br>";
    echo gettype($arr2) . "<br>";
    // echo gettype($obj) . "<br>";
    // echo gettype($obj2) . "<br>";
?>


<?php
    // OPERATOR 
   
    // 1. ARITHMETIC OPERATORS
        // +, -, *, /, %, **
    
    // 2. ASSIGNMENT OPERATORS
        // =, +=, -=, *=, /=

    // 3. STRING RELATED OPERATORS
        // ., .=

    // 4. COMPARISON OPERATORS
        // ==, ===, !=, !==,<, >, <=, >=, <=>

    // 4. LOGICAL OPERATORS
        // and, or, xor, !, &&, ||, 

    // 5. TERNARY OPERATORS
        // ?:, ??

    // 6. ARRAY OPERATORS
        // 


    //arithmetic
    $a = 2;
    $b = 5;
    echo $a . " + " . $b . " = " . $a + $b . "<br>";
    echo $a . " - " . $b . " = " . $a - $b . "<br>";
    echo $a . " * " . $b . " = " . $a * $b . "<br>";
    echo $a . " / " . $b . " = " . $a / $b . "<br>";
    echo $a . " % " . $b . " = " . $a % $b . "<br>";

    //assignment
    $c = 2;
    $c += 5;
    echo $c . "<br>";

    //comparisn
    $d = 100;
    $e = 100;
    $f = "100";
    echo $d == $e;
    echo "<br>"; // output 1 mane true
    echo $d === $f;
    echo "<br>"; //outpot faka mane false
?>