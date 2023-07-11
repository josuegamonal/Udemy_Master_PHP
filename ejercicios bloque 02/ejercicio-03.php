<?php

/* 
hacer un programa que comprueba si una variable está vacía
 * si está vacía rellenarla con un texto en minúsculas y mostrarlo en mayúsculas y negrita */


$texto ='';

if (empty($texto)){
    $texto = 'hola mundo';
    echo '<strong>'.strtoupper($texto).'</strong>';
}else {
    echo "la variable tiene este contenido dentro: ".$texto;
}

