document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".car-inicio");
    let currentSlide = 0;

    // Mostrar la primera imagen
    for (let i = 1; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Función para mostrar la siguiente imagen
    function nextSlide() {
        slides[currentSlide].style.display = "none";
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].style.display = "block";
    }

    // Cambiar la imagen cada 3 segundos (3000 milisegundos)
    setInterval(nextSlide, 3000);
});



