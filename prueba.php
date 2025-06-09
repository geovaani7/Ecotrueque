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
        <link rel="stylesheet" href="../css/stylesRegistration.css">
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <title>Registro de Usuario</title>
    </head>
    <body>
        <div class="regstro-contenedor">
            <form class="registro-form" action="prueba.php" method="POST">
                <h1>Registro de Usuario</h1>
                <div class="input-contenedor">
                    <label for="nombre">Nombre:</label>
                    <input type="text" autocomplete="off" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="input-contenedor">
                    <label for="apellido">Apellido(s):</label>
                    <input type="apellido" autocomplete="off" id="apellido" name="apellido" placeholder="Apellido" required>
                </div>
                <div class="input-contenedor">
                    <label for="correo">Correo:</label>
                    <input type="text" autocomplete="off" id="correo" name="correo" placeholder="Correo" required>
                </div>
                <div class="input-contenedor">
                    <label for="usuario">Usuario:</label>
                    <input type="text" autocomplete="off" id="usuario" name="usuario" placeholder="Usuario" required>
                </div>
                <div class="input-contenedor">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required>
                </div>
                <div class="input-contenedor">
                    <label for="telefono">Telefono:</label>
                    <input type="Telefono" autocomplete="off" id="telefono" name="telefono" placeholder="Telefono" required>
                </div>
                <div class="enviar">
                    <button type="submit" name="usuarios">Registrarse</button>
                </div>
            </form>
            <div class="login-link">
                <p>¿Ya tienes cuenta?</p>
                <a href="loginoca.php">Iniciar sesión</a>
            </div>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['usuarios'])) {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $telefono = $_POST['telefono'];

        $insertarDatos = "INSERT INTO usuarios VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$contrasena', '$telefono', '')";
        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if ($ejecutarInsertar) {
            header('Location: loginoca.php');
            exit;
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($enlace);
        }
    }
?>
