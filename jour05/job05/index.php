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
    if (isset($_POST ["submit"])){
        $style = $_POST['style'];
        echo '<link rel="stylesheet" type="text/css" href="' . $style . '.css">';
    }

    ?>
    <h1>changerment de style</h1>
    <form method="post" action="">
    <label for="style">Style</label>
    <select name="style" id="style">
    <option value="style1">Style 1</option>
    <option value="style2">Style 2</option>
    <option value="style3">Style 3</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Valider">
    </form>
    <?php
        if (isset($_POST['submit'])) {
            echo "<p>Le style $_POST[style] a été appliqué avec succès!</p>";
        }
    ?>
</body>