<?php

$asiento = 1;
$filas = 5;

while ($asiento <= $filas) {
    echo " <div class='cine-fila fila-" . $asiento . "' id='fila-izquierda-" . $asiento . "'></div> ";
    $asiento++;
}
?>