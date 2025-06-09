<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ecotrueque";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if (!$enlace) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $id_usuario = $_GET['id'];

        $eliminarDatos = "DELETE FROM usuarios WHERE id='$id_usuario'";

        $ejecutarEliminar = mysqli_query($enlace, $eliminarDatos);

        if ($ejecutarEliminar) {
            $response = array(
                'status' => 'success',
                'message' => 'Los datos se borraron correctamente.'
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Hubo un error en el borrado.'
            );
        }

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }
    } else {
        echo "Error: No se proporcionó un ID para borrar.";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado del Borrado</title>
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="../js/borrar.js"></script>
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