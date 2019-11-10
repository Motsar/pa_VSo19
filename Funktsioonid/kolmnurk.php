<?php

function kolmnurk($kulgA = 5, $kulgB = 5){
    return round(sqrt(pow($kulgA,2) + pow($kulgB,2)),0);
};

echo 'Kolmnurga kolmas kylg on ', kolmnurk()  ,' cm pikk!';