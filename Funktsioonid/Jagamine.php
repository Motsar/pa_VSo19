<?php

function jagamine($arv1 = 8,$arv2 = 0){
    if($arv2 === 0){
        return 'nulliga ei saa jaga!';
    }else{
        return round($arv1/$arv2,2);
    }

};

echo jagamine();