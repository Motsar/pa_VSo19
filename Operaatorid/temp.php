<?php
// defineeri muutujad
// omista väärtused
$celsius = 15;
$fahrenheit = (9 / 5) * $celsius + 32;
// väljasta tulemus täpsusega 2 kohta pärast koma
printf('Temperatuur: %d&deg;C = %.2f&deg;F', $celsius, $fahrenheit);