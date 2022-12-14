<?php
	class Administrador{
		private $id_admin;
		private $nombre;
		private $apellido_pat;
		private $apellido_mat;
		private $correo;
		private $contra;

		
	public function inicializar($id_admin,$nombre,$apellido_pat,$apellido_mat,$correo,$contra){
		$this->id_admin=$id_admin;
		$this->nombre=$nombre;
		$this->apellido_pat=$apellido_pat;
		$this->apellido_mat=$apellido_mat;
		$this->correo=$correo;
		$this->contra=$contra;
	}
	public function conectar(){
		$con=mysqli_connect("localhost","root","","redcultural")
		or die("Problema con la conexion a la base de datos");
		return $con;
	}
	public function registrarAdministrador(){
		mysqli_query($this->conectar(),"call proce_admin('$id_admin','$nombre','$apellido_pat','$apellido_mat','$correo','$contra')")
									    or die ("Problemas al registrar administrador".mysqli_error($this->conectar()));
					echo '<strong>Cuenta creada</strong><br>';
					header("Location:../Vista/admin_frm1.html");
					
	}
	public function iniciaSesion($id_admin,$contra){
		$datos=mysqli_query($this->conectar(),"select * from administrador where id_admin='$id_admin' and contra='$contra'")
			or die(mysqli_error($this->conectar()));
			
			$dat=mysqli_fetch_assoc($datos);
	
			if($dat['id_admin'] == $id_admin && $dat['contra'] == $contra){
				session_start();
				$_SESSION['id_admin']=$dat['id_admin'];
				$_SESSION['nombre']=$dat['nombre'];
				$_SESSION['apellido_pat']=$dat['apellido_pat'];
				$_SESSION['apellido_mat']=$dat['apellido_mat'];
				$_SESSION['correo']=$dat['correo'];
				$_SESSION['contra']=$dat['contra'];
				header("Location:../Vista/vistadmin.php");
			}else{
				header("Location:../Vista/admin_frm.html");
		
			}
	}
	public function datosAdministrador($id_admin){
		$datos=mysqli_query($this->conectar(),"select * from administrador where id_admin='$id_admin'") or  
		die(mysqli_error($this->conectar())); 
			$dat=mysqli_fetch_assoc($datos);
			session_start();
				if($id_admin==$_SESSION['id_admin']){
					header("Location:../Vista/vistadmin.php");
				}else{ 
					header("Location:../Vista/admin_frm1.html");
				}
	}
	public function modificaDatosAdministrador($nombre,$correo,$contra,$id_admin){
		$datos=mysqli_query($this->conectar(),"update administrador set nombre='$nombre',correo='$correo',contra='$contra' where id_admin='$id_admin'")
		or die(mysqli_error($this->conectar()));  
		$dat=mysqli_fetch_assoc($datos);
		session_start();
				if($id_admin==$_SESSION['id_admin']){
					header("Location:../Vista/.php");
				}
				else{ header("Location:../Vista/.php");}
	}
	public function listarDatosRegistrados(){
		  $registros=mysqli_query($this->conectar(),"select * from reg_usuarios") or    
		  die(mysqli_error($this->conectar()));    
			echo '<table aling="center">';  
				echo '<tr><th>Usuario</th><th>Nombre</th><th>Correo</th><th>Fecha Registro</th>';   
			while ($reg=mysqli_fetch_array($registros))   
				{    
			echo '<tr><td>'.$reg['id_usuario'].'</td>';   
			echo '<td>'.$reg['nombre'].'</td>';
			echo '<td>'.$reg['correo'].'</td>';
			echo '<td>'.$reg['fecha_registro'].'</td>';
				}    
				echo '</table>'; 
	}
	public function listarDatosActualizados(){
		  $registros=mysqli_query($this->conectar(),"select * from actu_usuarios") or    
		  die(mysqli_error($this->conectar()));    
				echo '<table class="tablalistado" style="WIDTH: relative">';  
				echo '<tr><th>Nombre Nuevo</th>
					  <th>Correo Nuevo</th><th>Contrase??a Nueva</th><th>Fecha Actualiza</th>';   
			while($reg=mysqli_fetch_array($registros))   
				{ 
			echo '<tr>'; 
			
			echo '<td>'.$reg['nuevo_nombre'].'</td>';
			echo '<td>'.$reg['nuevo_correo'].'</td>';
			echo '<td>'.$reg['nuevo_contrasena'].'</td>';
			echo '<td>'.$reg['fecha_actualizacion'].'</td>';
				}
			echo '</table>';
	}
	public function listarDatosBajas(){
		  $registros=mysqli_query($this->conectar(),"select * from elemin_usuarios") or    
		  die(mysqli_error($this->conectar()));    
				echo '<table style="WIDTH: relative">';  
				echo '<tr><th>Usu</th><th>Nombre</th><th>Apellido Pater</th><th>Apellido Mater</th><th>Correo</th>
					  <th>Contra</th><th>Fecha Elimin</th>';   
			while($reg=mysqli_fetch_array($registros))   
				{ 
			
				}
			echo '</table>';
	}
	public function desconectar(){
		mysqli_close($this->conectar());
	}
	}
?>