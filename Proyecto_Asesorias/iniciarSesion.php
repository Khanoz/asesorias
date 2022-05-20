<?php
session_start();
if(isset($_SESSION['userID'])){
    header('location:solicitudesAsesorias.php');
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
        include("inserts/header.html")
    ?>
    <div class="centerDiv" style="height: 500px; margin-top: 80px;">
        <form class="margin form" name="formulario" action="validar_login.php" method="post">
            <div class="centerDiv marginTop">
                <h2 class="mb-0 text-primary text-uppercase" style="text-align: left"></i>INICIA SESIÓN</h2>
            </div>
            <div class="centerDiv marginTop">
                <input class="centerObjects form__field validate" type="email" name="email" id="" placeholder="example@example.com">
            </div>
            <div class="centerDiv">
                <input class="centerObjects form__field validate" type="password" name="password" id="" placeholder="*******">
            </div>
            <div class="centerDiv marginTop">
                <button class='btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block' name="ingresar" type="submit">Iniciar sesion</button>
            </div>
        </form>
    </div>

    <!-- footer -->
    <?php
        include("inserts/footer.php")
    ?>
</body>
<script>
    <?php require_once("js/loginFooter.js");?>
</script>
</html>

