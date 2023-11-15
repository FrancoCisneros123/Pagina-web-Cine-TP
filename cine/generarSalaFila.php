<?php

$asiento = 1;
$filaNumero = 5;
$filaNombre = $_GET["fila"];

if ($filaNombre == "izquierda") {
    while ($asiento <= $filaNumero) {
        echo " <div class='cine-fila fila-" . $asiento . "' id='fila-izquierda-" . $asiento . "'></div> ";
        $asiento++;
    }
}

if ($filaNombre == "derecha") {
    while ($asiento <= $filaNumero) {
        echo " <div class='cine-fila fila-" . $asiento . "' id='fila-derecha-" . $asiento . "'></div> ";
        $asiento++;
    }
}


?>