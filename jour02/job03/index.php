<?php
for( $i = 0 ; $i < 101 ; $i++){
    if($i <= 20){echo"<i>$i</i><br />";}
    elseif($i == 42){echo"<u>La Plateforme</u><br />";}
    elseif($i >= 25 && $i <= 50){echo"<u>$i</u><br />";}
    else{echo"$i<br />";}

}