<?php
session_start();
error_reporting(0);
$var = $_SESSION['id_admin'];
if($var == null || $var = ""){
	echo "NO AUTORIZADO";
	die();
}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Información</title>
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
					<button style="color:green" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
					<a class="navbar-brand animate" href="vistadmin.php"><img src="../img/delta.png" alt="logo1"></a>
				</div>
				<div class="navbar-collapse collapse">
					<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right animate">
						<li><a href="vistadmin.php"></a></li>
						<li><a href="vistadmin.php">Mi Perfil</a></li>
						<li><a href="diccionarioadmin.php">Traductor</a></li>
						<li><a href="administrausu.php">Usuarios</a></li>
					</ul>
				</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
		<div style="position: fixed; z-index: -99; width: 100%; height: 100%"></div>
</body>
<section id="seccion">
			<div class="branded-section numbers">
				<div class="masked">
					<div class="container">
						<div class="heading">
						<br></br>
							<h2>Información Reservada</h2>
							<p>Se pide discresión para manejar está información ya que es 100% confidencial.</p>
						</div>
		
		</script>
		<table id="tabla" style="WIDTH: 250px; HEIGHT: 200px">
		<th>
			<td>
			<img src="../img/img11.png" class="imgRed" >
					<strong> ... </strong> <br />
					<form   method="post" action="../Control/trigger_insert.php">	
					<input type="submit" class="btn btn-primary" value="Ver usuarios registrados" name="opc1">					
					</form>
		</td>
		</th>
		</table>
		<table id="tabla" style="WIDTH: 250px; HEIGHT: 200px">
		<th>
			<td>
			<img src="../img/img12.png" class="imgRed">
					<strong> ... </strong> <br />
					<form   method="post" action="../Control/trigger_update.php">
					<input type="submit" class="btn btn-primary" value="Ver usuarios actualizados" name="opc2"> 
					</form>
		</td>
		</th>
		</table>
		
		</table>
		<table id="tabla" style="WIDTH: 250px; HEIGHT: 200px">
		<th>
			<td>
			<img src="../img/img13.png" class="imgRed">
					<strong> ... </strong> <br />
					<form   method="post" action="../Control/trigger_delete.php">
					<input type="submit" class="btn btn-primary" value="Ver usuarios eliminados" name="opc3"> 
					</form>
		</td>
		</th>
		</table>
		<div class="heading">
							<p>Realizar estas acciones solo si es necesario.</p>
						</div>
		
		<table id="tabla" style="WIDTH: 250px; HEIGHT: 200px">
		<th>
			<td>
			<img src="../img/img14.png" class="imgRed">
					<strong> Escriba id del usuario... </strong> <br />
					<form method="post" action="../Modelo/desac_usu.php">
						<input type="text" name="id_usuario"> 
						<input type="submit" class="btn btn-primary" value="Ver Datos Usuario" name="res"> 
					</form>
		</td>
		</th>
		</table>
			</div>
				</div>
			</div>
		</section>
</section>
  <footer>
			<div class="container">
				<p>&copy; Copyright <a href="#" style="color: green">RedCultural</a> 2022 Derechos Reservados</p>
				
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
	</div>
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