<?php
function checkEmpty(){
    return empty($_POST["nombre"]) && empty($_POST["appM"]) && empty($_POST["appP"]) && empty($_POST["matricula"]) && empty($_POST["telefono"]) && empty($_POST["materia"]) && empty($_POST["temas"]) && empty($_POST["comentarios"]);
}

include_once("db/conexion.php");
if(isset($_POST["agendar"])){
    $nombre = $_POST["nombre"];
    $appM = $_POST["appM"];
    $appP = $_POST["appP"];
    $matricula = $_POST["matricula"];
    $telefono = $_POST["telefono"];
    $materia = $_POST["materia"];
    $temas = $_POST["temas"];
    $comentarios = $_POST["comentarios"];
    $consulta = "INSERT INTO  asesoriastest(userid, user_nombre, user_apP, user_apM, user_telefono, materia, temas, comentarios) 
    VALUES (:matricula, :nombre, :app, :apm, :telefono, :materia, :temas, :comentarios)";
    $sql = $conexion -> prepare($consulta);
    $sql->bindParam(':matricula', $matricula);
    $sql->bindParam(':nombre', $nombre);
    $sql->bindParam(':app', $appP);
    $sql->bindParam(':apm', $appM);
    $sql->bindParam(':telefono', $telefono);
    $sql->bindParam(':materia', $materia);
    $sql->bindParam(':temas', $temas);
    $sql->bindParam(':comentarios', $comentarios);
    $sql->execute();
    header('location:index.php?msg=Asesoria agregada exitosamente');
}
else{
    
    header('location:index.php?msg=Usuario no encontrado');
}
?>