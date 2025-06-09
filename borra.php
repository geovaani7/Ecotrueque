<?php
	$servidor = "localhost";
	$usuario = "root";
	$clave = "";
	$baseDeDatos = "ecotrueque";

	$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);
?>

<!DOCTYPE html>
<html lang="es">
	<head>
  		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>
			Eliminar Cuenta
		</title>
		<link rel="stylesheet" type="text/css" href="../css/stylesBorra.css">
	</head>
	<body>
  		<form id="deleteForm" method="post" novalidate>
    		<h2>
				Eliminar Cuenta
			</h2>
    		<label for="contraseña">Contraseña:</label>
    		<input type="password" id="contraseña" name="contraseña" required>

    		<input type="submit" name="borrar">
  		</form>

	</body>
</html>
<?php
	if(!empty($_POST['borrar'])){

    	if (empty($_POST['contraseña'])) {
        	echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        	echo '<script src="../js/borra.js"></script>';
        	echo '<script>error()</script>';
    	}  else{

        	$contraseña=$_POST ['contrasena'];

        	$insertarEliminar = "DELETE FROM usuarios WHERE contrasena = '$contraseña' ";
        	$cont =" SELECT contrasena FROM usuarios";
    
        	$ejecutar = mysqli_query ($enlace, $insertarEliminar);
        	header("location:loginoca.php");

    	}
	}
?>