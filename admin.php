<?php 
session_start(); 
include('db.php');

if (isset($_POST['correo']) && isset($_POST['contrasena'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$correo = validate($_POST['correo']);
	$contrasena = validate($_POST['contrasena']);

	if (empty($correo)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($contrasena)){
        header("Location: index.php?error=contrasena is required");
	    exit();
	}else{
    $conexion=mysqli_connect("localhost","root","","prueba_db");

    $consulta="SELECT*FROM administrativo where correo='$correo' and contrasena='$contrasena'";
    $resultado=mysqli_query($conexion,$consulta);

		if (mysqli_num_rows($resultado) === 1) {
			$row = mysqli_fetch_assoc($resultado);
            if ($row['correo'] === $correo && $row['contrasena'] === $contrasena) {
            	$_SESSION['correo'] = $row['correo'];
            	$_SESSION['NA '] = $row['NA'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: correo.php");
		        exit();
            }else{
              header("location:admin.html");
		        exit();
			}
		}else{
      header("location:admin.html");
	        exit();
		}
	}
	
}else{
  header("location:admin.html");
	exit();
}