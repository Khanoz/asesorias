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
        <h2 class="mb-0 text-primary text-uppercase" style="text-align: center"></i>SOLICITUDES DE ASESORÍA</h2>
    </div>
    <table  style=" margin-bottom: 150px">
      <thead>
        <tr style="color: white">
          <th rowspan="2" style="text-align: center">Matricula</th>
          <th rowspan="2" style="text-align: center">Nombre</th>
          <th rowspan="2" style="text-align: center">Apellido Paterno</th>
          <th rowspan="2" style="text-align: center">Apellido Materno</th>
          <th rowspan="2" style="text-align: center">Telefono</th>
          <th rowspan="2" style="text-align: center">Materia</th>
          <th rowspan="2" style="text-align: center">Temas</th>
          <th rowspan="2" style="text-align: center">Comentarios</th>
          <th colspan="2" style="text-align: center">Cambios</th>
        </tr>
        <tr style="color: white">
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
      <thead>
      <tbody>
        <?php
        require_once('db/conexion.php');
        $sql = "SELECT id, userid, user_nombre, user_apP, user_apM, user_telefono, materia, temas, comentarios FROM asesoriastest";
        $consulta = $conexion -> prepare($sql);
        $consulta -> execute();
        $resultado = $consulta -> fetchAll(PDO::FETCH_OBJ);
        if($consulta -> rowCount() > 0){
            foreach($resultado as $registro){
            echo "
                    <tr>
                        <td>".$registro->userid."</td>
                        <td>".$registro->user_nombre."</td>
                        <td>".$registro->user_apP."</td>
                        <td>".$registro->user_apM."</td>
                        <td>".$registro->user_telefono."</td>
                        <td>".$registro->materia."</td>
                        <td>".$registro->temas."</td>
                        <td>".$registro->comentarios."</td>
                        <td><a href='eliminarAsesoria.php?id=".$registro->id."'>Eliminar</a></td>
                        <td><a href='editarSolicitud.php?id=".$registro->id."&matricula=".$registro->userid."&nombre=".$registro->user_nombre."&apP=".$registro->user_apP.
                        "&apM=".$registro->user_apM."&telefono=".$registro->user_telefono."&materia=".$registro->materia.
                        "&temas=".$registro->temas."&comentarios=".$registro->comentarios."'>Editar</a></td>
                    </tr> 
                    ";
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