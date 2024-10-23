<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Solicitud</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <link rel="icon" href="images/Circular.png">
        <link rel="stylesheet" href="css/form3.css.css">
        <link rel="Stylesheet" href="css/tabla.css">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/5932e916d0.js" crossorigin="anonymous"></script>
        <script src="solicitud.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    </head>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"
            style=" background: linear-gradient(to right, #0d607c, #0d607c, #0d607c);">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="#">
                    <span
                        style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;">
                        Bienvenido
                        <?php echo $_SESSION['usuario']; ?> a SITPERT
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrincipal"
                    aria-controls="navbarPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse menu-collapse" id="navbarPrincipal">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
              <a class="nav-link"
                style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"
                href="javascript:history.back()">Volver</a>
            </li>
            </div>
        </nav>
        </section>
        <!-- De la linea 18 a la 36 se realizo lo que sería el menu de la pagina -->

        </header>

        <div class="content">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">


                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="imgxd">
                                    <p style="color: white"></p>

                                    <p><img src="images/Circular.png" alt="Image" class="img-fluid"></p>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <form action="impresion.php" method="post" autocomplete="off">
                                    <h3 class="heading mb-4">*TODO LISTO*</h3>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="" class="label">Por favor Tramita su Numero de solicitud para ser
                                                Procesado y Confirmado en la siguiente ventana.</label><br />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <button type="submit" name="codigo" class="form-label"
                                                onclick="mialerta()">Imprimir su Numero de tramite<a
                                                    href="impresion.php" download></a></button>
                                            <script>
                                                function mialerta() {
                                                    alert("¡SOLICITUD TRAMITADA, GRACIAS POR PREFERIR A SITPERT! PORFAVOR PROCESADA A CONFIRMAR SU SOLICITUD");
                                                } 
                                            </script>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <a href="descargar.php"><input type="button" class="form-label"
                                                            value="Enviar Documento de numero de tramite"
                                                            class="input-101"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            </form>
                            <script src="verificacion.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                                integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
                                crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
                                integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
                                crossorigin="anonymous"></script>
                            <script src="js/jquery-3.3.1.min.js"></script>
                            <script src="js/popper.min.js"></script>
                            <script src="js/bootstrap.min.js"></script>
                            <script src="js/jquery.validate.min.js"></script>
                            <script src="js/main.js"></script>
                            <script src="node_modules/bootstrap/dist/js/jquery.min.js"></script>
                            <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
                            <script src="node_modules/bootstrap/dist/js/popper.min.js"></script>
                            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>

    </html>
    <?php

} else {

    header("Location: indexD.html");

    exit();

}

?>