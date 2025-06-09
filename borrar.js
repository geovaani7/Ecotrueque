document.addEventListener('DOMContentLoaded', function () {
    function procesarRespuesta(response) {
        if (response.status === 'success') {
            mostrarAlertaExitosa(response.message);
            setTimeout(function () {
                window.location.href = "visualizar.php";
            }, 2000);
        } else {
            mostrarAlertaError(response.message);
            setTimeout(function () {
                window.location.href = "visualizar.php";
            }, 2000);
        }
    }
});

function mostrarAlertaExitosa(mensaje) {
    Swal.fire({
        title: "¡Éxito!",
        text: mensaje,
        icon: "success",
        confirmButtonText: "OK"
    }).then(function () {
        window.location.href = "visualizar.php";
    });
}

function mostrarAlertaError(mensaje) {
    Swal.fire({
        title: "Error",
        text: mensaje,
        icon: "error",
        confirmButtonText: "OK"
    });
}