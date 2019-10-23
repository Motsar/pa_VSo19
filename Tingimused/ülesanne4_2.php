<?php

// määrame muutujad
$x = 15;
$y = -5;
// jaga x y-ga
$jagatis = $x / $y;
// kas jagaja on 0
if($y == 0){
    // siis väljastame hoiutav lause
    echo 'NULLIGA JAGAMINE ON KEELATUD!!!!<br>';
} else {
    echo $x.' / '.$y.' = '.$jagatis.'<br>';
}
