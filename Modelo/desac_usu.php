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
					<a class="navbar-brand animate" href="../Vista/vistadmin.php"><img src="../img/delta.png" alt="logo"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right animate">
						<li><a href="../Vista/vistadmin.php"></a></li>
						<li><a href="../Vista/vistadmin.php">Mi Perfil</a></li>
						<li><a href="../Vista/diccionarioadmin.php">Traductor</a></li>
						<li><a href="../Vista/administrausu.php">Usuarios</a></li>	
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
						<br></br>
							<h1 class="light-font">Datos Usuario</h1><br  />
<?php
	$id_usuario=$_REQUEST['id_usuario'];
	$con=mysqli_connect("localhost","root","","redcultural")
	or die("Problema con la conexion a la base de datos");
	$registros=mysqli_query($con,"select * from usuarios where id_usuario='$id_usuario'") or  
	die("Problemas en el select:".mysqli_error()); 
	if ($reg=mysqli_fetch_array($registros)) { 
		echo '<form action="#" class="form-horizontal" method="post">
		<div class="form-group">
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Usuario:" name="id_usuario" class="form-control label_better" value="'.$reg['id_usuario'].'" readonly>
			</div>
		    <br  /><br  /><br   /><br  />
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Nombre:" name="nombre" class="form-control label_better" value="'.$reg['nombre'].'"><br  />
			</div>
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Apellido paterno:"  name="nombre" class="form-control label_better" value="'.$reg['apellido_pat'].'"><br  />
			</div>
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Apellido materno:" name="nombre" class="form-control label_better" value="'.$reg['apellido_mat'].'"><br  />
			</div>
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Correo:" name="correo" class="form-control label_better" value="'.$reg['correo'].'"><br  />
			</div>
			<div class="col-sm-4" style="position:relative">
			
				<input type="text" placeholder="Contraseña:" name="contrasena" class="form-control label_better" value="'.$reg['contrasena'].'"><br   /><br    />
			</div>
		</div>
	</form>';
	}else{ 
	 header("Location:../Vista/administrausu.php");
	 echo "Usuario No Existe";
 }
	
	
			mysqli_close($con);
?>
	<a href="../Vista/administrausu.php" class="social-list" style="color: white">Regresar a usuarios</a>
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