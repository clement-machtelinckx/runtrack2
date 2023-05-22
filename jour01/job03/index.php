<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php
        $str = "bonjour";
        echo $str;
    ?></p>
    <p><?php
        $int = 6;
        echo $int;
    ?></p>
    <p><?php
        $float = 4.5;
        echo $float;
    ?></p>
    <p><?php
        $bool = TRUE;
        echo $bool;
    ?></p>

    <?php
    $tableau = "<table>
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Nom</th>
                            <th>Valeur</th>
                        </tr>
                    </thead>
                    <tbody>";

    $tableau .= "<tr>
                    <td>".gettype($str)."</td>
                    <td>str</td>
                    <td>$str</td>
                </tr>";

    $tableau .= "<tr>
                    <td>".gettype($int)."</td>
                    <td>int</td>
                    <td>$int</td>
                </tr>";

    $tableau .= "<tr>
                    <td>".gettype($float)."</td>
                    <td>float</td>
                    <td>$float</td>
                </tr>";

    $tableau .= "<tr>
                    <td>".gettype($bool)."</td>
                    <td>bool</td>
                    <td>$bool</td>
                </tr>";

    $tableau .= "</tbody>
                </table>";

    echo $tableau;
    ?>
</body>
</html>
