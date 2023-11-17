<?php

require_once "conexion.php";

$sql = "SELECT id_funcion, horario_entrada, id_sala, id_pelicula, dia, formato FROM funcion";
$query = $conn->prepare($sql);
$query->execute();

while($datos = $query->fetch())
{
    echo
    "
        <tr>
            <td>$datos[id_funcion]</td>
            <td>$datos[horario_entrada]</td>
            <td>$datos[id_sala]</td>
            <td>$datos[id_pelicula]</td>
            <td>$datos[dia]</td>
            <td>$datos[formato]</td>
            <td><a href='editar_funcion.php?id_funcion=$datos[id_funcion]'>Editar</a></td>
            <td><a href='eliminar_funcion.php?id_funcion=$datos[id_funcion]'>Eliminar</a></td>
        </tr>";
}

?>

