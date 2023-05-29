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
    $str = ("I'm sorry Dave I'm afraid I can't do that");
    $char = "m";

    function occurrences($str, $char){
        $count = 0;
        $count2 = 0;
        for ($i = 0; isset($str[$i]); $i++){
            $count ++;
        }
        for ($i = 0; $i < $count; $i++){
            if ($str[$i] === $char){
                $count2 ++;
            }
        }
        return $count2;

    }
echo occurrences($str, $char)

    ?>
</body>