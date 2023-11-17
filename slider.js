let currentIndex = 0;

function change(n) {
    currentIndex += n;
    showSlide();
}

function showSlide() {
    const slides = document.querySelectorAll('.testimonial-slide');
    
    if (currentIndex < 0) {
        currentIndex = slides.length - 1;
    } else if (currentIndex >= slides.length) {
        currentIndex = 0;
    }

    slides.forEach((slide, index) => {
        slide.classList.remove('active');
        if (index === currentIndex) {
            slide.classList.add('active');
        }
    });
}
