<?php
$str = ("on n'est pas le meilleur quand on le croit mais quand on le sait");
$voy = array("a", "e", "i", "o", "u", "y");
$con = array("z", "r", "t", "p", "q", "s", "d", "f", "g", "h", "j", "k", "l", "m", "w", "x", "c", "v", "b", "n");
$dic = array("voyelle" => 0, "consonne" => 0);

for ($i = 0; isset($str[$i]); $i++) {
    if (in_array($str[$i], $voy)) {
        $dic["voyelle"]++;
    } elseif (in_array($str[$i], $con)) {
        $dic["consonne"]++;
    }
}

echo "Nombre de voyelles : " . $dic["voyelle"] . "<br />";
echo "Nombre de consonnes : " . $dic["consonne"];