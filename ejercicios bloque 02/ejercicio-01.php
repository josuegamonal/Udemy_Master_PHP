<?php

/* 
crear un programa en php que tenga un array con 8 número enteros y que haga lo siguiente:
 * 1. recorrerlo y mostrarlo
 * 2. ordenarlo y mostrarlo
 * 3. mostrar su longitud
 * 4.buscar algo dentro del array y mostrarlo
 *  */

$numeros = [3, 5, 1, 4, 12, 10, 2, 8];

for ($i = 0; $i < count($numeros); $i++){
    echo $numeros[$i].'<br>';
}

echo '<hr>';

sort($numeros);
for ($i = 0; $i < count($numeros); $i++){
    echo $numeros[$i].'<br>';
}

echo '<hr>';

$resultado = count($numeros);
echo $resultado;

echo '<hr>';

$encontrar = array_search(4, $numeros);
echo $numeros[$encontrar];

