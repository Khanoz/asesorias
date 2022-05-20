
<?php

if(!isset($_GET["id"])){
    header('location:solicitudesAsesorias.php?msg=Error en el ID');
}

include_once("db/conexion.php");
$consulta = "DELETE FROM asesoriastest WHERE id = :id";
$sql = $conexion -> prepare($consulta);
$sql->bindParam(':id', $_GET["id"]);
$sql->execute();
header('location:solicitudesAsesorias.php');
?>