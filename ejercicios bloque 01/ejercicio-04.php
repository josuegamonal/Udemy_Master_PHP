<?php

/* 
recoger dos números por la url (parámetros GET) y hacer todas 
las operaciones básicas de una calculadora 
*/

if (isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo $numero1 + $numero2.'<br>';
echo $numero1 - $numero2.'<br>';
echo $numero1 * $numero2.'<br>';
echo $numero1 / $numero2.'<br>';

}else{
    echo "introduce correctamente los valores por la URL";
}




