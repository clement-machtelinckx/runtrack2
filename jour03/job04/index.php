<?php
$str = "Dans l'espace, personne ne vous entend crier";
$i = 0;
$count = 0;
while (isset($str[$i])){
    echo$str[$i];
    $i ++;
    $count ++;
}
echo "$count <br/>";