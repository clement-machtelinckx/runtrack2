<?php
session_start();

if (isset ($_POST["prenom"])){
    $prenom = $_POST["prenom"];

if (!isset($_SESSION["list_prenom"])){
    $_SESSION["list_prenom"] = array();
}
$_SESSION["list_prenom"][] = $prenom;
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
<?php
if (isset($_SESSION["list_prenom"])){
    foreach ($_SESSION["list_prenom"] as $prenom){
        echo $prenom . "<br>";
    }
}
if (isset($_POST["reset"])){
    session_destroy();
}
?>
</body>