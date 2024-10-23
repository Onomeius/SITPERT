<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {
   $conexion=mysqli_connect("localhost","root","","prueba_db");
   $ddd = $_SESSION['id'];
   $usu = 0;
   $emal = 0;
   $num = 0;
   $subf = 0;
   $con = 0;

   if(isset($_POST['submit'])) {
    $password = $_POST['conc'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
      
      // Actualizar la contraseña en la base de datos
      $query = "UPDATE usuarioss SET contrasena='$hashed_password' WHERE id='$ddd'";
      $result = mysqli_query($conexion, $query);

      if($result) {
         echo "<script>alert('Contraseña actualizada correctamente.')</script>";
      } else {
         echo "<script>alert('Error al actualizar la contraseña.')</script>";
      }
   }
 ?>

<!DOCTYPE html>
 
<html> 
      <head>
             <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="icon" href="images/Circular.png">
        <link rel="stylesheet" href="css/form3.css.css">
        <link rel="Stylesheet" href="css/tabla.css">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    
         <title>Actualizar Credenciales</title>
      </head> 
 
      <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"style=" background: linear-gradient(to right, #0d607c, #0d607c, #0d607c);" >
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
                      <a class="nav-link" style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"href="tabla.php" >Historial de Tramites</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;" href="Form_3.php">Realizar Solicitud</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" style=" color: white;     font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;"href="salir.php">Salir</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  
    
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
  </section>
  <center> <table border="1px" class="form-label" style="color: black">
         
     <tr>
          <td>USUARIO</td>
          <td>Email</td>
          <td>Teléfono</td>
     </tr>
  <br>
  <br>
  <br>
  <br>
      <?php
 
            
      $query = "SELECT * FROM usuarioss where id=' $ddd' ";
 
      $result = mysqli_query($conexion, $query); 
 
      while ($mostrar= mysqli_fetch_array($result)){
         
         ?>
         <tr>
          <td><?php echo $mostrar['usuario']?></td>
          <td><?php echo $mostrar['email']?></td>
          <td><?php echo $mostrar['numero']?></td>

     </tr></center>
   
      <?php
}
      mysqli_free_result($result); 
   
      ?>
      <?php
 
 ?>
   
  </body>
 
      <?php


      if($_GET)
      {
         $querySelectByid = "SELECT id, usuario, contrasena, numero, confirmacion, email FROM usuarioss WHERE id = ".$_GET['id'].";";
 
         $resultSelectByid = mysqli_query($conexion, $querySelectByid); 
 
         $rowSelectByid = mysqli_fetch_array($resultSelectByid);
      ?>
 
 
      <?php

    }    

      mysqli_close($conexion);
      ?>

<div class="form-group col-md-6">
<form  action="contra.php" method="POST" onsubmit="return confirmation()">
         <input type="hidden" value="<?=$rowSelectByid['id'];?>" name="idForm">
         <input type="text" placeholder="USUARIO" name="usuarioform" id="usuarioform" size="36" minlength="4" maxlength="20" class="form-control" style="width: 475px;" required pattern="^[a-zA-Z0-9_]+$"><br/>
         <input type="email" placeholder="EMAIL" name="emailform" id="emailform" size="36" maxlength="50" class="form-control" style="width: 475px;" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br/>
         <input type="tel" placeholder="TELEFONO" name="nume" id="nume" size="36" maxlength="14" class="form-control" style="width: 475px;" required pattern="\(\d{4}\)\d{3}-\d{4}"><br/>
         <input type="text" placeholder="CONTRASEÑA" name="conc" id="conc" size="36" maxlength="40" class="form-control" minlength="8" maxlength="12" style="width: 475px;" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,12}$"><br/>

         <input class="form-label" type="submit" value="Guardar" name="submi" id="submi" ><br/>
         <a  href="contra.php"><input type="button" class="form-label"   href="contra.php"
                                name="ACTUALIZAR TABLA" value="Actualizar tabla" class="input-101"></a>
      <?php


if (isset($_POST['submi'])) {
    $subf= 1;
            $usu = $_POST["usuarioform"];
            $emal = $_POST["emailform"];
            $num = $_POST["nume"];
            $con = $_POST["conc"];
            $password = $_POST['conc'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            

                    }
                    $conex = new PDO("mysql:host=localhost; dbname=prueba_db","root",""); 

                    if ($subf == 1) {
                      $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Reemplaza $password por la variable que contiene la contraseña sin cifrar
                      $sql = "UPDATE usuarioss SET usuario=:usuario, email=:email, numero=:numero, contrasena=:contrasena WHERE id=:id";
                      $stmt = $conex->prepare($sql);
                      $stmt->execute(array(
                          ':usuario' => $usu,
                          ':email' => $emal,
                          ':numero' => $num,
                          ':contrasena' => $hashed_password,
                          ':id' => $ddd
                      ));
                  }
                  

         }  
         else{

     header("Location: indexD.html");

     exit();

}

 ?>
 			<script type="text/javascript">
					function confirmation() {
						if (confirm("Esta seguro de los datos ingresados???")) {
							return true(alert("Datos Recibidos, Porfavor actualice la tabla"));
						}
						else {
							return false; (alert("INGRESE BIEN SUS DATOS"));
						}
					}
				</script>
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