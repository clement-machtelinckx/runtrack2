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
    $str = "Je marque n'importe quoi car je sais pas quoi mettre.";
    function leetspeak(){
        $count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}
        $result = "";
        for($i=0 ; isset($str[$i]) ; $i++){
            if ($str[$i] == "a" or $str[$i] == "A"){
                $result[$i] = "4";
            }
            elseif ($str[$i] == "b" or $str[$i] == "B"){
                $result[$i] = "8";
            }
            elseif ($str[$i] == "e" or $str[$i] == "E"){
                $result[$i] = "3";
            }
            elseif ($str[$i] == "g" or $str[$i] == "G"){
                $result[$i] = "6";
            }
            elseif ($str[$i] == "l" or $str[$i] == "L"){
                $result[$i] = "1";
            }
            elseif ($str[$i] == "s" or $str[$i] == "S"){
                $result[$i] = "5";
            }
            elseif ($str[$i] == "t" or $str[$i] == "T"){
                $result[$i] = "7";
            }
            else{ 
                $result[$i] = $str[$i];
            }
        }
        return $result
    }
    echo leetspeak($str);
    ?>
</body>