<?php
// Conectar a la base de datos
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'prueba_db';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Comprobar si los datos ya existen
$nombre = isset($_POST['txt_nombre']) ? $_POST['txt_nombre'] : '';
$apellido = isset($_POST['txt_apellido']) ? $_POST['txt_apellido'] : '';
$numero = isset($_POST['int_num']) ? $_POST['int_num'] : '';
$usuario = isset($_POST['txt_usuario']) ? $_POST['txt_usuario'] : '';
$cedula = isset($_POST['int_ced']) ? $_POST['int_ced'] : '';
$email = isset($_POST['txt_email']) ? $_POST['txt_email'] : '';
$contrasena = isset($_POST['int_contra']) ? $_POST['int_contra'] : '';
$confirmacion = isset($_POST['int_contra1']) ? $_POST['int_contra1'] : '';

// Encriptar la contraseña y la confirmación
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);
$confirmacion_hash = password_hash($confirmacion, PASSWORD_DEFAULT);

$query = "SELECT * FROM usuarioss WHERE cedula='$cedula'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $msg = "Esta cedula ya está registrado. Por favor, intente con otro.";
    echo "<div class='error'>$msg</div>"; // Mostrar el mensaje de error en la pantalla
    header("Location: form1.html?msg=$msg"); // Redirigir al usuario a la página del formulario con el mensaje de error
} else {
    // Si los datos son únicos, almacenarlos en la base de datos
    $query = "INSERT INTO usuarioss(nombre, apellido, numero, usuario, cedula, email, contrasena, confirmacion) VALUES ('$nombre','$apellido', '$numero', '$usuario', '$cedula', '$email', '$contrasena_hash', '$confirmacion_hash')";
    mysqli_query($conn, $query);
    $msg = "¡Registro exitoso!";
    echo "<div class='success'>$msg</div>"; // Mostrar el mensaje de éxito en la pantalla
    header("Location: indexD.html?msg=$msg"); // Redirigir al usuario a la página del formulario con el mensaje de éxito
}
?>
