<?php


// defineeri muutujad ja anna väärtused
$ringiRaadius = 5;
// arvuta pindala ja ümbermõõt
$ringiPindala = pi() * ($ringiRaadius * $ringiRaadius);
$ringiUmbermoot = pi() * 2 * $ringiRaadius;
// väljastamine
echo 'ringi raadius = '.$ringiRaadius.'<br>';
//echo 'Ringi pindala = '.$ringiPindala.'<br>';
printf('ringi pindala = %.3f<br>', $ringiPindala);
//echo 'Ringi ümbermõõt = '.$ringiUmbermoot.'<br>';
printf('ringi ümbermõõt = %.3f<br>', $ringiUmbermoot);