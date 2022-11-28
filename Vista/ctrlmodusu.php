<?php
session_start();
error_reporting(0);
$var = $_SESSION['id_usuario'];
if($var == null || $var = ""){
	header("Location:../index.html");
	die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modificar Cuenta</title>
	<link rel="icon" href="../img/delta.ico">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/jquery.bxslider.css">
	<script src="../js/modernizr.custom.js"></script>
</head>
<body>

		<!-- Fixed navbar -->
		<div class="navbar navbar-smak navbar-fixed-top " id="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
					<a class="navbar-brand animate" href="vistausuario.php"><img src="../img/delta.png" alt="logo1"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right animate">
						<li><a href="vistausuario.php"></a></li>
						<li><a href="vistausuario.php">Mi Perfil</a></li>
						<li><a href="diccionario.html">Traductor</a></li>
						<li><a href="intro_cursos.php">Cursos</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
		<div style="position: fixed; z-index: -99; width: 100%; height: 100%"></div>
</body>
<section>
<div class="branded-section contact-form">
				<div class="masked">
					<div class="container">
						<div class="heading">
							<br    /><br    /><h1 class="light-font">Modificar mi cuenta</h1><br  />
							
						</div>
		<?php 
			echo '<form action="../Control/usuarioCtrl.php" class="form-horizontal" method="POST">
			<div class="form-group">
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Usuario:" name="id_usuario" class="form-control label_better" value="'.$_SESSION['id_usuario'].'" readonly>
			</div>
		    <br  /><br  /><br   /><br  />
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Ingrese su nuevo nombre:" name="nombre" class="form-control label_better" value="'.$_SESSION['nombre'].'"><br  />
			</div>
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Ingrese su nuevo correo:" name="correo" class="form-control label_better" value="'.$_SESSION['correo'].'"><br  />
			</div>
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Ingrese su nueva contraseña:" name="contrasena" class="form-control label_better" value="'.$_SESSION['contrasena'].'"><br   /><br    />
			</div>
			<input type="submit" class="btn btn-primary"  class="btn btn-primary value="Modificar" name="modificar1">
			</div>
			</form>';
		?>
					</div>
				</div>
			</div>
		</section>
<footer>
			<div class="container">
				<p>&copy; Copyright <a href="#" style="color:green">RedCultural</a> 2022 Derechos Reservados</p>
				<ul class="social-list">
					
				</ul>
				<a href="#" class="square-l goup" style="position: relative">
					<span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
					</span>
				</a>
			</div>
		</footer>

	<!-- Load all jsavascrip files -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="../js/jquery.label_better.js"></script>
	<script type="text/javascript" src="../js/jquery.mixitup.js"></script>
	<script type="text/javascript" src="../js/jquery.easypiechart.js"></script>
	<script type="text/javascript" src="../js/jquery.inview.js"></script>
	<script type="text/javascript" src="../js/countUp.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<script src="../js/grid.js"></script>
	<script>
	$(function() {
		Grid.init();
	});
	</script>
</body>
</html>