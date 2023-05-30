<?php
session_start();

if (!isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"] = 1;
}
else {
    $_SESSION["nbvisites"]++;
}
echo "le nombre de session est de " .$_SESSION["nbvisites"]

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
<input type="submit" name="reset" value="Reset">
</form>
<?php
if (isset ($_POST["reset"])){
    unset($_SESSION["nbvisites"]);
}
?>
</body>