<?php 
session_start(); 
include('db.php');

if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$usuario = validate($_POST['usuario']);
	$contrasena = validate($_POST['contrasena']);

	if (empty($usuario)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($contrasena)){
        header("Location: index.php?error=contrasena is required");
	    exit();
	}else{
    $conexion=mysqli_connect("localhost","root","","prueba_db");

    $consulta="SELECT * FROM usuarioss WHERE usuario='$usuario'";
    $resultado=mysqli_query($conexion,$consulta);

		if (mysqli_num_rows($resultado) === 1) {
			$row = mysqli_fetch_assoc($resultado);
            if (password_verify($contrasena, $row['contrasena'])) {
            	$_SESSION['usuario'] = $row['usuario'];
            	$_SESSION['nombre'] = $row['nombre'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: Form_3.php");
		        exit();
            }else{
              header("location:indexD.html");
		        exit();
			}
		}else{
      header("location:indexD.html");
	        exit();
		}
	}
	
}else{
  header("location:indexD.html");
	exit();
}