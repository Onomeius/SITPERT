<?php
session_start();
$cedula = isset($_POST['cedula']) ? $_POST['cedula'] : '';
$tramites = isset($_POST['tramites']) ? $_POST['tramites'] : '';
$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
$referencia = isset($_POST['referencia']) ? $_POST['referencia'] : '';
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';


try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=prueba_db", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO confi(cedula, tramites, fecha, referencia, codigo, estatus) VALUES(?, ?, ?, ?, ?, ?)');
    $pdo->bindParam(1, $cedula);
    $pdo->bindParam(2, $tramites);
    $pdo->bindParam(3, $fecha);
    $pdo->bindParam(4, $referencia);
    $pdo->bindParam(5, $codigo);
    $estatus = ''; // Replace 'default_value' with the default value you want to set for the 'estatus' field
$pdo->bindParam(6, $estatus);
    $pdo->execute();


} catch (PDOException $error) {
    echo $error->getMessage();
    die();
}

if ($pdo) {

    header("location:confi.php");

} else {
    header("confi.php");
    ?>
    <?php
    include("confi.php");

}
?>