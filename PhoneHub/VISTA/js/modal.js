/*document.getElementById("boton_registro").addEventListener("click",ocultar);

function ocultar(){
    var modal_inicio = document.getElementById("modal_inicio_sesion");
    var modal_registro = document.getElementById("modal_registro");
    modal_inicio.style.display="none";
    modal_registro.style.display="block"
}*/
document.getElementById("boton_registro").addEventListener("click", function () {
    var modalInicio = new bootstrap.Modal(document.getElementById('modal_inicio_sesion'));
    var modalRegistro = new bootstrap.Modal(document.getElementById('modal_registro'));

    modalInicio.hide();
    modalRegistro.show();
});