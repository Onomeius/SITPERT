<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {

  ?>

  <!doctype html>
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

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/form3.css.css">

    <title>Realice su Solicitud</title>
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
                href="tabla.php">Historial de Tramites</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"
                href="contra.php">Cambio de Credenciales</a>
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

                <form action="registrarS.php" method="post" onsubmit="return confirmation()" class="mb-5">
                  <h3 class="heading mb-4">Realice su Solicitud</h3>
                  <div class="row">
                    <div class="col-md-12 form-group">
                    <input type="number" placeholder="Cédula de Identidad" name="cedula" class="form-control" size="36" maxlength="8" required pattern="\d{8}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="tramites" class="label">*Seleccione el Tramite a Realizar:</label>
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
                          <option value="31">31 - PERMISO SANITARIO B.s. 5</option>
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
    <input type="number" placeholder="Coloque el Código del Tramites:" name="caja" class="form-control"
      size="36" maxlength="40" required pattern="[A-Za-z0-9]+">
      <!-- El atributo "required" hace que el campo sea obligatorio, y "pattern" especifica que solo se permiten letras y números -->
  </div>
</div>
<div class="row">
  <div class="col-md-12 form-group">
    <input type="date" name="calen" placeholder="Coloque la fecha del tramite:"
      class="form-control" required>
      <!-- El atributo "required" hace que el campo sea obligatorio -->
  </div>
</div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="tramites" class="label">*Seleccione el Banco Receptor y Confirme con su Respectivo
                        Código:</label>
                      <select name="bancos" id="Bancos" class="form-control" style="color: rgb(0, 0, 0); ">
                        <option value="">Seleccione... ↓</option>
                        <optgroup label="Bancos">
                          <option value="0">0- Selecciones Bancos</option>
                          <option value="1">1- Banco de Venezuela - 0102</option>
                          <option value="2">2- Venezolano de Crédito - 0104</option>
                          <option value="3">3- Banco Mercantil - 0105</option>
                          <option value="4">4- Banco Bicentenario - 0175</option>
                          <option value="5">5- BNC Nacional de Crédito - 0191</option>
                          <option value="6">6- Banco del Tesoro - 0163</option>
                          <option value="7">7- Banco Banesco - 0134</option>
                          <option value="8">8- Banco Plaza - 0138</option>
                          <option value="9">9- Banco Provincial - 0108</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="row">
  <div class="col-md-12 form-group">
    <input type="text" placeholder="numero seleccionado - 0" name="verificacion" class="form-control"
      size="34" maxlength="40" required> <!-- added 'required' attribute to make the field mandatory -->
  </div>
</div>
<div class="row">
  <div class="col-md-12 form-group">
    <label for="tramites" class="label">*Referencia Bancaria:</label>
    <input type="number" placeholder="Numero de Referencia" name="referencia" class="form-control"
      size="34" maxlength="40" required> <!-- added 'required' attribute to make the field mandatory -->
  </div>
</div>
<div class="row">
  <div class="col-md-12 form-group">
    <label for="tramites" class="label">*Agregue Comprobante de Pago:</label>
    <input type="file" name="archivo" class="form-control" accept="image/*,.pdf" required> <!-- added 'required' attribute to make the field mandatory and restricted the file types to images and pdfs only -->
  </div>
</div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" onclick="" value="Procesar" class="form-label"><br>
                      <a href="impresions.php"><input type="button" class="form-label" href="impresions.php"
                          value="Solicitar Numero de Tramite" id="conf" class="form-control" /></a><br>
                      <input type="reset" value="Limpiar" class="form-label" /><br>
                      <span class="submitting"></span>
                    </div>
                  </div>
                  <script type="text/javascript">
                    function confirmation() {
                      if (confirm("Esta seguro de los datos ingresados??? (NO HABRÁ VUELTA ATRÁS)")) {
                        return true(alert("SOLICITUD REALIZADA, PORFAVOR SOLICITE SU NUMERO DE TRAMITE"));
                      }
                      else {
                        return false(alert("VERIFICAR BIEN SUS DATOS INGRESADOS PORFAVOR"));
                      }
                    }
                  </script>
                  <script src="form3.js"></script>
                  <script src="verificacion.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
                    crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
                    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
                    crossorigin="anonymous"></script>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


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