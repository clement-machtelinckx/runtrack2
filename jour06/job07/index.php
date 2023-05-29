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
    function gras($str) {
        $count = 0;
        $result = "";
        for ($i = 0; isset($str[$i]); $i++) {
            $count++;
        }
        for ($i = 0; $i < $count; $i++){
            if (ctype_upper($str[$i])) {
                $result .= "<b>" . $str[$i] . "</b>";
            } else {
                $result .= $str[$i];
            }
        }
        return $result;
    }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST["fonction"];
    if ($selectedOption == "fonction1") {
        $phrase = $_POST["str"];
        $resultat = gras($phrase);

        echo $resultat;
    }
}

    function cesar($str, $nb=2) {
        $count = 0;
        $result = "";
        for ($i = 0; isset($str[$i]); $i++) {
            $count++;
        }
        for ($i = 0; $i < $count; $i++) {
            $currentChar = $str[$i];
            $nextChar = $str[($i + $nb) % $count];
            $result .= $nextChar;
        }
        return $result;
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $selectedFunction = $_POST['fonction'];
        $inputStr = $_POST['str'];

        if ($selectedFunction === "fonction2") {
            $outputStr = cesar($inputStr);
            echo "Résultat : " . $outputStr;
        }
    }
    ?>
<h1>option</h1>
    <form method="post" action="">
    <label for="str">Phrase</label>
    <input type="text" name="str" id="str">
    <form method="post" action=""><br>

    <label for="fonction">fonction</label>
    <select name="fonction" id="fonction">
    <option value="fonction1">Gras 1</option>
    <option value="fonction2">César 2</option>
    <option value="fonction3">Fonction 3</option>
    <input type="submit" Value="Submit">
</body>