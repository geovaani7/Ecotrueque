function error() {
    Swal.fire({
        title: "Error al Iniciar Sesion",
        text: "Campos vacios, favor de llenarlos",
        icon: "error",
        confirmButtonText: "Aceptar"
    });
}

function incorrecto() {
    Swal.fire({
        title: "Error al Iniciar Sesion",
        text: "Correo o contraseña incorrecto(s)",
        icon: "error",
        confirmButtonText: "Aceptar"
    });
}