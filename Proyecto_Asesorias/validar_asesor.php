<?php
include_once("db/conexion.php");
if(isset($_POST["agregarAsesor"])){
    $matricula = $_POST["matricula"];
    $nombre = $_POST["nombre"];
    $appM = $_POST["appM"];
    $appP = $_POST["appP"];
    $horario = $_POST["horario"];
    $materias = $_POST["materias"];
    $consulta = "INSERT INTO asesores (as_id, as_nombre, as_apP, as_apM, as_horario, as_materias)
     VALUES (:matricula, :nombre, :app, :apm, :horario, :materias)";
    echo $consulta;
    $sql = $conexion -> prepare($consulta);
    $sql->bindParam(':matricula', $matricula);
    $sql->bindParam(':nombre', $nombre);
    $sql->bindParam(':app', $appP);
    $sql->bindParam(':apm', $appM);
    $sql->bindParam(':horario', $horario);
    $sql->bindParam(':materias', $materias);
    $sql->execute();
    header('location:tablaAsesoresAdmin.php');
}
else{
    
    header('location:tablaAsesoresAdmin.php?msg=Error al agregar asesor');
}
?>