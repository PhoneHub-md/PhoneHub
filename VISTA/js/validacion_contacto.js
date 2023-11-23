document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("miFormulario").addEventListener("submit", function (e) {
        e.preventDefault(); // Evita el envío automático del formulario
        validarFormulario();
    });
});

function validarFormulario() {
    
    var mensajesValidacion = document.getElementById('mensajesValidacion_contacto');
    mensajesValidacion.innerHTML = '';

    var nombre = document.getElementById('nombre_contacto').value.trim();
    var apellido = document.getElementById('apellido_contacto').value.trim();
    var email = document.getElementById('email_contacto').value.trim();
    var consulta = document.getElementById('consulta_contacto').value.trim();

    if (nombre === ''||apellido === ''||email === ''||consulta === '') {
        agregarMensajeValidacion('Por favor, rellena todos los campos.');
    }

   

    if (email !== '' && !validarEmail(email)) {
        agregarMensajeValidacion('Por favor, ingresa una dirección de correo electrónico válida.');
    }

    

    if (mensajesValidacion.innerHTML === '') {
        mensajesValidacion.innerHTML = '<p>Formulario enviado con éxito</p>';
    }
}

function agregarMensajeValidacion(mensaje) {
    var mensajesValidacion = document.getElementById('mensajesValidacion_contacto');
    var nuevoMensaje = document.createElement('p');
    nuevoMensaje.style.color = 'red';
    nuevoMensaje.textContent = mensaje;
    mensajesValidacion.appendChild(nuevoMensaje);
}

function validarEmail(email) {
    // Utiliza una expresión regular u otra lógica para validar el formato del email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}