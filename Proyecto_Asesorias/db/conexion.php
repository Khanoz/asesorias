<?php
    require_once('parametros.php');
    try{
        $conexion = new PDO('mysql:host='.SERVIDOR.";dbname=".DB,USER,PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }catch(PDOException $e){
        exit("Detalles del error: ".$e->getMessage());
    }
?>