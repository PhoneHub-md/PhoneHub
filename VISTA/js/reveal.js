

document.addEventListener("DOMContentLoaded", function () {
    const elementos = document.querySelectorAll(".elemento");

    function mostrarElementos() {
        
        elementos.forEach((elemento) => {
            const elementoTop = elemento.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (elementoTop < windowHeight * 0.75) {
                elemento.style.opacity = "1";
                elemento.style.transform = "translateY(0)";
            }
        });
    }

    window.addEventListener("scroll", mostrarElementos);

    mostrarElementos();
});