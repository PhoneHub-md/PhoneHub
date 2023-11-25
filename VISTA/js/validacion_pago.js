document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("pagoForm").addEventListener("submit", function (event) {
        event.preventDefault();
        validarPago();
    })
})
        function validarPago(){
        
            var mensajesValidacionPago = document.getElementById('mensajesValidacion_pagar');
            mensajesValidacionPago.innerHTML = '';

        var nombrePago = document.getElementById("nombrePago").value.trim();
        var apellidoPago = document.getElementById("apellidoPago").value.trim();
        var email3 = document.getElementById("email3").value.trim();
        var localidad = document.getElementById("localidad").value.trim();
        var calle = document.getElementById("calle").value.trim();
        var numero = document.getElementById("numero").value.trim();
        var tarjeta = document.getElementById("tarjeta").value.trim();


        if (nombrePago === "" || email3 === "" || localidad === "" || calle === "" || numero === "" || apellidoPago === "" || tarjeta === "") {
            agregarMensajeValidacionPago('Por favor, rellena todos los campos.');
            
        }

        // Validación del campo Correo
        if (email3 !== "" && !validarCorreoElectronico(email3)) {
            agregarMensajeValidacionPago('Dirección de correo no válida');
        }

        // Validación del campo Tarjeta de crédito
        if (tarjeta !== "" && !validarTarjetaCredito(tarjeta)) {
            agregarMensajeValidacionPago('Tarjeta de crédito no válida');
        }

        if (mensajesValidacion.innerHTML === '') {
            // Puedes enviar el formulario aquí si es válido
            document.getElementById("pagoForm").submit();
        }
    }
 

function agregarMensajeValidacionPago(mensaje) {
    var mensajesValidacionPago = document.getElementById('mensajesValidacion_pagar');
    var nuevoMensaje = document.createElement('p');
    nuevoMensaje.style.color = 'red';
    nuevoMensaje.textContent = mensaje;
    mensajesValidacionPago.appendChild(nuevoMensaje);
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