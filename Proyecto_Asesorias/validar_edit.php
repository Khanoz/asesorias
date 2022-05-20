<?php

include_once("db/conexion.php");
if(isset($_POST["edit"])){
    $id = $_POST["id"];
    /*settype($id, "int");
    echo gettype($id);*/
    $nombre = $_POST["nombre"];
    $appM = $_POST["appM"];
    $appP = $_POST["appP"];
    $matricula = $_POST["matricula"];
    $telefono = $_POST["telefono"];
    $materia = $_POST["materia"];
    $temas = $_POST["temas"];
    $comentarios = $_POST["comentarios"];
    $consulta = "UPDATE asesoriastest
    SET  userid = :matricula, user_nombre = :nombre, user_apP = :app, user_apM = :apm, user_telefono = :telefono, materia = :materia, temas = :temas, comentarios = :comentarios
    WHERE id = :id ";
    $sql = $conexion -> prepare($consulta);
    $sql->bindParam(':id', $id);
    $sql->bindParam(':matricula', $matricula);
    $sql->bindParam(':nombre', $nombre);
    $sql->bindParam(':app', $appP);
    $sql->bindParam(':apm', $appM);
    $sql->bindParam(':telefono', $telefono);
    $sql->bindParam(':materia', $materia);
    $sql->bindParam(':temas', $temas);
    $sql->bindParam(':comentarios', $comentarios);
    $sql->execute();
    header('location:solicitudesAsesorias.php');
}
else{
    
    header('location:index.php?msg=Error al editar');
}
?>