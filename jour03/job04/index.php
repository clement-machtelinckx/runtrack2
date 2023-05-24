<?php
$str = "Dans l'espace, personne ne vous entend crier";
$alpha = array("z", "r", "t", "p", "q", "s", "d", "f", "g", "h", "j", "k", "l", "m", "w", "x", "c", "v", "b", "n", "a", "e", "i", "o", "u", "y");

$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    if (in_array($str[$i], $alpha)); {
        $count ++;}
    }


echo "$count <br/>";