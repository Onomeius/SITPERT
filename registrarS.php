<?php
session_start();
$codigo = rand(1, 1000000);
$cedula = isset($_POST['cedula']) ? $_POST['cedula'] : '';
$tramites = isset($_POST['tramites']) ? $_POST['tramites'] : '';
$calen = isset($_POST['calen']) ? $_POST['calen'] : '';
$bancos = isset($_POST['bancos']) ? $_POST['bancos'] : '';
$verificacion = isset($_POST['verificacion']) ? $_POST['verificacion'] : '';
$referencia = isset($_POST['referencia']) ? $_POST['referencia'] : '';
$archivo = isset($_POST['archivo']) ? $_POST['archivo'] : '';


try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=prueba_db", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO solicitud(cedula, tramites, calen, bancos, verificacion, referencia, archivo, codigo) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
    $pdo->bindParam(1, $cedula);
    $pdo->bindParam(2, $tramites);
    $pdo->bindParam(3, $calen);
    $pdo->bindParam(4, $bancos);
    $pdo->bindParam(5, $verificacion);
    $pdo->bindParam(6, $referencia);
    $pdo->bindParam(7, $archivo);
    $pdo->bindParam(8, $codigo);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch (PDOException $error) {
    echo $error->getMessage();
    die();
}

if ($pdo) {

    header("location:Form_3.php");

} else {
    header("Form_3.php");
    ?>
    <?php
    include("Form_3.php");

}
?>