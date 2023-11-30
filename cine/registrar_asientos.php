<?php

require_once "conexion.php";

$arrayAsientos = json_decode($_GET['arrayAsientos']);

foreach ($arrayAsientos as $asiento)
{
    $sql = "INSERT INTO sala_asiento_reservado (id_sala, asiento)
    VALUES (:id_sala, :asiento)";

    $query = $conn->prepare($sql);
    $query->bindParam(":id_sala", $_GET["id_sala"]);
    $query->bindParam(":asiento", $asiento);
    $query->execute();
}

?>