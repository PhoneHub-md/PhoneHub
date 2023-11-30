document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("registroForm").addEventListener("submit", function (e) {
        e.preventDefault();
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

    if (contieneNumeros(nombre) || contieneNumeros(apellido)) {
        agregarMensajeValidacion('El nombre y el apellido no deben contener números.');
    }

    if (email !== '' && !validarEmail(email)) {
        agregarMensajeValidacion('Por favor, ingresa una dirección de correo electrónico válida.');
    }

    if (password1 !== '' && !esContrasenaFuerte(password1)) {
        agregarMensajeValidacion('La contraseña debe tener al menos 8 caracteres, incluir letras mayúsculas, minúsculas, números y caracteres especiales.');
    }

    if (password1 !== '' && password2 !== '' && password1 !== password2) {
        agregarMensajeValidacion('Las contraseñas no coinciden.');
    }

    if (mensajesValidacion.innerHTML === '') {
        document.getElementById("registroForm").submit();
    }
}

function agregarMensajeValidacion(mensaje) {
    var mensajesValidacion = document.getElementById('mensajesValidacion_registro');
    var nuevoMensaje = document.createElement('p');
    nuevoMensaje.style.color = 'white';
    nuevoMensaje.textContent = mensaje;
    mensajesValidacion.appendChild(nuevoMensaje);
}

function validarEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function esContrasenaFuerte(contrasena) {
    var longitudMinima = 8;
    var contieneMayuscula = /[A-Z]/.test(contrasena);
    var contieneMinuscula = /[a-z]/.test(contrasena);
    var contieneNumero = /\d/.test(contrasena);
    var contieneEspecial = /[!@#$%^&*(),.?":{}|<>]/.test(contrasena);

    return (
        contrasena.length >= longitudMinima &&
        contieneMayuscula &&
        contieneMinuscula &&
        contieneNumero &&
        contieneEspecial
    );
}

function contieneNumeros(texto) {
    var numerosRegex = /\d/;
    return numerosRegex.test(texto);
}