<?php

/* 
sacar todos los número pares que hay del 1 al 100 
 */

$numero = 1;

while ($numero <= 100){
    if ($numero % 2 == 0){
        echo $numero.'<br>';
    }
    $numero++;
}

?>

