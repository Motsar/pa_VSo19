<?php
$etteantudArv = 20;
$kasutajaArv = 19;
if($etteantudArv == $kasutajaArv){
    echo 'tubli arvasid ära!<br>';
    echo 'Arv on '.$kasutajaArv.'<br>';

} else{
    $vahemik = abs($etteantudArv) - abs($kasutajaArv);

    if($vahemik <= 5){
        // tulemus lähedal
        echo 'Veel ei arvanud ära, aga oled päris lähedal<br>';
    }
    if($kasutajaArv > $etteantudArv) {
        // suurem kui ette antud
        echo $kasutajaArv.' On suurem, kui ette antud arv<br>';
    } else {
        // väiksem kui ette antud
        echo $kasutajaArv.' On väiksem, kui ette antud arv<br>';
    }
}
