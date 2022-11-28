<?php
	class Usuario{
		private $id_usuario;
		private $nombre;
		private $apellido_pat;
		private $apellido_mat;
		private $correo;
		private $contrasena;

		
	public function inicializar($id_usuario,$nombre,$apellido_pat,$apellido_mat,$correo,$contrasena){
		$this->id_usuario=$id_usuario;
		$this->nombre=$nombre;
		$this->apellido_pat=$apellido_pat;
		$this->apellido_mat=$apellido_mat;
		$this->correo=$correo;
		$this->contrasena=$contrasena;
	}
	public function conectar(){
		$con=mysqli_connect("localhost","root","","redcultural")
		or die("Problema con la conexion a la base de datos");
		return $con;
	}
	public function registrarUsuario(){
		mysqli_query($this->conectar(),"call proce_usuarios('$this->id_usuario','$this->nombre','$this->apellido_pat','$this->apellido_mat','$this->correo','$this->contrasena')")
										or die("Problemas al registrar al usuario".mysqli_error($this->conectar()));
			
					echo '<strong>Cuenta creada</strong><br>';
					header("Location:../Vista/formulario1.html");
					
	}
	public function iniciaSesion($id_usuario,$contrasena){
		$datos=mysqli_query($this->conectar(),"select * from usuario where id_usuario='$id_usuario' and contrasena='$contrasena'")
			or die(mysqli_error($this->conectar()));
			
			$dat=mysqli_fetch_assoc($datos);
	
			if($dat['id_usuario'] == $id_usuario && $dat['contrasena'] == $contrasena){
				session_start();
				$_SESSION['id_usuario']=$dat['id_usuario'];
				$_SESSION['nombre']=$dat['nombre'];
				$_SESSION['apellido_pat']=$dat['apellido_pat'];
				$_SESSION['apellido_mat']=$dat['apellido_mat'];
				$_SESSION['correo']=$dat['correo'];
				$_SESSION['contrasena']=$dat['contrasena'];
				header("Location:../Vista/vistausuario.php");
			}else{
				echo "Id o correo incorrectos";
				header("Location:../Vista/formulario1.html");
		
			}
	}
	public function datosUsuario($id_usuario){
		$datos=mysqli_query($this->conectar(),"select * from usuarios where id_usuario='$id_usuario'") or  
		die(mysqli_error($this->conectar())); 
			$dat=mysqli_fetch_assoc($datos);
			session_start();
				if($id_usuario==$_SESSION['id_usuario']){
					header("Location:../Vista/ctrlmodusu.php");
				}else{ 
					header("Location:../Vista/modcuenusu.html");
				}
	}
	public function modificaDatosUsuario($nombre,$correo,$contrasena,$id_usuario){
		$datos=mysqli_query($this->conectar(),"update usuarios set nombre='$nombre',correo='$correo',contrasena='$contrasena' where id_usuario='$id_usuario'")
		or die(mysqli_error($this->conectar()));  
		$dat=mysqli_fetch_assoc($datos);
		session_start();
				if($id_usuario==$_SESSION['id_usuario']){
					header("Location:../Vista/ctrlmodusu1.php");
				}
				else{ header("Location:../Vista/ctrlmodusu.php");}
	}
	public function desconectar(){
		mysqli_close($this->conectar());
	}
	}
?>