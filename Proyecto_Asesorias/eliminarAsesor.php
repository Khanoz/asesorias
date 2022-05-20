
<?php

if(!isset($_GET["id"])){
    header('location:tablaAsesoresAdmin.php?msg=Error en el ID');
}

include_once("db/conexion.php");
$consulta = "DELETE FROM asesores WHERE as_id = :id";
$sql = $conexion -> prepare($consulta);
$sql->bindParam(':id', $_GET["id"]);
$sql->execute();
header('location:tablaAsesoresAdmin.php');
?>