<?php

/* 
Crear un script en php que tenga 4 variables
 * una tipo array otra string y otra bool y que imprima un mensaje dependiendo
 * del tipo de variable que sea */

$arreglo = ["hola", 55];
$texto = "ejercicio 2";
$numero = 33;
$falso = false;

if (is_array($arreglo)){
    echo "el tipo de dato es un array";
}
echo '<hr>';

if (is_string($texto)){
    echo "el tipo de dato es un string";
}

echo '<hr>';

if (is_integer($numero)){
    echo "el tipo de dato es interger";
}

echo '<hr>';

if (is_bool($falso)){
    echo "el tipo de dato es booleano";
}