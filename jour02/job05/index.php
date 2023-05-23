<?php
for( $i = 2 ; $i < 1000 ; $i++){
    $estpremier = true;
    for( $x = 2 ; $x < $i ; $x++){
        if($i % $x == 0){
            $estpremier = false;
            break;
        }
    }
    if($estpremier){
        echo $i . "<br/>";
    }
}