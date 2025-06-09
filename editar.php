<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ecotrueque";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if (!$enlace) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $idUsuario = $_GET['id'];

    $consultaEditar = "SELECT * FROM usuarios WHERE id = $idUsuario";
    $resultadoEditar = mysqli_query($enlace, $consultaEditar);

    if ($filaEditar = mysqli_fetch_assoc($resultadoEditar)) {
        $nombre = $filaEditar['nombre'];
        $apellidos = $filaEditar['apellido'];
        $correo = $filaEditar['correo'];
        $usuario = $filaEditar['usuario'];
        $contrasena = $filaEditar['contrasena'];
        $telefono = $filaEditar['telefono'];
    } else {
        echo "Usuario no encontrado.";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
        <title>
            Editar Usuario
        </title>
        <link rel="stylesheet" href="../css/stylesEditar.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <body>
        <div class="contenido">
            <h1>
                Editar Usuario
            </h1>
            <form action="procesar_edicion.php" method="post">
                <input type="hidden" name="id" value="<?php echo $idUsuario; ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" autocomplete="off" name="nombre" value="<?php echo $nombre; ?>" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" autocomplete="off" name="apellidos" value="<?php echo $apellidos; ?>" required>

                <label for="correo">Correo:</label>
                <input type="email" id="correo" autocomplete="off" name="correo" value="<?php echo $correo; ?>" required>

                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" autocomplete="off" name="usuario" value="<?php echo $usuario; ?>" required>

                <label for="contrasena">Contraseña:</label>
                <input type="text" id="contrasena" name="contrasena" value="<?php echo $contrasena; ?>" required>

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono"  name="telefono" value="<?php echo $telefono; ?>" required>

                <input type="submit" name="guardar" value="Guardar cambios">
            </form>
        </div>
    </body>
</html>