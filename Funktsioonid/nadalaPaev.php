<?php

$eesti_nadalapaev = array('Pühapäev','Esmaspäev','Teisipäev','Kolmapäev','Neljapäev','Reede','Laupäev');

$nadalaPaev = $eesti_nadalapaev[date('w')];

echo $nadalaPaev;
