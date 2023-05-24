<?php 
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$result = "";
$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
    
}

for ($i = 0; $i < $count; $i++) {
    $currentChar = $str[$i];
    $nextChar = $str[($i + 1) % $count];
    $result .= $nextChar;
}

echo $result;