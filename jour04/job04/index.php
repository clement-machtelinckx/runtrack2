

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

    <?php
// Vérifie si $_POST est vide
if ($_POST) {
    echo '<table border="1">';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';

    // Parcourir $_GET
    foreach ($_POST as $key => $value) {
        // Crée les lignes de tableau
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $value . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
</body>