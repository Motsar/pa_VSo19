<?php

for ($arv = 1; $arv < 11; $arv++){
    $jaak = $arv%2;
    if($jaak == 0){
        echo 'Paaris ',+ $arv.'<br>';
    }else{
        echo 'Paaritu ',+ $arv.'<br>';

    }
}