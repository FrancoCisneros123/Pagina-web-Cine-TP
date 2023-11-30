<?php

require_once "conexion.php";

//opcion por defecto
echo "<option value='' selected>--Seleccione una opción--</option>";

//si se selecciono un dia se carga los horarios
if ($_GET["dia"] != "")
{
    $sql = "SELECT horario_entrada FROM funcion WHERE id_pelicula = :id_pelicula AND dia = :dia";
    $query = $conn->prepare($sql);
    $query->bindParam(":id_pelicula", $_GET["id_pelicula"]);
    $query->bindParam(":dia", $_GET["dia"]);
    $query->execute();

    $datosDia = $query->fetch();
    echo "<option value='$datosDia[horario_entrada]'>$datosDia[horario_entrada]</option>";
}

?>