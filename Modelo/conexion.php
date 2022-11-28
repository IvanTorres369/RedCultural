<?php
	$mysqli = new mysqli("localhost","root","","redcultural");
	
		if(mysqli_connect_errno()){
			echo 'Conexion Fallida : ' , mysqli_connect_errno();
			exit();
		}
?>