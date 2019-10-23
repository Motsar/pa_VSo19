<?php
$kodakondsus = 'Eestlane';
$vanus = 16;
$haridus = 'kutseharidus';

if($kodakondsus == 'Eestlane'){
    if($vanus >= 18){
        if ($haridus == 'pohiharidus' or $haridus == 'keskharidus' or $haridus == 'kutseharidus' or $haridus =='korgharidus'){
            echo 'Oled sobilik sojavae kohustlane, ootame sind kevadel ajateenistusse!<br>';
        }
    }else{
        echo 'Oled liiga noor veel!<br>';
    }
}else {
    echo 'Sa ei sobi sojavae kohustlaseks!<br>';
}
?>