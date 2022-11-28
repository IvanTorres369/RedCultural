<?php
	
	$con=mysqli_connect("localhost","root","","redcultural")
	or die("Problema con la conexion a la base de datos");
	
	$id_usuario=$_REQUEST['id_usuario'];
	$contrasena=$_REQUEST['contrasena'];
	
	$datos=mysqli_query($con,"select * from usuarios where id_usuario='$id_usuario' and contrasena='$contrasena'")
	or die(mysqli_error($con));
	
	$dat=mysqli_fetch_assoc($datos);
	
	if($dat['id_usuario'] == $id_usuario && $dat['contrasena'] == $contrasena){
		session_start();
		$_SESSION['id_usuario']=$dat['id_usuario'];
		$_SESSION['nombre']=$dat['nombre'];
		$_SESSION['apellido_pat']=$dat['apellido_pat'];
		$_SESSION['apellido_mat']=$dat['apellido_pat'];
		$_SESSION['correo']=$dat['correo'];
		$_SESSION['contrasena']=$dat['contrasena'];
		header("Location:../Vista/vistausuario.php");
	}else{
		echo "Id o correo incorrectos";
		header("Location:../Vista/formulario1.html");
		
	}
	
?>