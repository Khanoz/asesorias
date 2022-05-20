<?php
session_start();
include_once("db/conexion.php");
if(isset($_POST["ingresar"])){
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $consulta="select * from usuarios where email_usuario=:email and password_usuario=:password";
    $sql = $conexion -> prepare($consulta);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':password',sha1($password));
    $sql->execute();
    if($sql->rowCount() > 0){
        $consulta = $sql -> fetchALL(PDO::FETCH_OBJ);
        $i=1;
        foreach($consulta as $registro){
            $_SESSION['userID'] = $registro -> id;
            $_SESSION['userEmail'] = $registro -> email_usuario;
        }
        header('location:solicitudesAsesorias.php');
    }else{
        header('location:index.php?error=Usuario no encontrado');
    }
}
?>