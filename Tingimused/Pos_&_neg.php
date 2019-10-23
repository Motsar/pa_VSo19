<?php

$arv = -1;
// kontrollime, kas arv on positiivne
// kas arv on suurem kui 0
//var_dump($arv > 0);
if($arv > 0) {
    // kui arv on suurem kui 0
    echo $arv.' on positiivne<br>';
} else if($arv < 0) {
    // muidu - kui arv on väiksem 0
    echo $arv.' on negatiivne<br>';
} else {
    // muidu - kui arv ei ole suurem 0 ja ei ole väiksem kui 0
    echo $arv.' on null<br>';
}
echo 'see on programmi lõpp';