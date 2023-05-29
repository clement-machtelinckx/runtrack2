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
function leetspeak($str)
{

$result = "";

for($i=0 ; isset($str[$i]) ; $i++ )
{

    if ($str[$i] == 'a' OR $str[$i] == 'A'){
        $result[$i] = '4';
    }
    elseif ($str[$i] == 'b' OR $str[$i] == 'B'){
        $result[$i] = '8';
    }
    elseif ($str[$i] == 'e' OR $str[$i] == 'E'){
        $result[$i] = '3';
    }
    elseif ($str[$i] == 'g' OR $str[$i] == 'G'){
        $result[$i] = '6';
    }
    elseif ($str[$i] == 'l'  OR $str[$i] == 'L'){
        $result[$i] = '1';
    }
    elseif ($str[$i] == 's' OR $str[$i] == 'S'){
        $result[$i] = '5';
    }
    elseif ($str[$i] == 't' OR $str[$i] == 'T'){
        $result[$i] = '7';
    }
    else{
        $result[$i] = $str[$i];
    }
}

return ($result); 

}
$str = "je sais pas quoi ecrire donc j'ecris nimporte quoi";
echo leetspeak($str);


?>
</body>