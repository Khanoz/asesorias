<?php
session_start();
if(!isset($_SESSION['userID'])){
  header('location:index.php?error=No ha iniciado sesion');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Asesorias Anáhuac</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <?php
        include("inserts/headerAdmin.html")
    ?>

    <div style="height: 150px; margin-top: 80px">
        <h2 class="mb-0 text-primary text-uppercase" style="text-align: center"></i>LISTA DE ASESORES DISPONIBLES</h2>
    </div>
    <table  class="" style=" margin-bottom: 150px">
      <thead>
        <tr style="color: white">
          <th style="text-align: center">Matricula</th>
          <th style="text-align: center">Nombre</th>
          <th style="text-align: center">Apellido Paterno</th>
          <th style="text-align: center">Apellido Materno</th>
          <th style="text-align: center">Horario</th>
          <th style="text-align: center">Materias</th>
          <th colspan="2" style="text-align: center">Cambios</th>
        </tr>
      <thead>
      <tbody>
        <?php
        require_once('db/conexion.php');
        $sql = "SELECT as_id, as_nombre, as_apP, as_apM, as_horario, as_materias FROM asesores;";
        $consulta = $conexion -> prepare($sql);
        $consulta -> execute();
        $resultado = $consulta -> fetchAll(PDO::FETCH_OBJ);
        if($consulta -> rowCount() > 0){
            foreach($resultado as $registro){
              echo "
                      <tr>
                          <td>".$registro->as_id."</td>
                          <td>".$registro->as_nombre."</td>
                          <td>".$registro->as_apP."</td>
                          <td>".$registro->as_apM."</td>
                          <td>".$registro->as_horario."</td>
                          <td>".$registro->as_materias."</td>
                          <td><a href='eliminarAsesor.php?id=".$registro->as_id."'>Eliminar</a></td>  
                          <td><a href='editarAsesor.php?matricula=".$registro->as_id."&nombre=".$registro->as_nombre."&apP=".$registro->as_apP.
                          "&apM=".$registro->as_apM."&horario=".$registro->as_horario."&materias=".$registro->as_materias."'>Editar</a></td>
                      </tr>";
            }
        }  
      ?> 
      </tbody>
    </table>

    <!-- footer -->
    <?php
        include("inserts/footer.php")
    ?>
</body>