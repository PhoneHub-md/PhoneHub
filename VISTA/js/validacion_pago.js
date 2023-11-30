document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("pagoForm").addEventListener("submit", function (event) {
        event.preventDefault();
        validarPago();
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

        if (contieneNumeros(nombrePago) || contieneNumeros(apellidoPago)) {
            agregarMensajeValidacionPago('El nombre y el apellido no deben contener números.');
        }

        if (email3 !== "" && !validarCorreoElectronico(email3)) {
            agregarMensajeValidacionPago('Dirección de correo no válida');
        }

        if (tarjeta !== "" && !validarTarjetaCredito(tarjeta)) {
            agregarMensajeValidacionPago('Tarjeta de crédito no válida');
        }
        
        if (numero !== "" && isNaN(numero)) {
            agregarMensajeValidacionPago('Por favor, introduce solo números en el campo "Número".');
        }

        if (mensajesValidacionPago.innerHTML === '') {
            document.getElementById("pagoForm").submit();
            alert("Pago realizado con éxito");
        }
    }
 

    function agregarMensajeValidacionPago(mensaje) {
        var mensajesValidacionPago = document.getElementById('mensajesValidacion_pagar');
        var nuevoMensaje = document.createElement('p');
        nuevoMensaje.style.color = 'white';
        nuevoMensaje.textContent = mensaje;
        mensajesValidacionPago.appendChild(nuevoMensaje);
    }

    function validarCorreoElectronico(correo) {
        var regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regexCorreo.test(correo);
    }

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

    function contieneNumeros(texto) {
        var numerosRegex = /\d/;
        return numerosRegex.test(texto);
    }
})