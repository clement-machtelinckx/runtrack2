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
        <label for="username">username</label><br>
        <input type="text" name="username" id="username" placeholder="username"><br>
        <label for="password">password</label><br>
        <input type="password" name="password" id="password" placeholder="passeword"><br>
        <input type="submit" value="Submit" name="submit">
    </form>
<?php
if (isset ($_POST["submit"])){
    if ($_POST ["username"] == "john" && $_POST ["password"] == "rambo"){
        echo "c'est pas ma guerre";
    }
    else {
        echo "votre pire cauchemarre!";
        }
    
}

?>

</body>