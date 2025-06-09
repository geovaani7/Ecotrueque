<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ecotrueque";

    $enlace = new mysqli($servidor, $usuario, $clave, $baseDeDatos);

    if ($enlace->connect_error) {
        die("Conexión fallida: " . $enlace->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/stylesLogin.css" type="text/css">
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
        <title>Iniciar Sesión</title>
    </head>
    <body>
        <div class="IS-contenedor">
            <form class="IS-form" action="#" method="POST" novalidate>
                <h1>Iniciar Sesión</h1>
                <div class="input-contenedor">
                    <label for="email">Correo:</label>
                    <input type="text" autocomplete="off" id="email" name="correo" placeholder="Correo" aria-autocomplete="none" required>
                </div>
                <div class="input-contenedor">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="contraseña" placeholder="Contraseña" required>
                </div>
                <input type="submit" name="iniciar" value="Iniciar Sesión">
            </form>
            <div class="registro-link">
                <p>¿No tienes una cuenta?</p>
                <a href="prueba.php">Registrarse</a>
            </div>
        </div>
    </body>
</html>

<?php
    if (isset($_POST['iniciar'])) {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contraseña'];

        if (empty($correo) || empty($contrasena)) {
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script src="../js/login.js"></script>';
            echo '<script>error()</script>';
        } else {
            $stmt = $enlace->prepare("SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?");
            $stmt->bind_param("ss", $correo, $contrasena);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($datos = $result->fetch_object()) {
                header("Location: interfaz.html ");
                exit;
            } else {
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
                echo '<script src="../js/login.js"></script>';
                echo '<script>incorrecto()</script>';
            }

            $stmt->close();

            $co = "admin1@gmail.com";
            $cont = "admin";

            if ($correo == $co && $contrasena == $cont) {
                header("Location: visualizar.php");
                exit;
            }
        }
    }

    $enlace->close();
?>
