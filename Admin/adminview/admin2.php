<?php 
session_start();

if(isset($_SESSION['usuario'])){

	if($_SESSION['usuario']!=2){
	session_destroy();
    echo '<script type="text/javascript">
    alert("You shall not pass");
    window.location.assign("../index.php");
    </script>';

	}else {
	require_once("../admincontroller/variablescon.php");
	$con = mysqli_connect($host, $user, $pass, $db_name) or die("Error de conexión con la base de datos");
    }
    //desconectar
    if(!empty($_REQUEST['desconectar'])){
        session_destroy( );
        //echo "Hasta la próxima";
        header ("Location: ../../index.php");
    }

?> 
	
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="../../css/main.css">
        <title>Administrador</title>
    </head>
    <body>
        <h2>Hola
            <?php
            if(isset($_SESSION['nombre'])){
                echo $_SESSION['nombre'];
            }
            ?>! Bienvenid@
        </h2>
        <form method='post'>
		    <input type='submit' value='Desconectar' name='desconectar'/>
        </form>
    </body>
</html>

<?php 
}  else{
    echo '<script type="text/javascript">
    alert("Debes identificarte");
    window.location.assign("../index.php");
    </script>';
}
?>