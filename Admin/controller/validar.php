<?php 
//mandar para alumno o administrador
session_start();


if(empty($_REQUEST['email']) or empty($_REQUEST['password'])){
	echo "Debes introducir tus datos<br/>";
	header ("Location: ../index.php");
}
else{
	require_once("variablescon.php");
	$_SESSION['email']=$_REQUEST['email'];
	//var_dump ($_SESSION['email']);
	$_SESSION['password']=$_REQUEST['password'];

	$con = mysqli_connect($host, $user, $pass, $db_name) or die("Error de conexión con la base de datos");
	
	//si introduzco un mail que no existe
	$usuario="select mail from usuarios;";
	$resultado=mysqli_query($con, $usuario);
	while($fila = mysqli_fetch_array($resultado)){
		extract($fila);
		//var_dump ($mail);
		if($mail==$_SESSION['email']){
	
			$mail=$_SESSION['email'];
			$usuario="select * from usuarios where mail='$mail'";
			$resultado=mysqli_query($con, $usuario);
			//echo $resultado;
			$fila = mysqli_fetch_array($resultado);
			//var_dump($fila);
			extract ($fila);
			$_SESSION['usuario']=$tipo_usuario;
			if($_SESSION['password'] != $contrasenia){
				echo "Los datos no coinciden";
				header ("Location: ../index.php");
				//die;
			}
			else if($tipo_usuario == 1){
				header("Location:../../index.php");
				//die;
			}

			else if($tipo_usuario == 2){
				header("Location:../../index.php");
				//die;
			}
		}else {
			header ("Location: ../index.php");
		}
	}	
}

 ?> 
