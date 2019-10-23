<?php
$ridA = 10;
echo '<table style="text-align:left">';
  echo '<tr>';
    echo '<th>Arv </th>';
    echo '<th>Kuup </th>';
    echo '<th>Ruut </th>';
    echo '<th>Juur </th>';
  echo '</tr>','<br>';
  for($arv = 1; $arv <= $ridA; $arv++){
      echo '<tr>';
      echo '<th>',$arv,' </th>';
      echo '<th>',pow($arv,2),' </th>';
      echo '<th>',pow($arv,3),' </th>';
      echo '<th>',sqrt($arv),' </th>';
      echo '</tr>','<br>';
  }
echo '</table>';