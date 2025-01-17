<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Confirme su Solicitud</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <link rel="icon" href="images/Circular.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="solicitud.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">


        <!-- Style -->
        <link rel="stylesheet" href="css/form3.css.css">

    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"
                style=" background: linear-gradient(to right,  #0d607c, #0d607c, #0d607c);">
                <div class="container">
                    <a class="navbar-brand font-weight-bold" href="#">
                        <span
                            style=" color: white; font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;">
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
                                    href="Form_3.php">Gestionar otros Trámites</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"
                                    href="salir.php">Salir</a>
                            </li>
                        </ul>
                    </div>
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

                                <div class="col-md-6">
                                    <form enctype="multipart/form-data" action="cona.php" method="post"
                                        onsubmit="return confirmation()" class="mb-5">
                                        <h3 class="heading mb-4">Confirme su Solicitud</h3>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="" class="label">Cédula de Identidad</label><br />
                                                <input type="number" placeholder="Cédula de Identidad" name="cedula" class="form-control" size="36" maxlength="10" pattern="^[0-9]+$" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="tramites" class="label">*Seleccione el Tramite a
                                                    Realizado:</label>
                                                <select name="tramites" id="tramites" class="form-control">
                                                <option value="">Seleccione... ↓</option>
                        <optgroup label="SENIAT">
                          <option value="10">10 - RIF B.s. 5</option>
                          <option value="11">11 - Registro de tierras B.s. 5</option>
                          <option value="12">12 - Registro nacional de Exportadores B.s. 5</option>
                          <option value="13">13 - Certificados de Residencia Fiscal B.s. 5</option>
                          <option value="14">14 - Solicitud de copias Certificadas B.s. 5</option>
                          <option value="15">15 - ISLR B.s. 5</option>
                        </optgroup>
                        </optgroup>
                        <optgroup label="GOBERNACIÓN">
                          <option value="30">30 - Solicitud de Donaciones B.s. 5</option>
                          <option value="31">31 - Permiso Sanitario B.s. 5</option>
                          <option value="32">32 - Solicitud de permiso para tanques de agua B.s. 5</option>
                        </optgroup>
                        </optgroup>
                        <optgroup label="BOMBEROS">
                          <option value="40">40 - Curso de manejo de extintores B.s. 5</option>
                          <option value="41">41 - Curso de primeros Auxilios (Básico) B.s. 5</option>
                          <option value="42">42 - Curso de primeros Auxilios (Intermedio) B.s. 5</option>
                          <option value="43">43 - Curso de primeros Auxilios (Avanzado) B.s. 5</option>
                          <option value="44">44 - Curso de control y extinción de incendios B.s. 5</option>
                        </optgroup>
                      </select>
                    </div>
                                        </div>
                                        <div class="row">
    <div class="col-md-12 form-group">
        <input type="date" name="fecha" class="form-control" required />
    </div>
</div>

<div class="row">
    <div class="col-md-12 form-group">
        <label for="" class="label">Referencia Bancaria</label>
        <input type="number" placeholder="Referencia Bancarias" name="referencia" class="form-control" maxlength="50" required>
    </div>
</div>

<div class="row">
    <div class="col-md-12 form-group">
        <label for="" class="label">*Coloque su Numero de planilla</label>
        <input type="number" placeholder="Numero de Solicitud" name="codigo" class="form-control" maxlength="20" required>
    </div>
</div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <input type="submit" value="Procesar" class="form-label"><br>
                                                <input type="reset" value="Limpiar" class="form-label" />
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            function confirmation() {
                                                if (confirm("Esta seguro de los datos ingresados??? (NO HABRA VUELTO ATRAS)")) {
                                                    return true(alert("CONFIRMACION REALIZADA SU TRAMITE SERA PROCESADO EN 72HORAS, YA PUEDE SELECCIONAR EL BOTON DE GESTIONAR OTRO TRAMITE Y SALIR SI DESEA"));
                                                }
                                                else {
                                                    return false(alert("VERIFICAR BIEN SUS DATOS INGRESADOS PORFAVOR"));
                                                }
                                            }
                                        </script>
                                </div>
                            </div>
                            </form>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                                integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
                                crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
                                integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
                                crossorigin="anonymous"></script>
                            </section>
                            <script src="js/jquery-3.3.1.min.js"></script>
                            <script src="js/popper.min.js"></script>
                            <script src="js/bootstrap.min.js"></script>
                            <script src="js/jquery.validate.min.js"></script>
                            <script src="js/main.js"></script>
                            <script src="node_modules/bootstrap/dist/js/jquery.min.js"></script>
                            <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
                            <script src="node_modules/bootstrap/dist/js/popper.min.js"></script>
                            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
                            <!--<section class="main2">
            <img src="images/Circular.png" class="ima" width="50%" height="110%">
        </section>
        <div class="wa"> 
            <div class="main3">
                <div class="conten22">
                    <div class="moneda2">
                        <a title="Imstagran" href="http://www.lostejos.com">
                            <img src=""  /></a>
                    </div></br></br>
                    </div>
                </div>
            <aside class="aside">
            <div class="conten">
        
            <div class="moneda">
      
                <a title="Wasapp" href="http://www.lostejos.com">
                    <img src="" /></a>


            </div>-->
    </body>

    </html>
    <?php

} else {

    header("Location: indexD.html");

    exit();

}

?>