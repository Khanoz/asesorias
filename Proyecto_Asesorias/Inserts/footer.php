<?php
if(isset($_SESSION['userID'])){
    $pagina = "cerrar_sesion.php";
    $texto = "Cerrar Sesión";
}
else{
    $pagina = "iniciarSesion.php";
    $texto = "Administrador";
}
?>

<footer class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class=" py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">Contáctanos</h4>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-map-marker-alt text-primary"></span>
                    </div>
                    <span>Universidad Anáhuac Cancún</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-phone-alt text-primary"></span>
                    </div>
                    <span>998 881 7750</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-envelope-open text-primary"></span>
                    </div>
                    <span>ingenieria.uac@anahuac.mx</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">Suscríbete</h4>
                <div class="position-relative mb-4">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Tu correo">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Enviar</button>
                </div>
                <div class="d-flex pt-1 m-n1">
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Asesorias Anáhuac</a>, Todos los derechos reservados.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="<?php echo $pagina; ?>" id="login" class="nav-item nav-link" style="margin-left: 300px;"><?php echo $texto; ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>