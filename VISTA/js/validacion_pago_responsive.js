document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("pagoFormResponsive").addEventListener("submit", function (event) {
        event.preventDefault();
        
        validarPagoResponsive();
    })
})

function validarPagoResponsive() {
    

    var mensajesValidacionPagoResponsive = document.getElementById('mensajesValidacion_pagarResponsive');
    mensajesValidacionPagoResponsive.innerHTML = '';

    var nombrePago = document.getElementById("nombrePagoResponsive").value.trim();
    var apellidoPago = document.getElementById("apellidoPagoResponsive").value.trim();
    var email3 = document.getElementById("email3Responsive").value.trim();
    var localidad = document.getElementById("localidadResponsive").value.trim();
    var calle = document.getElementById("calleResponsive").value.trim();
    var numero = document.getElementById("numeroResponsive").value.trim();
    var tarjeta = document.getElementById("tarjetaResponsive").value.trim();

    if (nombrePago === "" || email3 === "" || localidad === "" || calle === "" || numero === "" || apellidoPago === "" || tarjeta === "") {
        agregarMensajeValidacionPagoResponsive('Por favor, rellena todos los campos.');
    }

    // Validación del campo Correo
    if (email3 !== "" && !validarCorreoElectronico(email3)) {
        agregarMensajeValidacionPagoResponsive('Dirección de correo no válida');
    }

    // Validación del campo Tarjeta de crédito
    if (tarjeta !== "" && !validarTarjetaCredito(tarjeta)) {
        agregarMensajeValidacionPagoResponsive('Tarjeta de crédito no válida');
    }

    if (mensajesValidacionPagoResponsive.innerHTML === '') {
        // Puedes enviar el formulario aquí si es válido
        // Note: Remove the following line to allow natural form submission
        // document.getElementById("pagoFormResponsive").submit();
    }
}

function agregarMensajeValidacionPagoResponsive(mensaje) {
    var mensajesValidacionPagoResponsive = document.getElementById('mensajesValidacion_pagarResponsive');
    var nuevoMensaje = document.createElement('p');
    nuevoMensaje.style.color = 'red';
    nuevoMensaje.textContent = mensaje;
    mensajesValidacionPagoResponsive.appendChild(nuevoMensaje);
}

// Función de validación de correo electrónico
function validarCorreoElectronico(correo) {
    // Expresión regular para validar el formato de correo electrónico
    var regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regexCorreo.test(correo);
}

// Función de validación de tarjeta de crédito
function validarTarjetaCredito(numeroTarjeta) {
    numeroTarjeta = numeroTarjeta.replace(/\s/g, '');

    if (!/^\d+$/.test(numeroTarjeta)) {
        return false;
    }

    var digitos = numeroTarjeta.split('').map(Number);
    digitos.reverse();

    var suma = 0;

    for (var i = 0; i < digitos.length; i++) {
        var digito = digitos[i];

        if (i % 2 === 1) {
            digito *= 2;

            if (digito > 9) {
                digito -= 9;
            }
        }

        suma += digito;
    }

    return suma % 10 === 0;
}