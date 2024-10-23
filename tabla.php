<?php
    session_start();
     $conexion=mysqli_connect("localhost","root","","prueba_db");
     $nu1 = 0;
     ?>
     <?php 

if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="icon" href="images/Circular.png">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="Stylesheet" href="css/tabla.css" />
    <title>Historial de registro</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"style="background: linear-gradient(to right, #0d607c, #0d607c, #0d607c);" >
      <div class="container">
          <a class="navbar-brand font-weight-bold" href="#">
              <span style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;">
              Bienvenido <?php echo $_SESSION['usuario']; ?> a SITPERT</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrincipal"
              aria-controls="navbarPrincipal" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse menu-collapse" id="navbarPrincipal">

              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"href="Form_3.php">Solicitar Tramite</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"href="contra.php">Cambio de Credenciales</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"href="salir.php">Salir</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  </section>
        <!-- De la linea 18 a la 36 se realizo lo que sería el menu de la pagina -->
      </header>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
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
<form action="tabla.php" method="GET" class="mb-5">
<h3 class="heading mb-4">Historial de solicitud</h3>
     <label for="tramites"  class="label" >Ingrese su Cédula</label><br><br>
     <input type="text" placeholder="Ingrese su Cedula" name="ced1"  id="ced1" size="36" maxlength="40" class="form-control"><br/>
     <br>
    
     <input type="submit" onclick="" value="Procesar" name="submit" id="submit" class="form-label">
     <input type="reset" value="Limpiar" class="form-label" /><br><br>
     <label for="tramites"  class="label">Historial:</label><br><br>

     <table border="1px" class="form-label" style="color: black">
         
     <tr>
       
          <td>Cédula</td>
          <td>Fecha</td>
          <td>Referencia</td>
          <td>Código de tramite</td>
     </tr>
     <?php
       if (isset($_GET['submit'])) {
          $nu1= $_GET["ced1"];
          }

$sql="SELECT * from confi where cedula='$nu1'";
$result= mysqli_query($conexion,$sql);
while ($mostrar= mysqli_fetch_array($result)){
    ?>
    <tr>
     <td><?php echo $mostrar['cedula']?></td>
     <td><?php echo $mostrar['fecha']?></td>
     <td><?php echo $mostrar['referencia']?></td>
     <td><?php echo $mostrar['codigo']?></td>
</tr>

     <?php
}
     
     ?>

</table>
</div>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>

<?php 

}else{

     header("Location: indexD.html");

     exit();

}

 ?>