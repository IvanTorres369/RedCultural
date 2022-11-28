<?php
session_start();
error_reporting(0);
$var = $_SESSION['id_usuario'];
if($var == null || $var = ""){
	echo "NO AUTORIZADO";
	die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cursos</title>
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
					<button type="button" style="color: green" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
					<a class="navbar-brand animate" href="../Vista/vistausuario.php"><img src="../img/delta.png" alt="logo1"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right animate">
						<li><a href="../Vista/vistausuario.php"></a></li>
						<li><a href="../Vista/vistausuario.php">Mi Perfil</a></li>
						<li><a href="../Vista/diccionario.html">Traductor</a></li>
						<li><a href="../Vista/cursos_otomi.php">Lecciones</a></li>
						<li><a href="../Vista/intro_cursos.php">Cursos</a></li>
					</ul>
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
						
							<br><br/>
							<h2>Lección 2 Comida (hñuni)</h2>
							<p>Presiona la opcion que creas correcta.</p>
						</div>
		
		<table id="tabla" style="display: relative;
       width: 80%; height: 100%; margin-left: 85px;">
		<th>
			
			<?php
        $r1 = $_POST['P1'];
        $r2 = $_POST['P2'];
        $r3 = $_POST['P3'];
        $r4 = $_POST['P4'];
		$r5 = $_POST['P5'];
		$r6 = $_POST['P6'];
		$r7 = $_POST['P7'];
		$r8 = $_POST['P8'];
		$r9 = $_POST['P9'];
		$r10 = $_POST['P10'];
	if($_POST['P1']==null|$_POST['P2']==null|$_POST['P3']==null|$_POST['P4']==null|$_POST['P5']==null|$_POST['P6']==null|$_POST['P7']==null|$_POST['P8']==null|$_POST['P9']==null|$_POST['P10']==null){
			echo"Llena todas las preguntas!!";
		}
		
	 if(isset($_POST['terminar'])&&$_POST['P1']!=null&&$_POST['P2']!=null&&$_POST['P3']!=null&&$_POST['P4']!=null&&$_POST['P5']!=null&&$_POST['P6']!=null&&$_POST['P7']!=null&&$_POST['P8']!=null&&$_POST['P9']!=null&&$_POST['P10']!=null){

		
        $resultado = $r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10;
        if($resultado <= 7){echo "Has reprobado el examen (".$resultado."/10)";}
        if ($resultado>=8){echo "Has aprobado el examen! (".$resultado."/10)";
		echo '</br>Continua con el siguiente crucigrama<br>';
		echo '<br></br><a href="../Crusigrama_otomi/crucigrama.html">Ir a la Actividad 2</a>';
		}
		
        echo "<br></br>Tu resultado es $resultado";
		}
		?>		
					
		
		</th>
		</table>
	
			
			<div class="form-group commands">
			<a href="../Vista/leccion2_otomi.php" class="social-list" style="color: white">Volver a intentar</a>
		    
			</form>
			</div>
				</div>
			</div>
		</section>
<footer>
			<div class="container">
				<p>&copy; Copyright <a href="#" style="color: green">RedCultural</a> 2022 Derechos Reservador</p>
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
</html>