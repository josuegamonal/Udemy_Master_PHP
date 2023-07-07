<?php

/* 
programa que muestre todos los numeros entre 
 * dos numeros que nos llegan por GET
 * */

if (isset($_GET['numero1']) && isset($_GET['numero2']))
{
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if ($numero1 > $numero2){
     echo 'numero1 debe ser menor que numero2';
    }
    while ($numero1 <= $numero2){
        echo $numero1.'<br>';
        $numero1++;
   }

    
    
} 
    

 else{
    echo "error, introducir parámetros popr URL";
 }



?>

