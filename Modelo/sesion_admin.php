<?php
	
	$con=mysqli_connect("localhost","root","","redcultural")
	or die("Problema con la conexion a la base de datos");
	
	$id_admin=$_REQUEST['id_admin'];
	$contra=$_REQUEST['contra'];
	
	$datos=mysqli_query($con,"select * from administrador where id_admin='$id_admin' and contra='$contra'")
	or die(mysqli_error($con));
	
	$dat=mysqli_fetch_assoc($datos);
	
	if($dat['id_admin'] == $id_admin && $dat['contra'] == $contra){
		session_start();
		$_SESSION['id_admin']=$dat['id_admin'];
		$_SESSION['nombre']=$dat['nombre'];
		$_SESSION['apellido_pat']=$dat['apellido_pat'];
		$_SESSION['apellido_mat']=$dat['apellido_pat'];
		$_SESSION['correo']=$dat['correo'];
		$_SESSION['contra']=$dat['contra'];
		header("Location:../Vista/vistadmin.php");
	}else{
		echo "Id o correo incorrectos";
		header("Location:../Vista/admin_frm.html");
		
	}
	
?>