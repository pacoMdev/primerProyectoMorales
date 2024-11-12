document.addEventListener('DOMContentLoaded', () => {
    const carouselSlides = document.querySelector('.containerCarrusel');
    const slides = document.querySelectorAll('.containerCarrusel .slide');
    const indicators = document.querySelectorAll('.dott');
    const totalSlides = slides.length;
    let currentIndex = 0;
    let interval;

    function updateIndicators(index) {
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }

    function showSlide(index) {
        currentIndex = index;
        const offset = -currentIndex * 100; // Desplazamiento para la slide seleccionada
        carouselSlides.style.transform = `translateX(${offset}%)`;
        updateIndicators(currentIndex); // Actualiza el indicador activo
    }

    function showNextSlide() {
        showSlide((currentIndex + 1) % totalSlides);
    }

    // Cambia de slide cada 5 segundos
    function startAutoSlide() {
        interval = setInterval(showNextSlide, 5000);
    }

    function stopAutoSlide() {
        clearInterval(interval);
    }

    // Añadir listeners a cada indicador
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            stopAutoSlide();        // Pausar el cambio automático al seleccionar una slide manualmente
            showSlide(index);       // Cambia a la slide seleccionada
            startAutoSlide();       // Reinicia el cambio automático
        });
    });

    // Iniciar el cambio de slide automático y mostrar la primera imagen al cargar
    startAutoSlide();
    updateIndicators(currentIndex);
});
