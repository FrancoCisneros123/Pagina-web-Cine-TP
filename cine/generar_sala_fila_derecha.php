<?php

$asiento = 1;
$filaNumero = 5;

while ($asiento <= $filaNumero) {
    echo " <div class='cine-fila fila-" . $asiento . "' id='fila-derecha-" . $asiento . "'></div> ";
    $asiento++;
}

?>
