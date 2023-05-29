<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function calcule($nb1, $simb, $nb2){
        if ($simb == "+"){
            $result = $nb1 + $nb2;
        }
        elseif ($simb == "-"){
            $result = $nb1 - $nb2;
        }
        elseif ($simb == "*"){
            $result = $nb1 * $nb2;
        }
        elseif ($simb == "/"){
            $result = $nb1 / $nb2;
        }
        elseif ($simb == "%"){
            $result = $nb1 % $nb2;
        }
        return $result;
    }
    echo calcule(3, "+", 39) . "<br>";
    echo calcule(45, "-", 3) . "<br>";
    echo calcule(3, "*", 32) . "<br>";
    echo calcule(49, "/", 4) . "<br>";
    echo calcule(30, "%", 4) . "<br>";

    ?>
</body>