<?php

include_once("db/conexion.php");
if(isset($_POST["edit"])){
    $id = $_POST["prev_id"];
    $nombre = $_POST["nombre"];
    $appM = $_POST["appM"];
    $appP = $_POST["appP"];
    $matricula = $_POST["matricula"];
    $horario = $_POST["horario"];
    $materias = $_POST["materias"];
    $consulta = "UPDATE asesores
    SET  as_id = :matricula, as_nombre = :nombre, as_apP = :app, as_apM = :apm, as_horario = :horario, as_materias = :materias
    WHERE as_id = :id ";
    $sql = $conexion -> prepare($consulta);
    $sql->bindParam(':id', $id);
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
    
    header('location:index.php?msg=Error al editar');
}
?>