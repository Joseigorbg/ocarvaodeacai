document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('carousel');
    let currentIndex = 0;
    const totalImages = carousel.children.length;
    const imageWidth = carousel.children[0].clientWidth;

    function moveCarousel() {
        currentIndex = (currentIndex + 1) % totalImages;
        carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    }

    setInterval(moveCarousel, 3000); // Troca de imagem a cada 3 segundos
});
