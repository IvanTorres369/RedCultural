<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Formulario de Registro">
		<meta name="author" content="Delta9">
		<link rel="stylesheet" href="../css/estilpro.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/font-awesome.css">
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/jquery.bxslider.css">
		<script src="../js/modernizr.custom.js"></script>
		<title> Red Cultural </title>
	</head>
	<body>
		<!-- Fixed navbar -->
		<div class="navbar navbar-smak navbar-fixed-top " id="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
					<a class="navbar-brand animate" href="#"><img src=",../img/logo.png" alt="logo1"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right animate">
						
						<li><a href="diccionario.html">Diccionario</a></li>
						<li><a href="aporta.html">Aportaciones</a></li>
						<li><a href="curso.html">Curso</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
		<div style="position: fixed; z-index: -99; width: 100%; height: 100%"></div>
	</body>
	<section id="seccion2">
		<div class="branded-section numbers">
				<div class="masked">
					<div class="container">
						<div class="heading">
			
			<?php
				include "../Modelo/usuario.php";
				$usu= new Usuario();
				$usu->conectar();
					if ($_POST['registrar']){
						$usu->inicializar($_REQUEST['id_usuario'],$_REQUEST['nombre'],$_REQUEST['apellido_pat'],$_REQUEST['apellido_mat'],$_REQUEST['correo'],$_REQUEST['contrasena']);
						$usu->registrarUsuario();
					}
					if ($_POST['iniciar']){
						$usu->iniciaSesion($_REQUEST['id_usuario'],$_REQUEST['contra']);
					}
					if ($_POST['modificar']){
						$usu->datosUsuario($_POST['id_usuario']);
					}
					if ($_POST['modificar1']){
						$usu->modificaDatosUsuario($_POST['nombre'],$_POST['correo'],$_POST['contrasena'],$_POST['id_usuario']);
					}
				$usu->desconectar();
			?>	
					</div>
				</div>
			</div> 
		</div> 
  </section>
 		<footer>
			<div class="container">
				<p>&copy; Copyright <a href="../index.html">RedCultural</a> 2022 Derechos Reservados</p>
				<ul class="social-list">
					<li class="dribbble">
						<a href="admin_frm.html">	<i class="fa fa-dribbble"></i></a>
					</li>
				</ul>
				<a href="#home" class="square-l goup" style="position: relative">
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
	</div>
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