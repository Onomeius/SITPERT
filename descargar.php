<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {

	?>
	<?php
	$conn = new PDO('mysql:host=localhost; dbname=prueba_db', 'root', '') or die(mysql_error());
	if (isset($_POST['submit']) != "") {
		$name = $_FILES['file']['name'];
		$size = $_FILES['file']['size'];
		$type = $_FILES['file']['type'];
		$temp = $_FILES['file']['tmp_name'];
		// $caption1=$_POST['caption'];
		// $link=$_POST['link'];
		$fname = date("YmdHis") . '_' . $name;
		$chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
		if ($chk) {
			$i = 1;
			$c = 0;
			while ($c == 0) {
				$i++;
				$reversedParts = explode('.', strrev($name), 2);
				$tname = (strrev($reversedParts[1])) . "_" . ($i) . '.' . (strrev($reversedParts[0]));
				// var_dump($tname);exit;
				$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
				if ($chk2 == 0) {
					$c = 1;
					$name = $tname;
				}
			}
		}
		$move = move_uploaded_file($temp, "upload/" . $fname);
		if ($move) {
			$query = $conn->query("insert into upload(name,fname)values('$name','$fname')");
			if ($query) {
				header("location:descargar.php");
			} else {
				die(mysql_error());
			}
		}
	}
	?>

	<html>

	<head>
		<title>Confirme su Solicitud</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
		<link rel="icon" href="images/Circular.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="solicitud.js"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
        <link rel="icon" href="images/Circular.png">
        <link rel="stylesheet" href="css/form3.css.css">
        <link rel="Stylesheet" href="css/tabla.css">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"
				style=" background: linear-gradient(to right,  #0d607c, #0d607c, #0d607c);">
				<div class="container">
					<a class="navbar-brand font-weight-bold" href="#">
						<span
							style=" color: white; font-family: Arial, Helvetica, sans-serif; TEXT-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;">
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
                href="javascript:history.back()">Volver</a>
            </li>
            </div>
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

								<br />
								<h3 class="heading mb-4">Ingrese su Documento SITPERT</h3>
								<div class="col-md-6">
									<form enctype="multipart/form-data" action="" name="form" method="post" class="mb-5" onsubmit="return confirmation()">
										<div class="row">
											<div class="col-md-12 form-group">
												<label for="" class="label">Documento de Numero de tramite</label>
												<input class="form-control" type="file" name="file" id="file" /></td>
												<input class="form-label" type="submit" name="submit" id="submit"
													value="Subir" />
												<a href="confi.php"><input type="button" class="form-label"
														value="Confirmar su tramite" class="input-101"></a>
											</div>
										</div>
										<script type="text/javascript">
                    function confirmation() {
                      if (confirm("Esta seguro de los datos ingresados??? (NO HABRÁ VUELTA ATRÁS)")) {
                        return true(alert("DOCUMENTO ENVIADO, PORFAVOR CONFIRME SU TRAMITE"));
                      }
                      else {
                        return false(alert("VERIFICAR BIEN SUS DATOS INGRESADOS PORFAVOR"));
                      }
                    }
                  </script>
									</form>
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