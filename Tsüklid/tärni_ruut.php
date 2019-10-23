

$ridadeA = 7;
$veergudeA = 7;
for ($rida = 1; $rida <= $ridadeA; $rida++) {
    echo $rida;
    for ($veerg = 1; $veerg <= $rida; $veerg++) {
        if ($rida == $veerg) {
            echo '*';

        } else {
            echo '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;';
        }
    }
    echo '<br>';

}
