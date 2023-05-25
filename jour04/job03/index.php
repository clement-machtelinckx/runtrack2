<?php
$count = 0;
if (isset($_POST ["prenom"]) && isset($_POST ["nom"])) {
    $prenom = $_POST ["prenom"];
    $nom = $_POST ["nom"];
    var_dump($_POST);
    echo "yoyoyo $prenom $nom <br/>";
    }
    foreach($_POST as $name => $name){
    $count ++;
    }
    echo "le nombre de post est $count";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="prenom">prénom</label><br>
        <input type="text" name="prenom" id="prenom" placeholder="prenom"><br>
        <label for="nom">nom</label><br>
        <input type="text" name="nom" id="nom" placeholder="nom"><br>
        <input type="submit" value="Submit">
    </form>

</body>