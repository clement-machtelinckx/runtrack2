<?php
$str = ("I'm sorry Dave I'm afraid I can't do that");
$length = strlen($str);

$voy = array("a", "e", "i", "o", "u", "y");

for ($i = 0; $i < $length; $i++) {
    $char = strtolower($str[$i]);
    if (!in_array($char, $voy)) {
        echo $char;
    }
}