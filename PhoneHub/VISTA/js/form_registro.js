document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("registroForm").addEventListener("submit", function (e) {
        e.preventDefault(); // Evita el envío automático del formulario
        validarRegistro();
    });
});

function validarRegistro() {
    
    var mensajesValidacion = document.getElementById('mensajesValidacion_registro');
    mensajesValidacion.innerHTML = '';

    var nombre = document.getElementById('nombre').value.trim();
    var apellido = document.getElementById('apellido').value.trim();
    var email = document.getElementById('email2').value.trim();
    var password1 = document.getElementById('password1').value.trim();
    var password2 = document.getElementById('password2').value.trim();

    if (nombre === ''||apellido === ''||email === ''||password1 === ''||password2 === '' ) {
        agregarMensajeValidacion('Por favor, rellena todos los campos.');
    }

    

    if (email !== '' && !validarEmail(email)) {
        agregarMensajeValidacion('Por favor, ingresa una dirección de correo electrónico válida.');
    }

    if (password1 !== '' && password2 !== '' && password1 !== password2) {
        agregarMensajeValidacion('Las contraseñas no coinciden.');
    }

   

    // Resto de las validaciones según tus necesidades...

    if (mensajesValidacion.innerHTML === '') {
        // Puedes enviar el formulario aquí si es válido
        document.getElementById("registroForm").submit();
    }
}

function agregarMensajeValidacion(mensaje) {
    var mensajesValidacion = document.getElementById('mensajesValidacion_registro');
    var nuevoMensaje = document.createElement('p');
    nuevoMensaje.style.color = 'red';
    nuevoMensaje.textContent = mensaje;
    mensajesValidacion.appendChild(nuevoMensaje);
}

function validarEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}