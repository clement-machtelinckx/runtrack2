<?php
setcookie("nbvisites");
if (!isset($_COOKIE["nbvisites"])){
    setcookie("nbvisites", 1);
    $_COOKIE["nbvisites"] = 1;
}
elseif ($_COOKIE["nbvisites"]++)
    setcookie("nbvisites", $_COOKIE["nbvisites"]);

echo "le nombre de cookies et de " . $_COOKIE["nbvisites"];

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
    setcookie("nbvisites", 0);
}
?>
</body>