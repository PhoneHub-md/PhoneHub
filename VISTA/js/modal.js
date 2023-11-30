document.getElementById("boton_registro").addEventListener("click", function () {
    var modalInicio = new bootstrap.Modal(document.getElementById('modal_inicio_sesion'));
    var modalRegistro = new bootstrap.Modal(document.getElementById('modal_registro'));

    modalInicio.hide();
    modalRegistro.show();
});