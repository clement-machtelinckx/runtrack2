<?php
session_start();

if (isset ($_POST["prenom"])){
    $_SESSION["prenom"] = $_POST["prenom"];
    echo $_SESSION["prenom"];
}

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
<form method="post" action="">
<input type="text" name="prenom" value="" placeholder="prénom">
<input type="submit" name="Submit" value="submit">
<input type="submit" name="reset" value="Reset">
</form>
</body>