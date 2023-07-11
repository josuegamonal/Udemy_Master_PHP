<?php

/* 
crear un array con el contenido de la tabla:
ACCION AVENTURA DEPORTES
GTA     ASSASINS    FIFA
COD     CRASH       PES
PUGB    PofPERSIA   MOTO GP
 * 
*/

$tabla = array(
    "Accion" => array("GTA 5", "COD", "PUGB"),
    "Aventura" => array("Assains", "Crash", "P of Persia"),
    "Deportes" => array("FIFA", "PES", "Moto GP")
);

$categorias = array_keys($tabla);
?>

<table border ="1">
    <tr>
        <?php foreach ($categorias as $categoria): ?>
        <th><?=$categoria?></th>
        <?php endforeach;?>
    </tr>
    <tr>
        <td><?= $tabla['Accion'][0]?></td>
        <td><?= $tabla['Aventura'][0]?></td>
        <td><?= $tabla['Deportes'][0]?></td>
    </tr>
        <tr>
        <td><?= $tabla['Accion'][1]?></td>
        <td><?= $tabla['Aventura'][1]?></td>
        <td><?= $tabla['Deportes'][1]?></td>
    </tr>
    <tr>
        <td><?= $tabla['Accion'][2]?></td>
        <td><?= $tabla['Aventura'][2]?></td>
        <td><?= $tabla['Deportes'][2]?></td>
    </tr>
</table>