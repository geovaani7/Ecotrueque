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
            Compra de residuos
        </title>
        <link rel="stylesheet" href="../css/stylesVentas.css" type="text/css">
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    </head>
    <body>
        <div class="encabezado">
            <h1>
                Compra de residuos
            </h1>
        </div>
        <div class="barra">
            <ul>
                <li>
                    <a href="../html/interfaz.html" class="button">Regresar</a>
                </li>
            </ul>
        </div>
        <div class="contenedor">
            <h2>
                Compra tus residuos en EcoTransact
            </h2>
            <p>
                Ofrecemos materiales reciclables y productos reutilizables. Si deseaas algo, completa el formulario por favor.
            </p>

        <div class="form-contenedor">
            <form action="#" name="ejemplo" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" autocomplete="off" required>

                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" autocomplete="off" required>

                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno" autocomplete="off" required>

                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" autocomplete="off" required>

                <label for="edad">Edad:</label>
                <input type="text" id="edad" name="edad" autocomplete="off" required>

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

                    <div class="field">
                        <label for="metodo_pago">Metodo de Pago:</label>
                        <select id="metodo_pago" name="metodo_pago" required>
                            <option value="Tarjeta_de_credito_o_debito">Tarjeta de credito o debito</option>
                            <option value="Efectivo">Efectivo</option>
                        </select>
                    </div>
                </div>
                <input type="submit" name="compra" class="submit-button">
            </form>
            </div>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['compra'])){

        $nombre=$_POST ['nombre'];
        $apellido_paterno=$_POST ['apellido_paterno'];
        $apellido_materno=$_POST ['apellido_materno'];
        $contraseña=$_POST ['contraseña'];
        $edad=$_POST ['edad'];
        $curp=$_POST ['curp'];
        $correo=$_POST ['correo'];
        $telefono=$_POST ['telefono'];
        $tipo=$_POST ['tipo'];
        $cantidad=$_POST ['cantidad'];
        $metodo_pago=$_POST ['metodo_pago'];

        $insertarDatos = "INSERT INTO compra VALUES('$nombre','$apellido_paterno','$apellido_materno','$contraseña','$edad','$curp','$correo','$telefono','$tipo','$cantidad','$metodo_pago','')";

        $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

        if ($ejecutarInsertar) {
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script src="../js/compra.js"></script>';
            echo '<script>compraExitosa();</script>';
        }
    }
?>