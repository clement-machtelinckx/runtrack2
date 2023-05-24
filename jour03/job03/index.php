<?php
$str = ("I'm sorry Dave I'm afraid I can't do that");
$voy = array("a", "e", "i", "o", "u", "y");
$i = 0;
while (isset($str[$i])) {
    $char = strtolower($str[$i]);
    if (!in_array($char, $voy)) {
        echo $char;
    }
    $i++;
}