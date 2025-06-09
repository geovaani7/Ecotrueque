<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donacion de residuos</title>
        <link rel="stylesheet" href="../css/stylesCompras.css" type="text/css">
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    </head>
    <body>
        <div class="encabezado">
            <h1>Donacion de residuos</h1>
        </div>
        <div class="barra">
            <ul>
                <li><a href="../html/interfaz.html" class="button">Regresar</a></li>
            </ul>
        </div>
        <div class="contenedor">
            <h2>Ofrece tus residuos a EcoTrueque</h2>
            <p>Estamos interesados en materiales reciclables y productos reutilizables. Si tienes algo que desees donar completa el formulario por favor.</p>

            <div class="form-contenedor">
                <form action="#" name="ejemplo" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" autocomplete="off" required>

                    <label for="apellidoPaterno">Apellido Paterno:</label>
                    <input type="text" id="apellidoPaterno" name="apellidoPaterno" autocomplete="off" required>

                    <label for="apellidoMaterno">Apellido Materno:</label>
                    <input type="text" id="apellidoMaterno" name="apellidoMaterno" autocomplete="off" required>

                    <label for="curp">CURP:</label>
                    <input type="text" id="curp" name="curp" autocomplete="off" required>

                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" autocomplete="off" required>

                    <div class="field-row">
                        <div class="field">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" id="telefono" name="telefono" autocomplete="off" required>
                        </div>
                    <div class="field">
                        <label for="tipo">Tipo de Material:</label>
                        <select id="tipo" name="tipo" required>
                            <option value="plástico">Plástico</option>
                            <option value="papel">Papel</option>
                            <option value="vidrio">Vidrio</option>
                            <option value="metal">Metal</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="cantidad">Cantidad (KG):</label>
                        <input type="number" id="cantidad" name="cantidad" required>
                    </div>
                </div>
                <input type="submit" name="donacion" class="submit-button">
            </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>

<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ecotrueque";

    $enlace = new mysqli($servidor, $usuario, $clave, $baseDeDatos);

    if ($enlace->connect_error) {
        die("Conexión fallida: " . $enlace->connect_error);
    }

    if (isset($_POST['donacion'])) {
        echo "Formulario enviado.<br>";

        $nombre = $_POST['nombre'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $curp = $_POST['curp'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $tipo = $_POST['tipo'];
        $cantidad = $_POST['cantidad'];

        echo "Nombre: $nombre<br>";
        echo "Apellido Paterno: $apellidoPaterno<br>";
        echo "Apellido Materno: $apellidoMaterno<br>";
        echo "CURP: $curp<br>";
        echo "Correo: $correo<br>";
        echo "Teléfono: $telefono<br>";
        echo "Tipo: $tipo<br>";
        echo "Cantidad: $cantidad<br>";

        $stmt = $enlace->prepare("INSERT INTO donacion (nombre, apellido_paterno, apellido_materno, curp, correo, telefono, tipo, cantidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("Error en prepare: " . $enlace->error);
        }

        $bind = $stmt->bind_param("sssssssi", $nombre, $apellidoPaterno, $apellidoMaterno, $curp, $correo, $telefono, $tipo, $cantidad);
        if ($bind === false) {
            die("Error en bind_param: " . $stmt->error);
        }

        $execute = $stmt->execute();
        if ($execute) {
            echo "Datos insertados correctamente.<br>";
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script src="../js/donacion.js"></script>';
            echo '<script>donacionExitosa();</script>';
        } else {
            echo "Error en execute: " . $stmt->error . "<br>";
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script src="../js/donacion.js"></script>';
            echo '<script>donacionFallida();</script>';
        }

        $stmt->close();
    }

    $enlace->close();
?>