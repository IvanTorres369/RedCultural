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
	<title>Modificar Cuenta</title>
	<link rel="icon" href="../img/delta.ico">
	<link rel="stylesheet" href="../css/estilpro.css">
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
					<a class="navbar-brand animate" href="../Vista/vistadmin.php"><img src="../img/delta.png" alt="logo1"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right animate">
					<li><a href="../Vista/vistadmin.php"></a></li>
						<li><a href="../Vista/vistadmin.php">Mi Perfil</a></li>
						<li><a href="../Vista/diccionarioadmin.php">Traductor</a></li>
						<li><a href="../Vista/administrausu.php">Usuarios</a></li>
						<li><a href="#" onclick="alert('En Desarrollo!');"></li>	
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
							<h1 class="light-font">Importación </h1><br  />
<?php
	require '../Classes/PHPExcel/IOFactory.php';
	require '../Modelo/conexion.php';
	
	$nombreArchivo = '../PalabrasTraductor.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	echo '<table border=1>
		  <tr><td>Español</td><td>Nahuatl</td></tr>';
		  
	for($i = 2; $i < $numRows; $i++){
		$espanol = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$nahuatl = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();

		echo '<tr>';
		echo '<td>' .$espanol. '</td>';
		echo '<td>' .$nahuatl. '</td>';
		
		echo '</tr>';
		
		$sql = "INSERT INTO traductor(espanol,nahuatl) 
		        VALUE('$espanol','$nahuatl')";
		$result = $mysqli->query($sql);
	}
	echo '</table>';
?>
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