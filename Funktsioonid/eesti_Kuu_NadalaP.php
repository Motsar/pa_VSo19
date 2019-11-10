<?php

$eesti_nadalapaev = array('Pühapäev','Esmaspäev','Teisipäev','Kolmapäev','Neljapäev','Reede','Laupäev');

$nadalaPaev = $eesti_nadalapaev[date('w')];

$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');

$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');

echo $paev,'.',$kuu,' ',$aasta, ' ' ,$nadalaPaev;