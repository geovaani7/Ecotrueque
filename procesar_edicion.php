<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ecotrueque";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if (!$enlace) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    if (isset($_POST['guardar'])) {
        $id_usuario = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $telefono = $_POST['telefono'];

        $actualizarDatos = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', correo='$correo', usuario='$usuario', contrasena='$contrasena', telefono='$telefono' WHERE id='$id_usuario'";

        $ejecutarActualizar = mysqli_query($enlace, $actualizarDatos);

        if ($ejecutarActualizar) {
            $response = array(
                'status' => 'success',
                'message' => 'Los datos se actualizaron correctamente.'
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Hubo un error en la actualización.'
            );
        }

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }
    } else {
        echo "Error: Los datos del formulario no se recibieron correctamente.";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
        <title>
            Resultado de la Actualización
        </title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="../js/editar.js"></script>
    </head>
    <body>
        <div>
            <?php
                if (isset($response)) {
                    if ($response['status'] === 'success') {
                        echo '<script>mostrarAlertaExitosa("' . $response['message'] . '");</script>';
                    } else {
                        echo '<script>mostrarAlertaError("' . $response['message'] . '");</script>';
                    }
                }
            ?>
        </div>
    </body>
</html>
