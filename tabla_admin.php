<?php
     $conexion=mysqli_connect("localhost","root","","prueba_db");
     $nu1 = 0;
     ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Historial de Registro</title>
    <link rel="Stylesheet" href="css/tablas.css" />
    <link rel="icon" href="images/Circular.png">
</head>
<body>
<header class="header">
        <ul>
            <li><a class="active">Eisen Group</a></li>
            <li><a href="correo.html">Regresar</a></li>
            <li style="float:right"><a href="admin.html">Salir</a></li>
        </ul>
    </header>

<div class="form">
<form  action="tabla.php" method="GET">
<h1 class="titulo">Historial de solicitud</h1>
     <label for="" class="label">Ingrese su Cédula</label><br><br>
     <input type="text" placeholder="Ingrese su Cedula" name="ced1"  id="ced1" size="36" maxlength="40" class="cedula"><br/>
     <br>
    
     <input type="submit" onclick="" value="Procesar" name="submit" id="submit">
     <input type="reset" value="Limpiar"  /><br><br>
     <label for="" class="label">Historial:</label><br><br>

     <table border="1px" class="tabla">
         
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
</body>
</html>