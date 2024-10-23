<?php
$conexion = mysqli_connect("localhost", "root", "", "prueba_db");
$nu1 = 0;
$nu11 = 0;

?>

<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['correo'])) {

     ?>


     <!DOCTYPE html>
     <html lang="en">

     <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport"
               content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
          <link rel="icon" href="images/Circular.png">
          <title>Administración SITPERT</title>
          <link rel="stylesheet" href="fonts/icomoon/style.css">


          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="css/bootstrap.min.css">

          <!-- Style -->
          <link rel="stylesheet" href="css/correonu.css">
          <link rel="stylesheet" href="font-awesome.css">
          <script src="assets/js/jquery-3.2.1.js"></script>
          <script src="assets/js/script.js"></script>
     </head>

     <body>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"
               style=" background: linear-gradient(to right, #0d607c, #0d607c, #0d607c);">
               <div class="container">
                    <a class="navbar-brand font-weight-bold" href="#">
                         <span
                              style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;">
                              Bienvenido
                              <?php echo $_SESSION['correo']; ?> a SITPERT
                         </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrincipal"
                         aria-controls="navbarPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse menu-collapse" id="navbarPrincipal">

                         <ul class="navbar-nav ml-auto">
                              <li class="nav-item">
                              <li class="nav-item">
                                   <a class="nav-link"
                                        style=" color: White;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"
                                        href="docsiptert.php">Documentos SITPERT</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link"
                                        style=" color: White;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"
                                        href="salir.php">Salir</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
          </section>
          <br>
          <br>
          <br>
          <br>
          <aside class="mb-5">
               <form method='enviar.php' action='correo.php' class="form_w">
                    <div class="form-group">
                         <h1 class="heading mb-4">Enviar Trámite</h1>
                         <div class="col-md-12 form-group">
                              <label for="nombre" style="color: black">Nombre de la Entidad Remitente</label>
                              <input type="text" class="form-control" name='nombre' id="nombre"
                                   placeholder="Ingrese el nombre de su entidad Gubernamental">
                         </div>
                         <div class="col-md-12 form-group">
                              <label for="email" style="color: black">Correo del remitente</label>
                              <input type="email" class="form-control" name='email' id="email"
                                   placeholder="Ingrese su correo administrativo">
                         </div>
                         <div class="col-md-12 form-group">
                              <br>
                              <label for="text" style="color: black">Correo Del Receptor</label>
                              <input type="email" class="form-control" name='email' id="email" placeholder="Ingrese el correo del receptor">
                         </div>
                         <div class="col-md-12 form-group">
                              <br>
                              <label for="text" style="color: black">Documento del tramite</label>
                              <input type="file" class="form-control" name='email' id="email" placeholder="">
                         </div>
                         <br>
                         <div class="col-md-12 form-group">
                              <label for="exampleTextarea" style="color: black">Mensaje</label>
                              <textarea class="form-control" name='mensaje' id="mensaje" rows="3"></textarea>
                         </div>
                         <div class="col-md-12 form-group" style="color: black">
                              <input type="checkbox" required style="color: black"> Acepto la política de privacidad.
                         </div><br><br>
                         <div class="col-md-12 form-group">
                              <button class="form-label" type="submit" name="submit" id="submit">Enviar</button>
                              <input type="reset" value="Limpiar" class="form-label" />
                         </div>
               </form><br></br>
          </aside>
          <aside class="mb-5">
               <div class="form2">
                    <form action="correo.php" method="GET">
                         <h1 class="heading mb-4">Buscar datos de usuario por cedula</h1>
                         <input type="text" placeholder="Cédula de usuario" name="ced11" id="ced11" size="36" maxlength="40"
                              class="form-control">
               </div>
               <br>
               <input type="submit" class="form-label" onclick="" value="Procesar" name="submit" id="submit">
               <br /><br />

               <table border="1px" class="tabl2">

                    <tr>
                         <thead>

                              <tr>
                                   <th>NOMBRE</th>
                                   <th>APELLIDO</th>
                                   <th>CEDULA</th>
                                   <th>EMAIL</th>
                         </thead>
                         <tbody>
                    </tr>
                    <?php
                    error_reporting(0);
                    if (isset($_GET['submit'])) {
                         $nu1 = $_GET["ced11"];
                    }

                    $sql = "SELECT * from usuarioss where cedula='$nu1'";
                    $result = mysqli_query($conexion, $sql);
                    while ($mostrar = mysqli_fetch_array($result)) {
                         ?>
                         <tr>
                              <td>
                                   <?php echo $mostrar['nombre'] ?>
                              </td>
                              <td>
                                   <?php echo $mostrar['apellido'] ?>
                              </td>
                              <td>
                                   <?php echo $mostrar['cedula'] ?>
                              </td>
                              <td>
                                   <?php echo $mostrar['email'] ?>
                              </td>
                         </tr>

                         <?php
                    }


                    ?>
                    </tbody>
               </table>
               </div>
          </aside>
          </form>
          <article class="mb-5">
               <div class="form" method="GET" action="correo.php">
                    <form method="GET" action="correo.php">
                         <h1 class="heading mb-4">Solicitudes</h1>
                         <input type="text" class="form-control" placeholder="Ingrese la ID de la solicitud" id="va"
                              name="va" class="va">
                         <br>
                         <div class="row">
                              <div class="col-md-12 form-group">
                                   <input type="submit" class="form-label" onclick="" value="Procesar" name="submit"
                                        id="submit">
                              </div>
                              <center>
                                   <table border="1px"><br>
                                        <tr>
                                             <thead>
                                                  <tr>
                                                       <th>CÉDULA</th>
                                                       <th>TRÁMITE</th>
                                                       <th>FECHA</th>
                                                       <th>REFERENCIA</th>
                                                       <th>ID SITPERT</th>
                                                       <th>ESTATUS</th>
                                             </thead>
                                             <tbody>
                                        </tr>
                                        <?php
                                        error_reporting(0);
                                        $txt = 0;
                                        if (isset($_GET['submit'])) {
                                             $txt = $_GET['va'];
                                        }

                                        $pdo = "UPDATE confi SET   estatus = 'Aprobado' where   codigo ='$txt'";
                                        $ejecutarInser = mysqli_query($conexion, $pdo);

                                        if (!$ejecutarInser) {
                                             echo "error en la linea sql";
                                        }


                                        $sql = "SELECT * from confi where estatus=''";
                                        $result = mysqli_query($conexion, $sql);
                                        while ($mostrar = mysqli_fetch_array($result)) {
                                             ?>
                                             <tr>
                                                  <td class="td1">
                                                       <?php echo $mostrar['cedula'] ?>
                                                  </td>
                                                  <td class="td">
                                                       <?php echo $mostrar['tramites'] ?>
                                                  </td>
                                                  <td class="td">
                                                       <?php echo $mostrar['fecha'] ?>
                                                  </td>
                                                  <td class="td">
                                                       <?php echo $mostrar['referencia'] ?>
                                                  </td>
                                                  <td class="td">
                                                       <?php echo $mostrar['codigo'] ?>
                                                  </td>
                                                  <td class="td">
                                                       <?php echo $mostrar['estatus'] ?>
                                                  </td>

                                             </tr>

                                             <?php
                                        }


                                        ?>


                                        </tbody>
                                   </table>
                              </center>
                         </div>
          </article>
          </form>
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

     header("Location: admin.html");

     exit();

}

?>