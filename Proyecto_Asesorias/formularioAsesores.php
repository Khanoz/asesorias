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

    <div class="divImg">
    <div style="float: left; width: 35%;">
        <form class="margin marginTop form" action="validar_asesor.php" method="post">
            <div class="centerDiv marginTop" style="width:400px;">
                <h2 class="mb-0 text-primary text-uppercase" style="text-align: left"></i>AGREGA A UN ASESOR</h2>
            </div>
            <div class="centerDiv marginTop">
                <input class="centerObjects form__field" type="text" name="nombre" id="" placeholder="Nombre" required="required">
            </div>
            <div class="centerDiv">
                <input class="centerObjects form__field" type="text" name="appP" id="" placeholder="Apellido Paterno" required="required">
            </div>
            <div class="centerDiv">
                <input class="centerObjects form__field" type="text" name="appM" id="" placeholder="Apellido Materno" required="required">
            </div>
            <div class="centerDiv">
                <input class="centerObjects form__field" type="int" name="matricula" id="" placeholder="Matricula" required="required" pattern="[0-9]{8}">
            </div>
            <div class="centerDiv">
                <input class="centerObjects form__field" type="text" name="horario" id="" placeholder="Horario" required="required">
            </div>
            <div class="centerDiv">
                <textarea class="centerObjects form__field" type="text" name="materias" id="" placeholder="Materias Impartidas" required="required"></textarea>
            </div>
            <div class="centerDiv marginTop">
                <button class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block" type="submit" name="agregarAsesor">Añadir asesor</button>
            </div>
        </form>
    </div>
        <img class="imgForm" src="img/Ing-Anahuac.jpg">
    </div>

    <!-- footer -->
    <?php
        include("inserts/footer.php")
    ?>
</body>