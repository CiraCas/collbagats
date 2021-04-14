<?php 

session_start();


if(empty($_REQUEST['email']) or empty($_REQUEST['password'])){
	echo'<script type="text/javascript">
    alert("Debes introducir tus datos");
    window.location.href="../index.php";
    </script>';

}
else{
	require_once("variablescon.php");
	$con = mysqli_connect($host, $user, $pass, $db_name) or die("Error de conexión con la base de datos");
	
	//si introduzco un mail que no existe
	//$usuario="select mail from usuarios where mail='".$_REQUEST['email']."';";
	$usuario="select mail from usuarios";
	$resultado=mysqli_query($con, $usuario);
	while($fila = mysqli_fetch_array($resultado)){
		extract($fila);
		if($mail==$_REQUEST['email']){
			$_SESSION['email']=$_REQUEST['email'];
			//var_dump ($_SESSION['email']);
			$_SESSION['password']=$_REQUEST['password'];

			$email=$_SESSION['email'];
			$usuario="select * from usuarios where mail='$email'";
			$resultado=mysqli_query($con, $usuario);
			//echo $resultado;
			$fila = mysqli_fetch_array($resultado);
			//var_dump($fila);
			extract ($fila);
			$_SESSION['usuario']=$tipo_usuario;

			if($_SESSION['password'] == $contrasenia){
				if($tipo_usuario == 1){
					header("Location:../adminview/admin1.php");
					
				}
	
				else if($tipo_usuario == 2){
					header("Location:../adminview/admin2.php");
					
				}
				
			}else{
				//print_r($_SESSION['password']);
				//header("Location:../index.php");
				echo '<script type="text/javascript">
				alert("Los datos no coinciden");
				window.location.assign("../index.php");
				</script>';

			}

		}/*else {
			//header ("Location: ../index.php");
			echo '<script type="text/javascript">
				alert("El mail no está registrado");
				window.location.assign("../index.php");
				</script>';
		}*/
	}
	echo '<script type="text/javascript">
				alert("El mail no está registrado");
				window.location.assign("../index.php");
				</script>';	
}

 ?> 
