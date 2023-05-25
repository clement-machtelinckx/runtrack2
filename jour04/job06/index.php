

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="nb">nombre</label>
        <input type="text" name="nombre" id="nb">
        <input type="submit" value="Submit">
    </form>
<?php
/*if(($_GET["nombre"]) % 2 == 0){
    echo "le nombre $_GET[nombre] est paire";
}
else{
    echo "le nombre $_GET[nombre] est impaire";
}*/
foreach($_GET as $name => $value){
  if ($value % 2 == 0){
    echo "le nombre $value est paire";
  }
  else {
    echo "le nombre $value est impaire";
  }
}
?>
</body>