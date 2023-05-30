

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
        <input type="text" name="prenom">
        <input type="submit" name="connection" value="connection">
    </form>
    <?php
    if (isset($_POST["prenom"])){
        setcookie("prenom",$_POST["prenom"]);
    }
    echo "bonjour" . " " . $_COOKIE["prenom"];
    ?>
</body>