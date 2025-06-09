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
  		<title>Actualizar Cuenta</title>
		<link rel="stylesheet" type="text/css" href="../css/stylesActualizar.css">	
	</head>
	<body>
  		<form id="deleteForm" method="post" novalidate>
    		<h2>Actualizar Cuenta</h2>

    		<label for="usuario">Usuario Anterior:</label>
    		<input type="text" id="usuario" name="usuarion" autocomplete="off" required>

    		<label for="usuario">Nuevo Usuario:</label>
    		<input type="text" id="usuario" name="usuario" autocomplete="off" required>

    		<label for="contraseña">Contraseña:</label>
    		<input type="password" id="contraseña" name="contraseña" autocomplete="off" required>

    		<label for="correo">Correo:</label>
    		<input type="email" id="correo" name="correo" autocomplete="off" required>

    		<label for="telefono">Telefono:</label>
    		<input type="text" id="telefono" name="telefono" autocomplete="off" required>

    		<input type="submit" name="actualizar">
  		</form>
	</body>
</html>
<?php
	if(!empty($_POST['actualizar'])){

    	if (empty($_POST['usuario'] and $_POST['contrasena'] and $_POST['correo'] and $_POST['telefono'])) {
        	echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        	echo '<script src="../js/borra.js"></script>';
        	echo '<script>error()</script>';
    	}  else{

        	$usuarion=$_POST ['usuarion'];
        	$usuario=$_POST ['usuario'];
        	$contraseña=$_POST ['contrasena'];
        	$correo=$_POST ['correo'];
        	$telefono=$_POST ['telefono'];

        	$us =" SELECT usuario FROM usuarios";
        	$cont =" SELECT contraseña FROM usuarios";
        	$co =" SELECT correo FROM usuarios";
        	$tel =" SELECT telefono FROM usuarios";

        	$insertarActualizar = "UPDATE usuarios SET usuario = '$usuario', contrasena = '$contraseña', correo = '$correo', telefono = '$telefono' WHERE usuario = '$usuarion'";
    
        	$ejecutar = mysqli_query ($enlace, $insertarActualizar);
        	header("location:loginoca.php");
    	}
	}
?>