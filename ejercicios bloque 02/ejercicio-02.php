<?php

/* 
Escribir un programa con pho que añada valores a un array mientas que su longitud sea menor a 
 * 120 y luego mostrarlo por pantalla */

$numeros = [];
$i = 1;
while ($i <= 120){
    array_push($numeros, $i);
    $i++;
}

for ($i = 0; $i < count($numeros); $i++){
    echo $numeros[$i].'<br>';
}
