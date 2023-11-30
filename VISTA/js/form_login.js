document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("loginForm").addEventListener("submit", function (e) {
        e.preventDefault();
        validarLogin();
    });
});

function validarLogin() {
    
    var mensajesValidacion = document.getElementById('mensajesValidacion_login');
    mensajesValidacion.innerHTML = '';

    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();

    if (email === ''||password === '') {
        agregarMensajeValidacionLogin('Por favor, rellena todos los campos.');
    }

    if (mensajesValidacion.innerHTML === '') {
        document.getElementById("loginForm").submit();
    }
}

function agregarMensajeValidacionLogin(mensaje) {
    var mensajesValidacion = document.getElementById('mensajesValidacion_login');
    var nuevoMensaje = document.createElement('p');
    nuevoMensaje.style.color = 'white';
    nuevoMensaje.textContent = mensaje;
    mensajesValidacion.appendChild(nuevoMensaje);
}