<?php

/* 
mostrar las tablas del 1 al 10 dentro de una tabla html
*/


echo "<table border='1px'><tr>";
echo "<tr>";//fila uno de celdas
    for ($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }
echo "</tr>";//cierre fila 1

echo "<tr>";//fila dos de celdas
    for ($i = 1;$i <= 10; $i++){
        echo "<td>";
            for($numero = 0; $numero <= 10; $numero++){
               echo "$i x $numero = ".$i * $numero.'<br>';
            }
        echo "</td>";
    }
echo "</tr>";//cierre fila dos de celdas

echo "</tr> </table>";

?>