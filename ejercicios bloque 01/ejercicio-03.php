<?php

/* 
Escribir un programa que imprima por pantalla 
los cuadrados dde los primeros 40 números naturales
*/

$numero = 0;
$resultado = 0;

while ($numero < 40){
    $resultado = $numero * $numero;
    echo "$resultado<br>";
    $numero++;
}

?>