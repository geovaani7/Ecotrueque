<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ecotrueque";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if (!$enlace) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $consultaUsuarios = "SELECT * FROM usuarios";
    $resultadoUsuarios = mysqli_query($enlace, $consultaUsuarios);

    $consultaDonaciones = "SELECT * FROM donacion";
    $resultadoDonaciones = mysqli_query($enlace, $consultaDonaciones);

    $consultaVentas = "SELECT * FROM compra";
    $resultadoVentas = mysqli_query($enlace, $consultaVentas);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Visualizar Datos
        </title>
        <link rel="stylesheet" href="../css/stylesVisualizar.css" type="text/css">
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    </head>
    <body>
        <header class="encabezado">
            <img src="../img/logo.png" width="75px" height="75px">
            <h2>
                EcoTransact
            </h2>
            <ul>
                <li>
                    <a href="../index.html">Cerrar Sesion</a>
                </li>
            </ul>
        </header>

        <div class="contenido">
            <h1>
                Usuarios
            </h1>
            <table class="tabla">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
                <?php while ($filaUsuarios = mysqli_fetch_assoc($resultadoUsuarios)) : ?>
                    <tr>
                        <td><?php echo $filaUsuarios['id']; ?></td>
                        <td><?php echo $filaUsuarios['nombre']; ?></td>
                        <td><?php echo $filaUsuarios['apellido']; ?></td>
                        <td><?php echo $filaUsuarios['correo']; ?></td>
                        <td><?php echo $filaUsuarios['usuario']; ?></td>
                        <td><?php echo $filaUsuarios['contrasena']; ?></td>
                        <td><?php echo $filaUsuarios['telefono']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $filaUsuarios['id']; ?>">Editar</a>
                            <a href="borrar.php?id=<?php echo $filaUsuarios['id']; ?>">Borrar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>

            <h1>
                Donaciones
            </h1>
            <table class="tabla">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Tipo de Material</th>
                    <th>Cantidad</th>
                </tr>
                <?php while ($filaDonaciones = mysqli_fetch_assoc($resultadoDonaciones)) : ?>
                    <tr>
                        <td><?php echo $filaDonaciones['id']; ?></td>
                        <td><?php echo $filaDonaciones['nombre']; ?></td>
                        <td><?php echo $filaDonaciones['apellido_paterno']; ?></td>
                        <td><?php echo $filaDonaciones['correo']; ?></td>
                        <td><?php echo $filaDonaciones['tipo']; ?></td>
                        <td><?php echo $filaDonaciones['cantidad']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>

            <h1>
                Ventas
            </h1>
            <table class="tabla">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Tipo de Material</th>
                    <th>Cantidad</th>
                    <th>Método de Pago</th>
                </tr>
                <?php while ($filaVentas = mysqli_fetch_assoc($resultadoVentas)) : ?>
                    <tr>
                        <td><?php echo $filaVentas['id']; ?></td>
                        <td><?php echo $filaVentas['nombre']; ?></td>
                        <td><?php echo $filaVentas['apellido_paterno']; ?></td>
                        <td><?php echo $filaVentas['correo']; ?></td>
                        <td><?php echo $filaVentas['tipo']; ?></td>
                        <td><?php echo $filaVentas['cantidad']; ?></td>
                        <td><?php echo $filaVentas['metodo_pago']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </body>
</html>
