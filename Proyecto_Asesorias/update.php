
<?php
include_once("db/conexion.php");

$consulta = "UPDATE asesoriastest SET (userid = '".$_GET["id"]."')";
$sql = $conexion -> prepare($consulta);
$sql->execute();
header('location:solicitudesAsesorias.php');
?>