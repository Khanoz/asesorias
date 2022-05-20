<?php
session_start();
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
            <div style="justify-content: space-around; display: flex">
                <div style="float: left; width:190px; height:200px;">
                    <form class="margin marginTop form" action="validar_edit.php" method="post">
                        <div class="centerDiv marginTop" style="width:190px;">
                            <h2 class="mb-0 text-primary text-uppercase" style="text-align: left"></i>EDITAR SOLICITUD</h2>
                        </div>
                        <div class="centerDiv marginTop">
                            <input class="centerObjects form__field" type="text" name="nombre" id="" value="<?php echo $_GET["nombre"]; ?>">
                        </div>
                        <div class="centerDiv">
                            <input class="centerObjects form__field" type="text" name="appP" id="" value="<?php echo $_GET["apP"]; ?>">
                        </div>
                        <div class="centerDiv">
                            <input class="centerObjects form__field" type="text" name="appM" id="" value="<?php echo $_GET["apM"]; ?>">
                        </div>
                        <div class="centerDiv">
                            <input class="centerObjects form__field" type="int" name="matricula" id="" value="<?php echo $_GET["matricula"]; ?>">
                        </div>
                        <div class="centerDiv">
                            <input class="centerObjects form__field" type="int" name="telefono" id="" value="<?php echo $_GET["telefono"]; ?>">
                        </div>
                        <div class="centerDiv">
                            <input class="centerObjects form__field" type="text" name="materia" id="" value="<?php echo $_GET["materia"]; ?>">
                        </div>
                        <div class="centerDiv">
                            <textarea class="centerObjects form__field" type="text" name="temas" id="" ><?php echo $_GET["temas"]; ?></textarea>
                        </div>
                        <div class="centerDiv">
                            <textarea class="centerObjects form__field" type="text" name="comentarios" id=""><?php echo $_GET["comentarios"]; ?></textarea>
                        </div>
                        <input type="hidden" name="id" value='<?php echo $_GET['id'];?>'>
                        <div class="centerDiv marginTop">
                            <button class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block" type="submit" name="edit">Editar</button>
                        </div>
                    </form>
                </div>
                <div>
                    <table  style=" margin-bottom: 300px; margin-top: 300px">
                    <thead>
                        <tr>
                        <th rowspan="2">Matricula</th>
                        <th rowspan="2">Nombre</th>
                        <th rowspan="2">Apellido Paterno</th>
                        <th rowspan="2">Apellido Materno</th>
                        <th rowspan="2">Telefono</th>
                        <th rowspan="2">Materia</th>
                        <th rowspan="2">Temas</th>
                        <th rowspan="2">Comentarios</th>
                        </tr>
                    <thead>
                    <tbody>
                        <?php
                        require_once('db/conexion.php');
                        $sql = "SELECT userid, user_nombre, user_apP, user_apM, user_telefono, materia, temas, comentarios FROM asesoriastest WHERE id=".$_GET["id"];
                        $consulta = $conexion -> prepare($sql);
                        $consulta -> execute();
                        $resultado = $consulta -> fetchAll(PDO::FETCH_OBJ);
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
                            </tr> ";
                        }
                        
                        ?>
                    </table>
                </div>
            </div>
    </tbody>

    <!-- footer -->
    <?php
        include("inserts/footer.php")
    ?>
</body>