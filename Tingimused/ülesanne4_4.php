<?php

$hetkeAasta = 2019;

$sunniAasta = 1989;
// aastate vahe - kasutaja vanus
$vanus = $hetkeAasta - $sunniAasta;
echo 'Oled '.$vanus.' aastat vana<br>';
// kontrollime, kas vanus jagub 5-ga
// selleka leiame jagamise jääk
$jaak = $vanus % 5;
// kui jääk on null - vanus jagub 5-ga
if($jaak == 0){
    echo 'Sel aasta on sul juubel! Palju õnne!<br>';
} else {
    echo 'Sul ei ole veel juubel!<br>';
}
